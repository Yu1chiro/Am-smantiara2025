<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title }} - Asistensi Mengajar</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>

    <style>
        /* Custom Font Setup */
        .font-serif-read { font-family: 'Merriweather', serif; }
        .font-sans-ui { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-white font-sans-ui antialiased text-gray-900 rendering-optimize">

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50 bg-opacity-95 backdrop-blur-sm transition-all duration-300">
        <div class="max-w-4xl mx-auto px-5 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="group flex items-center gap-2 text-gray-500 hover:text-gray-900 transition-colors">
                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-gray-200 transition">
                    <i class="fas fa-arrow-left text-sm"></i>
                </div>
                <span class="text-sm font-medium">Beranda</span>
            </a>
            
            <div class="flex items-center gap-3">
                <span class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Article</span>
            </div>
        </div>
    </nav>

    <article class="max-w-[720px] mx-auto px-5 pt-12 pb-24">

        <header class="mb-10">
            <h1 class="text-3xl font-black tracking-tight text-gray-900 leading-[1.15] mb-6 font-sans-ui">
                {{ $article->title }}
            </h1>

            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-sm">
                    AM
                </div>
                
                <div class="flex flex-col text-sm">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-900">Tim Publikasi & Dokumentasi AM Smantiara</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-500">
                        <span>
                            {{ \Carbon\Carbon::parse($article->tanggal ?? $article->created_at)->translatedFormat('d F Y') }}
                        </span>
                        <span class="text-gray-300">•</span>
                        <span>{{ ceil(str_word_count(strip_tags($article->description)) / 250) }} min read</span>
                    </div>
                </div>
            </div>
        </header>

        @if($article->thumbnail_url)
            <figure class="mb-12 -mx-5 md:mx-0">
                <img
                    src="{{ $article->thumbnail_url }}"
                    alt="{{ $article->title }}"
                    class="w-full h-auto md:rounded-lg object-cover shadow-sm max-h-[500px]"
                >
                <figcaption class="text-center text-xs text-gray-500 mt-3 font-sans-ui">
                    Dokumentasi Kegiatan Asistensi Mengajar
                </figcaption>
            </figure>
        @endif

        <section class="
            font-serif-read
            text-[1.125rem] 
            leading-[2rem] 
            text-[#242424]
            
            prose
            prose-lg
            max-w-none
            
            prose-headings:font-sans-ui
            prose-headings:font-bold
            prose-headings:text-gray-900
            prose-h2:text-3xl
            prose-h2:mt-12
            prose-h2:mb-4
            
            prose-p:mb-8
            prose-p:text-[#242424]
            
            prose-a:text-gray-900
            prose-a:underline
            prose-a:decoration-gray-300
            prose-a:underline-offset-4
            hover:prose-a:decoration-blue-600
            hover:prose-a:text-blue-700
            
            prose-blockquote:border-l-[3px]
            prose-blockquote:border-gray-900
            prose-blockquote:pl-5
            prose-blockquote:italic
            prose-blockquote:text-2xl
            prose-blockquote:leading-normal
            prose-blockquote:text-gray-800
            prose-blockquote:not-italic
            
            prose-img:rounded-md
            prose-img:my-10
        ">
            {!! $article->description !!}
        </section>

        <div class="mt-16 pt-8 border-t border-gray-100">
            <div class="flex gap-2">
                <span class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full text-sm hover:bg-gray-200 cursor-pointer transition">Pendidikan</span>
                <span class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full text-sm hover:bg-gray-200 cursor-pointer transition">Kegiatan</span>
            </div>
        </div>

    </article>

    <footer class="bg-gray-50 border-t border-gray-100 py-12 mt-12">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <p class="text-sm text-gray-500 mb-4">&copy; {{ date('Y') }} Asistensi Mengajar SMANTIARA</p>
            <a href="{{ route('home') }}" class="text-sm font-medium text-gray-900 hover:text-blue-600">Kembali ke Beranda</a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

</body>
</html>