<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-section hb-hero-section min-h-[50vh] flex items-center justify-center">
            <div class="hb-hero-bg"></div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">{{ $t('solutions.index.hero_subtitle') }}</p>
                <h1 class="hb-hero-title">{{ $t('solutions.index.hero_title') }}</h1>
                <p class="hb-hero-description">{{ $t('solutions.index.hero_description') }}</p>
            </div>
        </section>

        <!-- Solutions -->
        <section class="hb-section">
            <div class="hb-container">
                <p class="hb-cta-text hb-solutions-intro">{{ $t('solutions.index.intro') }}</p>
                <div class="hb-solutions-grid">
                    <router-link
                        v-for="slug in order"
                        :key="slug"
                        :to="'/solutions/' + slug"
                        class="hb-service-card hb-solution-card"
                    >
                        <h2 class="hb-service-title">{{ $t('solutions.pages.' + slug + '.card_title') }}</h2>
                        <p class="hb-service-description">{{ $t('solutions.pages.' + slug + '.summary') }}</p>
                        <span class="hb-solution-more">{{ $t('solutions.labels.read_more') }} &rarr;</span>
                    </router-link>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('solutions.labels.cta_label') }}</p>
                <h2 class="hb-section-title">{{ $t('solutions.labels.cta_title') }}</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">{{ $t('solutions.labels.cta_text') }}</p>
                <router-link to="/contact" class="hb-btn hb-btn-primary hb-cta-btn">
                    {{ $t('solutions.labels.cta_button') }}
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
import solutions from '@/i18n/solutions.en.json'

export default {
    name: 'SolutionsIndex',
    data() {
        return { order: solutions.order }
    }
}
</script>

<style scoped>
.hb-page-content { position: relative; z-index: 1; }
.hb-section { padding: 6rem 0; position: relative; }
.hb-hero-section { min-height: 50vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
.hb-hero-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; }
.hb-hero-content { max-width: 800px; padding: 0 2rem; }
.hb-hero-subtitle { color: var(--hb-text-muted); margin-bottom: 1.5rem; letter-spacing: 0.1em; }
.hb-hero-title { font-size: clamp(2rem, 4vw, 2.75rem); line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; }
.hb-hero-description { font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); max-width: 700px; margin: 0 auto; }
.hb-section-label { color: var(--hb-text-muted); margin-bottom: 0.75rem; letter-spacing: 0.1em; }
.hb-section-title { font-size: clamp(1.75rem, 3vw, 2.25rem); line-height: 1.2; color: var(--hb-text); margin-bottom: 1rem; }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-solutions-intro { max-width: 46rem; margin-bottom: 0; }
.hb-service-card { display: flex; flex-direction: column; padding: 2rem; color: var(--hb-text); }
.hb-service-title { font-size: 1.25rem; margin-bottom: 0.75rem; }
.hb-service-description { flex: 1; font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1.5rem; }
.hb-solution-more { color: var(--hb-accent); font-weight: 700; font-size: 0.78rem; letter-spacing: 0.14em; text-transform: uppercase; }
.hb-cta-text { font-size: 1rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-cta-btn { margin-top: 1rem; }
.hb-btn { display: inline-block; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; border-radius: 0; transition: all 0.2s ease; cursor: pointer; border: 1px solid transparent; }
.hb-btn-primary { background-color: rgba(255, 255, 255, 0.15); color: var(--hb-text); border: 1px solid var(--hb-text); }
.hb-solutions-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem; counter-reset: card; }
@media (min-width: 1000px) { .hb-solutions-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); } }
@media (max-width: 768px) { .hb-section { padding: 4rem 0; } .hb-solutions-grid { grid-template-columns: 1fr; } }
</style>
