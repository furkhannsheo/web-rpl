@push('preload')
    <link rel="preload"
          as="image"
          href="{{ asset('storage/' . $konfigurasi->banner_web) }}"
          fetchpriority="high">
@endpush

<section class="relative min-h-[100svh] flex items-center justify-center pt-24 pb-20 overflow-hidden">

    <!-- HERO IMAGE -->
    <img
        src="{{ asset('storage/' . $konfigurasi->banner_web) }}"
        alt="RPL - SMK Krian 1 Sidoarjo"
        fetchpriority="high"
        decoding="async"
        loading="eager"
        class="absolute inset-0 w-full h-full object-cover z-0">

    <!-- OVERLAY KONTRAS (PENTING UNTUK KETERBACAAN TEKS) -->
    <div class="absolute inset-0 z-10 pointer-events-none">
        <!-- dark soft overlay -->
        <div class="absolute inset-0 bg-black/25"></div>

        <!-- bottom fade -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#f0f9ff]"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-20 container mx-auto px-6 text-center">

        <h1
            class="text-5xl md:text-7xl font-extrabold leading-tight mb-4
                   text-brand-dark animate-on-scroll
                   [text-shadow:0_2px_8px_rgba(0,0,0,0.35)]">
            Rekayasa Perangkat Lunak
        </h1>

        <p
            class="text-base md:text-xl max-w-3xl mx-auto mb-1
                   text-brand-black animate-on-scroll
                   [text-shadow:0_1px_6px_rgba(0,0,0,0.25)]"
            style="transition-delay:100ms">
            Rekayasa Perangkat Lunak (RPL) adalah bidang ilmu yang mempelajari perancangan, pengembangan, pengujian, 
            dan pemeliharaan perangkat lunak agar sistem yang dibuat berkualitas, efisien, dan sesuai kebutuhan pengguna.
        </p>

        <p
            class="hidden md:block text-sm md:text-base text-brand-black mb-8
                   animate-on-scroll
                   [text-shadow:0_1px_6px_rgba(0,0,0,0.25)]"
            style="transition-delay:100ms">
            Pendidikan yang Menginspirasi dan Mencetak Generasi Berakhlak
        </p>

        <!-- CTA -->
        <div class="flex justify-center space-x-4 animate-on-scroll" style="transition-delay:200ms">
            <a href="#tentang"
               class="bg-brand-dark text-brand-light font-bold
                      px-6 py-2.5 md:px-8 md:py-3
                      text-sm md:text-base
                      rounded-full hover:bg-slate-800
                      transition-all transform hover:scale-105 hover:shadow-glow-dark">
                Profil Sekolah
            </a>
        </div>

        <!-- STATISTIK -->
        <div
            class="mt-8 md:mt-10 bg-white/50 backdrop-blur-sm
                   p-4 md:p-6
                   rounded-2xl max-w-4xl mx-auto
                   flex flex-col md:flex-row justify-around items-center
                   text-left gap-4 md:gap-6 animate-on-scroll"
            style="transition-delay:300ms">

            <!-- ITEM 1 -->
            <div
                class="relative flex items-center space-x-2 md:space-x-3
                       pb-3 md:pb-0
                       border-b border-brand-gray/20
                       md:border-b-0
                       md:pr-8 md:after:content-['']
                       md:after:absolute md:after:right-0 md:after:top-1/2
                       md:after:-translate-y-1/2 md:after:h-8 md:after:w-px
                       md:after:bg-brand-gray/30">
                <i data-lucide="award"
                   class="w-6 h-6 md:w-8 md:h-8 text-brand-accent-dark"></i>
                <div>
                    <p class="font-bold text-lg md:text-xl text-brand-dark">
                        {{ $konfigurasi->statistik_satu_judul }}
                    </p>
                    <p class="text-brand-gray text-sm">
                        {{ $konfigurasi->statistik_satu_deskripsi }}
                    </p>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div
                class="relative flex items-center space-x-2 md:space-x-3
                       pb-3 md:pb-0
                       border-b border-brand-gray/20
                       md:border-b-0
                       md:pr-8 md:after:content-['']
                       md:after:absolute md:after:right-0 md:after:top-1/2
                       md:after:-translate-y-1/2 md:after:h-8 md:after:w-px
                       md:after:bg-brand-gray/30">
                <i data-lucide="users"
                   class="w-6 h-6 md:w-8 md:h-8 text-brand-accent-dark"></i>
                <div>
                    <p class="font-bold text-lg md:text-xl text-brand-dark">
                        {{ $konfigurasi->statistik_dua_judul }}
                    </p>
                    <p class="text-brand-gray text-sm">
                        {{ $konfigurasi->statistik_dua_deskripsi }}
                    </p>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="flex items-center space-x-2 md:space-x-3">
                <i data-lucide="star"
                   class="w-6 h-6 md:w-8 md:h-8 text-brand-accent-dark"></i>
                <div>
                    <p class="font-bold text-lg md:text-xl text-brand-dark">
                        {{ $konfigurasi->statistik_tiga_judul }}
                    </p>
                    <p class="text-brand-gray text-sm">
                        {{ $konfigurasi->statistik_tiga_deskripsi }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
