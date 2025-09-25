@extends('frontend.layout.app')
@section('body')
    <!-- Enhanced Blog Section with Theme Colors -->
    <section class=" bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden pb-12">


        <!-- Background Pattern -->
        {{-- <div class="absolute inset-0 opacity-3">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #050a30 1px, transparent 0); background-size: 60px 60px;"></div>
        </div> --}}

        <div class="px-6 mx-auto max-md:px-2 max-w-screen-2xl relative z-10">
            <!-- Enhanced Header Section -->
            <div class="max-w-4xl mx-auto mt-8 mb-16 text-center">
                <!-- Main Title with Gradient -->
                <div class="relative mb-8">
                    <h1
                        class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-[#050a30] via-[#ff3131] to-[#050a30] bg-clip-text text-transparent mb-6 leading-tight">
                        Latest Blog Posts
                    </h1>

                </div>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-medium max-w-3xl mx-auto">
                    Stay updated with the latest insights, trends, and expert knowledge from our team
                </p>


            </div>

            <!-- Enhanced Blog Grid -->
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 max-sm:gap-3">
                @foreach ($blogs as $blog)
                    <a class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100" href="{{ route('blogsingle', $blog->slug) }}">
                        @include('frontend.components.blog')
                    </a>
                @endforeach
            </div>


        </div>
    </section>
@endsection
