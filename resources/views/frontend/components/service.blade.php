<div class="group">


    <div class="relative flex items-center justify-center w-full bg-gray-100 rounded">
        <img src="{{ asset('uploads/' . $service->image) }}" alt="" class="h-[40vh] max-sm:h-[60vh] object-contain max-w-full transition duration-500 ease-in-out group-hover:scale-110" />

    </div>
    <div class="px-1 py-6">
        <div class="flex items-center justify-between">
            <div>

                <h6 class="group-hover:text-[#7cb439] transition duration-500 ease-in-out text-gray-800 font-bold text-[17px]  mb-1">
                    {{ $service->title }}
                </h6>

            </div>
        </div>
    </div>
</div>
