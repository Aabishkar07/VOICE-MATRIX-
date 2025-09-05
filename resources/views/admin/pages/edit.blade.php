@extends('admin.layouts.app')
@section('body')
    <div class="flex items-center gap-x-4">
        <a href="{{ route('admin.pages.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <div class="text-xl font-semibold ">Edit {{ $page->title }}</div>
    </div>
    <div class="bg-white rounded-lg shadow-lg row mt-30 text-slate-600">
        <form method="post" action="{{ route('admin.pages.update', $page->id) }} " enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-6 mt-3">
                <div class="flex flex-col ">
                    <div>
                        <label class="w-full text-sm font-semibold" htmlFor="">
                            Title
                        </label>

                        <div>
                            <input readonly
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                placeholder="Enter Title Here" type="text" value="{{ old('title', $page->title) }}" />
                            @error('title')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if ($page->about_title)
                        <div>
                            <label class="w-full text-sm font-semibold" htmlFor="">
                                About Title
                            </label>

                            <div>
                                <input name="about_title"
                                    class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                    placeholder="Enter about_title Here" type="text"
                                    value="{{ old('about_title', $page->about_title) }}" />
                                @error('about_title')
                                    <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    @endif






                    @if ($page->top_image)
                        <div class="mt-3">
                            <label class='text-sm font-semibold'>Top Banner Image</label>
                            <div
                                class='w-full p-2 mt-2 mb-1 text-sm border rounded-md shadow-sm form-control border-grey-400'>
                                <input type="file" name="top_image"
                                    class="image hover:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 "
                                    onchange="loadFile(event)" />
                            </div>
                            <img class="oldimage" src="{{ asset('/uploads/' . $page->top_image) }}" alt="Card"
                                style="width: 70px;margin-bottom:2px;">
                            <img id="output" style="width: 70px; margin-bottom: 2px;" />


                            @error('top_image')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    @endif



                    <div class="w-full mt-2 text-sm font-semibold ">
                        Description
                    </div>
                    <textarea id="tinymce"
                        class="block w-full px-3 py-2 mt-1 border rounded-md outline-none tinymce focus:border-blue-500 hover:border-blue-500"
                        name="description" rows="5">{{ old('description', $page->description) }}</textarea>
                    @error('description')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror



                    @if ($page->mid_image)
                        <div class="mt-3">
                            <label class='text-sm font-semibold'> Image</label>
                            <div
                                class='w-full p-2 mt-2 mb-1 text-sm border rounded-md shadow-sm form-control border-grey-400'>
                                <input type="file" name="mid_image"
                                    class="image hover:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 "
                                    onchange="loadMiddleFile(event)" />
                            </div>
                            <img class="oldimage2" src="{{ asset('/uploads/' . $page->mid_image) }}" alt="Card"
                                style="width: 70px;margin-bottom:2px;">
                            <img id="output2" style="width: 70px; margin-bottom: 2px;" />


                            @error('mid_image')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <script>
                            var loadMiddleFile = function(event) {
                                var output = document.getElementById('output2');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                var old = document.getElementsByClassName('oldimage2')[0];

                                old.classList.add("hidden");

                            };
                        </script>
                    @endif


                    @if ($page->history)
                        <div class="w-full mt-2 text-sm font-semibold ">
                            History
                        </div>
                        <textarea id="tinymce"
                            class="block w-full px-3 py-2 mt-1 border rounded-md outline-none tinymce focus:border-blue-500 hover:border-blue-500"
                            name="history" rows="5">{{ old('history', $page->history) }}</textarea>
                        @error('history')
                            <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    @endif

                    @if ($page->vision)
                        <div class="w-full mt-2 text-sm font-semibold ">
                            Vision
                        </div>
                        <textarea id="tinymce"
                            class="block w-full px-3 py-2 mt-1 border rounded-md outline-none tinymce focus:border-blue-500 hover:border-blue-500"
                            name="vision" rows="5">{{ old('vision', $page->vision) }}</textarea>
                        @error('vision')
                            <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    @endif


                    @if ($page->mission)
                        <div class="w-full mt-2 text-sm font-semibold ">
                            Mission
                        </div>
                        <textarea id="tinymce"
                            class="block w-full px-3 py-2 mt-1 border rounded-md outline-none tinymce focus:border-blue-500 hover:border-blue-500"
                            name="mission" rows="5">{{ old('mission', $page->mission) }}</textarea>
                        @error('mission')
                            <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    @endif



                    <div>
                        <button
                            class="px-4 py-1 mt-3 mr-2 text-white bg-green-700 border border-black rounded-md hover:bg-green-700 hover:text-white">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
