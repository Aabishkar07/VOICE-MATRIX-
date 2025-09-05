
<a href="{{ route('productsingle' , $product->slug) }}" >
<div class="group">

    <div class="relative flex items-center justify-center w-full bg-gray-100 rounded">
        <img src="{{ asset('uploads/' . $product->image) }}" alt="" class="h-auto max-w-full" />

    </div>
    <div class="px-1 py-6">
        <div class="flex items-center justify-between">
            <div>

                <h6 class="group-hover:text-blue-600 font-bold text-gray-800 text-[17px]  mb-1">
                   <b>{{ $product->title }}</b>
                </h6>

            </div>
        </div>
        <div>
            <p class="text-gray-700 text-md ">
                {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 150) }}</p>
        </div>
    </div>
</div>
</a>
