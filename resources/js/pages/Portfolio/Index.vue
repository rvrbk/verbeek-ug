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
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">{{ $t('portfolio.hero_subtitle') }}</p>
                <h1 class="hb-hero-title">{{ $t('portfolio.hero_title') }}</h1>
                <p class="hb-hero-description">
                    {{ $t('portfolio.hero_description') }}
                </p>
            </div>
        </section>

        <!-- Projects -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="hb-projects">
                    <article class="hb-project">
                        <a href="https://prompt-a-tool.com" target="_blank" rel="noopener" class="hb-project-media" :aria-label="$t('portfolio.items.prompt_tool.title')">
                            <PromptVisual />
                        </a>
                        <div class="hb-project-body">
                            <h3 class="hb-portfolio-title">{{ $t('portfolio.items.prompt_tool.title') }}</h3>
                            <p class="hb-project-tagline">{{ $t('portfolio.items.prompt_tool.tagline') }}</p>
                            <p class="hb-portfolio-description">{{ $t('portfolio.items.prompt_tool.description') }}</p>
                            <ul class="hb-project-features">
                                <li v-for="n in 3" :key="n">{{ $t('portfolio.items.prompt_tool.features.' + (n - 1)) }}</li>
                            </ul>
                            <div class="hb-portfolio-tags">
                                <span v-for="n in 3" :key="n" class="hb-tag">{{ $t('portfolio.items.prompt_tool.tags.' + (n - 1)) }}</span>
                            </div>
                            <a href="https://prompt-a-tool.com" target="_blank" rel="noopener" class="hb-btn hb-btn-primary hb-portfolio-btn">
                                {{ $t('common.visit_site') }}
                            </a>
                        </div>
                    </article>

                    <article class="hb-project">
                        <a href="https://collective-canvas.verbeek.ug" target="_blank" rel="noopener" class="hb-project-media" :aria-label="$t('portfolio.items.collective_canvas.title')">
                            <CanvasVisual />
                        </a>
                        <div class="hb-project-body">
                            <h3 class="hb-portfolio-title">{{ $t('portfolio.items.collective_canvas.title') }}</h3>
                            <p class="hb-project-tagline">{{ $t('portfolio.items.collective_canvas.tagline') }}</p>
                            <p class="hb-portfolio-description">{{ $t('portfolio.items.collective_canvas.description') }}</p>
                            <ul class="hb-project-features">
                                <li v-for="n in 3" :key="n">{{ $t('portfolio.items.collective_canvas.features.' + (n - 1)) }}</li>
                            </ul>
                            <div class="hb-portfolio-tags">
                                <span v-for="n in 3" :key="n" class="hb-tag">{{ $t('portfolio.items.collective_canvas.tags.' + (n - 1)) }}</span>
                            </div>
                            <a href="https://collective-canvas.verbeek.ug" target="_blank" rel="noopener" class="hb-btn hb-btn-primary hb-portfolio-btn">
                                {{ $t('common.visit_site') }}
                            </a>
                        </div>
                    </article>
                    <article class="hb-project">
                        <a href="https://crowded-airport.com" target="_blank" rel="noopener" class="hb-project-media" :aria-label="$t('portfolio.items.crowded_airport.title')">
                            <AirportVisual />
                        </a>
                        <div class="hb-project-body">
                            <h3 class="hb-portfolio-title">{{ $t('portfolio.items.crowded_airport.title') }}</h3>
                            <p class="hb-project-tagline">{{ $t('portfolio.items.crowded_airport.tagline') }}</p>
                            <p class="hb-portfolio-description">{{ $t('portfolio.items.crowded_airport.description') }}</p>
                            <ul class="hb-project-features">
                                <li v-for="n in 3" :key="n">{{ $t('portfolio.items.crowded_airport.features.' + (n - 1)) }}</li>
                            </ul>
                            <div class="hb-portfolio-tags">
                                <span v-for="n in 3" :key="n" class="hb-tag">{{ $t('portfolio.items.crowded_airport.tags.' + (n - 1)) }}</span>
                            </div>
                            <a href="https://crowded-airport.com" target="_blank" rel="noopener" class="hb-btn hb-btn-primary hb-portfolio-btn">
                                {{ $t('common.visit_site') }}
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- In the works -->
        <section class="hb-section hb-wip">
            <div class="hb-container">
                <div class="hb-wip-header">
                    <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('portfolio.wip.label') }}</p>
                    <h2 class="hb-section-title">{{ $t('portfolio.wip.title') }}</h2>
                    <p class="hb-section-subtitle">{{ $t('portfolio.wip.subtitle') }}</p>
                </div>
                <article class="hb-project hb-project-wip">
                    <a href="https://mycanopy.ug" target="_blank" rel="noopener" class="hb-project-media" :aria-label="$t('portfolio.wip.title_item')">
                        <MapVisual />
                    </a>
                    <div class="hb-project-body">
                        <span class="hb-status"><i></i>{{ $t('portfolio.wip.status') }}</span>
                        <h3 class="hb-portfolio-title">{{ $t('portfolio.wip.title_item') }}</h3>
                        <p class="hb-project-tagline">{{ $t('portfolio.wip.tagline') }}</p>
                        <p class="hb-portfolio-description">{{ $t('portfolio.wip.description') }}</p>
                        <ul class="hb-project-features">
                            <li v-for="n in 3" :key="n">{{ $t('portfolio.wip.features.' + (n - 1)) }}</li>
                        </ul>
                        <div class="hb-portfolio-tags">
                            <span v-for="n in 3" :key="n" class="hb-tag">{{ $t('portfolio.wip.tags.' + (n - 1)) }}</span>
                        </div>
                        <a href="https://mycanopy.ug" target="_blank" rel="noopener" class="hb-btn hb-btn-primary hb-portfolio-btn">
                            {{ $t('common.visit_site') }}
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('portfolio.hero_subtitle') }}</p>
                <h2 class="hb-section-title">{{ $t('portfolio.hero_title') }}</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    {{ $t('portfolio.cta_text') }}
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-primary hb-cta-btn">
                    {{ $t('common.get_started') }}
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
import PromptVisual from '../../components/PromptVisual.vue'
import CanvasVisual from '../../components/CanvasVisual.vue'
import AirportVisual from '../../components/AirportVisual.vue'
import MapVisual from '../../components/MapVisual.vue'

