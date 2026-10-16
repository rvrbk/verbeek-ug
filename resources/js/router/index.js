import { createRouter, createWebHistory } from 'vue-router'
import { watch } from 'vue'
import i18n from '../i18n'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import('@/pages/Home.vue'),
        meta: { seo: 'home' }
    },
    {
        path: '/services',
        name: 'Services',
        component: () => import('@/pages/Services/Index.vue'),
        meta: { seo: 'services' }
    },
    {
        path: '/portfolio',
        name: 'Portfolio',
        component: () => import('@/pages/Portfolio/Index.vue'),
        meta: { seo: 'portfolio' }
    },
    {
        path: '/about',
        name: 'About',
        component: () => import('@/pages/About/Index.vue'),
        meta: { seo: 'about' }
    },
    {
        path: '/contact',
        name: 'Contact',
        component: () => import('@/pages/Contact/Index.vue'),
        meta: { seo: 'contact' }
    },
    {
        path: '/blog',
        name: 'Blog',
        component: () => import('@/pages/Blog/Index.vue'),
        meta: { seo: 'blog' }
    },
    {
        path: '/blog/:slug',
        name: 'BlogPost',
        component: () => import('@/pages/Blog/Post.vue'),
        meta: { seo: 'blog' }
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth'
            }
        }
        return { top: 0, behavior: 'smooth' }
    }
})

// Keep title, description, canonical and <html lang> in sync with the route and language
const SITE = 'https://verbeek.ug'
const setMeta = (selector, attr, value) => {
    const el = document.querySelector(selector)
    if (el) el.setAttribute(attr, value)
}
function applySeo(route) {
    const { t, locale } = i18n.global
    const key = route.meta.seo || 'home'
    const title = t(`seo.${key}.title`)
    const description = t(`seo.${key}.description`)
    const url = SITE + (route.path === '/' ? '' : route.path)
    document.title = title
    document.documentElement.lang = locale.value
    setMeta('meta[name="description"]', 'content', description)
    setMeta('meta[property="og:title"]', 'content', title)
    setMeta('meta[property="og:description"]', 'content', description)
    setMeta('meta[property="og:url"]', 'content', url)
    setMeta('meta[name="twitter:title"]', 'content', title)
    setMeta('meta[name="twitter:description"]', 'content', description)
    setMeta('link[rel="canonical"]', 'href', url)
}

router.afterEach((to) => applySeo(to))
watch(() => i18n.global.locale.value, () => applySeo(router.currentRoute.value))

export default router
