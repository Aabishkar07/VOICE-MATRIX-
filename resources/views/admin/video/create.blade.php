@extends('admin.layouts.app')
@section('body')
    <div class="">
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
                    Add Video
                </div>
            </div>
            <div class="py-5 ">
                <form method="POST" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                            Video Title</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input id="name" name="title" placeholder="Enter Video title here" type="text"
                                value="{{ old('title') }}"
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
                                class="w-full p-3 mt-1 text-xs placeholder-gray-400 border border-gray-300 rounded focus:border-secondary focus:outline-none hover:border-secondary"
                                name="video" placeholder="Type Video URL here" type="text"
                                value="{{ old('video') }}" />
                            @error('video')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            order
                        </label>
                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs placeholder-gray-400 border border-gray-300 rounded focus:border-secondary focus:outline-none hover:border-secondary"
                                name="order" placeholder="Type category order here" type="text"
                                value="{{ old('order') }}" />
                            @error('order')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}




                    <div class="mt-6">
                        {{-- <button type="submit"
                            class="flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-[#3939ac] hover:bg-lightsecondary focus:outline-none transition duration-150 ease-in-out">
                            Add Category
                        </button> --}}
                        <button
                            class="bg-green-700  border-green-700 border hover:bg-transparent hover:text-green-700 text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-200"
                            type="submit">Add Video
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
