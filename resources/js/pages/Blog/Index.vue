<template>
    <div class="hb-page-content">
        <!-- Hero Section -->
        <section class="hb-section hb-hero-section min-h-[50vh] flex items-center justify-center">
            <div class="hb-hero-bg"></div>
            <div class="hb-hero-content text-center relative z-10">
                <p class="hb-hero-subtitle text-sm tracking-widest uppercase">Blog</p>
                <h1 class="hb-hero-title">Insights & Resources</h1>
                <p class="hb-hero-description">
                    Actionable insights and tips to help Ugandan businesses leverage technology 
                    for growth and success.
                </p>
            </div>
        </section>

        <!-- Blog Content -->
        <section class="hb-section">
            <div class="hb-container">
                <div class="max-w-4xl mx-auto">
                    <!-- Featured Post -->
                    <article class="hb-blog-featured">
                        <div class="hb-blog-featured-image"></div>
                        <div class="hb-blog-featured-content">
                            <div class="hb-blog-meta">
                                <span class="hb-blog-category">Warehouse Management</span>
                                <span class="hb-blog-date">May 15, 2026 • 5 min read</span>
                            </div>
                            <h2 class="hb-blog-featured-title">
                                <router-link to="/blog/5-signs-your-farm-needs-wms">
                                    5 Signs Your Farm Needs a Warehouse Management System
                                </router-link>
                            </h2>
                            <p class="hb-blog-featured-excerpt">
                                Are you losing money due to poor inventory tracking? Discover the warning signs and how a WMS can help your Ugandan farm reduce waste and increase profits.
                            </p>
                            <router-link to="/blog/5-signs-your-farm-needs-wms" class="hb-blog-featured-link">
                                Read more
                                <svg class="hb-blog-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </router-link>
                        </div>
                    </article>

                    <!-- Blog Posts Grid -->
                    <div class="hb-blog-grid">
                        <article class="hb-blog-card">
                            <div class="hb-blog-card-image hb-blog-image-1"></div>
                            <div class="hb-blog-card-content">
                                <div class="hb-blog-meta">
                                    <span class="hb-blog-category">Real Estate</span>
                                    <span class="hb-blog-date">May 1, 2026 • 4 min read</span>
                                </div>
                                <h3 class="hb-blog-card-title">
                                    <router-link to="/blog/building-real-estate-platform">
                                        Building a Real Estate Platform: Key Features for Ugandan Agents
                                    </router-link>
                                </h3>
                                <p class="hb-blog-card-excerpt">
                                    Learn what it takes to create a successful property listing platform tailored to the Ugandan market.
                                </p>
                                <router-link to="/blog/building-real-estate-platform" class="hb-blog-card-link">
                                    Read more
                                </router-link>
                            </div>
                        </article>

                        <article class="hb-blog-card">
                            <div class="hb-blog-card-image hb-blog-image-2"></div>
                            <div class="hb-blog-card-content">
                                <div class="hb-blog-meta">
                                    <span class="hb-blog-category">API Integration</span>
                                    <span class="hb-blog-date">April 20, 2026 • 6 min read</span>
                                </div>
                                <h3 class="hb-blog-card-title">
                                    <router-link to="/blog/api-integration-benefits">
                                        How API Integrations Can Transform Your Business
                                    </router-link>
                                </h3>
                                <p class="hb-blog-card-excerpt">
                                    Explore the benefits of connecting your systems and tools through APIs for better efficiency.
                                </p>
                                <router-link to="/blog/api-integration-benefits" class="hb-blog-card-link">
                                    Read more
                                </router-link>
                            </div>
                        </article>

                        <article class="hb-blog-card">
                            <div class="hb-blog-card-image hb-blog-image-3"></div>
                            <div class="hb-blog-card-content">
                                <div class="hb-blog-meta">
                                    <span class="hb-blog-category">Headless</span>
                                    <span class="hb-blog-date">April 10, 2026 • 5 min read</span>
                                </div>
                                <h3 class="hb-blog-card-title">
                                    <router-link to="/blog/headless-web-apps">
                                        The Future of Web Development: Headless Architectures
                                    </router-link>
                                </h3>
                                <p class="hb-blog-card-excerpt">
                                    Discover why headless web apps are becoming the standard for modern, scalable applications.
                                </p>
                                <router-link to="/blog/headless-web-apps" class="hb-blog-card-link">
                                    Read more
                                </router-link>
                            </div>
                        </article>

                        <article class="hb-blog-card">
                            <div class="hb-blog-card-image hb-blog-image-4"></div>
                            <div class="hb-blog-card-content">
                                <div class="hb-blog-meta">
                                    <span class="hb-blog-category">Laravel</span>
                                    <span class="hb-blog-date">March 25, 2026 • 7 min read</span>
                                </div>
                                <h3 class="hb-blog-card-title">
                                    <router-link to="/blog/laravel-for-business">
                                        Why Laravel is the Perfect Framework for Ugandan Businesses
                                    </router-link>
                                </h3>
                                <p class="hb-blog-card-excerpt">
                                    Learn how Laravel's features make it ideal for building custom business applications in Uganda.
                                </p>
                                <router-link to="/blog/laravel-for-business" class="hb-blog-card-link">
                                    Read more
                                </router-link>
                            </div>
                        </article>

                        <article class="hb-blog-card">
                            <div class="hb-blog-card-image hb-blog-image-5"></div>
                            <div class="hb-blog-card-content">
                                <div class="hb-blog-meta">
                                    <span class="hb-blog-category">Vue.js</span>
                                    <span class="hb-blog-date">March 15, 2026 • 5 min read</span>
                                </div>
                                <h3 class="hb-blog-card-title">
                                    <router-link to="/blog/vue-js-benefits">
                                        Building Interactive UIs with Vue.js
                                    </router-link>
                                </h3>
                                <p class="hb-blog-card-excerpt">
                                    A guide to creating reactive, user-friendly interfaces with Vue.js for your business applications.
                                </p>
                                <router-link to="/blog/vue-js-benefits" class="hb-blog-card-link">
                                    Read more
                                </router-link>
                            </div>
                        </article>

                        <article class="hb-blog-card">
                            <div class="hb-blog-card-image hb-blog-image-6"></div>
                            <div class="hb-blog-card-content">
                                <div class="hb-blog-meta">
                                    <span class="hb-blog-category">Business</span>
                                    <span class="hb-blog-date">March 1, 2026 • 4 min read</span>
                                </div>
                                <h3 class="hb-blog-card-title">
                                    <router-link to="/blog/custom-software-roi">
                                        The ROI of Custom Software: Is It Worth It?
                                    </router-link>
                                </h3>
                                <p class="hb-blog-card-excerpt">
                                    Understanding the return on investment for custom software development for your business.
                                </p>
                                <router-link to="/blog/custom-software-roi" class="hb-blog-card-link">
                                    Read more
                                </router-link>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hb-section">
            <div class="hb-container text-center">
                <p class="hb-section-label text-sm tracking-widest uppercase">Stay Updated</p>
                <h2 class="hb-section-title">Want more insights?</h2>
                <p class="hb-cta-text max-w-2xl mx-auto">
                    Subscribe to my newsletter for regular updates on technology trends and business solutions.
                </p>
                <router-link to="/contact" class="hb-btn hb-btn-light hb-cta-btn">
                    Subscribe
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Blog'
}
</script>

