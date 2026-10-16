<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-section hb-hero-section min-h-[60vh] flex items-center justify-center">
            <div class="hb-hero-bg">
                <svg viewBox="0 0 1440 600" preserveAspectRatio="xMidYMid slice" class="hb-hero-svg">
                    <line x1="0" y1="400" x2="400" y2="0" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="400" y1="0" x2="800" y2="200" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="800" y1="200" x2="1200" y2="0" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="1200" y1="0" x2="1440" y2="200" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <circle cx="400" cy="0" r="6" fill="#f5ab8b"/>
                    <circle cx="800" cy="200" r="6" fill="#f5ab8b"/>
                    <circle cx="1200" cy="0" r="6" fill="#f5ab8b"/>
                    <circle cx="1440" cy="200" r="6" fill="#f5ab8b"/>
                    <circle cx="0" cy="400" r="6" fill="#f5ab8b"/>
                </svg>
            </div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">{{ $t('about.hero_subtitle') }}</p>
                <h1 class="hb-hero-title">{{ $t('about.hero_title') }}</h1>
                <p class="hb-hero-description">
                    {{ $t('about.hero_description') }}
                </p>
            </div>
        </section>

        <!-- About Content -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <div class="hb-about-grid">
                        <!-- Our Story -->
                        <div class="hb-about-card">
                            <h2 class="hb-about-card-title">{{ $t('about.story_title') }}</h2>
                            <p class="hb-about-text">
                                {{ $t('about.story_text1') }}
                            </p>
                            <p class="hb-about-text">
                                {{ $t('about.story_text2') }}
                            </p>
                        </div>
                        
                        <!-- Expertise -->
                        <div class="hb-about-card">
                            <h2 class="hb-about-card-title">{{ $t('about.expertise_title') }}</h2>
                            <div class="hb-expertise-grid">
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $t('about.expertise_items.business_automation') }}</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                    <span>{{ $t('about.expertise_items.ai_solutions') }}</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.28-1.25-.743-1.676M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.28-1.25.743-1.676M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 0c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                    <span>{{ $t('about.expertise_items.community_solutions') }}</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                    <span>{{ $t('about.expertise_items.consultancy') }}</span>
                                </div>
                            <div class="hb-expertise-note">
                                <p>{{ $t('about.expertise_note') }}</p>
                                <router-link to="/contact" class="hb-expertise-link">{{ $t('common.free_consultation') }} &rarr;</router-link>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('cta.section_label') }}</p>
                <h2 class="hb-section-title">{{ $t('cta.section_title') }}</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    {{ $t('about.cta_text') }}
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-primary hb-cta-btn">
                    {{ $t('contact.connect_title') }}
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
/* Highbridge Color Palette */
:root {
    --hb-primary: #003885;
    --hb-accent: #f5ab8b;
    --hb-text: #ffffff;
    --hb-text-muted: rgba(255, 255, 255, 0.7);
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
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
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
    font-size: clamp(2rem, 4vw, 2.75rem);
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

/* Container */
.hb-container {
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* About Grid */
.hb-about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.hb-about-card {
    padding: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.hb-about-card-title {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 1.5rem;
    font-weight: 400;
    color: var(--hb-text);
    margin-bottom: 1.5rem;
    letter-spacing: -0.01em;
}

.hb-about-text {
    font-size: 0.95rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
    margin-bottom: 1rem;
}

/* Expertise Grid */
.hb-expertise-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.hb-expertise-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.9rem;
    color: var(--hb-text-muted);
}

.hb-expertise-icon {
    width: 20px;
    height: 20px;
    color: var(--hb-accent);
}

/* CTA Text */
.hb-cta-text {
    font-size: 1rem;
    line-height: 1.6;
    color: var(--hb-text-muted);
    margin-bottom: 2rem;
}

.hb-cta-btn {
    margin-top: 1rem;
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
    
    .hb-about-grid {
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
}
</style>

