<template>
    <div class="bg-gray-50 dark:bg-gray-800 py-20">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-white mb-4">
                    Blog
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Actionable insights and tips to help Ugandan businesses leverage technology 
                    for growth and success.
                </p>
            </div>

            <!-- Featured Post -->
            <div class="mb-16">
                <article class="bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden">
                    <div class="grid lg:grid-cols-2">
                        <div class="h-64 lg:h-auto bg-gradient-to-br from-blue-600 to-blue-800"></div>
                        <div class="p-8 lg:p-10 flex flex-col justify-center">
                            <div class="mb-4">
                                <span class="inline-block bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-3 py-1 rounded-full text-sm mb-3">
                                    Warehouse Management
                                </span>
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    May 15, 2026 • 5 min read
                                </div>
                            </div>
                            <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 dark:text-white mb-4">
                                5 Signs Your Farm Needs a Warehouse Management System
                            </h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Are you losing money due to poor inventory tracking? Discover the warning signs and how a WMS can help your Ugandan farm reduce waste and increase profits.
                            </p>
                            <router-link 
                                to="/blog/5-signs-your-farm-needs-wms" 
                                class="inline-flex items-center text-blue-600 dark:text-blue-400 font-medium hover:underline"
                            >
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </router-link>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Posts Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Post 1 -->
                <article class="bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700"></div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">May 8, 2026 • 7 min read</div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">
                            How a Custom Real Estate App Can 10x Your Property Sales
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                            Learn how digital tools can streamline your property management, reach more buyers, and close deals faster in Uganda's competitive real estate market.
                        </p>
                        <router-link to="/blog/custom-real-estate-app-sales" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                            Read more
                        </router-link>
                    </div>
                </article>
                
                <!-- Post 2 -->
                <article class="bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700"></div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">May 1, 2026 • 6 min read</div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">
                            Why Headless Architectures Are Perfect for Scaling Businesses in Uganda
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                            Future-proof your Ugandan business with headless architecture. Learn the benefits: flexibility, performance, and scalability for growing enterprises.
                        </p>
                        <router-link to="/blog/headless-architectures-scaling" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                            Read more
                        </router-link>
                    </div>
                </article>
                
                <!-- Post 3 -->
                <article class="bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-700"></div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">April 20, 2026 • 8 min read</div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">
                            The Ultimate Guide to API Integrations for Ugandan Businesses
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                            Connect your legacy systems and modern tools seamlessly. Learn how API integrations can save time, reduce errors, and improve efficiency.
                        </p>
                        <router-link to="/blog/api-integrations-guide" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                            Read more
                        </router-link>
                    </div>
                </article>
            </div>

            <!-- Categories Section -->
            <section class="mb-16">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-8">
                    Browse by Category
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <router-link 
                        to="/blog?category=warehouse" 
                        class="bg-blue-100 dark:bg-blue-900/30 rounded-xl p-6 hover:bg-blue-200 dark:hover:bg-blue-800/40 transition-colors group"
                    >
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-blue-700 dark:text-blue-300 mb-1">Warehouse Management</h3>
                                <p class="text-sm text-blue-600 dark:text-blue-400">5 articles</p>
                            </div>
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </router-link>
                    
                    <router-link 
                        to="/blog?category=real-estate" 
                        class="bg-green-100 dark:bg-green-900/30 rounded-xl p-6 hover:bg-green-200 dark:hover:bg-green-800/40 transition-colors group"
                    >
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-green-700 dark:text-green-300 mb-1">Real Estate</h3>
                                <p class="text-sm text-green-600 dark:text-green-400">4 articles</p>
                            </div>
                            <svg class="w-6 h-6 text-green-600 dark:text-green-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </router-link>
                    
                    <router-link 
                        to="/blog?category=technology" 
                        class="bg-purple-100 dark:bg-purple-900/30 rounded-xl p-6 hover:bg-purple-200 dark:hover:bg-purple-800/40 transition-colors group"
                    >
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-purple-700 dark:text-purple-300 mb-1">Technology</h3>
                                <p class="text-sm text-purple-600 dark:text-purple-400">6 articles</p>
                            </div>
                            <svg class="w-6 h-6 text-purple-600 dark:text-purple-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </router-link>
                    
                    <router-link 
                        to="/blog?category=business" 
                        class="bg-orange-100 dark:bg-orange-900/30 rounded-xl p-6 hover:bg-orange-200 dark:hover:bg-orange-800/40 transition-colors group"
                    >
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-orange-700 dark:text-orange-300 mb-1">Business Tips</h3>
                                <p class="text-sm text-orange-600 dark:text-orange-400">3 articles</p>
                            </div>
                            <svg class="w-6 h-6 text-orange-600 dark:text-orange-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </router-link>
                </div>
            </section>

            <!-- Newsletter Signup -->
            <section class="bg-white dark:bg-gray-700 rounded-2xl p-8 lg:p-12 text-center">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
                    Get Weekly Tech Insights
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                    Subscribe to my newsletter for actionable tips, case studies, and exclusive content 
                    to help your Ugandan business grow with technology.
                </p>
                <form @submit.prevent="subscribe" class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                    <input 
                        type="email" 
                        v-model="email" 
                        placeholder="Enter your email..."
                        class="flex-grow px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white transition-colors"
                        required
                    />
                    <button 
                        type="submit" 
                        :disabled="isSubscribing"
                        class="bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400 disabled:cursor-not-allowed text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                    >
                        <span v-if="!isSubscribing">Subscribe</span>
                        <span v-else class="flex items-center justify-center">
                            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Subscribing...
                        </span>
                    </button>
                </form>
                <p 
                    v-if="successMessage" 
                    class="mt-4 text-green-600 dark:text-green-400 text-sm"
                >
                    {{ successMessage }}
                </p>
            </section>

            <!-- CTA Section -->
            <section class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                    Ready to Build Your Own Solution?
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                    Reading is great, but taking action is better. Let's discuss how we can implement 
                    these strategies for your specific business.
                </p>
                <router-link 
                    to="/contact" 
                    class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-lg transition-colors text-lg"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Get a Free Consultation
                </router-link>
            </section>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue'

export default {
    name: 'Blog',
    setup() {
        const email = ref('')
        const isSubscribing = ref(false)
        const successMessage = ref('')
        
        const subscribe = async () => {
            isSubscribing.value = true
            
            try {
                // Simulate subscription
                await new Promise(resolve => setTimeout(resolve, 1500))
                
                // In a real implementation, you would send the email to your Laravel backend
                // const response = await axios.post('/api/newsletter', { email: email.value })
                
                successMessage.value = 'Thank you for subscribing! Check your email for confirmation.'
                email.value = ''
                
                setTimeout(() => {
                    successMessage.value = ''
                }, 5000)
                
            } catch (error) {
                console.error('Error subscribing:', error)
            } finally {
                isSubscribing.value = false
            }
        }
        
        return {
            email,
            isSubscribing,
            successMessage,
            subscribe
        }
    }
}
</script>

<style scoped>
/* Add any custom styles here */
</style>
