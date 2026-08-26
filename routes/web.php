<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicMediaController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminBrochureController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminArkHimsShortController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/media/{folder}/{filename}', [PublicMediaController::class, 'legacy'])
    ->where('folder', 'blogs|testimonials')
    ->where('filename', '[^/]+')
    ->name('media.legacy');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');


// service details page Kp
Route::get('/erp-system', [PageController::class, 'erpServoces'])->name('erp-system');
Route::get('/crm-solutions', [PageController::class, 'CRMSolutions'])->name('crm-solutions');
Route::get('/custom-software-development', [PageController::class, 'CustomSoftwareDevelopment'])->name('custom-software-development');
Route::get('/web-application-development', [PageController::class, 'WebApplicationDevelopment'])->name('web-application-development');
Route::get('/mobile-app-development', [PageController::class, 'MobileAppDevelopment'])->name('mobile-app-development');
Route::get('/cloud-and-data-migration', [PageController::class, 'CloudandDataMigration'])->name('cloud-and-data-migration');
Route::get('/enterprise-integration-services', [PageController::class, 'enterpriseIntegrationServices'])->name('enterprise-integration-services');
Route::get('/digital-healthcare-solution', [PageController::class, 'DigitalHealthcareSolution'])->name('digital-healthcare-solution');
Route::get('/tele-consultation', [PageController::class, 'TeleConsultation'])->name('tele-consultation');
Route::get('/cms', [PageController::class, 'cms'])->name('cms');
// service details page  Kp End


// Product details page  Kp Start
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/hms', [PageController::class, 'hms'])->name('hms');
Route::get('/kiosk-management-system', [PageController::class, 'KIOSKManagementSystem'])->name('kiosk-management-system');
Route::get('/feedback-management', [PageController::class, 'FeedbackManagement'])->name('feedback-management');
Route::get('/business-marketing-tool', [PageController::class, 'ArkCloudCast'])->name('business-marketing-tool');
Route::get('/inventory-stock-management', [PageController::class, 'inventoryStockManagement'])->name('inventory-stock-management');
Route::get('/pathology-diagnostic-management', [PageController::class, 'PathologyDiagnosticManagement'])->name('pathology-diagnostic-management');
Route::get('/white-label-practice-management', [PageController::class, 'WhiteLabelPracticeManagementApplication'])->name('white-label-practice-management');
Route::get('/dialysis-management', [PageController::class, 'DialysisManagementSystem'])->name('dialysis-management');
Route::get('/enterprise-support-management', [PageController::class, 'enterpriseSupportManagement'])->name('enterprise-support-management');
Route::get('/digital-signage-solutions', [PageController::class, 'DigitalSignageSolutions'])->name('digital-signage-solutions');
Route::get('/opd-management-system', [PageController::class, 'OPDManagementSystem'])->name('opd-management-system');
Route::get('/industrial-asset-management', [PageController::class, 'industrialAssetManagement'])->name('industrial-asset-management');
// Product details page  Kp End


// ==========================================
// Admin Panel Routes
// ==========================================
Route::prefix('admin')->group(function () {
    // Auth routes (guest only)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    });

    // Protected admin routes
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Blogs CRUD
        Route::resource('blogs', AdminBlogController::class)->names('admin.blogs');

        // Brochure management
        Route::get('brochures', [AdminBrochureController::class, 'index'])->name('admin.brochures.index');
        Route::post('brochures', [AdminBrochureController::class, 'store'])->name('admin.brochures.store');
        Route::delete('brochures/{brochure}', [AdminBrochureController::class, 'destroy'])->name('admin.brochures.destroy');

        // Testimonials CRUD
        Route::resource('testimonials', AdminTestimonialController::class)->names('admin.testimonials');
        Route::patch('testimonials/{testimonial}/toggle-status', [AdminTestimonialController::class, 'toggleStatus'])->name('admin.testimonials.toggle-status');

        // ARK HIMS YouTube Shorts
        Route::resource('ark-hims-shorts', AdminArkHimsShortController::class)
            ->except('show')
            ->names('admin.ark-hims-shorts');
        Route::patch('ark-hims-shorts/{arkHimsShort}/toggle-status', [AdminArkHimsShortController::class, 'toggleStatus'])
            ->name('admin.ark-hims-shorts.toggle-status');
    });
});



Route::get('/video-shorts', [PageController::class, 'videoShorts'])->name('video-shorts');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');

Route::get('/contact-us', [PageController::class, 'ContactUs'])->name('contact-us');
Route::get('/privacy-policy', [PageController::class, 'PrivacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-use', [PageController::class, 'TermsOfUse'])->name('terms-of-use');
Route::get('/refund-policy', [PageController::class, 'RefundPolicy'])->name('refund-policy');
Route::get('/cancellation-policy', [PageController::class, 'CancellationPolicy'])->name('cancellation-policy');
Route::get('/partners', [PageController::class, 'Partners'])->name('partners');
Route::get('/blogs', [PageController::class, 'Blogs'])->name('blogs');
Route::get('/sitemap.xml', [PageController::class, 'Sitemap'])->name('sitemap');
Route::get('/blog-details/{slug}', [PageController::class, 'BlogDetails'])->name('blog-details');
