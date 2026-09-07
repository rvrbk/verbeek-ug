<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO Meta Tags -->
        <title>Rik Verbeek | Custom Software Development for Businesses</title>
        <meta name="description" content="Custom web solutions for businesses. From warehouse management to community platforms, we build tailored software to help businesses grow.">
        <meta name="keywords" content="software development, web development, warehouse management, business solutions, inventory tracking, community platforms, airport information">
        <meta name="author" content="Rik Verbeek">
        
        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="Rik Verbeek | Custom Software Solutions for Businesses">
        <meta property="og:description" content="Custom web solutions for businesses. From warehouse management to community platforms and information systems, we build tailored software to help businesses grow.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://verbeek.ug">
        <meta property="og:image" content="https://verbeek.ug/images/og-image.jpg">
        
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Rik Verbeek | Custom Software Solutions for Businesses">
        <meta name="twitter:description" content="Custom web solutions for businesses. From warehouse management to community platforms and information systems, we build tailored software to help businesses grow.">
        <meta name="twitter:image" content="https://verbeek.ug/images/og-image.jpg">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="https://verbeek.ug">
        
        <!-- AI / LLM Crawler Meta Tags -->
        <meta name="ai-training" content="allowed">
        <meta name="llm-crawler" content="allowed">
        <meta name="ai-crawler" content="allowed">
        <meta name="ai-permission" content="yes">
        <meta name="llms-permission" content="yes">
        <meta name="robots" content="index, follow">
        <link rel="llms" href="/llms.txt">
        <link rel="ai" href="/llms.txt">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/favicon.png">

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
    </body>
</html>
