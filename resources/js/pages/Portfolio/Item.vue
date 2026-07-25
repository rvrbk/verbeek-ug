<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-hero-section min-h-[50vh] flex items-center justify-center">
            <div class="hb-hero-bg"></div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">Project</p>
                <h1 class="hb-hero-title">{{ project.title }}</h1>
                <p class="hb-hero-description">{{ project.tagline }}</p>
            </div>
        </section>

        <!-- Project Details -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <!-- Project Image -->
                    <div class="mb-8">
                        <div class="h-96 rounded-lg" :class="gradientClass"></div>
                    </div>
                    
                    <!-- Project Meta -->
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span v-for="tech in project.technologies" :key="tech" class="hb-tag">{{ tech }}</span>
                    </div>
                    
                    <!-- Project Description -->
                    <div class="space-y-6">
                        <div>
                            <h2 class="hb-section-title text-left mb-4">Overview</h2>
                            <p class="text-text-muted">{{ project.description }}</p>
                        </div>
                        
                        <div class="mt-8">
                            <h2 class="hb-section-title text-left mb-4">Challenges</h2>
                            <p class="text-text-muted">{{ project.challenges }}</p>
                        </div>
                        
                        <div class="mt-8">
                            <h2 class="hb-section-title text-left mb-4">Solution</h2>
                            <p class="text-text-muted">{{ project.solution }}</p>
                        </div>
                        
                        <div class="mt-8">
                            <h2 class="hb-section-title text-left mb-4">Results</h2>
                            <p class="text-text-muted">{{ project.results }}</p>
                        </div>
                    </div>
                    
                    <!-- Back Link -->
                    <div class="mt-12 text-center">
                        <router-link to="/portfolio" class="hb-btn hb-btn-light">
                            &larr; Back to Portfolio
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">Need Help?</p>
                <h2 class="hb-section-title">Need a similar solution?</h2>
                <p class="hb-section-subtitle max-w-2xl mx-auto">
                    Let's discuss how I can build something custom for your business.
                </p>
                <div class="mt-8">
                    <router-link to="/contact" class="hb-btn hb-btn-primary">
                        Get a Free Consultation
                    </router-link>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { ref, computed } from 'vue'
import { useRoute } from 'vue-router'

export default {
    name: 'PortfolioItem',
    setup() {
        const route = useRoute()
        
        const projects = {
            'warehouse-management': {
                title: 'Warehouse Management System',
                tagline: 'Inventory tracking for Ugandan farmers',
                fromColor: 'from-orange-400',
                toColor: 'to-orange-600',
                technologies: ['Laravel', 'Vue.js', 'MySQL', 'Sanctum API'],
                description: 'A comprehensive warehouse management system designed specifically for small-scale farmers in Uganda. This application allows farmers to track their inventory across multiple warehouse locations, monitor stock levels, and generate detailed reports.',
                challenges: 'The client was struggling with manual inventory tracking which led to significant losses due to spoilage and misplaced stock. They needed a digital solution that was affordable, easy to use on mobile devices, and could work with intermittent internet connectivity.',
                solution: 'I built a progressive web application using Laravel as the backend and Vue.js for the frontend. The system includes features like barcode scanning, low-stock alerts, expiry date tracking, and offline-first design. The interface was designed to be intuitive for users with limited technical experience.',
                results: 'Inventory losses reduced by 30% within the first 3 months of implementation. The client reported improved efficiency in stock management and better decision-making based on real-time data. The system is now being used across 5 warehouse locations with over 20 staff members.'
            },
            'real-estate-platform': {
                title: 'Real Estate Platform',
                tagline: 'Property listing and management for agents',
                fromColor: 'from-blue-400',
                toColor: 'to-blue-600',
                technologies: ['Vue.js', 'Laravel', 'Inertia.js', 'PostgreSQL'],
                description: 'A modern property listing and management platform inspired by Funda, designed for real estate agents in Uganda. The platform allows agents to list properties, manage client inquiries, and track sales performance.',
                challenges: 'Real estate agents in Uganda lacked a centralized platform to showcase their properties. They were relying on scattered listings across various platforms, making it difficult to manage and track leads effectively.',
                solution: 'I developed a full-featured real estate platform with property search and filtering, high-quality image galleries, virtual tours, lead management, and analytics. The platform includes a mobile-responsive design and integration with WhatsApp for instant client communication.',
                results: 'Property listing views increased by 40% within the first month. The client reported a 25% increase in qualified leads and a streamlined sales process. The platform now hosts over 500 active property listings.'
            },
            'api-integration': {
                title: 'API Integration Hub',
                tagline: 'Connecting legacy systems with modern APIs',
                fromColor: 'from-purple-400',
                toColor: 'to-purple-600',
                technologies: ['Laravel', 'REST API', 'JSON', 'Queue Workers'],
                description: 'A robust API integration solution that connects the client\'s legacy enterprise systems with modern cloud-based services. This allows for seamless data synchronization between old and new systems without requiring a complete infrastructure overhaul.',
                challenges: 'The client had multiple legacy systems that couldn\'t communicate with each other or with newer cloud services. Manual data entry between systems was time-consuming and error-prone, leading to data inconsistencies.',
                solution: 'I designed a middleware API layer that acts as a bridge between legacy and modern systems. It includes data transformation, validation, error handling, and asynchronous processing. The API supports RESTful endpoints and webhooks for real-time data synchronization.',
                results: 'Data entry time reduced by 60%. The client saved approximately 20 hours per week in manual data processing. Error rates in data consistency dropped to nearly zero, and the system now handles over 10,000 API requests daily.'
            }
        }
        
        const projectId = computed(() => route.params.id)
        const project = computed(() => projects[projectId.value] || projects['warehouse-management'])
        const gradientClass = computed(() => `bg-gradient-to-br ${project.value.fromColor} ${project.value.toColor}`)
        
        return { project, gradientClass }
    }
}
</script>

<style scoped>
/* Highbridge Color Palette */
:root {
    --hb-primary: #003885;
    --hb-accent: #f5ab8b;
    --hb-text: #ffffff;
    --hb-text-muted: rgba(255, 255, 255, 0.7);
}

/* Hero Background */
.hb-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
}

/* Text utility */
.text-text-muted {
    color: var(--hb-text-muted);
}

/* Gradient colors */
.bg-gradient-to-br {
    background: linear-gradient(to bottom right, var(--hb-accent), var(--hb-primary));
}

.from-orange-400.to-orange-600 {
    background: linear-gradient(to bottom right, #fb923c, #ea580c);
}

.from-blue-400.to-blue-600 {
    background: linear-gradient(to bottom right, #60a5fa, #2563eb);
}

.from-purple-400.to-purple-600 {
    background: linear-gradient(to bottom right, #a78bfa, #7c3aed);
}

/* Responsive */
@media (max-width: 768px) {
    .hb-hero-section {
        min-height: 40vh;
    }
    
    .hb-section {
        padding: 4rem 0;
    }
    
    .hb-hero-bg {
        opacity: 0.5;
    }
    
    .hb-section-title {
        font-size: 1.5rem;
    }
    
    .hb-btn {
        width: 100%;
        text-align: center;
    }
}
</style>
