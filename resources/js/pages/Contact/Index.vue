<template>
    <div class="bg-slate-50 dark:bg-slate-800 py-20">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-800 dark:text-white mb-4">
                    Get in Touch
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                    Ready to transform your business with custom software? Let's start the conversation. 
                    I offer a free consultation to discuss your needs and how I can help.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg p-8 lg:p-10">
                    <h2 class="text-2xl font-bold text-slate-800 dark:text-white mb-6">
                        Contact Form
                    </h2>
                    <p class="text-slate-600 dark:text-slate-300 mb-8">
                        Fill out the form below and I'll get back to you within 24 hours. 
                        All fields are required.
                    </p>
                    
                    <form @submit.prevent="submitForm" class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                Full Name
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                v-model="form.name" 
                                @blur="validateField('name')"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors"
                                placeholder="John Doe"
                                :class="{ 'border-red-500': errors.name }"
                            />
                            <p v-if="errors.name" class="text-red-500 text-sm mt-1">{{ errors.name }}</p>
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                Email Address
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                v-model="form.email" 
                                @blur="validateField('email')"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors"
                                placeholder="john@email.com"
                                :class="{ 'border-red-500': errors.email }"
                            />
                            <p v-if="errors.email" class="text-red-500 text-sm mt-1">{{ errors.email }}</p>
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                Phone Number (Optional)
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                v-model="form.phone"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors"
                                placeholder="+256 700 000 000"
                            />
                        </div>
                        
                        <!-- Service -->
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                What service are you interested in?
                            </label>
                            <select 
                                id="service" 
                                v-model="form.service" 
                                @change="validateField('service')"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors"
                                :class="{ 'border-red-500': errors.service }"
                            >
                                <option value="">Select a service...</option>
                                <option value="warehouse">Warehouse Management System</option>
                                <option value="real-estate">Real Estate Web App</option>
                                <option value="api">API Integration</option>
                                <option value="headless">Headless Web App</option>
                                <option value="custom">Custom Solution</option>
                                <option value="consultation">Just want to chat</option>
                            </select>
                            <p v-if="errors.service" class="text-red-500 text-sm mt-1">{{ errors.service }}</p>
                        </div>
                        
                        <!-- Project Idea -->
                        <div>
                            <label for="projectIdea" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                Tell me about your project
                            </label>
                            <textarea 
                                id="projectIdea" 
                                v-model="form.projectIdea" 
                                @blur="validateField('projectIdea')"
                                rows="4"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors resize-none"
                                placeholder="Describe your business, your challenges, and what you'd like to achieve..."
                                :class="{ 'border-red-500': errors.projectIdea }"
                            ></textarea>
                            <p v-if="errors.projectIdea" class="text-red-500 text-sm mt-1">{{ errors.projectIdea }}</p>
                        </div>
                        
                        <!-- Budget Range -->
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                Budget Range (Optional)
                            </label>
                            <select 
                                id="budget" 
                                v-model="form.budget"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors"
                            >
                                <option value="">Select your budget range...</option>
                                <option value="under-500">Under $500</option>
                                <option value="500-2000">$500 - $2,000</option>
                                <option value="2000-5000">$2,000 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="over-10000">Over $10,000</option>
                                <option value="not-sure">Not sure yet</option>
                            </select>
                        </div>
                        
                        <!-- How Did You Hear -->
                        <div>
                            <label for="howDidYouHear" class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">
                                How did you hear about me? (Optional)
                            </label>
                            <input 
                                type="text" 
                                id="howDidYouHear" 
                                v-model="form.howDidYouHear"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-white transition-colors"
                                placeholder="Social media, friend, search engine, etc."
                            />
                        </div>
                        
                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            :disabled="isSubmitting || Object.keys(errors).length > 0"
                            class="w-full bg-blue-800 hover:bg-blue-900 disabled:bg-blue-400 disabled:cursor-not-allowed text-white font-semibold py-4 px-6 rounded-lg transition-colors flex items-center justify-center"
                        >
                            <span v-if="!isSubmitting">Send Message</span>
                            <span v-else class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sending...
                            </span>
                            <svg v-if="!isSubmitting" class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </button>
                    </form>
                    
                    <!-- Success Message -->
                    <div 
                        v-if="successMessage" 
                        class="mt-6 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4 text-center"
                    >
                        <svg class="w-8 h-8 text-green-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-green-700 dark:text-green-300 font-medium">{{ successMessage }}</p>
                    </div>
                    
                    <!-- Error Message -->
                    <div 
                        v-if="errorMessage" 
                        class="mt-6 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4 text-center"
                    >
                        <svg class="w-8 h-8 text-red-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-red-700 dark:text-red-300 font-medium">{{ errorMessage }}</p>
                    </div>
                </div>
                
                <!-- Contact Info & Other Options -->
                <div class="space-y-8">
                    <!-- Direct Contact Methods -->
                    <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-slate-800 dark:text-white mb-6">
                            Other Ways to Reach Me
                        </h2>
                        
                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-800 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        <a href="mailto:rik@verbeek.ug" class="text-blue-800 dark:text-blue-400 hover:underline">
                                            rik@verbeek.ug
                                        </a>
                                    </p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        I typically respond within 24 hours
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Calendly -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-700 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Book a Call</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="text-green-700 dark:text-green-400 hover:underline">
                                            Schedule a free 30-minute consultation
                                        </a>
                                    </p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        Pick a time that works for you
                                    </p>
                                </div>
                            </div>
                            
                            <!-- WhatsApp -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-700 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">WhatsApp</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        <a href="https://wa.me/256" target="_blank" class="text-green-700 dark:text-green-400 hover:underline">
                                            +256 (WhatsApp)
                                        </a>
                                    </p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        Quick responses via messaging
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Location -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-700 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Location</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Kampala, Uganda
                                    </p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        Available for remote work worldwide
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-slate-800 dark:text-white mb-6">
                            Connect on Social Media
                        </h2>
                        <p class="text-slate-600 dark:text-slate-300 mb-6">
                            Follow me for updates, tips, and insights about software development and digital transformation.
                        </p>
                        <div class="flex space-x-4">
                            <a 
                                href="#" 
                                target="_blank" 
                                class="w-12 h-12 bg-gray-800 dark:bg-gray-600 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors"
                                title="LinkedIn"
                            >
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a 
                                href="#" 
                                target="_blank" 
                                class="w-12 h-12 bg-gray-800 dark:bg-gray-600 hover:bg-purple-600 rounded-lg flex items-center justify-center transition-colors"
                                title="Twitter"
                            >
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a 
                                href="#" 
                                target="_blank" 
                                class="w-12 h-12 bg-gray-800 dark:bg-gray-600 hover:bg-pink-600 rounded-lg flex items-center justify-center transition-colors"
                                title="Instagram"
                            >
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a 
                                href="#" 
                                target="_blank" 
                                class="w-12 h-12 bg-gray-800 dark:bg-gray-600 hover:bg-green-600 rounded-lg flex items-center justify-center transition-colors"
                                title="WhatsApp"
                            >
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                            <a 
                                href="#" 
                                target="_blank" 
                                class="w-12 h-12 bg-gray-800 dark:bg-gray-600 hover:bg-red-600 rounded-lg flex items-center justify-center transition-colors"
                                title="YouTube"
                            >
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- FAQ Section -->
                    <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-slate-800 dark:text-white mb-6">
                            Frequently Asked Questions
                        </h2>
                        
                        <div class="space-y-4">
                            <!-- FAQ 1 -->
                            <div 
                                class="border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden"
                                :class="{ 'bg-slate-50 dark:bg-slate-800': activeFaq === 1 }"
                            >
                                <button 
                                    @click="toggleFaq(1)" 
                                    class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                                >
                                    <span class="font-medium text-slate-800 dark:text-white">How much does a custom app cost?</span>
                                    <svg 
                                        class="w-5 h-5 text-slate-500 dark:text-slate-400 transition-transform" 
                                        :class="{ 'rotate-180': activeFaq === 1 }"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div 
                                    v-if="activeFaq === 1" 
                                    class="px-6 pb-4 text-gray-600 dark:text-gray-400"
                                >
                                    <p>It depends on the complexity and scope of your project. During our free consultation, I'll provide a detailed estimate based on your specific requirements. Typically, projects range from $1,000 to $10,000+.</p>
                                </div>
                            </div>
                            
                            <!-- FAQ 2 -->
                            <div 
                                class="border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden"
                                :class="{ 'bg-slate-50 dark:bg-slate-800': activeFaq === 2 }"
                            >
                                <button 
                                    @click="toggleFaq(2)" 
                                    class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                                >
                                    <span class="font-medium text-slate-800 dark:text-white">How long does it take to build an app?</span>
                                    <svg 
                                        class="w-5 h-5 text-slate-500 dark:text-slate-400 transition-transform" 
                                        :class="{ 'rotate-180': activeFaq === 2 }"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div 
                                    v-if="activeFaq === 2" 
                                    class="px-6 pb-4 text-gray-600 dark:text-gray-400"
                                >
                                    <p>Development time varies based on the project. A simple MVP (Minimum Viable Product) can take 2-4 weeks, while more complex systems may take 2-6 months. I'll give you a clear timeline during our consultation.</p>
                                </div>
                            </div>
                            
                            <!-- FAQ 3 -->
                            <div 
                                class="border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden"
                                :class="{ 'bg-slate-50 dark:bg-slate-800': activeFaq === 3 }"
                            >
                                <button 
                                    @click="toggleFaq(3)" 
                                    class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                                >
                                    <span class="font-medium text-slate-800 dark:text-white">Do you offer support after launch?</span>
                                    <svg 
                                        class="w-5 h-5 text-slate-500 dark:text-slate-400 transition-transform" 
                                        :class="{ 'rotate-180': activeFaq === 3 }"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div 
                                    v-if="activeFaq === 3" 
                                    class="px-6 pb-4 text-gray-600 dark:text-gray-400"
                                >
                                    <p>Absolutely! I offer ongoing support and maintenance packages. All projects include 1 month of free support for any bug fixes. After that, you can purchase a maintenance plan for continued support.</p>
                                </div>
                            </div>
                            
                            <!-- FAQ 4 -->
                            <div 
                                class="border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden"
                                :class="{ 'bg-slate-50 dark:bg-slate-800': activeFaq === 4 }"
                            >
                                <button 
                                    @click="toggleFaq(4)" 
                                    class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                                >
                                    <span class="font-medium text-slate-800 dark:text-white">Can you help with existing systems?</span>
                                    <svg 
                                        class="w-5 h-5 text-slate-500 dark:text-slate-400 transition-transform" 
                                        :class="{ 'rotate-180': activeFaq === 4 }"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div 
                                    v-if="activeFaq === 4" 
                                    class="px-6 pb-4 text-gray-600 dark:text-gray-400"
                                >
                                    <p>Yes! I can help with API integrations, adding new features, optimizing performance, or migrating to a new system. I'll assess your current setup and recommend the best approach.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue'

