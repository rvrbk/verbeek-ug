<?php

namespace App\Support;

/**
 * Per-page SEO data (title, description, canonical, structured data).
 * Rendered server-side into the SPA shell so crawlers that do not run JavaScript still see it.
 */
class Seo
{
    public const SITE = 'https://verbeek.ug';
    public const NAME = 'verbeek.ug software solutions';

    /** Languages: English has no URL prefix, the others live under /fr, /es and /pt. */
    public const LANGS = ['en', 'fr', 'es', 'pt'];

    private const OG_LOCALES = ['en' => 'en_GB', 'fr' => 'fr_FR', 'es' => 'es_ES', 'pt' => 'pt_PT'];

    /** Titles and descriptions of the plain pages in the other languages (mirrors the seo block of resources/js/i18n/*.js). */
    private const PAGES_TRANSLATED = [
        'fr' => [
            '' => ['title' => 'verbeek.ug | Solutions logicielles sur mesure pour les entreprises', 'description' => 'Logiciels sur mesure pour les entreprises africaines : automatisation, solutions d\'IA, plateformes communautaires et conseil. Créés par verbeek.ug software solutions.'],
            'services' => ['title' => 'Services | verbeek.ug software solutions', 'description' => 'Automatisation des processus, solutions d\'IA, plateformes communautaires participatives et conseil logiciel indépendant, adaptés à votre entreprise.'],
            'services/ai' => ['title' => 'Scan et mise en œuvre de l\'IA | verbeek.ug software solutions', 'description' => 'Découvrez où l\'IA est rentable dans votre entreprise grâce à un scan, validez-la en pilote, puis mettez-la en œuvre et exploitez-la. Notre méthode.'],
            'portfolio' => ['title' => 'Réalisations | verbeek.ug software solutions', 'description' => 'Les plateformes que nous avons créées et que nous exploitons : Prompt a Tool, Crowded Airport, Job Scout et Lore, ainsi que MyCanopy, des annonces immobilières pour l\'Ouganda, en cours de développement.'],
            'about' => ['title' => 'À propos | verbeek.ug software solutions', 'description' => 'Qui nous sommes, comment nous travaillons et dans quoi nous sommes spécialisés : des solutions logicielles intelligentes qui résolvent de vrais problèmes pour les entreprises africaines.'],
            'contact' => ['title' => 'Contact | verbeek.ug software solutions', 'description' => 'Contactez-nous pour une première consultation gratuite sur votre projet logiciel.'],
            'blog' => ['title' => 'Blog | verbeek.ug software solutions', 'description' => 'Articles et actualités de verbeek.ug software solutions.'],
        ],
        'es' => [
            '' => ['title' => 'verbeek.ug | Soluciones de software a medida para empresas', 'description' => 'Software a medida para empresas de toda África: automatización, soluciones de IA, plataformas comunitarias y consultoría. Creado por verbeek.ug software solutions.'],
            'services' => ['title' => 'Servicios | verbeek.ug software solutions', 'description' => 'Automatización de procesos, soluciones de IA, plataformas comunitarias colaborativas y consultoría de software independiente, adaptadas a su negocio.'],
            'services/ai' => ['title' => 'Escaneo e implementación de IA | verbeek.ug software solutions', 'description' => 'Descubra dónde rinde la IA en su negocio con un escaneo, compruébelo en un piloto y luego impleméntelo y opérelo. Así trabajamos, paso a paso.'],
            'portfolio' => ['title' => 'Portafolio | verbeek.ug software solutions', 'description' => 'Las plataformas que hemos creado y que gestionamos: Prompt a Tool, Crowded Airport, Job Scout y Lore, además de MyCanopy, anuncios inmobiliarios para Uganda, en desarrollo.'],
            'about' => ['title' => 'Nosotros | verbeek.ug software solutions', 'description' => 'Quiénes somos, cómo trabajamos y en qué nos especializamos: soluciones de software inteligentes que resuelven problemas reales de las empresas africanas.'],
            'contact' => ['title' => 'Contacto | verbeek.ug software solutions', 'description' => 'Póngase en contacto para una primera consulta gratuita sobre su proyecto de software.'],
            'blog' => ['title' => 'Blog | verbeek.ug software solutions', 'description' => 'Artículos y novedades de verbeek.ug software solutions.'],
        ],
        'pt' => [
            '' => ['title' => 'verbeek.ug | Soluções de software à medida para empresas', 'description' => 'Software à medida para empresas de toda a África: automação, soluções de IA, plataformas comunitárias e consultoria. Criado pela verbeek.ug software solutions.'],
            'services' => ['title' => 'Serviços | verbeek.ug software solutions', 'description' => 'Automação de processos, soluções de IA, plataformas comunitárias colaborativas e consultoria de software independente, adaptadas ao seu negócio.'],
            'services/ai' => ['title' => 'Scan e implementação de IA | verbeek.ug software solutions', 'description' => 'Descubra onde a IA compensa no seu negócio com um scan, comprove-a num piloto e depois implemente-a e opere-a. Veja como trabalhamos, passo a passo.'],
            'portfolio' => ['title' => 'Portefólio | verbeek.ug software solutions', 'description' => 'As plataformas que criámos e gerimos: Prompt a Tool, Crowded Airport, Job Scout e Lore, além do MyCanopy, anúncios imobiliários para o Uganda, em desenvolvimento.'],
            'about' => ['title' => 'Sobre nós | verbeek.ug software solutions', 'description' => 'Quem somos, como trabalhamos e em que nos especializamos: soluções de software inteligentes que resolvem problemas reais das empresas africanas.'],
            'contact' => ['title' => 'Contacto | verbeek.ug software solutions', 'description' => 'Entre em contacto para uma primeira consulta gratuita sobre o seu projeto de software.'],
            'blog' => ['title' => 'Blogue | verbeek.ug software solutions', 'description' => 'Artigos e novidades da verbeek.ug software solutions.'],
        ],
    ];

