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
                <p class="text-text-soft-light text-sm tracking-widest uppercase mb-6">About Me</p>
                <h1 class="hb-hero h1">Who I Am</h1>
                <p class="hb-hero p">
                    I'm Rik Verbeek, a software developer based in Kampala, Uganda. I specialize in building custom web applications that solve real business problems.
                </p>
            </div>
        </section>

        <!-- About Content -->
        <section class="hb-content-section light">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12">
                        <!-- My Story -->
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h2 class="text-color-primary font-serif text-2xl mb-6">My Story</h2>
                            <p class="text-gray-600 mb-4">
                                With several years of experience in web development, I've worked with businesses across Uganda to create custom software solutions. My journey started with a passion for solving problems through technology, and I've since helped numerous clients transform their operations through tailored web applications.
                            </p>
                            <p class="text-gray-600 mb-4">
                                I specialize in Laravel and Vue.js development, with expertise in building headless architectures, RESTful APIs, and progressive web applications. Whether you need a simple website or a complex enterprise solution, I can help bring your vision to life.
                            </p>
                        </div>
                        
                        <!-- Expertise -->
                        <div class="bg-bg-light-gray p-8 rounded-lg">
                            <h2 class="text-color-primary font-serif text-2xl mb-6">My Expertise</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                    <span class="text-gray-700">Laravel</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                    <span class="text-gray-700">Vue.js</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span class="text-gray-700">APIs</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    <span class="text-gray-700">Headless</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-700">Database</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-content-section navy">
            <div class="hb-container text-center">
                <h2 class="text-2xl font-serif text-white mb-4">Let's work together</h2>
                <p class="text-text-lighter mb-6 max-w-2xl mx-auto">
                    Have a project in mind? Let's discuss how I can help your business grow with custom software.
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-light">
                    Get in Touch
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'About'
}
</script>

<style scoped>
.color-primary { color: #003885; }
.text-gray-700 { color: #555; }
.text-gray-600 { color: #666; }
.bg-bg-light-gray { background-color: #f5f5f5; }
</style>
