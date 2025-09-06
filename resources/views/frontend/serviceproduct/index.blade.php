@extends('frontend.layout.app')

@section('body')
    <!-- Breadcrumb Section with Call Center Background -->
    <div class="relative overflow-hidden" style="background-color: #050a30;">
        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-15"
            style="background-image: url('{{ asset('images/call-center-bg.jpg') }}');">
        </div>

        <!-- Breadcrumb Content -->
        <div class="relative z-10 max-w-screen-2xl mx-auto px-4 py-8 sm:py-10">
            <div class="text-center">
                <!-- Breadcrumb Navigation -->
                <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200">
                                <i class="fas fa-home mr-2"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <span class="text-sm font-medium text-gray-300">Services</span>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <span class="text-sm font-medium" style="color: #ff3131;">{{ $service->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-white slide-in-left">
                    {{ $service->title }}
                </h1>
            </div>
        </div>
    </div>

    <!-- Service Content Section -->
    <div class="bg-white py-12">
        <div class=" px-4 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
            <div class="bg-white ">
                <!-- Service Description -->
                <div class="prose prose-lg max-w-none">
                    <div class="mylist leading-relaxed text-lg" style="color: #050a30;">
                        {!! $service->description !!}
                    </div>
                </div>

                <!-- Simple Call to Action -->
                <div class="mt-12 max-w-4xl mx-auto text-center ">
                    <div class="rounded-2xl p-8 bg-white border-2" style="border-color: #ff3131;">
                        <h3 class="text-2xl font-bold mb-4" style="color: #050a30;">Ready to Get Started?</h3>
                        <p class="text-lg mb-6" style="color: #ff3131;">
                            Contact us today to learn more about how our {{ $service->title }} can benefit your business.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center px-8 py-3 font-semibold rounded-lg transition-colors duration-200"
                                style="background-color: #ff3131; color: white; hover:opacity: 0.9;">
                                <i class="fas fa-phone mr-2"></i>
                                Contact Us
                            </a>
                            {{-- <a href="{{ route('home') }}#services"
                                class="inline-flex items-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white transition-colors duration-200"
                                style="hover:color: #ff3131;">
                                <i class="fas fa-arrow-left mr-2"></i>
                                View All Services
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
