<div class="max-w-screen-2xl mx-auto">
@php
    $whatsapp = getSetting()->whatsapp;
@endphp
    <a href="https://wa.me/{{ $whatsapp }}" target="_blank" style="background-color:#ff2953; color: white; display: inline-block; padding: 10px; border-radius: 100%;">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="38" height="38" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
            </svg>
        </div>
    </a>
</div>
