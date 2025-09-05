@if ($certificates->count() > 0)
<div class="my-16">
  <div class="px-10 mx-auto mt-5 max-w-screen-2xl">
    <div class="mx-auto text-center">
      <h2 class="text-3xl font-extrabold text-gray-800">Certificates</h2>
    </div>

    <div class="grid grid-cols-1 gap-2 mt-10 md:grid-cols-4">
        {{-- @dd($certificates) --}}
        @foreach ($certificates as $key => $certificate)
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
          <div class="relative">
            @php
                // Get file name
                $filename = $certificate->featured_image;


                // Check if the filename ends with an image extension
                $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
                $pdfExtension = 'pdf';

                // Detect file extension
                $extension = pathinfo($filename, PATHINFO_EXTENSION);

                // If no extension is found, you can add additional checks here (e.g., check if the file is PDF or Image based on content)
                if (!$extension) {
                    $extension = 'pdf'; // You can default to 'pdf' or set a custom logic here
                }
            @endphp

            @if (in_array(strtolower($extension), $imageExtensions))
              <!-- If the file is an image -->

              <img src="{{ asset('uploads/' . $filename) }}" alt="Certificate" class="object-cover w-full h-64">
            @elseif (strtolower($extension) === $pdfExtension)
              <!-- If the file is a PDF -->
           
              <iframe src="{{ asset('uploads/' . $filename) }}" width="100%" height="300px" frameborder="0"></iframe>
            @else
              <!-- Fallback for unsupported file types -->
              <p class="text-center text-gray-500">File type not supported</p>
            @endif

            <div class="absolute top-4 right-4">
              <a href="{{ asset('uploads/' . $filename) }}" target="_blank" class="px-3 py-2 text-white bg-blue-600 rounded-full hover:bg-blue-500">
                Preview
              </a>
            </div>
          </div>
          <div class="p-6">
            <h2 class="text-lg font-semibold text-gray-800">{{ $certificate->title }} </h2>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</div>
@endif
