@extends('admin.layouts.app')
@section('body')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>


    @include('admin.include.toastmessage')

    <div class="flex items-center">
        <div class="flex-1">
            <h2 class="w-full text-2xl font-bold text-secondary ">Inquirys </h2>
        </div>

    </div>


    <div class="py-3 ">
        <div class="mt-1">
            <div class="relative mt-2 text-white bg-[#ff3131] shadow product-tablerounded-lg ">
                <div class="overflow-x-auto ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="">
                            <tr>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Name</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Product</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Phone Numner</th>

                                <th class="px-5 py-3 font-semibold text-left ">
                                    Email</th>


                                <th class="px-5 py-3 font-semibold text-left ">
                                    Subject</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Message</th>
                                <th class="px-5 py-3 font-semibold text-left ">
                                    Inquiry Date</th>

                                {{-- <th class="px-5 py-3 font-semibold text-left ">
                                    Actions</th> --}}
                            </tr>
                        </thead>



                        @foreach ($inquirys as $key => $inquiry)
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                <tr>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $inquiry->name }}</p>
                                    </td>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $inquiry->product_name }}</p>
                                    </td>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $inquiry->phonenumber }}</p>
                                    </td>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $inquiry->email }}</p>
                                    </td>

                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $inquiry->subject }}</p>
                                    </td>
                                    <td class="px-5 py-3 ">
                                        <p class="text-gray-900 ">{{ $inquiry->message }}</p>
                                    </td>



                                    <td class="w-48 px-5 py-3 text-sm">
                                        <p class="text-gray-900 ">
                                            {{ $inquiry->created_at->format('jS M Y') }}
                                        </p>
                                    </td>


                                    {{-- <td>
                                        <div class="flex items-center p-2">
                                            <form method="POST" action="{{ route('admin.inquirys.destroy', $inquiry->id) }}"
                                                id="delete-form-{{ $inquiry->id }}">
                                                @csrf
                                                @method('delete')
                                                <button type="button" onclick="deleteItem({{ $inquiry->id }})"
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
                                    </td> --}}

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
@endsection
