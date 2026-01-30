@php
    $firstGuru = $guru->first() ?? null;
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Guru & Staf Rekayasa Perangkat Lunak</title>

    <meta name="description"
        content="Daftar guru dan staf MTs Arrosyad Prambon yang berperan dalam kegiatan pembelajaran, administrasi, dan pembinaan siswa.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://mtsarrosyad.sch.id/guru/list">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MTs Arrosyad Prambon">
    <meta property="og:title" content="Guru & Staf Sekolah MTs Arrosyad Prambon">
    <meta property="og:description"
        content="Profil guru dan staf MTs Arrosyad Prambon sebagai pendidik dan tenaga kependidikan.">
    <meta property="og:url" content="https://mtsarrosyad.sch.id/guru/list">

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
                        sans: ['Inter', 'sans-serif']
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
                        'card': '0 10px 15px -3px rgba(0,0,0,0.05), 0 4px 6px -2px rgba(0,0,0,0.05)',
                        'glow': '0 0 20px rgba(56,189,248,0.4)',
                    },
                    borderRadius: {
                        'xl': '1rem',
                        '2xl': '1.5rem'
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
            width: 100%;
            height: 600px;
            background: linear-gradient(to bottom,
                    rgba(30, 64, 175, 0.95),
                    rgba(56, 146, 248, 0.8),
                    rgba(248, 250, 252, 0) 90%);
        }

        .content-wrapper {
            position: relative;
            z-index: 10;
            max-width: 1280px;
            margin-inline: auto;
        }

        .fade-in {
            animation: fadeIn .25s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="smooth-gradient-container pt-24">

    <x-navbarLanding />

    <div class="content-wrapper p-4 sm:p-8 pt-16">

        <header class="mb-12 pt-4 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">Guru & Staf Rekayasa Perangkat Lunak</h1>
            <p class="text-lg text-white/90">Kenali para tenaga pendidik dan kependidiakn terbaik di sekolah kami.</p>
        </header>

        <!-- GRID GURU -->
        <main>
            <div id="guru-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                @forelse ($guru as $item)
                    <div class="guru-card-wrapper" data-id="{{ $item->id }}">
                        <div class="guru-card group relative rounded-2xl overflow-hidden shadow-card h-80 bg-slate-100 border-4 cursor-pointer transition border-transparent hover:border-brand-accent-dark hover:scale-[1.02]"
                            onclick="openGuruModal(
                                '{{ addslashes($item->nama) }}',
                                '{{ asset('storage/' . $item->gambar) }}',
                                '{{ addslashes($item->jabatan) }}',
                                '{{ addslashes($item->deskripsi ?? '') }}'
                            )">

                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:opacity-85"
                                onerror="this.onerror=null;this.src='https://placehold.co/400x500/0F172A/FFFFFF?text={{ urlencode($item->nama) }}';">

                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                                <h3 class="text-lg font-bold text-white">{{ $item->nama }}</h3>
                                <p class="text-brand-accent text-sm">{{ $item->jabatan }}</p>
                                <span class="text-xs text-white/70 flex items-center mt-1">
                                    <i data-lucide="eye" class="w-3 h-3 mr-1"></i>
                                    Lihat Detail
                                </span>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16">
                        <div class="bg-white shadow-md rounded-2xl p-10 max-w-md mx-auto border border-slate-200">
                            <i data-lucide="user-x" class="w-16 h-16 text-gray-400 mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-700">Belum ada data guru</h3>
                            <p class="text-gray-500 mt-2">Guru & staf akan ditampilkan di sini setelah ditambahkan.</p>
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


  <div id="guruModal"
    class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-[999] hidden">

    <div
        class="bg-white rounded-3xl shadow-2xl
               w-[90%] max-w-5xl
               max-h-[90vh]
               p-6 lg:p-10
               relative
               overflow-y-auto
               fade-in
               grid grid-cols-1 lg:grid-cols-2 gap-10">

        <!-- CLOSE BUTTON (TETAP ABSOLUTE, TIDAK DIUBAH) -->
        <button onclick="closeGuruModal()"
            class="absolute top-6 right-6 text-gray-700 hover:text-black text-xl z-10">
            ✕
        </button>

        <!-- FOTO (DIBATASI HANYA DI MOBILE) -->
        <div class="w-full rounded-2xl overflow-hidden shadow-lg
                    max-h-[260px] sm:max-h-[320px] lg:max-h-none">
            <img id="modalFotoGuru"
                 src=""
                 class="w-full h-full object-cover"
                 alt="">
        </div>

        <!-- KONTEN -->
        <div class="flex flex-col justify-center">
            <h2 id="modalNamaGuru"
                class="text-3xl font-bold text-slate-900 mb-3"></h2>

            <p id="modalJabatanGuru"
               class="text-lg text-slate-600 mb-3"></p>

            <p id="modalDeskripsiGuru"
               class="text-brand-gray italic leading-relaxed"></p>
        </div>

    </div>
</div>


    <!-- SCRIPT -->
    <script>
        function openGuruModal(nama, gambar, jabatan, deskripsi) {
            document.getElementById("modalFotoGuru").src = gambar;
            document.getElementById("modalNamaGuru").innerText = nama;
            document.getElementById("modalJabatanGuru").innerText = jabatan;
            document.getElementById("modalDeskripsiGuru").innerText =
                deskripsi || "Tidak ada deskripsi.";

            document.getElementById("guruModal").classList.remove("hidden");
        }

        function closeGuruModal() {
            document.getElementById("guruModal").classList.add("hidden");
        }

        // close modal when clicking outside
        document.getElementById("guruModal").addEventListener("click", (e) => {
            if (e.target.id === "guruModal") closeGuruModal();
        });

        document.addEventListener("DOMContentLoaded", () => {
            lucide.createIcons();
        });
    </script>

</body>

</html>
