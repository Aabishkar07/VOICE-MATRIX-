<div class="absolute inset-0">
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full opacity-5 animate-bounce"></div>
</div>


<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 ">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>

                <h2 class="text-4xl md:text-5xl font-bold text-[#ff3131] mb-4">
                    {{ $best->title }}
                </h2>

                <p class="text-xl text-gray-600 mb-8">
                   {!! $best->description !!}
                </p>

                {{-- <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">24*7 Assistance</h3>
                            <p class="text-gray-600">To help our clients in any hour of need.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#ff3131] rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#ff3131]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Data Security Protocols</h3>
                            <p class="text-gray-600">To safeguard your enterprise's confidential data and personal
                                information.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Flexible Business Solutions</h3>
                            <p class="text-gray-600">For optimum growth, high performance, and unbelievable rise in
                                turnover.</p>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="relative mt-3">
                <!-- Main Business Image -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ asset('uploads/' . $best->image) }}" alt="Business Meeting"
                        class="w-full h-96 object-cover transform hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

                    <!-- Floating Statistics Card -->

                </div>

                <!-- Small Animated Image - Positioned Absolutely -->
                <div class="absolute -top-8 -right-1 md:-right-8 w-32 h-14" style="animation: bounce 3s infinite;">
                    <div class="relative">
                        <img src="{{ asset('uploads/' . $best->mini_image) }}" alt="Success Icon"
                            class="w-full h-full object-cover rounded-lg border-4 border-white shadow-xl transform hover:rotate-12 transition-transform duration-500">


                        <!-- Success Badge -->
                        <div
                            class="absolute -bottom-2 -right-2 bg-[#ff3131] text-white text-xs font-bold px-2 py-1 rounded-full animate-pulse">
                            ✓ 98%
                        </div>
                    </div>
                </div>

                <!-- Statistics Cards -->
                {{-- <div class="grid grid-cols-2 gap-4 mt-6">
                    <div
                        class="bg-white rounded-lg p-4 text-center shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="text-2xl font-bold text-blue-600 mb-1 animate-pulse">500+</div>
                        <div class="text-sm text-gray-600">Happy Clients</div>
                    </div>
                    <div
                        class="bg-white rounded-lg p-4 text-center shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                        <div class="text-2xl font-bold text-[#ff3131] mb-1 animate-pulse">99%</div>
                        <div class="text-sm text-gray-600">Success Rate</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
