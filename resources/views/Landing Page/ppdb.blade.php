<section id="ppdb" class="bg-brand-light-gray">
    <div class="relative py-20 overflow-hidden shadow-lg group">
        <img src="{{ $konfigurasi->gambar_ppdb
            ? asset('storage/' . $konfigurasi->gambar_ppdb)
            : 'https://placehold.co/1200x600/0F172A/FFFFFF?text=SPMB+Dibuka' }}"
            alt="Penerimaan Siswa Baru"
            class="w-full h-full object-cover absolute inset-0 transition-transform duration-500 group-hover:scale-105" />

        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/90 via-brand-dark/70 to-transparent"></div>
        <div
            class="relative p-6 sm:p-8 md:p-12 flex flex-col justify-center items-start min-h-[400px] md:w-3/2 lg:w-1/2">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-brand-light">
                {{ $konfigurasi->headline_ppdb }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-xl">
                {{ $konfigurasi->teks_ppdb }}
            </p>
        </div>
    </div>
</section>
