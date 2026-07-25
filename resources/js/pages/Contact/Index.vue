<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-section hb-hero-section min-h-[50vh] flex items-center justify-center">
            <div class="hb-hero-bg">
                <svg viewBox="0 0 1440 600" preserveAspectRatio="xMidYMid slice" class="hb-hero-svg">
                    <line x1="0" y1="400" x2="400" y2="0" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="400" y1="0" x2="800" y2="200" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="800" y1="200" x2="1200" y2="0" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <line x1="1200" y1="0" x2="1440" y2="200" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                    <circle cx="400" cy="0" r="6" fill="#f5ab8b"/>
                    <circle cx="800" cy="200" r="6" fill="#f5ab8b"/>
                    <circle cx="1200" cy="0" r="6" fill="#f5ab8b"/>
                    <circle cx="1440" cy="200" r="6" fill="#f5ab8b"/>
                    <circle cx="0" cy="400" r="6" fill="#f5ab8b"/>
                </svg>
            </div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">Contact</p>
                <h1 class="hb-hero-title">Get in Touch</h1>
                <p class="hb-hero-description">
                    Ready to transform your business with custom software? Let's start the conversation. 
                    I offer a free consultation to discuss your needs.
                </p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <div class="hb-contact-grid">
                        <!-- Contact Form -->
                        <div class="hb-contact-card">
                            <h2 class="hb-contact-card-title">Contact Form</h2>
                            <p class="hb-contact-card-description">
                                Fill out the form below and I'll get back to you within 24 hours.
                            </p>
                            
                            <form @submit.prevent="submitForm" class="hb-form">
                                <div class="hb-form-group">
                                    <label for="name" class="hb-form-label">Full Name *</label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        v-model="form.name" 
                                        @blur="validateField('name')"
                                        class="hb-form-input"
                                        :class="{ 'hb-form-input-error': errors.name }"
                                    />
                                    <p v-if="errors.name" class="hb-form-error">{{ errors.name }}</p>
                                </div>
                                
                                <div class="hb-form-group">
                                    <label for="email" class="hb-form-label">Email *</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        v-model="form.email" 
                                        @blur="validateField('email')"
                                        class="hb-form-input"
                                        :class="{ 'hb-form-input-error': errors.email }"
                                    />
                                    <p v-if="errors.email" class="hb-form-error">{{ errors.email }}</p>
                                </div>
                                
                                <div class="hb-form-group">
                                    <label for="phone" class="hb-form-label">Phone</label>
                                    <input 
                                        type="tel" 
                                        id="phone" 
                                        v-model="form.phone"
                                        class="hb-form-input"
                                    />
                                </div>
                                
                                <div class="hb-form-group">
                                    <label for="service" class="hb-form-label">Service *</label>
                                    <select 
                                        id="service" 
                                        v-model="form.service" 
                                        @change="validateField('service')"
                                        class="hb-form-input hb-form-select"
                                        :class="{ 'hb-form-input-error': errors.service }"
                                    >
                                        <option value="">Select...</option>
                                        <option value="warehouse">Warehouse Management</option>
                                        <option value="real-estate">Real Estate App</option>
                                        <option value="api">API Integration</option>
                                        <option value="headless">Headless Web App</option>
                                        <option value="custom">Custom Solution</option>
                                    </select>
                                    <p v-if="errors.service" class="hb-form-error">{{ errors.service }}</p>
                                </div>
                                
                                <div class="hb-form-group">
                                    <label for="message" class="hb-form-label">Message *</label>
                                    <textarea 
                                        id="message" 
                                        v-model="form.message" 
                                        @blur="validateField('message')"
                                        rows="4"
                                        class="hb-form-input hb-form-textarea"
                                        :class="{ 'hb-form-input-error': errors.message }"
                                    ></textarea>
                                    <p v-if="errors.message" class="hb-form-error">{{ errors.message }}</p>
                                </div>
                                
                                <button 
                                    type="submit" 
                                    :disabled="isSubmitting || Object.keys(errors).length > 0"
                                    class="hb-btn hb-btn-primary w-full"
                                >
                                    <span v-if="!isSubmitting">Send Message</span>
                                    <span v-else>Sending...</span>
                                </button>
                            </form>
                            
                            <div v-if="successMessage" class="hb-alert hb-alert-success">
                                {{ successMessage }}
                            </div>
                            <div v-if="errorMessage" class="hb-alert hb-alert-error">
                                {{ errorMessage }}
                            </div>
                        </div>
                        
                        <!-- Contact Info -->
                        <div class="hb-contact-card">
                            <h2 class="hb-contact-card-title">Connect</h2>
                            
                            <div class="hb-contact-methods">
                                <div class="hb-contact-method">
                                    <svg class="hb-contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:rik@verbeek.ug" class="hb-contact-link">rik@verbeek.ug</a>
                                </div>
                                <div class="hb-contact-method">
                                    <svg class="hb-contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <a href="https://wa.me/256" target="_blank" class="hb-contact-link">+256 (WhatsApp)</a>
                                </div>
                                <div class="hb-contact-method">
                                    <svg class="hb-contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="hb-contact-text">Kampala, Uganda</span>
                                </div>
                            </div>
                            
                            <div class="hb-social-links">
                                <a href="https://linkedin.com/in/rikverbeek" target="_blank" class="hb-social-link">
                                    <svg class="hb-social-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <a href="https://github.com/rvrbk" target="_blank" class="hb-social-link">
                                    <svg class="hb-social-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.608 1.647.242 2.717.116 3.177.88 1.008 1.241 2.381 1.241 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                            
                            <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="hb-btn hb-btn-light w-full hb-calendly-btn">
                                Book a Call
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { ref } from 'vue'

