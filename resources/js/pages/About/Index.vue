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
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">About Me</p>
                <h1 class="hb-hero-title">Who I Am</h1>
                <p class="hb-hero-description">
                    I'm Rik Verbeek, a software developer based in Kampala, Uganda. I specialize in building custom web applications that solve real business problems.
                </p>
            </div>
        </section>

        <!-- About Content -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <div class="hb-about-grid">
                        <!-- My Story -->
                        <div class="hb-about-card">
                            <h2 class="hb-about-card-title">My Story</h2>
                            <p class="hb-about-text">
                                With several years of experience in web development, I've worked with businesses across Uganda to create custom software solutions. My journey started with a passion for solving problems through technology, and I've since helped numerous clients transform their operations through tailored web applications.
                            </p>
                            <p class="hb-about-text">
                                I specialize in Laravel and Vue.js development, with expertise in building headless architectures, RESTful APIs, and progressive web applications. Whether you need a simple website or a complex enterprise solution, I can help bring your vision to life.
                            </p>
                        </div>
                        
                        <!-- Expertise -->
                        <div class="hb-about-card">
                            <h2 class="hb-about-card-title">My Expertise</h2>
                            <div class="hb-expertise-grid">
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                    <span>Laravel</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                    <span>Vue.js</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span>APIs</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    <span>Headless</span>
                                </div>
                                <div class="hb-expertise-item">
                                    <svg class="hb-expertise-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Database</span>
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
                <p class="hb-section-label text-sm tracking-widest uppercase">Let's Talk</p>
                <h2 class="hb-section-title">Let's work together</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    Have a project in mind? Let's discuss how I can help your business grow with custom software.
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-light hb-cta-btn">
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
    background-color: var(--hb-text);
    color: var(--hb-primary);
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

