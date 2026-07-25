<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-hero-section min-h-[60vh] flex items-center justify-center">
            <div class="hb-hero-bg"></div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">Blog</p>
                <h1 class="hb-hero-title">Article Not Found</h1>
                <p class="hb-hero-description">
                    This article doesn't exist or the URL may be incorrect. Please check the URL or browse our available articles.
                </p>
            </div>
        </section>

        <!-- Not Found Content -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="max-w-2xl mx-auto text-center">
                    <router-link to="/blog" class="hb-btn hb-btn-light mb-8 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Back to Blog
                    </router-link>
                    
                    <div class="hb-card">
                        <h2 class="hb-section-title mb-4">Available Articles</h2>
                        <p class="text-text-muted mb-6">
                            Browse through my collection of articles covering software development, 
                            business solutions, and technology insights for Ugandan businesses.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <router-link to="/blog" class="hb-btn hb-btn-primary">
                                View All Articles
                            </router-link>
                            <router-link to="/contact" class="hb-btn hb-btn-light">
                                Contact Me
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { onMounted } from 'vue'
import { useRoute } from 'vue-router'

export default {
    name: 'BlogPost',
    setup() {
        const route = useRoute()
        
        onMounted(() => {
            // You can fetch post details based on route.params.slug here
            // For now, we just show a not found message
        })
        
        return {
            route
        }
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
    
    .flex.sm\:flex-row {
        flex-direction: column;
    }
    
    .hb-btn {
        width: 100%;
        text-align: center;
    }
    
    .flex.sm\:flex-row {
        flex-direction: column;
    }
}
</style>
