<div class="max-w-[360px] max-sm:w-full  max-sm:mb-4 h-auto py-5 pl-14 md:pr-4 bg-white border-2 rounded-3xl relative">
    <img src="{{ asset('uploads/' . $tesimonial->featured_image ?? "") }}"
        class="absolute top-0 bottom-0 w-20 h-20 my-auto border-2 border-gray-300 rounded-full -left-10" />

    <div>
        <h4 class="text-base font-bold text-gray-800">{{ $tesimonial->title ?? '' }}</h4>
        <p class="mt-1 text-xs text-gray-500">{{ $tesimonial->designation ?? '' }}</p>
    </div>

    <div class="mt-4">
        <p class="text-sm leading-relaxed text-gray-800">{!! $tesimonial->description ?? '' !!}</p>
    </div>


</div>

{{-- <div class="max-w-[360px] h-auto py-5 pl-14 pr-4 bg-white border-2 rounded-3xl relative">
    <img src="https://readymadeui.com/team-5.webp"
        class="absolute top-0 bottom-0 w-20 h-20 my-auto border-2 border-gray-300 rounded-full -left-10" />

    <div>
        <h4 class="text-base font-bold text-gray-800">Mark Adair</h4>
        <p class="mt-1 text-xs text-gray-500">Founder of Alpha</p>
    </div>

    <div class="mt-4">
        <p class="text-sm leading-relaxed text-gray-800">The service was amazing. I never had to wait that
            long for my food. The staff was friendly and attentive, and the delivery was impressively
            prompt.</p>
    </div>

    <div class="flex mt-4 space-x-1">
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
    </div>
</div>

<div class="max-w-[360px] h-auto py-5 pl-14 pr-4 bg-white border-2 rounded-3xl relative">
    <img src="https://readymadeui.com/team-4.webp"
        class="absolute top-0 bottom-0 w-20 h-20 my-auto border-2 border-gray-300 rounded-full -left-10" />

    <div>
        <h4 class="text-base font-bold text-gray-800">Simon Konecki</h4>
        <p class="mt-1 text-xs text-gray-500">Founder of Labar</p>
    </div>

    <div class="mt-4">
        <p class="text-sm leading-relaxed text-gray-800">The service was amazing. I never had to wait that
            long for my food. The staff was friendly and attentive, and the delivery was impressively
            prompt.</p>
    </div>

    <div class="flex mt-4 space-x-1">
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
        <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
        </svg>
    </div>
</div> --}}
