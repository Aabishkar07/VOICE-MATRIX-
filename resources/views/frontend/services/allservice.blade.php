@extends('frontend.layout.app')
@section('body')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-blue-400 rounded-full opacity-10 animate-pulse"></div>
            <div
                class="absolute bottom-10 right-10 w-24 h-24 bg-purple-400 rounded-full opacity-10 animate-pulse delay-1000">
            </div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full opacity-5 animate-bounce"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-yellow-400 text-blue-900 text-sm font-semibold rounded-full mb-4">
                    WHY WE ARE THE BEST
                </span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                We offer business expansion<br>
                insights & <span class="text-yellow-400">world-class</span><br>
                outsourcing
            </h1>

            <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                Expert professionals at our end, discuss and document with the clients, to meet their business expectations
                right.
            </p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-8 mt-12">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h3 class="text-lg font-semibold">Flexible business solutions</h3>
                        <p class="text-blue-200 text-sm">For optimum growth, high performance, and unbelievable rise in
                            turnover.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Professional Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive business solutions designed to accelerate your growth and maximize your potential
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div
                        class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-blue-200">
                        <div class="relative overflow-hidden">
                            @if ($service->image)
                                <img src="{{ asset('uploads/' . $service->image) }}" alt="{{ $service->title }}"
                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div
                                    class="w-full h-64 bg-gradient-to-br from-blue-100 to-purple-100 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            @endif
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <div class="p-8">
                            <h3
                                class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $service->title }}
                            </h3>

                            <p class="text-gray-600 mb-6 line-clamp-3">
                                {!! Str::limit(strip_tags($service->description), 120) !!}
                            </p>

                            <div class="flex items-center justify-between">
                                <a href="{{ route('subservices', ['service' => $service->slug]) }}"
                                    class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 group/btn">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>

                                @php
                                    $serviceSubServices = $subServices->where('parent_id', $service->id);
                                @endphp
                                @if ($serviceSubServices->count() > 0)
                                    <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                        {{ $serviceSubServices->count() }} Sub-services
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">
                        Why Choose Our Services?
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        We provide comprehensive business solutions that drive growth and deliver exceptional results for
                        our clients worldwide.
                    </p>

                    <div class="space-y-6">
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
                    </div>
                </div>

                <div class="relative">
                    <!-- Main Business Image -->
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="{{ asset('images/3.png') }}" alt="Business Meeting"
                            class="w-full h-96 object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

                        <!-- Floating Statistics Card -->

                    </div>

                    <!-- Small Animated Image - Positioned Absolutely -->
                    <div class="absolute -top-8 -right-8 w-32 h-14" style="animation: bounce 3s infinite;">
                        <div class="relative">
                            <img src="{{ asset('images/2.png') }}" alt="Success Icon"
                                class="w-full h-full object-cover rounded-lg border-4 border-white shadow-xl transform hover:rotate-12 transition-transform duration-500">


                            <!-- Success Badge -->
                            <div
                                class="absolute -bottom-2 -right-2 bg-[#ff3131] text-white text-xs font-bold px-2 py-1 rounded-full animate-pulse">
                                ✓ 98%
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Cards -->
                    <div class="grid grid-cols-2 gap-4 mt-6">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Let our expert team help you achieve unprecedented growth and success with our comprehensive business
                solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors duration-300">
                    Get Started Today
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ route('about') }}"
                    class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-blue-600 transition-colors duration-300">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>
@endsection
