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

    private const PAGES = [
        '' => [
            'title' => 'verbeek.ug | Custom Software Solutions for Businesses',
            'description' => 'Custom software for businesses across Africa: business automation, AI solutions, community platforms and consultancy. Built by verbeek.ug software solutions.',
        ],
        'services' => [
            'title' => 'Services | verbeek.ug software solutions',
            'description' => 'Business automation, AI solutions, community crowd sourced platforms and independent software consultancy, tailored to your business.',
        ],
        'portfolio' => [
            'title' => 'Portfolio | verbeek.ug software solutions',
            'description' => 'Platforms we have built and run: Prompt a Tool, Collective Canvas and Crowded Airport, plus MyCanopy, property listings for Uganda, currently in development.',
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
        ['Community Crowd Sourced Solutions', 'Build connected communities with crowd sourced digital platforms. Engage users, share information, and collaborate effectively.'],
        ['Consultancy', 'Practical, independent advice on your software, processes and where AI and automation can help, before you commit to building anything.'],
    ];

    private const APPS = [
        ['Prompt a Tool', 'https://prompt-a-tool.com', 'BusinessApplication', 'Turn an app idea into ready-to-use AI prompts, roles, agents and skills.'],
        ['Collective Canvas', 'https://collective-canvas.verbeek.ug', 'GameApplication', 'A collaborative drawing game: draw blind, reveal together.'],
        ['Crowded Airport', 'https://crowded-airport.com', 'TravelApplication', 'Find your way on any airport in the world.'],
    ];

    public static function forPath(string $path): array
    {
        $key = trim($path, '/');
        $page = self::PAGES[$key] ?? (str_starts_with($key, 'blog/') ? self::PAGES['blog'] : self::PAGES['']);
        $canonical = self::SITE . ($key === '' ? '' : '/' . $key);

        return [
            'title' => $page['title'],
            'description' => $page['description'],
            'canonical' => $canonical,
            'image' => self::SITE . '/images/og-image.jpg',
            'schema' => self::schema($key, $canonical, $page),
        ];
    }

    /** Page key => the Vue page whose modification time stands in for the page's last change. */
    private const SOURCES = [
        '' => 'Home.vue',
        'services' => 'Services/Index.vue',
        'portfolio' => 'Portfolio/Index.vue',
        'about' => 'About/Index.vue',
        'contact' => 'Contact/Index.vue',
        'blog' => 'Blog/Index.vue',
    ];

    public static function lastModified(string $key): string
    {
        $file = resource_path('js/pages/' . (self::SOURCES[str_starts_with($key, 'blog/') ? 'blog' : $key] ?? self::SOURCES['']));

        return date('Y-m-d', is_file($file) ? filemtime($file) : time());
    }

    /** Sitemap entries: [url, lastmod, changefreq, priority]. */
    public static function sitemap(): array
    {
        $meta = ['' => ['monthly', '1.0'], 'services' => ['monthly', '0.9'], 'portfolio' => ['monthly', '0.9'], 'about' => ['yearly', '0.6'], 'contact' => ['yearly', '0.7']];

        return array_map(fn ($key, $m) => [self::SITE . ($key === '' ? '/' : '/' . $key), self::lastModified($key), $m[0], $m[1]], array_keys($meta), $meta);
    }

    private static function schema(string $key, string $canonical, array $page): array
    {
        $org = [
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => self::SITE . '/#organization',
            'name' => self::NAME,
            'alternateName' => 'verbeek.ug',
            'description' => 'Custom software, business automation, AI solutions, community platforms and consultancy for businesses across Africa.',
            'url' => self::SITE,
            'logo' => self::SITE . '/logo.png',
            'email' => 'rvrbk.dev@gmail.com',
            'areaServed' => ['@type' => 'Continent', 'name' => 'Africa'],
            'serviceType' => array_column(self::SERVICES, 0),
            'founder' => ['@id' => self::SITE . '/#founder'],
            'sameAs' => ['https://github.com/rvrbk'],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer support',
                'email' => 'rvrbk.dev@gmail.com',
                'availableLanguage' => ['English', 'Luganda'],
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

        $graph = [
            $org,
            $founder,
            [
                '@type' => 'WebSite',
                '@id' => self::SITE . '/#website',
                'url' => self::SITE,
                'name' => self::NAME,
                'publisher' => ['@id' => self::SITE . '/#organization'],
                'inLanguage' => ['en', 'lg'],
            ],
            [
                '@type' => $key === 'contact' ? 'ContactPage' : ($key === 'about' ? 'AboutPage' : 'WebPage'),
                '@id' => $canonical . '#webpage',
                'url' => $canonical,
                'name' => $page['title'],
                'description' => $page['description'],
                'isPartOf' => ['@id' => self::SITE . '/#website'],
                'about' => ['@id' => self::SITE . '/#organization'],
                'dateModified' => self::lastModified($key),
            ],
        ];

        if ($key === 'about') {
            $graph[2]['mainEntity'] = ['@id' => self::SITE . '/#founder'];
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
                        'url' => $a[1],
                        'applicationCategory' => $a[2],
                        'operatingSystem' => 'Any (web browser)',
                        'description' => $a[3],
                        'creator' => ['@id' => self::SITE . '/#organization'],
                    ],
                ], self::APPS, array_keys(self::APPS)),
            ];
        }

        if ($key !== '') {
            $label = ucfirst(explode('/', $key)[0]);
            $graph[] = [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => self::SITE],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => $label, 'item' => $canonical],
                ],
            ];
        }

        return ['@context' => 'https://schema.org', '@graph' => $graph];
    }
}
