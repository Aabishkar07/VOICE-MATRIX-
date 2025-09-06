<div class="relative bg-gradient-to-br from-gray-50 via-white to-red-50 rounded-3xl shadow-2xl hover:shadow-red-500/10 transition-all duration-500 p-0 group overflow-hidden border border-gray-100">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-3">
            <div class="absolute top-0 right-0 w-40 h-40 rounded-full -translate-y-20 translate-x-20" style="background: linear-gradient(135deg, #050a30 0%, #ff3131 100%);"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 rounded-full translate-y-16 -translate-x-16" style="background: linear-gradient(45deg, #ff3131 0%, #050a30 100%);"></div>
        </div>
        
        <!-- Image Section -->
        <div class="relative">
            <div class="w-full h-56 rounded-t-3xl overflow-hidden relative">
                <img src="{{ asset('images/bpo-team.jpg') }}" 
                     alt="Professional BPO Team" 
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(5,10,48,0.7) 0%, rgba(255,49,49,0.3) 100%);"></div>
                
                <!-- Premium Badge -->
                <div class="absolute top-6 right-6 px-4 py-2 rounded-full text-white font-bold text-sm shadow-lg" style="background: linear-gradient(135deg, #ff3131 0%, #050a30 100%);">
                    PREMIUM
                </div>
                
                <!-- Icon Overlay -->
                <div class="absolute bottom-6 left-6 w-16 h-16 bg-white/95 backdrop-blur-sm rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8" style="color: #050a30;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Content Section -->
        <div class="relative p-8">
            <div class="flex items-center mb-4">
                <div class="w-1 h-8 rounded-full mr-4" style="background: linear-gradient(to bottom, #ff3131, #050a30);"></div>
                <h3 class="text-3xl font-bold transition-colors duration-300" style="color: #050a30; font-family: 'Inter', sans-serif;">
                    BPO Services
                </h3>
            </div>
            
            <p class="text-gray-700 leading-relaxed mb-8 text-lg font-medium">
                Transform your business operations with our cutting-edge Business Process Outsourcing solutions designed for maximum efficiency and scalable growth.
            </p>
            
            <!-- Features Grid -->
            <div class="grid grid-cols-2 gap-4 mb-8">
                <div class="bg-gray-50 rounded-xl p-4 border-l-4 hover:bg-gray-100 transition-colors duration-300" style="border-left-color: #ff3131;">
                    <div class="flex items-center mb-2">
                        <div class="w-3 h-3 rounded-full mr-2" style="background: #ff3131;"></div>
                        <span class="font-semibold text-sm" style="color: #050a30;">Cost Reduction</span>
                    </div>
                    <p class="text-xs text-gray-600">Up to 60% savings</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4 border-l-4 hover:bg-gray-100 transition-colors duration-300" style="border-left-color: #050a30;">
                    <div class="flex items-center mb-2">
                        <div class="w-3 h-3 rounded-full mr-2" style="background: #050a30;"></div>
                        <span class="font-semibold text-sm" style="color: #050a30;">24/7 Support</span>
                    </div>
                    <p class="text-xs text-gray-600">Round-the-clock</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4 border-l-4 hover:bg-gray-100 transition-colors duration-300" style="border-left-color: #ff3131;">
                    <div class="flex items-center mb-2">
                        <div class="w-3 h-3 rounded-full mr-2" style="background: #ff3131;"></div>
                        <span class="font-semibold text-sm" style="color: #050a30;">Scalability</span>
                    </div>
                    <p class="text-xs text-gray-600">Flexible growth</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4 border-l-4 hover:bg-gray-100 transition-colors duration-300" style="border-left-color: #050a30;">
                    <div class="flex items-center mb-2">
                        <div class="w-3 h-3 rounded-full mr-2" style="background: #050a30;"></div>
                        <span class="font-semibold text-sm" style="color: #050a30;">Quality Assured</span>
                    </div>
                    <p class="text-xs text-gray-600">ISO certified</p>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex space-x-4">
                <button class="group/btn flex-1 text-white px-6 py-4 rounded-2xl font-bold hover:shadow-2xl transition-all duration-300 flex items-center justify-center space-x-2 relative overflow-hidden" style="background: linear-gradient(135deg, #050a30 0%, #ff3131 100%);">
                    <div class="absolute inset-0 bg-white/10 translate-x-full group-hover/btn:translate-x-0 transition-transform duration-500"></div>
                    <span class="relative z-10">EXPLORE SERVICES</span>
                    <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform duration-300 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
                <button class="px-6 py-4 rounded-2xl font-bold border-2 hover:bg-gray-50 transition-all duration-300 flex items-center justify-center" style="color: #050a30; border-color: #050a30;">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full opacity-20 group-hover:opacity-40 transition-all duration-500 group-hover:scale-125" style="background: #ff3131;"></div>
        <div class="absolute top-1/3 -left-1 w-4 h-4 rounded-full opacity-15 group-hover:opacity-30 transition-all duration-700" style="background: #050a30;"></div>
        <div class="absolute bottom-20 right-4 opacity-10 group-hover:opacity-25 transition-all duration-500">
            <div class="w-8 h-8 border-2 rounded-lg rotate-45 group-hover:rotate-90 transition-transform duration-700" style="border-color: #ff3131;"></div>
        </div>
    </div>
