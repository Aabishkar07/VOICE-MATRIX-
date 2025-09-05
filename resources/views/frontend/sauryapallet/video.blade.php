@extends('frontend.layout.app')
@section('body')
    <section class="pt-8 mx-auto overflow-hidden bg-white light text-stone-800 max-w-screen-2xl">
        <div class="px-10">
            <h2 class="text-2xl font-bold text-left text-gray-800 max-sm:text-lg md:text-2xl ">
                Saurya Krishi Video
            </h2>
            <div class="py-4">

                @include('frontend.home.video')
            </div>
        </div>
    </section>
    {{-- <div class="">

        @include('frontend.home.testimonials')
    </div> --}}
@endsection
