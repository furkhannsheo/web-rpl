@php
    $firstKegiatan = $kegiatan->first() ?? null;
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri Kegiatan Sekolah | MTs Arrosyad Prambon</title>

    <meta name="description"
        content="Galeri foto kegiatan MTs Arrosyad Prambon yang menampilkan dokumentasi aktivitas sekolah, pembelajaran, dan kegiatan siswa.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://mtsarrosyad.sch.id/galeri/list">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MTs Arrosyad Prambon">
    <meta property="og:title" content="Galeri Kegiatan MTs Arrosyad Prambon">
    <meta property="og:description" content="Dokumentasi foto kegiatan dan aktivitas siswa MTs Arrosyad Prambon.">
    <meta property="og:url" content="https://mtsarrosyad.sch.id/galeri/list">

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
                        'glow': '0 0 20px rgba(56, 189, 248, 0.4)',
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
            background-color: #f8fafc;
        }

        .smooth-gradient-container {
            position: relative;
            min-height: 100vh;
        }

        .smooth-gradient-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 600px;
            z-index: 0;
            background: linear-gradient(to bottom, rgba(30, 64, 175, 0.95), rgba(56, 146, 248, 0.8), rgba(248, 250, 252, 0) 90%);
        }

        .content-wrapper {
            position: relative;
            z-index: 10;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
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

    <div class="content-wrapper p-4 sm:p-8 pt-16">

        <header class="mb-12 pt-4 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight mb-2">Galeri Sekolah</h1>
            <p class="text-lg text-white/90">Lihat Foto Kegiatan siswa dan sekolah kami.</p>
        </header>
        <!-- DETAIL KEGIATAN -->
        <div id="detail-kegiatan-container" class="transition-all duration-300 mb-12">
            @if ($firstKegiatan)
                <div
                    class="bg-white shadow-2xl rounded-2xl p-6 lg:p-10 flex flex-col lg:flex-row gap-6 border border-slate-200">
                    <div class="w-full lg:w-1/3 h-56 lg:h-auto rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $firstKegiatan->gambar) }}" alt="{{ $firstKegiatan->judul }}"
                            class="w-full h-full object-cover"
                            onerror="this.onerror=null;this.src='https://placehold.co/500x350/E0F2FE/0F172A?text={{ urlencode($firstKegiatan->judul) }}';">
                    </div>

                    <div class="flex flex-col justify-center text-center lg:text-left">
                        <span
                            class="text-sm font-semibold uppercase text-brand-accent-dark tracking-wider mb-2">Kegiatan
                            Utama</span>
                        <h2 class="text-3xl font-bold text-brand-dark mb-2">{{ $firstKegiatan->judul }}</h2>
                        <p class="text-brand-gray italic leading-relaxed">"{{ $firstKegiatan->deskripsi }}"</p>
                    </div>
                </div>
            @endif
        </div>

        <main>
            <div id="kegiatan-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                @forelse ($kegiatan as $item)
                    <div class="kegiatan-card-wrapper" data-id="{{ $item->id }}">
                        <div id="kegiatan-card-{{ $item->id }}"
                            class="kegiatan-card group relative rounded-2xl overflow-hidden shadow-lg h-72 bg-slate-100 border-4 cursor-pointer transition
                             @if ($firstKegiatan && $item->id === $firstKegiatan->id) border-brand-accent-dark scale-[1.02] shadow-glow @else border-transparent @endif
                             hover:border-brand-accent-dark hover:scale-[1.02]"
                            onclick="showKegiatanDetail({{ $item->id }}, '{{ addslashes($item->judul) }}', '{{ asset('storage/' . $item->gambar) }}', '{{ addslashes($item->deskripsi) }}')">

                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:opacity-80"
                                onerror="this.onerror=null;this.src='https://placehold.co/500x350/E0F2FE/0F172A?text={{ urlencode($item->judul) }}';">

                            <div
                                class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black/80 to-transparent">
                                <h3 class="text-white text-xl font-bold line-clamp-2">{{ $item->judul }}</h3>
                                <span class="text-xs text-white/70 flex items-center mt-1">
                                    <i data-lucide="eye" class="w-3 h-3 mr-1"></i>
                                    Lihat Detail
                                </span>
                            </div>

                        </div>
                    </div>

                @empty
                    <div class="col-span-full text-center py-16">
                        <div class="bg-white border border-slate-200 p-10 rounded-2xl shadow-lg max-w-md mx-auto">
                            <i data-lucide="image-off" class="w-16 h-16 text-gray-400 mx-auto mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-700">Belum ada kegiatan</h3>
                            <p class="text-gray-500 mt-2">Kegiatan sekolah akan tampil di sini setelah ditambahkan.</p>
                        </div>
                    </div>
                @endforelse

            </div>
        </main>
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
        let activeKegiatanId = {{ $firstKegiatan ? $firstKegiatan->id : 'null' }};
        const container = document.getElementById('detail-kegiatan-container');

        // UPDATE DETAIL
        window.showKegiatanDetail = (id, judul, gambar, deskripsi) => {
            activeKegiatanId = id;

            container.innerHTML = `
                <div class="bg-white shadow-2xl rounded-2xl p-6 lg:p-10 flex flex-col lg:flex-row gap-6 border border-slate-200">
                    <div class="w-full lg:w-1/3 h-56 lg:h-auto rounded-xl overflow-hidden shadow-lg">
                        <img src="${gambar}" class="w-full h-full object-cover" alt="${judul}">
                    </div>

                    <div class="flex flex-col justify-center text-center lg:text-left">
                        <span class="text-sm font-semibold uppercase text-brand-accent-dark tracking-wider mb-2">Kegiatan Utama</span>
                        <h2 class="text-3xl font-bold text-brand-dark mb-2">${judul}</h2>
                        <p class="text-brand-gray italic leading-relaxed">"${deskripsi}"</p>
                    </div>
                </div>
            `;

            updateHighlight(id);
            lucide.createIcons();

            const yOffset = -120; 
            const y = container.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({
                top: y,
                behavior: 'smooth'
            });

        };

        function updateHighlight(activeId) {
            document.querySelectorAll('.kegiatan-card').forEach(card => {
                const cardId = parseInt(card.closest('.kegiatan-card-wrapper').dataset.id);
                const active = cardId === activeId;

                card.classList.toggle('border-brand-accent-dark', active);
                card.classList.toggle('scale-[1.02]', active);
                card.classList.toggle('shadow-glow', active);
                card.classList.toggle('border-transparent', !active);
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (activeKegiatanId) updateHighlight(activeKegiatanId);
            lucide.createIcons();
        });
    </script>

</body>

</html>
