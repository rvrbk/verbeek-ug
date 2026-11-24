<?php

namespace Tests\Feature;

use Tests\TestCase;

class AiServicesSeoTest extends TestCase
{
    public function test_ai_services_page_has_its_own_meta_and_structured_data(): void
    {
        $response = $this->get('/services/ai');

        $response->assertOk();
        $response->assertSee('<title>AI Scan &amp; Implementation | verbeek.ug software solutions</title>', false);
        $response->assertSee('<link rel="canonical" href="https://verbeek.ug/services/ai">', false);
        $response->assertSee('"@type":"Service"', false);
        $response->assertSee('"@type":"BreadcrumbList"', false);
    }

    public function test_ai_services_page_is_translated_and_lists_its_translations(): void
    {
        $response = $this->get('/fr/services/ai');

        $response->assertOk();
        $response->assertSee('<link rel="canonical" href="https://verbeek.ug/fr/services/ai">', false);
        $response->assertSee('hreflang="es" href="https://verbeek.ug/es/services/ai"', false);
        $response->assertDontSee('<title>AI Scan', false);
    }

    public function test_ai_services_page_is_in_the_sitemap_in_every_language(): void
    {
        $response = $this->get('/sitemap.xml');

        foreach (['', '/fr', '/es', '/pt'] as $prefix) {
            $response->assertSee('<loc>https://verbeek.ug'.$prefix.'/services/ai</loc>', false);
        }
    }

    public function test_llms_txt_links_to_the_ai_services_page(): void
    {
        $this->assertStringContainsString('https://verbeek.ug/services/ai', file_get_contents(public_path('llms.txt')));
    }
}
