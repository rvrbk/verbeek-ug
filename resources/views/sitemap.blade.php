<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
@foreach ($urls as [$loc, $lastmod, $changefreq, $priority, $alternates])
    <url>
        <loc>{{ $loc }}</loc>
@foreach ($alternates as $code => $href)
        <xhtml:link rel="alternate" hreflang="{{ $code }}" href="{{ $href }}"/>
@endforeach
        <lastmod>{{ $lastmod }}</lastmod>
        <changefreq>{{ $changefreq }}</changefreq>
        <priority>{{ $priority }}</priority>
    </url>
@endforeach
</urlset>