<style scoped>
:root {
    --hb-primary: #003885;
    --hb-accent: #f5ab8b;
    --hb-text: #ffffff;
    --hb-text-muted: rgba(255, 255, 255, 0.7);
}

.hb-page-content { position: relative; z-index: 1; }
.hb-section { padding: 6rem 0; position: relative; }
.hb-hero-section { min-height: 50vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
.hb-hero-content { max-width: 800px; padding: 0 2rem; }
.hb-hero-subtitle { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 1.5rem; letter-spacing: 0.1em; text-transform: uppercase; }
.hb-hero-title { font-family: Georgia, serif; font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1.5rem; letter-spacing: -0.01em; }
.hb-hero-description { font-size: 1.125rem; line-height: 1.7; color: var(--hb-text-muted); max-width: 700px; margin: 0 auto; }
.hb-container { max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
.hb-section-label { color: var(--hb-text-muted); font-size: 0.875rem; margin-bottom: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; }
.hb-section-title { font-family: Georgia, serif; font-size: clamp(1.75rem, 3vw, 2.25rem); font-weight: 400; line-height: 1.2; color: var(--hb-text); margin-bottom: 1rem; letter-spacing: -0.01em; }
.hb-cta-text { font-size: 1rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 2rem; }
.hb-cta-btn { margin-top: 1rem; }
.hb-btn { display: inline-block; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 500; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; border-radius: 0; transition: all 0.2s ease; cursor: pointer; border: 1px solid transparent; }
.hb-btn-light { background-color: transparent; color: var(--hb-text); border: 1px solid var(--hb-text); }
.hb-btn-light:hover { background-color: var(--hb-text); color: var(--hb-primary); }

/* Featured Post */
.hb-blog-featured { display: flex; flex-direction: column; margin-bottom: 4rem; background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); }
@media (min-width: 1024px) { .hb-blog-featured { flex-direction: row; } }
.hb-blog-featured-image { height: 300px; background: linear-gradient(135deg, #003885 0%, #0050a0 100%); }
@media (min-width: 1024px) { .hb-blog-featured-image { flex: 0 0 50%; } }
.hb-blog-featured-content { padding: 2rem; flex: 1; }
.hb-blog-meta { display: flex; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; }
.hb-blog-category { font-size: 0.75rem; padding: 0.25rem 0.75rem; background-color: rgba(245, 171, 139, 0.2); border: 1px solid rgba(245, 171, 139, 0.4); color: #f5ab8b; border-radius: 2px; }
.hb-blog-date { font-size: 0.875rem; color: var(--hb-text-muted); }
.hb-blog-featured-title { font-family: Georgia, serif; font-size: 1.75rem; font-weight: 400; line-height: 1.3; color: var(--hb-text); margin-bottom: 1rem; letter-spacing: -0.01em; }
.hb-blog-featured-title a { color: inherit; text-decoration: none; }
.hb-blog-featured-title a:hover { color: var(--hb-accent); }
.hb-blog-featured-excerpt { font-size: 1rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1.5rem; }
.hb-blog-featured-link { display: inline-flex; align-items: center; gap: 0.5rem; color: var(--hb-accent); font-size: 0.875rem; font-weight: 500; letter-spacing: 0.02em; text-transform: uppercase; transition: all 0.2s ease; }
.hb-blog-featured-link:hover { color: var(--hb-text); }
.hb-blog-arrow { width: 16px; height: 16px; }

/* Blog Grid */
.hb-blog-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; }
.hb-blog-card { background-color: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); transition: all 0.3s ease; }
.hb-blog-card:hover { background-color: rgba(255, 255, 255, 0.06); }
.hb-blog-card-image { height: 200px; background-size: cover; background-position: center; }
.hb-blog-image-1 { background: linear-gradient(135deg, #003885 0%, #0050a0 100%); }
.hb-blog-image-2 { background: linear-gradient(135deg, #0050a0 0%, #003885 100%); }
.hb-blog-image-3 { background: linear-gradient(135deg, #003885 0%, #0060a0 100%); }
.hb-blog-image-4 { background: linear-gradient(135deg, #0060a0 0%, #003885 100%); }
.hb-blog-image-5 { background: linear-gradient(135deg, #003885 0%, #0070a0 100%); }
.hb-blog-image-6 { background: linear-gradient(135deg, #0070a0 0%, #003885 100%); }
.hb-blog-card-content { padding: 1.5rem; }
.hb-blog-card-title { font-family: Georgia, serif; font-size: 1.25rem; font-weight: 400; line-height: 1.3; color: var(--hb-text); margin-bottom: 0.75rem; letter-spacing: -0.01em; }
.hb-blog-card-title a { color: inherit; text-decoration: none; }
.hb-blog-card-title a:hover { color: var(--hb-accent); }
.hb-blog-card-excerpt { font-size: 0.9rem; line-height: 1.6; color: var(--hb-text-muted); margin-bottom: 1rem; }
.hb-blog-card-link { display: inline-flex; align-items: center; gap: 0.5rem; color: var(--hb-accent); font-size: 0.8rem; font-weight: 500; letter-spacing: 0.02em; text-transform: uppercase; transition: all 0.2s ease; }
.hb-blog-card-link:hover { color: var(--hb-text); }

@media (max-width: 768px) { .hb-section { padding: 4rem 0; } .hb-hero-bg { opacity: 0.5; } }
@media (max-width: 480px) { .hb-hero-title { font-size: 1.75rem; } .hb-section-title { font-size: 1.75rem; } }
</style>
