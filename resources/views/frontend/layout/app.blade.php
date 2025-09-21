<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @include('frontend.links.meta')
    <!-- Styles -->
    @include('frontend.links.style')
    @include('frontend.links.script')


</head>
<style>
    /* Ensure reCAPTCHA badge stays above all UI overlays */
    .whatsapp-badge {
        z-index: 2147483649 !important;

    }

    .grecaptcha-badge {
        z-index: 214748 !important;

    }
</style>

<body>
    <div class="">
        {{-- <div class="z-[887] bg-white">
            @include('frontend.layout.topnav')
        </div> --}}
        <div class="fixed whatsapp-badge    bottom-0 right-0 p-4 z-[999]">
            @include('frontend.home.whatsapp')


        </div>
        <div class="sticky top-0  z-[888] bg-white shadow">
            @include('frontend.layout.navbar')
        </div>

        <div class="">
            @yield('body')
        </div>

        <div class="">
            @include('frontend.layout.footer')
        </div>

    </div>
</body>

</html>
