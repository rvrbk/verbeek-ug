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
          <router-link to="/" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            Home
          </router-link>
          <a href="#services" @click.prevent="navigateToSection('services')" class="hb-nav-item" :class="{ 'hb-nav-item-active': currentSection === 'services' }">
            Services
          </a>
          <router-link to="/portfolio" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            Portfolio
          </router-link>
          <a href="#about" @click.prevent="navigateToSection('about')" class="hb-nav-item" :class="{ 'hb-nav-item-active': currentSection === 'about' }">
            About
          </a>
          <router-link to="/contact" class="hb-nav-item" exact-active-class="hb-nav-item-active">
            Contact
          </router-link>
        </nav>
        
        <!-- Mobile Menu Button -->
        <button @click="toggleMobileMenu" class="hb-mobile-menu-btn" :class="{ 'hb-mobile-menu-btn-open': mobileMenuOpen }" aria-label="Toggle menu" aria-expanded="mobileMenuOpen">
          <span class="hb-hamburger-line"></span>
          <span class="hb-hamburger-line"></span>
          <span class="hb-hamburger-line"></span>
        </button>
      </div>
      
      <!-- Mobile Menu Overlay -->
      <transition name="hb-mobile-menu-transition">
        <div v-if="mobileMenuOpen" class="hb-mobile-menu" @click="closeMobileMenu">
          <nav class="hb-mobile-menu-content" @click.stop>
            <router-link to="/" class="hb-mobile-nav-item" exact-active-class="hb-mobile-nav-item-active" @click="closeMobileMenu">Home</router-link>
            <a href="#services" @click.prevent="navigateToSection('services'); closeMobileMenu()" class="hb-mobile-nav-item" :class="{ 'hb-mobile-nav-item-active': currentSection === 'services' }">Services</a>
            <router-link to="/portfolio" class="hb-mobile-nav-item" exact-active-class="hb-mobile-nav-item-active" @click="closeMobileMenu">Portfolio</router-link>
            <a href="#about" @click.prevent="navigateToSection('about'); closeMobileMenu()" class="hb-mobile-nav-item" :class="{ 'hb-mobile-nav-item-active': currentSection === 'about' }">About</a>
            <router-link to="/contact" class="hb-mobile-nav-item" exact-active-class="hb-mobile-nav-item-active" @click="closeMobileMenu">Contact</router-link>
          </nav>
        </div>
      </transition>
    </header>
    
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

.router-link-active,
.hb-nav-item-active {
  color: var(--hb-accent);
  font-weight: 500;
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
  background-color: var(--hb-accent);
  border-radius: 50%;
}

/* Mobile Menu Button */
.hb-mobile-menu-btn {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 48px;
  height: 48px;
  background: var(--hb-text);
  border: none;
  border-radius: 4px;
  cursor: pointer;
  padding: 10px;
  z-index: 1001;
  transition: background-color 0.2s ease;
}

.hb-mobile-menu-btn:hover {
  background: rgba(255, 255, 255, 0.9);
}

.hb-hamburger-line {
  display: block;
  width: 24px;
  height: 3px;
  background-color: var(--hb-primary);
  margin: 5px 0;
  transition: all 0.3s ease;
}

.hb-mobile-menu-btn-open .hb-hamburger-line:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}

.hb-mobile-menu-btn-open .hb-hamburger-line:nth-child(2) {
  opacity: 0;
}

.hb-mobile-menu-btn-open .hb-hamburger-line:nth-child(3) {
  transform: rotate(-45deg) translate(5px, -5px);
}

/* Mobile Menu Overlay */
.hb-mobile-menu {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 56, 133, 0.98);
  z-index: 999;
  cursor: pointer;
  overflow-y: auto;
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
}

.hb-mobile-menu-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  align-items: center;
  cursor: default;
  width: 100%;
  max-width: 400px;
  padding: 3rem 2rem;
  box-sizing: border-box;
}

.hb-mobile-nav-item {
  color: var(--hb-text);
  text-decoration: none;
  font-size: 1.75rem;
  font-weight: 400;
  transition: all 0.2s ease;
  position: relative;
  padding: 1rem 0;
  width: 100%;
  text-align: center;
  border-radius: 8px;
}

.hb-mobile-nav-item:hover {
  color: var(--hb-accent);
  background-color: rgba(255, 255, 255, 0.05);
}

.router-link-active,
.hb-mobile-nav-item-active {
  color: var(--hb-accent);
  font-weight: 500;
}

.router-link-active::after,
.hb-mobile-nav-item-active::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 12px;
  height: 12px;
  background-color: var(--hb-accent);
  border-radius: 50%;
}

/* Mobile Menu Transition */
.hb-mobile-menu-transition-enter-active {
  animation: hb-mobile-menu-fade-in 0.3s ease-out;
}

.hb-mobile-menu-transition-leave-active {
  animation: hb-mobile-menu-fade-out 0.3s ease-in;
}

@keyframes hb-mobile-menu-fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes hb-mobile-menu-fade-out {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
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

@media (max-width: 768px) {
  .hb-header-inner {
    padding: 0 1rem;
  }
  
  .hb-nav {
    display: none;
  }
  
  .hb-mobile-menu-btn {
    display: flex;
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
  
  .hb-mobile-menu {
    display: block;
  }
  
  .hb-mobile-menu-content {
    padding: 2rem 1.5rem;
    max-width: 90%;
  }
  
  .hb-mobile-nav-item {
    font-size: 1.5rem;
    padding: 0.75rem 0;
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
  
  .hb-mobile-menu-content {
    padding: 2rem 1rem;
  }
  
  .hb-mobile-nav-item {
    font-size: 1.25rem;
  }
}
</style>
