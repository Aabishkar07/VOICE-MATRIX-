@extends('admin.layouts.app')
@section('body')
    <div class="flex-1">
        <h2 class="w-full text-2xl font-bold text-secondary ">Dashboard</h2>
    </div>
    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
        {{-- <template x-for="i in 4" :key="i"> --}}
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Services</span>
                    <span class="text-lg font-semibold">{{ $servicecount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg class="w-10 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7h-1M8 7h-.7M13 5v4m-2-2h4" />
                </svg>
            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Blogs</span>
                    <span class="text-lg font-semibold">{{ $blogcount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-blogger" width="35"
                    height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
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
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Contacts</span>
                    <span class="text-lg font-semibold">{{ $contactcount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg class="w-10 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                        clip-rule="evenodd" />
                </svg>

            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Suppilers & Partners</span>
                    <span class="text-lg font-semibold">{{ $suppilercount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-16 icon icon-tabler icon-tabler-box"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                    <path d="M12 12l8 -4.5"></path>
                    <path d="M12 12l0 9"></path>
                    <path d="M12 12l-8 -4.5"></path>
                </svg>

            </div>
        </div>



        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Product</span>
                    <span class="text-lg font-semibold">{{ $productcount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-10 h-10 text-gray-800 icon icon-tabler icons-tabler-outline icon-tabler-brand-producthunt">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 16v-8h2.5a2.5 2.5 0 1 1 0 5h-2.5" />
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                </svg>

            </div>
        </div>


        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Review</span>
                    <span class="text-lg font-semibold">{{ $reviewcount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-800" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M2 12C2 7.52166 2 5.28249 3.39124 3.89124C4.78249 2.5 7.02166 2.5 11.5 2.5C15.9783 2.5 18.2175 2.5 19.6088 3.89124C21 5.28249 21 7.52166 21 12C21 16.4783 21 18.7175 19.6088 20.1088C18.2175 21.5 15.9783 21.5 11.5 21.5C7.02166 21.5 4.78249 21.5 3.39124 20.1088C2 18.7175 2 16.4783 2 12Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path
                        d="M12.3638 7.72209L13.2437 9.49644C13.3637 9.74344 13.6837 9.98035 13.9536 10.0257L15.5485 10.2929C16.5684 10.4643 16.8083 11.2103 16.0734 11.9462L14.8335 13.1964C14.6236 13.4081 14.5086 13.8164 14.5736 14.1087L14.9285 15.6562C15.2085 16.8812 14.5636 17.355 13.4887 16.7148L11.9939 15.8226C11.7239 15.6613 11.2789 15.6613 11.004 15.8226L9.50913 16.7148C8.43925 17.355 7.78932 16.8761 8.06929 15.6562L8.42425 14.1087C8.48925 13.8164 8.37426 13.4081 8.16428 13.1964L6.92442 11.9462C6.1945 11.2103 6.42947 10.4643 7.44936 10.2929L9.04419 10.0257C9.30916 9.98035 9.62912 9.74344 9.74911 9.49644L10.629 7.72209C11.109 6.7593 11.8889 6.7593 12.3638 7.72209Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Video</span>
                    <span class="text-lg font-semibold">{{ $videocount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-10 h-10 text-gray-800 icon icon-tabler icons-tabler-outline icon-tabler-video">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                    <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                </svg>

            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-green-700">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="">Total Video</span>
                    <span class="text-lg font-semibold">{{ $inquirycount }}</span>
                </div>
                <div class="p-10 rounded-md">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="w-10 h-10 icon icon-tabler icons-tabler-outline icon-tabler-contract">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 21h-2a3 3 0 0 1 -3 -3v-1h5.5" />
                    <path d="M17 8.5v-3.5a2 2 0 1 1 2 2h-2" />
                    <path d="M19 3h-11a3 3 0 0 0 -3 3v11" />
                    <path d="M9 7h4" />
                    <path d="M9 11h4" />
                    <path d="M18.42 12.61a2.1 2.1 0 0 1 2.97 2.97l-6.39 6.42h-3v-3z" />
                </svg>

            </div>
        </div>

        {{-- </template> --}}
    </div>
@endsection
