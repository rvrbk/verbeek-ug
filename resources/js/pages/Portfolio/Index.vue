<template>
    <div class="bg-slate-50 dark:bg-slate-800 py-20">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-800 dark:text-white mb-4">
                    My Portfolio
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                    See how I've helped Ugandan businesses and clients worldwide transform their operations 
                    with custom software solutions.
                </p>
            </div>

            <!-- Featured Projects -->
            <div class="space-y-12">
                
                <!-- Project 1: Warehouse Management System -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="grid lg:grid-cols-2">
                        <!-- Project Image -->
                        <div class="h-80 lg:h-auto bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center p-8">
                            <div class="bg-white/90 dark:bg-slate-800/90 rounded-xl p-6 w-full max-w-md">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Warehouse Dashboard</h3>
                                    <div class="flex space-x-2">
                                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="bg-blue-100 dark:bg-blue-900/30 rounded p-3">
                                        <div class="text-2xl font-bold text-blue-800 dark:text-blue-400">1,247</div>
                                        <div class="text-xs text-blue-500 dark:text-blue-300">Total Items</div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-gray-100 dark:bg-gray-600 rounded p-2">
                                            <div class="text-sm font-medium text-gray-700 dark:text-slate-300">Maize</div>
                                            <div class="text-xs text-slate-500 dark:text-slate-400">520 bags</div>
                                        </div>
                                        <div class="bg-gray-100 dark:bg-gray-600 rounded p-2">
                                            <div class="text-sm font-medium text-gray-700 dark:text-slate-300">Beans</div>
                                            <div class="text-xs text-slate-500 dark:text-slate-400">380 bags</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Details -->
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <div class="mb-4">
                                <span class="inline-block bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-4 py-1 rounded-full text-sm font-medium mb-4">
                                    Warehouse Management
                                </span>
                                <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-2">
                                    Warehouse Management System for Ugandan Farmers
                                </h2>
                                <p class="text-slate-500 dark:text-slate-400">
                                    Laravel • Vue.js • Sanctum • Mobile-Responsive
                                </p>
                            </div>
                            
                            <div class="space-y-4 mb-8">
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Problem
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7">
                                        Small farmers in Uganda struggle to track inventory and storage locations, 
                                        leading to losses, waste, and missed sales opportunities. Manual tracking is error-prone and time-consuming.
                                    </p>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Solution
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7 mb-4">
                                        Built a custom Laravel + Vue.js Warehouse Management System with:
                                    </p>
                                    <ul class="space-y-2 pl-7">
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Real-time inventory tracking across all locations
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Multi-location support for farms with multiple storage sites
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Mobile-friendly interface optimized for field workers
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Automated alerts for low stock and expiration dates
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Comprehensive reporting and analytics
                                        </li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Result
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7">
                                        <span class="font-bold text-blue-800 dark:text-blue-400 text-xl">Reduced inventory loss by 30%</span> for pilot users in Uganda. 
                                        Farmers can now make data-driven decisions and optimize their storage capacity.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/portfolio/warehouse-management" 
                                    class="inline-flex items-center justify-center bg-blue-800 hover:bg-blue-900 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    </svg>
                                    View Full Case Study
                                </router-link>
                                <router-link 
                                    to="/contact?service=warehouse" 
                                    class="inline-flex items-center justify-center border-2 border-blue-600 dark:border-blue-400 text-blue-800 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Want a Similar System?
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Real Estate Platform -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="grid lg:grid-cols-2">
                        <!-- Project Image -->
                        <div class="h-80 lg:h-auto bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center p-8">
                            <div class="bg-white/90 dark:bg-slate-800/90 rounded-xl p-6 w-full max-w-md">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Property Listing</h3>
                                    <span class="bg-green-600 text-white px-3 py-1 rounded-full text-xs">For Sale</span>
                                </div>
                                <div class="relative bg-gray-200 dark:bg-gray-600 rounded-lg h-40 mb-4 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <div class="absolute top-2 right-2 bg-white dark:bg-slate-700 rounded px-2 py-1">
                                        <span class="text-xs font-bold text-slate-800 dark:text-white">UGX 500M</span>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <p class="text-sm font-medium text-slate-800 dark:text-white">Modern 4-Bedroom Villa in Kololo</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Kampala • 350 sqm • 4 beds • 3 baths</p>
                                    <div class="flex justify-between text-xs">
                                        <span class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 px-2 py-1 rounded">Verified</span>
                                        <span class="text-slate-500 dark:text-slate-400">2 weeks ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Details -->
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <div class="mb-4">
                                <span class="inline-block bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 px-4 py-1 rounded-full text-sm font-medium mb-4">
                                    Real Estate
                                </span>
                                <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-2">
                                    Funda-Inspired Real Estate Platform
                                </h2>
                                <p class="text-slate-500 dark:text-slate-400">
                                    Vue.js • Laravel • Inertia.js • API Integration
                                </p>
                            </div>
                            
                            <div class="space-y-4 mb-8">
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Problem
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7">
                                        Real estate agents in Uganda were spending 10+ hours per week managing listings manually 
                                        using spreadsheets and paper. They needed a modern, efficient way to showcase properties and 
                                        connect with potential buyers.
                                    </p>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Solution
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7 mb-4">
                                        Developed a Funda-inspired real estate platform with:
                                    </p>
                                    <ul class="space-y-2 pl-7">
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Beautiful property listings with high-quality image galleries
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Advanced search and filtering for buyers
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Agent dashboard for managing listings and leads
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Contact forms and inquiry management
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Mobile-responsive design for agents and buyers on the go
                                        </li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Result
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7">
                                        <span class="font-bold text-green-700 dark:text-green-400 text-xl">40% increase in property inquiries</span> and 
                                        <span class="font-bold text-green-700 dark:text-green-400">60% reduction in time spent on manual tasks</span>. 
                                        Agents can now focus on closing deals rather than managing spreadsheets.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/portfolio/real-estate-platform" 
                                    class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    </svg>
                                    View Full Case Study
                                </router-link>
                                <router-link 
                                    to="/contact?service=real-estate" 
                                    class="inline-flex items-center justify-center border-2 border-green-600 dark:border-green-400 text-green-700 dark:text-green-400 hover:bg-green-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Want a Similar Platform?
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3: API Integration Project -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="grid lg:grid-cols-2">
                        <!-- Project Image -->
                        <div class="h-80 lg:h-auto bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center p-8">
                            <div class="bg-white/90 dark:bg-slate-800/90 rounded-xl p-6 w-full max-w-md">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">System Integration</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="grid grid-cols-3 gap-2">
                                        <div class="bg-purple-100 dark:bg-purple-900/30 rounded p-2 text-center">
                                            <svg class="w-6 h-6 text-purple-700 dark:text-purple-400 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                            </svg>
                                            <div class="text-xs text-purple-700 dark:text-purple-400 font-medium">Database</div>
                                        </div>
                                        <div class="bg-purple-100 dark:bg-purple-900/30 rounded p-2 text-center">
                                            <svg class="w-6 h-6 text-purple-700 dark:text-purple-400 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                            <div class="text-xs text-purple-700 dark:text-purple-400 font-medium">Legacy</div>
                                        </div>
                                        <div class="bg-purple-100 dark:bg-purple-900/30 rounded p-2 text-center">
                                            <svg class="w-6 h-6 text-purple-700 dark:text-purple-400 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                            </svg>
                                            <div class="text-xs text-purple-700 dark:text-purple-400 font-medium">Cloud</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <div class="flex space-x-2">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                                            <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse" style="animation-delay: 0.2s"></div>
                                            <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse" style="animation-delay: 0.4s"></div>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 dark:bg-green-900/30 rounded p-2 text-center">
                                        <div class="text-sm font-bold text-green-700 dark:text-green-400">Connected!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Details -->
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <div class="mb-4">
                                <span class="inline-block bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 px-4 py-1 rounded-full text-sm font-medium mb-4">
                                    API Integration
                                </span>
                                <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-2">
                                    Legacy System Integration for Manufacturing Business
                                </h2>
                                <p class="text-slate-500 dark:text-slate-400">
                                    Laravel • RESTful API • JWT Authentication • Webhooks
                                </p>
                            </div>
                            
                            <div class="space-y-4 mb-8">
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Problem
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7">
                                        A manufacturing business in Uganda was using a 15-year-old legacy system that couldn't 
                                        communicate with their new inventory management software. Data was being manually 
                                        entered in both systems, causing errors and wasting time.
                                    </p>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Solution
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7 mb-4">
                                        Built a custom RESTful API that acts as a bridge between the old and new systems:
                                    </p>
                                    <ul class="space-y-2 pl-7">
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Created API endpoints to extract data from the legacy database
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Implemented secure authentication with JWT tokens
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Set up webhooks for real-time data synchronization
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Developed comprehensive documentation for client's IT team
                                        </li>
                                        <li class="flex items-center text-slate-600 dark:text-slate-300">
                                            <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Provided ongoing support and monitoring
                                        </li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2 flex items-center">
                                        <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Result
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-300 pl-7">
                                        <span class="font-bold text-purple-700 dark:text-purple-400 text-xl">15+ hours saved per week</span> on manual data entry. 
                                        The integration eliminated duplicate work and improved data accuracy by <span class="font-bold text-purple-700 dark:text-purple-400">95%</span>. 
                                        The client can now focus on growing their business instead of managing data.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <router-link 
                                    to="/portfolio/api-integration" 
                                    class="inline-flex items-center justify-center bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    </svg>
                                    View Full Case Study
                                </router-link>
                                <router-link 
                                    to="/contact?service=api" 
                                    class="inline-flex items-center justify-center border-2 border-purple-600 dark:border-purple-400 text-purple-700 dark:text-purple-400 hover:bg-purple-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Need Integration Help?
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 text-center">
                <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-4">
                    Have a Project in Mind?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-8 max-w-2xl mx-auto">
                    I can build a custom solution for your specific needs. 
                    Whether it's a warehouse system, real estate platform, or custom integration, 
                    let's discuss how I can help.
                </p>
                <router-link 
                    to="/contact" 
                    class="inline-flex items-center justify-center bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-4 rounded-lg transition-colors text-lg"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Start Your Project
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted } from 'vue'

export default {
    name: 'Portfolio',
    setup() {
        onMounted(() => {
            // Any on-mount logic
        })
        
        return {
        }
    }
}
</script>

<style scoped>
@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
</style>
