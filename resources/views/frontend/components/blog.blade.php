<article
    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100">
    <div class="relative overflow-hidden">
        <img src="{{ asset('uploads/' . $blog->featured_image) }}" alt="Digital Transformation Strategies"
            class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500" />

        <div
            class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
    </div>
    <div class="p-6">
        <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
            </svg>
            {{ $blog->created_at->format('F j, Y') }}
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
            {{ $blog->title }}
        </h3>
        {{-- <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
            {!! Str::words($blog->description, 1, '...') !!}
        </p> --}}
        <div class="inline-flex items-center font-semibold text-sm group-hover:translate-x-1 transition-all duration-300 hover:opacity-80"
            style="color: #ff3131;">
            Read More
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                </path>
            </svg>
        </div>
    </div>
</article>
