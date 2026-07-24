<template>
    <div>
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-black dark:via-gray-900 dark:to-black py-16 lg:py-24 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <!-- Hero Content -->
                    <div class="text-center lg:text-left animate-fade-in-up">
                        <div class="inline-flex items-center bg-yellow-100 dark:bg-yellow-950/30 text-yellow-800 dark:text-yellow-400 px-3 py-1 rounded-full text-xs font-medium mb-4">
                            <span class="w-1.5 h-1.5 bg-yellow-600 rounded-full mr-2 animate-pulse"></span>
                            Available for Projects
                        </div>
                        
                        <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-gray-800 dark:text-white leading-tight mb-4 animate-fade-in-up animation-delay-100">
                            Custom Web Solutions for 
                            <span class="text-yellow-700 dark:text-yellow-400">Ugandan Businesses</span>
                        </h1>
                        
                        <p class="text-lg lg:text-xl text-gray-600 dark:text-gray-300 mb-6 leading-relaxed animate-fade-in-up animation-delay-200">
                            I build tailored software to help small businesses in Uganda grow. 
                            From warehouse management to real estate platforms, I turn your challenges into digital solutions.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start animate-fade-in-up animation-delay-300">
                            <router-link to="/contact" class="btn-primary">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Get a Free Consultation
                            </router-link>
                            
                            <router-link to="/portfolio" class="btn-secondary">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                View My Work
                            </router-link>
                        </div>
                        
                        <!-- Stats -->
                        <div class="mt-8 grid grid-cols-3 gap-2 animate-fade-in-up animation-delay-400">
                            <div class="text-center p-2 bg-white dark:bg-slate-900 rounded-lg shadow-md border border-slate-100 dark:border-slate-800">
                                <div class="text-2xl font-bold text-blue-900 dark:text-blue-400">10+</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 mt-1">Projects Completed</div>
                            </div>
                            <div class="text-center p-2 bg-white dark:bg-slate-900 rounded-lg shadow-md border border-slate-100 dark:border-slate-800">
                                <div class="text-2xl font-bold text-blue-900 dark:text-blue-400">5+</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 mt-1">Happy Clients</div>
                            </div>
                            <div class="text-center p-2 bg-white dark:bg-slate-900 rounded-lg shadow-md border border-slate-100 dark:border-slate-800">
                                <div class="text-2xl font-bold text-blue-900 dark:text-blue-400">3+</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 mt-1">Years Experience</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hero Illustration -->
                    <div class="hidden lg:block animate-fade-in-up animation-delay-500">
                        <div class="relative">
                            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-xl p-6 h-80 flex items-center justify-center border border-gray-100 dark:border-gray-800">
                                <div class="text-center">
                                    <div class="w-32 h-32 bg-gradient-to-br from-yellow-50 to-yellow-100 dark:from-yellow-950/30 dark:to-yellow-900/30 rounded-full mx-auto mb-3 flex items-center justify-center border-2 border-yellow-200 dark:border-yellow-800">
                                        <svg class="w-16 h-16 text-yellow-800 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.064-.952L12 .5l3.356 7.34l8.064.952-5.935 5.488 1.575 7.928z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Digital Solutions</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mt-1 text-xs">For Ugandan Businesses</p>
                                </div>
                            </div>
                            
                            <!-- Tech Badges -->
                            <div class="absolute -top-6 -right-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg p-3 border border-gray-100 dark:border-gray-800">
                                <div class="flex flex-col space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-yellow-700 to-yellow-900 rounded-md flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18" />
                                            </svg>
                                        </div>
                                        <span class="font-semibold text-gray-700 dark:text-gray-300 text-sm">Laravel</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-yellow-600 to-yellow-800 rounded-md flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                            </svg>
                                        </div>
                                        <span class="font-semibold text-gray-700 dark:text-gray-300 text-sm">Vue.js</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-20 text-blue-600 dark:text-slate-800">
                    <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor" opacity="0.2"/>
                </svg>
            </div>
        </section>

        <!-- Services Preview Section -->
        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <span class="inline-block bg-yellow-100 dark:bg-yellow-950/30 text-yellow-700 dark:text-yellow-400 px-3 py-1 rounded-full text-xs font-medium mb-3">
                        What I Offer
                    </span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 dark:text-white mb-3">
                        How I Can Help Your Business
                    </h2>
                    <p class="text-base text-gray-600 dark:text-gray-300">
                        From warehouse management for farmers to real estate platforms for agents, 
                        I build custom software solutions tailored to Ugandan businesses.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Service Card 1 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-gray-800">
                        <div class="icon-container bg-yellow-100 dark:bg-yellow-950/30 mb-3">
                            <svg class="w-6 h-6 text-yellow-700 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Warehouse Management</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-xs mb-3">
                            Track inventory, reduce waste, and increase profits for small farmers in Uganda.
                        </p>
                        <router-link to="/services#warehouse" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </router-link>
                    </div>
                    
                    <!-- Service Card 2 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-gray-800">
                        <div class="icon-container bg-yellow-100 dark:bg-yellow-950/30 mb-3">
                            <svg class="w-6 h-6 text-yellow-700 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Real Estate Apps</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-xs mb-3">
                            List, manage, and sell properties online with custom real estate platforms.
                        </p>
                        <router-link to="/services#real-estate" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </router-link>
                    </div>
                    
                    <!-- Service Card 3 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-gray-800">
                        <div class="icon-container bg-yellow-100 dark:bg-yellow-950/30 mb-3">
                            <svg class="w-6 h-6 text-yellow-700 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">API Integrations</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-xs mb-3">
                            Connect your legacy systems and tools seamlessly for better efficiency.
                        </p>
                        <router-link to="/services#api" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </router-link>
                    </div>
                    
                    <!-- Service Card 4 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-gray-800">
                        <div class="icon-container bg-yellow-100 dark:bg-yellow-950/30 mb-3">
                            <svg class="w-6 h-6 text-yellow-700 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Headless Web Apps</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-xs mb-3">
                            Fast, secure, and future-proof solutions that scale with your business.
                        </p>
                        <router-link to="/services#headless" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Preview Section -->
        <section class="py-16 bg-gray-50 dark:bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <span class="inline-block bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 px-3 py-1 rounded-full text-xs font-medium mb-3">
                        Featured Projects
                    </span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 dark:text-white mb-3">
                        My Work
                    </h2>
                    <p class="text-base text-gray-600 dark:text-gray-300">
                        See how I've helped Ugandan businesses transform their operations with custom software solutions.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Project 1 -->
                    <div class="card dark:card-dark overflow-hidden border border-gray-100 dark:border-gray-600">
                        <div class="h-64 bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center">
                            <svg class="w-24 h-24 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6" />
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Warehouse Management System</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                                Custom Laravel + Vue.js system for Ugandan farmers to track inventory across multiple locations.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">Laravel</span>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">Vue.js</span>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">Sanctum</span>
                            </div>
                            <router-link to="/portfolio/warehouse-management" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                                View Project
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </router-link>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="card dark:card-dark overflow-hidden border border-gray-100 dark:border-gray-600">
                        <div class="h-64 bg-gradient-to-br from-yellow-700 to-yellow-900 flex items-center justify-center">
                            <svg class="w-24 h-24 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Real Estate Platform</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                                Funda-inspired property listing and management platform for Ugandan real estate agents.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">Vue.js</span>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">Laravel</span>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">Inertia.js</span>
                            </div>
                            <router-link to="/portfolio/real-estate-platform" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                                View Project
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-gradient-to-r from-yellow-700 to-yellow-900 dark:from-yellow-900 dark:to-black">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4 animate-fade-in-up">
                    Ready to Transform Your Business?
                </h2>
                <p class="text-xl text-yellow-100 mb-8 animate-fade-in-up animation-delay-100">
                    Let's discuss how custom software can solve your unique challenges. 
                    First consultation is always free.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-200">
                    <router-link to="/contact" class="btn-primary-lg bg-black hover:bg-gray-900 text-white hover:text-white">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Get a Free Consultation
                    </router-link>
                    <router-link to="/portfolio" class="btn-secondary-lg border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        View My Work
                    </router-link>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-16 bg-white dark:bg-black">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <span class="inline-block bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 px-3 py-1 rounded-full text-xs font-medium mb-3">
                        Testimonials
                    </span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 dark:text-white mb-3">
                        What Clients Say
                    </h2>
                    <p class="text-base text-gray-600 dark:text-gray-300">
                        Don't just take my word for it. Here's what my clients have to say about working with me.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Testimonial 1 -->
                    <div class="card dark:card-dark p-4 border border-slate-100 dark:border-slate-800">
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                        </div>
                        <p class="text-slate-600 dark:text-slate-300 mb-4 italic text-sm">
                            "Rik built us a warehouse management system that reduced our inventory losses by 30%. 
                            The system is intuitive and works perfectly on mobile devices. Highly recommended!"
                        </p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 dark:bg-blue-950/30 rounded-full flex items-center justify-center mr-3">
                                <span class="text-blue-800 dark:text-blue-400 font-bold text-sm">JM</span>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-800 dark:text-white text-sm">John Mugisha</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Farm Owner, Kampala</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="card dark:card-dark p-6 border border-gray-100 dark:border-slate-700">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                        </div>
                        <p class="text-slate-600 dark:text-slate-300 mb-6 italic">
                            "Our real estate business needed a modern platform. Rik delivered a beautiful, 
                            fast application that our agents love using. Property management has never been easier."
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mr-4">
                                <span class="text-green-700 dark:text-green-400 font-bold">SA</span>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-800 dark:text-white">Sarah Alupo</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400">Real Estate Agent</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="card dark:card-dark p-6 border border-gray-100 dark:border-slate-700">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                        </div>
                        <p class="text-slate-600 dark:text-slate-300 mb-6 italic">
                            "The API integration Rik built for our legacy system saved us countless hours of manual data entry. 
                            Everything now works seamlessly together. Great work!"
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mr-4">
                                <span class="text-purple-700 dark:text-purple-400 font-bold">DK</span>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-800 dark:text-white">David Kato</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400">Business Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Preview Section -->
        <section class="py-16 bg-gray-50 dark:bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <span class="inline-block bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 px-3 py-1 rounded-full text-xs font-medium mb-3">
                        Latest Insights
                    </span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 dark:text-white mb-3">
                        Blog
                    </h2>
                    <p class="text-base text-gray-600 dark:text-gray-300">
                        Learn how technology can transform your business with these actionable articles.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Blog Post 1 -->
                    <article class="card dark:card-dark overflow-hidden border border-gray-100 dark:border-gray-600">
                        <div class="h-48 bg-gradient-to-br from-yellow-600 to-yellow-800"></div>
                        <div class="p-4">
                            <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">May 15, 2026 • 5 min read</div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">
                                5 Signs Your Farm Needs a Warehouse Management System
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                                Are you losing money due to poor inventory tracking? Discover the warning signs and how a WMS can help.
                            </p>
                            <router-link to="/blog/5-signs-your-farm-needs-wms" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                                Read more
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </router-link>
                        </div>
                    </article>
                    
                    <!-- Blog Post 2 -->
                    <article class="card dark:card-dark overflow-hidden border border-gray-100 dark:border-gray-600">
                        <div class="h-48 bg-gradient-to-br from-yellow-700 to-yellow-900"></div>
                        <div class="p-4">
                            <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">May 8, 2026 • 7 min read</div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">
                                How a Custom Real Estate App Can 10x Your Property Sales
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                                Learn how digital tools can streamline your property management and boost your sales.
                            </p>
                            <router-link to="/blog/custom-real-estate-app-sales" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                                Read more
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </router-link>
                        </div>
                    </article>
                    
                    <!-- Blog Post 3 -->
                    <article class="card dark:card-dark overflow-hidden border border-gray-100 dark:border-gray-600">
                        <div class="h-48 bg-gradient-to-br from-yellow-800 to-black"></div>
                        <div class="p-4">
                            <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">May 1, 2026 • 6 min read</div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">
                                Why Headless Architectures Are Perfect for Scaling Businesses
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                                Future-proof your business with headless architecture. Learn the benefits for Ugandan enterprises.
                            </p>
                            <router-link to="/blog/headless-architectures-scaling" class="text-yellow-700 dark:text-yellow-400 font-medium hover:underline flex items-center text-sm">
                                Read more
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </router-link>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-16 bg-gray-100 dark:bg-black">
            <div class="container mx-auto px-4">
                <div class="card dark:card-dark rounded-2xl p-8 lg:p-12 text-center border border-gray-200 dark:border-gray-700">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 dark:text-white mb-4">
                        Let's Build Something Amazing Together
                    </h2>
                    <p class="text-base text-gray-600 dark:text-gray-300 mb-6">
                        Whether you're a farmer looking to reduce waste, a real estate agent wanting to streamline listings, 
                        or a business needing custom software, I can help. The first step is a free consultation.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <router-link to="/contact" class="btn-primary-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Get a Free Consultation
                        </router-link>
                        <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="btn-secondary-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Book a Call
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { onMounted } from 'vue'
import { useRouter } from 'vue-router'

export default {
    name: 'Home',
    setup() {
        const router = useRouter()
        
        onMounted(() => {
            // Any on-mount logic
        })
        
        return {
            router
        }
    }
}
</script>

<style scoped>
/* Custom animations */
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.animation-delay-100 { animation-delay: 100ms; }
.animation-delay-200 { animation-delay: 200ms; }
.animation-delay-300 { animation-delay: 300ms; }
.animation-delay-400 { animation-delay: 400ms; }
.animation-delay-500 { animation-delay: 500ms; }
</style>
