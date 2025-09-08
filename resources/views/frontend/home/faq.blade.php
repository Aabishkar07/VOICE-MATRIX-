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

                    <!-- Stats Cards -->
                    {{-- <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#050a30] mb-1">24/7</div>
                            <div class="text-sm text-gray-600">Support Available</div>
                        </div>
                    </div> --}}

                    {{-- <div class="absolute -top-6 -left-6 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#ff3131] mb-1">100+</div>
                            <div class="text-sm text-gray-600">Happy Clients</div>
                        </div>
                    </div> --}}
                </div>

                <!-- Right Side - FAQ Accordion -->
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full px-8 py-6 text-left flex items-center justify-between focus:outline-none group-hover:bg-gray-50 transition-colors duration-300" onclick="toggleFAQ(this)">
                            <h3 class="text-xl font-semibold text-[#050a30] pr-4">What services do you offer?</h3>
                            <div class="flex-shrink-0 w-8 h-8 bg-[#ff3131] rounded-full flex items-center justify-center transform transition-transform duration-300">
                                <svg class="w-5 h-5 text-white transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content hidden px-8 pb-6">
                            <div class="border-t border-gray-100 pt-6">
                                <p class="text-gray-600 leading-relaxed">
                                    We offer a comprehensive range of digital services including web development, mobile app development,
                                    digital marketing, SEO optimization, and custom software solutions. Our team specializes in creating
                                    innovative solutions tailored to your business needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full px-8 py-6 text-left flex items-center justify-between focus:outline-none group-hover:bg-gray-50 transition-colors duration-300" onclick="toggleFAQ(this)">
                            <h3 class="text-xl font-semibold text-[#050a30] pr-4">How long does a typical project take?</h3>
                            <div class="flex-shrink-0 w-8 h-8 bg-[#ff3131] rounded-full flex items-center justify-center transform transition-transform duration-300">
                                <svg class="w-5 h-5 text-white transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content hidden px-8 pb-6">
                            <div class="border-t border-gray-100 pt-6">
                                <p class="text-gray-600 leading-relaxed">
                                    Project timelines vary depending on complexity and scope. A simple website typically takes 2-4 weeks,
                                    while complex web applications can take 2-6 months. We provide detailed timelines during our initial
                                    consultation and keep you updated throughout the development process.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full px-8 py-6 text-left flex items-center justify-between focus:outline-none group-hover:bg-gray-50 transition-colors duration-300" onclick="toggleFAQ(this)">
                            <h3 class="text-xl font-semibold text-[#050a30] pr-4">Do you provide ongoing support and maintenance?</h3>
                            <div class="flex-shrink-0 w-8 h-8 bg-[#ff3131] rounded-full flex items-center justify-center transform transition-transform duration-300">
                                <svg class="w-5 h-5 text-white transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content hidden px-8 pb-6">
                            <div class="border-t border-gray-100 pt-6">
                                <p class="text-gray-600 leading-relaxed">
                                    Yes, we offer comprehensive support and maintenance packages. This includes regular updates,
                                    security monitoring, performance optimization, and technical support. We believe in building
                                    long-term partnerships with our clients to ensure their continued success.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full px-8 py-6 text-left flex items-center justify-between focus:outline-none group-hover:bg-gray-50 transition-colors duration-300" onclick="toggleFAQ(this)">
                            <h3 class="text-xl font-semibold text-[#050a30] pr-4">What is your pricing structure?</h3>
                            <div class="flex-shrink-0 w-8 h-8 bg-[#ff3131] rounded-full flex items-center justify-center transform transition-transform duration-300">
                                <svg class="w-5 h-5 text-white transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content hidden px-8 pb-6">
                            <div class="border-t border-gray-100 pt-6">
                                <p class="text-gray-600 leading-relaxed">
                                    Our pricing is project-based and depends on the scope, complexity, and timeline of your requirements.
                                    We offer competitive rates and flexible payment options. Contact us for a free consultation and
                                    detailed quote tailored to your specific needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                        <button class="faq-toggle w-full px-8 py-6 text-left flex items-center justify-between focus:outline-none group-hover:bg-gray-50 transition-colors duration-300" onclick="toggleFAQ(this)">
                            <h3 class="text-xl font-semibold text-[#050a30] pr-4">Can you work with existing systems and technologies?</h3>
                            <div class="flex-shrink-0 w-8 h-8 bg-[#ff3131] rounded-full flex items-center justify-center transform transition-transform duration-300">
                                <svg class="w-5 h-5 text-white transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content hidden px-8 pb-6">
                            <div class="border-t border-gray-100 pt-6">
                                <p class="text-gray-600 leading-relaxed">
                                    Absolutely! We have extensive experience integrating with existing systems, databases, and third-party
                                    APIs. Our team can work with various technologies and platforms to enhance your current infrastructure
                                    while ensuring seamless compatibility and minimal disruption to your operations.
                                </p>
                            </div>
                        </div>
                    </div>
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
