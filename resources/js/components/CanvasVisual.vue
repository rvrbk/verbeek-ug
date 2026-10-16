<template>
    <div class="cv" aria-hidden="true">
        <div class="cv-dots"><i class="r"></i><i class="y"></i><i class="b"></i></div>
        <div class="cv-board">
            <svg viewBox="0 0 400 400" class="cv-svg">
                <rect width="400" height="400" fill="#faf9f5"/>
                <!-- top-left: scribble -->
                <path d="M30 150 C60 40 110 40 100 110 S60 170 150 90 S120 30 170 70" fill="none" stroke="#0e0e0e" stroke-width="9" stroke-linecap="round"/>
                <circle cx="60" cy="60" r="14" fill="#ff3b3b"/>
                <!-- top-right: sun -->
                <circle cx="300" cy="100" r="62" fill="#ffd23f"/>
                <circle cx="300" cy="100" r="32" fill="#ff3b3b"/>
                <!-- bottom-left: waves -->
                <rect x="0" y="200" width="200" height="200" fill="#2f6bff"/>
                <g fill="none" stroke="#faf9f5" stroke-width="7">
                    <path d="M0 250 q25 -20 50 0 t50 0 t50 0 t50 0"/>
                    <path d="M0 300 q25 -20 50 0 t50 0 t50 0 t50 0"/>
                    <path d="M0 350 q25 -20 50 0 t50 0 t50 0 t50 0"/>
                </g>
                <!-- bottom-right: hidden piece -->
                <defs><pattern id="cv-hatch" width="20" height="20" patternUnits="userSpaceOnUse" patternTransform="rotate(45)"><rect width="10" height="20" fill="#0e0e0e"/><rect x="10" width="10" height="20" fill="#262626"/></pattern></defs>
                <rect x="200" y="200" width="200" height="200" fill="url(#cv-hatch)"/>
                <text x="300" y="322" text-anchor="middle" font-size="84" font-weight="700" fill="#faf9f5" font-family="Anton, Impact, sans-serif">?</text>
                <path d="M200 0V400M0 200H400" stroke="#0e0e0e" stroke-width="6"/>
                <rect x="3" y="3" width="394" height="394" fill="none" stroke="#0e0e0e" stroke-width="6"/>
            </svg>
        </div>
        <div class="cv-pill cv-pts">+10 PTS</div>
        <div class="cv-pill cv-lvl">LVL 3</div>
        <div class="cv-pill cv-badge"><svg viewBox="0 0 24 24" width="14" height="14" fill="#0e0e0e"><path d="M12 3l2.5 5.5L20 9l-4.5 4 1 6-4.5-3-4.5 3 1-6L3 9l5.5-.5z"/></svg>BADGE</div>
    </div>
</template>

<style scoped>
.cv { position: relative; width: 100%; max-width: 560px; margin: 0 auto; padding: 2.2rem 1.5rem 1.8rem; }
.cv-dots { position: absolute; top: 0; right: 1.2rem; width: 7rem; height: 6rem; }
.cv-dots i { position: absolute; border-radius: 50%; opacity: 0.9; }
.cv-dots .y { width: 4.2rem; height: 4.2rem; right: 0; top: 0.6rem; background: #ffd23f; }
.cv-dots .r { width: 3.8rem; height: 3.8rem; right: 2.2rem; top: 1.6rem; background: #ff3b3b; }
.cv-dots .b { width: 3.2rem; height: 3.2rem; right: 3.6rem; top: 0; background: #2f6bff; }
.cv-board { position: relative; border: 5px solid #0e0e0e; background: #faf9f5; box-shadow: 10px 10px 0 #0e0e0e; transform: rotate(-2deg); transition: transform 0.4s ease; }
.cv-svg { display: block; width: 100%; height: auto; }
a:hover .cv-board { transform: rotate(0deg) scale(1.02); }
.cv-pill { position: absolute; font-family: Anton, Impact, 'Ubuntu', sans-serif; letter-spacing: 0.06em; font-size: 0.95rem; padding: 0.35rem 0.8rem; border: 3px solid #0e0e0e; box-shadow: 4px 4px 0 #0e0e0e; display: inline-flex; align-items: center; gap: 0.35rem; }
.cv-pts { left: 0; top: 38%; background: #ffd23f; color: #0e0e0e; transform: rotate(-6deg); animation: cv-bob 4s ease-in-out infinite; }
.cv-lvl { right: 0; bottom: 22%; background: #ff3b3b; color: #fff; transform: rotate(5deg); animation: cv-bob 5s -1s ease-in-out infinite; }
.cv-badge { left: 10%; bottom: 0; background: #faf9f5; color: #0e0e0e; transform: rotate(3deg); animation: cv-bob 4.5s -2s ease-in-out infinite; }
@keyframes cv-bob { 50% { translate: 0 -8px; } }
@media (prefers-reduced-motion: reduce) { .cv-pill { animation: none; } }
</style>
