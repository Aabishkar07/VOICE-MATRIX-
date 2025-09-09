<!-- FAQ Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->


    <div class="  mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-[#050a30] rounded-full mb-6">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-[#050a30] mb-4">
                Frequently Asked
                <span class="text-[#ff3131]">Questions</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Find answers to the most common questions about our services and solutions
            </p>
            <div class="w-24 h-1 bg-[#ff3131] mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- FAQ Content with Image and Accordion -->
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left Side - Image -->
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <!-- FAQ Illustration -->
                        <div class="bg-[#050a30] p-12 h-96 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-lg">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold mb-4">Got Questions?</h3>
                                <p class="text-white/90 text-lg leading-relaxed">
                                    We're here to provide clear answers to all your queries about our services and solutions.
                                </p>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute top-4 right-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                        <div class="absolute bottom-4 left-4 w-16 h-16 bg-white/10 rounded-full blur-xl"></div>
                    </div>

                </div>

                <!-- Right Side - FAQ Accordion -->
                <div class="space-y-4">
                    @forelse($faqs as $faq)
                    <!-- FAQ Item {{ $loop->iteration }} -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full px-8 py-6 text-left flex items-center justify-between focus:outline-none group-hover:bg-gray-50 transition-colors duration-300" onclick="toggleFAQ(this)">
                            <h3 class="text-xl font-semibold text-[#050a30] pr-4">{{ $faq->title }}</h3>
                            <div class="flex-shrink-0 w-8 h-8 bg-[#ff3131] rounded-full flex items-center justify-center transform transition-transform duration-300">
                                <svg class="w-5 h-5 text-white transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content hidden px-8 pb-6">
                            <div class="border-t border-gray-100 pt-6">
                                <div class="text-gray-600 leading-relaxed">
                                    {!! $faq->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <!-- No FAQs Available -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden p-8 text-center">
                        <div class="text-gray-500">
                            <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-600 mb-2">No FAQs Available</h3>
                            <p class="text-gray-500">Check back later for frequently asked questions.</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>


    </div>
</section>

<script>
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('svg');
    const isOpen = !content.classList.contains('hidden');

    // Close all other FAQ items
    document.querySelectorAll('.faq-content').forEach(item => {
        if (item !== content) {
            item.classList.add('hidden');
        }
    });

    document.querySelectorAll('.faq-toggle svg').forEach(svg => {
        if (svg !== icon) {
            svg.style.transform = 'rotate(0deg)';
        }
    });

    // Toggle current item
    if (isOpen) {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    } else {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(45deg)';
    }
}
</script>
