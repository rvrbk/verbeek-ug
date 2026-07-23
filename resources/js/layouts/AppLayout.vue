<template>
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-50">
            <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
                <!-- Logo -->
                <router-link to="/" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">RV</span>
                    </div>
                    <span class="text-xl font-bold text-gray-800 dark:text-white">Rik Verbeek</span>
                </router-link>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <router-link 
                        to="/" 
                        class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                        active-class="text-blue-600 dark:text-blue-400"
                    >
                        Home
                    </router-link>
                    <router-link 
                        to="/services" 
                        class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                        active-class="text-blue-600 dark:text-blue-400"
                    >
                        Services
                    </router-link>
                    <router-link 
                        to="/portfolio" 
                        class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                        active-class="text-blue-600 dark:text-blue-400"
                    >
                        Portfolio
                    </router-link>
                    <router-link 
                        to="/about" 
                        class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                        active-class="text-blue-600 dark:text-blue-400"
                    >
                        About
                    </router-link>
                    <router-link 
                        to="/contact" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition-colors"
                    >
                        Get a Free Consultation
                    </router-link>
                </div>
                
                <!-- Mobile menu button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="md:hidden p-2 text-gray-600 dark:text-gray-300"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </nav>
            
            <!-- Mobile Navigation -->
            <div 
                v-if="mobileMenuOpen" 
                class="md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700"
            >
                <div class="px-6 py-4 space-y-3">
                    <router-link 
                        to="/" 
                        @click="mobileMenuOpen = false"
                        class="block text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 py-2"
                    >
                        Home
                    </router-link>
                    <router-link 
                        to="/services" 
                        @click="mobileMenuOpen = false"
                        class="block text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 py-2"
                    >
                        Services
                    </router-link>
                    <router-link 
                        to="/portfolio" 
                        @click="mobileMenuOpen = false"
                        class="block text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 py-2"
                    >
                        Portfolio
                    </router-link>
                    <router-link 
                        to="/about" 
                        @click="mobileMenuOpen = false"
                        class="block text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 py-2"
                    >
                        About
                    </router-link>
                    <router-link 
                        to="/contact" 
                        @click="mobileMenuOpen = false"
                        class="block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition-colors mt-2"
                    >
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
        <footer class="bg-gray-800 dark:bg-gray-900 text-gray-300 py-12">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- About -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-4">Rik Verbeek</h3>
                        <p class="text-sm leading-relaxed">
                            I build tailored software to help small businesses in Uganda grow. 
                            From warehouse management to real estate platforms, I turn your challenges into digital solutions.
                        </p>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-4">Quick Links</h3>
                        <ul class="space-y-2 text-sm">
                            <li><router-link to="/" class="hover:text-blue-400">Home</router-link></li>
                            <li><router-link to="/services" class="hover:text-blue-400">Services</router-link></li>
                            <li><router-link to="/portfolio" class="hover:text-blue-400">Portfolio</router-link></li>
                            <li><router-link to="/about" class="hover:text-blue-400">About</router-link></li>
                            <li><router-link to="/contact" class="hover:text-blue-400">Contact</router-link></li>
                        </ul>
                    </div>
                    
                    <!-- Services -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-4">Services</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="hover:text-blue-400">Warehouse Management</li>
                            <li class="hover:text-blue-400">Real Estate Web Apps</li>
                            <li class="hover:text-blue-400">API Integrations</li>
                            <li class="hover:text-blue-400">Headless Web Apps</li>
                        </ul>
                    </div>
                    
                    <!-- Contact -->
                    <div>
                        <h3 class="text-white font-semibold text-lg mb-4">Contact</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                rik@verbeek.ug
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                +256 (WhatsApp)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Kampala, Uganda
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm">
                    <p>&copy; {{ new Date().getFullYear() }} Rik Verbeek. All rights reserved.</p>
                    <p class="mt-2">
                        <span>Laravel & Vue.js Expert | </span>
                        <span>Headless Architectures | </span>
                        <span>Hosted on Hetzner</span>
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


