<template>
    <div class="lv" aria-hidden="true">
        <div class="lv-brand">
            <span class="lv-logo">L</span>
            <div>
                <strong>Lore</strong>
                <small>Built around your business</small>
            </div>
        </div>
        <div class="lv-label">Pick what you need</div>
        <div class="lv-grid">
            <div class="lv-tile" v-for="m in modules" :key="m.name" :class="{ on: m.on }">
                <span class="lv-dot"></span>
                <b>{{ m.name }}</b>
            </div>
        </div>
        <div class="lv-alert">
            <span>Your setup, your alerts</span>
            <em>Tailored per business</em>
        </div>
    </div>
</template>

<script>
export default {
    name: 'LoreVisual',
    data() {
        return {
            modules: [
                { name: 'Uptime checks', on: true },
                { name: 'Stock levels', on: true },
                { name: 'Payments', on: true },
                { name: 'Renewals', on: true },
                { name: 'Deliveries', on: false },
                { name: 'Status page', on: false }
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
.lv-label { font-size: 0.68rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #a9b7c6; padding: 0 0.2rem; }
.lv-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem; }
.lv-tile { display: flex; align-items: center; gap: 0.6rem; background: rgba(255, 255, 255, 0.08); color: #a9b7c6; border: 1px dashed rgba(169, 183, 198, 0.4); border-radius: 10px; padding: 0.55rem 0.8rem; }
.lv-tile.on { background: #fff; color: #1c2430; border: 1px solid transparent; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.3); }
.lv-tile b { font-size: 0.8rem; }
.lv-dot { width: 0.65rem; height: 0.65rem; border-radius: 50%; background: rgba(169, 183, 198, 0.5); }
.lv-tile.on .lv-dot { background: #1e7a4c; }
.lv-alert { position: absolute; right: 5%; bottom: -6%; width: 46%; background: #fff; border-radius: 10px 10px 0 0; padding: 0.7rem 0.8rem 1.4rem; display: grid; gap: 0.3rem; box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4); animation: lv-float 6s ease-in-out infinite; }
.lv-alert span { font-size: 0.8rem; font-weight: 700; color: #ff7a1a; }
.lv-alert em { font-style: normal; font-size: 0.72rem; font-weight: 700; color: #1e7a4c; }
@keyframes lv-float { 50% { transform: translateY(-8px); } }
@media (prefers-reduced-motion: reduce) { .lv-alert { animation: none; } }
</style>
