<div x-clock x-data="{ sidebarOpen = true }">
    <div x-cloak x-show="sidebarOpen" class="fixed inset-0 z-20 hidden transition-opacity pointer-events-none lg:block">
    </div>

    <!-- Overlay for Small Screens -->
    <div x-cloak x-show="sidebarOpen" @click="sidebarOpen = false"
        class="fixed inset-0 z-10 block bg-black opacity-50 lg:hidden"></div>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <div x-data="handleSwipe()" x-cloak
        :class="sidebarOpen ? 'translate-x-0 ease-out w-64 lg:w-64' : '-translate-x-full ease-in'"
        @touchstart="touchStart" @touchend="touchEnd"
        class="fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform bg-white border-r border-gray-200 text-slate-700"
        style="height: calc(100% - [footer-height]px);">
        <div>
            <nav class="mt-24">
                <!-- Dashboard -->
                <a class="{{ request()->segment(2) == 'dashboard' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-5 py-2 mr-3 flex-1 mt-1 rounded-md' : 'mr-3 flex-1 mt-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-5 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}"
                   href="{{ route('admin.dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler w-5 h-5 icons-tabler-filled icon-tabler-layout-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" /></svg>
                    <span class="">Dashboard</span>
                </a>

                <!-- Website Content -->
                {{-- <p class="px-6 mt-6 mb-2 text-xs font-semibold tracking-wider text-[#050a30] uppercase flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v6H4z"/><path d="M4 14h16v6H4z"/></svg>
                    <span>Website Content</span>
                </p> --}}
                <div class="mr-3" x-data="{ open: {{ in_array(request()->segment(2), ['services','industries','offers','affiliations','blogs','pages','metapages']) ? 'true' : 'false' }} }">
                    <button @click="open = !open" type="button" class="w-full flex items-center justify-between px-6 py-2 text-gray-600 hover:text-[#050a30] hover:bg-gray-50 rounded-md transition">
                        <span class="font-medium text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="8" rx="3"/><rect x="3" y="12" width="18" height="8" rx="3"/></svg>
                            Content
                        </span>
                        <svg class="w-4 h-4 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" /></svg>
                    </button>
                    <div x-show="open" x-cloak class="mt-1 space-y-1">
                        <a class="{{ request()->segment(2) == 'services' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.services.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="4" width="18" height="8" rx="3"/><rect x="3" y="12" width="18" height="8" rx="3"/><path d="M7 8h.01M7 16h.01M11 8h6M11 16h6"/></svg>
                            <span class="mx-1 text-sm">Services</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'industries' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.industries.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21h18"/><path d="M5 21v-10l5 6v-6l5 6v-8l6 10"/></svg>
                            <span class="mx-1 text-sm">Industries</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'offers' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.offers.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7h14"/><path d="M5 11h14"/><path d="M5 15h14"/></svg>
                            <span class="mx-1 text-sm">Offers</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'affiliations' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.affiliations.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l-4 4h3v6h2v-6h3z"/><path d="M4 19h16"/></svg>
                            <span class="mx-1 text-sm">Affiliations</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'blogs' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.blogs.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"/><path d="M9 8h6"/><path d="M9 12h6"/><path d="M9 16h4"/></svg>
                            <span class="mx-1 text-sm">Blog</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'pages' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.pages.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4v11a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5"/></svg>
                            <span class="mx-1 text-sm">Pages</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'metapages' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.metapages.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7l-2 2l2 2"/><path d="M15 9h-5a3 3 0 0 0 0 6h1"/><path d="M19 17h-8a4 4 0 0 1 0 -8h3"/></svg>
                            <span class="mx-1 text-sm">Meta Pages</span>
                        </a>
                    </div>
                </div>

                <!-- Site Appearance -->
                {{-- <p class="px-6 mt-6 mb-2 text-xs font-semibold tracking-wider text-[#050a30] uppercase flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l9-9l9 9"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/></svg>
                    <span>Site Appearance</span>
                </p> --}}
                <div class="mr-3" x-data="{ open: {{ in_array(request()->segment(2), ['homesections','banner']) ? 'true' : 'false' }} }">
                    <button @click="open = !open" type="button" class="w-full flex items-center justify-between px-6 py-2 text-gray-600 hover:text-[#050a30] hover:bg-gray-50 rounded-md transition">
                        <span class="font-medium text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l-2 0l9 -9l9 9l-2 0"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/></svg>
                            Appearance
                        </span>
                        <svg class="w-4 h-4 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" /></svg>
                    </button>
                    <div x-show="open" x-cloak class="mt-1 space-y-1">
                        <a class="{{ request()->segment(2) == 'homesections' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.homesections.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/></svg>
                            <span class="mx-1 text-sm">Home Sections</span>
                        </a>
                        <a class="{{ request()->segment(2) == 'banner' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-6 py-2 mr-3 flex-1 rounded-md' : 'mr-3 flex-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-6 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.banner.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"/><path d="M3 16l5 -5l5 5l5 -5l3 3"/></svg>
                            <span class="mx-1 text-sm">Banner</span>
                        </a>
                    </div>
                </div>

                <!-- Organization -->
                {{-- <p class="px-6 mt-6 mb-2 text-xs font-semibold tracking-wider text-[#050a30] uppercase flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span>Organization</span>
                </p> --}}
                <a class="{{ request()->segment(2) == 'teams' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-5 py-2 mr-3 flex-1 mt-1 rounded-md' : 'mr-3 flex-1 mt-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-5 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.teams.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span class="mx-1 text-sm">Our Teams</span>
                </a>
                <a class="{{ request()->segment(2) == 'partners' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-5 py-2 mr-3 flex-1 mt-1 rounded-md' : 'mr-3 flex-1 mt-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-5 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.partners.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5c1.333-1.333 4-1.333 5.333 0C18.667 6.333 18.667 9 17.333 10.333L12 15.667 6.667 10.333C5.333 9 5.333 6.333 6.667 5c1.333-1.333 4-1.333 5.333 0z"/></svg>
                    <span class="mx-1 text-sm">Partners</span>
                </a>
                <a class="{{ request()->segment(2) == 'faqs' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-5 py-2 mr-3 flex-1 mt-1 rounded-md' : 'mr-3 flex-1 mt-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-5 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.faqs.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 9a3 3 0 1 1 6 0c0 3-3 2-3 5"/><path d="M12 17h.01"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"/></svg>
                    <span class="mx-1 text-sm">FAQs</span>
                </a>

                <!-- Communication -->
                {{-- <p class="px-6 mt-6 mb-2 text-xs font-semibold tracking-wider text-[#050a30] uppercase flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10v6a2 2 0 0 1 -2 2h-3l-3 3l-3 -3h-3a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2z"/></svg>
                    <span>Communication</span>
                </p> --}}
                <a class="{{ request()->segment(2) == 'contacts' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-5 py-2 mr-3 flex-1 mt-1 rounded-md' : 'mr-3 flex-1 mt-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-5 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.contacts.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10v6a2 2 0 0 1 -2 2h-3l-3 3l-3 -3h-3a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2z"/><path d="M8 9h8"/></svg>
                    <span class="mx-1 text-sm">Contact</span>
                </a>

                <!-- System -->
                {{-- <p class="px-6 mt-6 mb-2 text-xs font-semibold tracking-wider text-[#050a30] uppercase flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06 .06a2 2 0 1 1 -2.83 2.83l-.06 -.06a1.65 1.65 0 0 0 -1.82 -.33a1.65 1.65 0 0 0 -1 1.51v.12a2 2 0 1 1 -4 0v-.12a1.65 1.65 0 0 0 -1 -1.51a1.65 1.65 0 0 0 -1.82 .33l-.06 .06a2 2 0 1 1 -2.83 -2.83l.06 -.06a1.65 1.65 0 0 0 .33 -1.82a1.65 1.65 0 0 0 -1.51 -1h-.12a2 2 0 1 1 0 -4h.12a1.65 1.65 0 0 0 1.51 -1a1.65 1.65 0 0 0 -.33 -1.82l-.06 -.06a2 2 0 1 1 2.83 -2.83l.06 .06a1.65 1.65 0 0 0 1.82 .33h.08a1.65 1.65 0 0 0 1 -1.51v-.12a2 2 0 1 1 4 0v.12a1.65 1.65 0 0 0 1 1.51h.08a1.65 1.65 0 0 0 1.82 -.33l.06 -.06a2 2 0 1 1 2.83 2.83l-.06 .06a1.65 1.65 0 0 0 -.33 1.82v.08a1.65 1.65 0 0 0 1.51 1h.12a2 2 0 1 1 0 4h-.12a1.65 1.65 0 0 0 -1.51 1z"/></svg>
                    <span>System</span>
                </p> --}}
                <a class="{{ request()->segment(2) == 'setting' ? ' bg-[#ff3131] text-white border-l-4 border-[#ff3131] font-semibold flex items-center gap-2 px-5 py-2 mr-3 flex-1 mt-1 rounded-md' : 'mr-3 flex-1 mt-1 rounded-md hover:bg-gray-50 hover:text-[#050a30] flex items-center gap-2 px-5 py-2 text-gray-600 transition-colors border-l-4 border-transparent hover:border-[#ff3131]' }}" href="{{ route('admin.setting.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06 .06a2 2 0 1 1 -2.83 2.83l-.06 -.06a1.65 1.65 0 0 0 -1.82 -.33a1.65 1.65 0 0 0 -1 1.51v.12a2 2 0 1 1 -4 0v-.12a1.65 1.65 0 0 0 -1 -1.51a1.65 1.65 0 0 0 -1.82 .33l-.06 .06a2 2 0 1 1 -2.83 -2.83l.06 -.06a1.65 1.65 0 0 0 .33 -1.82a1.65 1.65 0 0 0 -1.51 -1h-.12a2 2 0 1 1 0 -4h.12a1.65 1.65 0 0 0 1.51 -1a1.65 1.65 0 0 0 -.33 -1.82l-.06 -.06a2 2 0 1 1 2.83 -2.83l.06 .06a1.65 1.65 0 0 0 1.82 .33h.08a1.65 1.65 0 0 0 1 -1.51v-.12a2 2 0 1 1 4 0v.12a1.65 1.65 0 0 0 1 1.51h.08a1.65 1.65 0 0 0 1.82 -.33l.06 -.06a2 2 0 1 1 2.83 2.83l-.06 .06a1.65 1.65 0 0 0 -.33 1.82v.08a1.65 1.65 0 0 0 1.51 1h.12a2 2 0 1 1 0 4h-.12a1.65 1.65 0 0 0 -1.51 1z"/></svg>
                    <span class="mx-1 text-sm">Setting</span>
                </a>
            </nav>
        </div>
    </div>
</div>
