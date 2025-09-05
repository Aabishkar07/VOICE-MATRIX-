@extends('admin.layouts.app')
@section('body')
    <div class="w-full bg-background">
        @include('admin.include.toastmessage')
        <div class="flex justify-between">
            <div class="text-2xl font-bold">Popup</div>
            <div class="text-right "> <a href="{{ route('admin.popup.create') }} "
                class="flex bg-[#213343] items-center border-[#213343] border hover:bg-transparent hover:text-[#213343] text-white py-2 text-xs font-bold uppercase px-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Add Popup</a>
        </div>
        </div>
        <div class='p-3 mt-10 bg-white rounded-lg shadow product-table font-main'>

            <div class="relative overflow-x-auto">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="p-10 font-normal">
                        <tr class="">
                            <th scope="col " class="p-2 font-semibold ">
                               title
                            </th>


                            <th scope="col" class="font-semibold ">
                                Image
                            </th>

                            <th scope="col" class="font-semibold ">
                                Order
                            </th>
                            <th scope="col" class="font-semibold ">
                                Created At
                            </th>
                            <th scope="col" class="font-semibold ">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    @foreach ($popups as $key => $popup)
                        <tbody class="text-center bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="">
                                    <div>{{ $popup->title }}</div>
                                </td>


                                <td class="p-2" style="width: 100px;">
                                    <img class="" src="{{ asset('uploads/' . $popup->image) }}" alt="Card"
                                        style="width: 70px;">
                                </td>

                                <td class="">
                                    <div>{{ $popup->order }}</div>
                                </td>
                                <td>
                                    @if ($popup->created_at)
                                        <div>{{ $popup->created_at->format('F j, Y') }}</div>
                                    @else
                                        <div>-</div>
                                    @endif
                                </td>


                                <td>
                                    <div class="flex justify-center p-2">
                                        <a href="{{ route('admin.popup.edit', $popup->id) }}">
                                            <div class="bg-[#266688] py-1 px-2 mx-2 text-white flex rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>


                                            </div>
                                        </a>
                                        <form method="POST" action="{{ route('admin.popup.destroy', $popup->id) }}"
                                            id="delete-form-{{ $popup->id }}">
                                            @csrf
                                            @method('delete')
                                            <button type="button" onclick="deleteItem({{ $popup->id }})"
                                                class="flex px-2 py-1 mx-2 text-white bg-red-500 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
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


    </div>
@endsection
