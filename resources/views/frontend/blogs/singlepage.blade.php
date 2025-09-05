@extends('frontend.layout.app')
@section('body')
    <section class="py-10 bg-white light text-zinc-900 ">
        <div class="px-4 mx-auto max-w-screen-2xl">
            <div class="grid gap-4 md:grid-cols-3">
                <div class="col-span-3 px-4 md:col-span-2">
                    <h1 class="mb-12 text-xl font-bold md:text-3xl">{{ $blog->title }}</h1>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 px-4 md:col-span-8">
                    <img src="{{ asset('uploads/' . $blog->featured_image) }}" alt="" class="w-full h-auto rounded" />
                    <div>
                        <p class="text-[17px] mb-2 opacity-80 text-">
                            {!! $blog->description !!}
                        </p>

                    </div>
                </div>
                <div class="col-span-12 px-4 md:col-span-4 lg:col-span-3 lg:col-start-9 md:pl-6 lg:pl-0">
                    <div class="px-3 py-4 mb-4 text-white rounded-t-lg bg-stone-900 bg-opacity-90">
                        <h5 class="text-xl font-medium">Other Blogs</h5>
                    </div>
                    @foreach ($otherblogs as $otherblog)
                        <!-- blog item -->
                        <a href="{{ route('blogsingle', $otherblog->slug) }}" class="flex items-start justify-between gap-4">
                            <img src="{{ asset('uploads/' . $otherblog->featured_image) }}" alt=""
                                class="w-20 rounded img-fluid" />
                            <div class="ml-3">
                                <h6 class="mb-2 text-base font-medium leading-tight">{{ $otherblog->title }}
                                </h6>
                                <div class="flex flex-wrap opacity-50">
                                    <span class="mr-3 text-xs">{{ $otherblog->created_at->format('Y-m-d') }}</span>

                                </div>
                            </div>
                        </a>
                        <hr class="my-3 text-blue-600 text-opacity-25 bg-blue-600" />
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
