<style>
    /* Enhanced dropdown styles with better animations and functionality */
    .service-dropdown {
        position: relative;
        display: inline-block;
    }

    .service-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 280px;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px);
        transform-origin: top center;
        transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 50;
        margin-top: 4px;
        max-height: 0;
        overflow: hidden;
    }

    .service-dropdown.active .service-dropdown-menu,
    .service-dropdown:hover .service-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        max-height: 400px;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .service-dropdown-item {
        display: block;
        padding: 8px 16px;
        color: #374151;
        text-decoration: none;
        font-size: 13px;
        line-height: 1.4;
        transition: all 0.15s ease;
        border-radius: 4px;
        margin: 2px 4px;
        opacity: 0;
        transform: translateY(-10px);
        animation-fill-mode: forwards;
    }

    .service-dropdown.active .service-dropdown-item,
    .service-dropdown:hover .service-dropdown-item {
        animation: dropdownItemFadeIn 0.3s ease forwards;
    }

    .service-dropdown.active .service-dropdown-item:nth-child(1),
    .service-dropdown:hover .service-dropdown-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .service-dropdown.active .service-dropdown-item:nth-child(2),
    .service-dropdown:hover .service-dropdown-item:nth-child(2) {
        animation-delay: 0.15s;
    }

    .service-dropdown.active .service-dropdown-item:nth-child(3),
    .service-dropdown:hover .service-dropdown-item:nth-child(3) {
        animation-delay: 0.2s;
    }

    .service-dropdown.active .service-dropdown-item:nth-child(4),
    .service-dropdown:hover .service-dropdown-item:nth-child(4) {
        animation-delay: 0.25s;
    }

    .service-dropdown.active .service-dropdown-item:nth-child(5),
    .service-dropdown:hover .service-dropdown-item:nth-child(5) {
        animation-delay: 0.3s;
    }

    .service-dropdown.active .service-dropdown-item:nth-child(n+6),
    .service-dropdown:hover .service-dropdown-item:nth-child(n+6) {
        animation-delay: 0.35s;
    }

    @keyframes dropdownItemFadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .service-dropdown-item:hover {
        background-color: #f3f4f6;
        color: #1f2937;
        transform: translateX(2px);
    }

    .service-trigger {
        display: flex;
        align-items: center;
        padding: 6px 12px;
        color: #374151; /* Neutral gray as default */
        font-weight: 600;
        font-size: 12px; /* Larger for readability */
        letter-spacing: 0.02em;
        text-transform: none;
        text-decoration: none;
        border-radius: 9999px; /* pill shape when bordered parent used */
        transition: all 0.15s ease;
        white-space: nowrap;
    }

    .service-trigger:hover {
        background-color: #f9fafb;
        color: #ff3131; /* Accent on hover */
    }

    .service-trigger-icon {
        width: 14px;
        height: 14px;
        margin-left: 4px;
        transition: transform 0.2s ease;
    }

    .service-dropdown.active .service-trigger-icon,
    .service-dropdown:hover .service-trigger-icon {
        transform: rotate(180deg);
    }

    /* Mobile menu styles */
    .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .mobile-menu.active {
        max-height: 1000px;
    }

    .submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .submenu.active {
        max-height: 500px;
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .service-dropdown-menu {
            min-width: 240px;
        }
    }
    /* Snap scrolling for step-by-step auto scroll */
    #servicesScroller {
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
    }
    #servicesScroller .service-dropdown {
        scroll-snap-align: start;
        scroll-snap-stop: always;
    }
    /* Hide scrollbar utility */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
</style>



