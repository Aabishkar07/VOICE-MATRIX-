<div class="relative ">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <div class="absolute top-0 right-0 w-40 h-40 rounded-full -translate-y-20 translate-x-20"
            style="background: linear-gradient(135deg, #050a30 0%, #ff3131 100%);"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 rounded-full translate-y-16 -translate-x-16"
            style="background: linear-gradient(45deg, #ff3131 0%, #050a30 100%);"></div>
    </div>

    <!-- Image Section -->
    <div class="relative">
        <div class="w-full h-56 rounded overflow-hidden relative">
            <img src="{{ asset('uploads/' . $offer->image) }}" alt="Professional BPO Team"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
           
        </div>
    </div>

    <!-- Content Section -->
    <div class="relative p-3">
        <div class="flex items-center mb-4">
            <div class="w-1 h-8 rounded mr-4"
                style="background: linear-gradient(to bottom, #ff3131, #050a30);">
            </div>
            <h3 class="text-lg font-bold transition-colors duration-300"
                style="color: #050a30; font-family: 'Inter', sans-serif;">
                {{ $offer->title }}
            </h3>
        </div>

        <p class="text-gray-700 leading-relaxed mb-8 text-md font-medium">
            {{ $offer->short_description }}
        </p>



        <!-- CTA Buttons -->
        <div class=" flex justify-end w-full ">
            <div class="flex space-x-4">
                <div
                    class="group/btn flex-1 justify-end w-44     text-white px-2 py-2 rounded-xl font-bold hover:shadow-2xl transition-all duration-300 flex items-center  space-x-2 relative overflow-hidden"
                    style="background: linear-gradient(135deg, #050a30 0%, #ff3131 100%);">
                    <div
                        class="absolute inset-0 bg-white/10 translate-x-full group-hover/btn:translate-x-0 transition-transform duration-500">
                    </div>
                    <span class="relative z-10">Read More</span>
                    <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform duration-300 relative z-10"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>

            </div>
        </div>

    </div>


</div>
