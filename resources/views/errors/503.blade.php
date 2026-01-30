<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeliharaan Sistem | MTs Ar-Rosyad</title>

    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="refresh" content="60">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .animate-float-slow {
            animation: float 8s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
        }

        .bg-pattern {
            background-color: #f8fafc;
            /* background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231e293b' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); */
        }
    </style>
</head>
<body class="bg-pattern min-h-screen flex items-center justify-center p-4">

    <div class="max-w-3xl w-full text-center">
        <div class="mb-10 flex flex-col items-center">
            <div class="relative inline-block">
                <div class="absolute -inset-4 bg-emerald-500 blur-2xl opacity-10 rounded-full"></div>
                <div class="glass-panel p-6 rounded-3xl shadow-lg relative animate-float-slow border-emerald-100">
                       <img src="{{ asset('assets/img/logo.png') }}" class="w-14 h-14 shrink-0" alt="Logo">
                </div>
            </div>
            <h2 class="mt-6 text-emerald-700 font-bold tracking-widest uppercase text-sm">MTs Arrosyad</h2>
        </div>

        <div class="glass-panel p-8 md:p-14 rounded-[2.5rem] shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-emerald-50 rounded-full blur-3xl opacity-50"></div>

            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6 leading-tight">
                Sedang Mempersiapkan <br><span class="text-emerald-600 font-medium">Layanan Terbaik</span>
            </h1>

            <p class="text-slate-600 text-lg md:text-xl mb-10 max-w-xl mx-auto leading-relaxed">
                Kami sedang melakukan pembaharuan rutin pada portal akademik MTs Arrosyad demi kenyamanan akses informasi siswa dan tenaga pendidik.
            </p>

            <div class="inline-flex items-center px-6 py-3 rounded-2xl bg-slate-900 text-white shadow-xl shadow-slate-200 transition-all hover:scale-105">
                <div class="flex space-x-1.5 mr-4">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></span>
                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></span>
                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0.3s"></span>
                </div>
                <span class="text-sm font-medium tracking-wide text-white">Proses Perbaikan Dan Optimasi Web</span>
            </div>

            <div class="mt-12 flex justify-center pt-8 border-t border-slate-100">
                <div class="flex items-center space-x-2 text-slate-500">
                    <i data-lucide="clock-3" class="w-5 h-5 text-emerald-600"></i>
                    <span class="text-sm font-semibold uppercase tracking-wider">Segera Kembali Online</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
