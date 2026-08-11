@extends('layouts.app')

@section('title', 'Blogs Blog Details')
@section('meta_description', 'Blogs Blog Details')
@section('meta_keywords', 'home, Blogs Blog Details')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Blog Details</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li><i class="fa-regular fa-angle-right"></i>Blogs</li>
                    <li><i class="fa-regular fa-angle-right"></i>Blog Details</li>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>


<!-- News Section-3 Start -->
<section class="news-section section-spacing">
    <div class="container rr-container-1350">
        <div class="news-details-wrapper">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="details-image">
                        @if($blog->image)
                            <img src="{{ asset($blog->image) }}" alt="img" style="width: 100%; border-radius: 12px; margin-bottom: 20px;">
                        @endif
                    </div>
                    <div class="news-details-content">
                        <h3>{{ $blog->title }}</h3>
                        {!! $blog->content !!}

                        <!-- <div class="sideber">
                      <h3>
                        Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum
                        nec at odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the
                        consectetur elit
                      </h3>
                      <div class="client-info-item">
                        <div class="client-info">
                          <div class="image">
                            <img src="{{ asset('assets/imgs/inner/blog-details/author.jpg') }}" alt="img">
                          </div>
                          <h4>Michel Clarck</h4>
                        </div>
                        <div class="icon">
                          <i class="fa-regular fa-quote-right"></i>
                        </div>
                      </div>
                    </div> -->


                        <div class="row tag-share-wrap mt-4 mb-5">
                            <div class="col-lg-8 col-12">
                                @if($blog->tag)
                                <div class="tagcloud">
                                    <span>Tag:</span>
                                    <a href="#">{{ $blog->tag }}</a>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                <div class="social-share">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sideber">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="#">ERP Development</a><span>06</span></li>
                                    <li><a href="#">Cloud Solutions</a><span>04</span></li>
                                    <li><a href="#">CRM Integration</a><span>05</span></li>
                                    <li><a href="#">Business Automation</a><span>03</span></li>
                                    <li><a href="#">Enterprise Software</a><span>07</span></li>
                                    <li><a href="#">Digital Transformation</a><span>08</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                @forelse($recentPosts as $recent)
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        @if($recent->image)
                                            <img src="{{ asset($recent->image) }}" alt="img">
                                        @else
                                            <img src="{{ asset('assets/imgs/inner/blog/blog-3.jpg') }}" alt="img">
                                        @endif
                                    </div>
                                    <div class="recent-content">
                                        <h3>
                                            <a href="{{ route('blog-details', $recent->slug) }}">
                                                {{ Str::limit($recent->title, 50) }}
                                            </a>
                                        </h3>
                                        <ul>
                                            <li>
                                                {{ $recent->published_at ? $recent->published_at->format('M d, Y') : $recent->created_at->format('M d, Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @empty
                                    <p>No recent posts.</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="single-sidebar-widget mb-0">
                            <div class="wid-title">
                                <h3>Tag Cloud</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Litigation</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Legal Risk</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Lawsuits</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Contracts</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Compliance</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Disputes</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Management</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Resolution</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
