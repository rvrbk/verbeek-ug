<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-section hb-hero-section min-h-[50vh] flex items-center">
            <div class="hb-hero-bg"></div>
            <div class="hb-hero-content relative z-10">
                <nav class="hb-crumbs" aria-label="Breadcrumb">
                    <router-link to="/">{{ $t('solutions.labels.home') }}</router-link>
                    <span aria-hidden="true">/</span>
                    <router-link to="/solutions">{{ $t('solutions.labels.solutions') }}</router-link>
                    <span aria-hidden="true">/</span>
                    <span>{{ $t(base + '.card_title') }}</span>
                </nav>
                <h1 class="hb-hero-title">{{ $t(base + '.h1') }}</h1>
                <p class="hb-hero-description">{{ $t(base + '.lead') }}</p>
                <router-link to="/contact" class="hb-btn hb-btn-primary hb-hero-btn">
                    {{ $t('solutions.labels.cta_button') }}
                </router-link>
            </div>
        </section>

        <!-- Problem and cost -->
        <section class="hb-section">
            <div class="hb-container hb-two-col">
                <div>
                    <h2 class="hb-section-title">{{ $t('solutions.labels.problem') }}</h2>
                    <p v-for="(_, i) in page.problem.paragraphs" :key="i" class="hb-prose">
                        {{ $t(base + '.problem.paragraphs.' + i) }}
                    </p>
                </div>
                <div>
                    <h2 class="hb-section-title">{{ $t('solutions.labels.costs') }}</h2>
                    <ul class="hb-list">
                        <li v-for="(_, i) in page.costs.items" :key="i">{{ $t(base + '.costs.items.' + i) }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Approach -->
        <section class="hb-section">
            <div class="hb-container">
                <h2 class="hb-section-title">{{ $t('solutions.labels.approach') }}</h2>
                <ol class="hb-steps">
                    <li v-for="(_, i) in page.approach.steps" :key="i" class="hb-step">
                        <span class="hb-step-number">{{ $t('solutions.labels.step') }} {{ i + 1 }}</span>
                        <h3>{{ $t(base + '.approach.steps.' + i + '.title') }}</h3>
                        <p>{{ $t(base + '.approach.steps.' + i + '.text') }}</p>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Tech -->
        <section class="hb-section">
            <div class="hb-container hb-narrow">
                <h2 class="hb-section-title">{{ $t('solutions.labels.tech') }}</h2>
                <p class="hb-prose">{{ $t(base + '.tech.intro') }}</p>
                <ul class="hb-list">
                    <li v-for="(_, i) in page.tech.items" :key="i">{{ $t(base + '.tech.items.' + i) }}</li>
                </ul>
            </div>
        </section>

        <!-- FAQ -->
        <section class="hb-section">
            <div class="hb-container hb-narrow">
                <h2 class="hb-section-title">{{ $t('solutions.labels.faq') }}</h2>
                <details v-for="(_, i) in page.faq" :key="i" class="hb-faq">
                    <summary>{{ $t(base + '.faq.' + i + '.q') }}</summary>
                    <p>{{ $t(base + '.faq.' + i + '.a') }}</p>
                </details>
            </div>
        </section>

        <!-- Related -->
        <section class="hb-section">
            <div class="hb-container">
                <h2 class="hb-section-title">{{ $t('solutions.labels.related') }}</h2>
                <div class="hb-services-grid-large">
                    <router-link
                        v-for="rel in page.related"
                        :key="rel"
                        :to="'/solutions/' + rel"
                        class="hb-service-card"
                    >
                        <h3 class="hb-service-title">{{ $t('solutions.pages.' + rel + '.card_title') }}</h3>
                        <p class="hb-service-description">{{ $t('solutions.pages.' + rel + '.summary') }}</p>
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
    name: 'SolutionsPage',
    computed: {
        slug() { return this.$route.params.slug },
        base() { return 'solutions.pages.' + this.slug },
        // English content gives the structure (how many paragraphs, steps, questions); the text comes from i18n
        page() { return solutions.pages[this.slug] }
    }
}
</script>