export default {
    name: 'Portfolio',
    components: { PromptVisual, CanvasVisual, AirportVisual, MapVisual }
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
.hb-portfolio-image { height: 200px; background-size: cover; background-position: center; overflow: hidden; }
.hb-portfolio-image img { width: 100%; height: 100%; object-fit: cover; }
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

.hb-projects { display: flex; flex-direction: column; gap: 5rem; }
.hb-project { display: grid; grid-template-columns: 1.15fr 1fr; gap: 3.5rem; align-items: center; }
.hb-project:nth-child(even) .hb-project-media { order: 2; }
.hb-project-media { display: block; }
.hb-browser { border: 1px solid rgba(169, 183, 198, 0.3); border-radius: 6px; overflow: hidden; background: #fff; box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35); transition: transform 0.3s ease; }
.hb-project-media:hover .hb-browser { transform: translateY(-6px); }
.hb-browser-bar { display: flex; align-items: center; gap: 6px; padding: 0.6rem 0.9rem; background: #2e3d4f; }
.hb-browser-bar i { width: 10px; height: 10px; border-radius: 50%; background: rgba(255, 255, 255, 0.3); }
.hb-browser-bar i:first-child { background: #ff7a1a; }
.hb-browser-bar span { margin-left: 0.75rem; font-size: 0.75rem; color: #a9b7c6; letter-spacing: 0.03em; }
.hb-browser img { display: block; width: 100%; height: auto; }
.hb-project-tagline { color: #ff7a1a; font-weight: 700; letter-spacing: 0.02em; margin-bottom: 1rem; }
.hb-project-body .hb-portfolio-title { font-size: clamp(1.8rem, 3vw, 2.4rem) !important; margin-bottom: 0.4rem; }
.hb-project-features { list-style: none; padding: 0; margin: 0 0 1.5rem; display: grid; gap: 0.6rem; }
.hb-project-features li { position: relative; padding-left: 1.5rem; color: var(--hb-text); font-size: 0.95rem; line-height: 1.5; }
.hb-project-features li::before { content: ''; position: absolute; left: 0; top: 0.5em; width: 0.7rem; height: 2px; background: #ff7a1a; }
@media (max-width: 900px) {
    .hb-project { grid-template-columns: 1fr; gap: 1.75rem; }
    .hb-project:nth-child(even) .hb-project-media { order: 0; }
    .hb-projects { gap: 3.5rem; }
}
.hb-wip { background: #212e3c; border-top: 1px solid rgba(169, 183, 198, 0.14); }
.hb-wip-header { max-width: 40rem; margin-bottom: 3rem; }
.hb-status { display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #ff7a1a; border: 1px solid rgba(255, 122, 26, 0.5); padding: 0.3rem 0.8rem; margin-bottom: 1rem; }
.hb-status i { width: 7px; height: 7px; border-radius: 50%; background: #ff7a1a; animation: hb-pulse 1.6s ease-in-out infinite; }
@keyframes hb-pulse { 50% { opacity: 0.25; } }
@media (prefers-reduced-motion: reduce) { .hb-status i { animation: none; } }
</style>
