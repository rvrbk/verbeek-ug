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
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">Services</p>
                <h1 class="hb-hero-title">How I Can Help Your Business</h1>
                <p class="hb-hero-description">
                    From warehouse management for farmers to real estate platforms for agents, 
                    I build custom software solutions tailored to Ugandan businesses.
                </p>
            </div>
        </section>

        <!-- Services Content -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="hb-services-grid-large">
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">Warehouse Management</h3>
                        <p class="hb-service-description">
                            Track inventory, reduce waste, and increase profits for small farmers in Uganda. 
                            Modern solutions for agricultural businesses.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Get a Quote
                        </router-link>
                    </div>
                    
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">Real Estate Apps</h3>
                        <p class="hb-service-description">
                            List, manage, and sell properties online with custom real estate platforms. 
                            Funda-inspired solutions for agents.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Get a Quote
                        </router-link>
                    </div>
                    
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">API Integrations</h3>
                        <p class="hb-service-description">
                            Connect your legacy systems and tools seamlessly for better efficiency. 
                            Modern API solutions.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Get a Quote
                        </router-link>
                    </div>
                    
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">Headless Web Apps</h3>
                        <p class="hb-service-description">
                            Fast, secure, and future-proof solutions that scale with your business. 
                            Laravel + Vue.js expertise.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Get a Quote
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">Next Steps</p>
                <h2 class="hb-section-title">Ready to get started?</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    Let's discuss which service is right for your business. First consultation is always free.
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-light hb-cta-btn">
                    Get a Free Consultation
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Services'
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
.hb-hero-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; }
.hb-hero-svg { width: 120%; height: 120%; object-fit: cover; }
.hb-hero-content { max-width: 800px; padding: 0 2rem; }
.hb-hero-subtitle { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 1.5rem; letter-spacing: 0.1em; }
.hb-hero-title { font-family: Georgia, serif; font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; letter-spacing: -0.01em; }
.hb-hero-description { font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); max-width: 700px; margin: 0 auto; }
.hb-section-label { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 0.75rem; letter-spacing: 0.1em; }
.hb-section-title { font-family: Georgia, serif; font-size: clamp(1.75rem, 3vw, 2.25rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1rem; letter-spacing: -0.01em; }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-services-grid-large { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem; }
.hb-service-card { padding: 2rem; border-top: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease; }
.hb-service-card:hover { background-color: rgba(255, 255, 255, 0.03); }
.hb-service-title { font-family: Georgia, serif; font-size: 1.25rem; font-weight: 400; color: var(--hb-text); margin-bottom: 0.75rem; letter-spacing: -0.01em; }
.hb-service-description { font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1.5rem; }
.hb-service-link { display: inline-block; color: var(--hb-accent); font-size: 0.875rem; font-weight: 500; letter-spacing: 0.02em; text-transform: uppercase; transition: all 0.2s ease; }
.hb-service-link:hover { color: var(--hb-text); }
.hb-cta-text { font-size: 1rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-cta-btn { margin-top: 1rem; }
.hb-btn { display: inline-block; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; border-radius: 0; transition: all 0.2s ease; cursor: pointer; border: 1px solid transparent; }
.hb-btn-light { background-color: transparent; color: var(--hb-text); border: 1px solid var(--hb-text); }
.hb-btn-light:hover { background-color: var(--hb-text); color: var(--hb-primary); }
@media (max-width: 768px) { .hb-section { padding: 4rem 0; } .hb-services-grid-large { grid-template-columns: 1fr; } .hb-hero-bg { opacity: 0.5; } }
@media (max-width: 480px) { .hb-hero-title { font-size: 1.75rem; } .hb-section-title { font-size: 1.75rem; } }
</style>
