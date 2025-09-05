@extends('frontend.layout.app')
@section('body')
    <div class="mb-5">

        <div class="max-w-md mx-auto mt-5">
            <h2 class="mb-6 text-3xl font-extrabold leading-10 text-center text-gray-800">All Products</h2>
        </div>
        @include('frontend.home.product')
    </div>
@endsection
