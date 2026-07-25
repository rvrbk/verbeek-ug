<template>
    <div class="min-h-screen flex flex-col bg-navy">
        <!-- Header -->
        <header class="hb-header">
            <div class="hb-nav">
                <!-- Logo -->
                <router-link to="/" class="hb-logo">
                    Rik Verbeek
                </router-link>
                
                <!-- Desktop Navigation -->
                <nav class="hb-nav-links">
                    <a href="#hero" @click.prevent="navigateToSection('hero')" class="hb-nav-link">Home</a>
                    <a href="#services" @click.prevent="navigateToSection('services')" class="hb-nav-link">Services</a>
                    <router-link to="/portfolio" class="hb-nav-link">Portfolio</router-link>
                    <a href="#about" @click.prevent="navigateToSection('about')" class="hb-nav-link">About</a>
                    <router-link to="/contact" class="hb-nav-link">Contact</router-link>
                </nav>
                
                <!-- Mobile menu button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="lg:hidden text-white"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div 
                v-if="mobileMenuOpen" 
                class="lg:hidden bg-navy border-t border-white/10"
            >
                <div class="px-6 py-4 space-y-2 hb-nav-links">
                    <a href="#hero" @click.prevent="navigateToSection('hero'); mobileMenuOpen = false" class="block text-white/80 hover:text-accent-orange py-3 px-4 text-sm tracking-wide uppercase">Home</a>
                    <a href="#services" @click.prevent="navigateToSection('services'); mobileMenuOpen = false" class="block text-white/80 hover:text-accent-orange py-3 px-4 text-sm tracking-wide uppercase">Services</a>
                    <router-link to="/portfolio" @click="mobileMenuOpen = false" class="block text-white/80 hover:text-accent-orange py-3 px-4 text-sm tracking-wide uppercase">Portfolio</router-link>
                    <a href="#about" @click.prevent="navigateToSection('about'); mobileMenuOpen = false" class="block text-white/80 hover:text-accent-orange py-3 px-4 text-sm tracking-wide uppercase">About</a>
                    <router-link to="/contact" @click="mobileMenuOpen = false" class="block text-white/80 hover:text-accent-orange py-3 px-4 text-sm tracking-wide uppercase">Contact</router-link>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="flex-grow">
            <slot />
        </main>
        
        <!-- Footer -->
        <footer class="hb-footer">
            <div class="hb-footer-grid">
                <!-- Company -->
                <div class="hb-footer-column">
                    <h4>Rik Verbeek</h4>
                    <p>Custom software for Ugandan businesses. From warehouse management to real estate platforms, I turn challenges into digital solutions.</p>
                </div>
                
                <!-- Quick Links -->
                <div class="hb-footer-column">
                    <h4>Quick Links</h4>
                    <router-link to="/">Home</router-link>
                    <router-link to="/#services">Services</router-link>
                    <router-link to="/portfolio">Portfolio</router-link>
                    <router-link to="/#about">About</router-link>
                    <router-link to="/contact">Contact</router-link>
                </div>
                
                <!-- Services -->
                <div class="hb-footer-column">
                    <h4>Services</h4>
                    <span>Warehouse Management</span>
                    <span>Real Estate Apps</span>
                    <span>API Integrations</span>
                    <span>Headless Web Apps</span>
                </div>
                
                <!-- Connect -->
                <div class="hb-footer-column">
                    <h4>Connect</h4>
                    <a href="mailto:rik@verbeek.ug" target="_blank">rik@verbeek.ug</a>
                    <a href="https://wa.me/256" target="_blank">+256 (WhatsApp)</a>
                    <span>Kampala, Uganda</span>
                    <div class="flex space-x-4 mt-4">
                        <a href="https://linkedin.com/in/rikverbeek" target="_blank" class="text-text-lighter hover:text-accent-orange">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/rvrbk" target="_blank" class="text-text-lighter hover:text-accent-orange">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.608 1.647.242 2.717.116 3.177.88 1.008 1.241 2.381 1.241 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                    <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="hb-btn hb-btn-light mt-4">
                        Book a Call
                    </a>
                </div>
            </div>
            
            <div class="hb-footer-bottom text-center">
                <p>&copy; {{ new Date().getFullYear() }} Rik Verbeek. All rights reserved.</p>
            </div>
        </footer>
    </div>
</template>

<script>
import { ref } from 'vue'
import { useRouter, useRoute } from 'vue-router'

export default {
    setup() {
        const router = useRouter()
        const route = useRoute()
        const mobileMenuOpen = ref(false)
        
        const navigateToSection = (sectionId) => {
            if (route.path === '/') {
                const element = document.getElementById(sectionId)
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' })
                }
            } else {
                router.push({ path: '/', hash: `#${sectionId}` })
            }
        }
        
        return { mobileMenuOpen, navigateToSection }
    }
}
</script>

<style scoped>
.bg-navy { background-color: #001a3d; }
.hb-nav { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-nav-links { display: flex; gap: 3rem; list-style: none; margin: 0; padding: 0; }
.hb-nav-link { color: white; font-size: 0.75rem; letter-spacing: 0.15em; text-transform: uppercase; transition: color 0.2s; padding: 0.5rem 0; }
.hb-nav-link:hover, .hb-nav-link.router-link-active { color: #f5ab8b; }
@media (max-width: 768px) { .hb-nav-links { display: none; } }
</style>
