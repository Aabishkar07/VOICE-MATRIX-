@extends('admin.layouts.app')
@section('body')
    <div class="flex-1">
        <h2 class="w-full text-2xl font-bold text-[#050a30]">Dashboard</h2>
    </div>
    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
        {{-- Services --}}
        <a href="{{ route('admin.services.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Total Services</span>
                    <span class="text-lg font-semibold">{{ $servicecount }}</span>
                </div>
                <svg class="w-10 h-10 text-[#ff3131]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7h-1M8 7h-.7M13 5v4m-2-2h4" />
                </svg>
            </div>
        </a>

        {{-- Blogs --}}
        <a href="{{ route('admin.blogs.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Total Blogs</span>
                    <span class="text-lg font-semibold">{{ $blogcount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-blogger" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff3131" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 21h8a5 5 0 0 0 5 -5v-3a3 3 0 0 0 -3 -3h-1v-2a5 5 0 0 0 -5 -5h-4a5 5 0 0 0 -5 5v8a5 5 0 0 0 5 5z" />
                    <path d="M7 7m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h3a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-3a1.5 1.5 0 0 1 -1.5 -1.5z" />
                    <path d="M7 14m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h7a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 -1.5 -1.5z" />
                </svg>
            </div>
        </a>

        {{-- Contacts --}}
        <a href="{{ route('admin.contacts.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Total Contacts</span>
                    <span class="text-lg font-semibold">{{ $contactcount }}</span>
                </div>
                <svg class="w-10 h-10 text-[#ff3131]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z" clip-rule="evenodd" />
                </svg>
            </div>
        </a>

        {{-- Partners --}}
        <a href="{{ route('admin.partners.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Partners</span>
                    <span class="text-lg font-semibold">{{ $suppilercount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-16 icon icon-tabler icon-tabler-box" viewBox="0 0 24 24" stroke-width="2" stroke="#ff3131" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                    <path d="M12 12l8 -4.5"></path>
                    <path d="M12 12l0 9"></path>
                    <path d="M12 12l-8 -4.5"></path>
                </svg>
            </div>
        </a>

        {{-- Industries --}}
        <a href="{{ route('admin.industries.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Industries</span>
                    <span class="text-lg font-semibold">{{ $industrycount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21h18"/><path d="M5 21v-10l5 6v-6l5 6v-8l6 10"/></svg>
            </div>
        </a>

        {{-- Offers --}}
        <a href="{{ route('admin.offers.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Offers</span>
                    <span class="text-lg font-semibold">{{ $offercount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7h14"/><path d="M5 11h14"/><path d="M5 15h14"/></svg>
            </div>
        </a>

        {{-- Affiliations --}}
        <a href="{{ route('admin.affiliations.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Affiliations</span>
                    <span class="text-lg font-semibold">{{ $affiliationcount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l-4 4h3v6h2v-6h3z"/><path d="M4 19h16"/></svg>
            </div>
        </a>

        {{-- Pages --}}
        <a href="{{ route('admin.pages.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Pages</span>
                    <span class="text-lg font-semibold">{{ $pagecount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4v11a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5"/></svg>
            </div>
        </a>

        {{-- Meta Pages --}}
        <a href="{{ route('admin.metapages.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Meta Pages</span>
                    <span class="text-lg font-semibold">{{ $metapagecount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7l-2 2l2 2"/><path d="M15 9h-5a3 3 0 0 0 0 6h1"/><path d="M19 17h-8a4 4 0 0 1 0 -8h3"/></svg>
            </div>
        </a>

        {{-- Home Sections --}}
        <a href="{{ route('admin.homesections.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Home Sections</span>
                    <span class="text-lg font-semibold">{{ $homesectioncount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/></svg>
            </div>
        </a>

        {{-- Banner --}}
        <a href="{{ route('admin.banner.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Banner</span>
                    <span class="text-lg font-semibold">{{ $bannercount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"/><path d="M3 16l5 -5l5 5l5 -5l3 3"/></svg>
            </div>
        </a>

        {{-- Teams --}}
        <a href="{{ route('admin.teams.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>Teams</span>
                    <span class="text-lg font-semibold">{{ $teamcount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
        </a>

        {{-- FAQs --}}
        <a href="{{ route('admin.faqs.index') }}" class="block p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:border-[#ff3131] border-gray-200">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span>FAQs</span>
                    <span class="text-lg font-semibold">{{ $faqcount }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#ff3131]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 9a3 3 0 1 1 6 0c0 3-3 2-3 5"/><path d="M12 17h.01"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"/></svg>
            </div>
        </a>

    </div>
@endsection
