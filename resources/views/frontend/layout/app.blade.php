<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Voice Matrix BPO SERVICES PVT LTD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Public Sans", serif !important;
            font-weight: 400;
            font-style: normal;
        }
    </style>

    <style>
        .mylist ul {
            list-style-type: disc !important;
            padding-left: 20px;
            margin-left: 0;
        }

        .mylist li {
            padding-top: 2px;
            display: list-item !important;
        }

        .mylist ol {
            display: block;
            padding-left: 20px;
            list-style-type: decimal !important;
        }
    </style>
    <style>
        .carttable {
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        .carttable td {
            border: none;
            border-bottom: 1px solid #d3d3d3;
            font-size: 1rem;
        }

        .carttable th {
            border-bottom: 1px solid #d3d3d3;
            padding: 0.5rem 0.2rem;
            font-size: 1rem;
        }
    </style>
    <link rel="shortcut icon" href="{{ asset('images/voicefavicon.png') }}">

    @include('frontend.links.script')


</head>

<body>
    <div class="">
        {{-- <div class="z-[887] bg-white">
            @include('frontend.layout.topnav')
        </div> --}}
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


{{-- div animaiton --}}

<style>
    .fade-up {
        opacity: 0;
        transform: translateY(100px); /* Start a bit lower for more dramatic effect */
        transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
    }

    .fade-up.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const divs = document.querySelectorAll(".fade-up");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Delay each element for a staggered effect
                        setTimeout(() => {
                            entry.target.classList.add("active");
                        }, 100); // Adjust delay as needed (100ms in this case)
                    }
                });
            },
            { threshold: 0.2 } // Trigger when 20% of the element is visible
        );

        divs.forEach((div) => observer.observe(div));
    });
</script>


{{-- text animaiton --}}
<style>
    .slide-in-left {
        opacity: 0;
        transform: translateX(-50px); /* Start slightly to the left */
        transition: opacity 0.8s ease-out, transform 0.6s ease-out;
    }

    .slide-in-left.active {
        opacity: 1;
        transform: translateX(0); /* End at its original position */
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".slide-in-left");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    }
                });
            },
            { threshold: 0.1 } // Trigger when 10% of the element is visible
        );

        elements.forEach((element) => observer.observe(element));
    });
</script>

