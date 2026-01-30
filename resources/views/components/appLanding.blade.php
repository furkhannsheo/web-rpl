<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK Krian 1 Sidoarjo</title>

    <meta name="description"
        content="Rekayasa Perangkat Lunak (RPL) adalah bidang ilmu yang mempelajari perancangan, pengembangan, pengujian, dan pemeliharaan perangkat lunak agar sistem yang dibuat berkualitas, efisien, dan sesuai kebutuhan pengguna.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://smkkrian1.sch.id/">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SMK Krian 1 Sidoarjo">
    <meta property="og:title" content="SMK Krian 1 Sidoarjo">
    <meta property="og:description"
        content="Madrasah Tsanawiyah di Prambon yang berfokus pada pendidikan Islam, akademik, dan pembinaan karakter siswa.">
    <meta property="og:url" content="https://smkkrian1.sch.id/">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SMK Krian 1 Sidoarjo">
    <meta name="twitter:description"
        content="Madrasah Tsanawiyah di Prambon dengan pendidikan Islam terpadu dan pembinaan karakter siswa.">

    <link rel="icon" href="/favicon.png" sizes="48x48">

    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/android-chrome-512x512.png" sizes="512x512">

    <link rel="manifest" href="/site.webmanifest">

    @stack('preload')

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js"></script>

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

    <link rel="stylesheet" href="{{ asset('assets/css/landingPage.css') }}">
    <meta name="google-site-verification" content="UsBSsrzbA2xpGp_Yuq0JJj47Decl5247Z-vonirQL-E" />
</head>

<body class="bg-brand-light text-brand-dark font-sans overflow-x-hidden min-h-[100dvh]">
    <x-navbarLanding />
    {{ $slot }}
    <!-- MODAL -->
    <!-- MODAL -->
    <div id="modal" inert
        class="fixed inset-0 z-[999] flex items-center justify-center p-4
            bg-black/70
            opacity-0 pointer-events-none hidden
            transition-opacity duration-300">

        <div
            class="modal-content bg-white p-4 rounded-2xl max-w-4xl w-full relative
           transform scale-95 transition-transform duration-300">

            <button id="closedBtn" class="absolute top-4 right-4 z-20 text-white/80 hover:text-white"
                aria-label="Tutup modal" type="button">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>

            <div class="relative overflow-hidden rounded-xl">
                <img id="modal-image" src="" alt="Gambar Galeri"
                    class="max-h-[80vh] w-full object-contain mx-auto" />

                <!-- OVERLAY TEKS -->
                <div id="modal-caption"
                    class="absolute bottom-0 left-0 w-full
                   bg-gradient-to-t from-black/80 via-black/50 to-transparent
                   px-5 py-4">
                    <h3 id="modal-title" class="text-white text-lg font-semibold leading-tight">
                    </h3>
                    <p id="modal-description" class="text-white/80 text-sm mt-1 line-clamp-2">
                    </p>
                </div>
            </div>
        </div>

    </div>



    <button id="scrollToTopBtn"
        class="scroll-to-top fixed bottom-5 right-5 bg-brand-accent text-white p-3 rounded-full shadow-lg opacity-0 transform translate-y-4 hover:bg-brand-accent-dark transition-all hover:scale-110 z-50">
        <i data-lucide="arrow-up" class="w-6 h-6"></i>
    </button>
    <x-footer />

    <script src="{{ asset('assets/js/landingPage.js') }}"></script>

</body>

</html>
