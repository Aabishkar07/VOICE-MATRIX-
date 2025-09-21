@php
    $setting = getSetting();
@endphp
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Ld9V88rAAAAAIUq8W0hX4_mUdkZg8eWdbEx-nxE"></script>


<!-- Contact Section with White Theme -->
<section id="contact" class=" py-20 relative overflow-hidden bg-white">


    <div class="max-w-screen-2xl mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16 animate-fade-in">
            <div class="inline-block mb-4">
                <span class="text-sm font-semibold tracking-wider uppercase" style="color: #ff3131;">Get In Touch</span>
            </div>
            <h2 class="text-5xl font-bold mb-6 leading-tight" style="color: #050a30;">
                Contact <span style="color: #ff3131;">Our Team</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Ready to transform your business? Let's discuss your BPO requirements and create tailored solutions for
                your success.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Contact Form -->
            <div class="lg:w-1/2 animate-slide-left">
                <div class="contact-form bg-gray-50 rounded-2xl shadow-xl p-8 border border-gray-200">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2" style="color: #050a30;">Send us a Message</h3>
                        <p class="text-gray-600">We'll get back to you within 24 hours</p>
                    </div>

                    <form id="contactForm" method="POST" action="{{ route('updatecontact') }}" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input required type="text" id="name" name="name" value="{{ old('name') }}" placeholder="fullname "
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:border-transparent transition-all duration-300"
                                    style="focus:ring-color: #ff3131;">
                                @error('name')
                                    <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input required type="email" id="email" name="email" value="{{ old('email') }}" placeholder="test@gmail.com"
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:border-transparent transition-all duration-300"
                                    style="focus:ring-color: #ff3131;">
                                @error('email')
                                    <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input required type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+977 123-4567"
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:border-transparent transition-all duration-300"
                                    style="focus:ring-color: #ff3131;">
                                @error('phone')
                                    <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                                <select required id="service" name="service"
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition-all duration-300"
                                    style="focus:ring-color: #ff3131;">
                                    <option value="">Select a Service</option>
                                    <option value="customer-support" {{ old('service') == 'customer-support' ? 'selected' : '' }}>Customer Support</option>
                                    <option value="technical-support" {{ old('service') == 'technical-support' ? 'selected' : '' }}>Technical Support</option>
                                    <option value="finance-accounting" {{ old('service') == 'finance-accounting' ? 'selected' : '' }}>Finance & Accounting</option>
                                    <option value="hr-solutions" {{ old('service') == 'hr-solutions' ? 'selected' : '' }}>HR Solutions</option>
                                    <option value="sales-marketing" {{ old('service') == 'sales-marketing' ? 'selected' : '' }}>Sales & Marketing</option>
                                    <option value="data-management" {{ old('service') == 'data-management' ? 'selected' : '' }}>Data Management</option>
                                </select>
                                @error('service')
                                    <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                        * {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea required id="message" rows="5" placeholder="Tell us about your project requirements..." name="message"
                                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:border-transparent transition-all duration-300 resize-none"
                                style="focus:ring-color: #ff3131;">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-sm text-red-500 invalid-feedback" style="display: block;">
                                    * {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="hidden" name="g-token" id="g-token" value="" />
                        <button id="buttonsubmit" type="button" onclick="onClick()"
                            class="w-full font-semibold py-4 px-8 rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl text-white relative overflow-hidden group"
                            style="background: linear-gradient(135deg, #ff3131 0%, #e02828 100%);">
                            <span class="relative z-10">Send Message</span>
                            <div
                                class="absolute inset-0 bg-white/20 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left">
                            </div>
                        </button>
                    </form>
                    <div id="formMessage" class="mt-4"></div>
                </div>
            </div>

            <script>
                function onClick(e) {
                    const form = document.getElementById("contactForm");
                    const submitBtn = document.getElementById("buttonsubmit");

                    // Trigger browser's built-in HTML5 validation for required fields
                    if (!form.reportValidity()) {
                        return; // If invalid, the browser will show messages and prevent submission
                    }

                    // Prevent double clicks while processing
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-70', 'cursor-not-allowed');

                    grecaptcha.enterprise.ready(async () => {
                        try {
                            const token = await grecaptcha.enterprise.execute('6Ld9V88rAAAAAIUq8W0hX4_mUdkZg8eWdbEx-nxE', {
                                action: 'LOGIN'
                            });

                            document.getElementById("g-token").value = token;
                            form.submit();
                        } catch (err) {
                            // If reCAPTCHA fails, re-enable the button so user can try again
                            submitBtn.disabled = false;
                            submitBtn.classList.remove('opacity-70', 'cursor-not-allowed');
                            console.error('reCAPTCHA error', err);
                        }
                    });
                }
            </script>

            <!-- Contact Information -->
            <div class="lg:w-1/2 animate-slide-right">
                <div class="space-y-6">
                    <!-- Contact Info Header -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2" style="color: #050a30;">Get in Touch</h3>
                        <p class="text-gray-600">Multiple ways to reach our expert team</p>
                    </div>

                    <!-- Contact Items -->
                    <div
                        class="contact-item bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-all duration-300 group">
                        <div class="flex items-start">
                            <div class="mr-4 p-3 rounded-lg group-hover:scale-110 transition-transform duration-300"
                                style="background: linear-gradient(135deg, #ff3131 0%, #e02828 100%);">
                                <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2" style="color: #050a30;">Address</h4>
                                <p class="text-gray-700 leading-relaxed">123 Business {{ $setting->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="contact-item bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-all duration-300 group">
                        <div class="flex items-start">
                            <div class="mr-4 p-3 rounded-lg group-hover:scale-110 transition-transform duration-300"
                                style="background: linear-gradient(135deg, #ff3131 0%, #e02828 100%);">
                                <i class="fas fa-phone text-2xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2" style="color: #050a30;">Phone</h4>
                                <p class="text-gray-700">{{ $setting->contact_number }}</p>
                                <p class="text-sm text-gray-500 mt-1">24/7 Support Available</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="contact-item bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-all duration-300 group">
                        <div class="flex items-start">
                            <div class="mr-4 p-3 rounded-lg group-hover:scale-110 transition-transform duration-300"
                                style="background: linear-gradient(135deg, #ff3131 0%, #e02828 100%);">
                                <i class="fas fa-envelope text-2xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2" style="color: #050a30;">Email</h4>
                                <p class="text-gray-700">{{ $setting->email }}</p>
                                <p class="text-sm text-gray-500 mt-1">We respond within 2 hours</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>


</section>
