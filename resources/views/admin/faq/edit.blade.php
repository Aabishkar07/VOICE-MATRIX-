@extends('admin.layouts.app')
@section('body')
    <div class="flex gap-4">
        <a href="{{ route('admin.faqs.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 12l14 0"></path>
                <path d="M5 12l6 6"></path>
                <path d="M5 12l6 -6"></path>
            </svg>
        </a>
        <div class="text-xl font-bold">Edit Faq</div>
    </div>
    <div class="bg-white rounded-lg shadow-md ">
        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST" class="space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="p-6 mt-3">
                <div class="flex flex-col ">
                    <div>
                        <label class="w-full text-sm font-semibold" htmlFor="">
                            Title
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="title" placeholder="Enter Title Here" type="text"
                                value="{{ old('title', $faq->title) }}" />
                            @error('title')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="w-full text-sm font-semibold" htmlFor="">
                            Order
                        </label>

                        <div>
                            <input
                                class="w-full p-3 mt-3 text-xs border border-gray-300 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500"
                                name="order" placeholder="Enter order Here" type="number"
                                value="{{ old('order', $faq->order) }}" />
                            @error('order')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full mt-2 text-sm font-semibold ">
                        Description
                    </div>
                    <textarea
                        class="block w-full px-3 py-2 mt-1 border rounded-md outline-none focus:border-blue-500 hover:border-blue-500"
                        name="description" rows="5">{{ old('description', $faq->description) }}</textarea>
                    @error('description')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror

                    <div>
                        <button
                            class="px-4 py-1 mt-3 mr-2 text-white bg-[#ff3131] border border-black rounded-md hover:bg-[#ff3135] hover:text-white">
                            Edit
                        </button>
                    </div>
                </div>
            </div>

    </div>
@endsection
