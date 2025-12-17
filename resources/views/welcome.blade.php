<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM Smantiara - 2025</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="shortcut icon"
        href="https://ucarecdn.com/aacd603b-4659-4aa0-91af-cda6275f6c18/WhatsAppImage20250911at100314_cd8dff09.jpg"
        type="image/x-icon">
    
    <style>
        .blog-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .pattern-dots {
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .pattern-grid {
            background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        @media (min-width: 1024px) {
            .snake-line {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 0;
            }
        }

        .timeline-item {
            position: relative;
            z-index: 2;
        }

        .mobile-line {
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #3b82f6, #6366f1, #8b5cf6, #f59e0b, #10b981);
            z-index: 1;
        }
    </style>
</head>

<body class="font-sans bg-gradient-to-br from-slate-50 to-blue-50">

    <nav class="bg-[#f78e0c] fixed w-full z-50 border-b border-blue-100">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-10 h-10 flex items-center justify-center mr-3">
                    <img src="https://ucarecdn.com/aacd603b-4659-4aa0-91af-cda6275f6c18/WhatsAppImage20250911at100314_cd8dff09.jpg"
                        class="rounded-full" alt="Logo">
                </div>
                <span class="flex text-white text-lg font-semibold">AM Smantiara 2025</span>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-white transition-colors font-medium hover:text-blue-100">Beranda</a>
                <a href="#activity-nav"
                    class="text-white transition-colors font-medium hover:text-blue-100">Kegiatan</a>
                <a href="#cerpen-nav" class="text-white transition-colors font-medium hover:text-blue-100">Cerpen</a>
                <a href="#member-nav" class="text-white transition-colors font-medium hover:text-blue-100">Divisi</a>
            </div>

            <div class="flex items-center">
                <button id="hamburger-button" class="md:hidden ml-4 text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu"
        class="fixed top-0 right-0 h-full w-4/5 max-w-sm bg-white shadow-lg p-6 transform translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="flex justify-between items-center mb-8 border-b pb-4">
            <span class="text-lg font-bold text-blue-700">Menu Navigasi</span>
            <button id="close-menu-button" class="text-black">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        <nav class="flex flex-col space-y-5">
            <a href="/" class="text-slate-700 hover:text-blue-600 text-lg py-2">Beranda</a>
            <a href="#activity" class="text-slate-700 hover:text-blue-600 text-lg py-2">Kegiatan</a>
            <a href="#cerpen" class="text-slate-700 hover:text-blue-600 text-lg py-2">Cerpen</a>
            <a href="#division" class="text-slate-700 hover:text-blue-600 text-lg py-2">Divisi</a>
        </nav>
    </div>
    <div id="menu-overlay" class="fixed inset-0 bg-black/50 z-40 hidden"></div>

    <section id="home"
        class="pt-28 pb-20 bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-700 text-white pattern-dots relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 to-indigo-700/90"></div>
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center relative z-10">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <div
                    class="inline-block bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-6 border border-white/20">
                    Asistensi Mengajar Universitas Pendidikan Ganesha 2025
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Asistensi Mengajar <span
                        class="text-yellow-300">SMAN 3 Singaraja</span> 2025</h1>
                <p class="text-xl mb-8 text-blue-100 font-italic">"Bergerak dan Berdampak"</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#activity"
                        class="bg-white text-blue-700 px-8 py-4 rounded-xl font-bold hover:bg-blue-50 transition-all duration-300 inline-block text-center shadow-lg hover:shadow-xl transform hover:scale-105">Jelajahi
                        Kegiatan</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl blur-lg opacity-30">
                    </div>
                    <img src="https://1mjtjv6snj.ucarecd.net/3987267d-a65c-49e8-8c37-8b85fe983b1c/WhatsAppImage20250903at161828_2525a861.jpg"
                        alt="Hero Image" class="relative rounded-2xl shadow-2xl border-4 border-white/20">
                </div>
            </div>
        </div>
    </section>

    <!-- time line kegiatan -->
    <section class="py-16 px-4 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-navy mb-4">Timeline Kegiatan</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-accent to-gold mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Timeline kegiatan asistensi mengajar</p>
            </div>

            <!-- Timeline Container -->
            <div class="relative">
                <!-- Snake Line for Desktop -->
                <div class="hidden lg:block snake-line">
                    <svg width="100%" height="100%" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                        <path class="snake-line-path" d="M 100,100
                                                     C 250,100 250,250 400,250
                                                     C 550,250 550,100 700,100
                                                     C 850,100 850,250 900,250
                                                     C 950,250 900,400 700,400
                                                     C 500,400 500,550 400,550
                                                     C 300,550 300,700 500,700
                                                     C 700,700 700,850 900,850" stroke="url(#gradient)"
                            stroke-width="8" fill="none" />
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#3b82f6" />
                                <stop offset="25%" stop-color="#6366f1" />
                                <stop offset="50%" stop-color="#8b5cf6" />
                                <stop offset="75%" stop-color="#f59e0b" />
                                <stop offset="100%" stop-color="#10b981" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Mobile Line -->
                <div class="lg:hidden mobile-line"></div>

                <!-- Timeline Items -->
                <div class="space-y-12 lg:space-y-0">

                    <!-- Item 1 -->
                    <div class="flex timeline-item">
                        <div class="w-full lg:w-1/2 lg:pr-12 lg:mt-0 lg:pt-20">
                            <div
                                class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-primary hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-navy">Observasi</h3>
                                        <p class="text-gold font-semibold">September 2025</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Observasi lingkungan sekolah dan melakukan perkenalan kepada siswa, staf serta
                                    pegawai di SMAN 3 Singaraja
                                </p>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    <span
                                        class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium">Observasi</span>
                                    <span
                                        class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">Pengenalan</span>
                                </div>
                            </div>
                        </div>

                        <!-- Circle Indicator for Mobile -->
                        <div
                            class="lg:hidden absolute left-6 w-6 h-6 bg-primary rounded-full border-4 border-white shadow-lg z-10 -translate-x-1/2">
                        </div>

                        <div
                            class="hidden lg:flex w-6 h-6 bg-primary rounded-full border-4 border-white shadow-lg z-10 absolute left-1/2 -translate-x-1/2 mt-20">
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex timeline-item">
                        <div class="hidden lg:block lg:w-1/2"></div>

                        <div class="w-full lg:w-1/2 lg:pl-12 lg:pt-0 lg:mt-64">
                            <div
                                class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-accent hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                                        <span class="text-4xl">👥</span>

                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-navy">Pembentukan Tim PIPS</h3>
                                        <p class="text-gold font-semibold">Oktober 2025</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Melakukan kegiatan rapat dan kordinasi terkait program PIPS
                                </p>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    <span
                                        class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">Recruitment</span>
                                    <span
                                        class="px-3 py-1 bg-secondary/10 text-secondary rounded-full text-sm font-medium">Training</span>
                                </div>
                            </div>
                        </div>

                        <!-- Circle Indicator for Mobile -->
                        <div
                            class="lg:hidden absolute left-6 w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10 -translate-x-1/2 mt-16">
                        </div>

                        <div
                            class="hidden lg:flex w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10 absolute left-1/2 -translate-x-1/2 mt-80">
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex timeline-item">
                        <div class="w-full lg:w-1/2 lg:pr-12 lg:pt-0 lg:mt-0">
                            <div
                                class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-secondary hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                                        <span class="text-4xl">🧑‍🎓</span>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-navy">Mengajar & Non-mengajar</h3>
                                        <p class="text-gold font-semibold">September - Oktober 2025</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Melakukan kegiatan asistensi mengajar dan non-mengajar
                                </p>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    <span
                                        class="px-3 py-1 bg-secondary/10 text-secondary rounded-full text-sm font-medium">Teaching</span>
                                    <span
                                        class="px-3 py-1 bg-emerald/10 text-emerald rounded-full text-sm font-medium">Tutoring</span>
                                </div>
                            </div>
                        </div>

                        <!-- Circle Indicator for Mobile -->
                        <div
                            class="lg:hidden absolute left-6 w-6 h-6 bg-secondary rounded-full border-4 border-white shadow-lg z-10 -translate-x-1/2 mt-16">
                        </div>

                        <div
                            class="hidden lg:flex w-6 h-6 bg-secondary rounded-full border-4 border-white shadow-lg z-10 absolute left-1/2 -translate-x-1/2 mt-40">
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="flex timeline-item">
                        <div class="hidden lg:block lg:w-1/2"></div>

                        <div class="w-full lg:w-1/2 lg:pl-12 lg:pt-0 lg:mt-64">
                            <div
                                class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-gold hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-12 h-12 bg-gold rounded-full flex items-center justify-center text-white mr-4 shadow-lg">
                                        <span class="text-4xl">🔨</span>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-navy">Pelaksanaan program PIPS</h3>
                                        <p class="text-gold font-semibold">Oktober - 2025</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    Melaksanakan program PIPS sesuai agenda
                                </p>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    <span
                                        class="px-3 py-1 bg-gold/10 text-gold rounded-full text-sm font-medium">Program</span>
                                    <span
                                        class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium">Implementation</span>
                                </div>
                            </div>
                        </div>

                        <!-- Circle Indicator for Mobile -->
                        <div
                            class="lg:hidden absolute left-6 w-6 h-6 bg-gold rounded-full border-4 border-white shadow-lg z-10 -translate-x-1/2 mt-16">
                        </div>

                        <div
                            class="hidden lg:flex w-6 h-6 bg-gold rounded-full border-4 border-white shadow-lg z-10 absolute left-1/2 -translate-x-1/2 mt-80">
                        </div>
                    </div>



                </div>
            </div>


        </div>
    </section>

    <section id="activity" class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <div id="activity-nav"
                    class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 border border-blue-100 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    Kegiatan Kami
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">
                    Jejak Langkah & <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Kontribusi</span>
                </h2>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Dokumentasi lengkap berbagai kegiatan seru dan berdampak selama periode asistensi mengajar di SMAN 3
                    Singaraja.
                </p>
            </div>

            <div id="activity-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                    <article
                        class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full overflow-hidden">

                        <div class="relative h-60 overflow-hidden">
                            <div class="absolute inset-0 bg-gray-200 animate-pulse" loading="lazy"></div> <img
                                src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out relative z-10">

                            <div
                                class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-lg text-xs font-bold text-slate-700 shadow-sm flex items-center gap-2">
                                <i class="far fa-calendar text-blue-600"></i>
                                {{ \Carbon\Carbon::parse($article->tanggal ?? $article->created_at)->format('d M Y') }}
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-xl font-bold text-slate-800 mb-3 leading-snug group-hover:text-blue-600 transition-colors line-clamp-2">
                                <a href="{{ route('article.read', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>



                            <div class="pt-5 border-t border-gray-50 mt-auto flex items-center justify-between">
                                <a href="{{ route('article.read', $article->slug) }}"
                                    class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-800 transition-colors group/btn">
                                    Baca Selengkapnya
                                    <i
                                        class="fas fa-arrow-right text-xs transition-transform group-hover/btn:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div id="activity-skeleton" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 animate-pulse h-[400px]">
                        <div class="bg-gray-200 h-56 w-full rounded-xl mb-5"></div>
                        <div class="h-6 bg-gray-200 rounded-full w-3/4 mb-3"></div>
                        <div class="h-4 bg-gray-200 rounded-full w-full mb-2"></div>
                        <div class="h-4 bg-gray-200 rounded-full w-2/3"></div>
                    </div>
                @endfor
            </div>

            <div class="text-center mt-16">
                <button id="load-more-activity"
                    class="group relative inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white transition-all duration-200 bg-blue-600 rounded-full hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    <span>Muat Lebih Banyak</span>
                    <i class="fas fa-sync-alt ml-2 group-hover:rotate-180 transition-transform duration-500"></i>
                </button>
            </div>
        </div>
    </section>

    <section id="cerpen" class="py-20 bg-gradient-to-br from-slate-50 to-blue-50 relative">
        <div class="absolute inset-0 pattern-dots opacity-20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <div id="cerpen-nav"
                    class="inline-block bg-gradient-to-r from-purple-600 to-pink-700 text-white px-6 py-2 rounded-full text-sm font-semibold mb-4">
                    CERPEN</div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">Hasil Juara Lomba Cerpen</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">Karya tulis cerpen dari siswa SMAN 3 Singaraja</p>
            </div>

            <div id="cerpen-container" class="max-w-5xl mx-auto space-y-6">
                @foreach ($cerpens as $cerpen)
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-blue-200">
                        <div
                            class="relative h-48 sm:h-56 md:h-64 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
                            @if ($cerpen->thumbnail_url)
                                <img class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500"
                                    src="{{ $cerpen->thumbnail_url }}" alt="{{ $cerpen->title }}">
                            @else
                                <div class="flex items-center justify-center h-full text-gray-400">
                                    <i class="fas fa-book text-4xl md:text-5xl"></i>
                                </div>
                            @endif

                            <div
                                class="absolute top-3 right-3 md:top-4 md:right-4 px-3 py-1.5 md:px-4 md:py-2 bg-purple-600 text-white text-xs md:text-sm font-bold rounded-full shadow-lg flex items-center space-x-1.5 md:space-x-2">
                                <i class="fas fa-feather-alt"></i>
                                <span>Cerpen</span>
                            </div>
                        </div>

                        <div class="p-5 md:p-6 lg:p-8">
                            <h3
                                class="text-xl md:text-2xl font-bold text-gray-900 mb-3 md:mb-4 line-clamp-2 hover:text-blue-600 transition-colors duration-200">
                                {{ $cerpen->title }}
                            </h3>

                            <div class="mt-4">
                                <a href="{{ route('cerpen.detail', $cerpen->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-full inline-flex items-center justify-center space-x-2 px-5 py-2.5 md:px-6 md:py-3 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white text-sm md:text-base font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <i class="fas fa-book-open"></i>
                                    <span>Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id="cerpen-skeleton" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-white rounded-2xl shadow-md p-4 animate-pulse h-96">
                        <div class="bg-gray-300 h-48 w-full rounded mb-4"></div>
                        <div class="h-6 bg-gray-300 rounded w-3/4 mb-2"></div>
                        <div class="h-4 bg-gray-300 rounded w-full mb-2"></div>
                    </div>
                @endfor
            </div>

            <div class="text-center mt-12 hidden">
                <button id="load-more-cerpen"
                    class="px-8 py-3 bg-white border-2 border-purple-600 text-purple-600 font-bold rounded-full hover:shadow-md hover:text-gray-700 transition-all shadow-lg">
                    Muat Lebih Banyak Cerpen
                </button>
            </div>
        </div>
    </section>

    <section id="division" class="py-20 bg-gradient-to-br from-white to-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div id="member-nav"
                    class="inline-block bg-gradient-to-r from-indigo-600 to-purple-700 text-white px-6 py-2 rounded-full text-sm font-semibold mb-4">
                    TIM KAMI</div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">Tim Asistensi Mengajar</h2>
            </div>

            <div id="division-container"
                class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 justify-center">
                @foreach ($members as $member)
                    <div class="flex-col w-full break-inside-avoid mb-4 group cursor-pointer text-center">
                        <div
                            class="relative overflow-hidden rounded-lg w-full h-auto mx-auto border-4 border-indigo-100 shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-105">
                            <img src="{{ $member->thumbnail_url }}" alt="{{ $member->nama }}"
                                class="w-full h-full object-cover">
                        </div>
                       
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-8">
                <button id="load-more-member"
                    class="px-6 py-2 text-sm bg-indigo-100 text-indigo-700 rounded-full hover:bg-indigo-200 font-semibold transition">
                    Lihat Anggota Lainnya
                </button>
            </div>
        </div>
    </section>

    <footer
        class="bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 pattern-grid opacity-10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex items-center justify-center mb-5 bg-white px-3 py-3 rounded-xl mx-auto w-max">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mr-3">
                    <img loading="lazy" decoding="async"
                        src="https://1mjtjv6snj.ucarecd.net/1baacc26-f928-4cce-894d-5260f8a56508/image.png"
                        alt="">
                </div>
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mr-3">
                    <img loading="lazy" decoding="async"
                        src="https://1mjtjv6snj.ucarecd.net/e9ce0860-ad12-4447-a592-2fa44063bc40/download.jpg"
                        alt="">
                </div>
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mr-3">
                    <img loading="lazy" decoding="async"
                        src="https://1mjtjv6snj.ucarecd.net/79fe5e81-13b2-4d52-b140-8abaa9ef0a1b/image2.png"
                        alt="">
                </div>
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mr-3">
                    <img loading="lazy" decoding="async"
                        src="https://1mjtjv6snj.ucarecd.net/9c3fb829-d415-4a23-a7ba-8a9e22a3df2c/images.png"
                        alt="">
                </div>
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mr-3">
                    <img loading="lazy" decoding="async"
                        src="https://1mjtjv6snj.ucarecd.net/81917d8b-61f6-462b-ba27-749b58c30e84/image1.png"
                        alt="">
                </div>
            </div>
            <p class="text-center mb-5 text-blue-100 leading-relaxed text-lg">Bergerak &amp; Berdampak</p>
            <div class="flex justify-center mb-5">
                <a href="#"
                    class="w-12 h-12 bg-blue-800/50 hover:bg-blue-700 rounded-xl flex items-center justify-center transition-colors">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882-.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>



            <!-- Copyright section -->
            <div class="border-t border-blue-800/50  text-center">
                <p class="text-blue-200">© AM Smantiara 2025 | Dev by Hera</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu Toggle
            const hamburger = document.getElementById('hamburger-button');
            const menu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('menu-overlay');
            const closeBtn = document.getElementById('close-menu-button');

            function toggleMenu() {
                menu.classList.toggle('translate-x-full');
                overlay.classList.toggle('hidden');
            }

            [hamburger, closeBtn, overlay].forEach(el => el?.addEventListener('click', toggleMenu));

            // --- LOAD MORE LOGIC ---
            let articleSkip = 6;
            let memberSkip = 5;
            let cerpenSkip = 6;

            // 1. Load More Activity / Article
            const btnActivity = document.getElementById('load-more-activity');
            btnActivity?.addEventListener('click', () => {
                const container = document.getElementById('activity-container');
                const skeleton = document.getElementById('activity-skeleton');

                btnActivity.classList.add('hidden');
                skeleton.classList.remove('hidden');

                fetch(`/api/articles?skip=${articleSkip}`)
                    .then(r => r.json())
                    .then(data => {
                        skeleton.classList.add('hidden');
                        if (data.length > 0) {
                            data.forEach(item => {
                                // Bersihkan HTML tag dari deskripsi
                                const desc = item.description.replace(/<[^>]*>?/gm, '')
                                    .substring(0, 120) + '...';

                                // Format Tanggal (Simple JS formatter)
                                const dateObj = new Date(item.tanggal || item.created_at);
                                const dateStr = dateObj.toLocaleDateString('id-ID', {
                                    day: 'numeric',
                                    month: 'short',
                                    year: 'numeric'
                                });

                                const html = `
                <article class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full overflow-hidden">
                    <div class="relative h-60 overflow-hidden">
                        <img src="${item.thumbnail_url}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-lg text-xs font-bold text-slate-700 shadow-sm flex items-center gap-2">
                            <i class="far fa-calendar text-blue-600"></i> ${dateStr}
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-slate-800 mb-3 leading-snug group-hover:text-blue-600 transition-colors line-clamp-2">
                            <a href="/article/${item.slug}">${item.title}</a>
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">${desc}</p>
                        <div class="pt-5 border-t border-gray-50 mt-auto flex items-center justify-between">
                            <a href="/article/${item.slug}" class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-800 transition-colors group/btn">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right text-xs transition-transform group-hover/btn:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </article>`;

                                container.insertAdjacentHTML('beforeend', html);
                            });
                            articleSkip += 6;
                            btnActivity.classList.remove('hidden');
                        } else {
                            btnActivity.textContent = "Semua kegiatan sudah ditampilkan";
                            btnActivity.classList.remove('hidden');
                            btnActivity.disabled = true;
                            btnActivity.classList.add('opacity-50', 'cursor-not-allowed');
                        }
                    });



            });

            // 2. Load More Cerpen
            const btnCerpen = document.getElementById('load-more-cerpen');
            btnCerpen?.addEventListener('click', () => {
                const container = document.getElementById('cerpen-container');
                const skeleton = document.getElementById('cerpen-skeleton');

                btnCerpen.classList.add('hidden');
                skeleton.classList.remove('hidden');

                fetch(`/api/cerpens?skip=${cerpenSkip}`)
                    .then(r => r.json())
                    .then(data => {
                        skeleton.classList.add('hidden');
                        if (data.length > 0) {
                            data.forEach(item => {
                                const authors = item.authors.replace(/<[^>]*>?/gm, '');
                                const html = `
                                <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-blue-200 flex flex-col h-full">
                                    <div class="relative h-64 overflow-hidden bg-gray-100">
                                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="${item.thumbnail_url || ''}">
                                        <div class="absolute top-3 right-3 px-3 py-1 bg-purple-600 text-white text-xs font-bold rounded-full">Cerpen</div>
                                    </div>
                                    <div class="p-5 flex flex-col flex-grow">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">${item.title}</h3>
                                        <div class="text-sm text-gray-600 line-clamp-2 mb-4">
                                            <span class="font-semibold text-purple-600">Penulis:</span> ${authors}
                                        </div>
                                        <div class="mt-auto">
                                            <a href="${item.cerpen_url}" target="_blank" class="w-full inline-flex items-center justify-center px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Baca Sekarang</a>
                                        </div>
                                    </div>
                                </div>`;
                                container.insertAdjacentHTML('beforeend', html);
                            });
                            cerpenSkip += 6;
                            btnCerpen.classList.remove('hidden');
                        } else {
                            btnCerpen.textContent = "Semua cerpen sudah dimuat";
                            btnCerpen.classList.remove('hidden');
                            btnCerpen.disabled = true;
                        }
                    });
            });

            // 3. Load More Member (Simple Logic)
            const btnMember = document.getElementById('load-more-member');
            btnMember?.addEventListener('click', () => {
                fetch(`/api/members?skip=${memberSkip}`)
                    .then(r => r.json())
                    .then(data => {
                        if (data.length > 0) {
                            data.forEach(item => {
                                const html = `
                                <div class="flex-col w-full break-inside-avoid mb-4 text-center">
                                    <div class="rounded-lg w-full h-full mx-auto border-4 border-indigo-100 shadow-lg overflow-hidden">
                                        <img src="${item.thumbnail_url}" class="w-full h-full rounded-lg object-cover">
                                    </div>
                                </div>`;
                                document.getElementById('division-container')
                                    .insertAdjacentHTML('beforeend', html);
                            });
                            memberSkip += 5;
                        } else {
                            btnMember.textContent = "Selesai";
                            btnMember.disabled = true;
                        }
                    });
            });
        });
    </script>
</body>

</html>
