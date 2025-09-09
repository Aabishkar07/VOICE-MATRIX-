@extends('frontend.layout.app')
@section('body')
    @php
        $setting = getSetting();
    @endphp

    @include('admin.include.toastmessage')

    @include('frontend.home.contact')

    @include('frontend.home.branch')
@endsection
