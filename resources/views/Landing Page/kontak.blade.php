<section id="kontak" class="py-20 md:py-24 bg-brand-light">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Hubungi Kami
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Kami siap menjawab pertanyaan Anda. Isi formulir atau hubungi kami
                melalui informasi di bawah.
            </p>
        </div>
        <div
            class="max-w-6xl mx-auto p-4 md:p-8 rounded-3xl bg-brand-light-gray grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 animate-on-scroll">
            <div class="flex flex-col justify-center">
                <h3 class="text-2xl font-bold mb-4">Informasi Kontak</h3>
                <p class="mb-8 text-brand-gray">
                    Jangan ragu untuk menghubungi kami. Tim kami akan dengan senang
                    hati membantu Anda.
                </p>
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="bg-brand-accent text-white p-3 rounded-full shadow-lg">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Alamat</h4>
                            <p class="text-brand-gray">
                                Jl. Raya Sidoarjo No.38 Krian, 61262
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-brand-accent text-white p-3 rounded-full shadow-lg">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Telepon</h4>
                            <p class="text-brand-gray">+62 812-1440-5673</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-brand-accent text-white p-3 rounded-full shadow-lg">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Email</h4>
                            <p class="text-brand-gray">rplsmkkrian1@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 w-full h-80 rounded-2xl overflow-hidden shadow-xl">
                    <iframe class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3962828247318!2d112.58550764372096!3d-7.421320125308028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78084e164c2e91%3A0xda653a49b0cff45c!2sSMK%20Krian%201%20Sidoarjo!5e0!3m2!1sen!2sid!4v1769674206705!5m2!1sen!2sid"
                        allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="rounded-3xl bg-white p-8 shadow-card">
                <h3 class="text-2xl font-bold mb-6">Kirim Pesan</h3>

                <form action="{{ route('pesan.store') }}" method="POST" class="grid grid-cols-1 gap-y-8">
                    @csrf

                    <div>
                        <label for="nama_lengkap" class="block text-sm text-brand-gray mb-1">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                            placeholder="Masukkan nama Anda" required
                            class="form-input w-full @error('nama_lengkap') border-red-500 @enderror" />
                        @error('nama_lengkap')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm text-brand-gray mb-1">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="contoh@email.com" required
                            class="form-input w-full @error('email') border-red-500 @enderror" />
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subjek" class="block text-sm text-brand-gray mb-1">Subjek</label>
                        <input type="text" id="subjek" name="subjek" value="{{ old('subjek') }}"
                            placeholder="Masukkan subjek pesan" required
                            class="form-input w-full @error('subjek') border-red-500 @enderror" />
                        @error('subjek')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="pesan" class="block text-sm text-brand-gray mb-1">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required
                            class="form-input w-full @error('pesan') border-red-500 @enderror">{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full px-6 py-3 rounded-xl bg-brand-dark text-white font-semibold hover:bg-slate-800 transition duration-300 hover:shadow-glow-dark">
                        Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </div>
    @if (session('success'))
        <div id="successOverlay"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 opacity-0 transition-opacity duration-300">
            <div id="successModal"
                class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 text-center scale-95 opacity-0 transition-all duration-300">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 111.414-1.414L8.414 12.172l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h5 class="text-xl font-bold mb-2">Berhasil!</h5>
                <p class="text-gray-600 mb-6">{{ session('success') }}</p>
                <button id="closeSuccessModal"
                    class="px-6 py-2 rounded-md bg-green-500 text-white font-semibold hover:bg-green-600 transition">
                    OK
                </button>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const overlay = document.getElementById("successOverlay");
                const modal = document.getElementById("successModal");
                const btn = document.getElementById("closeSuccessModal");

                setTimeout(() => {
                    overlay.classList.remove("opacity-0");
                    modal.classList.remove("opacity-0", "scale-95");
                }, 50);

                btn.addEventListener("click", () => {
                    overlay.classList.add("opacity-0");
                    modal.classList.add("opacity-0", "scale-95");
                    setTimeout(() => {
                        overlay.style.display = "none";
                    }, 300);
                });
            });
        </script>
    @endif

</section>
