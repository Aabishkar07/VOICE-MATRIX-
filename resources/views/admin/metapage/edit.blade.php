@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4 mb-6">
        <a href="{{ route('admin.metapages.index') }}"
            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="20"
                height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <div class="text-2xl font-bold text-gray-800">Edit Metapage</div>
    </div>

    <div class="bg-white rounded-xl shadow-lg text-slate-600">
        <form action="{{ route('admin.metapages.update', $metapage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="p-8">
                <div class="space-y-6">

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
                            <!--    PageName -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Page Name
                                </label>
                                <div
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors">
                                    {{ $metapage->page_name }}
                                </div>

                            </div>
                            <!-- Meta Title -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Meta Title
                                </label>
                                <input
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="meta_title" placeholder="Enter meta title for SEO" type="text"
                                    value="{{ old('meta_title', $metapage->meta_title) }}" />
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
                                    name="keywords" placeholder="Enter keywords separated by commas" type="text"
                                    value="{{ old('keywords', $metapage->keywords) }}" />
                                @error('keywords')
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
                                    name="meta_description" placeholder="Enter meta description for search engines" rows="3">{{ old('meta_description', $metapage->meta_description) }}</textarea>
                                @error('meta_description')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.metapages.index') }}"
                            class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-8 py-2 text-sm font-medium text-white bg-[#ff3131] rounded-lg hover:bg-[#ff3135] focus:outline-none focus:ring-2 focus:ring-[#ff3131] focus:ring-offset-2 transition-colors">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Update metapage
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
