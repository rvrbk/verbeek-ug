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
                    <line x1="0" y1="300" x2="720" y2="0" stroke="rgba(255,255,255,0.1)" />
                    <line x1="720" y1="600" x2="1440" y2="300" stroke="rgba(255,255,255,0.1)" />
                </svg>
            </div>
            <div class="hb-hero-content text-center">
                <p class="text-text-soft-light text-sm tracking-widest uppercase mb-6">Portfolio</p>
                <h1 class="hb-hero h1">My Work</h1>
                <p class="hb-hero p">
                    See how I've helped Ugandan businesses transform their operations with custom software solutions.
                </p>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section class="hb-content-section light">
            <div class="hb-container">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Project 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600"></div>
                        <div class="p-6">
                            <h3 class="text-color-primary font-serif text-xl mb-2">Warehouse Management System</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Custom Laravel + Vue.js system for Ugandan farmers to track inventory across multiple locations.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Vue.js</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">MySQL</span>
                            </div>
                            <router-link to="/portfolio/warehouse-management" class="hb-btn hb-btn-primary text-xs px-3 py-1.5">
                                View Project
                            </router-link>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                        <div class="p-6">
                            <h3 class="text-color-primary font-serif text-xl mb-2">Real Estate Platform</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Funda-inspired property listing and management platform for Ugandan real estate agents.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Vue.js</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Inertia.js</span>
                            </div>
                            <router-link to="/portfolio/real-estate-platform" class="hb-btn hb-btn-primary text-xs px-3 py-1.5">
                                View Project
                            </router-link>
                        </div>
                    </div>
                    
                    <!-- Project 3 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600"></div>
                        <div class="p-6">
                            <h3 class="text-color-primary font-serif text-xl mb-2">API Integration Hub</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Seamlessly connect legacy systems with modern APIs for streamlined business operations.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">REST API</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">JSON</span>
                            </div>
                            <router-link to="/portfolio/api-integration" class="hb-btn hb-btn-primary text-xs px-3 py-1.5">
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
                <h2 class="text-2xl font-serif text-white mb-4">Interested in working together?</h2>
                <p class="text-text-lighter mb-6 max-w-2xl mx-auto">
                    Let's build something amazing for your business. First consultation is always free.
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
    name: 'Portfolio'
}
</script>

<style scoped>
.color-primary { color: #003885; }
.text-gray-600 { color: #666; }
</style>
