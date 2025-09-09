@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4 mb-6">
        <a href="{{ route('admin.homesections.index') }}"
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
        <div class="text-2xl font-bold text-gray-800">Edit Home Section</div>
    </div>

    <div class="bg-white rounded-xl shadow-lg text-slate-600">
        <form action="{{ route('admin.homesections.update', $homesection->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="p-8">
                <div class="space-y-6">
                    <!-- Basic Information Section -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Basic Information</h3>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Section Title <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                    name="title" placeholder="Enter section title here" type="text"
                                    value="{{ old('title', $homesection->title) }}" />
                                @error('title')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <!-- Main Image Upload Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Main Image
                                </label>
                                <div
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
                                    <input type="file" name="image"
                                        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                        onchange="loadMainFile(event)" />
                                    <p class="text-xs text-gray-500 mt-2">PNG, JPG, GIF up to 10MB</p>
                                </div>

                                <!-- Current Main Image Preview -->
                                @if ($homesection->image)
                                    <div class="mt-3">
                                        <p class="text-sm text-gray-600 mb-2">Current Main Image:</p>
                                        <img class="oldmainimage rounded-lg shadow-sm"
                                            src="{{ asset('/uploads/' . $homesection->image) }}" alt="Current Main Image"
                                            style="width: 100px; height: auto;">
                                    </div>
                                @endif

                                <!-- New Main Image Preview -->
                                <img id="main-output" class="mt-3 rounded-lg shadow-sm"
                                    style="width: 100px; height: auto; display: none;" />

                                @error('image')
                                    <div class="text-sm text-red-500 mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            @if ($homesection->mini_image)
                                <!-- Mini Image Upload Field -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Mini Image
                                    </label>
                                    <div
                                        class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
                                        <input type="file" name="mini_image"
                                            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                            onchange="loadMiniFile(event)" />
                                        <p class="text-xs text-gray-500 mt-2">PNG, JPG, GIF up to 10MB</p>
                                    </div>

                                    <!-- Current Mini Image Preview -->
                                    @if ($homesection->mini_image)
                                        <div class="mt-3">
                                            <p class="text-sm text-gray-600 mb-2">Current Mini Image:</p>
                                            <img class="oldminiimage rounded-lg shadow-sm"
                                                src="{{ asset('/uploads/' . $homesection->mini_image) }}"
                                                alt="Current Mini Image" style="width: 100px; height: auto;">
                                        </div>
                                    @endif

                                    <!-- New Mini Image Preview -->
                                    <img id="mini-output" class="mt-3 rounded-lg shadow-sm"
                                        style="width: 100px; height: auto; display: none;" />

                                    @error('mini_image')
                                        <div class="text-sm text-red-500 mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Description Section -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Section Description</h3>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Description <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                class="block tinymce w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors"
                                name="description" rows="6" placeholder="Enter detailed section description...">{{ old('description', $homesection->description) }}</textarea>
                            @error('description')
                                <div class="text-sm text-red-500 mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>



                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.homesections.index') }}"
                            class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-8 py-2 text-sm font-medium text-white bg-[#ff3131] rounded-lg hover:bg-[#ff3135] focus:outline-none focus:ring-2 focus:ring-[#ff3131] focus:ring-offset-2 transition-colors">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Update Home Section
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        var loadMainFile = function(event) {
            var output = document.getElementById('main-output');
            var oldImage = document.querySelector('.oldmainimage');

            output.src = URL.createObjectURL(event.target.files[0]);
            output.style.display = 'block';

            // Hide old image when new one is selected
            if (oldImage) {
                oldImage.style.display = 'none';
            }

            output.onload = function() {
                URL.revokeObjectURL(output.src);
            }
        };

        var loadMiniFile = function(event) {
            var output = document.getElementById('mini-output');
            var oldImage = document.querySelector('.oldminiimage');

            output.src = URL.createObjectURL(event.target.files[0]);
            output.style.display = 'block';

            // Hide old image when new one is selected
            if (oldImage) {
                oldImage.style.display = 'none';
            }

            output.onload = function() {
                URL.revokeObjectURL(output.src);
            }
        };
    </script>
@endsection
