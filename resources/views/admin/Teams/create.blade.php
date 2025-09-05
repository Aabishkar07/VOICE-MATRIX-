@extends('admin.layouts.app')
@section('page_title', 'Admin - Add Banner')
@section('banner_select', 'bg-green-700 text-white')
@section('body')
    <div class="flex gap-4">
        <a href="{{ route('admin.teams.index') }}">
            <span class="text-2xl material-symbols-outlined">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Add Team Member</div>
    </div>
    <div class="row m-t-30">
        <form method="post" action="{{ route('admin.teams.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-5">
                <div class="flex flex-col my-5">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900" htmlFor="">
                            Name
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="name" placeholder="Type  name here" type="text"
                                value="{{ old('name') }}" />
                            @error('name')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- image --}}
                    <div class="mt-3">

                        <label class='text-sm font-semibold'>Image</label>
                        <div
                            class='w-full p-2 mt-2 mb-1 text-sm border-2 rounded-md shadow-sm form-control border-grey-400'>
                            <input type="file" name="image" />
                        </div>
                        @error('image')
                            <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                * {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Designation
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="designation" placeholder="Type designation here" type="text"
                                {{-- value="{{ request('banner' ?? 0) }}" --}} />
                            @error('designation')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Contact Number
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="number" placeholder="Type number here" type="number"
                                {{-- value="{{ request('banner' ?? 0) }}" --}} />
                            @error('number')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                          Facebook Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="facebook" placeholder="Type Facebook link here" type="text"
                               />
                            @error('facebook')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Twitter Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="twitter" placeholder="Type Twitter link here" type="text"
                                />
                            @error('twitter')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Instagram Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="instagram" placeholder="Type instagram link  here" type="text"
                                 />
                            @error('instagram')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                          Portfolio Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="portfolio" placeholder="Type portfolio link here" type="text"
                                 />
                            @error('portfolio')
                                <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}



                    <div class="">
                        <button
                            class="px-4 py-2 mt-3 mr-2 text-white bg-green-700 border rounded-md border-bg-green-700">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
