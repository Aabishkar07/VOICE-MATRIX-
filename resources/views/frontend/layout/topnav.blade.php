@php
    $setting = getSetting();

@endphp
<section class='bg-gray-800  '>
    <div class="flex flex-wrap justify-end px-10 py-2 mx-auto text-white max-w-screen-2xl max-ms:gap-x-1 max-md:px-4 gap-x-3">

        <div class="text-sm">
            <strong class="mx-3">Address:</strong>{{ $setting->address }}

        </div>

        <div class='text-sm'><strong class="mx-3">Contact
                No:</strong>{{ $setting->contact_number }}</div>
    </div>
</section>
