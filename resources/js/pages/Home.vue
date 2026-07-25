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
                    Custom Software Solutions
                </p>
                <h1 class="hb-hero-title">
                    Custom Software Solutions for Ugandan Businesses
                </h1>
                <p class="hb-hero-description">
                    I build tailored web applications to help small businesses in Uganda grow. 
                    From warehouse management to real estate platforms, I turn your challenges into digital solutions.
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="hb-section">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="hb-section-label text-sm tracking-widest uppercase">What I Offer</p>
                    <h2 class="hb-section-title">How I Can Help Your Business</h2>
                    <p class="hb-section-subtitle max-w-2xl mx-auto">
                        From warehouse management for farmers to real estate platforms for agents, 
                        I build custom software solutions tailored to Ugandan businesses.
                    </p>
                </div>
                <div class="hb-services-grid">
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">Warehouse Management</h3>
                        <p class="hb-service-description">
                            Track inventory, reduce waste, and increase profits for small farmers in Uganda.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Learn More
                        </router-link>
                    </div>
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">Real Estate Apps</h3>
                        <p class="hb-service-description">
                            List, manage, and sell properties online with custom real estate platforms.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Learn More
                        </router-link>
                    </div>
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">API Integrations</h3>
                        <p class="hb-service-description">
                            Connect your legacy systems and tools seamlessly for better efficiency.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Learn More
                        </router-link>
                    </div>
                    <div class="hb-service-card">
                        <h3 class="hb-service-title">Headless Web Apps</h3>
                        <p class="hb-service-description">
                            Fast, secure, and future-proof solutions that scale with your business.
                        </p>
                        <router-link to="/contact" class="hb-service-link">
                            Learn More
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="hb-section">
            <div class="hb-container">
                <div class="hb-section-header text-center">
                    <p class="hb-section-label text-sm tracking-widest uppercase">Featured Projects</p>
                    <h2 class="hb-section-title">My Work</h2>
                    <p class="hb-section-subtitle max-w-2xl mx-auto">
                        See how I've helped Ugandan businesses transform their operations with custom software solutions.
                    </p>
                </div>
                <div class="hb-portfolio-grid">
                    <div class="hb-portfolio-item">
                        <div class="hb-portfolio-image hb-portfolio-image-1"></div>
                        <div class="hb-portfolio-content">
                            <h3 class="hb-portfolio-title">Warehouse Management System</h3>
                            <p class="hb-portfolio-description">
                                Custom Laravel + Vue.js system for Ugandan farmers to track inventory across multiple locations.
                            </p>
                            <router-link to="/portfolio/warehouse-management" class="hb-btn hb-btn-primary">
                                View Details
                            </router-link>
                        </div>
                    </div>
                    <div class="hb-portfolio-item">
                        <div class="hb-portfolio-image hb-portfolio-image-2"></div>
                        <div class="hb-portfolio-content">
                            <h3 class="hb-portfolio-title">Real Estate Platform</h3>
                            <p class="hb-portfolio-description">
                                Funda-inspired property listing and management platform for Ugandan real estate agents.
                            </p>
                            <router-link to="/portfolio/real-estate-platform" class="hb-btn hb-btn-primary">
                                View Details
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="hb-section">
            <div class="hb-container">
                <div class="hb-about-content max-w-3xl mx-auto text-center">
                    <p class="hb-section-label text-sm tracking-widest uppercase">About Me</p>
                    <h2 class="hb-section-title">Who I Am</h2>
                    <p class="hb-about-text">
                        I'm Rik Verbeek, a software developer based in Kampala, Uganda. I specialize in building custom web applications that solve real business problems. With expertise in Laravel, Vue.js, and headless architectures, I create fast, secure, and scalable solutions.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="hb-section">
            <div class="hb-container">
                <div class="hb-contact-content max-w-3xl mx-auto text-center">
                    <p class="hb-section-label text-sm tracking-widest uppercase">Get In Touch</p>
                    <h2 class="hb-section-title">Ready to Transform Your Business?</h2>
                    <p class="hb-contact-text">
                        Let's discuss how custom software can solve your unique challenges. First consultation is always free.
                    </p>
                    <div class="hb-contact-buttons">
                        <router-link to="/contact" class="hb-btn hb-btn-primary">
                            Get a Free Consultation
                        </router-link>
                        <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="hb-btn hb-btn-light">
                            Book a Call
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Home'
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
    min-height: 100vh;
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
    transition: all 0.3s ease;
}

.hb-service-card:hover {
    background-color: rgba(255, 255, 255, 0.03);
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
}

.hb-service-link:hover {
    color: var(--hb-text);
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

/* Contact Section */
.hb-contact-content {
    padding: 2rem 0;
}

.hb-contact-text {
    font-size: 1.125rem;
    line-height: 1.7;
    color: var(--hb-text-muted);
    margin-bottom: 2rem;
}

.hb-contact-buttons {
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
    background-color: var(--hb-text);
    color: var(--hb-primary);
}

.hb-btn-primary:hover {
    background-color: rgba(255, 255, 255, 0.9);
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

