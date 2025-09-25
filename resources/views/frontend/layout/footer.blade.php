@php
    $setting = getSetting();

@endphp

{{-- <footer class="tracking-wide bg-black">
    <div class="px-6 mx-auto py-14 sm:px-10 max-w-screen-2xl">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-5">

            <div class="lg:col-span-2">
                <a href='{{ route('home') }}'>

                    <div class="mb-4 text-3xl font-bold text-white">Voice Matrix BPO SERVICES PVT LTD</div>
                </a>

                <p class="text-sm text-white">At Voice Matrix BPO SERVICES PVT LTD , we provide
                    high-quality, affordable feed to support healthy, productive, and profitable farming. As a trusted
                    partner, we deliver exceptional nutritional solutions, empowering farmers to thrive and build a
                    sustainable future in agriculture and poultry farming</p>

                <div class="pt-5">

                    <ul class="flex flex-wrap gap-4 gap-x-6">
                        <li><a target="_blank" href="{{ $setting->facebook }}" class="text-xl hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-7 h-7" viewBox="0 0 512 512">
                                    <path fill="#1877f2"
                                        d="M512 256c0 127.78-93.62 233.69-216 252.89V330h59.65L367 256h-71v-48.02c0-20.25 9.92-39.98 41.72-39.98H370v-63s-29.3-5-57.31-5c-58.47 0-96.69 35.44-96.69 99.6V256h-65v74h65v178.89C93.62 489.69 0 383.78 0 256 0 114.62 114.62 0 256 0s256 114.62 256 256z"
                                        data-original="#1877f2" />
                                    <path fill="#fff"
                                        d="M355.65 330 367 256h-71v-48.021c0-20.245 9.918-39.979 41.719-39.979H370v-63s-29.296-5-57.305-5C254.219 100 216 135.44 216 199.6V256h-65v74h65v178.889c13.034 2.045 26.392 3.111 40 3.111s26.966-1.066 40-3.111V330z"
                                        data-original="#ffffff" />
                                </svg>
                            </a></li>

                        <li><a target="_blank" href="{{ $setting->youtube }}" class="text-xl hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 24 24" fill="none" stroke="#FF0000" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                    <path d="M10 9l5 3l-5 3z" />
                                </svg>

                            </a></li>

                        <li><a target="_blank" href="{{ $setting->instagram }}" class="text-xl hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-7 h-7" viewBox="0 0 24 24">
                                    <linearGradient id="a" x1="-37.106" x2="-26.555" y1="-72.705"
                                        y2="-84.047" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5" />
                                        <stop offset=".5" stop-color="#ff543e" />
                                        <stop offset="1" stop-color="#c837ab" />
                                    </linearGradient>
                                    <path fill="url(#a)"
                                        d="M1.5 1.633C-.386 3.592 0 5.673 0 11.995c0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091C18.89.029 18.778.005 15.91 0 5.737.005 3.507-.448 1.5 1.633z"
                                        data-original="url(#a)" />
                                    <path fill="#fff"
                                        d="M11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471a1.063 1.063 0 1 0 0 2.126 1.063 1.063 0 0 0 0-2.126zm-4.73 1.243a4.55 4.55 0 1 0 .001 9.101 4.55 4.55 0 0 0-.001-9.101zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z"
                                        data-original="#ffffff" />
                                </svg></a></li>
                    </ul>
                </div>
            </div>

            <div>
                <h4 class="mb-8 text-lg font-semibold text-white">Quick Links</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}" class="text-sm text-white hover:text-white">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-sm text-white hover:text-white">About</a></li>
                    <li><a href="{{ route('videos') }}" class="text-sm text-white hover:text-white">Videos</a></li>
                    <li><a href="{{ route('salescenter') }}"
                            class="text-sm text-white hover:text-white">Our Sales Center</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-white hover:text-white">Contact</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-white hover:text-white">Blogs</a></li>


                </ul>
            </div>

            <div>
                <h4 class="mb-8 text-lg font-semibold text-white">Products</h4>
                <ul class="space-y-4">
                    @foreach (getServices() as $key => $value)
                        <li><a href="javascript:void(0)"
                                class="text-sm text-white hover:text-white">{{ $value->title }}</a></li>
                    @endforeach


                </ul>
            </div>

            <div>
                <h4 class="mb-8 text-lg font-semibold text-white">Contact Us</h4>
                <div class="space-y-4">
                    <p class="text-sm text-white">{{ $setting->address }}</p>
                    <p class="text-sm text-white">{{ $setting->mainaddress }}</p>

                    <p class="text-sm text-white">{{ $setting->email }}</p>
                    <p class="text-sm text-white">{{ $setting->contact_number }}</p>
                </div>
            </div>

        </div>
    </div>

    <div class="px-8 pb-5 tracking-wide bg-black">
        <div class="flex items-center justify-between gap-6 mx-auto max-w-screen-2xl max-lg:flex-col">
            <div class="flex flex-wrap justify-center max-sm:mt-4">
                <a href="https://softsaro.com" target="_blank">
                    <p class="text-sm text-white">
                        Powered by <span class="font-bold hover:text-purple-800">Softsaro Nepal.</span>
                    </p>
                </a>
                <img class="w-auto ml-2 h-7" src="{{ asset('/images/nepal_flag.gif') }}" alt="Company" />
            </div>

            <p class='text-base text-white max-lg:order-1'>© Voice Matrix BPO SERVICES PVT LTD. All rights reserved.</p>
            <ul class="flex flex-wrap gap-x-6 gap-y-2">
                <li><a href="{{ route('termsandcondition') }}" class="text-base text-white hover:text-white">Terms
                        and Condition</a>
                </li>
                <li><a href="{{ route('privacyPolicy') }}" class="text-base text-white hover:text-white">Privacy
                        Policy</a>
                </li>
            </ul>
        </div>
    </div>
</footer> --}}



