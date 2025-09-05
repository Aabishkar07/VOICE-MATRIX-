@if (!$faqs->isEmpty())
    <div class="space-y-4 px-14 py-14 max-lg:px-10 max-sm:px-5 slide-in-left">
        <div class="">
            <div class="flex flex-wrap items-center justify-between ">
                <h2 class="text-2xl font-bold text-left text-gray-800 max-sm:text-lg md:text-2xl ">
                    Frequently Asked<span class="px-2 text-black"> Questions</span>
                </h2>


                <a href="{{ route('faqs') }}" class="flex items-center px-4 py-2 text-gray-800 hover:underline ">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="20"
                        height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
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
        @foreach ($faqs as $key => $faq)
            <details
                class="group border-s-4 border-gray-800 bg-[#7cb439] p-6 [&_summary::-webkit-details-marker]:hidden fade-up"
                close>
                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                    <h2 class="text-lg font-medium text-white">
                        {{ $faq->title }}
                    </h2>

                    <span class="shrink-0 rounded-full bg-white p-1.5 text-[#7cb439] sm:p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 transition duration-300 shrink-0 group-open:-rotate-45" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-white">
                    {{ $faq->description }}
                </p>
            </details>
        @endforeach
    </div>
@endif
