@extends('frontend.layout.app')
@section('body')
    <!-- Enhanced Hero Section -->
    <div class="relative overflow-hidden" style="background-color: #050a30;">
        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-15"
            style="background-image: url('{{ asset('images/call-center-bg.jpg') }}');">
        </div>

        <!-- Breadcrumb Content -->
        <div class="relative z-10 max-w-screen-2xl mx-auto px-4 py-6">
            <div class="text-center">
                <!-- Breadcrumb Navigation -->
                <nav class="flex justify-center mb-3" aria-label="Breadcrumb">
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
                                <span class="text-sm font-medium text-gray-300">Blog</span>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <span class="text-sm font-medium" style="color: #ff3131;">{{ $blog->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <!-- Blog Title and Description -->
                <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">{{ $blog->title }}</h1>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-8">
                    <!-- Featured Image -->
                    <div class="relative mb-8 group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition-opacity duration-300">
                        </div>
                        <img src="{{ asset('uploads/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                            class="relative w-full h-[60vh] object-cover rounded shadow-2xl" />
                    </div>

                    <!-- Article Content -->
                    <article class="bg-white rounded-2xl shadow-lg p-6 lg:p-8">
                        <div class="prose prose-lg max-w-none">
                            <div class="text-gray-700 leading-relaxed text-lg">
                                {!! $blog->description !!}
                            </div>
                        </div>

                        <!-- Article Footer -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <span class="text-sm text-gray-500">Share this article:</span>
                                    <div class="flex gap-2">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                           target="_blank"
                                            class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                                           target="_blank"
                                            class="w-10 h-10 bg-sky-500 text-white rounded-full flex items-center justify-center hover:bg-sky-600 transition-colors">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                                           target="_blank"
                                            class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <button onclick="copyToClipboard('{{ request()->fullUrl() }}')"
                                            class="w-10 h-10 bg-[#ff3131] text-white rounded-full flex items-center justify-center hover:bg-[#ff3135] transition-colors">
                                            <i class="fas fa-link"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-sm text-gray-500">
                                    Published {{ $blog->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Enhanced Sidebar -->
                <div class="lg:col-span-4">
                    <!-- Related Articles Card -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-6">
                        <div class="bg-gradient-to-r from-blue-600 to-purple-600 px-4 py-3">
                            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                                <i class="fas fa-newspaper"></i>
                                Related Articles
                            </h3>
                        </div>

                        <div class="p-4">
                            @foreach ($otherblogs as $index => $otherblog)
                                <article class="group {{ $index > 0 ? 'mt-4 pt-4 border-t border-gray-100' : '' }}">
                                    <a href="{{ route('blogsingle', $otherblog->slug) }}"
                                        class="flex gap-3 hover:bg-gray-50 p-2 rounded-xl transition-all duration-200">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('uploads/' . $otherblog->featured_image) }}"
                                                alt="{{ $otherblog->title }}"
                                                class="w-16 h-16 object-cover rounded-lg group-hover:scale-105 transition-transform duration-200" />
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4
                                                class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 text-sm">
                                                {{ $otherblog->title }}
                                            </h4>
                                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                                <span class="flex items-center gap-1">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    {{ $otherblog->created_at->format('M d, Y') }}
                                                </span>
                                                <span class="flex items-center gap-1">
                                                    <i class="fas fa-clock"></i>
                                                    {{ ceil(str_word_count(strip_tags($otherblog->description)) / 200) }}m
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Include Blog Sharing Section -->
    {{-- @include('frontend.components.blogshare') --}}

    <style>
        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .prose img {
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .prose h1,
        .prose h2,
        .prose h3,
        .prose h4,
        .prose h5,
        .prose h6 {
            color: #1f2937;
            font-weight: 700;
        }

        .prose p {
            margin-bottom: 1.5rem;
        }

        .prose a {
            color: #2563eb;
            text-decoration: none;
        }

        .prose a:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }
    </style>

    <script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            // Show success message
            const toast = document.createElement('div');
            toast.className = 'fixed top-4 right-4 bg-[#ff3131] text-white px-6 py-3 rounded-lg shadow-lg z-50 transform transition-transform duration-300';
            toast.innerHTML = '<i class="fas fa-check mr-2"></i>Link copied to clipboard!';
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.transform = 'translateX(100%)';
                setTimeout(() => document.body.removeChild(toast), 300);
            }, 2000);
        });
    }
    </script>
@endsection
