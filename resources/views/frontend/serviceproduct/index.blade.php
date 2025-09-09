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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-4 h-4 mr-2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10h6v-6h4v6h6V10" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-4 h-4 text-gray-400 mx-2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="text-sm font-medium text-gray-300">{{$title}}</span>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-4 h-4 text-gray-400 mx-2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-4 h-4 mr-2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2l2 4-2 2a16 16 0 006 6l2-2 4 2v2a2 2 0 01-2 2h-1C9.82 21 3 14.18 3 6V5z" />
                                </svg>
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
