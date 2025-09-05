@extends('frontend.layout.app')
@section('body')
    @php
        $setting = getSetting();
    @endphp

    @include('admin.include.toastmessage')

    {{-- <form action="{{ route('updatecontact') }}" method="post">
        @csrf
        <section class="py-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="mb-10 lg:mb-0">
                        <div class="w-full group">
                            <div class="relative h-full">
                                <img src="{{ asset('images/saurya1.jpg') }}" alt="ContactUs tailwind section"
                                    class="w-full max-lg:h-[80vh]  bg-indigo-700 lg:rounded-l-2xl rounded-2xl bg-blend-multiply" />
                                <h1 class="absolute text-4xl font-bold leading-10 text-white font-manrope top-11 left-11">
                                    Contact us</h1>
                                <div class="absolute bottom-0 w-full p-5 lg:p-11">
                                    <div class="block px-6 py-6 bg-white rounded-lg max-sm:px-3">
                                        <a href="javascript:;" class="flex items-center mb-6">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <h5 class="ml-5 text-base font-normal leading-6 text-black">
                                                {{ $setting->contact_number }}</h5>
                                        </a>
                                        <a href="mailto:{{ $setting->email }}" class="flex flex-wrap items-center mb-6">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <h5 class="ml-5 text-base font-normal leading-6 text-black">
                                                {{ $setting->email }}</h5>
                                        </a>
                                        <a href="javascript:;" class="flex items-center">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                                    stroke="#000000" stroke-width="2" />
                                                <path
                                                    d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                                    stroke="#000000" stroke-width="2" />
                                            </svg>
                                            <h5 class="ml-5 text-base font-normal leading-6 text-black">
                                                {{ $setting->address }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 bg-gray-50 lg:p-11 lg:rounded-r-2xl rounded-2xl">
                        <h2 class="text-4xl font-semibold leading-10 text-gray-800 font-manrope mb-11">Send Us A Message
                        </h2>
                        <input type="text" name="name" required value="{{ old('name') }}"
                            class="w-full h-12 pl-4 mb-2 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm focus:outline-none"
                            placeholder="Name">
                        @error('name')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                        <input type="email" name="email" required value="{{ old('email') }}"
                            class="w-full h-12 pl-4 mt-4 mb-2 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm focus:outline-none"
                            placeholder="Email">
                        @error('email')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                        <input type="number" name="phone" required value="{{ old('phone') }}"
                            class="w-full h-12 pl-4 mt-4 mb-2 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm focus:outline-none"
                            placeholder="phone">
                        @error('phone')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                        <textarea name="message" required
                            class="w-full pl-4 mt-4 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm h-28 focus:outline-none"
                            placeholder="Message">{{ old('message') }}</textarea>

                        @error('message')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                        <button type="submit"
                            class="w-full h-12 text-base font-semibold leading-6 text-white transition-all duration-700 bg-gray-800 rounded-md shadow-sm hover:bg-[#000000] transition ease-in-out delay-150 ">Send</button>
                    </div>
                </div>
        </section>

    </form> --}}

    <form class="fade-up" action="{{ route('updatecontact') }}" method="post">
        @csrf
        <section class="py-5">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                    <!-- Image Section -->
                    <div class="relative w-full h-full">

                        {!! $setting->googlemap !!}
                        {{-- <img src="{{ asset('images/saurya1.jpg') }}" alt="ContactUs Image"
                            class="object-cover w-full h-full rounded-2xl bg-blend-multiply" /> --}}
                        {{-- <h1 class="absolute text-4xl font-bold text-white top-10 left-10 font-manrope">Contact us</h1> --}}
                    </div>

                    <!-- Contact Info Section -->
                    <div class="p-5 bg-gray-50 lg:p-11 lg:rounded-2xl rounded-xl">
                        <h2 class="text-4xl font-semibold text-gray-800 underline font-manrope mb-11">Send Us A Message</h2>

                        <!-- Name Field -->
                        <input type="text" name="name" required value="{{ old('name') }}"
                            class="w-full h-12 pl-4 mb-2 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm focus:outline-none"
                            placeholder="Name">
                        @error('name')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        <!-- Email Field -->
                        <input type="email" name="email" required value="{{ old('email') }}"
                            class="w-full h-12 pl-4 mt-4 mb-2 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm focus:outline-none"
                            placeholder="Email">
                        @error('email')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        <!-- Phone Field -->
                        <input type="number" name="phone" required value="{{ old('phone') }}"
                            class="w-full h-12 pl-4 mt-4 mb-2 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm focus:outline-none"
                            placeholder="Phone">
                        @error('phone')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        <!-- Message Field -->
                        <textarea name="message" required
                            class="w-full pl-4 mt-4 text-lg font-normal leading-7 text-gray-600 placeholder-gray-400 bg-transparent border border-gray-200 rounded-md shadow-sm h-28 focus:outline-none"
                            placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full h-12 text-base font-semibold text-white bg-gray-800 rounded-md shadow-sm hover:bg-[#000000] transition-all duration-700 ease-in-out">
                            Send
                        </button>
                    </div>
                </div>

                <section class="bg-white ezy__service21 light text-zinc-900 ">
                    <div class="container px-4">

                      <div class="grid grid-cols-1 gap-6 mt-12 sm:grid-cols-2 lg:grid-cols-4">
                        <!-- card start -->
                        <div class="col-span-1">
                          <div class="flex items-center h-full p-6 bg-white shadow rounded-xl xl:px-6">
                            <div
                              class="flex items-center justify-center h-12 text-2xl rounded-2xl "
                            >
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            </div>


                            <h5 class="ml-3 text-base text-black">{{ $setting->contact_number }}</h5>

                          </div>
                        </div>


                        <div class="col-span-1">
                          <div class="flex items-center h-full p-6 bg-white shadow rounded-xl xl:px-6">
                            <div
                              class="flex items-center justify-center h-12 text-2xl rounded-2xl "
                            >
                              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z"
                                      stroke="#000000" stroke-width="2" stroke-linecap="round" />
                              </svg>
                            </div>
                            <h5 class="ml-1 text-base text-black">{{ $setting->email }}</h5>

                          </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="col-span-1">
                          <div class="flex items-center h-full p-6 bg-white shadow rounded-xl xl:px-6">
                            <div
                              class="flex items-center justify-center h-12 text-2xl rounded-2xl "
                            >
                              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                      stroke="#000000" stroke-width="2" />
                                  <path
                                      d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                      stroke="#000000" stroke-width="2" />
                              </svg>
                            </div>
                            <h5 class="ml-5 text-base text-black">{{ $setting->address }}</h5>                          </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="col-span-1">
                          <div class="flex items-center h-full p-6 bg-white shadow rounded-xl xl:px-6">
                            <div
                              class="flex items-center justify-center h-12 text-2xl rounded-2xl"
                            >
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                    stroke="#000000" stroke-width="2" />
                                <path
                                    d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                    stroke="#000000" stroke-width="2" />
                            </svg>                            </div>
                            <h5 class="ml-5 text-base text-black">{{ $setting->mainaddress }}</h5>
                          </div>
                        </div>
                        <!-- card end -->
                      </div>
                    </div>
                  </section>



            </div>
        </section>
    </form>


    @include('frontend.components.supplierandpartners')

    {{-- @if ($setting->googlemap)
        <div class="relative w-full h-96">
            {!! $setting->googlemap !!}

        </div>
    @endif --}}
    <style>
        iframe {
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
