<section class="hero pt-20 pb-16 md:pt-20 md:pb-20 bg-gradient-to-r from-[#1a365d] to-[#2c5aa0] text-white relative">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center min-h-[60vh] md:min-h-[89vh]">

            <!-- Text Content -->
            <div class="md:w-1/2 mb-8 md:mb-0 animate-slide-left">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    Transform Your Business with Expert BPO Solutions
                </h1>
                <p class="text-lg sm:text-xl mb-8 opacity-90">
                    Streamline operations, reduce costs, and enhance efficiency with our comprehensive business process
                    outsourcing services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services"
                        class="bg-white text-primary font-semibold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 text-center">
                        Our Services
                    </a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white text-white font-semibold py-3 px-8 rounded-lg hover:bg-white hover:text-primary transition-all duration-300 transform hover:-translate-y-1 text-center">
                        Get a Quote
                    </a>
                </div>
            </div>

            <!-- Swiper Slider -->
            <div class="md:w-1/2 w-full animate-slide-right relative">
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
    <div class="absolute -bottom-1 left-0 w-full z-50">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,106.7C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
</section>

<section id="industries" class="industries  relative  -top-36 z-[666]">
    <div class="container mx-auto px-4">


        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-[#050a30] mb-4">
                Industries We
                <span class="text-[#ff3131]">Serve</span>
            </h2>

            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Specialized BPO solutions for diverse industry sectors
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="industry-card bg-gray-50 rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in"
                style="animation-delay: 0.1s">
                <i class="fas fa-hospital text-4xl text-primary mb-4"></i>
                <h3 class="text-lg font-semibold text-secondary">Healthcare</h3>
            </div>
            <div class="industry-card bg-gray-50 rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in"
                style="animation-delay: 0.2s">
                <i class="fas fa-university text-4xl text-primary mb-4"></i>
                <h3 class="text-lg font-semibold text-secondary">Banking & Finance</h3>
            </div>
            <div class="industry-card bg-gray-50 rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in"
                style="animation-delay: 0.3s">
                <i class="fas fa-shopping-cart text-4xl text-primary mb-4"></i>
                <h3 class="text-lg font-semibold text-secondary">Retail & E-commerce</h3>
            </div>
            <div class="industry-card bg-gray-50 rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in"
                style="animation-delay: 0.4s">
                <i class="fas fa-plane text-4xl text-primary mb-4"></i>
                <h3 class="text-lg font-semibold text-secondary">Travel & Hospitality</h3>
            </div>
            <div class="industry-card bg-gray-50 rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in"
                style="animation-delay: 0.5s">
                <i class="fas fa-mobile-alt text-4xl text-primary mb-4"></i>
                <h3 class="text-lg font-semibold text-secondary">Telecommunications</h3>
            </div>
            <div class="industry-card bg-gray-50 rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in"
                style="animation-delay: 0.6s">
                <i class="fas fa-industry text-4xl text-primary mb-4"></i>
                <h3 class="text-lg font-semibold text-secondary">Manufacturing</h3>
            </div>
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
</style>
