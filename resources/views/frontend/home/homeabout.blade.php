<section id="about" class="about pt-20 relative overflow-hidden">
    <!-- Background decorative elements -->
    <div
        class="absolute top-0 left-0 w-40 h-40 sm:w-72 sm:h-72 bg-[#ff3131]/20 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
    </div>
    <div
        class="absolute bottom-0 right-0 w-56 h-56 sm:w-96 sm:h-96 bg-[#ff3131]/15 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse delay-1000">
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-10 sm:gap-14 lg:gap-16">
            <!-- Image Section with Unique Hexagonal Shape -->
            <div class="lg:w-1/2 animate-slide-left mb-10 lg:mb-0">
                <div class="relative group">
                    <!-- Blob container -->
                    <div class="blob-container relative w-[320px] h-[320px] sm:w-[500px] sm:h-[500px] mx-auto">
                        <div
                            class="blob-shape overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:scale-105 group-hover:rotate-6">
                            <img src="{{ asset('uploads/' . $about->image ?? '') }}" alt="About Apex BPO"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <!-- Decorative rings -->
                        <div
                            class="absolute -inset-6 border-2 border-[#ff3131]/40 blob-shape opacity-40 animate-spin-slow">
                        </div>
                        <div
                            class="absolute -inset-12 border border-[#ff3131]/25 blob-shape opacity-25 animate-spin-reverse">
                        </div>
                        <div class="absolute -inset-16 border border-[#ff3131]/15 blob-shape opacity-15 animate-pulse">
                        </div>
                    </div>

                    <!-- Enhanced Floating elements -->
                    <div
                        class="hidden sm:flex absolute -top-8 -right-8 w-16 h-16 bg-gradient-to-r from-[#ff3131] to-[#ff3131]/80 rounded-full items-center justify-center text-white font-bold shadow-xl animate-bounce">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <div
                        class="hidden sm:flex absolute -bottom-6 -left-6 w-12 h-12 bg-gradient-to-r from-[#050a30] to-[#050a30]/80 border-2 border-[#ff3131]/30 rounded-full animate-pulse items-center justify-center">
                        <svg class="w-6 h-6 text-[#ff3131]" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                        </svg>
                    </div>
                    <div
                        class="hidden sm:block absolute top-1/2 -left-8 w-10 h-10 bg-gradient-to-r from-[#ff3131]/60 to-[#ff3131]/40 rounded-full animate-ping opacity-75">
                    </div>
                    <div
                        class="hidden sm:block absolute top-1/4 -right-4 w-6 h-6 bg-gradient-to-r from-[#ff3131] to-[#ff3131]/70 rounded-full animate-bounce delay-500">
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="lg:w-1/2 animate-slide-right text-center lg:text-left">
                <div class="space-y-6">
                    <!-- Section Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-[#050a30]/80 backdrop-blur-sm rounded-full border border-[#ff3131]/30 shadow-sm">
                        <span class="w-2 h-2 bg-[#ff3131] rounded-full mr-2 animate-pulse"></span>
                        <span class="text-sm font-medium text-white">About Our Company</span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight">
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
    .blob-shape {
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    }

    .blob-container {
        position: relative;
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spin-reverse {
        from {
            transform: rotate(360deg);
        }

        to {
            transform: rotate(0deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }

    .animate-spin-reverse {
        animation: spin-reverse 15s linear infinite;
    }

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
