@extends('admin.layouts.app')
@section('page_title', 'Admin - Add Banner')
@section('banner_select', 'bg-black text-white')
@section('body')
    <div class="flex gap-4">
        <a href="{{ route('admin.teams.index') }}">
            <span class="material-symbols-outlined text-2xl">
                west
            </span>
        </a>
        <div class="text-xl font-bold">Edit Team Member</div>
    </div>
    <div class="row m-t-30">
        <form method="post" action="{{ route('admin.teams.update' , $team->id) }}" enctype="multipart/form-data">
            @csrf

            @method('PUT')
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
                                value="{{ $team->name }}" />
                            @error('name')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}

                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- image --}}


                <div class="mt-3">
                    <label class='text-sm font-semibold'> Image</label>
                    <div class='w-full p-2 mt-2 mb-1 text-sm border rounded-md shadow-sm form-control border-grey-400'>
                        <input type="file" name="image"
                            class="image hover:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 "
                            onchange="loadFile(event)" />
                    </div>
                    <img class="oldimage" src="{{ asset('/uploads/' . $team->image) }}" alt="Card"
                        style="width: 70px;margin-bottom:2px;">
                    <img id="output" style="width: 70px; margin-bottom: 2px;" />


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
                                name="designation" placeholder="Type designation here" type="text" value="{{ $team->designation }}" />

                            @error('designation')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>



                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Contact number
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="number" placeholder="Type number here" type="text" value="{{ $team->number }}" />

                            @error('number')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
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
                                name="facebook" placeholder="Type Facebook link here" type="text" value="{{ $team->facebook }}" />

                            @error('facebook')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}

                    {{-- <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Twitter Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="twitter" placeholder="Type Twitter link here" type="text" value="{{ $team->twitter }}"
                                />
                            @error('twitter')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}

                    {{-- <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Instagram Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="instagram" placeholder="Type instagram link  here" type="text" value="{{ $team->instagram }}"
                                 />
                            @error('instagram')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}


                    {{-- <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                           Portfolio Link
                        </label>
                        <div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="portfolio" placeholder="Type portfolio link  here" type="text" value="{{ $team->portfolio }}"
                                 />
                            @error('portfolio')
                                <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}


                    <div class="">
                        <button
                            class="border mt-3 border-bg-green-700 px-4 py-2 rounded-md mr-2 text-white bg-green-700">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>


    <script>
        $(document).ready(function () {
            $('#imageInput').change(function () {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imagePreview').html('<img src="' + e.target.result + '" class="w-32 h-32 mt-2">');
                    }
                    reader.readAsDataURL(file);
                } else {
                    $('#imagePreview').html('');
                }
            });
        });
    </script>
@endsection
