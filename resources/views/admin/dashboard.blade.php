@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')

<!-- Stats Grid -->
<div class="stats-grid">
    <div class="stat-card accent">
        <div class="stat-icon">
            <i class="fa-regular fa-newspaper"></i>
        </div>
        <div class="stat-value">{{ $stats['total_blogs'] }}</div>
        <div class="stat-label">Total Blogs</div>
    </div>

    <div class="stat-card info">
        <div class="stat-icon">
            <i class="fa-regular fa-circle-check"></i>
        </div>
        <div class="stat-value">{{ $stats['published_blogs'] }}</div>
        <div class="stat-label">Published Blogs</div>
    </div>

    <div class="stat-card warning">
        <div class="stat-icon">
            <i class="fa-regular fa-file-pen"></i>
        </div>
        <div class="stat-value">{{ $stats['draft_blogs'] }}</div>
        <div class="stat-label">Draft Blogs</div>
    </div>

    <div class="stat-card purple">
        <div class="stat-icon">
            <i class="fa-regular fa-quote-left"></i>
        </div>
        <div class="stat-value">{{ $stats['total_testimonials'] }}</div>
        <div class="stat-label">Total Testimonials</div>
    </div>

    <div class="stat-card danger">
        <div class="stat-icon">
            <i class="fa-regular fa-star"></i>
        </div>
        <div class="stat-value">{{ $stats['active_testimonials'] }}</div>
        <div class="stat-label">Active Testimonials</div>
    </div>
</div>

<!-- Recent Activity -->
<div class="recent-grid">
    <!-- Recent Blogs -->
    <div class="admin-card">
        <div class="card-header-admin">
            <h5><i class="fa-regular fa-newspaper" style="color: var(--admin-accent); margin-right: 8px;"></i>Recent Blogs</h5>
            <a href="{{ route('admin.blogs.create') }}" class="btn-admin btn-primary-admin btn-sm-admin">
                <i class="fa-regular fa-plus"></i> New Blog
            </a>
        </div>
        <div class="table-responsive-admin">
            @if($recentBlogs->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentBlogs as $blog)
                        <tr>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog) }}" style="color: var(--admin-text); font-weight: 500;">
                                    {{ Str::limit($blog->title, 35) }}
                                </a>
                            </td>
                            <td>
                                @if($blog->is_published)
                                    <span class="badge-admin badge-published">Published</span>
                                @else
                                    <span class="badge-admin badge-draft">Draft</span>
                                @endif
                            </td>
                            <td style="font-size: 12px;">{{ $blog->created_at->format('M d, Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state" style="padding: 32px;">
                    <i class="fa-regular fa-newspaper"></i>
                    <h4>No blogs yet</h4>
                    <p>Create your first blog post</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent Testimonials -->
    <div class="admin-card">
        <div class="card-header-admin">
            <h5><i class="fa-regular fa-quote-left" style="color: #8b5cf6; margin-right: 8px;"></i>Recent Testimonials</h5>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary-admin btn-sm-admin">
                <i class="fa-regular fa-plus"></i> New
            </a>
        </div>
        <div class="table-responsive-admin">
            @if($recentTestimonials->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Status</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentTestimonials as $testimonial)
                        <tr>
                            <td>
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" style="color: var(--admin-text); font-weight: 500;">
                                    {{ $testimonial->client_name }}
                                </a>
                                <div style="font-size: 11px; color: var(--admin-text-dim);">{{ $testimonial->client_company }}</div>
                            </td>
                            <td>
                                @if($testimonial->is_active)
                                    <span class="badge-admin badge-active">Active</span>
                                @else
                                    <span class="badge-admin badge-inactive">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="star-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fa-solid fa-star {{ $i <= $testimonial->rating ? '' : 'empty' }}"></i>
                                    @endfor
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state" style="padding: 32px;">
                    <i class="fa-regular fa-quote-left"></i>
                    <h4>No testimonials yet</h4>
                    <p>Add your first testimonial</p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
