
    <style>
        /* Custom styles for dropdown animations */
        .dropdown-menu {
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .mobile-menu.active {
            max-height: 1000px;
        }

        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .submenu.active {
            max-height: 500px;
        }
    </style>


    <!-- Main Navbar -->
    <nav class="bg-white shadow-lg relative z-[999]">
        <!-- Top Navbar -->
        <div class="max-w-screen-2xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-lg">VM</span>
                        </div>
                        <div>
                            <span class="text-2xl font-bold text-blue-900">Voice Matrix</span>
                            <div class="text-xs text-gray-600">BPO SERVICES PVT LTD</div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">About Us</a>
                    <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Blog</a>
                    <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Contacts</a>

                    <!-- Grid Icon -->
                    {{-- <button class="p-2 text-gray-700 hover:text-blue-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4z"/>
                        </svg>
                    </button> --}}

                    <!-- CTA Button -->
                    <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full font-medium transition duration-300">
                        LET'S TALK
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden p-2" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Services Navbar -->
        <div class="bg-white border-t border-gray-200">
            <div class="max-w-screen-2xl mx-auto px-4 text-xs">
                <div class="hidden lg:flex items-center space-x-1 py-3">
                    <!-- Data Entry Services Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            DATA ENTRY SERVICES
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Online Data Entry</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Offline Data Entry</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Form Processing</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Document Conversion</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Database Management</a>
                            </div>
                        </div>
                    </div>

                    <!-- Industries Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            INDUSTRIES
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Healthcare</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">E-commerce</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Real Estate</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Finance</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Education</a>
                            </div>
                        </div>
                    </div>

                    <!-- Call Center Services Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            CALL CENTER SERVICES
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Inbound Call Center</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Outbound Call Center</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Customer Support</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Technical Support</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Lead Generation</a>
                            </div>
                        </div>
                    </div>

                    <!-- BPO Services Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            BPO SERVICES
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Back Office Services</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Virtual Assistant</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Content Writing</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Research Services</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Administrative Support</a>
                            </div>
                        </div>
                    </div>

                    <!-- Software Development Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            SOFTWARE DEVELOPMENT
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Web Development</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Mobile App Development</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Custom Software</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">E-commerce Solutions</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">API Development</a>
                            </div>
                        </div>
                    </div>

                    <!-- Digital Marketing Services Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            DIGITAL MARKETING SERVICES
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">SEO Services</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Social Media Marketing</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">PPC Advertising</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Content Marketing</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Email Marketing</a>
                            </div>
                        </div>
                    </div>

                    <!-- Information Technology Dropdown -->
                    <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            INFORMATION TECHNOLOGY
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">IT Support</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Network Management</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Cloud Services</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Cybersecurity</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">System Integration</a>
                            </div>
                        </div>
                    </div>

                    <!-- Knowledge Process Outsourcing Dropdown -->
                    {{-- <div class="dropdown relative">
                        <button class="flex items-center px-4 py-2 text-red-600 hover:bg-gray-50 rounded font-medium">
                            KNOWLEDGE PROCESS OUTSOURCING
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white border border-gray-200 rounded-lg shadow-xl">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Market Research</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Financial Analysis</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Legal Services</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Healthcare Analytics</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Business Intelligence</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu lg:hidden bg-white border-t border-gray-200">
            <div class="px-4 py-2">
                <!-- Mobile Main Menu -->
                <div class="space-y-2 mb-4">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">Home</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">About Us</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">Blog</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-900 font-medium">Contacts</a>

                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full font-medium transition duration-300 mt-4">
                        LET'S TALK
                    </button>
                </div>

                <!-- Mobile Services Menu -->
                <div class="border-t border-gray-200 pt-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Services</h3>

                    <!-- Data Entry Services -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('dataEntry')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            DATA ENTRY SERVICES
                            <svg class="w-4 h-4 transform transition-transform" id="dataEntryIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="dataEntrySubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">Online Data Entry</a>
                            <a href="#" class="block py-1 text-gray-600">Offline Data Entry</a>
                            <a href="#" class="block py-1 text-gray-600">Form Processing</a>
                            <a href="#" class="block py-1 text-gray-600">Document Conversion</a>
                            <a href="#" class="block py-1 text-gray-600">Database Management</a>
                        </div>
                    </div>

                    <!-- Industries -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('industries')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            INDUSTRIES
                            <svg class="w-4 h-4 transform transition-transform" id="industriesIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="industriesSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">Healthcare</a>
                            <a href="#" class="block py-1 text-gray-600">E-commerce</a>
                            <a href="#" class="block py-1 text-gray-600">Real Estate</a>
                            <a href="#" class="block py-1 text-gray-600">Finance</a>
                            <a href="#" class="block py-1 text-gray-600">Education</a>
                        </div>
                    </div>

                    <!-- Call Center Services -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('callCenter')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            CALL CENTER SERVICES
                            <svg class="w-4 h-4 transform transition-transform" id="callCenterIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="callCenterSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">Inbound Call Center</a>
                            <a href="#" class="block py-1 text-gray-600">Outbound Call Center</a>
                            <a href="#" class="block py-1 text-gray-600">Customer Support</a>
                            <a href="#" class="block py-1 text-gray-600">Technical Support</a>
                            <a href="#" class="block py-1 text-gray-600">Lead Generation</a>
                        </div>
                    </div>

                    <!-- BPO Services -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('bpo')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            BPO SERVICES
                            <svg class="w-4 h-4 transform transition-transform" id="bpoIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="bpoSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">Back Office Services</a>
                            <a href="#" class="block py-1 text-gray-600">Virtual Assistant</a>
                            <a href="#" class="block py-1 text-gray-600">Content Writing</a>
                            <a href="#" class="block py-1 text-gray-600">Research Services</a>
                            <a href="#" class="block py-1 text-gray-600">Administrative Support</a>
                        </div>
                    </div>

                    <!-- Software Development -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('software')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            SOFTWARE DEVELOPMENT
                            <svg class="w-4 h-4 transform transition-transform" id="softwareIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="softwareSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">Web Development</a>
                            <a href="#" class="block py-1 text-gray-600">Mobile App Development</a>
                            <a href="#" class="block py-1 text-gray-600">Custom Software</a>
                            <a href="#" class="block py-1 text-gray-600">E-commerce Solutions</a>
                            <a href="#" class="block py-1 text-gray-600">API Development</a>
                        </div>
                    </div>

                    <!-- Digital Marketing -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('marketing')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            DIGITAL MARKETING SERVICES
                            <svg class="w-4 h-4 transform transition-transform" id="marketingIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="marketingSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">SEO Services</a>
                            <a href="#" class="block py-1 text-gray-600">Social Media Marketing</a>
                            <a href="#" class="block py-1 text-gray-600">PPC Advertising</a>
                            <a href="#" class="block py-1 text-gray-600">Content Marketing</a>
                            <a href="#" class="block py-1 text-gray-600">Email Marketing</a>
                        </div>
                    </div>

                    <!-- Information Technology -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('it')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            INFORMATION TECHNOLOGY
                            <svg class="w-4 h-4 transform transition-transform" id="itIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="itSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">IT Support</a>
                            <a href="#" class="block py-1 text-gray-600">Network Management</a>
                            <a href="#" class="block py-1 text-gray-600">Cloud Services</a>
                            <a href="#" class="block py-1 text-gray-600">Cybersecurity</a>
                            <a href="#" class="block py-1 text-gray-600">System Integration</a>
                        </div>
                    </div>

                    <!-- Knowledge Process Outsourcing -->
                    <div class="mb-3">
                        <button onclick="toggleSubmenu('kpo')" class="flex items-center justify-between w-full py-2 text-red-600 font-medium">
                            KNOWLEDGE PROCESS OUTSOURCING
                            <svg class="w-4 h-4 transform transition-transform" id="kpoIcon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="kpoSubmenu" class="submenu ml-4 space-y-2">
                            <a href="#" class="block py-1 text-gray-600">Market Research</a>
                            <a href="#" class="block py-1 text-gray-600">Financial Analysis</a>
                            <a href="#" class="block py-1 text-gray-600">Legal Services</a>
                            <a href="#" class="block py-1 text-gray-600">Healthcare Analytics</a>
                            <a href="#" class="block py-1 text-gray-600">Business Intelligence</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }

        function toggleSubmenu(menuId) {
            const submenu = document.getElementById(menuId + 'Submenu');
            const icon = document.getElementById(menuId + 'Icon');

            submenu.classList.toggle('active');
            icon.classList.toggle('rotate-180');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = event.target.closest('button');

            if (!mobileMenu.contains(event.target) && !menuButton) {
                mobileMenu.classList.remove('active');
            }
        });

        // Close dropdowns when clicking outside (desktop)
        document.addEventListener('click', function(event) {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(function(dropdown) {
                if (!dropdown.contains(event.target)) {
                    const menu = dropdown.querySelector('.dropdown-menu');
                    menu.style.opacity = '0';
                    menu.style.transform = 'translateY(-10px)';
                    menu.style.pointerEvents = 'none';
                }
            });
        });
    </script>
