<template>
    <div class="lv" aria-hidden="true">
        <div class="lv-brand">
            <span class="lv-logo">L</span>
            <div>
                <strong>Lore</strong>
                <small>Everything your business depends on, watched</small>
            </div>
        </div>
        <div class="lv-row" v-for="m in monitors" :key="m.name">
            <span class="lv-dot" :class="m.state"></span>
            <b>{{ m.name }}</b>
            <i>{{ m.note }}</i>
        </div>
        <div class="lv-alert">
            <span>Incident opened</span>
            <em>Telegram alert sent</em>
        </div>
    </div>
</template>

<script>
export default {
    name: 'LoreVisual',
    data() {
        return {
            monitors: [
                { name: 'Online shop', note: 'Up, 99.98%', state: 'ok' },
                { name: 'Booking site', note: 'Up, 100%', state: 'ok' },
                { name: 'SSL certificate', note: 'Expires in 12 days', state: 'warn' }
            ]
        }
    }
}
</script>

<style scoped>
.lv { position: relative; width: 100%; max-width: 600px; aspect-ratio: 1.3; margin: 0 auto; border-radius: 12px; overflow: hidden; border: 1px solid rgba(169, 183, 198, 0.25); box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35); background: #26384a; padding: 5% 5% 0; display: grid; align-content: start; gap: 0.6rem; }
.lv-brand { display: flex; align-items: center; gap: 0.7rem; margin-bottom: 0.2rem; }
.lv-logo { display: grid; place-items: center; width: 2.4rem; height: 2.4rem; border-radius: 8px; background: #ff7a1a; color: #121a23; font-weight: 800; font-size: 0.95rem; }
.lv-brand strong { display: block; color: #fff; font-size: 1.15rem; line-height: 1.1; }
.lv-brand small { display: block; margin-top: 0.15rem; color: #a9b7c6; font-size: 0.78rem; }
.lv-row { display: flex; align-items: center; gap: 0.7rem; background: #fff; color: #1c2430; border-radius: 10px; padding: 0.6rem 0.8rem; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.3); }
.lv-row b { font-size: 0.85rem; flex: 1; }
.lv-row i { font-style: normal; font-size: 0.75rem; color: #5b6b7c; }
.lv-dot { width: 0.7rem; height: 0.7rem; border-radius: 50%; background: #1e7a4c; }
.lv-dot.warn { background: #ff7a1a; }
.lv-alert { position: absolute; right: 5%; bottom: -6%; width: 46%; background: #fff; border-radius: 10px 10px 0 0; padding: 0.7rem 0.8rem 1.4rem; display: grid; gap: 0.3rem; box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4); animation: lv-float 6s ease-in-out infinite; }
.lv-alert span { font-size: 0.8rem; font-weight: 700; color: #ff7a1a; }
.lv-alert em { font-style: normal; font-size: 0.72rem; font-weight: 700; color: #1e7a4c; }
@keyframes lv-float { 50% { transform: translateY(-8px); } }
@media (prefers-reduced-motion: reduce) { .lv-alert { animation: none; } }
</style>
