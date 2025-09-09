<!-- Branch Section -->
<section class="py-16 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#050a30] rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-[#ff3131] rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-[#050a30] rounded-full mb-6">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13..414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-[#050a30] mb-4">
                Our
                <span class="text-[#ff3131]">Locations</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We serve clients across major cities in India and Nepal
            </p>
            <div class="w-24 h-1 bg-[#ff3131] mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Cities Grid -->
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                @foreach ($partners as $partner)
                    <a href="{{ route('location.single', $partner->slug) }}">
                        <div
                            class="bg-[#050a30] rounded-xl p-6 border  hover:border-[#ff3131]/50 transition-all duration-300 group cursor-pointer">
                            <div class="flex items-center justify-between">
                                <h3
                                    class="text-xl font-semibold text-white group-hover:text-[#ff3131] transition-colors duration-300">
                                    {{ $partner->title }}</h3>
                                <svg class="w-6 h-6 text-white/60 group-hover:text-[#ff3131] group-hover:translate-x-1 transition-all duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>

        </div>
</section>
