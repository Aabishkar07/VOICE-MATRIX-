@extends('frontend.layout.app')
@section('body')
    <style>
        .mylist ul {
            list-style-type: disc !important;
            padding-left: 20px;
            margin-left: 0;
        }

        .mylist li {
            padding-top: 2px;
            display: list-item !important;
        }

        .mylist ol {
            display: block;
            padding-left: 20px;
            list-style-type: decimal !important;
        }
    </style>
    <div class="relative h-[60vh] fade-up">
        <div class="absolute inset-0">
            <img src="{{ asset('uploads/' . $about->top_image) }}" alt="Background Image" class="object-cover w-full h-full" />
        </div>
        <div class="absolute inset-0 bg-[#050a30]/80"></div>

        <div
            class="relative z-10 flex items-center justify-center h-full max-w-screen-xl px-8 mx-auto text-center text-white">
            <div class="mb-4 text-4xl font-extrabold leading-tight md:text-5xl">
                <div class="relative z-10 max-w-screen-2xl mx-auto px-4 py-8 sm:py-10">
                    <div class="text-center">
                        <!-- Breadcrumb Navigation -->
                        <nav class="flex justify-center mb-4" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="{{ route('home') }}"
                                        class="inline-flex items-center text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" class="w-4 h-4 mr-2" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l9-9 9 9M4 10v10h6v-6h4v6h6V10" />
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" class="w-4 h-4 text-gray-400 mx-2" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                        <span class="text-sm font-medium text-gray-300">About Us
                                    </div>
                                </li>
                                {{-- <li aria-current="page">
                                    <div class="flex items-center">
                                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                        <span class="text-sm font-medium"
                                            style="color: #ff3131;">{{ $service->title }}</span>
                                    </div>
                                </li> --}}
                            </ol>
                        </nav>

                        <!-- Page Title -->
                        {{-- <h1 class="text-3xl md:text-4xl font-bold text-white slide-in-left">
                            {{ $service->title }}
                        </h1> --}}
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="">
        <section id="about" class="about py-16 bg-[#f8fafc] overflow-hidden">
            <div class="max-w-screen-2xl mx-auto px-4 relative z-10">
                <div class="mb-10 text-center">
                    <div
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#ff3131]/10 text-[#ff3131] text-sm font-medium">
                        <span class="w-2 h-2 bg-[#ff3131] rounded-full mr-2"></span>
                        <span>About Us</span>
                    </div>
                    <h2 class="mt-4 text-3xl md:text-4xl font-extrabold text-[#050a30]">Who We Are</h2>
                    <div class="mt-3 mx-auto w-24 h-1 bg-[#ff3131] rounded"></div>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2">
                        <img src="{{ asset('uploads/' . ($about->mid_image ?? '')) }}" alt="{{ $about->about_title }}"
                            class="w-full h-auto rounded-xl shadow-2xl object-cover ring-1 ring-[#050a30]/10">
                    </div>

                    <div class="lg:w-1/2">
                        <div class="space-y-6">
                            <div class="border-l-4 border-[#ff3131] pl-6">
                                <h3 class="text-2xl md:text-3xl font-bold text-[#050a30]">{{ $about->about_title }}</h3>
                                <p class="mt-3 text-gray-700 leading-relaxed">
                                    {!! $about->description ?? '' !!}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <div class="my-5 w-full max-w-6xl mx-auto flex justify-center items-center">
        <div>
            @include('frontend.about.vision')
            @include('frontend.about.mission')
        </div>
    </div>


    {{-- <div class="my-5 fade-up">

        @include('frontend.home.teams')
    </div> --}}

@endsection