    private const PAGES = [
        '' => [
            'title' => 'verbeek.ug | Custom Software Solutions for Businesses',
            'description' => 'Custom software for businesses across Africa: business automation, AI solutions, community platforms and consultancy. Built by verbeek.ug software solutions.',
        ],
        'services' => [
            'title' => 'Services | verbeek.ug software solutions',
            'description' => 'Business automation, AI solutions, community crowd sourced platforms and independent software consultancy, tailored to your business.',
        ],
        'services/ai' => [
            'title' => 'AI Scan & Implementation | verbeek.ug software solutions',
            'description' => 'Find out where AI pays off in your business with an AI Scan, prove it in a pilot, then have it built and run. See how we work, step by step.',
        ],
        'portfolio' => [
            'title' => 'Portfolio | verbeek.ug software solutions',
            'description' => 'Platforms we have built and run: Prompt a Tool, Crowded Airport, Job Scout and Lore, plus MyCanopy, property listings for Uganda, currently in development.',
        ],
        'about' => [
            'title' => 'About | verbeek.ug software solutions',
            'description' => 'Who we are, how we work and what we specialise in: smart software solutions that solve real business problems for businesses across Africa.',
        ],
        'contact' => [
            'title' => 'Contact | verbeek.ug software solutions',
            'description' => 'Get in touch for a free first consultation about your software project.',
        ],
        'blog' => [
            'title' => 'Blog | verbeek.ug software solutions',
            'description' => 'Articles and updates from verbeek.ug software solutions.',
        ],
    ];

    private const SERVICES = [
        ['Business Automation', 'Streamline your operations with smart automation solutions. Improve efficiency and reduce manual work with intelligent workflows.'],
        ['AI Solutions', 'Harness the power of artificial intelligence to transform your business. Smart solutions that learn, adapt, and deliver results.'],
        ['AI Scan & Implementation', 'Find out where AI pays off with an AI Scan, prove it in a pilot, then have it built, run and measured.'],
        ['Community Crowd Sourced Solutions', 'Build connected communities with crowd sourced digital platforms. Engage users, share information, and collaborate effectively.'],
        ['Consultancy', 'Practical, independent advice on your software, processes and where AI and automation can help, before you commit to building anything.'],
    ];