export default {
    name: 'Contact',
    setup() {
        const form = ref({
            name: '',
            email: '',
            phone: '',
            service: '',
            projectIdea: '',
            budget: '',
            howDidYouHear: ''
        })
        
        const errors = ref({})
        const isSubmitting = ref(false)
        const successMessage = ref('')
        const errorMessage = ref('')
        const activeFaq = ref(null)
        
        const validateField = (field) => {
            errors.value[field] = ''
            
            if (field === 'name' && !form.value.name.trim()) {
                errors.value.name = 'Name is required'
            }
            
            if (field === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                if (!form.value.email.trim()) {
                    errors.value.email = 'Email is required'
                } else if (!emailRegex.test(form.value.email)) {
                    errors.value.email = 'Please enter a valid email'
                }
            }
            
            if (field === 'service' && !form.value.service) {
                errors.value.service = 'Please select a service'
            }
            
            if (field === 'projectIdea' && !form.value.projectIdea.trim()) {
                errors.value.projectIdea = 'Please describe your project'
            }
        }
        
        const validateForm = () => {
            errors.value = {}
            
            if (!form.value.name.trim()) {
                errors.value.name = 'Name is required'
            }
            
            if (!form.value.email.trim()) {
                errors.value.email = 'Email is required'
            } else {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                if (!emailRegex.test(form.value.email)) {
                    errors.value.email = 'Please enter a valid email'
                }
            }
            
            if (!form.value.service) {
                errors.value.service = 'Please select a service'
            }
            
            if (!form.value.projectIdea.trim()) {
                errors.value.projectIdea = 'Please describe your project'
            }
            
            return Object.keys(errors.value).length === 0
        }
        
        const submitForm = async () => {
            if (!validateForm()) {
                return
            }
            
            isSubmitting.value = true
            successMessage.value = ''
            errorMessage.value = ''
            
            try {
                // Simulate form submission
                await new Promise(resolve => setTimeout(resolve, 1500))
                
                // In a real implementation, you would send the data to your Laravel backend
                // Example:
                // const response = await axios.post('/api/contact', form.value)
                
                successMessage.value = 'Thank you! Your message has been sent successfully. I will get back to you within 24 hours.'
                
                // Reset form
                form.value = {
                    name: '',
                    email: '',
                    phone: '',
                    service: '',
                    projectIdea: '',
                    budget: '',
                    howDidYouHear: ''
                }
                
            } catch (error) {
                errorMessage.value = 'There was an error sending your message. Please try again later.'
                console.error('Error submitting form:', error)
            } finally {
                isSubmitting.value = false
            }
        }
        
        const toggleFaq = (index) => {
            activeFaq.value = activeFaq.value === index ? null : index
        }
        
        return {
            form,
            errors,
            isSubmitting,
            successMessage,
            errorMessage,
            activeFaq,
            validateField,
            submitForm,
            toggleFaq
        }
    }
}
</script>

<style scoped>
/* Add any custom styles here */
</style>
