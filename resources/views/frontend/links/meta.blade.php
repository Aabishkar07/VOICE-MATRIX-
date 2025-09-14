@php
    $segment = request()->segment(1);
    $meta = getMetas(Request::segment(1), Request::segment(2));

@endphp

<title>{{ $meta->title . ' | Voice Matrix' ?? 'Voice Matrix' }}</title>

<meta name=description content="{{ strip_tags($meta->description) }}">
{{-- og --}}
<meta property=og:title content="{{ $meta->title ?? 'Voice Matrix' }}" />
<meta property=og:description content="{{ strip_tags($meta->description) }}" />
<meta property=og:image content="{{ 'https://www.voicematrix.com/' . $meta->image }}" />
<meta property=og:url content="{{ url('/') }}" />
<meta property=og:image:secure_url content="{{ 'https://www.voicematrix.com/' . $meta->image }}" />
<meta property=og:image:width content="640" />
<meta property=og:image:height content="360" />
<meta name="keywords"
    content="{{ $meta->keywords ?? 'Voice Matrix, software development, custom software solutions, IT services, SaaS development, mobile app development, cloud software, enterprise applications, software consulting, tech company' }}">


<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="https://www.voicematrix.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />


<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $meta->title ?? 'Voice Matrix' }}">
<meta name="twitter:description" content="{{ Str::limit(strip_tags($meta->description, 50)) }}">

<meta property="og:url" content="https://www.voicematrix.com/" />
<meta property="og:site_name" content="Voice Matrix" />
