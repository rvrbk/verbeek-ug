<template>
    <div class="bg-gray-50 dark:bg-gray-800 py-20">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-white mb-4">
                    My Services
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    I solve specific problems for Ugandan businesses with custom software solutions. 
                    Here's how I can help you grow:
                </p>
            </div>

            <!-- Services List -->
            <div class="space-y-12">
                
                <!-- Service 1: Warehouse Management System -->
                <section id="warehouse" class="bg-white dark:bg-gray-700 rounded-2xl shadow-lg p-8 lg:p-12">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="inline-block bg-blue-100 dark:bg-blue-900/30 p-3 rounded-xl mb-4">
                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                                Custom Warehouse Management System
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                                Perfect for small farmers in Uganda who struggle with inventory tracking and storage management.
                            </p>
                            
                            <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Outcome
                                </h3>
                                <p class="text-gray-700 dark:text-gray-300">
                                    Track inventory, reduce waste, and increase profits. 
                                    Our pilot users in Uganda reduced inventory loss by <span class="font-bold text-blue-600 dark:text-blue-400">30%</span>.
                                </p>
                            </div>
                            
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Real-time inventory tracking across all locations</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Multi-location support for farms with multiple storage sites</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Mobile-friendly interface for field workers</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Automated alerts for low stock and expiration dates</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Reporting and analytics to optimize your operations</span>
                                </li>
                            </ul>
                            
                            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/contact?service=warehouse" 
                                    class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Get a Free Consultation
                                </router-link>
                                <router-link 
                                    to="/portfolio/warehouse-management" 
                                    class="inline-flex items-center justify-center border-2 border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    </svg>
                                    See Case Study
                                </router-link>
                            </div>
                        </div>
                        
                        <div class="hidden lg:block">
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 rounded-2xl p-8 h-80 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-24 h-24 text-blue-600 dark:text-blue-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6" />
                                    </svg>
                                    <p class="text-blue-600 dark:text-blue-400 mt-4 font-medium">Warehouse Management</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Service 2: Real Estate Web Apps -->
                <section id="real-estate" class="bg-white dark:bg-gray-700 rounded-2xl shadow-lg p-8 lg:p-12">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="hidden lg:block order-last">
                            <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/30 dark:to-green-800/30 rounded-2xl p-8 h-80 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-24 h-24 text-green-600 dark:text-green-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <p class="text-green-600 dark:text-green-400 mt-4 font-medium">Real Estate Platform</p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="inline-block bg-green-100 dark:bg-green-900/30 p-3 rounded-xl mb-4">
                                <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                                Real Estate Web Apps
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                                Designed for property agents and developers in Uganda who want to list, manage, and sell properties online efficiently.
                            </p>
                            
                            <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                                    <svg class="w-6 h-6 text-green-600 dark:text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Outcome
                                </h3>
                                <p class="text-gray-700 dark:text-gray-300">
                                    Streamline your property management and reach more buyers. 
                                    Clients have seen a <span class="font-bold text-green-600 dark:text-green-400">40% increase in inquiries</span> after launching their custom platform.
                                </p>
                            </div>
                            
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">List and manage unlimited properties with rich details</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">High-quality photos and virtual tours for each listing</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Search and filter functionality for buyers</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Lead management system for agents</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Mobile-responsive design for clients on the go</span>
                                </li>
                            </ul>
                            
                            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/contact?service=real-estate" 
                                    class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Get a Free Consultation
                                </router-link>
                                <router-link 
                                    to="/portfolio/real-estate-platform" 
                                    class="inline-flex items-center justify-center border-2 border-green-600 dark:border-green-400 text-green-600 dark:text-green-400 hover:bg-green-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    </svg>
                                    See Case Study
                                </router-link>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Service 3: API Integrations -->
                <section id="api" class="bg-white dark:bg-gray-700 rounded-2xl shadow-lg p-8 lg:p-12">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="inline-block bg-purple-100 dark:bg-purple-900/30 p-3 rounded-xl mb-4">
                                <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                                API Integrations
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                                For businesses in Uganda with legacy systems that need to connect their tools and workflows seamlessly.
                            </p>
                            
                            <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Outcome
                                </h3>
                                <p class="text-gray-700 dark:text-gray-300">
                                    Eliminate manual data entry and automate your workflows. 
                                    Clients have saved <span class="font-bold text-purple-600 dark:text-purple-400">15+ hours per week</span> on administrative tasks.
                                </p>
                            </div>
                            
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Connect any systems, regardless of age or platform</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Real-time data synchronization between systems</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Secure API development with proper authentication</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Webhook support for real-time notifications</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-purple-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Comprehensive documentation and support</span>
                                </li>
                            </ul>
                            
                            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/contact?service=api" 
                                    class="inline-flex items-center justify-center bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Get a Free Consultation
                                </router-link>
                                <a 
                                    href="#" 
                                    class="inline-flex items-center justify-center border-2 border-purple-600 dark:border-purple-400 text-purple-600 dark:text-purple-400 hover:bg-purple-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                    Learn About APIs
                                </a>
                            </div>
                        </div>
                        
                        <div class="hidden lg:block">
                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/30 dark:to-purple-800/30 rounded-2xl p-8 h-80 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-24 h-24 text-purple-600 dark:text-purple-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                    <p class="text-purple-600 dark:text-purple-400 mt-4 font-medium">API Integrations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Service 4: Headless Web Apps -->
                <section id="headless" class="bg-white dark:bg-gray-700 rounded-2xl shadow-lg p-8 lg:p-12">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="hidden lg:block order-last">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/30 dark:to-orange-800/30 rounded-2xl p-8 h-80 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-24 h-24 text-orange-600 dark:text-orange-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-orange-600 dark:text-orange-400 mt-4 font-medium">Headless Architecture</p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="inline-block bg-orange-100 dark:bg-orange-900/30 p-3 rounded-xl mb-4">
                                <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                                Headless Web Apps
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                                For businesses in Uganda that need fast, secure, and future-proof solutions that can scale with their growth.
                            </p>
                            
                            <div class="bg-orange-50 dark:bg-orange-900/20 rounded-lg p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                                    <svg class="w-6 h-6 text-orange-600 dark:text-orange-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Outcome
                                </h3>
                                <p class="text-gray-700 dark:text-gray-300">
                                    Build applications that grow with your business. 
                                    Headless architecture allows you to <span class="font-bold text-orange-600 dark:text-orange-400">add new frontends without rebuilding</span> your backend.
                                </p>
                            </div>
                            
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Blazing fast performance for better user experience</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Flexibility to use any frontend technology</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Scalable backend that grows with your business</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Easy integration with mobile apps and third-party services</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Enhanced security with modern authentication methods</span>
                                </li>
                            </ul>
                            
                            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/contact?service=headless" 
                                    class="inline-flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Get a Free Consultation
                                </router-link>
                                <a 
                                    href="#" 
                                    class="inline-flex items-center justify-center border-2 border-orange-600 dark:border-orange-400 text-orange-600 dark:text-orange-400 hover:bg-orange-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                    Learn About Headless
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                    Not Sure Which Service You Need?
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                    Let's discuss your business challenges and I'll help you find the perfect solution. 
                    The first consultation is always free with no obligations.
                </p>
                <router-link 
                    to="/contact" 
                    class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-lg transition-colors text-lg"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Schedule a Free Consultation
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'

export default {
    name: 'Services',
    setup() {
        const route = useRoute()
        const activeService = ref(null)
        
        onMounted(() => {
            // Check if we need to scroll to a specific service
            if (route.hash) {
                const element = document.querySelector(route.hash)
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' })
                }
            }
        })
        
        return {
            activeService
        }
    }
}
</script>

<style scoped>
/* Add any custom styles here */
</style>
