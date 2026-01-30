    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Berita Sekolah | MTs Arrosyad Prambon</title>

        <meta name="description"
            content="Daftar berita dan informasi terbaru MTs Arrosyad Prambon yang memuat kegiatan sekolah, prestasi siswa, dan pengumuman resmi.">

        <meta name="robots" content="index, follow">

        <link rel="canonical" href="https://mtsarrosyad.sch.id/berita/list">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="MTs Arrosyad Prambon">
        <meta property="og:title" content="Berita Sekolah MTs Arrosyad Prambon">
        <meta property="og:description" content="Kumpulan berita dan kegiatan terbaru MTs Arrosyad Prambon.">
        <meta property="og:url" content="https://mtsarrosyad.sch.id/berita/list">

        <meta name="twitter:card" content="summary">

        <link rel="icon" href="/favicon.ico" sizes="48x48">

        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/android-chrome-512x512.png" sizes="512x512">

        <link rel="manifest" href="/site.webmanifest">


        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js"></script>

        <link rel="stylesheet" href="{{ asset('assets/css/landingPage.css') }}">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                        colors: {
                            'brand-light': '#FFFFFF',
                            'brand-dark': '#0F172A',
                            'brand-gray': '#64748B',
                            'brand-light-gray': '#F1F5F9',
                            'brand-accent': '#38BDF8',
                            'brand-accent-dark': '#0EA5E9',
                            'light-dark': '#1E293B',
                            'light-dark': '#1E293B',
                            'text-primary': '#F3F4F6',
                            'text-secondary': '#9CA3AF',
                            'input-bg': '#334155',
                            'input-text': '#D1D5DB',
                        },
                        boxShadow: {
                            'card': '0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                            'glass': '0 4px 30px rgba(0, 0, 0, 0.1)',
                            'glow': '0 0 20px rgba(56, 189, 248, 0.4)',
                            'glow-dark': '0 0 20px rgba(15, 23, 42, 0.3)',
                        },
                        borderRadius: {
                            'xl': '1.0rem',
                            '2xl': '1.5rem',
                        },
                    }
                }
            }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

            body {
                font-family: 'Inter', sans-serif;

            }

            .smooth-gradient-container {
                position: relative;
            }

            .smooth-gradient-container::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 700px;
                z-index: 0;
                background: linear-gradient(to bottom,
                        rgba(14, 145, 233, 0.95),
                        rgba(54, 127, 236, 0.95),
                        rgba(248, 250, 252, 0) 90%);
            }

            .content-wrapper {
                position: relative;
                z-index: 10;
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
            }

            .card-shadow {
                box-shadow: 0 5px 15px -3px rgba(0, 0, 0, 0.08), 0 3px 6px -3px rgba(0, 0, 0, 0.05);
            }

            .news-card-style-b {
                padding: 0;
            }

            .news-card-style-b .card-body {
                padding: 1.25rem;
            }

            .line-clamp-2 {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                overflow: hidden;
                -webkit-line-clamp: 2;
            }
        </style>
    </head>

    <body class="smooth-gradient-container pt-24">
        <x-navbarLanding />

        <div class="content-wrapper p-4 sm:p-8">

            <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 pt-4">
                <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Berita</h1>
                    <span
                        class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-lg">{{ $berita->count() }}
                        Berita</span>
                </div>
            </header>

            <section
                class="mb-10 flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-4 lg:space-y-0 text-white">

                <div class="flex items-center space-x-4">
                    <div class="flex bg-white/10 p-1 rounded-lg">
                        <button id="grid-view-btn"
                            class="flex items-center space-x-2 px-3 py-2 bg-white/20 text-white rounded-md transition hover:bg-white/30">
                            <i data-lucide="layout-grid" class="w-5 h-5"></i>
                            <span class="font-semibold text-sm">Grid</span>
                        </button>
                        <button id="list-view-btn"
                            class="flex items-center space-x-2 px-3 py-2 text-white/70 rounded-md transition hover:bg-white/10">
                            <i data-lucide="list" class="w-5 h-5"></i>
                            <span class="font-semibold text-sm">List</span>
                        </button>
                    </div>
                    <span class="text-sm text-white/80 hidden sm:block">Menampilkan {{ $berita->firstItem() }} -
                        {{ $berita->lastItem() }} Berita dari {{ $berita->total() }} hasil</span>
                </div>

                <div class="flex w-full lg:w-auto space-x-2">

                    {{-- FORM SEARCH & FILTER --}}
                    <form method="GET" class="flex w-full lg:w-auto space-x-2">

                        {{-- SEARCH --}}
                        <div class="flex w-full lg:w-96 space-x-2">
                            <div class="relative w-full">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari Berita Anda..."
                                    class="w-full pl-10 pr-4 py-2 bg-white/20 text-white placeholder-white/70 border border-white/30 rounded-lg focus:ring-2 focus:ring-white focus:outline-none transition-all">
                                <i data-lucide="search"
                                    class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-white/70"></i>
                            </div>

                            {{-- Tombol submit --}}
                            <button type="submit"
                                class="flex items-center justify-center p-3 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition shadow-lg shrink-0">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </button>

                            {{-- Tombol reset --}}
                            <a href="{{ url()->current() }}"
                                class="flex items-center justify-center p-3 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition shadow-lg shrink-0">
                                <i data-lucide="rotate-ccw" class="w-5 h-5"></i>
                            </a>
                        </div>

                        {{-- DROPDOWN KATEGORI --}}
                        <div class="relative">
                            <div class="inline-block relative">
                                <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')"
                                    class="flex items-center justify-center p-3 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition shadow-lg shrink-0">
                                    <i data-lucide="filter" class="w-5 h-5"></i>
                                </button>

                                <div
                                    class="hidden absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-2xl overflow-hidden py-3 z-20">

                                    <div class="px-4 pb-2 border-b border-gray-100">
                                        <p class="text-sm font-semibold text-gray-700">Filter Berdasarkan Kategori</p>
                                    </div>

                                    <div class="py-2 flex flex-col">

                                        {{-- SEMUA KATEGORI --}}
                                        <button type="submit" name="kategori" value=""
                                            class="text-left px-4 py-2 hover:bg-sky-50 text-gray-700">
                                            Semua Kategori
                                        </button>

                                        {{-- KATEGORI DINAMIS --}}
                                        @foreach ($kategoris as $kat)
                                            <button type="submit" name="kategori" value="{{ $kat->id }}"
                                                class="text-left px-4 py-2 hover:bg-sky-50 text-gray-700
                                        {{ request('kategori') == $kat->id ? 'bg-sky-50 font-semibold' : '' }}">
                                                {{ $kat->nama }}
                                            </button>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>



            </section>

            <main id="news-grid-container"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                @forelse($berita as $item)
                    <div class="bg-white rounded-xl overflow-hidden card-shadow hover:shadow-xl transition-all duration-300 news-card-style-b news-item"
                        data-category="{{ strtolower($item->kategori->nama) }}">
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                alt="{{ $item->judul }}"
                                onerror="this.onerror=null;this.src='https://placehold.co/600x400/E0F2FE/0F172A?text=Berita';" />
                        </div>

                        <div class="card-body p-5 flex flex-col h-40">
                            <span class="text-sm font-semibold text-sky-600 mb-2 inline-block shrink-0">
                                {{ $item->kategori->nama }}
                            </span>
                            <h2 class="text-xl font-bold text-gray-800 mb-4 leading-snug line-clamp-2 grow-0">
                                {{ $item->judul }}
                            </h2>
                            <a href="{{ route('detail.berita', $item->slug) }}"
                                class="flex items-center text-sm font-medium text-sky-600 hover:text-sky-800 transition mt-auto shrink-0">
                                Baca Selengkapnya
                                <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="sm:col-span-2 lg:col-span-3 xl:col-span-4 text-center py-16">
                        <div class="  rounded-xl p-10 max-w-md mx-auto ">
                            <i data-lucide="newspaper" class="w-12 h-12  mx-auto mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-700">Belum ada berita</h3>
                            <p class="text-gray-500 mt-2">Berita & acara terbaru akan tampil di sini setelah
                                ditambahkan.</p>
                        </div>
                    </div>
                @endforelse

            </main>

            <div class="mt-12 ">
                {{ $berita->links('pagination::tailwind') }}
            </div>


        </div>

        <a href="{{ route('view.beranda') }}"
            class="group fixed bottom-6 right-6 z-50
          flex items-center justify-center
          w-14 h-14 rounded-full
          bg-brand-accent text-white
          shadow-lg
          hover:bg-brand-accent-dark
          transition-all duration-300
          hover:scale-110
          active:scale-95">

            <span
                class="absolute right-16 opacity-0 group-hover:opacity-100
               bg-brand-dark text-white text-sm px-3 py-1 rounded-lg
               transition-all whitespace-nowrap">
                Kembali ke Beranda
            </span>

            <i data-lucide="arrow-left" class="w-6 h-6"></i>
        </a>


        <x-footer />

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                lucide.createIcons();

                const dropdownToggle = document.getElementById('dropdown-toggle');
                const dropdownMenu = document.getElementById('dropdown-menu');
                const gridButton = document.getElementById('grid-view-btn');
                const listButton = document.getElementById('list-view-btn');
                const mainGrid = document.getElementById('news-grid-container');
                const activateListView = () => {
                    mainGrid.classList.remove('sm:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4');
                    mainGrid.classList.add('lg:grid-cols-1');

                    gridButton.classList.remove('bg-white/20');
                    gridButton.classList.add('text-white/70');
                    listButton.classList.add('bg-white/20');
                    listButton.classList.remove('text-white/70');
                };

                const activateGridView = () => {
                    mainGrid.classList.add('sm:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4');
                    mainGrid.classList.remove('lg:grid-cols-1');

                    listButton.classList.remove('bg-white/20');
                    listButton.classList.add('text-white/70');
                    gridButton.classList.add('bg-white/20');
                    gridButton.classList.remove('text-white/70');
                };

                listButton.addEventListener('click', activateListView);
                gridButton.addEventListener('click', activateGridView);


            });
        </script>
    </body>

    </html>
