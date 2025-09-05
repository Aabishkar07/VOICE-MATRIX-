@extends('frontend.layout.app')
@section('body')
    <section class="pt-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">
        <div class="px-10">
            <h2 class="max-sm:text-lg text-2xl font-bold text-left text-gray-800 md:text-2xl slide-in-left">
                Saurya Krishi Gallery
            </h2>
            <div class="py-4">

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 fade-up">
                    <!-- card item -->

                    @foreach ($galleries as $gallery)
                        <div class="group relative  aspect-square-container max-h-[20rem] overflow-hidden  rounded-lg my-2">
                            <img class="object-cover w-full h-full transition-transform duration-300 transform scale-100 group-hover:scale-105"
                                src="{{ asset('uploads/' . $gallery->image) }}" alt="Image 1">
                            <div
                                class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
                                {{-- <p class="text-lg font-bold text-white">{{ $gallery->name }}</p> --}}
                            </div>

                        </div>
                    @endforeach



                </div>

            </div>
        </div>
    </section>
    {{-- <div class="">

        @include('frontend.home.testimonials')
    </div> --}}
@endsection
