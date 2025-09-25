@if (!$faqs->isEmpty())
    <div class="mx-auto max-w-screen-2xl px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 py-#  slide-in-left">

            @php
                $seq = $faqs->values();
                $left = $seq->filter(function ($item, $key) {
                    return $key % 2 === 0;
                });
                $right = $seq->filter(function ($item, $key) {
                    return $key % 2 === 1;
                });
            @endphp

            <!-- Left Column -->
            <div class="space-y-6">
                @foreach ($left as $key => $faq)
                    <!-- FAQ Card -->
                    <details
                        class="group border-s-4 border-[#ff3131] bg-white p-6 rounded-md drop-shadow-xl shadow-md hover:shadow-xl transition-all duration-300">
                        <summary class="flex cursor-pointer items-center justify-between gap-3">
                            <h3 class="text-lg md:text-xl font-semibold text-[#050a30]">
                                {{ $faq->title }}
                            </h3>

                            <span
                                class="shrink-0 rounded-full bg-[#050a30] text-white p-1.5 sm:p-2.5 transition-colors duration-300 group-open:bg-[#ff3131]">
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

            <!-- Right Column -->
            <div class="space-y-6">
                @foreach ($right as $key => $faq)
                    <!-- FAQ Card -->
                    <details
                        class="group border-s-4 border-[#ff3131] bg-white p-6 rounded-md drop-shadow-xl shadow-md hover:shadow-xl transition-all duration-300">
                        <summary class="flex cursor-pointer items-center justify-between gap-3">
                            <h3 class="text-lg md:text-xl font-semibold text-[#050a30]">
                                {{ $faq->title }}
                            </h3>

                            <span
                                class="shrink-0 rounded-full bg-[#050a30] text-white p-1.5 sm:p-2.5 transition-colors duration-300 group-open:bg-[#ff3131]">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 transition-transform duration-300 group-open:rotate-45"
                                    viewBox="0 0 20 20" fill="currentColor">
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
        </div>
    </div>

@endif
