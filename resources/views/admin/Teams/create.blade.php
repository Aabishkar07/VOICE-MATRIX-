@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4 mb-6">
        <a href="{{ route('admin.teams.index') }}"
            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <div class="text-2xl font-bold text-gray-800">Add Team Member</div>
    </div>

    <div class="bg-white rounded-xl shadow-lg text-slate-600">
        <form method="post" action="{{ route('admin.teams.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-8">
                <div class="space-y-6">
                    <!-- Basic Information Section -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Basic Information</h3>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Name Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Name <span class="text-red-500">*</span>
                                </label>
                                <input class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors" name="name" placeholder="Enter team member name" type="text" value="{{ old('name') }}" />
                                @error('name')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Image</label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
                                    <input type="file" name="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" onchange="loadFile(event)" />
                                    <p class="text-xs text-gray-500 mt-2">PNG, JPG, GIF up to 10MB</p>
                                </div>
                                <img id="output" class="mt-3 rounded-lg shadow-sm" style="width: 100px; height: auto;" />
                                @error('image')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Designation Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Designation <span class="text-red-500">*</span></label>
                                <input class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors" name="designation" placeholder="Enter designation" type="text" value="{{ old('designation') }}" />
                                @error('designation')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Contact Number Field -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Contact Number</label>
                                <input class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-blue-400 transition-colors" name="number" placeholder="Enter contact number" type="text" value="{{ old('number') }}" />
                                @error('number')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.teams.index') }}" class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">Cancel</a>
                        <button type="submit" class="px-8 py-2 text-sm font-medium text-white bg-[#ff3131] rounded-lg hover:bg-[#ff3135] focus:outline-none focus:ring-2 focus:ring-[#ff3131] focus:ring-offset-2 transition-colors">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Add Team Member
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
