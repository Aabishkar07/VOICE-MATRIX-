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


{{-- text animaiton --}}
<style>
    .slide-in-left {
        opacity: 0;
        transform: translateX(-50px);
        /* Start slightly to the left */
        transition: opacity 0.8s ease-out, transform 0.6s ease-out;
    }

    .slide-in-left.active {
        opacity: 1;
        transform: translateX(0);
        /* End at its original position */
    }
</style>

{{-- div animaiton --}}

<style>
    .fade-up {
        opacity: 0;
        transform: translateY(100px);
        /* Start a bit lower for more dramatic effect */
        transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
    }

    .fade-up.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
