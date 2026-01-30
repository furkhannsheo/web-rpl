<section id="fasilitas" class="py-24 bg-brand-light-gray">
    <div class="container mx-auto px-6 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Fasilitas Sekolah
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Menyediakan lingkungan belajar yang modern dan kondusif.
            </p>
        </div>
        <div class="relative">
            <div id="facility-carousel-wrapper" class="overflow-hidden w-full">
                <div id="facility-carousel-container" class="flex carousel-container">
                    @forelse($fasilitas as $item)
                        <div class="carousel-card-wrapper flex-shrink-0 w-full sm:w-1/2 md:w-1/3 p-3">
                            <div
                                class="carousel-card group relative rounded-2xl overflow-hidden shadow-card h-80 bg-slate-100">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                    class="w-full h-full object-cover"
                                    onerror="this.onerror=null;this.src='https://placehold.co/400x500/E0F2FE/0F172A?text={{ urlencode($item->nama) }}';" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                                <h3 class="absolute bottom-4 left-4 text-white text-xl font-bold">
                                    {{ $item->nama }}
                                </h3>
                            </div>
                        </div>
                    @empty
                        <div class="w-full text-center py-16">
                            <div class="bg-white shadow-md rounded-2xl p-10 max-w-md mx-auto">
                                <i class="fas fa-exclamation-circle text-5xl text-gray-400 mb-4"></i>
                                <h3 class="text-xl font-semibold text-gray-700">Belum ada data fasilitas</h3>
                                <p class="text-gray-500 mt-2">Silakan tambahkan data fasilitas di dashboard admin.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            @if ($fasilitas->count() > 0)
                <button id="prev-facility"
                    class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-white/80 backdrop-blur-sm p-3 rounded-full shadow-lg hover:bg-brand-accent hover:text-white transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed z-10">
                    <i data-lucide="chevron-left" class="w-6 h-6"></i>
                </button>
                <button id="next-facility"
                    class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-4 md:translate-x-8 bg-white/80 backdrop-blur-sm p-3 rounded-full shadow-lg hover:bg-brand-accent hover:text-white transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed z-10">
                    <i data-lucide="chevron-right" class="w-6 h-6"></i>
                </button>
            @endif
        </div>

        <!-- Tombol Lihat Selengkapnya -->
        @if ($fasilitas->count() > 0)
            <div class="mt-8 text-center">
                <a href="{{ route('list.fasilitas') }}"
                    class="inline-block px-6 py-3 bg-brand-dark text-white font-semibold rounded-lg hover:bg-brand-dark/90 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        @endif

    </div>
</section>
