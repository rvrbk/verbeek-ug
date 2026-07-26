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
                technologies: ['Inventory Management', 'Farming', 'Warehouse Operations'],
                description: 'A comprehensive warehouse management system designed specifically for small-scale farmers in Uganda. This application allows farmers to track their inventory across multiple warehouse locations, monitor stock levels, and generate detailed reports.',
                challenges: 'The client was struggling with manual inventory tracking which led to significant losses due to spoilage and misplaced stock. They needed a digital solution that was affordable, easy to use on mobile devices, and could work with intermittent internet connectivity.',
                solution: 'I built a custom web application with features like barcode scanning, low-stock alerts, expiry date tracking, and offline-first design. The interface was designed to be intuitive for users with limited technical experience.',
                results: 'Inventory losses reduced by 30% within the first 3 months of implementation. The client reported improved efficiency in stock management and better decision-making based on real-time data. The system is now being used across 5 warehouse locations with over 20 staff members.'
            },
            'real-estate-platform': {
                title: 'Real Estate Platform',
                tagline: 'Property listing and management for agents',
                fromColor: 'from-blue-400',
                toColor: 'to-blue-600',
                technologies: ['Property Listings', 'Real Estate', 'Online Sales'],
                description: 'A modern property listing and management platform designed for real estate agents in Uganda. The platform allows agents to list properties, manage client inquiries, and track sales performance.',
                challenges: 'Real estate agents in Uganda lacked a centralized platform to showcase their properties. They were relying on scattered listings across various platforms, making it difficult to manage and track leads effectively.',
                solution: 'I developed a full-featured real estate platform with property search and filtering, high-quality image galleries, virtual tours, lead management, and analytics. The platform includes a mobile-responsive design and integration with WhatsApp for instant client communication.',
                results: 'Property listing views increased by 40% within the first month. The client reported a 25% increase in qualified leads and a streamlined sales process. The platform now hosts over 500 active property listings.'
            },
            'airport-platform': {
                title: 'Airport Information Platform',
                tagline: 'Crowdsourced airport navigation for travelers',
                fromColor: 'from-purple-400',
                toColor: 'to-purple-600',
                technologies: ['Airport Navigation', 'Travel Information', 'Crowdsourcing'],
                description: 'A crowdsourced airport information platform that helps travelers worldwide find amenities, facilities, and services at any airport. Users can search for airports and find information about restaurants, shops, restrooms, gates, and other airport facilities.',
                challenges: 'Travelers often struggle to find specific amenities and services at unfamiliar airports. Existing solutions were either incomplete or required extensive manual data entry. The challenge was creating a system that could crowdsource reliable information from travelers worldwide.',
                solution: 'I built a platform that allows users to contribute and verify airport information. The system includes a verification mechanism where information added by multiple users is marked as reliable. Users can search by airport name, code, or location, and find detailed information with interactive maps.',
                results: 'The platform now covers over 50 major airports worldwide with thousands of verified amenities. User engagement is high with travelers actively contributing and verifying information, creating a self-sustaining ecosystem of up-to-date airport data.'
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
