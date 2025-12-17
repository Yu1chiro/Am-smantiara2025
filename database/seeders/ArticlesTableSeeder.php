<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Sosialisasi terkait dengan  pelaksanaan program kerja PIPS yakni Literasi  Baca Tulis Literasi Sains,  Literasi Digital, Serta  Literasi Budaya ',
                'slug' => 'sosialisasi-terkait-dengan-pelaksanaan-program-kerja-pips-yakni-literasi-baca-tulis-literasi-sains-literasi-digital-serta-literasi-budaya',
                'thumbnail_url' => 'https://i.pinimg.com/originals/f2/47/51/f24751f98c2ee1462ec9e3c2fab41a1f.png',
            'description' => '<p>Mengikuti kegiatan sosialisasi terkait dengan pelaksanaan program kerja PIPS yakni Literasi Baca Tulis Literasi Sains, Literasi Digital, Serta Literasi Budaya dan Kewarganegaraan dengan kegiatan mengadakan lomba cerpen (cerita pendek) dengan berbagai tema.&nbsp;</p>',
                'created_at' => '2025-12-17 02:02:30',
                'updated_at' => '2025-12-17 02:02:30',
                'tanggal' => '2025-10-22',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Melakukan kegiatan  Technical Meeting terkait  dengan program PIPS  pelaksaan lomba menulis  cerpen ',
                'slug' => 'melakukan-kegiatan-technical-meeting-terkait-dengan-program-pips-pelaksaan-lomba-menulis-cerpen',
                'thumbnail_url' => 'https://i.pinimg.com/originals/cb/97/ed/cb97ed499192e63a46799b7924eb7942.jpg',
            'description' => '<p>Seluruh Mahasiswa Asistensi Mengajar dan ditemani bersama dewan juri mengikuti kegiatan Technical Meeting terkait dengan program PIPS pelaksaan lomba menulis cerpen (Cerita Pendek) yang berlokasi di Gedung Aula SMA Negeri 3 Singaraja.&nbsp;</p>',
                'created_at' => '2025-12-17 02:03:50',
                'updated_at' => '2025-12-17 02:03:50',
                'tanggal' => '2025-10-28',
            ),
            2 => 
            array (
                'id' => 3,
            'title' => 'Berpatisipasi dalam pelaksanaan  program  kerja  Pengembangan dan  Implementasi Program  Startegis (PIPS)  materi tentang Literasi  Numerasi dan Literasi  Finansial di kelas XII H',
                'slug' => 'berpatisipasi-dalam-pelaksanaan-program-kerja-pengembangan-dan-implementasi-program-startegis-pips-materi-tentang-literasi-numerasi-dan-literasi-finansial-di-kelas-xii-h',
                'thumbnail_url' => 'https://i.pinimg.com/originals/52/66/46/5266461f0ff633a082e218013b032b75.jpg',
            'description' => '<p>Melaksanakan serta berpartisipasi dalam pelaksanaan program kerja Pengembangan dan Implementasi Program Startegis (PIPS) materi tentang Literasi Numerasi dan Literasi Finansial di kelas XII H, dengan membawa materi terkait dengan “Pengelolaan Keuangan Pribadi”&nbsp;</p>',
                'created_at' => '2025-12-17 02:07:48',
                'updated_at' => '2025-12-17 02:07:48',
                'tanggal' => '2025-11-12',
            ),
            3 => 
            array (
                'id' => 4,
            'title' => 'dalam pelaksanaan program kerja Pengembangan dan Implementasi Program Startegis (PIPS) materi tentang Literasi Numerasi dan Literasi Finansial ',
                'slug' => 'dalam-pelaksanaan-program-kerja-pengembangan-dan-implementasi-program-startegis-pips-materi-tentang-literasi-numerasi-dan-literasi-finansial',
                'thumbnail_url' => 'https://i.pinimg.com/originals/ef/7d/af/ef7daf6e60d98444c34f61c041d2bac3.png',
            'description' => '<p>Melaksanakan serta berpartisipasi dalam pelaksanaan program kerja Pengembangan dan Implementasi Program Startegis (PIPS) materi tentang Literasi Numerasi dan Literasi Finansial di kelas XII G, dengan membawa materi terkait dengan “Pengelolaan Keuangan Pribadi”&nbsp;</p>',
                'created_at' => '2025-12-17 02:08:48',
                'updated_at' => '2025-12-17 02:08:48',
                'tanggal' => '2025-11-13',
            ),
            4 => 
            array (
                'id' => 5,
            'title' => 'Berpartisipasi dalam pelaksanaan program kerja Pengembangan dan Implementasi Program Startegis (PIPS) materi tentang Literasi Numerasi dan Literasi Finansial ',
                'slug' => 'berpartisipasi-dalam-pelaksanaan-program-kerja-pengembangan-dan-implementasi-program-startegis-pips-materi-tentang-literasi-numerasi-dan-literasi-finansial',
                'thumbnail_url' => 'https://i.pinimg.com/originals/46/97/b8/4697b8932345b80521345567a5cd042e.png',
            'description' => '<p>Melaksanakan serta berpartisipasi dalam pelaksanaan program kerja Pengembangan dan Implementasi Program Startegis (PIPS) materi tentang Literasi Numerasi dan Literasi Finansial di kelas XII I, dengan membawa materi terkait dengan “Pengelolaan Keuangan Pribadi”&nbsp;</p>',
                'created_at' => '2025-12-17 02:09:31',
                'updated_at' => '2025-12-17 02:09:31',
                'tanggal' => '2025-11-13',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Tahap Awal Pembuatan Teba Modern',
                'slug' => 'tahap-awal-pembuatan-teba-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/a0/3c/eb/a03cebc938d5fb8502d8414e3256365c.jpg',
                'description' => '<p>Kegiatan pembuatan teba modern di SMAN 3 Singaraja dimulai pada Senin, 1 Desember 2025. Kegiatan ini dilaksanakan di area dekat kelas XII I dengan fokus pada tahap awal persiapan lahan. Pada tahap ini, peserta melakukan pembersihan area dari rumput liar dan sisa tanah yang tidak rata.</p><p>Selain pembersihan, dilakukan pula pengukuran area teba untuk memastikan ukuran dan posisi sesuai dengan perencanaan. Tahap awal ini sangat penting sebagai dasar agar proses pembangunan teba modern dapat berjalan dengan baik dan terstruktur pada hari-hari berikutnya.</p>',
                'created_at' => '2025-12-17 02:13:12',
                'updated_at' => '2025-12-17 02:13:12',
                'tanggal' => '2025-12-01',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Melanjutkan Pengerjaan Struktur Dasar Teba Modern',
                'slug' => 'melanjutkan-pengerjaan-struktur-dasar-teba-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/0f/66/c2/0f66c268a0a003ae502922c571008db6.jpg',
                'description' => '<p>Pada hari Selasa, kegiatan dilanjutkan dengan pengerjaan struktur dasar teba modern. Setelah lahan dinyatakan siap, peserta mulai menggali dan merapikan bagian tanah sesuai desain teba yang telah direncanakan.</p><p>Proses ini dilakukan secara gotong royong dengan pembagian tugas yang jelas, sehingga pekerjaan dapat berjalan lebih efisien. Pengerjaan struktur dasar bertujuan untuk membentuk pondasi teba agar kuat dan mampu digunakan dalam jangka waktu panjang sebagai sarana pengelolaan lingkungan sekolah.</p>',
                'created_at' => '2025-12-17 02:14:14',
                'updated_at' => '2025-12-17 02:14:14',
                'tanggal' => '2025-12-01',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Pemantapan dan Perapian Area Teba',
                'slug' => 'pemantapan-dan-perapian-area-teba',
                'thumbnail_url' => 'https://i.pinimg.com/originals/02/d8/9f/02d89f451df79e8c224cbb7b6e5ee94a.jpg',
                'description' => '<p>Pada Rabu, 3 Desember 2025, kegiatan difokuskan pada pemantapan dan perapian area teba modern. Tanah yang telah digali sebelumnya dirapikan kembali, serta dilakukan penyesuaian kedalaman dan bentuk agar sesuai dengan standar yang diinginkan.</p><p>Selain itu, peserta juga memastikan area sekitar teba bersih dan aman. Tahap ini menjadi penting untuk memastikan teba modern tidak hanya berfungsi dengan baik, tetapi juga memiliki tampilan yang rapi dan mendukung kebersihan lingkungan sekolah.</p>',
                'created_at' => '2025-12-17 02:15:14',
                'updated_at' => '2025-12-17 02:15:14',
                'tanggal' => '2025-12-03',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Penyempurnaan Pengerjaan Teba Modern',
                'slug' => 'penyempurnaan-pengerjaan-teba-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/bf/9c/ba/bf9cbadb9c4dbc678e8c1084c4e64f4c.jpg',
                'description' => '<p>Pada hari terakhir kegiatan, Kamis, 4 Desember 2025, pengerjaan teba modern memasuki tahap penyempurnaan. Pada tahap ini dilakukan pemasangan dan penyesuaian bagian utama teba, serta pengecekan akhir terhadap struktur yang telah dibuat.</p><p>Kegiatan ini menjadi penutup dari rangkaian pembuatan teba modern di SMAN 3 Singaraja. Dengan selesainya tahap ini, diharapkan teba modern dapat dimanfaatkan secara optimal sebagai sarana pendukung kebersihan dan pengelolaan lingkungan di area sekolah.</p>',
                'created_at' => '2025-12-17 02:15:55',
                'updated_at' => '2025-12-17 02:15:55',
                'tanggal' => '2025-12-04',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Finishing struktur proyek tebe modern',
                'slug' => 'finishing-struktur-proyek-tebe-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/e8/b0/29/e8b02910474c25dd6cd73dfccbc20d5a.jpg',
                'description' => '<p>Pada Jumat, 5 Desember 2025, kegiatan difokuskan pada melanjutkan pengerjaan teba modern hingga tahap finishing struktur. Pada tahap ini dilakukan pengecekan kembali bentuk dan kekuatan teba yang telah dibangun pada hari-hari sebelumnya.</p><p>Beberapa bagian dirapikan agar terlihat lebih rapi dan fungsional. Tahap finishing struktur ini bertujuan memastikan teba modern siap memasuki tahap pengecatan dan estetika, sekaligus meningkatkan daya tahan teba dalam penggunaannya di lingkungan sekolah.</p>',
                'created_at' => '2025-12-17 03:32:35',
                'updated_at' => '2025-12-17 03:32:35',
                'tanggal' => '2025-12-05',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Pengecatan dasar tebe modern',
                'slug' => 'pengecatan-dasar-tebe-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/7c/13/28/7c1328b9c67c7dd4290788c5b232a0da.jpg',
                'description' => '<p>Kegiatan pada Senin, 8 Desember 2025, dilanjutkan dengan melakukan pengecatan pada bagian dasar teba modern. Pengecatan dasar ini berfungsi sebagai lapisan awal untuk melindungi permukaan teba serta memberikan tampilan yang lebih bersih dan menarik.</p><p>Proses pengecatan dilakukan secara merata agar warna dapat menempel dengan baik. Tahap ini menjadi langkah awal dalam penyempurnaan visual teba modern di lingkungan SMAN 3 Singaraja.</p>',
                'created_at' => '2025-12-17 03:37:00',
                'updated_at' => '2025-12-17 03:37:00',
                'tanggal' => '2025-12-08',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Penyempurnaan pengecatan tebe modern',
                'slug' => 'penyempurnaan-pengecatan-tebe-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/22/d4/34/22d434d722243a1a27697f843988093f.jpg',
                'description' => '<p>Pada Selasa, 9 Desember 2025, kegiatan difokuskan pada melanjutkan proses pengecatan teba modern. Beberapa bagian yang belum tertutup sempurna pada hari sebelumnya kembali dicat untuk mendapatkan hasil yang lebih maksimal.</p><p>Pengecatan lanjutan ini bertujuan menciptakan tampilan teba yang rapi, seragam, dan tahan lama. Dengan proses ini, teba modern mulai menunjukkan hasil akhir yang lebih estetis dan siap untuk diberikan identitas tulisan.</p>',
                'created_at' => '2025-12-17 03:38:01',
                'updated_at' => '2025-12-17 03:38:01',
                'tanggal' => '2025-12-09',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Pemberian identitas pada tebe modern ',
                'slug' => 'pemberian-identitas-pada-tebe-modern',
                'thumbnail_url' => 'https://i.pinimg.com/originals/ab/17/7c/ab177c8d7c9c9798a593a6e78d050a8d.jpg',
                'description' => '<p>Pada Rabu, 10 Desember 2025, kegiatan pengecatan dilanjutkan dengan menambahkan tulisan identitas pada teba modern, yaitu <strong>“AM SMANTIARA 2025”</strong>. Penulisan ini dilakukan dengan cermat agar tulisan terlihat jelas, rapi, dan mudah dibaca.</p><p>Pemberian identitas ini bertujuan sebagai penanda bahwa teba modern merupakan hasil kegiatan Asistensi Mengajar di SMAN 3 Singaraja. Selain sebagai identitas, tulisan ini juga menambah nilai estetika pada teba modern.</p>',
                'created_at' => '2025-12-17 03:38:50',
                'updated_at' => '2025-12-17 03:38:50',
                'tanggal' => '2025-12-10',
            ),
        ));
        
        
    }
}