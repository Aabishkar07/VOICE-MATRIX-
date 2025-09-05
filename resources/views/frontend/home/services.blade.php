<section class="relative z-10 overflow-hidden bg-white fade-up ">
    <div class="px-10 mx-auto max-w-screen-2xl">




        <div class="grid grid-cols-1 mt-3 sm:grid-cols-3 lg:grid-cols-4 gap-y-3 gap-x-6">
            <!-- item -->
                            {{-- <a href="{{route("servicesingle",$service->slug)}}" class="overflow-hidden bg-white border rounded-xl "> --}}

            @foreach (getCategories(0) as $service)


            <a href="{{ route('subservices', ['service' => $service->slug]) }}" class="text-decoration-none">

                    {{-- <a href="{{ route('subservices', ['service' => $service->slug]) }}" class="text-decoration-none"> --}}
                        {{-- <p class="mt-2 font-weight-bold text-dark">
                            {{ $service->title }}
                        </p> --}}
                    @include('frontend.components.service')
                </a>
            @endforeach



        </div>
    </div>
</section>
