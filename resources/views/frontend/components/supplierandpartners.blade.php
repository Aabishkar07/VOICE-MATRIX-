{{-- <section class="py-8 bg-white light text-zinc-900 ">
    <div class="px-4 mx-auto max-w-screen-2xl">
        <div class="grid grid-cols-12 mb-4 mb-md-5">
            <div class="col-span-12 text-center md:col-span-8 md:col-start-3">
                <h2 class="text-[32px] font-bold mb-6">
                    Voice Matrix BPO SERVICES PVT LTD
                </h2>
                <p class="text-lg leading-relaxed opacity-80 md:px-12">
                    Alone we can do so little; together we can do so much.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-12 lg:gap-8">
            @foreach ($suppilers as $suppiler)
                <div class="col-span-12 mt-8 lg:col-span-3">
                    <div class="text-center duration-300 group">
                        <div class="px-12 py-16 rounded-md shadow-md">
                            <img src="{{ asset('uploads/' . $suppiler->featured_image) }}" alt=""
                                class="max-h-[60px] mx-auto" />
                        </div>
                        <p class="mt-6 opacity-75">
                            {{ $suppiler->title }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section> --}}



<section class="bg-white ezy__service7 light py-14 md:py-14 text-zinc-900">
    <div class="container px-4 mx-auto">
      <div class="flex items-center justify-center mb-6 sm:mb-6">
        <div class="w-full max-w-2xl text-center">
          <h2 class="text-3xl leading-none md:text-[45px] font-bold mb-4 slide-in-left">Our Sales Center</h2>

        </div>
      </div>

      <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-2 lg:grid-cols-3 fade-up">
        @foreach ($suppilers as $supplier)

        <div class="p-4 text-black transition-all duration-300 ease-in-out transform bg-gray-100 border border-gray-100 rounded-md shadow-sm hover:scale-105 hover:shadow-lg hover:bg-red-600 hover:text-white">


            <h3 class="mb-3 text-lg font-bold">{{ $supplier->title }}</h3>

            <p><span class="font-semibold">Address</span> - {{ $supplier->address }}</p>
            <p><span class="font-semibold">Phone No</span> - {{ $supplier->number }}</p>
          </div>

        @endforeach
    </div>


    </div>
  </section>


