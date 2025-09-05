@extends('frontend.layout.app')
@section('body')
@include("admin.include.toastmessage")
    <section class="relative z-10 overflow-hidden bg-white light py-14 md:py-24 text-zinc-900">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col gap-6 lg:flex-row">
                <div class="w-full lg:w-1/2">
                    <div class="p-4 bg-gray-100 rounded-xl sm:p-6 lg:p-12 lg:mr-6">
                        <div class="mb-4 text-center md:p-6">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt=""
                                class="w-full h-auto max-w-full" />
                        </div>


                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 lg:mb-12">
                        <h1 class="mb-4 text-2xl font-medium leading-none md:text-4xl">
                            {{ $product->title }}
                        </h1>

                        <p class="my-4 opacity-70 lg:mr-56 xl:mr-80 ">
                            {!! $product->description !!}
                        </p>
                    </div>


                    <!-- buttons -->
                    <div class="flex flex-col w-full gap-3 my-7">
                        <div class="flex items-center w-full max-w-lg gap-4">
                            <button id="openModalBtn"
                                class="bg-gray-600 border border-gray-600 text-white text-sm rounded uppercase hover:bg-opacity-90 px-10 py-2.5 h-10 md:px-12 w-1/2">
                                Product Enquire
                            </button>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Modal Container -->
    <div id="customModal" class="fixed z-[999] inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative max-h-[80vh] overflow-y-auto">
            <!-- Close Button -->


            <!-- Modal Header -->
            <h2 class="mb-4 text-2xl font-semibold">Inquiry For <span
                    class="text-gray-800 underline">{{ $product->title }}</span> </h2>

            <!-- Inquiry Form -->
            <form id="inquiryForm" method="post" action="{{ route('submitInquery', $product->id) }}" class="space-y-4">
                <!-- Name -->
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Your Name" required />
                    @error('name')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Your Email" required />
                    @error('email')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phonenumber" value="{{ old('phonenumber') }}"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Your Phone Number" required />
                    @error('phonenumber')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Subject -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Inquiry Subject" required />
                    @error('subject')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Your Message" rows="4" required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
                            * {{ $message }}
                        </div>
                    @enderror
                </div>



                <!-- Modal Footer -->
                <button id="confirmBtn" type="submit" class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600">
                    Confirm
                </button>

                <button id="closeModalBtn" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                    Close
                </button>
            </form>
        </div>
    </div>


    <script>
        // Get elements
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const modal = document.getElementById('customModal');

        // Open modal function
        const openModal = () => {
            modal.classList.remove('hidden');
        };

        // Close modal function
        const closeModal = () => {
            modal.classList.add('hidden');
        };

        // Event listeners
        openModalBtn.addEventListener('click', openModal);
        closeModalBtn.addEventListener('click', closeModal);

        // Close modal when clicking outside the content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    </script>
@endsection
