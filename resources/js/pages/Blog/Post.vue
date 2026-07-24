<template>
    <div class="bg-slate-50 dark:bg-slate-800 py-20">
        <div class="container mx-auto px-6">
            <!-- Back Navigation -->
            <div class="mb-8">
                <router-link 
                    to="/blog" 
                    class="inline-flex items-center text-blue-800 dark:text-blue-400 hover:underline"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Blog
                </router-link>
            </div>

            <!-- Post Not Found -->
            <div class="text-center py-20">
                <svg class="w-20 h-20 text-gray-400 dark:text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3h3m-3 4h3m-3 4h3m-3 4h3" />
                </svg>
                <h1 class="text-4xl font-bold text-slate-800 dark:text-white mb-4">
                    Article Not Found
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">
                    This article doesn't exist or the URL may be incorrect. 
                    Please check the URL or browse our available articles.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <router-link 
                        to="/blog" 
                        class="inline-flex items-center justify-center bg-blue-800 hover:bg-blue-900 text-white font-semibold px-6 py-3 rounded-lg transition-colors"
                    >
                        View All Articles
                    </router-link>
                    <router-link 
                        to="/contact" 
                        class="inline-flex items-center justify-center border-2 border-blue-600 dark:border-blue-400 text-blue-800 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-gray-600 font-semibold px-6 py-3 rounded-lg transition-colors"
                    >
                        Contact Me
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted } from 'vue'
import { useRoute } from 'vue-router'

export default {
    name: 'BlogPost',
    setup() {
        const route = useRoute()
        
        onMounted(() => {
            // You can fetch post details based on route.params.slug here
            // For now, we just show a not found message
        })
        
        return {
            route
        }
    }
}
</script>

<style scoped>
/* Add any custom styles here */
</style>
