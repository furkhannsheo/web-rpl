<section id="galeri" class="py-20 bg-brand-light-gray">
    <div class="container mx-auto px-6 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Galeri Kegiatan
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Momen-momen berharga dari kehidupan di Rekayasa Perangkat Lunak.
            </p>
        </div>

        @if ($galeri->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($galeri as $item)
                    <div class="relative w-full aspect-[3/2] overflow-hidden rounded-lg">
                        <img class="absolute inset-0 w-full h-full object-cover shadow-md
           transition-transform duration-300 hover:scale-105
           hover:shadow-lg cursor-pointer"
                            src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                            onclick="openModal(
        '{{ asset('storage/' . $item->gambar) }}',
        '{{ addslashes($item->judul) }}',
        '{{ addslashes($item->deskripsi) }}'
    )"
                            onerror="this.onerror=null;
        this.src='https://placehold.co/600x400/E0F2FE/0F172A?text={{ urlencode($item->judul) }}';" />

                    </div>
                @endforeach
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('list.galeri') }}"
                    class="inline-block px-6 py-3 bg-brand-dark text-white font-semibold rounded-lg hover:bg-brand-dark/90 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        @else
            <div class="w-full text-center py-16">
                <div class="bg-white shadow-md rounded-2xl p-10 max-w-md mx-auto">
                    <i class="fas fa-image text-5xl text-gray-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700">Belum ada foto galeri</h3>
                    <p class="text-gray-500 mt-2">Foto kegiatan sekolah akan tampil di sini setelah ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
