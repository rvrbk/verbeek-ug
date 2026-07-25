<template>
    <div>
        <!-- Hero Section -->
        <section class="hb-hero geometric-bg">
            <div class="geometric-pattern">
                <svg viewBox="0 0 1440 800" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <pattern id="dots" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                            <circle cx="20" cy="20" r="2" />
                            <circle cx="80" cy="40" r="2" />
                            <circle cx="40" cy="80" r="2" />
                            <circle cx="60" cy="60" r="2" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots)" opacity="0.3" />
                    <line x1="0" y1="0" x2="1440" y2="800" />
                    <line x1="1440" y1="0" x2="0" y2="400" />
                    <line x1="0" y1="400" x2="720" y2="0" />
                    <line x1="720" y1="800" x2="1440" y2="400" />
                    <line x1="360" y1="0" x2="1080" y2="800" />
                </svg>
            </div>
            <div class="hb-hero-content text-center">
                <div class="animate-fade-in-up">
                    <p class="text-text-soft-light text-sm tracking-widest uppercase mb-6">
                        Available for Projects
                    </p>
                    <h1 class="hb-hero h1 animate-fade-in-up animation-delay-100">
                        Custom Software Solutions for Ugandan Businesses
                    </h1>
                    <p class="hb-hero p animate-fade-in-up animation-delay-200">
                        I build tailored web applications to help small businesses in Uganda grow. 
                        From warehouse management to real estate platforms, I turn your challenges into digital solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10 animate-fade-in-up animation-delay-300">
                        <router-link to="/contact" class="hb-btn hb-btn-primary">
                            Get a Free Consultation
                        </router-link>
                        <router-link to="/portfolio" class="hb-btn hb-btn-light">
                            View My Work
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="hb-content-section navy">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="text-text-soft text-sm tracking-widest uppercase mb-4">What I Offer</p>
                    <h2 class="hb-section-title">How I Can Help Your Business</h2>
                    <p class="hb-section-subtitle mx-auto">
                        From warehouse management for farmers to real estate platforms for agents, 
                        I build custom software solutions tailored to Ugandan businesses.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
                    <div class="bg-bg-light-gray p-8">
                        <h3 class="text-color-primary font-serif text-xl mb-4">Warehouse Management</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            Track inventory, reduce waste, and increase profits for small farmers in Uganda.
                        </p>
                        <router-link to="/services#warehouse" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Learn more
                        </router-link>
                    </div>
                    <div class="bg-bg-light-gray p-8">
                        <h3 class="text-color-primary font-serif text-xl mb-4">Real Estate Apps</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            List, manage, and sell properties online with custom real estate platforms.
                        </p>
                        <router-link to="/services#real-estate" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Learn more
                        </router-link>
                    </div>
                    <div class="bg-bg-light-gray p-8">
                        <h3 class="text-color-primary font-serif text-xl mb-4">API Integrations</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            Connect your legacy systems and tools seamlessly for better efficiency.
                        </p>
                        <router-link to="/services#api" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Learn more
                        </router-link>
                    </div>
                    <div class="bg-bg-light-gray p-8">
                        <h3 class="text-color-primary font-serif text-xl mb-4">Headless Web Apps</h3>
                        <p class="text-gray-600 text-sm mb-6">
                            Fast, secure, and future-proof solutions that scale with your business.
                        </p>
                        <router-link to="/services#headless" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                            Learn more
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section class="hb-content-section light">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="text-gray-500 text-sm tracking-widest uppercase mb-4">Featured Projects</p>
                    <h2 class="hb-section-title">My Work</h2>
                    <p class="hb-section-subtitle text-gray-600 mx-auto">
                        See how I've helped Ugandan businesses transform their operations with custom software solutions.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-8 mt-16">
                    <div class="bg-white overflow-hidden shadow-sm">
                        <div class="h-64 bg-gradient-to-br from-orange-400 to-orange-600"></div>
                        <div class="p-8">
                            <h3 class="text-color-primary font-serif text-2xl mb-4">Warehouse Management System</h3>
                            <p class="text-gray-600 text-sm mb-6">
                                Custom Laravel + Vue.js system for Ugandan farmers to track inventory across multiple locations.
                            </p>
                            <router-link to="/portfolio/warehouse-management" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                                View Project
                            </router-link>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm">
                        <div class="h-64 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                        <div class="p-8">
                            <h3 class="text-color-primary font-serif text-2xl mb-4">Real Estate Platform</h3>
                            <p class="text-gray-600 text-sm mb-6">
                                Funda-inspired property listing and management platform for Ugandan real estate agents.
                            </p>
                            <router-link to="/portfolio/real-estate-platform" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                                View Project
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-content-section navy">
            <div class="hb-container text-center">
                <h2 class="text-3xl font-serif text-white mb-6 animate-fade-in-up">
                    Ready to Transform Your Business?
                </h2>
                <p class="text-text-lighter text-xl mb-10 max-w-2xl mx-auto animate-fade-in-up animation-delay-100">
                    Let's discuss how custom software can solve your unique challenges. First consultation is always free.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-200">
                    <router-link to="/contact" class="hb-btn hb-btn-primary">
                        Get a Free Consultation
                    </router-link>
                    <router-link to="/portfolio" class="hb-btn hb-btn-light">
                        View My Work
                    </router-link>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Home'
}
</script>

<style scoped>
.bg-navy { background-color: #001a3d; }
.color-primary { color: #003885; }
.bg-bg-light-gray { background-color: #f5f5f5; }
.text-gray-600 { color: #666; }
.text-gray-500 { color: #888; }
.shadow-sm { box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
.animation-delay-100 { animation-delay: 100ms; }
.animation-delay-200 { animation-delay: 200ms; }
</style>
