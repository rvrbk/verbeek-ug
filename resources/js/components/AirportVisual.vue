<template>
    <div class="av" aria-hidden="true">
        <svg viewBox="0 0 560 430" class="av-map" preserveAspectRatio="xMidYMid slice">
            <rect width="560" height="430" fill="#a9d3e0"/>
            <path d="M-10 120 C60 60 140 90 200 150 S300 260 240 330 S60 420 -10 380Z" fill="#f1eee6"/>
            <path d="M330 -10 C400 40 470 20 570 70 L570 250 C500 280 430 230 380 160 S300 60 330 -10Z" fill="#f1eee6"/>
            <path d="M360 330 C420 300 500 330 570 380 L570 440 L330 440Z" fill="#f1eee6"/>
            <!-- terminal plan -->
            <g transform="translate(70 150)">
                <rect x="40" y="70" width="300" height="70" rx="10" fill="#fff" stroke="#c7d2fe" stroke-width="3"/>
                <g fill="#fff" stroke="#c7d2fe" stroke-width="3">
                    <rect x="70" y="20" width="26" height="54" rx="6"/><rect x="128" y="20" width="26" height="54" rx="6"/>
                    <rect x="186" y="20" width="26" height="54" rx="6"/><rect x="244" y="20" width="26" height="54" rx="6"/>
                    <rect x="302" y="20" width="26" height="54" rx="6"/>
                </g>
                <path d="M0 175 H380" stroke="#8892a6" stroke-width="4" stroke-dasharray="14 10"/>
                <path d="M70 105 H215 V45 H257" fill="none" stroke="#6366f1" stroke-width="5" stroke-dasharray="2 11" stroke-linecap="round" class="av-route"/>
            </g>
        </svg>
        <div class="av-pin av-pin-you"><i></i></div>
        <div class="av-pin av-pin-gate"><svg viewBox="0 0 24 24" width="14" height="14" fill="#fff"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 00-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5z"/></svg></div>
        <div class="av-search"><span></span><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#9aa3b5" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></div>
        <div class="av-btn"><i></i></div>
    </div>
</template>

<style scoped>
.av { position: relative; width: 100%; max-width: 600px; aspect-ratio: 1.3; margin: 0 auto; border-radius: 12px; overflow: hidden; border: 1px solid rgba(169, 183, 198, 0.25); box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35); }
.av-map { position: absolute; inset: 0; width: 100%; height: 100%; }
.av-route { animation: av-dash 1.2s linear infinite; }
.av-pin { position: absolute; width: 26px; height: 26px; border-radius: 50% 50% 50% 0; transform: rotate(-45deg); background: #6366f1; display: grid; place-items: center; }
.av-pin i { width: 10px; height: 10px; border-radius: 50%; background: #fff; }
.av-pin-gate svg { transform: rotate(45deg); }
.av-pin-you { left: 22%; top: 50%; }
.av-pin-you::after { content: ''; position: absolute; inset: -12px; border-radius: 50%; border: 2px solid rgba(99, 102, 241, 0.5); animation: av-ping 2.4s ease-out infinite; }
.av-pin-gate { left: 55%; top: 39%; background: #ff7a1a; }
.av-search { position: absolute; left: 50%; top: 7%; transform: translateX(-50%); width: 56%; height: 2.1rem; background: #fff; border-radius: 6px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); display: flex; align-items: center; justify-content: space-between; padding: 0 0.8rem; }
.av-search span { width: 40%; height: 7px; border-radius: 4px; background: #d3dce6; }
.av-btn { position: absolute; left: 50%; top: 22%; transform: translateX(-50%); width: 56%; height: 2.1rem; background: #6366f1; border-radius: 6px; display: grid; place-items: center; box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4); }
.av-btn i { width: 4.6rem; height: 7px; border-radius: 4px; background: rgba(255, 255, 255, 0.85); }
@keyframes av-dash { to { stroke-dashoffset: -13; } }
@keyframes av-ping { from { transform: scale(0.6); opacity: 1; } to { transform: scale(1.6); opacity: 0; } }
@media (prefers-reduced-motion: reduce) { .av-route, .av-pin-you::after { animation: none; } }
</style>
