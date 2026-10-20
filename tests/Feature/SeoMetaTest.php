<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeoMetaTest extends TestCase
{
    public function test_home_page_renders_core_seo_meta_tags(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('<title>Dedicated Offshore AI & Software Development | MEHR Website Design and Software Services</title>', false);
        $response->assertSee('name="description"', false);
        $response->assertSee('rel="canonical"', false);
        $response->assertSee('name="robots"', false);
        $response->assertSee('property="og:image"', false);
        $response->assertSee('"@context": "https://schema.org"', false);
        $response->assertDontSee('@@context', false);
    }
}
