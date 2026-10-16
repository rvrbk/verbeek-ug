<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section id="hero" class="hb-section hb-hero-section min-h-screen flex items-center justify-center">
            <div class="hb-hero-bg">
                <svg viewBox="0 0 1440 900" preserveAspectRatio="xMidYMid slice" class="hb-hero-svg">
                    <line x1="0" y1="600" x2="400" y2="0" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="400" y1="0" x2="800" y2="300" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="800" y1="300" x2="1200" y2="0" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="1200" y1="0" x2="1440" y2="300" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="0" y1="900" x2="600" y2="300" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="600" y1="300" x2="1000" y2="900" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="1000" y1="900" x2="1440" y2="600" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <circle cx="400" cy="0" r="8" fill="#f5ab8b"/>
                    <circle cx="800" cy="300" r="8" fill="#f5ab8b"/>
                    <circle cx="1200" cy="0" r="8" fill="#f5ab8b"/>
                    <circle cx="1440" cy="300" r="8" fill="#f5ab8b"/>
                    <circle cx="0" cy="600" r="8" fill="#f5ab8b"/>
                    <circle cx="600" cy="300" r="8" fill="#f5ab8b"/>
                    <circle cx="1000" cy="900" r="8" fill="#f5ab8b"/>
                    <circle cx="1440" cy="600" r="8" fill="#f5ab8b"/>
                </svg>
            </div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">
                    {{ $t('hero.subtitle') }}
                </p>
                <h1 class="hb-hero-title">
                    {{ $t('hero.title') }}
                </h1>
                <p class="hb-hero-description">
                    {{ $t('hero.description') }}
                </p>
                <div class="hb-hero-actions">
                    <router-link to="/contact" class="hb-btn hb-btn-primary">{{ $t('common.free_consultation') }}</router-link>
                    <router-link to="/portfolio" class="hb-btn hb-btn-ghost">{{ $t('common.view_portfolio') }}</router-link>
                </div>
            </div>
            <div class="hb-collage" aria-hidden="true">
                <div class="hb-collage-item hb-collage-a"><PromptVisual /></div>
                <div class="hb-collage-item hb-collage-b"><CanvasVisual /></div>
            </div>
        </section>

        <!-- Stats -->
        <div class="hb-stats">
            <div class="hb-container hb-stats-grid">
                <div class="hb-stat"><b data-count="20" data-suffix="+">20+</b><span>{{ $t('stats.years') }}</span></div>
                <div class="hb-stat"><b data-count="3">3</b><span>{{ $t('stats.platforms') }}</span></div>
                <div class="hb-stat"><b data-count="10">10</b><span>{{ $t('stats.languages') }}</span></div>
            </div>
        </div>

        <!-- Services overview -->
        <section class="hb-section hb-overview">
            <div class="hb-container">
                <div class="hb-section-header">
                    <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('nav.services') }}</p>
                    <h2 class="hb-section-title">{{ $t('services.hero_title') }}</h2>
                    <p class="hb-section-subtitle">{{ $t('services.hero_description') }}</p>
                </div>
                <div class="hb-overview-grid">
                    <router-link v-for="k in ['business_automation', 'ai_solutions', 'community_systems', 'consultancy']" :key="k" to="/services" class="hb-service-card hb-overview-card">
                        <h3 class="hb-service-title">{{ $t('services.items.' + k + '.title') }}</h3>
                        <p class="hb-service-description">{{ $t('services.items.' + k + '.description') }}</p>
                        <span class="hb-overview-more">{{ $t('common.learn_more') }} &rarr;</span>
                    </router-link>
                </div>
            </div>
        </section>

        <!-- Featured work -->
        <section class="hb-section hb-featured">
            <div class="hb-container">
                <div class="hb-section-header">
                    <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('nav.portfolio') }}</p>
                    <h2 class="hb-section-title">{{ $t('portfolio.hero_title') }}</h2>
                    <p class="hb-section-subtitle">{{ $t('portfolio.hero_description') }}</p>
                </div>
                <div class="hb-work-grid">
                    <router-link v-for="w in [['prompt_tool', 'PromptVisual'], ['collective_canvas', 'CanvasVisual'], ['crowded_airport', 'AirportVisual']]" :key="w[0]" to="/portfolio" class="hb-work-card">
                        <div class="hb-work-visual"><div class="hb-work-scale"><component :is="w[1]" /></div></div>
                        <h3 class="hb-work-title">{{ $t('portfolio.items.' + w[0] + '.title') }}</h3>
                        <p class="hb-work-tagline">{{ $t('portfolio.items.' + w[0] + '.tagline') }}</p>
                    </router-link>
                </div>
                <div class="hb-work-more">
                    <router-link to="/portfolio" class="hb-btn hb-btn-primary">{{ $t('common.view_portfolio') }}</router-link>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section class="hb-section hb-process">
            <div class="hb-container">
                <div class="hb-section-header">
                    <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('process.label') }}</p>
                    <h2 class="hb-section-title">{{ $t('process.title') }}</h2>
                    <p class="hb-section-subtitle">{{ $t('process.subtitle') }}</p>
                </div>
                <ol class="hb-process-grid">
                    <li v-for="n in 4" :key="n" class="hb-process-step">
                        <h3>{{ $t('process.steps.' + (n - 1) + '.title') }}</h3>
                        <p>{{ $t('process.steps.' + (n - 1) + '.text') }}</p>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="hb-section">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('features.section_label') }}</p>
                    <h2 class="hb-section-title">{{ $t('features.section_title') }}</h2>
                    <p class="hb-section-subtitle max-w-2xl mx-auto">
                        {{ $t('features.section_subtitle') }}
                    </p>
                </div>
                <div class="hb-features-grid">
                    <div class="hb-feature-card">
                        <h3 class="hb-feature-title">{{ $t('features.expertise.title') }}</h3>
                        <p class="hb-feature-text">
                            {{ $t('features.expertise.text') }}
                        </p>
                    </div>
                    <div class="hb-feature-card">
                        <h3 class="hb-feature-title">{{ $t('features.experience.title') }}</h3>
                        <p class="hb-feature-text">
                            {{ $t('features.experience.text') }}
                        </p>
                    </div>
                    <div class="hb-feature-card">
                        <h3 class="hb-feature-title">{{ $t('features.support.title') }}</h3>
                        <p class="hb-feature-text">
                            {{ $t('features.support.text') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section hb-cta-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('cta.section_label') }}</p>
                <h2 class="hb-section-title">{{ $t('cta.section_title') }}</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    {{ $t('cta.text') }}
                </p>
                <div class="hb-cta-buttons">
                    <router-link to="/services" class="hb-btn hb-btn-primary">
                        {{ $t('common.view_services') }}
                    </router-link>
                    <router-link to="/portfolio" class="hb-btn hb-btn-primary">
                        {{ $t('common.view_portfolio') }}
                    </router-link>
                    <router-link to="/contact" class="hb-btn hb-btn-primary">
                        {{ $t('common.free_consultation') }}
                    </router-link>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import PromptVisual from '../components/PromptVisual.vue'
