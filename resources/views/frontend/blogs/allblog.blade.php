@extends('frontend.layout.app')
@section('body')
    <!-- Enhanced Blog Section with Theme Colors -->
    <section class="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden min-h-screen">
        <!-- Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-24 h-24 bg-[#ff3131] rounded-full opacity-5 animate-pulse"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-[#050a30] rounded-full opacity-10 animate-bounce"></div>
            <div class="absolute bottom-20 left-1/3 w-20 h-20 bg-gradient-to-r from-[#ff3131] to-[#050a30] rounded-full opacity-8 animate-ping"></div>
        </div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-3">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #050a30 1px, transparent 0); background-size: 60px 60px;"></div>
        </div>

        <div class="px-10 mx-auto max-md:px-2 max-w-screen-2xl max-lg:max-w-3xl max-sm:max-w-sm relative z-10">
            <!-- Enhanced Header Section -->
            <div class="max-w-4xl mx-auto mt-8 mb-16 text-center">
                <!-- Main Title with Gradient -->
                <div class="relative mb-8">
                    <h1 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-[#050a30] via-[#ff3131] to-[#050a30] bg-clip-text text-transparent mb-6 leading-tight">
                        Latest Blog Posts
                    </h1>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-gradient-to-r from-[#ff3131] to-[#050a30] rounded-full"></div>
                </div>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-medium max-w-3xl mx-auto">
                    Stay updated with the latest insights, trends, and expert knowledge from our team
                </p>

                <!-- Decorative Elements -->
                <div class="flex justify-center items-center gap-4 mt-8">
                    <div class="w-12 h-0.5 bg-gradient-to-r from-transparent to-[#ff3131]"></div>
                    <div class="w-3 h-3 bg-[#ff3131] rounded-full animate-pulse"></div>
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#ff3131] to-[#050a30]"></div>
                    <div class="w-3 h-3 bg-[#050a30] rounded-full animate-pulse"></div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-[#050a30] to-transparent"></div>
                </div>
            </div>

            <!-- Enhanced Blog Grid -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 max-sm:gap-10">
                @foreach ($blogs as $blog)
                    <div class="group relative">
                        <!-- Hover Background Effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#ff3131]/5 to-[#050a30]/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 transform scale-95 group-hover:scale-100"></div>
                        
                        <!-- Blog Card Container -->
                        <a href="{{ route('blogsingle', $blog->slug) }}" class="block relative z-10 transform hover:-translate-y-2 transition-all duration-500">
                            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group-hover:border-[#ff3131]/20">
                                @include('frontend.components.blog')
                                
                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-[#050a30]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 rounded-2xl">
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="flex items-center justify-between">
                                            <span class="text-white text-sm font-medium bg-[#ff3131] px-3 py-1 rounded-full">
                                                Read More
                                            </span>
                                            <svg class="w-6 h-6 text-white transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Bottom CTA Section -->
            <div class="text-center mt-20">
                <div class="inline-flex items-center gap-4 bg-white rounded-full px-8 py-4 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-3 h-3 bg-[#ff3131] rounded-full animate-pulse"></div>
                    <span class="text-[#050a30] font-semibold">Discover more insights and stories</span>
                    <div class="w-3 h-3 bg-[#050a30] rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
