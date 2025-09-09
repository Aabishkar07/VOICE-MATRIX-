@extends('admin.layouts.app')
@section('body')
    {{-- @include('message.index') --}}
    <section class="py-1 bg-blueGray-50">
        {{-- Add Category button  --}}
        <div class="flex items-center">
            @include('admin.include.toastmessage')
            <div class="w-full text-2xl font-bold text-secondary">Videos

            </div>

            <div class="w-full mx-auto">
                <div class="relative flex-1 flex-grow w-full max-w-full px-4 text-right">

                    <a href="{{ route('admin.videos.create') }}" class="">
                        <button
                            class="px-3 py-2 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-200 ease-linear bg-[#ff3131] border border-[#ff3131] rounded outline-none hover:bg-transparent hover:text-[#ff3131] focus:outline-none"
                            type="button">Add Video
                        </button>
                    </a>
                </div>
            </div>

        </div>




        <div class="">
            <div class="mt-1">

                <div class="relative mt-10 text-white bg-[#ff3131] shadow product-tablerounded-lg ">
                    <div class="overflow-x-auto ">
                        {{-- max-h-screen min-w-full shadow rounded-lg z-[0] overflow-y-hidden --}}
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="">
                                <tr>
                                    <th class="px-5 py-3 font-bold text-left ">
                                        Title</th>

                                    <th class="px-5 py-3 font-bold text-left ">
                                        Created at</th>

                                    <th class="px-5 py-3 font-bold text-left ">
                                        Actions</th>
                                </tr>
                            </thead>


                            @foreach ($videos as $key => $video)
                                <tbody class="text-sm bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-5 py-3 ">
                                            <p class="text-gray-900 ">{{ $video->title }}</p>
                                        </td>



                                        <td class="w-48 px-5 py-3 text-sm">
                                            <p class="text-gray-900 ">
                                                {{ $video->created_at->format('jS M Y') }}
                                            </p>
                                        </td>


                                        <td>
                                            <div class="flex items-center p-2">

                                                <a href=" {{ route('admin.videos.edit', $video->id) }}">
                                                    <div class="flex px-2 py-1 mx-2 text-white rounded-md bg-slate-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-edit" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>

                                                    </div>
                                                </a>

                                                <form method="POST"
                                                    action="{{ route('admin.videos.destroy', $video->id) }}"
                                                    id="delete-form-{{ $video->id }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" onclick="deleteItem({{ $video->id }})"
                                                        class="flex px-2 py-1 mx-2 text-white bg-red-500 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-trash" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            @endforeach

                        </table>

                    </div>
                </div>
                {{-- <div class="z-0 mt-3">
                    {{ $blogs->links('vendor.pagination.tailwind') }}
                </div> --}}
            </div>
        </div>
    </section>
@endsection
