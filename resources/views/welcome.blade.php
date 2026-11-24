<!DOCTYPE html>
<html lang="{{ $seo['lang'] }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO Meta Tags (rendered per page by App\Support\Seo) -->
        <title>{{ $seo['title'] }}</title>
        <meta name="description" content="{{ $seo['description'] }}">
        <meta name="keywords" content="software development, custom software, business automation, AI solutions, community platforms, software consultancy, web applications, Africa">
        <meta name="author" content="verbeek.ug software solutions">

        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:site_name" content="verbeek.ug software solutions">
        <meta property="og:title" content="{{ $seo['title'] }}">
        <meta property="og:description" content="{{ $seo['description'] }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $seo['canonical'] }}">
        <meta property="og:image" content="{{ $seo['image'] }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:alt" content="verbeek.ug: smart software for smart businesses">
        <meta property="og:locale" content="{{ $seo['ogLocale'] }}">
        @foreach ($seo['ogAlternates'] as $alt)
        <meta property="og:locale:alternate" content="{{ $alt }}">
        @endforeach

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['title'] }}">
        <meta name="twitter:description" content="{{ $seo['description'] }}">
        <meta name="twitter:image" content="{{ $seo['image'] }}">

        <!-- Canonical URL and the same page in the other languages -->
        <link rel="canonical" href="{{ $seo['canonical'] }}">
        @foreach ($seo['alternates'] as $code => $url)
        <link rel="alternate" hreflang="{{ $code }}" href="{{ $url }}">
        @endforeach

        <!-- Structured data -->
        <script type="application/ld+json">{!! json_encode($seo['schema'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>

        <!-- Crawler directives (AI/LLM instructions live in /llms.txt and /ai.txt) -->
        <meta name="robots" content="{{ $seo['robots'] }}">

        <meta name="theme-color" content="#18222d">

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Slate and orange to match theme.css: square corners, uppercase letterspaced buttons. --}}
        @include('partials.cookie-consent', [
            'gaId' => 'G-L2N30C0ENR',
            'theme' => [
                '--cc-bg' => '#121a23',
                '--cc-fg' => '#ffffff',
                '--cc-border' => '#2e3d4f',
                '--cc-bar' => '3px solid #ff7a1a',
                '--cc-radius' => '2px',
                '--cc-btn-radius' => '2px',
                '--cc-font' => "'Ubuntu', 'Helvetica Neue', ui-sans-serif, system-ui, sans-serif",
                '--cc-accent' => '#ff7a1a',
                '--cc-accent-fg' => '#121a23',
                '--cc-border-strong' => '#ff7a1a',
                '--cc-btn-weight' => '700',
                '--cc-btn-transform' => 'uppercase',
                '--cc-btn-spacing' => '.1em',
                '--cc-shadow' => '0 12px 32px rgba(0, 0, 0, .45)',
            ],
            'extraCss' => '#cookie-consent button{font-size:.75rem;padding:.7rem .9rem}#cookie-consent .cc-accept:hover{background:transparent;color:#ff7a1a;filter:none}#cookie-consent .cc-decline:hover{background:#ff7a1a;color:#121a23;filter:none}',
        ])
        <script defer src="https://lore.verbeek.ug/heat.js" data-key="CCySXY1VWPtSqtNg4cGG5rKeoGonaMwj" data-lore-heat></script>
    </head>
    <body class="bg-white dark:bg-black text-gray-800 dark:text-white">
        <div id="app"></div>
        @if (! empty($seo['prerender']))
            <noscript>{!! $seo['prerender'] !!}</noscript>
        @endif
    </body>
</html>
