<template>
    <div class="mv" aria-hidden="true">
        <svg viewBox="0 0 560 420" class="mv-map" preserveAspectRatio="xMidYMid slice">
            <rect width="560" height="420" fill="#26384a"/>
            <g fill="none" stroke="#33485d" stroke-width="14" stroke-linecap="round">
                <path d="M-10 300 C120 260 200 330 330 250 S500 200 580 120"/>
                <path d="M120 -10 C150 90 90 170 190 250 S300 400 280 430"/>
                <path d="M400 -10 C380 80 450 150 420 260 S470 380 520 430"/>
            </g>
            <g fill="none" stroke="#2d4156" stroke-width="5">
                <path d="M-10 90 C100 120 160 60 260 110 S420 70 580 60"/>
                <path d="M-10 200 C80 190 150 220 230 190"/>
                <path d="M300 330 C380 350 440 320 580 360"/>
            </g>
            <path d="M0 360 C80 340 120 400 200 380 S260 420 260 420 L0 420Z" fill="#1f5f7a" opacity=".55"/>
        </svg>
        <div class="mv-pin mv-pin-1"><i></i></div>
        <div class="mv-pin mv-pin-2"><i></i></div>
        <div class="mv-pin mv-pin-3"><i></i></div>
        <div class="mv-pin mv-pin-main"><i></i></div>
        <div class="mv-filters"><em class="on">Rent</em><em>Sale</em><em>Land</em></div>
        <div class="mv-card">
            <div class="mv-img"><span></span><span></span><span></span></div>
            <b>UGX 900,000</b>
            <i style="width: 80%"></i>
            <i style="width: 52%"></i>
        </div>
    </div>
</template>

<style scoped>
.mv { position: relative; width: 100%; max-width: 600px; aspect-ratio: 1.3; margin: 0 auto; border-radius: 12px; overflow: hidden; border: 1px solid rgba(169, 183, 198, 0.25); box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35); }
.mv-map { position: absolute; inset: 0; width: 100%; height: 100%; }
.mv-pin { position: absolute; width: 22px; height: 22px; border-radius: 50% 50% 50% 0; background: #a9b7c6; transform: rotate(-45deg); }
.mv-pin i { position: absolute; inset: 6px; border-radius: 50%; background: #26384a; }
.mv-pin-1 { left: 18%; top: 32%; } .mv-pin-2 { left: 62%; top: 22%; } .mv-pin-3 { left: 74%; top: 58%; }
.mv-pin-main { left: 41%; top: 46%; width: 30px; height: 30px; background: #ff7a1a; animation: mv-drop 3.2s ease-in-out infinite; }
.mv-pin-main i { inset: 8px; background: #fff; }
.mv-pin-main::after { content: ''; position: absolute; inset: -12px; border-radius: 50%; border: 2px solid rgba(255, 122, 26, 0.55); animation: mv-ping 2.4s ease-out infinite; }
.mv-filters { position: absolute; top: 5%; left: 4%; display: flex; gap: 0.4rem; }
.mv-filters em { font-style: normal; font-size: 0.7rem; font-weight: 700; padding: 0.3rem 0.8rem; border-radius: 999px; background: rgba(18, 26, 35, 0.85); color: #a9b7c6; border: 1px solid rgba(169, 183, 198, 0.3); }
.mv-filters em.on { background: #ff7a1a; border-color: #ff7a1a; color: #121a23; }
.mv-card { position: absolute; right: 5%; bottom: 7%; width: 40%; background: #fff; border-radius: 10px; padding: 0.6rem; box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4); color: #1c2430; display: grid; gap: 0.4rem; animation: mv-float 6s ease-in-out infinite; }
.mv-img { height: 4.2rem; border-radius: 6px; background: linear-gradient(180deg, #9fd3ee 0 55%, #c96a3c 55%); position: relative; overflow: hidden; }
.mv-img span { position: absolute; bottom: 0; background: #e8a06a; width: 28%; height: 60%; }
.mv-img span:nth-child(1) { left: 6%; } .mv-img span:nth-child(2) { left: 36%; height: 72%; background: #d9824f; } .mv-img span:nth-child(3) { left: 66%; }
.mv-card b { font-size: 0.82rem; color: #14804a; }
.mv-card i { display: block; height: 6px; border-radius: 3px; background: #d3dce6; }
@keyframes mv-drop { 50% { transform: rotate(-45deg) translate(5px, -5px); } }
@keyframes mv-ping { from { transform: scale(0.6); opacity: 1; } to { transform: scale(1.6); opacity: 0; } }
@keyframes mv-float { 50% { transform: translateY(-8px); } }
@media (prefers-reduced-motion: reduce) { .mv-pin-main, .mv-pin-main::after, .mv-card { animation: none; } }
</style>
