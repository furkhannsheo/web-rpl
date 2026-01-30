<x-appLanding>

    <section id="berita" class="py-20 bg-brand-light " style="margin-top: 100px">
        <div class="container mx-auto px-6 animate-on-scroll">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                    Berita & Acara Terbaru
                </h2>
            </div>

            <div id="news-filter" class="flex justify-center space-x-2 md:space-x-4 mb-8">
                <button
                    class="filter-btn active px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300"
                    data-filter="semua">
                    Semua
                </button>
                @foreach (\App\Models\Kategori::all() as $kategori)
                    <button class="filter-btn px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300"
                        data-filter="{{ strtolower($kategori->nama) }}">
                        {{ $kategori->nama }}
                    </button>
                @endforeach
            </div>

            <div id="news-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($berita as $item)
                    <div class="news-item bg-white rounded-2xl overflow-hidden shadow-card group"
                        data-category="{{ strtolower($item->kategori->nama) }}">
                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                alt="{{ $item->judul }}"
                                onerror="this.onerror=null;this.src='https://placehold.co/600x400/E0F2FE/0F172A?text=Berita';" />
                        </div>
                        <div class="p-6">
                            <p class="text-sm text-brand-accent-dark mb-1 font-semibold">
                                {{ $item->kategori->nama }}
                            </p>
                            <h3 class="font-bold text-xl text-brand-dark mb-2">
                                {{ $item->judul }}
                            </h3>
                            <a href="{{ route('detail.berita', $item->slug) }}"
                                class="text-brand-gray hover:text-brand-dark font-semibold group/link inline-flex items-center">
                                Baca Selengkapnya
                                <span
                                    class="transition-transform duration-300 group-hover/link:translate-x-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-16">
                        <div class="bg-white shadow-md rounded-2xl p-10 max-w-md mx-auto">
                            <i class="fas fa-newspaper text-5xl text-gray-400 mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-700">Belum ada berita</h3>
                            <p class="text-gray-500 mt-2">Berita & acara terbaru akan tampil di sini setelah
                                ditambahkan.
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="mt-12">
                {{ $berita->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

</x-appLanding>
