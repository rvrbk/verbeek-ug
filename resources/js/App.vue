<template>
    <div class="min-h-screen">
        <AppLayout>
            <router-view v-slot="{ Component }">
                <transition name="page" mode="out-in">
                    <component :is="Component" />
                </transition>
            </router-view>
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
