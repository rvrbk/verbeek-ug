<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <meta property="og:locale" content="en_GB">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['title'] }}">
        <meta name="twitter:description" content="{{ $seo['description'] }}">
        <meta name="twitter:image" content="{{ $seo['image'] }}">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ $seo['canonical'] }}">

        <!-- Structured data -->
        <script type="application/ld+json">{!! json_encode($seo['schema'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>

        <!-- Crawler directives (AI/LLM instructions live in /llms.txt and /ai.txt) -->
        <meta name="robots" content="{{ $seo['robots'] }}">

        <meta name="theme-color" content="#18222d">

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://www.googletagmanager.com">
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-L2N30C0ENR"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-L2N30C0ENR');
        </script>
    </head>
    <body class="bg-white dark:bg-black text-gray-800 dark:text-white">
        <div id="app"></div>
        @if (! empty($seo['prerender']))
            <noscript>{!! $seo['prerender'] !!}</noscript>
        @endif
    </body>
</html>
