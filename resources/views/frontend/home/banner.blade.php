<section
    class="hero pt-5  md:pt-20 pb-10 bg-gradient-to-r from-[#1a365d] to-[#2c5aa0] text-white relative overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-4 ">
        <div class="flex  flex-col md:flex-row gap-x-5 min-h-[60vh] md:min-h-[89vh] relative z-20">
            <!-- Text Content -->
            <div class="md:w-1/2 w-full md:pt-10 lg:pt-12 mb-8 md:mb-0 animate-slide-left relative z-20">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    Transform Your Business with Expert BPO Solutions
                </h1>

                <!-- Swiper Slider -->
                <div class="block md:hidden pb-3  w-full animate-slide-right relative z-20">
                    <swiper-container class="rounded-lg shadow-2xl w-full md:h-[40vh] lg:h-[60vh]" loop="true"
                        {{-- navigation="true" --}} pagination='{"clickable": true}'
                        autoplay='{"delay":3000, "disableOnInteraction": false}' space-between="30">
                        @foreach ($banners as $banner)
                            <swiper-slide>
                                <img src="{{ asset('uploads/' . $banner->image) }}" alt=""
                                    class="w-full h-full object-cover rounded-lg">
                            </swiper-slide>
                        @endforeach

                        <!-- Autoplay Progress -->
                        <div class="autoplay-progress" slot="container-end">
                            <svg viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="20"></circle>
                            </svg>
                            <span></span>
                        </div>
                    </swiper-container>
                </div>

                <p class="text-lg sm:text-xl mb-8 opacity-90">
                    Streamline operations, reduce costs, and enhance efficiency with our comprehensive business process
                    outsourcing services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('about') }}"
                        class="bg-white text-primary font-semibold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 text-center">
                        About Us
                    </a>
                    <a href="{{ route('contact') }}"
                        class="bg-transparent border-2 border-white text-white font-semibold py-3 px-8 rounded-lg hover:bg-white hover:text-primary transition-all duration-300 transform hover:-translate-y-1 text-center">
                        Contact US
                    </a>
                </div>
            </div>

            <!-- Swiper Slider -->
            <div class="hidden md:block  md:w-1/2 w-full animate-slide-right relative z-20">
                <swiper-container class="rounded-lg shadow-2xl w-full md:h-[40vh] lg:h-[60vh]" loop="true"
                    {{-- navigation="true" --}} pagination='{"clickable": true}'
                    autoplay='{"delay":3000, "disableOnInteraction": false}' space-between="30">
                    @foreach ($banners as $banner)
                        <swiper-slide>
                            <img src="{{ asset('uploads/' . $banner->image) }}" alt=""
                                class="w-full h-full object-cover rounded-lg">
                        </swiper-slide>
                    @endforeach

                    <!-- Autoplay Progress -->
                    <div class="autoplay-progress" slot="container-end">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span></span>
                    </div>
                </swiper-container>
            </div>

        </div>
    </div>


    <!-- Bottom Wave SVG -->
    <div class="pointer-events-none absolute -bottom-px left-0 w-full z-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full ">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,106.7C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
</section>

<section id="industries" class="industries relative top-0 sm:-top-2 md:-top-36 z-[666]">
    <div class="max-w-screen-2xl mx-auto px-4">


        <div class="text-center mb-12 sm:mb-16 animate-fade-in">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[#ff3131]/30 bg-[#050a30]/90 text-white mb-4">
                <span class="w-2 h-2 rounded-full bg-[#ff3131] animate-pulse"></span>
                <span class="text-sm font-medium">Our Expertise</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#050a30] tracking-tight mb-3">
                Industries We <span class="text-[#ff3131]">Serve</span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto">Specialized BPO solutions for diverse industry
                sectors</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
            @foreach ($industries as $industry)
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white border border-[#050a30]/10 hover:border-[#ff3131] shadow-sm  transition-all duration-300 will-change-transform hover:-translate-y-1 animate-scale-in">
                    <div
                        class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-[#050a30] via-[#ff3131] to-[#050a30] opacity-80">
                    </div>
                    <div class="px-4 sm:px-6 pt-6 pb-5 text-center">
                        <div
                            class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-xl bg-[#050a30]/5 ring-1 ring-[#050a30]/10 group-hover:ring-[#ff3131]/40 transition">
                            <img src="{{ asset('uploads/' . $industry->image) }}" alt="{{ $industry->title }}"
                                class="object-contain w-16 h-16 sm:w-20 sm:h-20 group-hover:scale-105 transition-transform duration-300" />
                        </div>
                        <h3
                            class="text-base sm:text-lg font-semibold text-[#050a30] group-hover:text-[#ff3131] transition-colors">
                            {{ $industry->title }}</h3>
                    </div>
                    <div
                        class="pointer-events-none absolute -bottom-6 -right-6 h-16 w-16 rounded-full bg-[#ff3131]/10 blur-xl group-hover:bg-[#ff3131]/20 transition">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    // Initialize all swiper containers
    document.querySelectorAll('swiper-container').forEach(el => el.initialize());

    // Autoplay Progress
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiperEl = document.querySelector("swiper-container");
    swiperEl.addEventListener("autoplaytimeleft", (e) => {
        const [swiper, time, progress] = e.detail;
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    });
</script>

<!-- Demo styles -->
<style>
    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .autoplay-progress {
        position: absolute;
        right: 16px;
        bottom: 16px;
        z-index: 10;
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
        --progress: 0;
        position: absolute;
        left: 0;
        top: 0px;
        width: 100%;
        height: 100%;
        stroke-width: 4px;
        stroke: var(--swiper-theme-color);
        fill: none;
        stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
        stroke-dasharray: 125.6;
        transform: rotate(-90deg);
    }

    /* Theme animations used by Industries section */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(16px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.98);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-fade-in {
        animation: fadeInUp 0.8s ease both;
    }

    .animate-scale-in {
        animation: scaleIn 0.5s ease both;
    }
</style>
