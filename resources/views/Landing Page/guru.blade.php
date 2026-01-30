<section id="guru" class="py-20 bg-brand-light">
    <div class="container mx-auto px-6 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Guru & Staf Pengajar
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Para pendidik berdedikasi yang menginspirasi dan membimbing siswa kami.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
            @forelse($guru as $item)
                <div class="relative rounded-2xl overflow-hidden shadow-card group teacher-card h-80">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/400x500/0F172A/FFFFFF?text={{ urlencode($item->nama) }}';" />
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 teacher-info opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        <h3 class="text-lg font-bold text-white">{{ $item->nama }}</h3>
                        <p class="text-brand-accent text-sm">{{ $item->jabatan }}</p>
                    </div>
                </div>
            @empty
                <div class="col-span-2 md:col-span-4 text-center py-16">
                    <div class="bg-white shadow-md rounded-2xl p-10 max-w-md mx-auto">
                        <i class="fas fa-user-tie text-5xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-700">Belum ada data guru</h3>
                        <p class="text-gray-500 mt-2">Data guru & staf pengajar akan muncul di sini setelah ditambahkan.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Tombol Lihat Selengkapnya -->
        <div class="mt-8 text-center">
            <a href="{{ route('list.guru') }}"
               class="inline-block px-6 py-3 bg-brand-dark text-white font-semibold rounded-lg hover:bg-brand-dark/90 transition">
               Lihat Selengkapnya
            </a>
        </div>

    </div>
</section>
