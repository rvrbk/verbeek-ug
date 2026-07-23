import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import('@/pages/Home.vue'),
        meta: { title: 'Custom Web Solutions for Ugandan Businesses | Rik Verbeek' }
    },
    {
        path: '/services',
        name: 'Services',
        component: () => import('@/pages/Services/Index.vue'),
        meta: { title: 'Services | Rik Verbeek - Software Developer' }
    },
    {
        path: '/portfolio',
        name: 'Portfolio',
        component: () => import('@/pages/Portfolio/Index.vue'),
        meta: { title: 'Portfolio | Rik Verbeek - Software Developer' }
    },
    {
        path: '/portfolio/:id',
        name: 'PortfolioItem',
        component: () => import('@/pages/Portfolio/Item.vue'),
        meta: { title: 'Project | Rik Verbeek' }
    },
    {
        path: '/about',
        name: 'About',
        component: () => import('@/pages/About/Index.vue'),
        meta: { title: 'About Me | Rik Verbeek - Software Developer' }
    },
    {
        path: '/contact',
        name: 'Contact',
        component: () => import('@/pages/Contact/Index.vue'),
        meta: { title: 'Contact | Rik Verbeek - Software Developer' }
    },
    {
        path: '/blog',
        name: 'Blog',
        component: () => import('@/pages/Blog/Index.vue'),
        meta: { title: 'Blog | Rik Verbeek' }
    },
    {
        path: '/blog/:slug',
        name: 'BlogPost',
        component: () => import('@/pages/Blog/Post.vue'),
        meta: { title: 'Blog Post | Rik Verbeek' }
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

router.beforeEach((to, from, next) => {
    document.title = to.meta.title || 'Rik Verbeek - Software Developer for Ugandan Businesses'
    next()
})

export default router
