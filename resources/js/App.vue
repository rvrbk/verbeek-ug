<template>
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
        <AppLayout>
            <router-view />
        </AppLayout>
    </div>
</template>

<script>
import AppLayout from './layouts/AppLayout.vue'

export default {
    components: {
        AppLayout
    }
}
</script>
