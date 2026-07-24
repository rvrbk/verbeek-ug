<template>
    <div class="bg-slate-50 dark:bg-slate-800 py-20">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16 animate-fade-in-up">
                <span class="inline-block bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
                    About Me
                </span>
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-800 dark:text-white mb-4">
                    Rik Verbeek
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                    Laravel & Vue.js Expert | Building Custom Software for Ugandan Businesses
                </p>
            </div>

            <!-- Hero About Section -->
            <section class="mb-20 animate-fade-in-up animation-delay-100">
                <div class="card dark:card-dark p-8 lg:p-12 border border-gray-100 dark:border-slate-700">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-6">
                                I build tailored software to help small businesses in Uganda grow
                            </h2>
                            <p class="text-lg text-slate-600 dark:text-slate-300 mb-8">
                                From warehouse management systems for farmers to real estate platforms for agents, 
                                I turn your business challenges into digital solutions. My mission is to help Ugandan 
                                entrepreneurs leverage technology to increase efficiency, reduce waste, and grow their businesses.
                            </p>
                            
                            <div class="grid md:grid-cols-3 gap-8">
                                <div class="text-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-lg border border-slate-100 dark:border-slate-600">
                                    <div class="text-3xl font-bold text-blue-800 dark:text-blue-400">3+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">Years Experience</div>
                                </div>
                                <div class="text-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-lg border border-slate-100 dark:border-slate-600">
                                    <div class="text-3xl font-bold text-green-700 dark:text-green-400">10+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">Projects Completed</div>
                                </div>
                                <div class="text-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-lg border border-slate-100 dark:border-slate-600">
                                    <div class="text-3xl font-bold text-purple-700 dark:text-purple-400">5+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">Happy Clients</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="hidden lg:block">
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 rounded-2xl p-8 h-80 flex items-center justify-center border border-blue-200 dark:border-blue-700">
                                <div class="text-center">
                                    <div class="w-32 h-32 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 rounded-full mx-auto mb-4 flex items-center justify-center border-2 border-blue-200 dark:border-blue-700">
                                        <svg class="w-16 h-16 text-blue-800 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.064-.952L12 .5l3.356 7.34l8.064.952-5.935 5.488 1.575 7.928z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-slate-800 dark:text-white">Digital Solutions</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mt-2 text-sm">For Ugandan Businesses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- My Story Section -->
            <section class="mb-20 animate-fade-in-up animation-delay-200">
                <div class="text-center mb-12">
                    <span class="inline-block bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        My Story
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                        Why I'm Passionate About Helping Ugandan Businesses
                    </h2>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12">
                    <div class="card dark:card-dark p-8 border border-gray-100 dark:border-slate-700">
                        <div class="icon-container-lg bg-green-100 dark:bg-green-900/30 mb-6">
                            <svg class="w-8 h-8 text-green-700 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-4">
                            From Technology Enthusiast to Problem Solver
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            My journey started with a simple realization: Ugandan businesses, especially small farms and real estate agents, 
                            were struggling with inefficiencies that technology could solve. I saw the potential for digital transformation 
                            to create real impact.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">
                            What drives me is seeing the tangible results - when a farmer reduces their inventory loss by 30%, or when a real estate 
                            agent cuts their administrative time in half. These aren't just numbers; they're real businesses growing and thriving.
                        </p>
                    </div>
                    
                    <div class="card dark:card-dark p-8 border border-gray-100 dark:border-slate-700">
                        <div class="icon-container-lg bg-purple-100 dark:bg-purple-900/30 mb-6">
                            <svg class="w-8 h-8 text-purple-700 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-4">
                            Local Focus, Global Standards
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            While I focus on serving Ugandan businesses, I maintain international standards of quality. I use modern 
                            technologies like Laravel, Vue.js, and headless architectures to ensure your solutions are robust, scalable, and maintainable.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">
                            I also ensure all my solutions are mobile-friendly, understanding that many Ugandan business owners and workers 
                            rely on smartphones as their primary device.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Expertise Section -->
            <section class="mb-20 animate-fade-in-up animation-delay-300">
                <div class="text-center mb-12">
                    <span class="inline-block bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        My Expertise
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                        What I Bring to the Table
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                        Years of experience building custom software solutions for businesses in Uganda and beyond.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Skill 1 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-slate-700 text-center">
                        <div class="icon-container bg-blue-100 dark:bg-blue-900/30 mx-auto mb-4">
                            <svg class="w-7 h-7 text-blue-800 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-2">Laravel</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Expert in building robust backend systems, APIs, and database architectures with PHP's most elegant framework.
                        </p>
                    </div>
                    
                    <!-- Skill 2 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-slate-700 text-center">
                        <div class="icon-container bg-green-100 dark:bg-green-900/30 mx-auto mb-4">
                            <svg class="w-7 h-7 text-green-700 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-2">Vue.js</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Creating dynamic, responsive frontends with the progressive JavaScript framework. Reactive and component-based.
                        </p>
                    </div>
                    
                    <!-- Skill 3 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-slate-700 text-center">
                        <div class="icon-container bg-purple-100 dark:bg-purple-900/30 mx-auto mb-4">
                            <svg class="w-7 h-7 text-purple-700 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-2">API Integrations</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Connecting disparate systems seamlessly with RESTful APIs, webhooks, and modern authentication.
                        </p>
                    </div>
                    
                    <!-- Skill 4 -->
                    <div class="service-card dark:service-card-dark border border-gray-100 dark:border-slate-700 text-center">
                        <div class="icon-container bg-orange-100 dark:bg-orange-900/30 mx-auto mb-4">
                            <svg class="w-7 h-7 text-orange-700 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-2">Headless</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Building scalable, future-proof applications with separated frontend and backend for maximum flexibility.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Process Section -->
            <section class="mb-20 animate-fade-in-up animation-delay-400">
                <div class="text-center mb-12">
                    <span class="inline-block bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        My Process
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                        How I Work With Clients
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                        A straightforward, transparent process designed to deliver results for your business.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="card dark:card-dark p-8 border border-gray-100 dark:border-slate-700">
                        <div class="text-4xl font-bold text-blue-800 dark:text-blue-400 mb-4">01</div>
                        <div class="icon-container bg-blue-100 dark:bg-blue-900/30 mb-4">
                            <svg class="w-6 h-6 text-blue-800 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-3">Free Consultation</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            We start with a free 30-minute call to understand your business, your challenges, and your goals. No pressure, no obligations.
                        </p>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="card dark:card-dark p-8 border border-gray-100 dark:border-slate-700">
                        <div class="text-4xl font-bold text-green-700 dark:text-green-400 mb-4">02</div>
                        <div class="icon-container bg-green-100 dark:bg-green-900/30 mb-4">
                            <svg class="w-6 h-6 text-green-700 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-3">Proposal & Planning</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            I'll provide a detailed proposal with scope, timeline, and investment. Once approved, we'll create a project plan with clear milestones.
                        </p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="card dark:card-dark p-8 border border-gray-100 dark:border-slate-700">
                        <div class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-4">03</div>
                        <div class="icon-container bg-purple-100 dark:bg-purple-900/30 mb-4">
                            <svg class="w-6 h-6 text-purple-700 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-3">Development & Delivery</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Using agile methodologies, I'll build your solution with regular check-ins. You'll receive a fully tested, production-ready application.
                        </p>
                    </div>
                </div>
                
                <div class="mt-8 card dark:card-dark p-8 border border-gray-100 dark:border-slate-700">
                    <div class="text-4xl font-bold text-orange-700 dark:text-orange-400 mb-4">04</div>
                    <div class="icon-container bg-orange-100 dark:bg-orange-900/30 mb-4 w-14 h-14">
                        <svg class="w-6 h-6 text-orange-700 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-3">Ongoing Support</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        All projects include 1 month of free support for any bug fixes. After that, you can purchase a maintenance plan for continued support, updates, and enhancements.
                    </p>
                </div>
            </section>

            <!-- Tools & Technologies Section -->
            <section class="mb-20 animate-fade-in-up animation-delay-500">
                <div class="text-center mb-12">
                    <span class="inline-block bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        My Toolkit
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                        Tools & Technologies I Use
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                        I stay current with modern development tools to deliver the best solutions for your business.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Tech Card -->
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Laravel</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">PHP Framework</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-800 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Vue.js</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">JavaScript Framework</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Tailwind CSS</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Utility-First CSS</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Sanctum</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">API Authentication</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-600 to-orange-800 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Inertia.js</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Modern Approach</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Database</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">MySQL/PostgreSQL</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-800 to-gray-600 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Git</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Version Control</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-700 rounded-xl p-6 border border-slate-100 dark:border-slate-600 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-700 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 00-2 2v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 00-2-2H5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Hetzner</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Cloud Hosting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="text-center animate-fade-in-up animation-delay-600">
                <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-4">
                    Ready to Work Together?
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-8 max-w-2xl mx-auto">
                    I'm currently accepting new projects. Whether you need a warehouse management system, 
                    a real estate platform, or custom integration, let's discuss how I can help your business grow.
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
            </section>
        </div>
    </div>
</template>

<script>
import { onMounted } from 'vue'

export default {
    name: 'About',
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
/* Animation delays */
.animation-delay-100 { animation-delay: 100ms; }
.animation-delay-200 { animation-delay: 200ms; }
.animation-delay-300 { animation-delay: 300ms; }
.animation-delay-400 { animation-delay: 400ms; }
.animation-delay-500 { animation-delay: 500ms; }
.animation-delay-600 { animation-delay: 600ms; }
</style>
