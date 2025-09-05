@extends('frontend.layout.app')

@section('body')
    <div class="max-w-screen-2xl mx-auto py-3">




        @if ($products->isEmpty())
            <div class="my-32">
                No Product Founds.
            </div>
        @else


        <div class="grid grid-cols-1 mt-3 sm:grid-cols-3 lg:grid-cols-4 gap-y-3 gap-x-6">

            @foreach ($products as $key => $product)

                @include('frontend.components.product', $product)
            @endforeach
        </div>
        @endif
    </div>

@endsection
