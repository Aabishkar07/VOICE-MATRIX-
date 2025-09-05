<div class="py-10 ">
    <div id="features" class="mx-auto max-w-screen-2xl px-10">
        <div class="slide-in-left">
            <div class="flex justify-between gap-x-0 items-center">
                <h2 class="max-sm:text-lg text-2xl text-primary text-left text-primary md:text-2xl font-semibold">
                    Value Proposition
                </h2>
            </div>
            <div class="flex py-4">
                <div class="w-[10%] border border-[#ff2953]"></div>
                <div class="w-[90%] border"></div>
            </div>
        </div>

        <ul class="my-10 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3 fade-up">
            <li class="rounded-xl bg-[#7cb439] text-white px-6 py-8 shadow-sm border transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <img src="{{ asset('uploads/' . $mission->top_image) }}" alt="" class="mx-auto h-16 w-16 rounded-full">
                <h3 class="my-3 font-display font-medium">{{ $mission->about_title }}</h3>
                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    {!! $mission->description !!}
                </p>
            </li>
            <li class="rounded-xl bg-[#7cb439] text-white px-6 py-8 shadow-sm border transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <img src="{{ asset('uploads/' . $vision->top_image) }}" alt="" class="mx-auto h-16 w-16 rounded-full">
                <h3 class="my-3  font-display font-medium">{{ $vision->about_title }}</h3>
                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    {!! $vision->description !!}
                </p>
            </li>
            <li class="rounded-xl bg-[#7cb439] text-white px-6 py-8 shadow-sm border transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <img src="{{ asset('uploads/' . $corevalue->top_image) }}" alt="" class="mx-auto h-16 w-16 rounded-full">
                <h3 class="my-3 font-display font-medium">{{ $corevalue->about_title }}</h3>
                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    {!! $corevalue->description !!}
                </p>
            </li>
        </ul>
    </div>
</div>
