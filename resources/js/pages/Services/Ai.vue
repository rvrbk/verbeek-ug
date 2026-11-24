<template>
    <div class="hb-page-content">
        <section class="hb-section hb-hero-section">
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">{{ $t('aiServices.hero_subtitle') }}</p>
                <h1 class="hb-hero-title">{{ $t('aiServices.hero_title') }}</h1>
                <p class="hb-hero-description">{{ $t('aiServices.hero_description') }}</p>
                <router-link to="/services" class="hb-back">&larr; {{ $t('aiServices.back') }}</router-link>
            </div>
        </section>

        <section class="hb-section">
            <div class="hb-container">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('aiServices.steps_label') }}</p>
                <h2 class="hb-section-title">{{ $t('aiServices.steps_title') }}</h2>
                <ol class="hb-steps">
                    <li v-for="(step, i) in steps" :key="i" class="hb-step">
                        <span class="hb-step-number">{{ i + 1 }}</span>
                        <h3 class="hb-step-title">{{ step.name }}</h3>
                        <p class="hb-step-meta">{{ $t('aiServices.duration') }}: {{ step.duration }}</p>
                        <p class="hb-step-text">{{ step.text }}</p>
                        <p class="hb-step-deliverable"><strong>{{ $t('aiServices.deliverable') }}:</strong> {{ step.deliverable }}</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="hb-section">
            <div class="hb-container">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('aiServices.principles_label') }}</p>
                <h2 class="hb-section-title">{{ $t('aiServices.principles_title') }}</h2>
                <div class="hb-principles">
                    <div v-for="(principle, i) in principles" :key="i" class="hb-principle">
                        <h3>{{ principle.title }}</h3>
                        <p>{{ principle.text }}</p>
                    </div>
                </div>
                <div class="hb-fit">
                    <h3>{{ $t('aiServices.fit_title') }}</h3>
                    <p>{{ $t('aiServices.fit_text') }}</p>
                </div>
            </div>
        </section>

        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">{{ $t('common.get_started') }}</p>
                <h2 class="hb-section-title">{{ $t('aiServices.cta_title') }}</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">{{ $t('aiServices.cta_text') }}</p>
                <router-link to="/contact" class="hb-btn hb-btn-primary">{{ $t('aiServices.cta_button') }}</router-link>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'AiServices',
    computed: {
        steps() {
            return Array.from({ length: 4 }, (_, i) => ({
                name: this.$t(`aiServices.steps.${i}.name`),
                duration: this.$t(`aiServices.steps.${i}.duration`),
                text: this.$t(`aiServices.steps.${i}.text`),
                deliverable: this.$t(`aiServices.steps.${i}.deliverable`)
            }))
        },
        principles() {
            return Array.from({ length: 4 }, (_, i) => ({
                title: this.$t(`aiServices.principles.${i}.title`),
                text: this.$t(`aiServices.principles.${i}.text`)
            }))
        }
    }
}
</script>

<style scoped>
.hb-page-content { position: relative; z-index: 1; --hb-accent: #f5ab8b; --hb-text: #ffffff; --hb-text-muted: rgba(255, 255, 255, 0.7); }
.hb-section { padding: 6rem 0; position: relative; }
.hb-hero-section { min-height: 50vh; display: flex; align-items: center; justify-content: center; }
.hb-hero-content { max-width: 800px; padding: 0 2rem; }
.hb-hero-subtitle { color: var(--hb-text-muted); margin-bottom: 1.5rem; letter-spacing: 0.1em; }
.hb-hero-title { font-family: Georgia, serif; font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; letter-spacing: -0.01em; }
.hb-hero-description { font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); max-width: 700px; margin: 0 auto 2rem; }
.hb-back { color: var(--hb-accent); font-size: 0.875rem; letter-spacing: 0.02em; }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-section-label { color: var(--hb-text-muted); margin-bottom: 0.75rem; letter-spacing: 0.1em; }
.hb-section-title { font-family: Georgia, serif; font-size: clamp(1.75rem, 3vw, 2.25rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1rem; letter-spacing: -0.01em; }
.hb-cta-text { line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-steps { list-style: none; padding: 0; margin: 3rem 0 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; }
.hb-step { padding: 2rem; border-top: 1px solid rgba(255, 255, 255, 0.2); background-color: rgba(255, 255, 255, 0.05); }
.hb-step-number { display: inline-block; color: var(--hb-accent); font-family: Georgia, serif; font-size: 1.5rem; margin-bottom: 0.5rem; }
.hb-step-title { font-family: Georgia, serif; font-size: 1.25rem; font-weight: 400; color: var(--hb-text); margin-bottom: 0.25rem; }
.hb-step-meta { color: var(--hb-accent); font-size: 0.8rem; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 1rem; }
.hb-step-text, .hb-step-deliverable { font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1rem; }
.hb-step-deliverable strong { color: var(--hb-text); font-weight: 500; }
.hb-principles { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem; margin-top: 3rem; }
.hb-principle { border-top: 2px solid #ff7a1a; padding-top: 1.25rem; }
.hb-principle h3 { font-size: 1.1rem; margin-bottom: 0.5rem; }
.hb-principle p { color: var(--hb-text-muted); line-height: 1.6; font-size: 0.95rem; }
.hb-fit { margin-top: 4rem; max-width: 46rem; }
.hb-fit h3 { font-family: Georgia, serif; font-size: 1.25rem; font-weight: 400; margin-bottom: 0.5rem; }
.hb-fit p { color: var(--hb-text-muted); line-height: 1.6; }
.hb-btn { display: inline-block; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; transition: all 0.2s ease; border: 1px solid transparent; }
.hb-btn-primary { background-color: rgba(255, 255, 255, 0.15); color: var(--hb-text); border-color: var(--hb-text); }
.hb-btn-primary:hover { background-color: rgba(255, 255, 255, 0.2); }
@media (max-width: 768px) { .hb-section { padding: 4rem 0; } }
</style>
