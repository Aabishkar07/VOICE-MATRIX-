<!-- Blog Sharing Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#ff3131] mb-4">
                    Share This Article
                </h2>

                <p class="text-xl text-gray-600 mb-8">
                    Help others discover this valuable content by sharing it on your favorite social media platforms.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fab fa-facebook-f text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Share on Facebook</h3>
                            <p class="text-gray-600">Connect with your friends and professional network.</p>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                               target="_blank"
                               class="inline-block mt-2 text-blue-600 hover:text-blue-800 font-medium">
                                Share Now →
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fab fa-twitter text-sky-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Tweet This Article</h3>
                            <p class="text-gray-600">Share with your Twitter followers and spark conversations.</p>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                               target="_blank"
                               class="inline-block mt-2 text-sky-600 hover:text-sky-800 font-medium">
                                Tweet Now →
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-700 bg-opacity-10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fab fa-linkedin-in text-blue-700 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Share on LinkedIn</h3>
                            <p class="text-gray-600">Share with your professional network and colleagues.</p>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                               target="_blank"
                               class="inline-block mt-2 text-blue-700 hover:text-blue-900 font-medium">
                                Share Now →
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#ff3131] rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-link text-[#ff3131] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Copy Link</h3>
                            <p class="text-gray-600">Copy the article URL to share anywhere you want.</p>
                            <button onclick="copyToClipboard('{{ request()->fullUrl() }}')"
                                    class="inline-block mt-2 text-[#ff3131] hover:text-[#ff3131] font-medium">
                                Copy URL →
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mt-3">
                <!-- Main Blog Image -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ asset('uploads/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                        class="w-full h-96 object-cover transform hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

                    <!-- Blog Info Overlay -->
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h4 class="text-lg font-semibold mb-2">{{ $blog->title }}</h4>
                        <div class="flex items-center gap-4 text-sm opacity-90">
                            <span class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt"></i>
                                {{ $blog->created_at->format('M d, Y') }}
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="fas fa-clock"></i>
                                {{ ceil(str_word_count(strip_tags($blog->description)) / 200) }}m read
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Floating Share Stats -->
                <div class="absolute -top-8 -right-1 md:-right-8 w-32 h-14" style="animation: bounce 3s infinite;">
                    <div class="relative">
                        <div class="w-full h-full bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg border-4 border-white shadow-xl flex items-center justify-center transform hover:rotate-3 transition-transform duration-500">
                            <div class="text-center text-white">
                                <div class="text-lg font-bold">Share</div>
                                <div class="text-xs opacity-80">& Inspire</div>
                            </div>
                        </div>

                        <!-- Share Badge -->
                        <div class="absolute -bottom-2 -right-2 bg-[#ff3131] text-white text-xs font-bold px-2 py-1 rounded-full animate-pulse">
                            <i class="fas fa-share-alt"></i>
                        </div>
                    </div>
                </div>

                <!-- Quick Share Buttons -->
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <button onclick="shareOnFacebook('{{ request()->fullUrl() }}')"
                        class="bg-blue-600 text-white rounded-lg p-4 text-center shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:bg-blue-700">
                        <i class="fab fa-facebook-f text-xl mb-1"></i>
                        <div class="text-sm font-medium">Facebook</div>
                    </button>
                    <button onclick="shareOnTwitter('{{ request()->fullUrl() }}', '{{ $blog->title }}')"
                        class="bg-sky-500 text-white rounded-lg p-4 text-center shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:bg-sky-600">
                        <i class="fab fa-twitter text-xl mb-1"></i>
                        <div class="text-sm font-medium">Twitter</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

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

function shareOnFacebook(url) {
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), '_blank', 'width=600,height=400');
}

function shareOnTwitter(url, title) {
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(title), '_blank', 'width=600,height=400');
}

function shareOnLinkedIn(url) {
    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(url), '_blank', 'width=600,height=400');
}
</script>
