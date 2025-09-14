@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4">
        <a href="{{ route('admin.partners.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <div class="text-xl font-semibold ">Add Partner</div>
    </div>
    <div class="bg-white rounded-lg shadow-lg row mt-30 text-slate-600">
        <form method="post" action="{{ route('admin.partners.store') }} " enctype="multipart/form-data">
            @csrf
            <div class="p-6 mt-3">
                <div class="flex flex-col ">
                    <div>
                        <label class="w-full text-sm font-semibold" htmlFor="">
                            Title
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="title" placeholder="Enter Title Here" type="text" value="{{ old('title') }}"
                                required />
                            @error('title')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-2">
                        <label class="w-full text-sm font-semibold " htmlFor="">
                            Address
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="address" placeholder="Enter address Here" type="text" value="{{ old('address') }}"
                                required />
                            @error('address')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    {{-- <div class="mt-2">
                        <label class="w-full text-sm font-semibold" htmlFor="">
                          Contact number
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="number" placeholder="Enter number Here" type="number" value="{{ old('number') }}" required/>
                            @error('number')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}



                    <div class="mt-2">
                        <label class="w-full text-sm font-semibold" htmlFor="">
                            Order
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="order" placeholder="Enter order Here" type="number" value="{{ old('order') }}"
                                required />
                            @error('order')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-2">
                        <label class="w-full text-sm font-semibold " htmlFor="">
                            Description
                        </label>

                        <div>
                            <textarea
                                class="w-full tinymce p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="description" placeholder="Enter description Here" type="text" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <!-- SEO Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                            SEO Optimization
                        </h3>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Meta Title -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Meta Title
                                </label>
                                <input
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="meta_title" placeholder="Enter meta title for SEO" type="text"
                                    value="{{ old('meta_title') }}" />
                                @error('meta_title')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Meta Keywords -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Meta Keywords
                                </label>
                                <input
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="meta_keywords" placeholder="Enter keywords separated by commas" type="text"
                                    value="{{ old('meta_keywords') }}" />
                                @error('meta_keywords')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Meta Description -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Meta Description
                                </label>
                                <textarea
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="meta_description" placeholder="Enter meta description for search engines" rows="3">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <button
                            class="px-4 py-1 mt-3 mr-2 text-white bg-[#ff3131] border border-black rounded-md hover:bg-[#ff3135] hover:text-white">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
