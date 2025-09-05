@php
    // Extract video ID from YouTube URL
    $youtubeUrl = $video->video;
    $pattern =
        '/(?:youtu\.be\/|youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
    preg_match($pattern, $youtubeUrl, $matches);
    $videoId = isset($matches[1]) ? $matches[1] : null;
@endphp



<div class="h-48">

    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0"
        allowfullscreen></iframe>

</div>
