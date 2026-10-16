<template>
    <div class="pv" aria-hidden="true">
        <div class="pv-glow"></div>
        <div class="pv-card pv-main">
            <div class="pv-head">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"><path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"/></svg>
                <b>Prompt a Tool</b>
            </div>
            <div class="pv-input">
                <i style="width: 88%"></i><i style="width: 64%"></i><span class="pv-caret"></span>
            </div>
            <div class="pv-chips"><em class="on">Web</em><em>iOS</em><em>Android</em></div>
            <div class="pv-btn"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2l2.2 6.3L21 10l-6.8 1.7L12 18l-2.2-6.3L3 10l6.8-1.7z"/></svg><i></i></div>
        </div>
        <div class="pv-card pv-out pv-out-1"><em>ROLE</em><i style="width: 78%"></i></div>
        <div class="pv-card pv-out pv-out-2"><em>PROMPT</em><i style="width: 95%"></i><i style="width: 70%"></i></div>
        <div class="pv-card pv-out pv-out-3"><em>SKILL</em><i style="width: 60%"></i></div>
        <div class="pv-langs"><b>EN</b><b>LG</b><b>SW</b><b>FR</b><b>+6</b></div>
    </div>
</template>

<style scoped>
.pv { position: relative; width: 100%; aspect-ratio: 1.25; max-width: 600px; margin: 0 auto; }
.pv-glow { position: absolute; inset: 8% 4%; background: radial-gradient(closest-side, rgba(255, 122, 26, 0.4), transparent 75%); filter: blur(20px); }
.pv-card { position: absolute; background: #fff; border-radius: 12px; box-shadow: 0 22px 50px rgba(0, 0, 0, 0.35); color: #1c2430; }
.pv-main { left: 0; top: 6%; width: 58%; padding: 1.1rem; animation: pv-float 7s ease-in-out infinite; }
.pv-head { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem; color: #1c2430; }
.pv-head b { font-size: 1rem; }
.pv-input { position: relative; background: #f4f7fa; border: 1px solid #d3dce6; border-radius: 8px; padding: 0.8rem; display: grid; gap: 0.5rem; height: 5.2rem; }
.pv-input i, .pv-out i { display: block; height: 7px; border-radius: 4px; background: #d3dce6; }
.pv-caret { position: absolute; left: calc(0.8rem + 64%); top: calc(0.8rem + 15px); width: 2px; height: 14px; background: #ff7a1a; animation: pv-blink 1s steps(2) infinite; }
.pv-chips { display: flex; gap: 0.4rem; margin: 0.9rem 0; }
.pv-chips em { font-style: normal; font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.7rem; border-radius: 999px; border: 1px solid #d3dce6; color: #6f8196; }
.pv-chips em.on { background: #1c2430; color: #fff; border-color: #1c2430; }
.pv-btn { display: flex; align-items: center; gap: 0.6rem; background: #ff7a1a; color: #fff; border-radius: 8px; padding: 0.65rem 0.9rem; }
.pv-btn i { height: 7px; width: 5.5rem; border-radius: 4px; background: rgba(255, 255, 255, 0.75); }
.pv-out { width: 46%; padding: 0.8rem 0.95rem; display: grid; gap: 0.45rem; border-left: 4px solid #ff7a1a; }
.pv-out em { font-style: normal; font-size: 0.62rem; font-weight: 700; letter-spacing: 0.15em; color: #ff7a1a; }
.pv-out-1 { right: 0; top: 2%; animation: pv-float 6s -1s ease-in-out infinite; }
.pv-out-2 { right: 5%; top: 34%; animation: pv-float 8s -3s ease-in-out infinite; }
.pv-out-3 { right: 0; top: 66%; animation: pv-float 7s -2s ease-in-out infinite; }
.pv-langs { position: absolute; left: 0; top: 80%; display: flex; gap: 0.4rem; }
.pv-langs b { font-size: 0.68rem; letter-spacing: 0.08em; padding: 0.3rem 0.55rem; border: 1px solid rgba(169, 183, 198, 0.4); color: #a9b7c6; border-radius: 4px; background: rgba(18, 26, 35, 0.6); }
@keyframes pv-float { 50% { transform: translateY(-9px); } }
@keyframes pv-blink { 50% { opacity: 0; } }
@media (prefers-reduced-motion: reduce) { .pv-card, .pv-caret { animation: none; } }
</style>
