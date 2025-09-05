<section class="relative z-10 overflow-hidden bg-white ">
    <div class="px-10 mx-auto max-w-screen-2xl">




        <div class="grid grid-cols-1 mt-3 sm:grid-cols-3 lg:grid-cols-4 gap-y-3 gap-x-6">
            <!-- item -->
            @foreach ($products as $product)
                <a href="{{ route('productsingle', $product->slug) }}" class="overflow-hidden bg-white border rounded-xl ">

                    @include('frontend.components.product')
                </a>
            @endforeach



        </div>
    </div>
</section>
