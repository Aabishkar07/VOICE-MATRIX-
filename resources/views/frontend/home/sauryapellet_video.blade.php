@if ($videos->count() > 0)

<section class="py-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">
    <div class="px-10 max-sm:px-4">
        <div class="grid justify-center grid-cols-1">
            <div class="col-span-1">
                <div class="">
                    <div class="flex flex-wrap items-center justify-between ">
                        <h2 class="text-2xl font-bold text-left text-gray-800 max-sm:text-lg md:text-2xl ">
                             Video
                        </h2>
                        <a href="{{ route('videos') }}"
                            class="flex items-center px-4 py-2 text-gray-800 max-sm:px-2 hover:underline ">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l14 0"></path>
                                <path d="M13 18l6 -6"></path>
                                <path d="M13 6l6 6"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex py-3">
                        <div class="w-[10%] border border-[#f15a28]"></div>
                        <div class="w-[90%] border"></div>
                    </div>

                </div>
            </div>

            <div class="relative ">
                @include('frontend.home.video')
            </div>
        </div>
    </div>
</section>
@endif
