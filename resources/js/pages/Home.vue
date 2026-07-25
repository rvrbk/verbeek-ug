<template>
    <div>
        <!-- Hero Section -->
        <section id="hero" class="hb-hero geometric-bg min-h-screen flex items-center">
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
                    <line x1="0" y1="0" x2="1440" y2="800" stroke="rgba(255,255,255,0.1)" />
                    <line x1="1440" y1="0" x2="0" y2="400" stroke="rgba(255,255,255,0.1)" />
                    <line x1="0" y1="400" x2="720" y2="0" stroke="rgba(255,255,255,0.1)" />
                    <line x1="720" y1="800" x2="1440" y2="400" stroke="rgba(255,255,255,0.1)" />
                    <line x1="360" y1="0" x2="1080" y2="800" stroke="rgba(255,255,255,0.1)" />
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
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="hb-content-section navy">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="text-text-soft text-sm tracking-widest uppercase mb-4">What I Offer</p>
                    <h2 class="hb-section-title">How I Can Help Your Business</h2>
                    <p class="hb-section-subtitle mx-auto">
                        From warehouse management for farmers to real estate platforms for agents, 
                        I build custom software solutions tailored to Ugandan businesses.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                    <div class="bg-bg-light-gray p-6">
                        <h3 class="text-color-primary font-serif text-lg mb-3">Warehouse Management</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Track inventory, reduce waste, and increase profits for small farmers in Uganda.
                        </p>
                    </div>
                    <div class="bg-bg-light-gray p-6">
                        <h3 class="text-color-primary font-serif text-lg mb-3">Real Estate Apps</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            List, manage, and sell properties online with custom real estate platforms.
                        </p>
                    </div>
                    <div class="bg-bg-light-gray p-6">
                        <h3 class="text-color-primary font-serif text-lg mb-3">API Integrations</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Connect your legacy systems and tools seamlessly for better efficiency.
                        </p>
                    </div>
                    <div class="bg-bg-light-gray p-6">
                        <h3 class="text-color-primary font-serif text-lg mb-3">Headless Web Apps</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Fast, secure, and future-proof solutions that scale with your business.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="hb-content-section light">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="text-gray-500 text-sm tracking-widest uppercase mb-4">Featured Projects</p>
                    <h2 class="hb-section-title">My Work</h2>
                    <p class="hb-section-subtitle text-gray-600 mx-auto">
                        See how I've helped Ugandan businesses transform their operations with custom software solutions.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-white overflow-hidden shadow-sm">
                        <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600"></div>
                        <div class="p-6">
                            <h3 class="text-color-primary font-serif text-xl mb-3">Warehouse Management System</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Custom Laravel + Vue.js system for Ugandan farmers to track inventory across multiple locations.
                            </p>
                            <router-link to="/portfolio/warehouse-management" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                                View Details
                            </router-link>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                        <div class="p-6">
                            <h3 class="text-color-primary font-serif text-xl mb-3">Real Estate Platform</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Funda-inspired property listing and management platform for Ugandan real estate agents.
                            </p>
                            <router-link to="/portfolio/real-estate-platform" class="hb-btn hb-btn-primary text-xs px-4 py-2">
                                View Details
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="hb-content-section navy">
            <div class="hb-container">
                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-text-soft text-sm tracking-widest uppercase mb-4">About Me</p>
                    <h2 class="hb-section-title">Who I Am</h2>
                    <p class="hb-section-subtitle mx-auto">
                        I'm Rik Verbeek, a software developer based in Kampala, Uganda. I specialize in building custom web applications that solve real business problems. With expertise in Laravel, Vue.js, and headless architectures, I create fast, secure, and scalable solutions.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="hb-content-section light">
            <div class="hb-container">
                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-gray-500 text-sm tracking-widest uppercase mb-4">Get In Touch</p>
                    <h2 class="hb-section-title">Ready to Transform Your Business?</h2>
                    <p class="text-gray-600 text-lg mb-6 mx-auto">
                        Let's discuss how custom software can solve your unique challenges. First consultation is always free.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <router-link to="/contact" class="hb-btn hb-btn-primary">
                            Get a Free Consultation
                        </router-link>
                        <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="hb-btn hb-btn-light">
                            Book a Call
                        </a>
                    </div>
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
