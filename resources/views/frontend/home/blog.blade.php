<!-- Blog & Insights Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 rounded-full mix-blend-multiply filter blur-xl animate-pulse"
            style="background-color: #050a30;"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"
            style="background-color: #ff3131;"></div>
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 relative">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium mb-6"
                style="background-color: rgba(5, 10, 48, 0.1); color: #050a30;">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                        clip-rule="evenodd"></path>
                </svg>
                Latest Insights
            </div>
            <h2 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                Industry <span class="text-transparent bg-clip-text"
                    style="background: linear-gradient(to right, #050a30, #ff3131); -webkit-background-clip: text;">Insights</span>
                & News
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Stay ahead of the curve with expert analysis, industry trends, and actionable insights from our thought
                leaders
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
            @foreach ($blogs as $blog)
                <a class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100" href="{{ route('blogsingle', $blog->slug) }}">

                    @include('frontend.components.blog')
                </a>
            @endforeach

        </div>


    </div>
</section>
