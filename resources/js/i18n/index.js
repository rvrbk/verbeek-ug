import { createI18n } from 'vue-i18n'
import en from './en'
import fr from './fr'
import es from './es'
import pt from './pt'

export const SUPPORTED_LOCALES = ['en', 'fr', 'es', 'pt']

/**
 * The language is part of the URL: English has no prefix, the others live under /fr, /es and /pt.
 * The server renders the same URLs with matching titles, descriptions and hreflang links.
 */
const prefixMatch = window.location.pathname.match(/^\/(fr|es|pt)(?=\/|$)/)

export const currentLocale = prefixMatch ? prefixMatch[1] : 'en'
export const localePrefix = prefixMatch ? '/' + prefixMatch[1] : ''

/** Reload the current page in another language. */
export function switchLocale(locale) {
    const path = window.location.pathname.slice(localePrefix.length) || '/'
    const prefix = locale === 'en' ? '' : '/' + locale
    window.location.assign(prefix + path + window.location.search + window.location.hash)
}

const i18n = createI18n({
    legacy: false,
    locale: currentLocale,
    fallbackLocale: 'en',
    messages: { en, fr, es, pt }
})

export default i18n
