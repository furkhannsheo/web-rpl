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

<body class="relative smooth-gradient-container min-h-screen pt-32">

    <x-navbarLanding />

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-8 mb-24">

        {{-- Header --}}
        <header class="text-center mb-16 mt-8">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-4">
                Tambah Alumni
            </h1>
            <p class="text-white/90 text-lg max-w-2xl mx-auto">
                Masukkan data alumni untuk ditampilkan di website sekolah
            </p>
        </header>

        {{-- Form --}}
        <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-2xl shadow-card p-8 sm:p-10 space-y-6 border border-slate-100">

            @csrf

            {{-- Nama --}}
            <div>
                <label class="block text-sm font-semibold text-brand-dark mb-2">Nama Alumni</label>
                <div class="relative">
                    <i data-lucide="user" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full pl-12 pr-4 py-3 rounded-xl
                               bg-white border border-slate-300 text-slate-800
                               focus:ring-2 focus:ring-brand-accent focus:outline-none">
                </div>
                @error('nama')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- Angkatan --}}
            <div>
                <label class="block text-sm font-semibold text-brand-dark mb-2">Angkatan</label>
                <div class="relative">
                    <i data-lucide="calendar"
                        class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                    <input type="number" name="angkatan" value="{{ old('angkatan') }}" placeholder="Contoh: 2020"
                        class="w-full pl-12 pr-4 py-3 rounded-xl
                               bg-white border border-slate-300 text-slate-800
                               focus:ring-2 focus:ring-brand-accent focus:outline-none">
                </div>
                @error('angkatan')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- Foto --}}
            <div>
                <label class="block text-sm font-semibold text-brand-dark mb-2">Foto Alumni</label>
                <div class="relative">
                    <i data-lucide="image" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                    <input type="file" name="gambar"
                        class="w-full pl-12 pr-4 py-2 rounded-xl
                               bg-white border border-slate-300 text-slate-700">
                </div>
                @error('gambar')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- Aktivitas --}}
            <div>
                <label class="block text-sm font-semibold text-brand-dark mb-2">Aktivitas Sekarang</label>
                <div class="relative">
                    <i data-lucide="briefcase"
                        class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                    <input type="text" name="aktivitas_sekarang" value="{{ old('aktivitas_sekarang') }}"
                        placeholder="Mahasiswa / Bekerja / Wirausaha"
                        class="w-full pl-12 pr-4 py-3 rounded-xl
                               bg-white border border-slate-300 text-slate-800
                               focus:ring-2 focus:ring-brand-accent focus:outline-none">
                </div>
                @error('aktivitas_sekarang')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- Rating --}}
            <div>
                <label class="block text-sm font-semibold text-brand-dark mb-2">Rating Alumni (0–5)</label>
                <div class="relative">
                    <i data-lucide="star" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                    <input type="number" name="bintang" min="0" max="5" value="{{ old('bintang') }}"
                        class="w-full pl-12 pr-4 py-3 rounded-xl
                               bg-white border border-slate-300 text-slate-800
                               focus:ring-2 focus:ring-brand-accent focus:outline-none">
                </div>
                @error('bintang')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- Testimoni --}}
            <div>
                <label class="block text-sm font-semibold text-brand-dark mb-2">Testimoni</label>
                <textarea name="testimoni" rows="4"
                    class="w-full px-4 py-3 rounded-xl
                           bg-white border border-slate-300 text-slate-800
                           focus:ring-2 focus:ring-brand-accent focus:outline-none">{{ old('testimoni') }}</textarea>
                @error('testimoni')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

       

            {{-- Submit --}}
            <div class="pt-6 flex justify-end">
                <button type="submit"
                    class="px-8 py-3 rounded-xl bg-brand-accent text-white font-semibold
                           hover:bg-brand-accent-dark transition-all shadow-lg hover:scale-105">
                    Simpan Alumni
                </button>
            </div>

        </form>
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
        lucide.createIcons();
    </script>
</body>


</html>
