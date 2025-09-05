<header class='relative z-50 tracking-wide shadow-md '>


    <ul
        class='flex flex-wrap items-center mx-auto max-w-screen-2xl justify-between gap-4 max-sm:px-4 px-10 py-4 bg-white min-h-[70px]'>
        {{-- <a href="javascript:void(0)">
            <div class="text-xl font-semibold leading-2 text-primary">Voice Matrix BPO SERVICES PVT LTD</div>
        </a> --}}


        <div class="flex items-center gap-x-2">

            <a href="{{ route('home') }}">
                <img src="{{ asset('images/su-logo.png') }}" alt="logo" class='w-[4.9rem] ' />
            </a>
            <marquee behavior="scroll" scrollamount="3" class="w-56 max-sm:w-56 max-lg:w-96 xl:w-80">
                <div
                    class="px-1 text-2xl font-bold tracking-wider text-center text-green-700 max-sm:text-lg lg:text-xl xl:text-2xl ">
                    सौर्य कृषि कम्पनी लिमिटेड
                    {{-- &nbsp;&nbsp;
                    Voice Matrix BPO SERVICES PVT LTD --}}
                </div>
            </marquee>

        </div>

        {{-- <marquee> --}}

        {{-- </marquee> --}}

        {{-- <div class="p-4 text-4xl font-bold tracking-wider text-center text-green-700 md:text-6xl lg:text-7xl">
            सौर्य कृषि कम्पनी लिमिटेड
          </div> --}}




        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50 transition-all duration-500'>
            <button id="toggleClose"
                class='lg:hidden transition-all duration-500 fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.820 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.205-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.920-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <di
                class='lg:flex lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50 transition-all duration-500'>
                <div class='hidden w-full mb-6 max-lg:block'>
                    {{-- <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                            class='w-36' />
                    </a> --}}

                    <div class="flex items-center ">
                        <div class="">
                            <a href="{{ route('home') }}"><img src="{{ asset('images/su-logo.png') }}" alt="logo"
                                    class='w-20' />
                            </a>
                        </div>


                        <div class="px-3 text-xl font-bold text-gray-800">Saurya Krishi</div>
                    </div>

                </div>
                <li class='px-3 max-lg:border-b max-lg:py-3'>
                    <a href="{{ route('home') }}"
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px] {{ request()->routeIs('home') ? ' text-green-500' : '' }}'>Home</a>
                </li>
                {{-- <li class='px-3 max-lg:border-b max-lg:py-3'><a href='{{ route('about') }}'
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px] {{ request()->routeIs('about') ? ' text-green-500' : '' }}'>About
                        Us</a> --}}
                <li class='relative group max-lg:border-b max-lg:px-3 max-lg:py-3'>
                    <a href='{{ route('about') }}'
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px]'>About Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" class="inline-block ml-1"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>


                    <ul
                        class='absolute top-7 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[180px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>

                        <li class='py-3 border-b'>
                            <a href='{{ route('brochure') }}'
                                class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[17px] block'>

                                Brochure
                            </a>
                        </li>



                        <li class='py-3 border-b'>
                            <a href='{{ route('notice') }}'
                                class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[17px] block'>

                                Notice
                            </a>
                        </li>


                        <li class='py-3 border-b'>
                            <a href='{{ route('certificates') }}'
                                class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[17px] block'>

                               Certificates
                            </a>
                        </li>

                    </ul>
                </li>
                </li>
                {{-- <li class='relative group max-lg:border-b max-lg:px-3 max-lg:py-3'>
                    <a href='javascript:void(0)'
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px]'>Our Products
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" class="inline-block ml-1"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute top-7 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[200px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        @foreach (getServices() as $key => $value)
                            <div class='py-3 border-b '>
                                <a href='{{ route('servicesingle', $value->slug) }}'
                                    class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[15px] block flex items-center gap-x-1'>
                                    <img src="{{ asset('uploads/' . $value->image) }}" alt=""
                                        class="object-contain rounded-full w-9 h-9" />

                                    {{ $value->title }}
                                </a>
                            </div>
                        @endforeach


                    </ul>
                </li> --}}








                <style>
                    .hidden {
                        display: none;
                    }

                    .transition-all {
                        transition: all 0.3s ease-in-out;
                    }
                </style>


                <div class="relative inline-block">
                    <button id="category-btn" class="flex hover:text-green-500 text-[#333] block font-bold text-[17px]">
                        Our Product
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                            class="inline-block ml-1 mt-1" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </button>
                    <div id="main-category-menu"
                        class="absolute left-0 hidden w-48 mt-2 transition-all bg-white rounded shadow-lg opacity-0">
                        @foreach (getServicesWithProducts(0) as $service)
                            <div class="relative group">
                                <a href="{{ route('subservices', ['service' => $service->slug]) }}">
                                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100">

                                        {{ $service->title }}
                                    </button>
                                </a>
                                <div
                                    class="absolute top-0 hidden w-48 mt-0 transition-all bg-white rounded shadow-lg opacity-0 left-full">
                                    @foreach ($service->subcategories as $subcategory)
                                        <div class="relative group">
                                            <a href="{{ route('subservices', ['service' => $service->slug]) }}">

                                                <button class="block w-full px-4 py-2 text-left hover:bg-gray-100">
                                                    {{ $subcategory->title }}
                                                </button>
                                            </a>
                                            <div
                                                class="absolute top-0 hidden w-48 mt-0 transition-all bg-white rounded shadow-lg opacity-0 left-full">
                                                @foreach ($subcategory->products as $product)
                                                <a href="{{ route('productsingle' , $product->slug) }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">{{ $product->title }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <script>
                    // Select buttons and menus
                    const categoryBtn = document.getElementById('category-btn');
                    const mainCategoryMenu = document.getElementById('main-category-menu');

                    // Show main menu on hover over category button
                    categoryBtn.addEventListener('mouseenter', () => {
                        mainCategoryMenu.classList.remove('hidden');
                        setTimeout(() => {
                            mainCategoryMenu.classList.remove('opacity-0');
                        }, 10);
                    });

                    categoryBtn.addEventListener('mouseleave', () => {
                        setTimeout(() => {
                            if (!mainCategoryMenu.matches(':hover')) {
                                mainCategoryMenu.classList.add('opacity-0');
                                setTimeout(() => {
                                    mainCategoryMenu.classList.add('hidden');
                                }, 300);
                            }
                        }, 100);
                    });

                    // Show/hide submenus for main categories and subcategories
                    function toggleSubmenuOnHover(elementBtn, submenu) {
                        elementBtn.addEventListener('mouseenter', () => {
                            submenu.classList.remove('hidden');
                            setTimeout(() => {
                                submenu.classList.remove('opacity-0');
                            }, 10);
                        });

                        elementBtn.addEventListener('mouseleave', () => {
                            setTimeout(() => {
                                if (!submenu.matches(':hover') && !elementBtn.matches(':hover')) {
                                    submenu.classList.add('opacity-0');
                                    setTimeout(() => {
                                        submenu.classList.add('hidden');
                                    }, 300);
                                }
                            }, 100);
                        });
                    }

                    // Apply submenu behavior for each submenu
                    document.querySelectorAll('.group').forEach(group => {
                        const submenu = group.querySelector('.transition-all');
                        const button = group.querySelector('button');
                        if (submenu && button) {
                            toggleSubmenuOnHover(button, submenu);
                        }
                    });

                    // Hide category menu if mouse leaves the entire area
                    mainCategoryMenu.addEventListener('mouseleave', () => {
                        if (!mainCategoryMenu.matches(':hover')) {
                            mainCategoryMenu.classList.add('opacity-0');
                            setTimeout(() => {
                                mainCategoryMenu.classList.add('hidden');
                            }, 300);
                        }
                    });
                </script>


















                {{-- <li class='relative group max-lg:border-b max-lg:px-3 max-lg:py-3'>
                    <a href='javascript:void(0)'
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px]'>Our Products
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" class="inline-block ml-1"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute top-7 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[200px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        @foreach (getServicesWithProducts() as $service)


                            <li class='py-3 border-b relative group'>
                                <a href='{{ route('servicesingle', $service->slug) }}'
                                    class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[15px] block flex items-center gap-x-1'>
                                    <img src="{{ asset('uploads/' . $service->image) }}" alt=""
                                        class="object-contain rounded-full w-9 h-9" />
                                    {{ $service->title }}
                                </a>

                                <!-- Display Products on Hover -->
                                <ul
                                    class='absolute left-full top-0 z-40 hidden group-hover:block bg-white shadow-lg rounded-lg p-4 w-64 space-y-2'>
                                    @if ($service->products->count())
                                        @foreach ($service->products as $product)
                                            <li>
                                                <a href='{{ route('productsingle', $product->slug) }}'
                                                    class='hover:text-green-500 text-gray-700 block'>
                                                    {{ $product->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class='text-gray-400 italic'>No products available</li>
                                    @endif
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li> --}}




                <li class='relative group max-lg:border-b max-lg:px-3 max-lg:py-3'>
                    <a href='javascript:void(0)'
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px]'>Gallery
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" class="inline-block ml-1"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute top-7 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[180px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        {{-- <li class='py-3 border-b'>


                            <a href='{{ route('videos') }}'
                                class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[17px] block'>

                                Videos
                            </a>
                        </li> --}}
                        <li class='py-3 border-b'>
                            <a href='{{ route('allgallery') }}'
                                class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[17px] block'>

                                Gallery
                            </a>
                        </li>
                        <li class='py-3 border-b'>
                            <a href='{{ route('salescenter') }}'
                                class='hover:text-green-500 hover:fill-gray-800 text-gray-600 font-semibold text-[17px] block'>

                                Sales Center </a>
                        </li>


                    </ul>
                </li>

                <li class='px-3 max-lg:border-b max-lg:py-3'><a href={{ route('faqs') }}
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px] {{ request()->routeIS('faqs') ? 'text-green-500' : '' }}'>Faqs</a>
                </li>

                <li class='px-3 max-lg:border-b max-lg:py-3'><a href={{ route('contact') }}
                        class='hover:text-green-500 text-[#333] block font-bold text-[17px] {{ request()->routeIS('contact') ? 'text-green-500' : '' }}'>Contact</a>
                </li>

            </di>
        </div>

        <div class='flex max-lg:ml-auto'>
            <button id="toggleOpen" class='lg:hidden'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 20a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </ul>
</header>


{{-- navbar script  --}}
<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
