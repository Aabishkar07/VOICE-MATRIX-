@extends('frontend.layout.app')
@section('body')
<div class="mx-auto max-w-screen-2xl px-10 bg-white my-5">
        <h1 class="text-2xl sm:fw-md font-bold mb-4">{{ $data->title }}</h1>

        <p class="mb-4">
          {!!$data->description!!}
        </p>

</div>
@endsection


