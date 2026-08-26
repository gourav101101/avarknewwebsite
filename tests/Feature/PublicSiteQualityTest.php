<?php

namespace Tests\Feature;

use DOMDocument;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicSiteQualityTest extends TestCase
{
    use RefreshDatabase;

    private const LEGACY_BRAND_COLORS = [
        '#A0EA71',
        '#173401',
        '#1AD079',
        '#22C55E',
        '#B4F914',
        '#90EE02',
        '#004FFC',
        '#384BFF',
    ];

    public function test_canonical_public_stylesheets_do_not_contain_the_legacy_palette(): void
    {
        $stylesheets = [
            public_path('assets/css/style.css'),
            public_path('assets/css/site-theme.css'),
        ];

        foreach ($stylesheets as $stylesheet) {
            $css = strtoupper((string) file_get_contents($stylesheet));

            foreach (self::LEGACY_BRAND_COLORS as $legacyColor) {
                $this->assertStringNotContainsString(
                    $legacyColor,
                    $css,
                    basename($stylesheet)." still contains legacy color {$legacyColor}"
                );
            }
        }
    }

    public function test_shared_hosting_routes_asset_requests_to_the_canonical_public_directory(): void
    {
        $rootRules = (string) file_get_contents(base_path('.htaccess'));
        $publicRules = (string) file_get_contents(public_path('.htaccess'));

        $this->assertStringContainsString(
            'RewriteCond %{DOCUMENT_ROOT}/public/assets/$1 -f',
            $rootRules
        );
        $this->assertStringContainsString(
            'RewriteRule ^assets/(.+)$ public/assets/$1 [L]',
            $rootRules
        );
        $this->assertStringNotContainsString(
            'RewriteRule ^assets/(.+)$ public/assets/$1 [L]',
            $publicRules,
            'The compatibility rule would recursively rewrite /public/assets requests.'
        );
    }

    public function test_stylesheet_urls_use_a_production_safe_cache_version(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('assets/css/style.css?v=20260826-purple-2', false);
        $response->assertSee('assets/css/site-theme.css?v=20260826-purple-2', false);
    }

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
