require('dotenv').config();
const express = require('express');
const admin = require('firebase-admin');
const path = require('path');
const session = require('express-session');
const FirebaseStore = require('connect-session-firebase')(session);

const app = express();
const PORT = 3000;

// Inisialisasi Firebase Admin SDK
const serviceAccount = {
  type: process.env.TYPE,
  project_id: process.env.PROJECT_ID,
  private_key_id: process.env.PRIVATE_KEY_ID,
  private_key: process.env.PRIVATE_KEY.replace(/\\n/g, '\n'), // penting!
  client_email: process.env.CLIENT_EMAIL,
  client_id: process.env.CLIENT_ID,
  auth_uri: process.env.AUTH_URI,
  token_uri: process.env.TOKEN_URI,
  auth_provider_x509_cert_url: process.env.AUTH_PROVIDER_X509_CERT_URL,
  client_x509_cert_url: process.env.CLIENT_X509_CERT_URL
};
admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: "https://project-services-d3f00-default-rtdb.asia-southeast1.firebasedatabase.app/"
});

const db = admin.database();

// Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(express.static('public'));

const store = new FirebaseStore({
    database: db
});
// Session middleware
app.use(session({
    store: store, // 👈 Gunakan Firebase sebagai penyimpan sesi
    secret: process.env.SESSION_SECRET || 'a-very-strong-secret-key', // 🚨 AMBIL DARI .env!
    resave: false,
    saveUninitialized: false,
    cookie: { 
        secure: process.env.NODE_ENV === 'production', // true jika di production (HTTPS)
        maxAge: 1000 * 60 * 60 * 24 * 7 // Cookie berlaku selama 7 hari
    }
}));
// Jika aplikasi Anda berjalan di belakang proxy (seperti Nginx, Heroku, dll.)
if (process.env.NODE_ENV === 'production') {
    app.set('trust proxy', 1); 
}

// Routes untuk halaman HTML

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});
app.get('/register', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'register.html'));
});

app.get('/login', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'login.html'));
});
app.get('/read/:encodedId', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'read.html'));
});


// Middleware untuk proteksi route admin
const adminAuth = (req, res, next) => {
  if (!req.session.user || req.session.user.role !== 'admin') {
    return res.redirect('/login'); // langsung arahkan ke /login
  }
  next();
};

app.get('/admin', adminAuth, (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'admin.html'));
});
app.get('/activity', adminAuth, (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'activity.html'));
});
app.get('/gallery', adminAuth, (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'gallery.html'));
});
app.get('/devision', adminAuth, (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'devision.html'));
});
// API Routes
// Endpoint untuk registrasi Google Auth
app.post('/api/register', async (req, res) => {
  try {
    const { idToken } = req.body;
    
    // Verifikasi token dari Google
    const decodedToken = await admin.auth().verifyIdToken(idToken);
    const { uid, name, email, picture } = decodedToken;

    // Cek apakah user sudah ada di database
    const userRef = db.ref('users/' + uid);
    const snapshot = await userRef.once('value');
    
    if (snapshot.exists()) {
      return res.json({
        success: false,
        message: 'User sudah terdaftar'
      });
    }

    // Simpan data user baru dengan role admin
    const userData = {
      uid: uid,
      name: name,
      email: email,
      profileIcon: picture,
      role: 'admin',
      createdAt: admin.database.ServerValue.TIMESTAMP
    };

    await userRef.set(userData);

    res.json({
      success: true,
      message: 'Registrasi berhasil',
      user: userData
    });

  } catch (error) {
    console.error('Error saat registrasi:', error);
    res.status(500).json({
      success: false,
      message: 'Terjadi kesalahan saat registrasi'
    });
  }
});

// Endpoint untuk login Google Auth
app.post('/api/login', async (req, res) => {
  try {
    const { idToken } = req.body;
    
    // Verifikasi token dari Google
    const decodedToken = await admin.auth().verifyIdToken(idToken);
    const { uid } = decodedToken;

    // Ambil data user dari database
    const userRef = db.ref('users/' + uid);
    const snapshot = await userRef.once('value');
    
    if (!snapshot.exists()) {
      return res.json({
        success: false,
        message: 'Akun tidak ditemukan! Anda tidak memiliki akses untuk silahkan hubungi developer'
      });
    }

    const userData = snapshot.val();
    
    // Simpan session
    req.session.user = userData;

    res.json({
      success: true,
      message: 'Login berhasil',
      user: userData
    });

  } catch (error) {
    console.error('Error saat login:', error);
    res.status(500).json({
      success: false,
      message: 'Terjadi kesalahan saat login'
    });
  }
});

