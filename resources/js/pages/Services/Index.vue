<template>
    <div>
        <!-- Hero Section -->
        <section class="hb-hero geometric-bg min-h-[50vh] flex items-center">
            <div class="geometric-pattern">
                <svg viewBox="0 0 1440 600" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <pattern id="dots" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                            <circle cx="20" cy="20" r="2" />
                            <circle cx="80" cy="40" r="2" />
                            <circle cx="40" cy="80" r="2" />
                            <circle cx="60" cy="60" r="2" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots)" opacity="0.3" />
                    <line x1="0" y1="0" x2="1440" y2="600" stroke="rgba(255,255,255,0.1)" />
                    <line x1="1440" y1="0" x2="0" y2="300" stroke="rgba(255,255,255,0.1)" />
                </svg>
            </div>
            <div class="hb-hero-content text-center">
                <p class="text-text-soft-light text-sm tracking-widest uppercase mb-6">Services</p>
                <h1 class="hb-hero h1">How I Can Help Your Business</h1>
                <p class="hb-hero p">
                    From warehouse management for farmers to real estate platforms for agents, 
                    I build custom software solutions tailored to Ugandan businesses.
                </p>
            </div>
        </section>

        <!-- Services Content -->
        <section class="hb-content-section light">
            <div class="hb-container">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Service 1 -->
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <h3 class="text-color-primary font-serif text-xl mb-4">Warehouse Management</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            Track inventory, reduce waste, and increase profits for small farmers in Uganda. 
                            Modern solutions for agricultural businesses.
                        </p>
                        <router-link to="/contact" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Get a Quote
                        </router-link>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <h3 class="text-color-primary font-serif text-xl mb-4">Real Estate Apps</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            List, manage, and sell properties online with custom real estate platforms. 
                            Funda-inspired solutions for agents.
                        </p>
                        <router-link to="/contact" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Get a Quote
                        </router-link>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <h3 class="text-color-primary font-serif text-xl mb-4">API Integrations</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            Connect your legacy systems and tools seamlessly for better efficiency. 
                            Modern API solutions.
                        </p>
                        <router-link to="/contact" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Get a Quote
                        </router-link>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <h3 class="text-color-primary font-serif text-xl mb-4">Headless Web Apps</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            Fast, secure, and future-proof solutions that scale with your business. 
                            Laravel + Vue.js expertise.
                        </p>
                        <router-link to="/contact" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Get a Quote
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-content-section navy">
            <div class="hb-container text-center">
                <h2 class="text-2xl font-serif text-white mb-4">Ready to get started?</h2>
                <p class="text-text-lighter mb-6 max-w-2xl mx-auto">
                    Let's discuss which service is right for your business. First consultation is always free.
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-light">
                    Get a Free Consultation
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Services'
}
</script>

<style scoped>
.color-primary { color: #003885; }
.text-gray-600 { color: #666; }
</style>
