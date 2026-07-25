<template>
  <div class="hb-site-wrapper">
    <!-- Header -->
    <header class="hb-header">
      <div class="hb-header-inner">
        <!-- Logo -->
        <router-link to="/" class="hb-logo">
          <span class="hb-logo-text">verbeek.ug</span>
        </router-link>
        
        <!-- Navigation -->
        <nav class="hb-nav">
          <router-link to="/" class="hb-nav-item">
            Home
          </router-link>
          <a href="#services" @click.prevent="navigateToSection('services')" class="hb-nav-item" :class="{ 'hb-nav-item-active': route.path === '/' && currentSection === 'services' }">
            Services
          </a>
          <router-link to="/portfolio" class="hb-nav-item">
            Portfolio
          </router-link>
          <a href="#about" @click.prevent="navigateToSection('about')" class="hb-nav-item" :class="{ 'hb-nav-item-active': route.path === '/' && currentSection === 'about' }">
            About
          </a>
          <router-link to="/contact" class="hb-nav-item">
            Contact
          </router-link>
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
        <router-link to="/" class="mobile-nav-link" @click="mobileMenuOpen = false">Home</router-link>
        <a href="#services" @click.prevent="navigateToSection('services'); mobileMenuOpen = false" class="mobile-nav-link" :class="{ 'hb-nav-item-active': route.path === '/' && currentSection === 'services' }">Services</a>
        <router-link to="/portfolio" class="mobile-nav-link" @click="mobileMenuOpen = false">Portfolio</router-link>
        <a href="#about" @click.prevent="navigateToSection('about'); mobileMenuOpen = false" class="mobile-nav-link" :class="{ 'hb-nav-item-active': route.path === '/' && currentSection === 'about' }">About</a>
        <router-link to="/contact" class="mobile-nav-link" @click="mobileMenuOpen = false">Contact</router-link>
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
          <p>Rik Verbeek</p>
          <p>Custom software for Ugandan businesses</p>
        </div>
        <div class="hb-footer-right">
          <a href="mailto:rik@verbeek.ug" class="hb-footer-link">rik@verbeek.ug</a>
          <span class="hb-footer-divider">|</span>
          <a href="https://wa.me/256" class="hb-footer-link">+256 (WhatsApp)</a>
          <span class="hb-footer-divider">|</span>
          <span>Kampala, Uganda</span>
          <span class="hb-footer-copyright">&copy; {{ new Date().getFullYear() }} Rik Verbeek. All rights reserved.</span>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import { ref, onMounted, onUnmounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'

export default {
  setup() {
    const router = useRouter()
    const route = useRoute()
    const mobileMenuOpen = ref(false)
    const currentSection = ref('')
    
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
      const sections = ['hero', 'services', 'about', 'portfolio']
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
    
    onMounted(() => {
      window.addEventListener('scroll', handleScroll)
      handleScroll()
      
      if (route.hash) {
        currentSection.value = route.hash.substring(1)
      }
    })
    
    onUnmounted(() => {
      window.removeEventListener('scroll', handleScroll)
      document.body.style.overflow = ''
    })
    
    return { mobileMenuOpen, currentSection, navigateToSection, toggleMobileMenu, closeMobileMenu }
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
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
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

/* Navigation */
.hb-nav {
  display: flex;
  gap: 2rem;
  align-items: center;
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
  color: var(--hb-accent);
}

.hb-nav-item-active {
  color: orange;
  font-weight: 500;
}

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
  color: var(--hb-accent);
  background: rgba(255, 255, 255, 0.1);
}

.mobile-nav-link.hb-nav-item-active {
  color: orange;
  font-weight: 500;
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
