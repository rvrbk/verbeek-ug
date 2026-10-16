<template>
  <div class="hb-site-wrapper">
    <!-- Header -->
    <div class="hb-progress" aria-hidden="true"></div>
    <header class="hb-header" :class="{ 'hb-header-scrolled': scrolled }">
      <div class="hb-header-inner">
        <!-- Logo -->
        <a href="/" class="hb-logo" exact>
          <span class="hb-logo-text">verbeek<span class="hb-logo-dot">.</span>ug</span>
        </a>
        
        <!-- Navigation - Right aligned -->
        <nav class="hb-nav">
          <router-link to="/" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            {{ $t('nav.home') }}
          </router-link>
          <router-link to="/services" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            {{ $t('nav.services') }}
          </router-link>
          <router-link to="/portfolio" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            {{ $t('nav.portfolio') }}
          </router-link>
          <router-link to="/about" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            {{ $t('nav.about') }}
          </router-link>
          <router-link to="/contact" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            {{ $t('nav.contact') }}
          </router-link>
          <!-- Language Switcher Dropdown -->
          <LanguageDropdown class="language-dropdown" />
        </nav>
        
        <!-- Simple Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="mobile-menu-btn" :class="{ 'mobile-menu-btn-open': mobileMenuOpen }" aria-label="Toggle menu">
          <span class="hamburger-line hamburger-line-1"></span>
          <span class="hamburger-line hamburger-line-2"></span>
          <span class="hamburger-line hamburger-line-3"></span>
        </button>
      </div>
    </header>
    
    <!-- Simple Mobile Menu - Below header -->
    <div v-if="mobileMenuOpen" class="mobile-menu" @click="mobileMenuOpen = false">
      <nav class="mobile-nav" @click.stop>
        <router-link to="/" class="mobile-nav-link" @click="mobileMenuOpen = false" exact-active-class="hb-nav-item-active">{{ $t('nav.home') }}</router-link>
        <router-link to="/services" class="mobile-nav-link" @click="mobileMenuOpen = false" exact-active-class="hb-nav-item-active">{{ $t('nav.services') }}</router-link>
        <router-link to="/portfolio" class="mobile-nav-link" @click="mobileMenuOpen = false" exact-active-class="hb-nav-item-active">{{ $t('nav.portfolio') }}</router-link>
        <router-link to="/about" class="mobile-nav-link" @click="mobileMenuOpen = false" exact-active-class="hb-nav-item-active">{{ $t('nav.about') }}</router-link>
        <router-link to="/contact" class="mobile-nav-link" @click="mobileMenuOpen = false" exact-active-class="hb-nav-item-active">{{ $t('nav.contact') }}</router-link>
        <LanguageDropdown class="mobile-language-dropdown" />
      </nav>
    </div>
    
    <!-- Main Content -->
    <main class="hb-main">
      <slot />
    </main>
    
    <!-- Footer -->
    <footer class="hb-footer">
      <div class="hb-footer-content">
        <div class="hb-footer-left">
          <p>verbeek.ug</p>
          <p>{{ $t('footer.tagline') }}</p>
        </div>
        <div class="hb-footer-right">
          <a href="https://wa.me/31650512842" class="hb-footer-link">+31 6 505 12 842 (WhatsApp)</a>
          <span class="hb-footer-copyright">&copy; {{ new Date().getFullYear() }}. {{ $t('footer.copyright') }}</span>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import { ref, onMounted, onUnmounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import LanguageDropdown from '../components/LanguageDropdown.vue'
import { initMotion } from '../motion'

export default {
  components: {
    LanguageDropdown
  },
  setup() {
    const router = useRouter()
    const route = useRoute()
    const mobileMenuOpen = ref(false)
    const currentSection = ref('')
    const scrolled = ref(false)
    
    const navigateToSection = (sectionId) => {
      currentSection.value = sectionId
      if (route.path === '/') {
        const element = document.getElementById(sectionId)
        if (element) {
          element.scrollIntoView({ behavior: 'smooth', block: 'start' })
          window.history.replaceState({}, '', `#${sectionId}`)
        }
      } else {
        router.push({ path: '/', hash: `#${sectionId}` })
      }
    }
    
    const toggleMobileMenu = () => {
      mobileMenuOpen.value = !mobileMenuOpen.value
      // Prevent body scroll when menu is open
      if (mobileMenuOpen.value) {
        document.body.style.overflow = 'hidden'
      } else {
        document.body.style.overflow = ''
      }
    }
    
    const closeMobileMenu = () => {
      mobileMenuOpen.value = false
      document.body.style.overflow = ''
    }
    
    const handleScroll = () => {
      const sections = ['hero', 'testimonials']
      const scrollPosition = window.scrollY + 100
      
      for (const section of sections) {
        const element = document.getElementById(section)
        if (element) {
          const top = element.offsetTop
          const bottom = top + element.offsetHeight
          if (scrollPosition >= top && scrollPosition < bottom) {
            currentSection.value = section
            break
          }
        }
      }
    }
    
    // ---- Motion: scroll progress, parallax vars, reveal-on-scroll ----
    let raf = 0
    const onScrollFrame = () => {
      raf = 0
      const y = window.scrollY
      const max = document.documentElement.scrollHeight - window.innerHeight
      const root = document.documentElement.style
      root.setProperty('--sy', y.toFixed(1))
      root.setProperty('--progress', max > 0 ? (y / max).toFixed(4) : '0')
      scrolled.value = y > 24
    }
    const onScroll = () => { if (!raf) raf = requestAnimationFrame(onScrollFrame) }

    const REVEAL = '.hb-section-header, .hb-wip-header, .hb-feature-card, .hb-service-card, .hb-about-card, .hb-contact-card, .hb-expertise-item, .hb-consultancy-point, .hb-project, .hb-cta-section .hb-container, .hb-about-grid > *, .hb-contact-grid > *, .hb-blog-card'
    let io = null
    let mo = null
    const scan = () => {
      document.querySelectorAll(REVEAL).forEach((el) => {
        if (el.dataset.mo) return
        el.dataset.mo = '1'
        const sibs = el.parentElement ? Array.from(el.parentElement.children).filter((c) => c.matches(REVEAL)) : []
        el.style.setProperty('--d', Math.max(0, sibs.indexOf(el)) * 110 + 'ms')
        el.classList.add('mo')
        io.observe(el)
      })
    }
    const setupReveal = () => {
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) return
      io = new IntersectionObserver((entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) { e.target.classList.add('mo-in'); io.unobserve(e.target) }
        })
      }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' })
      scan()
      let t = 0
      mo = new MutationObserver(() => { clearTimeout(t); t = setTimeout(scan, 60) })
      mo.observe(document.querySelector('.hb-main'), { childList: true, subtree: true })
    }

    onMounted(() => {
      window.addEventListener('scroll', handleScroll)
      window.addEventListener('scroll', onScroll, { passive: true })
      onScrollFrame()
      setupReveal()
      initMotion()
      handleScroll()
      
      if (route.hash) {
        currentSection.value = route.hash.substring(1)
      }
    })
    
    onUnmounted(() => {
      window.removeEventListener('scroll', handleScroll)
      window.removeEventListener('scroll', onScroll)
      io && io.disconnect()
      mo && mo.disconnect()
      document.body.style.overflow = ''
    })
    
    return { scrolled, mobileMenuOpen, currentSection, navigateToSection, toggleMobileMenu, closeMobileMenu, route }
  }
}
</script>

