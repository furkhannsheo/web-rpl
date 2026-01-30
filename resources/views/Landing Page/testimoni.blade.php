<section id="testimoni" class="py-28 bg-brand-light-gray overflow-hidden">
    <div class="container mx-auto px-6 animate-on-scroll">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-dark">
                Apa Kata Alumni Kami?
            </h2>
            <p class="mt-4 text-lg text-brand-gray max-w-2xl mx-auto">
                Kisah dan jejak langkah para alumni yang telah berkembang dan berkarya di berbagai bidang.
            </p>

            <a href="{{ route("daftar.alumni") }}"
                class="mt-2 inline-flex items-center gap-1
          text-sky-500 hover:text-sky-600 font-medium mx-auto">
                <i data-lucide="users" class="w-4 h-4"></i>
                Bergabung sebagai alumni
            </a>

        </div>
    </div>

    <div class="testimonial-scroller-container relative overflow-hidden w-full py-10">
        <div class="testimonial-track flex w-max" id="testimonialTrackLeft">
            @foreach ($alumni as $item)
                <div class="w-[26rem] sm:w-[30rem] mx-4 flex-shrink-0">
                    <!-- CARD -->
                    <div
                        class="relative bg-white border border-gray-200
                           rounded-xl p-8
                           h-[18rem]
                           shadow-card
                           transform transition-all duration-300
                           hover:scale-105 hover:shadow-glow hover:-translate-y-1
                           flex flex-col justify-between">

                        <!-- PETIK DUA -->
                        <div
                            class="absolute top-4 right-6 text-[8rem] leading-none
                               text-emerald-200 font-serif select-none pointer-events-none">
                            ”
                        </div>

                        <!-- HEADER -->
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                    class="w-full h-full object-cover"
                                    onerror="this.onerror=null;this.src='https://placehold.co/96x96/E0F2FE/0F172A?text=?';">
                            </div>

                            <div class="min-w-0">
                                <h4 class="font-bold text-brand-dark truncate">
                                    {{ $item->nama }}
                                </h4>
                                <p class="text-sm text-brand-gray truncate">
                                    Angkatan Tahun {{ $item->angkatan }}
                                </p>
                            </div>
                        </div>

                        <!-- TESTIMONI -->
                        <p
                            class="mt-4 text-brand-gray text-sm italic leading-relaxed
                               overflow-hidden line-clamp-3">
                            "{{ $item->testimoni }}"
                        </p>

                        <!-- FOOTER -->
                        <div class="mt-4">
                            <div class="flex items-center gap-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $item->bintang ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>

                            <p class="mt-2 text-sm text-blue-600 font-medium truncate">
                                Kegiatan sekarang: {{ $item->aktivitas_sekarang }}
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="testimonial-scroller-container relative overflow-hidden w-full py-10">
        <div class="testimonial-track flex w-max" id="testimonialTrackRight">
            @foreach ($alumni as $item)
                <div class="w-[26rem] sm:w-[30rem] mx-4 flex-shrink-0">
                    <!-- CARD -->
                    <div
                        class="relative bg-white border border-gray-200
                           rounded-xl p-8
                           h-[18rem]
                           shadow-card
                           transform transition-all duration-300
                           hover:scale-105 hover:shadow-glow hover:-translate-y-1
                           flex flex-col justify-between">

                        <!-- PETIK DUA -->
                        <div
                            class="absolute top-4 right-6 text-[8rem] leading-none
                               text-emerald-200 font-serif select-none pointer-events-none">
                            ”
                        </div>

                        <!-- HEADER -->
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                    class="w-full h-full object-cover"
                                    onerror="this.onerror=null;this.src='https://placehold.co/96x96/E0F2FE/0F172A?text=?';">
                            </div>

                            <div class="min-w-0">
                                <h4 class="font-bold text-brand-dark truncate">
                                    {{ $item->nama }}
                                </h4>
                                <p class="text-sm text-brand-gray truncate">
                                    Angkatan Tahun {{ $item->angkatan }}
                                </p>
                            </div>
                        </div>

                        <!-- TESTIMONI -->
                        <p
                            class="mt-4 text-brand-gray text-sm italic leading-relaxed
                               overflow-hidden line-clamp-3">
                            "{{ $item->testimoni }}"
                        </p>

                        <!-- FOOTER -->
                        <div class="mt-4">
                            <div class="flex items-center gap-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $item->bintang ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>

                            <p class="mt-2 text-sm text-blue-600 font-medium truncate">
                                Kegiatan sekarang: {{ $item->aktivitas_sekarang }}
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>



</section>

<style>
    .testimonial-scroller-container {
        mask-image: linear-gradient(to right, transparent, white 10%, white 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, white 10%, white 90%, transparent);
    }

    .testimonial-track {
        display: flex;
    }

    #testimonialTrackLeft {
        animation: scrollLeft 200s linear infinite;
    }

    #testimonialTrackRight {
        animation: scrollRight 200s linear infinite;
    }

    @keyframes scrollLeft {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scrollRight {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const trackLeft = document.getElementById("testimonialTrackLeft");
        const trackRight = document.getElementById("testimonialTrackRight");

        trackLeft.innerHTML += trackLeft.innerHTML;
        trackRight.innerHTML += trackRight.innerHTML;
    });
</script>
