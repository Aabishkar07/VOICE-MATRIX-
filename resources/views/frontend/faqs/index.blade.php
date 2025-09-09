@extends('frontend.layout.app')
@section('body')
    <div class="px-20 space-y-4 py-14 max-lg:px-10 max-sm:px-5">

        <div
            class="flex items-center justify-center text-4xl font-bold text-gray-800 max-md:text-2xl max-sm:text-xl md:pb-10 slide-in-left">
            <h2 class="text-2xl md:text-3xl font-bold text-left text-[#050a30] max-sm:text-lg">
                Frequently Asked <span class="px-2 text-[#ff3131]">Questions</span>
            </h2>
        </div>

        @include('frontend.components.faq')



    </div>
@endsection
