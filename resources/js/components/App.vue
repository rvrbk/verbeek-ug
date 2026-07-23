<template>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-4 py-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    Laravel + Vue
                </h1>
                <nav class="flex space-x-4">
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-500">Home</a>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-500">About</a>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-500">Contact</a>
                </nav>
            </header>
            
            <main>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">
                        Welcome to your Laravel + Vue application!
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        You have successfully set up a Laravel backend with Vue frontend. 
                        This is a starter template to help you build modern, reactive applications.
                    </p>
                    
                    <div class="flex space-x-4">
                        <button 
                            @click="increment" 
                            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors"
                        >
                            Count: {{ count }}
                        </button>
                        <button 
                            @click="reset" 
                            class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg transition-colors"
                        >
                            Reset
                        </button>
                    </div>
                </div>
            </main>
            
            <footer class="mt-8 pt-4 border-t border-gray-200 dark:border-gray-700">
                <p class="text-sm text-gray-500 dark:text-gray-400 text-center">
                    &copy; {{ new Date().getFullYear() }} - Laravel + Vue Starter
                </p>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            count: 0
        }
    },
    methods: {
        increment() {
            this.count++
        },
        reset() {
            this.count = 0
        }
    }
}
</script>

<style scoped>
/* Scoped styles for this component */
</style>