    private const APPS = [
        ['Prompt a Tool', 'https://prompt-a-tool.com', 'BusinessApplication', 'Turn an app idea into ready-to-use AI prompts, roles, agents and skills.'],
        ['Job Scout', 'https://job-scout.verbeek.ug/', 'BusinessApplication', 'A job search assistant that scores jobs against your profile and writes tailored CVs and cover letters, with every claim checked against your own facts.'],
        ['Lore', null, 'BusinessApplication', 'A modular monitoring and operations tool tailored to each business: checks, incident alerts, status pages, tasks and a knowledge base, built around the processes that business depends on.'],
        ['Crowded Airport', 'https://crowded-airport.com', 'TravelApplication', 'Find your way on any airport in the world.'],
    ];

    /** The solutions content in one language, shared with the Vue pages (resources/js/i18n/solutions.{lang}.json). */
    public static function solutions(string $lang = 'en'): array
    {
        static $data = [];

        return $data[$lang] ??= json_decode(file_get_contents(self::solutionsFile($lang)), true, 512, JSON_THROW_ON_ERROR);
    }

    private static function solutionsFile(string $lang = 'en'): string
    {
        return resource_path('js/i18n/solutions.' . $lang . '.json');
    }

    /** Language and page key of a request path such as "fr/solutions/mobile-money-integration". */
    public static function parsePath(string $path): array
    {
        $parts = explode('/', trim($path, '/'), 2);

        if (in_array($parts[0], self::LANGS, true) && $parts[0] !== 'en') {
            return [$parts[0], trim($parts[1] ?? '', '/')];
        }

        return ['en', trim($path, '/')];
    }

    /** URL of a page key in a language. */
    public static function url(string $key, string $lang = 'en'): string
    {
        $prefix = $lang === 'en' ? '' : '/' . $lang;

        return self::SITE . $prefix . ($key === '' ? ($lang === 'en' ? '/' : '') : '/' . $key);
    }

    public static function forPath(string $path): array
    {
        [$lang, $key] = self::parsePath($path);
        $robots = 'index, follow';
        $status = 200;
        $solution = null;
        $solutions = self::solutions($lang);

        if ($key === 'solutions') {
            $page = $solutions['index']['seo'];
        } elseif (str_starts_with($key, 'solutions/')) {
            $slug = substr($key, strlen('solutions/'));
            $solution = $solutions['pages'][$slug] ?? null;

            if ($solution) {
                $page = $solution['seo'];
            } else {
                // Unknown solution: a real 404 that stays out of the index; the Vue app redirects visitors to the overview
                $page = $solutions['index']['seo'];
                $key = 'solutions';
                $robots = 'noindex, follow';
                $status = 404;
            }
        } else {
            $pages = $lang === 'en' ? self::PAGES : self::PAGES_TRANSLATED[$lang];
            $page = $pages[$key] ?? (str_starts_with($key, 'blog/') ? $pages['blog'] : $pages['']);
        }

        $canonical = self::url($key, $lang);
        $alternates = [];

        foreach (self::LANGS as $code) {
            $alternates[$code] = self::url($key, $code);
        }

        $alternates['x-default'] = $alternates['en'];

        return [
            'title' => $page['title'],
            'description' => $page['description'],
            'canonical' => $canonical,
            'image' => self::SITE . '/images/og-image.jpg',
            'robots' => $robots,
            'status' => $status,
            'lang' => $lang,
            'ogLocale' => self::OG_LOCALES[$lang],
            'ogAlternates' => array_values(array_diff(self::OG_LOCALES, [self::OG_LOCALES[$lang]])),
            'alternates' => $alternates,
            'schema' => self::schema($key, $canonical, $page, $solution, $lang),
            'prerender' => self::prerender($key, $solution, $lang),
        ];
    }

