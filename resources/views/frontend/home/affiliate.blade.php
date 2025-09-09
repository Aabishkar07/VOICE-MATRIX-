<!-- Trusted Partners Section -->
<section class="py-20 relative overflow-hidden" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 rounded-full mix-blend-multiply filter blur-xl animate-pulse"
            style="background-color: #050a30;"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"
            style="background-color: #ff3131;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium mb-6"
                style="background-color: rgba(5, 10, 48, 0.1); color: #050a30;">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" clip-rule="evenodd">
                    </path>
                </svg>
                Trusted Partners
            </div>
            <h2 class="text-5xl font-bold mb-6 leading-tight" style="color: #050a30;">
                Companies That <span class="text-transparent bg-clip-text"
                    style="background: linear-gradient(to right, #050a30, #ff3131); -webkit-background-clip: text;">Trust</span>
                Our Solutions
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Join hundreds of successful companies who have transformed their business with our innovative messenger
                solutions
            </p>
        </div>
        <!-- Partners Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Partner 1 -->

            @foreach ($affiliations as $affiliation)
                <div class="group relative">
                    <div
                        class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 p-8 border border-gray-100 relative overflow-hidden">
                        <!-- Accent Border -->
                        <div class="absolute top-0 left-0 w-full h-1 rounded-t-2xl"
                            style="background: linear-gradient(to right, #ff3131, #050a30);"></div>

                        <div class="text-center">
                            <div class="relative ">
                                <div
                                    class=" mx-auto rounded-2xl flex items-center justify-center h-24 object-contain transition-all duration-300 group-hover:scale-110">
                                    <img src="{{ asset('uploads/' . $affiliation->image) }}"
                                        alt="InnovateLab"
                                        class=" transition-all duration-300 filter grayscale group-hover:grayscale-0" />
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section>
