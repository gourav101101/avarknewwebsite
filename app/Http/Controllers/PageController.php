<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Models\Blog;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::active()->ordered()->get();

        return view('home', compact('testimonials'));
    }

    public function about()
    {
        return view('about');
    }

     public function services()
    {
        $testimonials = Testimonial::active()->ordered()->get();
        return view('services', compact('testimonials'));
    }

     public function erpServoces()
    {
        return view('services/ERP_System');
    }
     public function CRMSolutions()
    {
        return view('services/CRMSolutions');
    }
     public function CustomSoftwareDevelopment()
    {
        return view('services/CustomSoftwareDevelopment');
    }
     public function WebApplicationDevelopment()
    {
        return view('services/WebApplicationDevelopment');
    }
     public function MobileAppDevelopment()
    {
        return view('services/MobileAppDevelopment');
    }
     public function CloudandDataMigration()
    {
        return view('services/CloudandDataMigration');
    }
     public function enterpriseIntegrationServices()
    {
        return view('services/enterpriseIntegrationServices');
    }

     public function DigitalHealthcareSolution()
    {
        return view('services/DigitalHealthcareSolution');
    }

     public function TeleConsultation()
    {
        return view('services/TeleConsultation');
    }

     public function cms()
    {
        return view('services/CMS');
    }


     public function products()
    {
        $testimonials = Testimonial::active()->ordered()->get();
        return view('products', compact('testimonials'));
    }
     public function hms()
    {
        return view('products/hms');
    }
     public function KIOSKManagementSystem()
    {
        return view('products/KIOSK_Management_System');
    }
     public function FeedbackManagement()
    {
        return view('products/Feedback_Management');
    }
     public function ArkCloudCast()
    {
        return view('products/ArkCloudCast');
    }
     public function inventoryStockManagement()
    {
        return view('products/inventoryStockManagement');
    }
     public function PathologyDiagnosticManagement()
    {
        return view('products/PathologyDiagnosticManagement');
    }
     public function WhiteLabelPracticeManagementApplication()
    {
        return view('products/WhiteLabelPracticeManagementApplication');
    }
     public function DialysisManagementSystem()
    {
        return view('products/DialysisManagementSystem');
    }
     
     public function enterpriseSupportManagement()
    {
        return view('products/enterpriseSupportManagement');
    }
     public function DigitalSignageSolutions()
    {
        return view('products/DigitalSignageSolutions');
    }
     public function OPDManagementSystem()
    {
        return view('products/OPDManagementSystem');
    }
     public function industrialAssetManagement()
    {
        return view('products/industrialAssetManagement');
    }
     
    public function ContactUs()
    {
        return view('contact-us');
    }

    public function PrivacyPolicy()
    {
        return view('privacy-policy');
    }

    public function TermsOfUse()
    {
        return view('terms-of-use');
    }

    public function RefundPolicy()
    {
        return view('refund-policy');
    }

    public function CancellationPolicy()
    {
        return view('cancellation-policy');
    }
    
    public function Partners()
    {
        return view('partners');
    }
    
    public function Blogs()
    {
        $blogs = Blog::published()->latest('published_at')->get();
        return view('Blogs', compact('blogs'));
    }

    public function Sitemap()
    {
        $routeNames = [
            'home', 'about', 'services', 'erp-system', 'crm-solutions',
            'custom-software-development', 'web-application-development',
            'mobile-app-development', 'cloud-and-data-migration',
            'enterprise-integration-services', 'digital-healthcare-solution',
            'tele-consultation', 'cms', 'products', 'hms',
            'kiosk-management-system', 'feedback-management',
            'business-marketing-tool', 'inventory-stock-management',
            'pathology-diagnostic-management', 'white-label-practice-management',
            'dialysis-management', 'enterprise-support-management',
            'digital-signage-solutions', 'opd-management-system',
            'industrial-asset-management', 'contact-us', 'privacy-policy',
            'terms-of-use', 'refund-policy', 'cancellation-policy', 'partners', 'blogs',
        ];

        $pages = collect($routeNames)->map(fn ($name) => [
            'url' => route($name),
            'priority' => $name === 'home' ? '1.0' : (in_array($name, ['products', 'services', 'blogs']) ? '0.8' : '0.7'),
            'changefreq' => in_array($name, ['home', 'blogs']) ? 'weekly' : 'monthly',
        ]);

        $blogs = Blog::published()->latest('updated_at')->get();

        return response()
            ->view('sitemap', compact('pages', 'blogs'))
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function BlogDetails($slug)
    {
        $blog = Blog::published()->where('slug', $slug)->firstOrFail();
        
        // Find recent posts for sidebar
        $recentPosts = Blog::published()
            ->where('id', '!=', $blog->id)
            ->latest('published_at')
            ->take(3)
            ->get();
            
        return view('blogDetails', compact('blog', 'recentPosts'));
    }

}