    /**
     * Plain HTML of the same content the Vue page shows, for crawlers and AI bots that do not run JavaScript.
     * Rendered inside <noscript>, so people with JavaScript never see it twice.
     */
    private static function prerender(string $key, ?array $solution, string $lang): ?string
    {
        if ($key !== 'solutions' && ! $solution) {
            return null;
        }

        return view('solutions-prerender', [
            'data' => self::solutions($lang),
            'lang' => $lang,
            'slug' => $solution ? substr($key, strlen('solutions/')) : null,
            'page' => $solution,
        ])->render();
    }

    /** Page key => the Vue page whose modification time stands in for the page's last change. */
    private const SOURCES = [
        '' => 'Home.vue',
        'services' => 'Services/Index.vue',
        'services/ai' => 'Services/Ai.vue',
        'portfolio' => 'Portfolio/Index.vue',
        'about' => 'About/Index.vue',
        'contact' => 'Contact/Index.vue',
        'blog' => 'Blog/Index.vue',
    ];

    public static function lastModified(string $key): string
    {
        if ($key === 'solutions' || str_starts_with($key, 'solutions/')) {
            return date('Y-m-d', filemtime(self::solutionsFile()) ?: time());
        }

        $file = resource_path('js/pages/' . (self::SOURCES[str_starts_with($key, 'blog/') ? 'blog' : $key] ?? self::SOURCES['']));

        return date('Y-m-d', is_file($file) ? filemtime($file) : time());
    }

    /** Sitemap entries: [url, lastmod, changefreq, priority, alternates]. Every page is listed once per language. */
    public static function sitemap(): array
    {
        $meta = ['' => ['monthly', '1.0'], 'services' => ['monthly', '0.9'], 'services/ai' => ['monthly', '0.8'], 'solutions' => ['monthly', '0.9'], 'portfolio' => ['monthly', '0.9'], 'about' => ['yearly', '0.6'], 'contact' => ['yearly', '0.7']];

        foreach (self::solutions()['order'] as $slug) {
            $meta['solutions/' . $slug] = ['monthly', '0.8'];
        }

        $entries = [];

        foreach ($meta as $key => $m) {
            $key = (string) $key;
            $alternates = [];

            foreach (self::LANGS as $lang) {
                $alternates[$lang] = self::url($key, $lang);
            }

            $alternates['x-default'] = $alternates['en'];

            foreach (self::LANGS as $lang) {
                $entries[] = [self::url($key, $lang), self::lastModified($key), $m[0], $m[1], $alternates];
            }
        }

        return $entries;
    }

    private static function schema(string $key, string $canonical, array $page, ?array $solution = null, string $lang = 'en'): array
    {
        $org = [
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => self::SITE . '/#organization',
            'name' => self::NAME,
            'alternateName' => 'verbeek.ug',
            'description' => 'Custom software, business automation, AI solutions, community platforms and consultancy for businesses across Africa.',
            'url' => self::SITE,
            'logo' => self::SITE . '/logo.png',
            'email' => 'info@verbeek.ug',
            'areaServed' => ['@type' => 'Continent', 'name' => 'Africa'],
            'serviceType' => array_column(self::SERVICES, 0),
            'founder' => ['@id' => self::SITE . '/#founder'],
            'sameAs' => ['https://github.com/rvrbk'],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer support',
                'email' => 'info@verbeek.ug',
                'availableLanguage' => ['English', 'French', 'Spanish', 'Portuguese'],
            ],
        ];

        $founder = [
            '@type' => 'Person',
            '@id' => self::SITE . '/#founder',
            'name' => 'Rik Verbeek',
            'jobTitle' => 'Founder and software developer',
            'worksFor' => ['@id' => self::SITE . '/#organization'],
            'sameAs' => ['https://github.com/rvrbk'],
        ];

        $webpage = [
            '@type' => match (true) {
                $key === 'contact' => 'ContactPage',
                $key === 'about' => 'AboutPage',
                $key === 'solutions' => 'CollectionPage',
                default => 'WebPage',
            },
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $page['title'],
            'description' => $page['description'],
            'inLanguage' => $lang,
            'isPartOf' => ['@id' => self::SITE . '/#website'],
            'about' => ['@id' => self::SITE . '/#organization'],
            'dateModified' => self::lastModified($key),
        ];

