<section class="relative offers-section py-24 px-6 overflow-hidden">

    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Clean Header Section -->
        <div class="text-center mb-20 fade-in">
            <!-- Main Title -->
            <div class="mb-8">
                <h2 class="text-5xl md:text-6xl font-bold tracking-tight text-gray-900 mb-4">
                    WHAT WE OFFER
                </h2>

                <!-- Simple underline -->
                <div class="w-24 h-1 bg-red-500 mx-auto rounded-full"></div>
            </div>

            <!-- Clean subtitle -->
            <div class="max-w-3xl mx-auto">
                <p class="text-xl md:text-2xl text-gray-600 leading-relaxed">
                    We Offer An Effective Wide Area Business Outsourcing Solutions
                </p>
            </div>
    </div>

        <!-- Clean Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($offers as $offer)
                <a href="{{ route('offers.single',$offer->slug) }}">
                    <div
                        class="border bg-gradient-to-br from-gray-50 via-white to-red-50 rounded-xl shadow-2xl hover:shadow-red-500/10 transition-all duration-500 p-0 group overflow-hidden  border-gray-100">
                        @include('frontend.offer.card')
                    </div>
                </a>
            @endforeach
        </div>


    </div>
</section>
