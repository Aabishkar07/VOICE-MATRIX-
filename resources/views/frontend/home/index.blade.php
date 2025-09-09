@extends('frontend.layout.app')
@section('body')
{{-- @include('frontend.home.popup') --}}

    @include('frontend.home.banner')
    @include('frontend.home.homeabout')

    @include('frontend.home.offers')
    @include('frontend.home.offersection')
    @include('frontend.home.blog')

    @include('frontend.home.faq')
    @include('frontend.home.affiliate')
    @include('frontend.home.branch')
    @include('frontend.home.contact')




    {{-- <div class="mx-auto my-10 max-w-screen-2xl ">
        <div class="px-10 max-sm:px-4">
            <div class="flex flex-wrap items-center justify-between ">
                <h2 class="text-2xl font-bold text-left text-gray-800 max-sm:text-lg md:text-2xl slide-in-left">
                    Our Products
                </h2>
                <a href="{{ route('services') }}" class="flex items-center px-4 py-2 text-gray-800 hover:underline ">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M13 18l6 -6"></path>
                        <path d="M13 6l6 6"></path>
                    </svg>
                </a>
            </div>
            <div class="flex py-3">
                <div class="w-[10%] border border-[#f15a28]"></div>
                <div class="w-[90%] border"></div>
            </div>

        </div>
        @include('frontend.home.services')
    </div> --}}






{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<div class="mx-auto my-4 max-w-screen-2xl ">
    <div class="px-10 max-sm:px-4 slide-in-left">
        <div class="flex flex-wrap items-center justify-between">
            <h2 class="text-2xl font-bold text-left text-gray-800 max-sm:text-lg md:text-2xl">
                Poultry Feed
            </h2>
            <a href="{{ route('products') }}" class="flex items-center px-4 py-2 text-gray-800 hover:underline">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l14 0"></path>
                    <path d="M13 18l6 -6"></path>
                    <path d="M13 6l6 6"></path>
                </svg>
            </a>
        </div>
        <div class="flex py-3">
            <div class="w-[10%] border border-[#f15a28]"></div>
            <div class="w-[90%] border"></div>
        </div>
    </div>

    <div class="px-10 owl-carousel owl-theme fade-up">
        @foreach ($products as $product)
        <div class="item">
            <a href="{{ route('productsingle', $product->slug) }}" class="overflow-hidden bg-white border rounded-xl ">

            <div class="group">
                <div class="relative flex items-center justify-center w-full rounded">
                    <img src="{{ asset('uploads/' . $product->image) }}" alt="" class="h-[32vh] max-w-full object-contain" />
                </div>
                <div class="px-1 py-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h6 class="group-hover:text-[#7cb439] font-bold text-gray-800 text-[17px] mb-1">
                                <b>{{ $product->title }}</b>
                            </h6>
                        </div>
                    </div>

                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            margin: 10,
            autoplay:true,
            autoplayTimeout: 2000,
            loop:true,
            nav:false,
            dots:false,
            responsive: {
                640: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1024: {
                    items: 4,
                }
            }
        });
    });
</script> --}}



    {{-- @include('frontend.home.parallax')

    @include('frontend.home.mission')
    @include('frontend.home.testimonials')



    <div class="mx-auto mt-12 max-w-screen-2xl ">
        <div class="col-span-1">
            <div class="px-10 max-sm:px-4 slide-in-left">
                <div class="flex flex-wrap items-center justify-between ">
                    <h2 class="text-2xl font-bold text-left text-gray-800 max-sm:text-lg md:text-2xl ">
                        Stay updated with the latest blog posts.                    </h2>
                    <a href="{{ route('allblogs') }}" class="flex items-center px-4 py-2 text-gray-800 hover:underline ">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M13 18l6 -6"></path>
                            <path d="M13 6l6 6"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex py-3">
                    <div class="w-[10%] border border-[#f15a28]"></div>
                    <div class="w-[90%] border"></div>
                </div>

            </div>
        </div>
        @include('frontend.blogs.blogcomponent')
    </div>


    @include('frontend.home.teams')
    @include('frontend.components.faq') --}}




@endsection



