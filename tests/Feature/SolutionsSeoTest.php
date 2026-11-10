<?php

namespace Tests\Feature;

use App\Support\Seo;
use Tests\TestCase;

class SolutionsSeoTest extends TestCase
{
    public function test_overview_page_has_seo_and_lists_every_solution(): void
    {
        $response = $this->get('/solutions');

        $response->assertOk();
        $response->assertSee('<link rel="canonical" href="https://verbeek.ug/solutions">', false);
        $response->assertSee('<meta name="robots" content="index, follow">', false);

        foreach (Seo::solutions()['order'] as $slug) {
            $response->assertSee('/solutions/' . $slug, false);
        }
    }

    public function test_each_solution_page_has_its_own_meta_structured_data_and_fallback_content(): void
    {
        foreach (Seo::solutions()['pages'] as $slug => $page) {
            $response = $this->get('/solutions/' . $slug);

            $response->assertOk();
            $response->assertSee('<title>' . e($page['seo']['title']) . '</title>', false);
            $response->assertSee('<link rel="canonical" href="https://verbeek.ug/solutions/' . $slug . '">', false);
            $response->assertSee('"@type":"FAQPage"', false);
            $response->assertSee('"@type":"Service"', false);
            $response->assertSee('"@type":"BreadcrumbList"', false);
            // Non-JS crawlers get the full text
            $response->assertSee('<noscript>', false);
            $response->assertSee(e($page['h1']), false);
            $response->assertSee(e($page['faq'][0]['q']), false);
        }
    }

    public function test_unknown_solution_is_a_404_and_not_indexed(): void
    {
        $response = $this->get('/solutions/does-not-exist');

        $response->assertNotFound();
        $response->assertSee('<meta name="robots" content="noindex, follow">', false);
    }

    public function test_sitemap_lists_the_solutions(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertSee('https://verbeek.ug/solutions</loc>', false);

        foreach (Seo::solutions()['order'] as $slug) {
            $response->assertSee('https://verbeek.ug/solutions/' . $slug . '</loc>', false);
        }
    }

    public function test_order_and_pages_stay_in_sync(): void
    {
        $data = Seo::solutions();

        $this->assertEqualsCanonicalizing(array_keys($data['pages']), $data['order']);

        foreach ($data['pages'] as $page) {
            $this->assertLessThanOrEqual(160, mb_strlen($page['seo']['description']));
            $this->assertLessThanOrEqual(70, mb_strlen($page['seo']['title']));
        }
    }
}
