<template>
    <div class="jv" aria-hidden="true">
        <div class="jv-brand">
            <span class="jv-logo">JS</span>
            <div>
                <strong>Job Scout</strong>
                <small>Finds jobs that fit you, writes the CV</small>
            </div>
        </div>
        <div class="jv-cols"><span>Jobs found for you</span><span>Match</span></div>
        <div class="jv-row" v-for="r in rows" :key="r.title">
            <div class="jv-text">
                <b>{{ r.title }}</b>
                <i :style="{ width: r.w }"></i>
            </div>
            <span class="jv-score" :class="{ hi: r.score >= 85 }">{{ r.score }}%</span>
        </div>
        <div class="jv-doc">
            <span>Tailored CV</span>
            <i style="width: 80%"></i>
            <i style="width: 56%"></i>
            <em>&#10003; Every claim verified</em>
        </div>
    </div>
</template>

<script>
export default {
    name: 'JobVisual',
    data() {
        return {
            rows: [
                { title: 'Backend developer', w: '62%', score: 92 },
                { title: 'Full-stack engineer', w: '74%', score: 87 },
                { title: 'Laravel developer', w: '55%', score: 81 }
            ]
        }
    }
}
</script>

<style scoped>
.jv { position: relative; width: 100%; max-width: 600px; aspect-ratio: 1.3; margin: 0 auto; border-radius: 12px; overflow: hidden; border: 1px solid rgba(169, 183, 198, 0.25); box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35); background: #26384a; padding: 5% 5% 0; display: grid; align-content: start; gap: 0.6rem; }
.jv-brand { display: flex; align-items: center; gap: 0.7rem; margin-bottom: 0.2rem; }
.jv-logo { display: grid; place-items: center; width: 2.4rem; height: 2.4rem; border-radius: 8px; background: #ff7a1a; color: #121a23; font-weight: 800; font-size: 0.95rem; }
.jv-brand strong { display: block; color: #fff; font-size: 1.15rem; line-height: 1.1; }
.jv-brand small { display: block; margin-top: 0.15rem; color: #a9b7c6; font-size: 0.78rem; }
.jv-cols { display: flex; justify-content: space-between; padding: 0 0.8rem; font-size: 0.68rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #a9b7c6; }
.jv-row { display: flex; align-items: center; justify-content: space-between; gap: 1rem; background: #fff; color: #1c2430; border-radius: 10px; padding: 0.6rem 0.8rem; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.3); }
.jv-text { display: grid; gap: 0.4rem; flex: 1; }
.jv-text b { font-size: 0.85rem; }
.jv-text i, .jv-doc i { display: block; height: 6px; border-radius: 3px; background: #d3dce6; }
.jv-score { font-size: 0.8rem; font-weight: 700; padding: 0.25rem 0.55rem; border-radius: 999px; background: #e6ecf2; color: #2e3d4f; }
.jv-score.hi { background: #ff7a1a; color: #121a23; }
.jv-doc { position: absolute; right: 5%; bottom: -6%; width: 44%; background: #fff; border-radius: 10px 10px 0 0; padding: 0.7rem 0.8rem 1.4rem; display: grid; gap: 0.4rem; box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4); animation: jv-float 6s ease-in-out infinite; }
.jv-doc span { font-size: 0.8rem; font-weight: 700; color: #ff7a1a; }
.jv-doc em { font-style: normal; font-size: 0.72rem; font-weight: 700; color: #1e7a4c; }
@keyframes jv-float { 50% { transform: translateY(-8px); } }
@media (prefers-reduced-motion: reduce) { .jv-doc { animation: none; } }
</style>