        if ($key === 'about') {
            $webpage['mainEntity'] = ['@id' => self::SITE . '/#founder'];
        }

        if ($solution) {
            $webpage['about'] = ['@id' => $canonical . '#service'];
        }

        $graph = [
            $org,
            $founder,
            [
                '@type' => 'WebSite',
                '@id' => self::SITE . '/#website',
                'url' => self::SITE,
                'name' => self::NAME,
                'publisher' => ['@id' => self::SITE . '/#organization'],
                'inLanguage' => self::LANGS,
            ],
            $webpage,
        ];

        if ($solution) {
            $graph[] = [
                '@type' => 'Service',
                '@id' => $canonical . '#service',
                'name' => $solution['card_title'],
                'serviceType' => $solution['card_title'],
                'description' => $page['description'],
                'url' => $canonical,
                'provider' => ['@id' => self::SITE . '/#organization'],
                'areaServed' => [
                    ['@type' => 'Country', 'name' => 'Uganda'],
                    ['@type' => 'Continent', 'name' => 'Africa'],
                ],
            ];
            $graph[] = [
                '@type' => 'FAQPage',
                '@id' => $canonical . '#faq',
                'mainEntity' => array_map(fn ($f) => [
                    '@type' => 'Question',
                    'name' => $f['q'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
                ], $solution['faq']),
            ];
        }

        if ($key === 'solutions') {
            $data = self::solutions($lang);
            $graph[] = [
                '@type' => 'ItemList',
                'name' => $data['labels']['solutions'],
                'itemListElement' => array_map(fn ($slug, $i) => [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'url' => self::url('solutions/' . $slug, $lang),
                    'name' => $data['pages'][$slug]['card_title'],
                ], $data['order'], array_keys($data['order'])),
            ];
        }

        if ($key === 'services') {
            $graph[] = [
                '@type' => 'ItemList',
                'name' => 'Services',
                'itemListElement' => array_map(fn ($s, $i) => [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'item' => [
                        '@type' => 'Service',
                        'name' => $s[0],
                        'description' => $s[1],
                        'provider' => ['@id' => self::SITE . '/#organization'],
                        'url' => self::SITE . '/services',
                    ],
                ], self::SERVICES, array_keys(self::SERVICES)),
            ];
        }

        if ($key === 'services/ai') {
            $graph[] = [
                '@type' => 'Service',
                'name' => 'AI Scan & Implementation',
                'description' => $page['description'],
                'serviceType' => 'AI consulting and implementation',
                'provider' => ['@id' => self::SITE . '/#organization'],
                'areaServed' => ['@type' => 'Continent', 'name' => 'Africa'],
                'url' => $canonical,
            ];
        }

        if ($key === 'portfolio') {
            $graph[] = [
                '@type' => 'ItemList',
                'name' => 'Portfolio',
                'itemListElement' => array_map(fn ($a, $i) => [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'item' => [
                        '@type' => 'WebApplication',
                        'name' => $a[0],
                        ...($a[1] ? ['url' => $a[1]] : []),
                        'applicationCategory' => $a[2],
                        'operatingSystem' => 'Any (web browser)',
                        'description' => $a[3],
                        'creator' => ['@id' => self::SITE . '/#organization'],
                    ],
                ], self::APPS, array_keys(self::APPS)),
            ];
        }

        if ($key !== '') {
            $labels = self::solutions($lang)['labels'];
            $crumbs = [[$labels['home'], self::url('', $lang)]];

            if ($solution) {
                $crumbs[] = [$labels['solutions'], self::url('solutions', $lang)];
                $crumbs[] = [$solution['card_title'], $canonical];
            } else {
                $crumbs[] = [$key === 'solutions' ? $labels['solutions'] : explode(' | ', $page['title'])[0], $canonical];
            }

            $graph[] = [
                '@type' => 'BreadcrumbList',
                'itemListElement' => array_map(fn ($c, $i) => [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'name' => $c[0],
                    'item' => $c[1],
                ], $crumbs, array_keys($crumbs)),
            ];
        }

        return ['@context' => 'https://schema.org', '@graph' => $graph];
    }
}
