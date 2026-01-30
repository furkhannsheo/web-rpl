<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Dashboard</title>
    <link rel="icon" href="/favicon.ico" sizes="48x48">

    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/android-chrome-512x512.png" sizes="512x512">

    <link rel="manifest" href="/site.webmanifest">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .container-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .gbr {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), #060b0f),
                url("{{ asset('assets/img/folder.jpg') }}");
            background-size: contain;
        }
    </style>
</head>

<body class="bg-white flex items-center justify-center min-h-screen p-4">
    <div
        class="bg-white rounded-[40px] container-shadow overflow-hidden max-w-5xl w-full flex flex-col md:flex-row h-auto md:h-[600px]">
        <div
            class="relative flex-1 p-12 flex items-center justify-center text-white rounded-[40px] md:rounded-l-[40px] md:rounded-r-none h-64 md:h-full">
            <div class="absolute inset-0 z-0 rounded-3xl md:rounded-l-3xl md:rounded-r-none gbr"></div>
            <div class="relative z-10 p-4 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Akses Kelola Data, Untuk Digitalisasi Rekayasa Perangkat Lunak.
                </h1>
            </div>
        </div>
        <div class="flex-1 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
            <div class="mb-6 flex justify-center md:justify-start">
                <img src="{{ asset('assets/img/logo.png') }}" width="90" height="90" alt="">
            </div>
            <h2 class="text-3xl font-bold mb-2">Masuk</h2>
            <p class="text-gray-500 mb-6">Selamat datang di Dashboard Rekayasa Perangkat Lunak</p>

            @if (session('gagal'))
                <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
                    {{ session('gagal') }}
                </div>
            @endif
            @if (session('sukses'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('sukses') }}
                </div>
            @endif

            <form method="POST" action="{{ route('store.login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="w-full px-4 py-3 rounded-lg border @error('email') border-red-500 @else border-gray-300 @enderror focus:outline-none focus:ring-2 focus:ring-sky-500"
                        placeholder="example@gmail.com">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-3 rounded-lg border @error('password') border-red-500 @else border-gray-300 @enderror focus:outline-none focus:ring-2 focus:ring-sky-500"
                        placeholder="••••••••••">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-sky-500 text-white font-semibold py-3 rounded-lg hover:bg-sky-600 transition duration-300">
                    Masuk
                </button>
                <div class="mt-4 text-center text-sm text-gray-500">
                    Kembali ke halaman utama?
                    <a href="{{ url('/') }}" class="text-sky-500 hover:text-sky-600 font-medium">
                        Beranda
                    </a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