<footer class="footer bg-[#050a30] text-white py-12">
    <div class="max-w-screen-2xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            <div class="md:col-span-2 lg:col-span-2">
                <a href="{{ asset('home') }}" class="text-2xl font-bold text-white inline-block mb-4">
                    <img class="w-72" src="{{ asset('images/whitelogo.svg') }}" alt="Logo" />
                </a>
                <p class="text-gray-300 mb-6">{{ $setting->short_description }}</p>
                <div class="flex space-x-4">
                    <a href="{{ $setting->facebook }}" target="_blank"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-all duration-300 transform hover:-translate-y-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $setting->twitter }}" target="_blank"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-all duration-300 transform hover:-translate-y-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ $setting->linkedin }}" target="_blank"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-all duration-300 transform hover:-translate-y-1">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="{{ $setting->instagram }}" target="_blank"
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-primary transition-all duration-300 transform hover:-translate-y-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}"
                            class="text-gray-300 hover:text-white transition-colors duration-300">Home</a>
                    </li>

                    <li><a href="{{ route('about') }}"
                            class="text-gray-300 hover:text-white transition-colors duration-300">About
                            Us</a></li>
                    <li><a href="{{ route('allblogs') }}"
                            class="text-gray-300 hover:text-white transition-colors duration-300">Blogs
                        </a></li>
                    <li><a href="{{ route('faqs') }}"
                            class="text-gray-300 hover:text-white transition-colors duration-300">FAQ
                        </a></li>

                    <li><a href="{{ route('contact') }}"
                            class="text-gray-300 hover:text-white transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-4">Address</h3>
                <div class="">

                    <div class="">
                        {{ $setting->address }}

                    </div>
                    <div class="">

                        {{ $setting->mainaddress }}
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div  class="text-gray-400 mb-4 md:mb-0 ">&copy; 2025 Voice MAtrix BPO Solutions. All Rights Reserved.</div>

            <div class="flex space-x-6 ">
                <a href="{{ route('privacyPolicy') }}"
                    class="text-gray-200 hover:text-white transition-colors duration-300">Privacy
                    Policy</a>
                <a href="{{ route('termsandcondition') }}"
                    class="text-gray-200 hover:text-white transition-colors duration-300">Terms of
                    Service</a>
                {{-- <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Sitemap</a> --}}
            </div>
            <div class="max-sm:pt-5 flex items-center gap-x-2 sm:mr-16">
                Powered By <a href="https://www.nepbyte.com" target="_blank"
                    class="text-[#ff2953] hover:text-white hover:underline">NepByte</a> <img
                    src="{{ asset('images/nepal_flag.gif') }}" alt="NepByte" class="w-5" />
            </div>


        </div>
    </div>
</footer>