// Endpoint untuk logout
app.post('/api/logout', (req, res) => {
  req.session.destroy((err) => {
    if (err) {
      return res.status(500).json({
        success: false,
        message: 'Terjadi kesalahan saat logout'
      });
    }
    res.json({
      success: true,
      message: 'Logout berhasil'
    });
  });
});

// Endpoint untuk cek status login
app.get('/api/user', (req, res) => {
  if (req.session.user) {
    res.json({
      success: true,
      user: req.session.user
    });
  } else {
    res.json({
      success: false,
      message: 'User belum login'
    });
  }
});

// Endpoint khusus admin - contoh API
app.get('/api/admin/users', adminAuth, async (req, res) => {
  try {
    const usersRef = db.ref('users');
    const snapshot = await usersRef.once('value');
    const users = snapshot.val();
    
    res.json({
      success: true,
      users: users
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: 'Terjadi kesalahan saat mengambil data users'
    });
  }
});
// --- API Routes for Activity ---

const activitiesRef = db.ref('activity');

// CREATE Activity
app.post('/api/activity', adminAuth, async (req, res) => {
    try {
        const { title, thumbnail, description } = req.body;
        if (!title || !thumbnail || !description) {
            return res.status(400).json({ success: false, message: 'Semua field wajib diisi.' });
        }

        const newActivityRef = activitiesRef.push(); // Generate unique ID
        const newActivity = {
            id: newActivityRef.key,
            title,
            thumbnail,
            description,
            createdAt: admin.database.ServerValue.TIMESTAMP
        };

        await newActivityRef.set(newActivity);
        res.status(201).json({ success: true, message: 'Aktivitas berhasil ditambahkan.', data: newActivity });

    } catch (error) {
        console.error('Error creating activity:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// READ All Activities
app.get('/api/activity',  async (req, res) => {
    try {
        const snapshot = await activitiesRef.once('value');
        res.json({ success: true, data: snapshot.val() || {} });
    } catch (error) {
        console.error('Error fetching activities:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});
// TAMBAHKAN ENDPOINT API INI UNTUK MENGAMBIL SATU AKTIVITAS BERDASARKAN ID
app.get('/api/activity/:encodedId', async (req, res) => {
    try {
        const { encodedId } = req.params;

        // --- DECODE BASE64 DI SINI ---
        const decodedId = Buffer.from(encodedId, 'base64').toString('ascii');
        // -----------------------------

        const activityRef = db.ref(`activity/${decodedId}`);
        const snapshot = await activityRef.once('value');

        if (snapshot.exists()) {
            res.json({ success: true, data: snapshot.val() });
        } else {
            res.status(404).json({ success: false, message: 'Aktivitas tidak ditemukan.' });
        }
    } catch (error) {
        console.error('Error fetching single activity:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});


// UPDATE Activity
app.put('/api/activity/:id', adminAuth, async (req, res) => {
    try {
        const { id } = req.params;
        const { title, thumbnail, description } = req.body;

        if (!title || !thumbnail || !description) {
            return res.status(400).json({ success: false, message: 'Semua field wajib diisi.' });
        }

        const activityRef = db.ref(`activity/${id}`);
        await activityRef.update({ title, thumbnail, description });

        res.json({ success: true, message: 'Aktivitas berhasil diperbarui.' });

    } catch (error) {
        console.error('Error updating activity:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// DELETE Activity
app.delete('/api/activity/:id', adminAuth, async (req, res) => {
    try {
        const { id } = req.params;
        const activityRef = db.ref(`activity/${id}`);
        await activityRef.remove();

        res.json({ success: true, message: 'Aktivitas berhasil dihapus.' });
    } catch (error) {
        console.error('Error deleting activity:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});
// --- API Routes for Gallery (REVISED) ---

const galleryRef = db.ref('gallery');

// CREATE Gallery Item
app.post('/api/gallery', adminAuth, async (req, res) => {
    try {
        // REVISI: Menggunakan title, thumbnail, description
        const { title, thumbnail, description } = req.body;
        if (!title || !thumbnail || !description) {
            return res.status(400).json({ success: false, message: 'Title, thumbnail, dan description wajib diisi.' });
        }

        const newGalleryItemRef = galleryRef.push();
        const newGalleryItem = {
            id: newGalleryItemRef.key,
            title,
            thumbnail,
            description,
            createdAt: admin.database.ServerValue.TIMESTAMP
        };

        await newGalleryItemRef.set(newGalleryItem);
        res.status(201).json({ success: true, message: 'Item berhasil ditambahkan ke galeri.', data: newGalleryItem });

    } catch (error) {
        console.error('Error creating gallery item:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// READ All Gallery Items
app.get('/api/gallery', async (req, res) => {
    try {
        const snapshot = await galleryRef.once('value');
        res.json({ success: true, data: snapshot.val() || {} });
    } catch (error) {
        console.error('Error fetching gallery items:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// UPDATE Gallery Item
app.put('/api/gallery/:id', adminAuth, async (req, res) => {
    try {
        const { id } = req.params;
        // REVISI: Menggunakan title, thumbnail, description
        const { title, thumbnail, description } = req.body;
        
        if (!title || !thumbnail || !description) {
            return res.status(400).json({ success: false, message: 'Semua field wajib diisi.' });
        }

        await db.ref(`gallery/${id}`).update({ title, thumbnail, description });
        res.json({ success: true, message: 'Item galeri berhasil diperbarui.' });

    } catch (error) {
        console.error('Error updating gallery item:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// DELETE Gallery Item
app.delete('/api/gallery/:id', adminAuth, async (req, res) => {
    try {
        const { id } = req.params;
        await db.ref(`gallery/${id}`).remove();
        res.json({ success: true, message: 'Item berhasil dihapus dari galeri.' });
    } catch (error) {
        console.error('Error deleting gallery item:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});
// --- API Routes for Divisions ---

const divisionsRef = db.ref('divisions');

// CREATE Division Member
app.post('/api/divisions', adminAuth, async (req, res) => {
    try {
        const { name, thumbnail, studyProgram, division } = req.body;
        if (!name || !thumbnail || !studyProgram || !division) {
            return res.status(400).json({ success: false, message: 'Semua field wajib diisi.' });
        }

        const newMemberRef = divisionsRef.push();
        const newMember = {
            id: newMemberRef.key,
            name,
            thumbnail,
            studyProgram,
            division,
            createdAt: admin.database.ServerValue.TIMESTAMP
        };

        await newMemberRef.set(newMember);
        res.status(201).json({ success: true, message: 'Anggota baru berhasil ditambahkan.', data: newMember });

    } catch (error) {
        console.error('Error creating division member:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// READ All Division Members
app.get('/api/divisions', async (req, res) => {
    try {
        const snapshot = await divisionsRef.once('value');
        res.json({ success: true, data: snapshot.val() || {} });
    } catch (error) {
        console.error('Error fetching division members:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// UPDATE Division Member
app.put('/api/divisions/:id', adminAuth, async (req, res) => {
    try {
        const { id } = req.params;
        const { name, thumbnail, studyProgram, division } = req.body;

        if (!name || !thumbnail || !studyProgram || !division) {
            return res.status(400).json({ success: false, message: 'Semua field wajib diisi.' });
        }

        await db.ref(`divisions/${id}`).update({ name, thumbnail, studyProgram, division });
        res.json({ success: true, message: 'Data anggota berhasil diperbarui.' });

    } catch (error) {
        console.error('Error updating division member:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});

// DELETE Division Member
app.delete('/api/divisions/:id', adminAuth, async (req, res) => {
    try {
        const { id } = req.params;
        await db.ref(`divisions/${id}`).remove();
        res.json({ success: true, message: 'Data anggota berhasil dihapus.' });
    } catch (error) {
        console.error('Error deleting division member:', error);
        res.status(500).json({ success: false, message: 'Terjadi kesalahan server.' });
    }
});
app.listen(PORT, () => {
  console.log(`Server berjalan di http://localhost:${PORT}`);
});