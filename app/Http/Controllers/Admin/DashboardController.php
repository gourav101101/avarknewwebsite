<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    /**
     * Show admin dashboard with stats.
     */
    public function index()
    {
        $stats = [
            'total_blogs' => Blog::count(),
            'published_blogs' => Blog::published()->count(),
            'draft_blogs' => Blog::where('is_published', false)->count(),
            'total_testimonials' => Testimonial::count(),
            'active_testimonials' => Testimonial::active()->count(),
        ];

        $recentBlogs = Blog::latest()->take(5)->get();
        $recentTestimonials = Testimonial::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentBlogs', 'recentTestimonials'));
    }
}
