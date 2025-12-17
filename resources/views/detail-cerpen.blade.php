<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cerpen->title }} - AM Smantiara</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link rel="shortcut icon"
        href="https://ucarecdn.com/aacd603b-4659-4aa0-91af-cda6275f6c18/WhatsAppImage20250911at100314_cd8dff09.jpg"
        type="image/x-icon">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1E40AF',
                        secondary: '#3730A3',
                        accent: '#059669',
                        gold: '#F59E0B',
                        navy: '#1E3A8A',
                        emerald: '#065F46'
                    }
                }
            }
        }
    </script>
    <style>
        .pattern-dots {
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* Bento Grid Animation */
        .bento-card {
            transition: all 0.3s ease;
        }

        .bento-card:hover {
            transform: scale-[1.01];
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-slate-800">

    <nav class="bg-[#f78e0c] fixed w-full z-50 border-b border-blue-100 shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div
                        class="w-10 h-10 flex items-center justify-center bg-white/20 rounded-full group-hover:bg-white/30 transition">
                        <i class="fas fa-arrow-left text-white text-lg"></i>
                    </div>
                    <span class="text-white text-lg font-semibold hidden sm:block">Kembali</span>
                </a>
            </div>
            <div class="flex items-center">
                <span class="text-white font-bold text-lg">Detail Cerpen</span>
            </div>
        </div>
    </nav>

    <section class="pt-28 pb-20 px-4 min-h-screen">
        <div class="container mx-auto max-w-5xl">

            <div class="flex flex-col items-center gap-6">

                <!-- Title Card -->
                <div
                    class="bento-card w-full bg-white rounded-3xl p-8 shadow-lg border border-gray-100 flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <i class="fas fa-quote-right text-8xl text-purple-600"></i>
                    </div>
                    <div class="relative z-10 text-center">
                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-bold mb-3 uppercase tracking-wider">
                            Cerpen
                        </span>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
                            {{ $cerpen->title }}
                        </h1>
                        <div class="flex items-center justify-center text-gray-500 text-sm gap-4">
                            <span><i
                                    class="far fa-calendar-alt mr-2"></i>{{ $cerpen->created_at->format('d F Y') }}</span>
                            <span><i class="far fa-clock mr-2"></i>Just now</span>
                        </div>
                    </div>
                </div>

                <!-- Thumbnail Card -->
                <div
                    class="bento-card w-full max-w-2xl h-64 md:h-96 bg-gray-200 rounded-3xl shadow-lg overflow-hidden relative group">
                    @if ($cerpen->thumbnail_url)
                        <img src="{{ $cerpen->thumbnail_url }}" alt="{{ $cerpen->title }}"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-400">
                            <i class="fas fa-image text-6xl"></i>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
                </div>

                <!-- Author & Description Card -->
                <div class="bento-card w-full bg-white rounded-3xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-4">
                        <div
                            class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                            <i class="fas fa-user-pen"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Penulis & Deskripsi</h3>
                    </div>

                    <div class="prose prose-lg prose-purple max-w-none text-gray-600 leading-relaxed">
                        {!! $cerpen->authors !!}
                    </div>
                </div>


                <!-- Read More Card -->
                <div
                    class="bento-card w-full bg-gradient-to-br from-purple-600 to-indigo-700 rounded-3xl p-8 shadow-lg text-white">
                    <div class="flex flex-col items-center text-center gap-6">
                        <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-2xl">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-bold mb-2">Baca Selengkapnya</h3>
                            <p class="text-purple-100 text-sm opacity-90">
                                Nikmati cerita lengkap karya siswa kami di platform baca.
                            </p>
                        </div>
                        <a href="{{ $cerpen->cerpen_url }}" target="_blank"
                            class="w-full max-w-xs bg-white text-purple-700 font-bold py-4 px-6 rounded-xl text-center hover:bg-purple-50 transition-colors shadow-md flex items-center justify-center gap-2 group">
                            <span>Buka Link</span>
                            <i
                                class="fas fa-external-link-alt group-hover:translate-x-1 transition-transform text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-white border-t py-8 text-center text-gray-500 text-sm">
        <p>&copy; {{ date('Y') }} Asistensi Mengajar SMANTIARA. All rights reserved.</p>
    </footer>

</body>

</html>
