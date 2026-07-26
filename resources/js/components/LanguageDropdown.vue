<template>
    <div class="language-dropdown-container" ref="dropdownContainer">
        <button 
            @click="toggleDropdown"
            class="language-dropdown-toggle"
            :aria-label="`Current language: ${currentLanguageName}`"
        >
            <span class="language-code">{{ currentLocale }}</span>
            <svg class="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        
        <div 
            v-if="isOpen" 
            class="language-dropdown-menu"
            @click.away="closeDropdown"
        >
            <button 
                v-for="locale in availableLocales"
                :key="locale"
                @click="switchLanguage(locale)"
                class="language-dropdown-item"
                :class="{ active: currentLocale === locale }"
            >
                <span class="language-name">{{ $t(`languages.${locale}`) }}</span>
                <span class="language-code-badge">{{ locale.toUpperCase() }}</span>
            </button>
        </div>
    </div>
</template>

<script>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { useI18n } from 'vue-i18n'

export default {
    name: 'LanguageDropdown',
    setup() {
        const { locale, availableLocales } = useI18n()
        const isOpen = ref(false)
        const dropdownContainer = ref(null)
        
        const currentLocale = computed(() => locale.value)
        const currentLanguageName = computed(() => {
            // This would need i18n access, but we'll use a simple mapping
            const names = { en: 'English', lg: 'Luganda' }
            return names[locale.value] || locale.value
        })
        
        const toggleDropdown = () => {
            isOpen.value = !isOpen.value
        }
        
        const closeDropdown = () => {
            isOpen.value = false
        }
        
        const switchLanguage = (newLocale) => {
            if (newLocale !== currentLocale.value) {
                locale.value = newLocale
                localStorage.setItem('locale', newLocale)
            }
            closeDropdown()
        }
        
        // Close dropdown when clicking outside
        const handleClickOutside = (event) => {
            if (dropdownContainer.value && !dropdownContainer.value.contains(event.target)) {
                closeDropdown()
            }
        }
        
        onMounted(() => {
            document.addEventListener('click', handleClickOutside)
        })
        
        onUnmounted(() => {
            document.removeEventListener('click', handleClickOutside)
        })
        
        return {
            currentLocale,
            currentLanguageName,
            availableLocales,
            isOpen,
            dropdownContainer,
            toggleDropdown,
            closeDropdown,
            switchLanguage
        }
    }
}
</script>

<style scoped>
.language-dropdown-container {
    position: relative;
    display: inline-block;
}

.language-dropdown-toggle {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    background: transparent;
    border: 1px solid var(--hb-text);
    color: var(--hb-text);
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
    cursor: pointer;
    transition: all 0.2s ease;
    border-radius: 4px;
    min-width: 60px;
    justify-content: center;
}

.language-dropdown-toggle:hover {
    background: rgba(255, 255, 255, 0.1);
}

.language-code {
    font-weight: 500;
    letter-spacing: 0.05em;
}

.dropdown-arrow {
    width: 14px;
    height: 14px;
    transition: transform 0.2s ease;
}

.language-dropdown-toggle[aria-expanded="true"] .dropdown-arrow {
    transform: rotate(180deg);
}

.language-dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    margin-top: 0.5rem;
    min-width: 180px;
    background: var(--hb-primary);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    overflow: hidden;
    z-index: 1000;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}

.language-dropdown-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 0.75rem 1rem;
    background: transparent;
    border: none;
    color: var(--hb-text-muted);
    font-size: 0.875rem;
    cursor: pointer;
    transition: all 0.2s ease;
    text-align: left;
}

.language-dropdown-item:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--hb-text);
}

.language-dropdown-item.active {
    background: var(--hb-accent);
    color: var(--hb-primary);
}

.language-name {
    font-weight: 400;
}

.language-code-badge {
    font-size: 0.75rem;
    padding: 0.125rem 0.5rem;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 4px;
    font-weight: 600;
    letter-spacing: 0.05em;
}

.language-dropdown-item.active .language-code-badge {
    background: rgba(255, 255, 255, 0.3);
    color: var(--hb-primary);
}

/* Mobile specific styles */
@media (max-width: 992px) {
    .language-dropdown-menu {
        position: static;
        margin-top: 0.5rem;
        min-width: 100%;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .language-dropdown-toggle {
        width: 100%;
        justify-content: space-between;
        padding: 0.75rem 1rem;
    }
    
    .language-code {
        font-size: 1rem;
    }
    
    .dropdown-arrow {
        width: 18px;
        height: 18px;
    }
}
</style>
