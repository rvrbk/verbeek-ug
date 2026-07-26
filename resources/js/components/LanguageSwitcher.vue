<template>
    <div class="language-switcher">
        <button
            v-for="locale in availableLocales"
            :key="locale"
            @click="switchLanguage(locale)"
            class="language-btn"
            :class="{ active: currentLocale === locale }"
        >
            {{ $t(`languages.${locale}`) }}
        </button>
    </div>
</template>

<script>
import { computed } from 'vue'
import { useI18n } from 'vue-i18n'

export default {
    name: 'LanguageSwitcher',
    setup() {
        const { locale, availableLocales } = useI18n()
        
        const currentLocale = computed(() => locale.value)
        
        const switchLanguage = (newLocale) => {
            locale.value = newLocale
            localStorage.setItem('locale', newLocale)
        }
        
        return {
            currentLocale,
            availableLocales,
            switchLanguage
        }
    }
}
</script>

<style scoped>
.language-switcher {
    display: flex;
    gap: 0.5rem;
}

.language-btn {
    background: transparent;
    border: 1px solid var(--hb-text);
    color: var(--hb-text);
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
    cursor: pointer;
    transition: all 0.2s ease;
    border-radius: 4px;
}

.language-btn:hover {
    background: rgba(255, 255, 255, 0.1);
}

.language-btn.active {
    background: var(--hb-accent);
    border-color: var(--hb-accent);
    color: var(--hb-primary);
}
</style>
