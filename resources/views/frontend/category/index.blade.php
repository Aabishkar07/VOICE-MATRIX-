@extends('frontend.layout.app')
@section('body')
    <div class="max-w-screen-2xl mx-auto">
        {{ $title }}
        @if (isset($subcategories) && !$subcategories->isEmpty())
            <div class="my-4 text-center">
                <h3>Sub Categories</h3>
            </div>


            {{-- <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 ">
                @foreach ($subcategories as $category)


                    <div class="col">
                        <a href="{{ route('subservices', ['service' => $category->slug]) }}" class="text-decoration-none">\


                            <div class="p-3 text-center border-0 shadow-sm card hover-shadow-lg">
                                <div class="mx-auto overflow-hidden border position-relative rounded-circle border-secondary"
                                    style="width: 100px; height: 100px;">
                                    <img src="{{ asset('uploads/' . $category->image) }}" alt="{{ $category->categoryname }}"
                                        class="object-cover img-fluid rounded-circle" style="width: 100px; height: 100px;"
                                        loading="lazy">
                                </div>
                                <h5 class="mt-3 text-dark font-weight-semibold">{{ $category->title }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div> --}}






            <div class="grid grid-cols-1 mt-3 sm:grid-cols-3 lg:grid-cols-4 gap-y-3 gap-x-6">


                @foreach ($subcategories as $service)
                    <a href="{{ route('subservices', ['service' => $service->slug]) }}" class="text-decoration-none">

                        @include('frontend.components.service')
                    </a>
                @endforeach



            </div>
        @endif
    </div>
@endsection
