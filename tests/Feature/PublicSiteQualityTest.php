<?php

namespace Tests\Feature;

use DOMDocument;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicSiteQualityTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_render_responsive_optimized_markup(): void
    {
        $paths = [
            '/',
            '/about',
            '/blogs',
            '/business-marketing-tool',
            '/cancellation-policy',
            '/cloud-and-data-migration',
            '/cms',
            '/contact-us',
            '/crm-solutions',
            '/custom-software-development',
            '/dialysis-management',
            '/digital-healthcare-solution',
            '/digital-signage-solutions',
            '/enterprise-integration-services',
            '/enterprise-support-management',
            '/erp-system',
            '/feedback-management',
            '/hms',
            '/industrial-asset-management',
            '/inventory-stock-management',
            '/kiosk-management-system',
            '/mobile-app-development',
            '/opd-management-system',
            '/partners',
            '/pathology-diagnostic-management',
            '/privacy-policy',
            '/products',
            '/refund-policy',
            '/services',
            '/tele-consultation',
            '/terms-of-use',
            '/web-application-development',
            '/white-label-practice-management',
        ];

        foreach ($paths as $path) {
            $response = $this->get($path);
            $response->assertOk();

            $html = $response->getContent();
            $this->assertStringContainsString('name="viewport"', $html, "Missing viewport metadata on {$path}");
            $this->assertStringContainsString('class="site-theme"', $html, "Missing theme class on {$path}");
            $this->assertStringNotContainsString('color: #0b5edd', $html, "Legacy blue remains on {$path}");

            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            libxml_clear_errors();

            foreach ($dom->getElementsByTagName('img') as $image) {
                $this->assertTrue($image->hasAttribute('alt'), "Image without alt text on {$path}");
                $this->assertTrue($image->hasAttribute('loading'), "Image without loading strategy on {$path}");
                $this->assertSame('async', $image->getAttribute('decoding'), "Image without async decoding on {$path}");
            }
        }
    }
}
