<div class="grid grid-cols-2 max-sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-4">
    <!-- card item -->

    @foreach ($videos as $video)
        <div class="my-2 overflow-hidden bg-gray-100 rounded-lg">

            @include('frontend.components.video')
        </div>
    @endforeach



</div>
