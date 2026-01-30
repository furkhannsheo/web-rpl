<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $berita->judul }} | MTs Arrosyad Prambon</title>

    <meta name="description" content="{{ Str::limit(strip_tags($berita->isi), 155) }}">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="article">
    <meta property="og:site_name" content="MTs Arrosyad Prambon">
    <meta property="og:title" content="{{ $berita->judul }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($berita->isi), 155) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="article:published_time" content="{{ $berita->created_at->toIso8601String() }}">
    <meta property="article:modified_time" content="{{ $berita->updated_at->toIso8601String() }}">

    <meta name="twitter:card" content="summary">

    <link rel="icon" href="/favicon.ico" sizes="48x48">

    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/android-chrome-512x512.png" sizes="512x512">

    <link rel="manifest" href="/site.webmanifest">


    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .news-item {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>


<body class="p-8 md:p-12 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <a href="{{ route('view.beranda') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>

        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                <h2 class="text-2xl font-bold mb-6">{{ $berita->kategori->nama }}</h2>
                <div>
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                        class="w-full rounded-xl mb-4"
                        onerror="this.onerror=null;this.src='https://placehold.co/900x600/e5e7eb/4b5563?text=Berita';" />
                    <div class="p-0">
                        <div class="flex items-center text-gray-500 text-sm mb-4">
                            <span class="mr-4 font-semibold">{{ strtoupper($berita->kategori->nama) }}</span>
                            <span class="flex items-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $berita->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <h1 class="text-3xl font-bold mb-4">{{ $berita->judul }}</h1>
                        <div class="text-sm text-gray-600 mb-6">
                            Dipublikasikan pada {{ $berita->created_at->format('d M Y') }}
                        </div>
                        <div class="prose max-w-none text-gray-700 text-justify">
                            {!! nl2br(e($berita->isi)) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Berita Terkait</h2>
                    <a href="{{ route('view.beranda') }}"
                        class="text-sm font-semibold text-blue-600 hover:underline">Lihat
                        semua</a>
                </div>
                <div class="space-y-6">
                    @forelse($related as $item)
                        <div class="news-item bg-white rounded-2xl overflow-hidden shadow-card group">
                            <div class="overflow-hidden">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                    onerror="this.onerror=null;this.src='https://placehold.co/400x200/e5e7eb/4b5563?text=Berita';" />
                            </div>
                            <div class="p-6">
                                <div class="text-gray-500 text-sm mb-1 font-semibold">
                                    {{ $item->kategori->nama }}
                                </div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">
                                    {{ $item->judul }}
                                </h3>
                                <a href="{{ route('detail.berita', $item->slug) }}"
                                    class="text-blue-600 hover:text-blue-800 font-semibold group/link inline-flex items-center">
                                    Baca Selengkapnya
                                    <span
                                        class="transition-transform duration-300 group-hover/link:translate-x-1">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">Belum ada berita terkait.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</body>

</html>
