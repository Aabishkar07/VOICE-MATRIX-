@extends('admin.layouts.app')
@section('body')
    <div class=" ">
        <div class="py-4 mt-2 bg-white shadow item-center sm:rounded-lg sm:px-5 ">
            <div class="flex gap-4 item-center">
                <a class="pt-1" href="{{ route('admin.videos.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M5 12l6 6"></path>
                        <path d="M5 12l6 -6"></path>
                    </svg>
                </a>
                <div class="text-2xl font-extrabold leading-9 text-gray-900 text-primary">
                    Edit Video
                </div>
            </div>
            <div class="py-5 ">
                <form method="POST" action="{{ route('admin.videos.update', $video->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Video
                            Title</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input id="name" name="title" placeholder="Enter Video Title here" type="text"
                                value="{{ old('title', $video->title) }}"
                                class="w-full p-3 mt-3 text-xs placeholder-gray-400 border border-gray-300 rounded focus:border-secondary focus:outline-none hover:border-secondary">
                        </div>

                        @error('title')
                            <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            Video URL
                        </label>
                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs placeholder-gray-400 border border-gray-300 rounded focus:border-secondary focus:outline-none hover:border-secondary"
                                name="video" placeholder="Type Video URL here" type="text"
                                value="{{ old('video', $video->video) }}" />
                            @error('video')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <button
                            class="bg-[#ff3131]  border-[#ff3131] border hover:bg-transparent hover:text-[#ff3131] text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-200"
                            type="submit">Edit Video
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
