@extends('admin.layouts.app')

@section('body')
    <div class="">
        @include('admin.include.toastmessage')
        <div class="flex justify-between">
            <div class="w-full text-2xl font-bold text-secondary">Settings</div>
        </div>
        <div class='p-3 mt-4 font-light bg-white rounded-lg shadow product-table font-main'>
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b">
                <li class="px-4 py-2 -mb-px font-semibold text-gray-800 bg-white border-t border-l border-r rounded-t"><a
                        id="default-tab" href="#first">Details</a></li>
            </ul>
            <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first" class="p-4">

                    <form class="w-full mt-5" method="post" action="{{ route('admin.setting.update', $setting->id) }}">
                        @csrf
                        @method('put')
                        <div class="flex flex-wrap mb-4 -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-first-name">
                                    Email
                                </label>
                                <input
                                    class="  border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-none"
                                    id="grid-first-name" type="email" value="{{ $setting->email ?? '' }}" name="email">

                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-last-name">
                                    Contact Number
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-last-name" type="text" value="{{ $setting->contact_number ?? '' }}"
                                    name="contact_number">
                            </div>
                            <div class="w-full px-3 mt-4 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-last-name">
                                    Address 1
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-last-name" type="text" value="{{ $setting->address ?? '' }}" name="address">
                            </div>


                            <div class="w-full px-3 mt-4 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-last-name">
                                    Address 2
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-last-name" type="text" value="{{ $setting->mainaddress ?? '' }}" name="main_address">
                            </div>
                            <div class="w-full px-3 mt-4 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-last-name">
                                    Location Map (Google Map Link)
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-last-name" type="text" value="{{ $setting->googlemap ?? '' }}"
                                    name="googlemap">
                            </div>
                        </div>
                        {{-- <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-password">
                                Password
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" type="password" placeholder="******************">
                            <p class="text-xs italic text-gray-600">Make it as long and as crazy as you'd like</p>
                        </div>
                    </div> --}}
                        <hr class="pt-3">
                        <p class="block mb-5 font-bold tracking-wide text-gray-800">Social Links</p>

                        <div class="flex flex-wrap mb-2 -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-city">
                                    Facebook
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-city" type="text" value="{{ $setting->facebook ?? '' }}" name="facebook">
                            </div>

                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-city">
                                    Instagram
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-city" type="text" value="{{ $setting->instagram ?? '' }}" name="instagram">
                            </div>

                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                    for="grid-city">
                                    Youtube
                                </label>
                                <input
                                    class="border bg-slate-50 font-normal border-gray-300 p-3 rounded focus:border-[#7065d4] hover:border-[#7065d4] w-full focus:outline-non "
                                    id="grid-city" type="text" value="{{ $setting->youtube ?? '' }}" name="youtube">
                            </div>





                        </div>
                        <button type="submit"
                            class="px-10 py-1 mt-3 mr-2 text-xl font-semibold text-green-700 bg-white border border-green-700 rounded-md hover:border-green-700 hover:text-white hover:bg-green-700">
                            Save
                        </button>
                    </form>
                </div>


            </div>

        </div>
    </div>
@endsection
