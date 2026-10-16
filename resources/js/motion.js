// Site-wide motion: animated hero field and stat count-ups.
const reduced = () => window.matchMedia('(prefers-reduced-motion: reduce)').matches

// ---------------------------------------------------------------- hero field
// A grid of small diamonds that swell and glow orange in a slow wave.
function mountField(section) {
    if (section.dataset.field) return
    section.dataset.field = '1'
    const cv = document.createElement('canvas')
    cv.className = 'hb-field'
    section.prepend(cv)
    const ctx = cv.getContext('2d')
    let w = 0, h = 0, visible = true, raf = 0
    const GAP = 60

    const resize = () => {
        const dpr = Math.min(window.devicePixelRatio || 1, 2)
        const r = section.getBoundingClientRect()
        w = r.width; h = r.height
        cv.width = w * dpr; cv.height = h * dpr
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0)
    }
    const ro = new ResizeObserver(resize)
    ro.observe(section)
    resize()

    const io = new IntersectionObserver(([e]) => { visible = e.isIntersecting; if (visible) loop() })
    io.observe(section)

    const draw = (t) => {
        ctx.clearRect(0, 0, w, h)
        const cols = Math.ceil(w / GAP) + 1, rows = Math.ceil(h / GAP) + 1
        for (let j = 0; j < rows; j++) {
            for (let i = 0; i < cols; i++) {
                const x = i * GAP + (j % 2 ? GAP / 2 : 0)
                const y = j * GAP
                const wave = (Math.sin(x * 0.011 + y * 0.009 + t * 0.0012) + 1) / 2
                // fade out toward the left so text stays readable
                const side = Math.min(1, Math.max(0, (x / w - 0.5) / 0.35))
                const crest = (Math.max(0, wave - 0.72) / 0.28) * side
                const s = 2 + wave * 2.2 + crest * 4
                const a = (0.05 + wave * 0.16) * (0.2 + side * 0.8) + crest * 0.4
                ctx.save()
                ctx.translate(x, y)
                ctx.rotate(Math.PI / 4 + crest * 0.8 + wave * 0.3)
                ctx.fillStyle = crest > 0.02
                    ? `rgba(255,122,26,${Math.min(a, 0.9)})`
                    : `rgba(169,183,198,${a * 0.7})`
                ctx.fillRect(-s / 2, -s / 2, s, s)
                ctx.restore()
            }
        }
    }
    const loop = () => {
        cancelAnimationFrame(raf)
        const frame = (t) => {
            if (!section.isConnected) { ro.disconnect(); io.disconnect(); return }
            if (!visible) return
            draw(t)
            raf = requestAnimationFrame(frame)
        }
        raf = requestAnimationFrame(frame)
    }
    if (reduced()) draw(0)
    else loop()
}

// --------------------------------------------------------------- count-ups
function countUps() {
    const els = document.querySelectorAll('[data-count]')
    const io = new IntersectionObserver((entries) => {
        entries.forEach((en) => {
            if (!en.isIntersecting) return
            io.unobserve(en.target)
            const el = en.target, end = +el.dataset.count, suf = el.dataset.suffix || ''
            if (reduced()) { el.textContent = end + suf; return }
            const t0 = performance.now(), dur = 1600
            const step = (t) => {
                const k = Math.min(1, (t - t0) / dur), e = 1 - Math.pow(1 - k, 4)
                el.textContent = Math.round(end * e) + suf
                if (k < 1) requestAnimationFrame(step)
            }
            requestAnimationFrame(step)
        })
    }, { threshold: 0.6 })
    els.forEach((el) => {
        if (el.dataset.cu) return
        el.dataset.cu = '1'
        if (!reduced()) el.textContent = '0' + (el.dataset.suffix || '')
        io.observe(el)
    })
}

export function initMotion() {
    const scan = () => {
        document.querySelectorAll('.hb-hero-section').forEach(mountField)
        countUps()
    }
    scan()
    const main = document.querySelector('.hb-main')
    if (main) new MutationObserver(scan).observe(main, { childList: true, subtree: true })
}
