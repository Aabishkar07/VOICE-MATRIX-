<section class="relative offers-section py-24 px-6 overflow-hidden">

    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Clean Header Section -->
        <div class="text-center mb-20 fade-in">


            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium mb-6"
                    style="background-color: rgba(5, 10, 48, 0.1); color: #050a30;">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Latest Insights
                </div>
                {{-- <h2 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    What We <span class="text-transparent bg-clip-text"
                        style="background: linear-gradient(to right, #050a30, #ff3131); -webkit-background-clip: text;">Offer</span>

                </h2> --}}
                <h2 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    What We <span class="text-[#ff3131]">Offer</span>

                </h2>
                <!-- Clean subtitle -->
                <div class="max-w-3xl mx-auto">
                    <p class="text-xl md:text-2xl text-gray-600 leading-relaxed">
                        We Offer An Effective Wide Area Business Outsourcing Solutions
                    </p>
                </div>
            </div>




        </div>

        <!-- Clean Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($offers as $offer)
                <a href="{{ route('offers.single', $offer->slug) }}">
                    <div
                        class="border bg-gradient-to-br from-gray-50 via-white to-red-50 rounded-xl shadow-2xl hover:shadow-red-500/10 transition-all duration-500 p-0 group overflow-hidden  border-gray-100">
                        @include('frontend.offer.card')
                    </div>
                </a>
            @endforeach
        </div>


    </div>
</section>