<!-- Main Navbar -->
<nav class="bg-white shadow-lg relative z-[999]">
    <!-- Top Navbar -->
    <div class="max-w-screen-2xl mx-auto sm:px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <div class="flex items-center space-x-2 w-40      sm:w-44">
                    <img src="{{ asset('images/voicematriclogo.svg') }}" alt="voicematrixlogo" class="w-full" />
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'text-[#ff3131]' : 'text-gray-700' }} hover:text-[#050a30] font-medium">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'text-[#ff3131]' : 'text-gray-700' }} hover:text-[#050a30] font-medium">About Us</a>
                <a href="{{ route('allblogs') }}" class="{{ request()->is('allblogs') ? 'text-[#ff3131]' : 'text-gray-700' }} hover:text-[rgb(5,10,48)] font-medium">Blog</a>
                <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'text-[#ff3131]' : 'text-gray-700' }} hover:text-[#050a30] font-medium">Contacts</a>

                <!-- CTA Button -->
                <a href="{{ route('contact') }}"
                    class="bg-[#ff3131] text-sm hover:bg-[#050a30] text-white px-6 py-2 rounded-lg font-medium ease-in-out transition-all duration-700">
                    LET'S TALK
                </a>
            </div>

            <div class="flex lg:hidden items-center space-x-2">
                <a href="{{ route('contact') }}"
                    class="bg-[#ff3131]  text-xs sm:text-sm hover:bg-[#050a30] text-white px-2.5 sm:px-6 py-2 rounded-lg font-medium ease-in-out transition-all duration-700">LET'S
                    TALK</a>
                <!-- Mobile Menu Button -->
                <button class=" p-2" onclick="openMobileMenu()" aria-label="Open menu">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
            </div>

        </div>
    </div>


    @php
        $parentservices = getParentServices();
    @endphp

    <!-- Services Navbar -->
    <div class="bg-white border-t border-gray-200">
        <div class="max-w-screen-2xl mx-auto px-6">
            <!-- Desktop: Enhanced Dynamic Parent Services with Subservices -->
            <div id="servicesScroller" class="hidden lg:flex items-center gap-3 py-3 overflow-x-auto no-scrollbar">
                @foreach ($parentservices as $parent)
                    @php $children = getSubServices($parent->id); @endphp
                    <div class="service-dropdown" data-dropdown-id="{{ $parent->id }}">
                        <div class="service-trigger rounded-full border border-gray-200/80 bg-white px-3 py-1.5 hover:border-[#ff3131]">
                            <a href="{{ route('subservices', ['service' => $parent->slug]) }}" class="flex-1">
                                <span class="text-[12px] tracking-wide">
                                    {{ $parent->title }}</span>
                            </a>
                            @if ($children->count())
                                <button onclick="handleServiceClick(event, '{{ $parent->id }}')"
                                    class="ml-2 flex items-center">
                                    <svg class="service-trigger-icon" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            @endif
                        </div>
                        @if ($children->count())
                            <div class="service-dropdown-menu">
                                <div class="py-2">
                                    @foreach ($children as $child)
                                        <a href="{{ route('subservices', ['service' => $child->slug]) }}"
                                            class="service-dropdown-item">{{ $child->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Mobile Off-Canvas Side Menu -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/40 z-[998] hidden" onclick="closeMobileMenu()"></div>
    <aside id="mobileDrawer"
        class="fixed inset-y-0 left-0 w-80 max-w-[85%] bg-white shadow-2xl z-[999] transform -translate-x-full transition-transform duration-300">
        <div class="h-full flex flex-col">
            <!-- Drawer Header -->
            <div class="flex items-center justify-between px-4 py-4 border-b">
                <div class="flex items-center space-x-2 w-44">
                    <img src="{{ asset('images/voicematriclogo.svg') }}" alt="voicematrixlogo" class="w-full" />
                </div>
                <button class="p-2 rounded hover:bg-gray-100" aria-label="Close menu" onclick="closeMobileMenu()">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Drawer Content -->
            <div class="flex-1 overflow-y-auto px-4 py-4">
                <!-- Primary Links -->
                <nav class="space-y-1 mb-4">
                    <a href="{{ route('home') }}"
                        class="{{ request()->is('/') ? 'text-[#ff3131]' : 'text-gray-700' }} block py-2 text-gray-800 hover:text-[#050a30] font-medium">Home</a>
                    <a href="{{ route('about') }}"
                        class="{{ request()->is('about') ? 'text-[#ff3131]' : 'text-gray-700' }} block py-2 text-gray-800 hover:text-[#050a30] font-medium">About Us</a>
                    <a href="{{ route('allblogs') }}"
                        class="{{ request()->is('allblogs') ? 'text-[#ff3131]' : 'text-gray-700' }} block py-2 text-gray-800 hover:text-[#050a30] font-medium">Blog</a>
                    <a href="{{ route('contact') }}"
                        class="{{ request()->is('contact') ? 'text-[#ff3131]' : 'text-gray-700' }} block py-2 text-gray-800 hover:text-[#050a30] font-medium">Contacts</a>
                </nav>



                <!-- Services (Dynamic) -->
                <div class="border-t border-gray-200 pt-4">
                    <h3 class="text-sm text-left font-semibold text-gray-500 uppercase tracking-wider mb-3">Services
                    </h3>

                    @foreach ($parentservices as $parent)
                        @php $children = getSubServices($parent->id); @endphp
                        <div class="mb-2">
                            <button onclick="toggleAccordion('m-{{ $parent->id }}')"
                                class="flex text-left items-center justify-between w-full py-2 text-gray-900 font-medium">


                                <a href="{{ route('subservices', ['service' => $parent->slug]) }}"
                                    class="text-[#ff3131] text-sm uppercase">{{ $parent->title }}</a>



                                @if ($children->count())
                                    <svg id="m-{{ $parent->id }}-icon"
                                        class="w-4 h-4 text-gray-500 transition-transform" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                @endif
                            </button>
                            <div id="m-{{ $parent->id }}" class="hidden ml-3">
                                @if ($children->count())
                                    <div class="space-y-1">
                                        @foreach ($children as $child)
                                            <a href="{{ route('subservices', ['service' => $child->slug]) }}"
                                                class="block py-1 text-gray-700 hover:text-[#050a30]">{{ $child->title }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

            <!-- Drawer Footer -->
            <div class="px-4 py-3 border-t text-xs text-gray-500">
                <div class="flex items-center justify-between gap-3">
                    <span>© {{ date('Y') }} Voice Matrix. All rights reserved.</span>
                </div>
                <div class="mt-2 flex items-center gap-2 text-[11px]">
                    <span class="text-gray-600">Powered By</span>
                    <a href="https://www.nepbyte.com" target="_blank" class="text-[#ff2953] hover:text-white hover:underline">NepByte</a>
                    <img src="{{ asset('images/nepal_flag.gif') }}" alt="NepByte" class="w-5 h-5 object-contain" />
                </div>
            </div>
        </div>
    </aside>



</nav>


<script>
    // Enhanced dropdown functionality
    let activeDropdown = null;

    function openMobileMenu() {
        document.getElementById('mobileOverlay').classList.remove('hidden');
        document.getElementById('mobileDrawer').classList.remove('-translate-x-full');
    }

    function closeMobileMenu() {
        document.getElementById('mobileOverlay').classList.add('hidden');
        document.getElementById('mobileDrawer').classList.add('-translate-x-full');
    }

    function toggleAccordion(id) {
        const section = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');
        if (!section) return;
        section.classList.toggle('hidden');
        if (icon) icon.classList.toggle('rotate-180');
    }

    function handleServiceClick(event, serviceId) {
        const dropdown = document.querySelector(`[data-dropdown-id="${serviceId}"]`);
        const hasChildren = dropdown.querySelector('.service-dropdown-menu');

        if (hasChildren) {
            event.preventDefault();
            toggleServiceDropdown(serviceId);
        }
    }

    function toggleServiceDropdown(serviceId) {
        const dropdown = document.querySelector(`[data-dropdown-id="${serviceId}"]`);
        if (!dropdown) return;

        // Close other dropdowns
        if (activeDropdown && activeDropdown !== dropdown) {
            activeDropdown.classList.remove('active');
        }

        // Toggle current dropdown
        dropdown.classList.toggle('active');
        activeDropdown = dropdown.classList.contains('active') ? dropdown : null;
    }

    function closeAllDropdowns() {
        document.querySelectorAll('.service-dropdown.active').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
        activeDropdown = null;
    }

    // Enhanced click outside handler
    document.addEventListener('click', function(event) {
        const clickedDropdown = event.target.closest('.service-dropdown');

        if (!clickedDropdown) {
            closeAllDropdowns();
        }
    });

    // Close dropdowns on escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeAllDropdowns();
        }
    });

    // Prevent dropdown from closing when clicking inside the menu
    document.addEventListener('click', function(event) {
        if (event.target.closest('.service-dropdown-menu')) {
            event.stopPropagation();
        }
    });

    // Enhanced hover functionality for desktop + step-by-step auto scroll
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.service-dropdown');
        const scroller = document.getElementById('servicesScroller');
        let paused = false;
        let userPauseTimer = null;
        let loopWidth = 0; // width of original content before cloning
        let baseOffset = 0; // how many loop widths we've advanced
        let index = 0; // current chip index
        const stepDelay = 2000; // slower pause between items
        const resumeAfter = 2000; // pause duration after user interaction

        function hasOverflow() {
            return scroller && scroller.scrollWidth > scroller.clientWidth + 2;
        }

        // Prepare seamless loop by cloning original children once
        function prepareSeamlessLoop() {
            if (!scroller || scroller.dataset.loopInit === '1') return { items: [] };
            const originalChildren = Array.from(scroller.children);
            // Measure width before cloning
            loopWidth = scroller.scrollWidth;
            const clones = originalChildren.map(node => node.cloneNode(true));
            clones.forEach(cl => { cl.setAttribute('aria-hidden', 'true'); scroller.appendChild(cl); });
            scroller.dataset.loopInit = '1';
            return { items: originalChildren };
        }

        function pauseForUserInteraction() {
            paused = true;
            if (userPauseTimer) clearTimeout(userPauseTimer);
            userPauseTimer = setTimeout(() => { paused = false; }, resumeAfter);
        }

        function scheduleNextStep(items) {
            setTimeout(() => stepScroll(items), stepDelay);
        }

        function stepScroll(items) {
            if (!scroller || !hasOverflow()) {
                return scheduleNextStep(items);
            }
            if (paused) {
                return scheduleNextStep(items);
            }

            const len = items.length;
            if (len === 0) return;

            // If we've moved beyond the first loop, wrap seamlessly
            if (loopWidth > 0 && scroller.scrollLeft >= baseOffset + loopWidth - 2) {
                baseOffset += loopWidth;
            }

            // Calculate target for current item and scroll smoothly
            const targetLeft = baseOffset + items[index].offsetLeft;
            scroller.scrollTo({ left: targetLeft, behavior: 'smooth' });

            // advance index cyclically
            index = (index + 1) % len;
            scheduleNextStep(items);
        }

        if (scroller) {
            const { items } = prepareSeamlessLoop();
            scroller.addEventListener('mouseenter', () => paused = true);
            scroller.addEventListener('mouseleave', () => paused = false);
            scroller.addEventListener('wheel', pauseForUserInteraction, { passive: true });
            scroller.addEventListener('touchstart', pauseForUserInteraction, { passive: true });
            scroller.addEventListener('touchmove', pauseForUserInteraction, { passive: true });
            window.addEventListener('resize', () => { /* snapping handles layout changes */ });
            // Kick off stepper once content is ready
            scheduleNextStep(items);
        }

        // Preserve dropdown hover behavior
        dropdowns.forEach(dropdown => {
            let hoverTimeout;
            dropdown.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
                const hasChildren = this.querySelector('.service-dropdown-menu');
                if (hasChildren) {
                    if (activeDropdown && activeDropdown !== this) {
                        activeDropdown.classList.remove('active');
                    }
                    this.classList.add('active');
                    activeDropdown = this;
                }
            });
            dropdown.addEventListener('mouseleave', function() {
                const self = this;
                hoverTimeout = setTimeout(() => {
                    self.classList.remove('active');
                    if (activeDropdown === self) {
                        activeDropdown = null;
                    }
                }, 150);
            });
        });
    });
</script>
