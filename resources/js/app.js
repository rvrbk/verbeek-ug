import { createApp } from 'vue'
import router from './router'
import i18n from './i18n'
import App from './App.vue'

// Create Vue app
const app = createApp(App)

// Use router
app.use(router)

// Use i18n
app.use(i18n)

// Mount the app
app.mount('#app')
