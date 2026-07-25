<template>
    <div>
        <!-- Hero Section -->
        <section class="hb-hero geometric-bg min-h-[50vh] flex items-center">
            <div class="geometric-pattern">
                <svg viewBox="0 0 1440 600" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <pattern id="dots" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                            <circle cx="20" cy="20" r="2" />
                            <circle cx="80" cy="40" r="2" />
                            <circle cx="40" cy="80" r="2" />
                            <circle cx="60" cy="60" r="2" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots)" opacity="0.3" />
                    <line x1="0" y1="0" x2="1440" y2="600" stroke="rgba(255,255,255,0.1)" />
                    <line x1="1440" y1="0" x2="0" y2="300" stroke="rgba(255,255,255,0.1)" />
                    <line x1="0" y1="300" x2="720" y2="0" stroke="rgba(255,255,255,0.1)" />
                    <line x1="720" y1="600" x2="1440" y2="300" stroke="rgba(255,255,255,0.1)" />
                </svg>
            </div>
            <div class="hb-hero-content text-center">
                <p class="text-text-soft-light text-sm tracking-widest uppercase mb-6">Contact</p>
                <h1 class="hb-hero h1">Get in Touch</h1>
                <p class="hb-hero p">
                    Ready to transform your business with custom software? Let's start the conversation. 
                    I offer a free consultation to discuss your needs.
                </p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="hb-content-section light">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12">
                        <!-- Contact Form -->
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h2 class="text-color-primary font-serif text-2xl mb-6">Contact Form</h2>
                            <p class="text-gray-600 mb-8">
                                Fill out the form below and I'll get back to you within 24 hours.
                            </p>
                            
                            <form @submit.prevent="submitForm" class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm text-gray-700 mb-2">Full Name *</label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        v-model="form.name" 
                                        @blur="validateField('name')"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-sm focus:ring-2 focus:ring-accent-orange focus:border-accent-orange transition-colors"
                                        :class="{ 'border-red-500': errors.name }"
                                    />
                                    <p v-if="errors.name" class="text-red-500 text-sm mt-1">{{ errors.name }}</p>
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm text-gray-700 mb-2">Email *</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        v-model="form.email" 
                                        @blur="validateField('email')"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-sm focus:ring-2 focus:ring-accent-orange focus:border-accent-orange transition-colors"
                                        :class="{ 'border-red-500': errors.email }"
                                    />
                                    <p v-if="errors.email" class="text-red-500 text-sm mt-1">{{ errors.email }}</p>
                                </div>
                                
                                <div>
                                    <label for="phone" class="block text-sm text-gray-700 mb-2">Phone</label>
                                    <input 
                                        type="tel" 
                                        id="phone" 
                                        v-model="form.phone"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-sm focus:ring-2 focus:ring-accent-orange focus:border-accent-orange transition-colors"
                                    />
                                </div>
                                
                                <div>
                                    <label for="service" class="block text-sm text-gray-700 mb-2">Service *</label>
                                    <select 
                                        id="service" 
                                        v-model="form.service" 
                                        @change="validateField('service')"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-sm focus:ring-2 focus:ring-accent-orange focus:border-accent-orange transition-colors"
                                        :class="{ 'border-red-500': errors.service }"
                                    >
                                        <option value="">Select...</option>
                                        <option value="warehouse">Warehouse Management</option>
                                        <option value="real-estate">Real Estate App</option>
                                        <option value="api">API Integration</option>
                                        <option value="headless">Headless Web App</option>
                                        <option value="custom">Custom Solution</option>
                                    </select>
                                    <p v-if="errors.service" class="text-red-500 text-sm mt-1">{{ errors.service }}</p>
                                </div>
                                
                                <div>
                                    <label for="message" class="block text-sm text-gray-700 mb-2">Message *</label>
                                    <textarea 
                                        id="message" 
                                        v-model="form.message" 
                                        @blur="validateField('message')"
                                        rows="4"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-sm focus:ring-2 focus:ring-accent-orange focus:border-accent-orange transition-colors resize-none"
                                        :class="{ 'border-red-500': errors.message }"
                                    ></textarea>
                                    <p v-if="errors.message" class="text-red-500 text-sm mt-1">{{ errors.message }}</p>
                                </div>
                                
                                <button 
                                    type="submit" 
                                    :disabled="isSubmitting || Object.keys(errors).length > 0"
                                    class="hb-btn hb-btn-primary w-full py-4"
                                >
                                    <span v-if="!isSubmitting">Send Message</span>
                                    <span v-else>Sending...</span>
                                </button>
                            </form>
                            
                            <div v-if="successMessage" class="mt-6 bg-green-50 border border-green-200 rounded-sm p-4 text-center text-green-700">
                                {{ successMessage }}
                            </div>
                            <div v-if="errorMessage" class="mt-6 bg-red-50 border border-red-200 rounded-sm p-4 text-center text-red-700">
                                {{ errorMessage }}
                            </div>
                        </div>
                        
                        <!-- Contact Info -->
                        <div class="bg-bg-light-gray p-8 rounded-lg">
                            <h2 class="text-color-primary font-serif text-2xl mb-6">Connect</h2>
                            
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:rik@verbeek.ug" class="text-gray-700 hover:text-accent-orange">rik@verbeek.ug</a>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <a href="https://wa.me/256" target="_blank" class="text-gray-700 hover:text-accent-orange">+256 (WhatsApp)</a>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-accent-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-700">Kampala, Uganda</span>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4 mt-8">
                                <a href="https://linkedin.com/in/rikverbeek" target="_blank" class="text-gray-600 hover:text-accent-orange">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <a href="https://github.com/rvrbk" target="_blank" class="text-gray-600 hover:text-accent-orange">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.608 1.647.242 2.717.116 3.177.88 1.008 1.241 2.381 1.241 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                            
                            <a href="https://calendly.com/rik-verbeek/free-consultation" target="_blank" class="hb-btn hb-btn-light w-full mt-6">
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
.color-primary { color: #003885; }
.text-gray-700 { color: #555; }
.text-gray-600 { color: #666; }
.bg-bg-light-gray { background-color: #f5f5f5; }
</style>
