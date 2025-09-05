<div class="p-4 fade-up">
    <div class="px-10 mx-auto max-md:px-2 max-w-screen-2xl max-lg:max-w-3xl max-sm:max-w-sm">
        {{-- <div class="max-w-md mx-auto">
        <h2 class="mb-12 text-3xl font-extrabold leading-10 text-center text-gray-800">Stay updated with the latest blog posts.</h2>
      </div> --}}
        <div class="grid grid-cols-1 gap-6  sm:grid-cols-2 lg:grid-cols-3 max-sm:gap-8">
            @foreach ($blogs as $blog)
                <a href="{{ route('blogsingle', $blog->slug) }}" class="overflow-hidden bg-[#7cb439] border rounded">
                    <img src="{{ asset('uploads/' . $blog->featured_image) }}" alt="Blog Post 1"
                        class="object-cover w-full h-52" />
                    <div class="p-6">
                        <h3 class="mb-3 text-lg font-bold text-white">{{ $blog->title }}</h3>
                        <p class="text-sm text-white">
                            {{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 150) }}</p>
                        <p class="text-white text-[13px] font-semibold mt-4">{{ $blog->created_at->format('Y-m-d') }}
                        </p>
                        <div
                            class="mt-4 inline-block px-4 py-2 rounded tracking-wider bg-white text-green-500  text-[13px]">
                            Read
                            More</div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