<style scoped>
.hb-page-content { position: relative; z-index: 1; }
.hb-section { padding: 5rem 0; position: relative; }
.hb-hero-section { min-height: 50vh; display: flex; align-items: center; position: relative; overflow: hidden; }
.hb-hero-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; }
.hb-hero-content { max-width: 1440px; width: 100%; margin: 0 auto; padding: 0 2rem; }
.hb-hero-title { max-width: 46rem; font-size: clamp(2rem, 4vw, 2.75rem); line-height: 1.15; color: var(--hb-text); margin-bottom: 1.5rem; }
.hb-hero-description { max-width: 42rem; font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); }
.hb-hero-btn { margin-top: 2rem; }
.hb-crumbs { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem; font-size: 0.85rem; color: var(--hb-text-muted); }
.hb-crumbs a { color: var(--hb-text-muted); text-decoration: underline; text-underline-offset: 3px; }
.hb-crumbs a:hover { color: var(--hb-accent); }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-narrow { max-width: 56rem; margin-left: 0; }
.hb-two-col { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 4rem; }
.hb-section-title { font-size: clamp(1.5rem, 3vw, 2rem); line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; }
.hb-section-label { color: var(--hb-text-muted); margin-bottom: 0.75rem; letter-spacing: 0.1em; }
.hb-prose { font-size: 1.05rem; line-height: 1.75; color: var(--hb-text-muted); margin-bottom: 1.25rem; }
.hb-list { list-style: none; padding: 0; margin: 0; }
.hb-list li { position: relative; padding: 0.75rem 0 0.75rem 1.75rem; border-top: 1px solid rgba(169, 183, 198, 0.18); line-height: 1.6; color: var(--hb-text-muted); }
.hb-list li:last-child { border-bottom: 1px solid rgba(169, 183, 198, 0.18); }
.hb-list li::before { content: ''; position: absolute; left: 0; top: 1.35rem; width: 0.7rem; height: 2px; background: var(--hb-accent); }
.hb-steps { list-style: none; padding: 0; margin: 2rem 0 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem; }
.hb-step { border-top: 2px solid var(--hb-accent); padding-top: 1.25rem; }
.hb-step-number { display: block; margin-bottom: 0.5rem; color: var(--hb-accent); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; }
.hb-step h3 { font-size: 1.1rem; margin-bottom: 0.5rem; color: var(--hb-text); }
.hb-step p { font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); }
.hb-faq { border-top: 1px solid rgba(169, 183, 198, 0.18); padding: 1rem 0; }
.hb-faq:last-of-type { border-bottom: 1px solid rgba(169, 183, 198, 0.18); }
.hb-faq summary { cursor: pointer; font-weight: 600; font-size: 1.05rem; color: var(--hb-text); }
.hb-faq summary:hover { color: var(--hb-accent); }
.hb-faq p { margin-top: 0.75rem; line-height: 1.7; color: var(--hb-text-muted); }
.hb-services-grid-large { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; }
.hb-service-card { display: flex; flex-direction: column; padding: 2rem; color: var(--hb-text); }
.hb-service-title { font-size: 1.25rem; margin-bottom: 0.75rem; }
.hb-service-description { flex: 1; font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1.5rem; }
.hb-solution-more { color: var(--hb-accent); font-weight: 700; font-size: 0.78rem; letter-spacing: 0.14em; text-transform: uppercase; }
.hb-cta-text { font-size: 1rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-cta-btn { margin-top: 1rem; }
.hb-btn { display: inline-block; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; border-radius: 0; transition: all 0.2s ease; cursor: pointer; border: 1px solid transparent; }
.hb-btn-primary { background-color: rgba(255, 255, 255, 0.15); color: var(--hb-text); border: 1px solid var(--hb-text); }
@media (max-width: 900px) { .hb-two-col { grid-template-columns: minmax(0, 1fr); gap: 3rem; } }
@media (max-width: 768px) { .hb-section { padding: 3.5rem 0; } .hb-services-grid-large { grid-template-columns: 1fr; } }
</style>
