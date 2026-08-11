@extends('layouts.app')

@section('title', 'Blogs')
@section('meta_description', 'Insights, updates, and practical guides from Avark.')
@section('meta_keywords', 'Avark, blogs, healthcare technology, HMS, ERP')

@section('content')
<style>
    .blog-listing { background: #f6f8fb; }
    .blog-listing__intro { max-width: 650px; margin: 0 auto 46px; text-align: center; }
    .blog-listing__eyebrow { color: #16803d; font-size: 14px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
    .blog-listing__intro h1 { color: #152b3c; font-size: clamp(32px, 4vw, 48px); margin: 10px 0 12px; }
    .blog-listing__intro p { color: #64748b; font-size: 17px; margin: 0; }
    .blog-card { height: 100%; overflow: hidden; border: 1px solid #e5eaf0; border-radius: 18px; background: #fff; box-shadow: 0 8px 25px rgba(21, 43, 60, .06); transition: transform .25s ease, box-shadow .25s ease; }
    .blog-card:hover { transform: translateY(-6px); box-shadow: 0 18px 36px rgba(21, 43, 60, .13); }
    .blog-card__image { position: relative; display: block; height: 225px; overflow: hidden; background: #e8eef1; }
    .blog-card__image img { width: 100%; height: 100%; object-fit: cover; transition: transform .35s ease; }
    .blog-card:hover .blog-card__image img { transform: scale(1.05); }
    .blog-card__tag { position: absolute; top: 16px; left: 16px; display: inline-block; padding: 6px 12px; border-radius: 20px; background: #16803d; color: #fff; font-size: 12px; font-weight: 700; }
    .blog-card__body { display: flex; height: calc(100% - 225px); flex-direction: column; padding: 25px; }
    .blog-card__meta { display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 14px; color: #718096; font-size: 13px; }
    .blog-card__meta i { color: #16803d; margin-right: 5px; }
    .blog-card__title { margin: 0 0 12px; font-size: 23px; line-height: 1.35; }
    .blog-card__title a { color: #152b3c; transition: color .2s ease; }
    .blog-card__title a:hover { color: #16803d; }
    .blog-card__excerpt { color: #64748b; line-height: 1.7; }
    .blog-card__link { margin-top: auto; padding-top: 18px; color: #16803d; font-weight: 700; }
    .blog-card__link i { margin-left: 7px; transition: transform .2s ease; }
    .blog-card__link:hover i { transform: translateX(4px); }
    .blog-empty { padding: 60px 25px; border: 1px dashed #cbd5e1; border-radius: 18px; background: #fff; color: #64748b; text-align: center; }
    .blog-empty i { display: block; margin-bottom: 16px; color: #16803d; font-size: 42px; }
    @media (max-width: 575px) { .blog-card__image { height: 200px; } .blog-card__body { padding: 20px; } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Blogs</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="blog-listing section-spacing">
    <div class="container rr-container-1350">
        <div class="blog-listing__intro">
            <span class="blog-listing__eyebrow">Avark Insights</span>
            <h1>Ideas that move healthcare forward</h1>
            <p>Explore practical updates, product insights, and technology perspectives from the Avark team.</p>
        </div>

        <div class="row g-4">
            @forelse($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <article class="blog-card">
                        <a class="blog-card__image" href="{{ route('blog-details', $blog->slug) }}" aria-label="Read {{ $blog->title }}">
                            <img src="{{ $blog->image ? asset($blog->image) : asset('assets/imgs/inner/features/analytics_dashboard_1783400138562.png') }}" alt="{{ $blog->title }}">
                            @if($blog->tag)
                                <span class="blog-card__tag">{{ $blog->tag }}</span>
                            @endif
                        </a>
                        <div class="blog-card__body">
                            <div class="blog-card__meta">
                                <span><i class="fa-regular fa-user"></i>{{ $blog->author }}</span>
                                <span><i class="fa-regular fa-calendar"></i>{{ ($blog->published_at ?? $blog->created_at)->format('M d, Y') }}</span>
                            </div>
                            <h2 class="blog-card__title"><a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a></h2>
                            <p class="blog-card__excerpt">{{ Str::limit(trim(strip_tags($blog->content)), 135) }}</p>
                            <a class="blog-card__link" href="{{ route('blog-details', $blog->slug) }}">Read article <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="blog-empty">
                        <i class="fa-regular fa-newspaper"></i>
                        <h2>No articles published yet</h2>
                        <p class="mb-0">Please check back soon for new insights and updates.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