import CanvasVisual from '../components/CanvasVisual.vue'
import AirportVisual from '../components/AirportVisual.vue'

export default {
    name: 'Home',
    components: { PromptVisual, CanvasVisual, AirportVisual }
}
</script>

<style scoped>
/* Highbridge Color Palette */
:root {
    --hb-primary: #003885;
    --hb-accent: #f5ab8b;
    --hb-text: #ffffff;
    --hb-text-muted: rgba(255, 255, 255, 0.7);
    --hb-bg: #003885;
}

/* Page Content */
.hb-page-content {
    position: relative;
    z-index: 1;
}

/* Sections */
.hb-section {
    padding: 6rem 0;
    position: relative;
}

/* Hero Section */
.hb-hero-section {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    padding-top: 4rem;
}

.hb-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
}

.hb-hero-svg {
    width: 120%;
    height: 120%;
    object-fit: cover;
}

.hb-hero-content {
    max-width: 800px;
    padding: 0 2rem;
}

.hb-hero-subtitle {
    color: var(--hb-text-muted);
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
    letter-spacing: 0.1em;
}

.hb-hero-title {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 400;
    line-height: 1.2;
    color: var(--hb-text);
    margin-bottom: 1.5rem;
    letter-spacing: -0.01em;
}

.hb-hero-description {
    font-size: 1.125rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
    max-width: 700px;
    margin: 0 auto;
}

/* Section Header */
.hb-section-header {
    margin-bottom: 4rem;
}

.hb-section-label {
    color: var(--hb-text-muted);
    font-size: 0.875rem;
    margin-bottom: 0.75rem;
    letter-spacing: 0.1em;
}

.hb-section-title {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: clamp(1.75rem, 3vw, 2.25rem);
    font-weight: 400;
    line-height: 1.2;
    color: var(--hb-text);
    margin-bottom: 1rem;
    letter-spacing: -0.01em;
}

.hb-section-subtitle {
    font-size: 1rem;
    line-height: 1.6;
    color: var(--hb-text-muted);
}

