@extends('admin.layouts.app')
@section('body')
    <div class="flex-1">
        <h2 class="w-full text-2xl font-bold text-[#050a30]">Dashboard</h2>
    </div>
    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
        {{-- <template x-for="i in 4" :key="i"> --}}
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Services</span>
                    <span class="text-lg font-semibold">{{ $servicecount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg class="w-10 h-10 text-[#ff3131] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7h-1M8 7h-.7M13 5v4m-2-2h4" />
                </svg>
            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Blogs</span>
                    <span class="text-lg font-semibold">{{ $blogcount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-blogger" width="35"
                    height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff3131" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M8 21h8a5 5 0 0 0 5 -5v-3a3 3 0 0 0 -3 -3h-1v-2a5 5 0 0 0 -5 -5h-4a5 5 0 0 0 -5 5v8a5 5 0 0 0 5 5z" />
                    <path
                        d="M7 7m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h3a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-3a1.5 1.5 0 0 1 -1.5 -1.5z" />
                    <path
                        d="M7 14m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h7a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 -1.5 -1.5z" />
                </svg>

            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Contacts</span>
                    <span class="text-lg font-semibold">{{ $contactcount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg class="w-10 h-10 text-[#ff3131] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                        clip-rule="evenodd" />
                </svg>

            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Partners</span>
                    <span class="text-lg font-semibold">{{ $suppilercount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-16 icon icon-tabler icon-tabler-box"
                    viewBox="0 0 24 24" stroke-width="2" stroke="#ff3131" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                    <path d="M12 12l8 -4.5"></path>
                    <path d="M12 12l0 9"></path>
                    <path d="M12 12l-8 -4.5"></path>
                </svg>

            </div>
        </div>


        {{-- </template> --}}
    </div>
@endsection
