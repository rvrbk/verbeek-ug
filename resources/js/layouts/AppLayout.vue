<template>
    <div class="min-h-screen flex flex-col bg-white dark:bg-black">
        <!-- Header -->
        <header class="bg-white/90 dark:bg-black/90 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-200 dark:border-gray-800">
            <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
                <!-- Logo -->
                <router-link to="/" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-600 to-yellow-700 rounded-xl flex items-center justify-center shadow-lg shadow-yellow-700/25">
                        <span class="text-white font-bold text-2xl">RV</span>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-gray-800 dark:text-white block">Rik Verbeek</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400 -mt-1 block leading-none">Software Developer</span>
                    </div>
                </router-link>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <router-link 
                        to="/" 
                        class="text-gray-600 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-400 transition-all duration-150 px-3 py-2 rounded-md hover:bg-yellow-50 dark:hover:bg-gray-800/50 text-sm"
                        active-class="text-yellow-700 dark:text-yellow-400 bg-yellow-50 dark:bg-gray-800/50"
                    >
                        Home
                    </router-link>
                    <router-link 
                        to="/services" 
                        class="text-gray-600 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-400 transition-all duration-150 px-3 py-2 rounded-md hover:bg-yellow-50 dark:hover:bg-gray-800/50 text-sm"
                        active-class="text-yellow-700 dark:text-yellow-400 bg-yellow-50 dark:bg-gray-800/50"
                    >
                        Services
                    </router-link>
                    <router-link 
                        to="/portfolio" 
                        class="text-gray-600 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-400 transition-all duration-150 px-3 py-2 rounded-md hover:bg-yellow-50 dark:hover:bg-gray-800/50 text-sm"
                        active-class="text-yellow-700 dark:text-yellow-400 bg-yellow-50 dark:bg-gray-800/50"
                    >
                        Portfolio
                    </router-link>
                    <router-link 
                        to="/about" 
                        class="text-gray-600 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-400 transition-all duration-150 px-3 py-2 rounded-md hover:bg-yellow-50 dark:hover:bg-gray-800/50 text-sm"
                        active-class="text-yellow-700 dark:text-yellow-400 bg-yellow-50 dark:bg-gray-800/50"
                    >
                        About
                    </router-link>
                    <router-link 
                        to="/blog" 
                        class="text-gray-600 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-400 transition-all duration-150 px-3 py-2 rounded-md hover:bg-yellow-50 dark:hover:bg-gray-800/50 text-sm"
                        active-class="text-yellow-700 dark:text-yellow-400 bg-yellow-50 dark:bg-gray-800/50"
                    >
                        Blog
                    </router-link>
                    <router-link 
                        to="/contact" 
                        class="btn-primary ml-2"
                    >
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Get a Free Consultation
                    </router-link>
                </div>
                
                <!-- Mobile menu button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="lg:hidden p-2 text-slate-600 dark:text-slate-300 hover:bg-blue-50 dark:hover:bg-slate-800/50 rounded-md transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </nav>
            
            <!-- Mobile Navigation -->
            <div 
                v-if="mobileMenuOpen" 
                class="lg:hidden bg-white/95 dark:bg-slate-950/95 backdrop-blur-xl border-t border-slate-200 dark:border-slate-800"
            >
                <div class="px-4 py-3 space-y-1">
                    <router-link 
                        to="/" 
                        @click="mobileMenuOpen = false"
                        class="block text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 py-2 px-3 rounded-md hover:bg-blue-50 dark:hover:bg-slate-800/50 transition-colors text-sm"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </router-link>
                    <router-link 
                        to="/services" 
                        @click="mobileMenuOpen = false"
                        class="block text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 py-2 px-3 rounded-md hover:bg-blue-50 dark:hover:bg-slate-800/50 transition-colors text-sm"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Services
                    </router-link>
                    <router-link 
                        to="/portfolio" 
                        @click="mobileMenuOpen = false"
                        class="block text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 py-2 px-3 rounded-md hover:bg-blue-50 dark:hover:bg-slate-800/50 transition-colors text-sm"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Portfolio
                    </router-link>
                    <router-link 
                        to="/about" 
                        @click="mobileMenuOpen = false"
                        class="block text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 py-2 px-3 rounded-md hover:bg-blue-50 dark:hover:bg-slate-800/50 transition-colors text-sm"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        About
                    </router-link>
                    <router-link 
                        to="/blog" 
                        @click="mobileMenuOpen = false"
                        class="block text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 py-2 px-3 rounded-md hover:bg-blue-50 dark:hover:bg-slate-800/50 transition-colors text-sm"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        Blog
                    </router-link>
                    <router-link 
                        to="/contact" 
                        @click="mobileMenuOpen = false"
                        class="block btn-primary w-full mt-3"
                    >
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Get a Free Consultation
                    </router-link>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="flex-grow">
            <slot />
        </main>
        
        <!-- Footer -->
        <footer class="bg-black dark:bg-black text-gray-400 py-12">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- About -->
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-10 h-10 bg-gradient-to-br from-yellow-600 to-yellow-700 rounded-lg flex items-center justify-center shadow-lg shadow-yellow-700/25">
                                <span class="text-white font-bold text-lg">RV</span>
                            </div>
                            <span class="text-lg font-bold text-white">Rik Verbeek</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed mb-4">
                            I build tailored software to help small businesses in Uganda grow. 
                            From warehouse management to real estate platforms, I turn your challenges into digital solutions.
                        </p>
                        <div class="flex space-x-3">
                            <a href="https://linkedin.com/in/rikverbeek" target="_blank" class="text-gray-400 hover:text-yellow-400 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="https://github.com/rvrbk" target="_blank" class="text-gray-400 hover:text-yellow-400 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.608 1.647.242 2.717.116 3.177.88 1.008 1.241 2.381 1.241 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-white font-semibold text-sm mb-4 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Quick Links
                        </h3>
                        <ul class="space-y-2">
                            <li>
                                <router-link to="/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center group text-sm">
                                    <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Home
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/services" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center group text-sm">
                                    <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Services
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/portfolio" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center group text-sm">
                                    <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Portfolio
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/about" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center group text-sm">
                                    <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    About
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/blog" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center group text-sm">
                                    <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                    Blog
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/contact" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center group text-sm">
                                    <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Contact
                                </router-link>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Services -->
                    <div>
                        <h3 class="text-white font-semibold text-sm mb-4 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Services
                        </h3>
                        <ul class="space-y-2">
                            <li class="text-slate-400 hover:text-blue-400 transition-colors flex items-center cursor-pointer text-sm">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6" />
                                </svg>
                                Warehouse Management
                            </li>
                            <li class="text-slate-400 hover:text-green-400 transition-colors flex items-center cursor-pointer text-sm">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Real Estate Web Apps
                            </li>
                            <li class="text-slate-400 hover:text-purple-400 transition-colors flex items-center cursor-pointer text-sm">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                                API Integrations
                            </li>
                            <li class="text-slate-400 hover:text-orange-400 transition-colors flex items-center cursor-pointer text-sm">
                                <svg class="w-4 h-4 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Headless Web Apps
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Contact -->
                    <div>
                        <h3 class="text-white font-semibold text-sm mb-4 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Contact
                        </h3>
                        <ul class="space-y-2">
                            <li class="flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a href="mailto:rik@verbeek.ug" class="text-slate-400 hover:text-blue-400 transition-colors text-sm">rik@verbeek.ug</a>
                            </li>
                            <li class="flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <a href="https://wa.me/256" target="_blank" class="text-slate-400 hover:text-blue-400 transition-colors text-sm">+256 (WhatsApp)</a>
                            </li>
                            <li class="flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-slate-400 text-sm">Kampala, Uganda</span>
                            </li>
                        </ul>
                        
                        <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="btn-primary w-full mt-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Book a Free Call
                        </a>
                    </div>
                </div>
                
                <div class="border-t border-slate-800 mt-8 pt-6 text-center text-xs text-slate-500">
                    <p>&copy; {{ new Date().getFullYear() }} Rik Verbeek. All rights reserved.</p>
                    <p class="mt-1 text-slate-400">
                        Laravel & Vue.js Expert | Headless Architectures | Hosted on Hetzner
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import { ref } from 'vue'

export default {
    setup() {
        const mobileMenuOpen = ref(false)
        return { mobileMenuOpen }
    }
}
</script>


