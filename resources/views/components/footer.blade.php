<footer class="bg-brand-dark text-white shadow-lg ">

    <div class="bg-light-dark py-5 px-6">
        <div class="mx-auto max-w-7xl text-center">
            <p class="text-text-primary text-base font-medium italic leading-relaxed px-4">
                "Tuntutlah ilmu setinggi mungkin, raihlah akhlak semulia mungkin. Masa depan umat ada di tanganmu."
            </p>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="grid grid-cols-1 gap-y-12 gap-x-8 sm:grid-cols-2 lg:grid-cols-5">

            <div class="space-y-4">
                <div class="flex items-center space-x-2 mb-2">
                    <img src="{{ asset('assets/img/logo.png') }}" width="40" height="40" alt="">
                    <h3 class="text-xl font-bold tracking-tight text-text-primary">RPL SMK Krian 1 Sidoarjo</h3>
                </div>
                <p class="text-sm text-text-secondary">
                    Rekayasa Perangkat Lunak (RPL) adalah bidang ilmu yang mempelajari perancangan, pengembangan, pengujian, dan pemeliharaan perangkat lunak agar sistem yang dibuat berkualitas, efisien, dan sesuai kebutuhan pengguna.
                </p>

            </div>

            <div class="space-y-4 lg:ms-10">
                <h3 class="font-semibold tracking-tight uppercase text-text-primary">Informasi</h3>
                <ul class="space-y-3 text-sm text-text-secondary">
                    <li><a href="#tentang" class="hover:text-text-primary transition duration-150">Tentang Kami</a></li>
                    <li><a href="#berita" class="hover:text-text-primary transition duration-150">Berita</a></li>
                    <li><a href="#kontak" class="hover:text-text-primary transition duration-150">Kontak</a></li>
                    <li><a href="#galeri" class="hover:text-text-primary transition duration-150">Galeri</a></li>
                    <li><a href="#testimoni" class="hover:text-text-primary transition duration-150">Testimoni</a></li>
                    <li><a href="#ppdb" class="hover:text-text-primary transition duration-150">Ppdb</a></li>
                </ul>
            </div>

            <div class="space-y-4">
                <h3 class="font-semibold tracking-tight uppercase text-text-primary">Kelola Data</h3>
                <ul class="space-y-3 text-sm text-text-secondary">
                    <li><a href="{{ route('berita.index') }}"
                            class="hover:text-text-primary transition duration-150">Berita</a>
                    </li>
                    <li><a href="{{ route('konfigurasi.edit', 1) }}"
                            class="hover:text-text-primary transition duration-150">Konfigurasi</a>
                    <li><a href="{{ route('guru.index') }}"
                            class="hover:text-text-primary transition duration-150">Guru</a></li>
                    <li><a href="{{ route('prestasi.index') }}"
                            class="hover:text-text-primary transition duration-150">Prestasi</a>
                    </li>
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <h3 class="font-semibold tracking-tight uppercase text-text-primary">Program & Ekskul</h3>
                <ul class="space-y-3 text-sm text-text-secondary">
                    <li><a href="#desaingrafis" class="hover:text-text-primary transition duration-150">Desain Grafis</a></li>
                    <li><a href="#softwareaplikasi" class="hover:text-text-primary transition duration-150">Software Aplikasi</a>
                    </li>
                    <li><a href="#webprogramming" class="hover:text-text-primary transition duration-150">Web Programming</a></li>
                    <li><a href="#cloud" class="hover:text-text-primary transition duration-150">Cloud</a></li>
                    <li><a href="#artificialintelligence" class="hover:text-text-primary transition duration-150">Artificial Intelligence</a></li>
                    <li><a href="#robotik" class="hover:text-text-primary transition duration-150">Robotik</a></li>
                    <li><a href="#cybersecurity" class="hover:text-text-primary transition duration-150">Cyber Security</a></li>
                </ul>
            </div>

            <div class="space-y-4 lg:col-span-1">
                <h3 class="font-semibold tracking-tight uppercase text-text-primary">Ikuti Kami</h3>
                <p class="text-sm text-text-secondary">Jangan lewatkan informasi terbaru dari Jurusan RPL SMK Krian 1 Sidoarjo.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="https://www.facebook.com/mts.arrosyad/"
                        class="text-text-secondary hover:text-white transition duration-300 transform hover:scale-110"
                        aria-label="Facebook">
                        <i data-lucide="facebook" class="w-7 h-7"></i>
                    </a>
                    <a href="https://e-gsm.edumate.id/schools/mts-arrosyad"
                        class="text-text-secondary hover:text-white transition duration-300 transform hover:scale-110"
                        aria-label="Twitter/X">
                        <i data-lucide="twitter" class="w-7 h-7"></i>
                    </a>
                    <a href="https://www.instagram.com/mts_arrosyad/"
                        class="text-text-secondary hover:text-white transition duration-300 transform hover:scale-110"
                        aria-label="Instagram">
                        <i data-lucide="instagram" class="w-7 h-7"></i>
                    </a>
                    <a href="https://youtu.be/nBWxMLKWQKM?si=ggAfR4PdFXzmTbTP"
                        class="text-text-secondary hover:text-white transition duration-300 transform hover:scale-110"
                        aria-label="YouTube">
                        <i data-lucide="youtube" class="w-7 h-7"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="mt-12 pt-6 border-t border-gray-700">
            <p class="text-text-secondary text-center text-sm">
                &copy; 2026
                <span class="text-text-primary font-medium">Support By RPL SMK Krian 1 Sidoarjo</span>
                Semua Hak Dilindungi.
            </p>
        </div>

    </div>
</footer>