/* Container */
.hb-container {
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Services Grid */
.hb-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.hb-service-card {
    padding: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    background-color: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.hb-service-card:hover {
    background-color: rgba(255, 255, 255, 0.08);
}

.hb-service-title {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 1.25rem;
    font-weight: 400;
    color: var(--hb-text);
    margin-bottom: 0.75rem;
    letter-spacing: -0.01em;
}

.hb-service-description {
    font-size: 0.95rem;
    line-height: 1.6;
    color: var(--hb-text-muted);
    margin-bottom: 1.5rem;
}

.hb-service-link {
    display: inline-block;
    color: var(--hb-accent);
    font-size: 0.875rem;
    font-weight: 500;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    transition: all 0.2s ease;
    padding: 0.5rem 1rem;
    background-color: rgba(245, 171, 139, 0.15);
    border: 1px solid var(--hb-accent);
}

.hb-service-link:hover {
    color: var(--hb-text);
    background-color: rgba(245, 171, 139, 0.25);
}

/* Portfolio Grid */
.hb-portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.hb-portfolio-item {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    overflow: hidden;
    transition: all 0.3s ease;
}

.hb-portfolio-item:hover {
    background-color: rgba(255, 255, 255, 0.08);
}

.hb-portfolio-image {
    height: 200px;
    background-size: cover;
    background-position: center;
}

.hb-portfolio-image-1 {
    background: linear-gradient(135deg, #003885 0%, #0050a0 100%);
}

.hb-portfolio-image-2 {
    background: linear-gradient(135deg, #0050a0 0%, #003885 100%);
}

.hb-portfolio-content {
    padding: 1.5rem;
}

.hb-portfolio-title {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 1.25rem;
    font-weight: 400;
    color: var(--hb-text);
    margin-bottom: 0.75rem;
    letter-spacing: -0.01em;
}

.hb-portfolio-description {
    font-size: 0.95rem;
    line-height: 1.6;
    color: var(--hb-text-muted);
    margin-bottom: 1.25rem;
}

/* About Section */
.hb-about-content {
    padding: 2rem 0;
}

.hb-about-text {
    font-size: 1.125rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
}

/* Testimonials Section - Legacy */
.hb-testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.hb-testimonial-card {
    padding: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.hb-testimonial-card:hover {
    background-color: rgba(255, 255, 255, 0.03);
}

.hb-testimonial-content {
    margin-bottom: 1.5rem;
}

.hb-testimonial-text {
    font-size: 1rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
    font-style: italic;
}

.hb-testimonial-author {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.hb-testimonial-name {
    font-size: 0.95rem;
    font-weight: 500;
    color: var(--hb-text);
    margin: 0;
}

.hb-testimonial-company {
    font-size: 0.875rem;
    color: var(--hb-text-muted);
    margin: 0;
}

/* Features Section */
.hb-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.hb-feature-card {
    padding: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    background-color: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.hb-feature-card:hover {
    background-color: rgba(255, 255, 255, 0.08);
}

.hb-feature-title {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 1.25rem;
    font-weight: 400;
    color: var(--hb-text);
    margin-bottom: 1rem;
    letter-spacing: -0.01em;
}

.hb-feature-text {
    font-size: 1rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
}

/* CTA Section */
.hb-cta-section {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.hb-cta-text {
    font-size: 1.125rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
    margin-bottom: 2rem;
}

.hb-cta-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}

/* Buttons */
.hb-btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    font-size: 0.875rem;
    font-weight: 500;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 0;
    transition: all 0.2s ease;
    cursor: pointer;
    border: 1px solid transparent;
}

.hb-btn-primary {
    background-color: rgba(255, 255, 255, 0.15);
    color: var(--hb-text);
    border: 1px solid var(--hb-text);
}

.hb-btn-primary:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: var(--hb-primary);
    border-color: #ffffff;
}

.hb-btn-light {
    background-color: transparent;
    color: var(--hb-text);
    border: 1px solid var(--hb-text);
}

.hb-btn-light:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: var(--hb-primary);
    border-color: var(--hb-text);
}

/* Responsive */
@media (max-width: 768px) {
    .hb-section {
        padding: 4rem 0;
    }
    
    .hb-hero-title {
        font-size: 2rem;
    }
    
    .hb-services-grid {
        grid-template-columns: 1fr;
    }
    
    .hb-portfolio-grid {
        grid-template-columns: 1fr;
    }
    
    .hb-hero-bg {
        opacity: 0.5;
    }
}

@media (max-width: 480px) {
    .hb-hero-title {
        font-size: 1.75rem;
    }
    
    .hb-section-title {
        font-size: 1.75rem;
    }
    
    .hb-contact-buttons {
        flex-direction: column;
    }
    
    .hb-btn {
        width: 100%;
        text-align: center;
    }
}
</style>

