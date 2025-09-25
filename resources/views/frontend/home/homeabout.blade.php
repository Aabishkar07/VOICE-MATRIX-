<section id="about" class="about  relative overflow-hidden">
    <!-- Background decorative elements -->

    <div class="max-w-screen-2xl mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-10 sm:gap-8 lg:gap-8">
            <!-- Image Section (Normal Image) -->
            <div class="lg:w-1/2 animate-slide-left  lg:mb-0 order-1 max-sm:order-2">
                <div class="w-full  mx-auto">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl ring-1 ring-gray-200/60 bg-white/70 backdrop-blur-sm transition-transform duration-300 hover:shadow-3xl hover:-translate-y-1">
                        <img src="{{ asset('uploads/' . ($about->image ?? '')) }}" alt="About Apex BPO"
                            class="w-full h-full object-contain">
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="lg:w-1/2 max-sm:mt-5 animate-slide-right text-center lg:text-left order-2 max-sm:order-1">
                <div class="space-y-2">
                    <!-- Section Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-[#050a30]/80 backdrop-blur-sm rounded-full border border-[#ff3131]/30 shadow-sm">
                        <span class="w-2 h-2 bg-[#ff3131] rounded-full mr-2 animate-pulse"></span>
                        <span class="text-sm font-medium text-white">About Our Company</span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="text-2xl sm:text-3xl font-bold leading-tight">
                        <span class="text-[#050a30]">{{ $about->title }}</span>
                        <br>
                        {{-- <span id="typewriter"
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#ff3131] via-[#ff3131]/80 to-[#ff3131]/60"></span> --}}
                    </h2>

                    <!-- Typewriter Script -->
                    <script>
                        const text = "Organizations Achieve Ultimate Success";
                        const typewriter = document.getElementById("typewriter");
                        let i = 0;
                        let isDeleting = false;

                        function type() {
                            if (!isDeleting && i < text.length) {
                                typewriter.innerHTML += text.charAt(i);
                                i++;
                                setTimeout(type, 100);
                            } else if (isDeleting && i > 0) {
                                typewriter.innerHTML = text.substring(0, i - 1);
                                i--;
                                setTimeout(type, 50);
                            } else if (!isDeleting && i === text.length) {
                                setTimeout(() => {
                                    isDeleting = true;
                                    type();
                                }, 3000);
                            } else if (isDeleting && i === 0) {
                                isDeleting = false;
                                setTimeout(type, 500);
                            }
                        }

                        type();
                    </script>

                    <!-- Description -->
                    <div class="prose max-w-none md:prose-lg text-gray-600 leading-relaxed">
                        {!! $about->description ?? '' !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .animate-slide-left {
        animation: slideInLeft 1s ease-out;
    }

    .animate-slide-right {
        animation: slideInRight 1s ease-out;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .shadow-3xl {
        box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
    }
</style>