export default {
    name: 'Contact',
    setup() {
        const form = ref({
            name: '',
            email: '',
            phone: '',
            service: '',
            message: ''
        })
        
        const errors = ref({})
        const isSubmitting = ref(false)
        const successMessage = ref('')
        const errorMessage = ref('')
        
        const validateField = (field) => {
            if (!form.value[field]) {
                errors.value[field] = 'This field is required'
            } else if (field === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.value.email)) {
                errors.value[field] = 'Please enter a valid email'
            } else {
                delete errors.value[field]
            }
        }
        
        const validateForm = () => {
            validateField('name')
            validateField('email')
            validateField('service')
            validateField('message')
            return Object.keys(errors.value).length === 0
        }
        
        const submitForm = async () => {
            if (!validateForm()) return
            isSubmitting.value = true
            try {
                await new Promise(resolve => setTimeout(resolve, 1500))
                successMessage.value = 'Thank you! I will get back to you within 24 hours.'
                form.value = { name: '', email: '', phone: '', service: '', message: '' }
            } catch (err) {
                errorMessage.value = 'Error sending message. Please try again.'
            } finally {
                isSubmitting.value = false
            }
        }
        
        return { form, errors, isSubmitting, successMessage, errorMessage, validateField, submitForm }
    }
}
</script>

<style scoped>
:root {
    --hb-primary: #003885;
    --hb-accent: #f5ab8b;
    --hb-text: #ffffff;
    --hb-text-muted: rgba(255, 255, 255, 0.7);
}

.hb-page-content { position: relative; z-index: 1; }
.hb-section { padding: 6rem 0; position: relative; }
.hb-hero-section { min-height: 50vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
.hb-hero-content { max-width: 800px; padding: 0 2rem; }
.hb-hero-subtitle { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 1.5rem; letter-spacing: 0.1em; }
.hb-hero-title { font-family: Georgia, serif; font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; letter-spacing: -0.01em; }
.hb-hero-description { font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); max-width: 700px; margin: 0 auto; }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; }
.hb-contact-card { padding: 2rem; border-top: 1px solid rgba(255, 255, 255, 0.2); }
.hb-contact-card-title { font-family: Georgia, serif; font-size: 1.5rem; font-weight: 400; color: var(--hb-text); margin-bottom: 1.5rem; letter-spacing: -0.01em; }
.hb-contact-card-description { font-size: 0.95rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-form { display: flex; flex-direction: column; gap: 1.5rem; }
.hb-form-group { display: flex; flex-direction: column; gap: 0.5rem; }
.hb-form-label { font-size: 0.875rem; color: var(--hb-text-muted); }
.hb-form-input { background: transparent; border: 1px solid rgba(255, 255, 255, 0.3); color: var(--hb-text); padding: 0.75rem; font-size: 1rem; transition: all 0.2s ease; }
.hb-form-input:focus { outline: none; border-color: var(--hb-accent); }
.hb-form-input::placeholder { color: rgba(255, 255, 255, 0.4); }
.hb-form-input-error { border-color: #ff6b6b; }
.hb-form-textarea { resize: vertical; min-height: 120px; }
.hb-form-select { cursor: pointer; }
.hb-form-error { color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem; }
.hb-contact-methods { display: flex; flex-direction: column; gap: 1.5rem; }
.hb-contact-method { display: flex; align-items: center; gap: 0.75rem; }
.hb-contact-icon { width: 24px; height: 24px; color: var(--hb-accent); }
.hb-contact-link { color: var(--hb-text-muted); transition: color 0.2s ease; text-decoration: none; }
.hb-contact-link:hover { color: var(--hb-accent); }
.hb-contact-text { color: var(--hb-text-muted); }
.hb-social-links { display: flex; gap: 1rem; margin-top: 2rem; }
.hb-social-link { color: var(--hb-text-muted); transition: color 0.2s ease; }
.hb-social-link:hover { color: var(--hb-accent); }
.hb-social-icon { width: 24px; height: 24px; }
.hb-calendly-btn { margin-top: 2rem; }
.hb-alert { padding: 1rem; border-radius: 4px; margin-top: 1rem; font-size: 0.875rem; }
.hb-alert-success { background: rgba(76, 175, 80, 0.1); border: 1px solid rgba(76, 175, 80, 0.3); color: rgba(76, 175, 80, 0.8); }
.hb-alert-error { background: rgba(244, 67, 54, 0.1); border: 1px solid rgba(244, 67, 54, 0.3); color: rgba(244, 67, 54, 0.8); }
.hb-btn { display: inline-block; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; border-radius: 0; transition: all 0.2s ease; cursor: pointer; border: 1px solid transparent; }
.hb-btn-primary { background-color: var(--hb-text); color: var(--hb-primary); }
.hb-btn-primary:hover { background-color: rgba(255, 255, 255, 0.9); }
.hb-btn-primary:disabled { opacity: 0.6; cursor: not-allowed; }
.hb-btn-light { background-color: transparent; color: var(--hb-text); border: 1px solid var(--hb-text); }
.hb-btn-light:hover { background-color: var(--hb-text); color: var(--hb-primary); }
@media (max-width: 768px) { .hb-section { padding: 4rem 0; } .hb-contact-grid { grid-template-columns: 1fr; } .hb-hero-bg { opacity: 0.5; } }
@media (max-width: 480px) { .hb-hero-title { font-size: 1.75rem; } }
</style>