<style scoped>
/* ===== Highbridge Exact Design ===== */

:root {
  --hb-primary: #003885;
  --hb-accent: #f5ab8b;
  --hb-text: #ffffff;
  --hb-text-muted: rgba(255, 255, 255, 0.7);
}

/* Reset and Base */
.hb-site-wrapper {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: var(--hb-primary);
  font-family: var(--font-ubuntu), var(--font-sans);
  color: var(--hb-text);
  line-height: 1.6;
}

/* ===== Header ===== */
.hb-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 1.5rem 3rem;
  background-color: transparent;
  backdrop-filter: blur(10px);
}

.hb-header-inner {
  max-width: 1440px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}

/* Logo */
.hb-logo {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: var(--hb-text);
  font-size: 1.25rem;
  font-weight: 400;
  letter-spacing: -0.01em;
}

.hb-logo-text {
  display: inline-block;
}

.hb-logo-dot {
  color: orange;
}

/* Navigation */
.hb-nav {
  display: flex;
  gap: 2rem;
  align-items: center;
  margin-left: auto;
}

.hb-nav-item {
  color: var(--hb-text);
  text-decoration: none;
  font-size: 0.875rem;
  font-weight: 400;
  letter-spacing: 0.02em;
  text-transform: uppercase;
  padding: 0.5rem 0;
  position: relative;
  transition: color 0.2s ease;
}

.hb-nav-item:hover {
  color: orange;
}

.hb-nav-item:hover::after {
  content: '';
  position: absolute;
  bottom: -0.75rem;
  left: 50%;
  transform: translateX(-50%);
  width: 8px;
  height: 8px;
  background-color: orange;
  border-radius: 50%;
}

.router-link-active,
.hb-nav-item-active {
  color: orange;
}

.router-link-active::after,
.hb-nav-item-active::after {
  content: '';
  position: absolute;
  bottom: -0.75rem;
  left: 50%;
  transform: translateX(-50%);
  width: 8px;
  height: 8px;
  background-color: orange;
  border-radius: 50%;
}

/* Simple Mobile Menu */
.mobile-menu-btn {
  display: none;
  position: relative;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  padding: 6px;
  z-index: 1001;
}

