@if (!$faqs->isEmpty())
    <div class="space-y-6 px-14 py-14 max-lg:px-10 max-sm:px-5 slide-in-left">

        @foreach ($faqs as $key => $faq)
            <!-- FAQ Card -->
            <details class="group border-s-4 border-[#ff3131] bg-white p-6 rounded-md drop-shadow-xl shadow-md hover:shadow-xl transition-all duration-300" close>
                <summary class="flex cursor-pointer items-center justify-between gap-3">
                    <h3 class="text-lg md:text-xl font-semibold text-[#050a30]">
                        {{ $faq->title }}
                    </h3>

                    <span class="shrink-0 rounded-full bg-[#050a30] text-white p-1.5 sm:p-2.5 transition-colors duration-300 group-open:bg-[#ff3131]">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-5 h-5 transition-transform duration-300 group-open:rotate-45" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>

                <div class="mt-4 border-t border-[#050a30]/10 pt-4 text-gray-700 leading-relaxed">
                    {!! $faq->description !!}
                </div>
            </details>
        @endforeach
    </div>
@endif
