import { createI18n } from 'vue-i18n'
import en from './en'
import lg from './lg'

// Create i18n instance
const i18n = createI18n({
    legacy: false,
    locale: localStorage.getItem('locale') || 'en',
    fallbackLocale: 'en',
    messages: {
        en,
        lg
    }
})

export default i18n
