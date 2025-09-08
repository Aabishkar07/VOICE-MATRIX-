@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4 mb-6">
        <a href="{{ route('admin.affiliations.index') }}"
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
        <div class="text-2xl font-bold text-gray-800">Edit Affiliation</div>
    </div>

    <div class="bg-white rounded-xl shadow-lg text-slate-600">
        <form method="post" action="{{ route('admin.affiliations.update', $affiliation->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-8">
                <div class="space-y-6">
                    <!-- Basic Information Section -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Basic Information</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Title Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Affiliation Title <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="title" placeholder="Enter affiliation title here" type="text"
                                    value="{{ old('title', $affiliation->title) }}" />
                                @error('title')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Order Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Display Order
                                </label>
                                <input
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="order" placeholder="Enter display order (e.g., 1, 2, 3...)" type="number"
                                    value="{{ old('order', $affiliation->order) }}" min="0" />
                                @error('order')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="text-xs text-gray-500 mt-1">Lower numbers will appear first</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload Section -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Affiliation Image</h3>
                        
                        <!-- Current Image Display -->
                        @if($affiliation->image)
                            <div class="mb-4">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Current Image</label>
                                <div class="flex items-center space-x-4">
                                    <img src="{{ asset('uploads/' . $affiliation->image) }}" 
                                         alt="{{ $affiliation->title }}" 
                                         class="w-24 h-24 object-cover rounded-lg border border-gray-200 shadow-sm">
                                    <div class="text-sm text-gray-600">
                                        <p class="font-medium">{{ $affiliation->title }}</p>
                                        <p class="text-xs text-gray-500">Current affiliation image</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                        <!-- Image Upload Field -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                {{ $affiliation->image ? 'Replace Image' : 'Upload Image' }}
                            </label>
                            <div
                                class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
                                <input type="file" name="image"
                                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                    onchange="loadFile(event)" accept="image/*" />
                                <p class="text-xs text-gray-500 mt-2">PNG, JPG, GIF up to 2MB</p>
                                @if($affiliation->image)
                                    <p class="text-xs text-blue-600 mt-1">Leave empty to keep current image</p>
                                @endif
                            </div>
                            <img id="output" class="mt-3 rounded-lg shadow-sm" style="width: 150px; height: auto;" />
                            @error('image')
                                <div class="text-sm text-red-500 mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.affiliations.index') }}"
                            class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-8 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                            </svg>
                            Update Affiliation
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src);
            }
        };
    </script>
@endsection
