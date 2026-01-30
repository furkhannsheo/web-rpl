<section id="prestasi" class="py-20 bg-brand-light">
    <div class="container mx-auto px-6 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Prestasi Siswa
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Merayakan pencapaian luar biasa dari para siswa kami.
            </p>
        </div>
        <div class="relative">
            <div id="achievement-carousel-wrapper" class="overflow-hidden w-full">
                <div id="achievement-carousel-container" class="flex carousel-container">
                    @forelse($prestasi as $item)
                        <div class="carousel-card-wrapper flex-shrink-0 w-full sm:w-1/2 md:w-1/3 p-3">
                            <div
                                class="carousel-card relative rounded-2xl shadow-card overflow-hidden group h-96 bg-brand-dark">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->siapa_yang_meraih }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 opacity-80 group-hover:opacity-60"
                                    onerror="this.onerror=null;this.src='https://placehold.co/400x500/0F172A/FFFFFF?text={{ urlencode($item->nama_kejuaraan) }}';" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent flex flex-col justify-end p-6 text-white">
                                    <h3 class="text-2xl font-bold text-brand-accent drop-shadow-md">
                                        {{ $item->nama_kejuaraan }}
                                    </h3>
                                    <p class="mt-1 font-semibold">{{ $item->siapa_yang_meraih }}</p>
                                    <p class="mt-2 text-sm text-slate-300 italic">
                                        "{{ $item->deskripsi_singkat }}"
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="w-full text-center py-16">
                            <div class="bg-white shadow-md rounded-2xl p-10 max-w-md mx-auto">
                                <i class="fas fa-trophy text-5xl text-gray-400 mb-4"></i>
                                <h3 class="text-xl font-semibold text-gray-700">Belum ada data prestasi</h3>
                                <p class="text-gray-500 mt-2">Prestasi siswa akan tampil di sini setelah ditambahkan.
                                </p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            @if ($prestasi->count() > 0)
                <button id="prev-achievement"
                    class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-white/80 backdrop-blur-sm p-3 rounded-full shadow-lg hover:bg-brand-accent hover:text-white transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed z-10">
                    <i data-lucide="chevron-left" class="w-6 h-6"></i>
                </button>
                <button id="next-achievement"
                    class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-4 md:translate-x-8 bg-white/80 backdrop-blur-sm p-3 rounded-full shadow-lg hover:bg-brand-accent hover:text-white transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed z-10">
                    <i data-lucide="chevron-right" class="w-6 h-6"></i>
                </button>
            @endif
        </div>

        <!-- Tombol Lihat Selengkapnya -->
        @if ($prestasi->count() > 0)
            <div class="mt-8 text-center">
                <a href="{{ route('list.prestasi') }}"
                   class="inline-block px-6 py-3 bg-brand-dark text-white font-semibold rounded-lg hover:bg-brand-dark/90 transition">
                   Lihat Selengkapnya
                </a>
            </div>
        @endif

    </div>
</section>
