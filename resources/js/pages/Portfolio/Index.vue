<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-section hb-hero-section min-h-[50vh] flex items-center justify-center">
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
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">Portfolio</p>
                <h1 class="hb-hero-title">My Work</h1>
                <p class="hb-hero-description">
                    See how I've helped Ugandan businesses transform their operations with custom software solutions.
                </p>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="hb-portfolio-grid">
                    <!-- Project 1 -->
                    <div class="hb-portfolio-item">
                        <div class="hb-portfolio-image hb-portfolio-image-1"></div>
                        <div class="hb-portfolio-content">
                            <h3 class="hb-portfolio-title">Warehouse Management System</h3>
                            <p class="hb-portfolio-description">
                                Custom inventory tracking system for Ugandan farmers to manage stock across multiple warehouse locations, reduce waste, and increase profits.
                            </p>
                            <div class="hb-portfolio-tags">
                                <span class="hb-tag">Inventory</span>
                                <span class="hb-tag">Farming</span>
                                <span class="hb-tag">Warehouse</span>
                            </div>
                            <router-link to="/portfolio/warehouse-management" class="hb-btn hb-btn-primary hb-portfolio-btn">
                                View Project
                            </router-link>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="hb-portfolio-item">
                        <div class="hb-portfolio-image hb-portfolio-image-2"></div>
                        <div class="hb-portfolio-content">
                            <h3 class="hb-portfolio-title">Real Estate Platform</h3>
                            <p class="hb-portfolio-description">
                                Property listing and management platform for Ugandan real estate agents to showcase, manage, and sell properties online.
                            </p>
                            <div class="hb-portfolio-tags">
                                <span class="hb-tag">Properties</span>
                                <span class="hb-tag">Listings</span>
                                <span class="hb-tag">Real Estate</span>
                            </div>
                            <router-link to="/portfolio/real-estate-platform" class="hb-btn hb-btn-primary hb-portfolio-btn">
                                View Project
                            </router-link>
                        </div>
                    </div>
                    
                    <!-- Project 3 -->
                    <div class="hb-portfolio-item">
                        <div class="hb-portfolio-image hb-portfolio-image-3"></div>
                        <div class="hb-portfolio-content">
                            <h3 class="hb-portfolio-title">Airport Information Platform</h3>
                            <p class="hb-portfolio-description">
                                Crowdsourced airport navigation system helping travelers worldwide find amenities, facilities, and services at any airport.
                            </p>
                            <div class="hb-portfolio-tags">
                                <span class="hb-tag">Airports</span>
                                <span class="hb-tag">Travel</span>
                                <span class="hb-tag">Navigation</span>
                            </div>
                            <router-link to="/portfolio/airport-platform" class="hb-btn hb-btn-primary hb-portfolio-btn">
                                View Project
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">Interested?</p>
                <h2 class="hb-section-title">Have a project in mind?</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    Let's discuss how I can create a custom solution for your business. First consultation is free.
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-light hb-cta-btn">
                    Get Started
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
:root {
    --hb-primary: #003885;
    --hb-accent: #f5ab8b;
    --hb-text: #ffffff;
    --hb-text-muted: rgba(255, 255, 255, 0.7);
}

.hb-page-content { position: relative; z-index: 1; }
.hb-section { padding: 6rem 0; position: relative; }
.hb-hero-section { min-height: 50vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
.hb-hero-content { max-width: 800px; padding: 0 2rem; }
.hb-hero-subtitle { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 1.5rem; letter-spacing: 0.1em; }
.hb-hero-title { font-family: Georgia, serif; font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; letter-spacing: -0.01em; }
.hb-hero-description { font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); max-width: 700px; margin: 0 auto; }
.hb-section-label { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 0.75rem; letter-spacing: 0.1em; }
.hb-section-title { font-family: Georgia, serif; font-size: clamp(1.75rem, 3vw, 2.25rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1rem; letter-spacing: -0.01em; }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-portfolio-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; }
.hb-portfolio-item { background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); overflow: hidden; transition: all 0.3s ease; }
.hb-portfolio-item:hover { background-color: rgba(255, 255, 255, 0.08); }
.hb-portfolio-image { height: 200px; background-size: cover; background-position: center; }
.hb-portfolio-image-1 { background: linear-gradient(135deg, #003885 0%, #0050a0 100%); }
.hb-portfolio-image-2 { background: linear-gradient(135deg, #0050a0 0%, #003885 100%); }
.hb-portfolio-image-3 { background: linear-gradient(135deg, #003885 0%, #0060a0 100%); }
.hb-portfolio-image-4 { background: linear-gradient(135deg, #0060a0 0%, #003885 100%); }
.hb-portfolio-image-5 { background: linear-gradient(135deg, #003885 0%, #0070a0 100%); }
.hb-portfolio-image-6 { background: linear-gradient(135deg, #0070a0 0%, #003885 100%); }
.hb-portfolio-content { padding: 1.5rem; }
.hb-portfolio-title { font-family: Georgia, serif; font-size: 1.25rem; font-weight: 400; color: var(--hb-text); margin-bottom: 0.75rem; letter-spacing: -0.01em; }
.hb-portfolio-description { font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1rem; }
.hb-portfolio-tags { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.25rem; }
.hb-tag { font-size: 0.75rem; padding: 0.25rem 0.75rem; background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); color: var(--hb-text-muted); border-radius: 2px; }
.hb-portfolio-btn { margin-top: 0.5rem; }
.hb-cta-text { font-size: 1rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-cta-btn { margin-top: 1rem; }
.hb-btn { display: inline-block; padding: 0.5rem 1rem; font-size: 0.75rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; border-radius: 0; transition: all 0.2s ease; cursor: pointer; border: 1px solid transparent; }
.hb-btn-primary { background-color: var(--hb-text); color: var(--hb-primary); }
.hb-btn-primary:hover { background-color: rgba(255, 255, 255, 0.2); color: var(--hb-primary); border-color: var(--hb-text); }
.hb-btn-light { background-color: transparent; color: var(--hb-text); border: 1px solid var(--hb-text); }
.hb-btn-light:hover { background-color: rgba(255, 255, 255, 0.2); color: var(--hb-primary); border-color: var(--hb-text); }
@media (max-width: 768px) { .hb-section { padding: 4rem 0; } .hb-portfolio-grid { grid-template-columns: 1fr; } .hb-hero-bg { opacity: 0.5; } }
@media (max-width: 480px) { .hb-hero-title { font-size: 1.75rem; } .hb-section-title { font-size: 1.75rem; } }
</style>
