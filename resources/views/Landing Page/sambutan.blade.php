<section id="sambutan" class="py-20 bg-brand-light">
    <div class="container mx-auto px-6 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Sambutan Kepala Kejuruan Rekayasa Perangkat Lunak
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Sebuah pesan hangat untuk calon siswa dan orang tua.
            </p>
        </div>
        <div class="flex flex-col-reverse md:flex-row items-center justify-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <p class="text-xl md:text-2xl font-medium text-brand-dark italic leading-relaxed">
                    "{{ $konfigurasi->kata_sambutan }}"
                </p>
            </div>
            <div class="md:w-1/3">
                <div class="relative rounded-2xl shadow-xl overflow-hidden group h-96">
                    <img src="{{ asset('storage/' . $konfigurasi->foto_kepala_sekolah) }}"
                        alt="Foto Kepala Sekolah"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-brand-dark/50 to-transparent flex flex-col justify-end p-6 text-white">
                        <h3 class="text-2xl font-bold text-white drop-shadow-md">
                            {{ $konfigurasi->nama_kepala_sekolah }}
                        </h3>
                        <p class="mt-1 font-semibold text-brand-accent">
                            Kepala Kejuruan Rekayasa Perangkat Lunak
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
