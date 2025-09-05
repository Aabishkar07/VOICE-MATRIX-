@extends('admin.layouts.app')
@section('page_title', 'Admin - Product')
@section('product_select', 'bg-black text-white')
@section('body')
    <div class="w-full px-5 bg-background">
        @include('admin.include.toastmessage')

        <div class="flex justify-between">
            <div class="flex-1">
                <h2 class="w-full text-2xl font-bold text-secondary ">Our Teams</h2>
            </div>
            <div class="text-right "> <a href="{{ route('admin.teams.create') }} "
                    class="flex items-center px-3 py-2 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all ease-linear bg-green-700 border border-green-700 rounded outline-none hover:bg-transparent hover:text-green-700 focus:outline-none duration-400 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Add Team Member</a>
            </div>


        </div>
        <div class="relative mt-10 text-white bg-green-700 shadow product-tablerounded-lg ">
            <div class="overflow-x-auto ">
                <table class="min-w-full ">

                    <thead class="p-10 font-normal text-left">
                        <tr class="">
                            <th
                                class="px-5 py-3 text-xs ">
                                Name</th>

                            <th
                                class="px-5 py-3 text-xs ">
                                Image</th>

                            <th
                                class="px-5 py-3 text-xs ">
                                Designation</th>

                            <th
                                class="px-5 py-3 text-xs ">
                                Created_at</th>



                            <th
                                class="px-5 py-3 text-xs ">
                                Actions</th>
                        </tr>
                    </thead>

                    @foreach ($team as $key => $teams)
                        <tbody>

                            <tr>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $teams->name }}</p>
                                </td>


                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <img src="{{ asset('/uploads/' . $teams->image) }}" alt="herosectionimage"
                                        class="w-12 h-12 oldimage" />
                                </td>


                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">


                                    <p class="text-gray-900 whitespace-no-wrap">{{ $teams->designation }}</p>
                                </td>


                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $teams->created_at->format('jS M Y') }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">

                                   
                                <div class="flex items-center p-2">

                                    <a href=" {{ route('admin.teams.edit', $teams->id) }}">
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
                                        action="{{ route('admin.teams.destroy', $teams->id) }}"
                                        id="delete-form-{{ $teams->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button" onclick="deleteItem({{ $teams->id }})"
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

        <script>
            function deleteSingleImage(itemSlug) {


                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // alert("delete-form-"+itemSlug)
                        let form = document.querySelector("#delete-form-" + itemSlug)
                        form.submit();
                    }
                });
            }
        </script>

    </div>
@endsection
