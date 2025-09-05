@extends('frontend.layout.app')
@section('body')

<style>
    .book {
        perspective: 1500px;
    }

    .page {
        backface-visibility: hidden;
        transition: transform 1s ease-in-out;
        transform-style: preserve-3d;
    }

    .page-turn {
        transform: rotateY(-180deg);
    }

    .page-container {
        position: absolute;
        inset: 0;
        transition: transform 1s ease-in-out;
    }

    .page.hidden {
        visibility: hidden;
    }

    .page {
        transform: rotateY(0deg);
    }
</style>

<div class="flex items-center justify-center">
    <!-- Book Container -->
    <div class="book relative w-[800px] h-[700px] mt-5 mb-20">
        <!-- Dynamic Pages -->
        @foreach($brochure as $index => $brochure)
            <div class="page-container page {{ $index > 0 ? 'hidden' : '' }} page{{ $index + 1 }}">
                <img
                    src="{{ asset('uploads/' . $brochure->image) }}"
                    alt="Brochure page {{ $index + 1 }}"
                    class="w-full h-full object-contain"
                />
            </div>
        @endforeach

        <!-- Navigation Buttons -->
        <div class="absolute -bottom-16 left-1/2 transform -translate-x-1/2 flex space-x-6 z-10">
            <button id="prevBtn" class="px-8 py-3 bg-green-500 text-white text-lg rounded-lg hover:bg-white hover:text-green-500 border border-green-500 transition-colors">
                Previous
            </button>
            <button id="nextBtn" class="px-8 py-3 bg-green-500 text-white text-lg rounded-lg hover:bg-white hover:text-green-500 border border-green-500 transition-colors">
                Next
            </button>
        </div>
    </div>
</div>

<script>
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    const pages = document.querySelectorAll('.page');

    let currentPageIndex = 0;

    function showPage(index) {
        pages.forEach((page, i) => {
            if (i !== index) {
                page.classList.add('hidden');
                page.classList.remove('page-turn');
            } else {
                page.classList.remove('hidden');
                page.classList.add('page-turn');
            }
        });

        prevBtn.classList.toggle('hidden', currentPageIndex === 0);
    }

    nextBtn.addEventListener('click', () => {
        if (currentPageIndex < pages.length - 1) {
            currentPageIndex++;
            showPage(currentPageIndex);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentPageIndex > 0) {
            currentPageIndex--;
            showPage(currentPageIndex);
        }
    });

    // Initially show the first page
    showPage(currentPageIndex);
</script>

@endsection