.hamburger-line {
  display: block;
  width: 24px;
  height: 2px;
  background: #fff;
  margin: 4px 0;
  border-radius: 2px;
  transition: all 0.25s ease;
  position: relative;
}

.mobile-menu-btn-open .hamburger-line-1 {
  transform: rotate(45deg) translate(5px, 5px);
}

.mobile-menu-btn-open .hamburger-line-2 {
  opacity: 0;
}

.mobile-menu-btn-open .hamburger-line-3 {
  transform: rotate(-45deg) translate(5px, -5px);
}

.mobile-menu {
  display: none;
  position: fixed;
  top: 4.3rem;
  left: 0;
  right: 0;
  background: transparent;
  backdrop-filter: blur(10px);
  z-index: 1002;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.mobile-nav {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 1rem;
  gap: 0.5rem;
  max-width: 1440px;
  margin: 0 auto;
}

.mobile-nav-link {
  color: var(--hb-text);
  text-decoration: none;
  font-size: 1.1rem;
  font-weight: 400;
  padding: 0.5rem 1rem;
  border-radius: 8px;
  transition: all 0.2s ease;
}

.mobile-nav-link:hover {
  color: orange;
}

.mobile-nav-link:hover::after {
  content: '';
  position: absolute;
  bottom: -0.75rem;
  left: 50%;
  transform: translateX(-50%);
  width: 8px;
  height: 8px;
  background-color: orange;
  border-radius: 50%;
}

.mobile-nav-link.hb-nav-item-active {
  color: orange;
}

/* ===== Main Content ===== */
.hb-main {
  flex-grow: 1;
  padding-top: 6rem;
  position: relative;
}

/* ===== Footer ===== */
.hb-footer {
  background-color: var(--hb-primary);
  padding: 3rem 3rem 2rem;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

/* Button Hover - White transparent for all buttons - using :deep() to penetrate scoped styles */
:deep(.hb-btn:hover),
:deep(.hb-btn-primary:hover),
:deep(.hb-btn-light:hover),
:deep(button:hover),
:deep(button:not(:disabled):hover),
:deep(input[type="submit"]:hover),
:deep(input[type="button"]:hover) {
  background-color: rgba(255, 255, 255, 0.2) !important;
  color: var(--hb-primary) !important;
  border-color: #ffffff !important;
}

/* Button non-hover state for primary buttons */
:deep(.hb-btn-primary) {
  background-color: rgba(255, 255, 255, 0.1) !important;
  color: var(--hb-text) !important;
  border: 1px solid var(--hb-text) !important;
}

:deep(.hb-btn),
:deep(.hb-btn-primary),
:deep(.hb-btn-light) {
  transition: all 0.2s ease;
}

:deep(button:disabled),
:deep(button[disabled]),
:deep(input[type="submit"]:disabled),
:deep(input[type="button"]:disabled) {
  opacity: 0.6;
  cursor: not-allowed;
}

.hb-footer-content {
  max-width: 1440px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1rem;
}

.hb-footer-left p {
  margin: 0;
  font-size: 0.875rem;
  color: var(--hb-text-muted);
}

.hb-footer-left p:first-child {
  color: var(--hb-text);
  font-weight: 500;
}

.hb-footer-right {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  flex-wrap: wrap;
  font-size: 0.875rem;
  color: var(--hb-text-muted);
}

.hb-footer-link {
  color: var(--hb-text-muted);
  text-decoration: none;
  transition: color 0.2s ease;
}

.hb-footer-link:hover {
  color: var(--hb-accent);
}

.hb-footer-divider {
  color: rgba(255, 255, 255, 0.3);
}

.hb-footer-copyright {
  margin-left: 1rem;
}

/* ===== Responsive ===== */
@media (max-width: 1024px) {
  .hb-header {
    padding: 1.5rem 2rem;
  }
  
  .hb-nav {
    gap: 1.5rem;
  }
}

@media (max-width: 992px) {
  .hb-header-inner {
    padding: 0 1rem;
  }
  
  .hb-nav {
    display: none;
  }
  
  .mobile-menu-btn {
    display: flex;
  }
  
  .mobile-menu {
    display: block;
  }
  
  .hb-main {
    padding-top: 5rem;
  }
  
  .hb-footer {
    padding: 2rem 1rem 1.5rem;
  }
  
  .hb-footer-content {
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
  }
  
  .hb-footer-left p:first-child {
    font-size: 1rem;
  }
  
  .hb-footer-right {
    gap: 0.5rem;
  }
  
  .hb-footer-copyright {
    margin-left: 0;
    margin-top: 0.5rem;
    display: block;
  }
}

@media (max-width: 480px) {
  .hb-header {
    padding: 1rem;
  }
  
  .hb-nav-item {
    font-size: 0.8rem;
    padding: 0.4rem 0;
  }
  
  .hb-nav {
    gap: 1.25rem;
  }
}
</style>
