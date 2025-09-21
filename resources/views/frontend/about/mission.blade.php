<div class=" mx-auto max-w-screen-2xl  p-6 rounded bg-white">
    <div class="flex flex-col lg:flex-row items-center gap-6">
        {{-- @if(!empty($mission->top_image))
            <div class="w-full lg:w-2/5 order-last lg:order-first">
                <img src="{{ asset('uploads/' . $mission->top_image) }}" alt="Our Mission"
                    class="w-full h-auto rounded-xl shadow-2xl object-cover ring-1 ring-[#050a30]/10">
            </div>
        @endif --}}

        <div class="w-full ">
            <div class="inline-flex items-center px-2.5 py-1 rounded-full bg-[#ff3131]/10 text-[#ff3131] text-xs font-medium">
                <span class="w-1.5 h-1.5 bg-[#ff3131] rounded-full mr-2"></span>
                <span>Our Mission</span>
            </div>
            <h2 class="text-[#050a30] text-xl md:text-2xl font-bold mt-2">What Drives Us</h2>
            <div class="w-12 h-[3px] bg-[#ff3131] rounded mt-2"></div>
            <div class="mt-3 text-gray-700 leading-relaxed text-md">
                {!! $mission->description !!}
            </div>
        </div>
    </div>
</div>
