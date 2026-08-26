@extends('layouts.app')

@section('title', 'Video Shorts - ARK HIMS in Action')
@section('meta_description', 'Watch short videos showcasing ARK HIMS features, hospital management workflows, and healthcare technology in action.')
@section('meta_keywords', 'ARK HIMS videos, hospital management demos, healthcare technology shorts, Avark YouTube')
@section('og_title', 'Video Shorts — ARK HIMS in Action | Avark')

@section('content')

<style>
    /* =============================================
       VIDEO SHORTS PAGE — Premium Grid Layout
       ============================================= */
    .vs-page-hero {
        position: relative;
        padding: clamp(50px, 6vw, 90px) 0;
        background: #fff;
    }
    .vs-page-hero__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 18px;
        padding: 8px 18px;
        background: linear-gradient(135deg, rgba(116,68,253,0.08), rgba(116,68,253,0.12));
        border: 1px solid rgba(116,68,253,0.18);
        border-radius: 999px;
        color: #4C1D95;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }
    .vs-page-hero__eyebrow i { color: #ff5252; }
    .vs-page-hero__title {
        max-width: 700px;
        margin-bottom: 16px;
        color: #0f172a !important;
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 800;
        line-height: 1.1;
        letter-spacing: -0.04em;
    }
    .vs-page-hero__desc {
        max-width: 600px;
        margin-bottom: 30px;
        color: #64748b !important;
        font-size: 16px;
        line-height: 1.75;
    }
    .vs-page-hero__actions {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .vs-page-hero__cta {
        background: #7444FD !important;
        box-shadow: 0 12px 28px rgba(116,68,253,0.35);
    }
    .vs-page-hero__cta::before { background: #5B2EE5 !important; }
    .vs-page-hero__channel {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: #334155 !important;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .vs-page-hero__channel i { color: #ff5252; font-size: 20px; }
    .vs-page-hero__channel:hover { color: #7444FD !important; }

    /* ---- Grid Section ---- */
    .vs-grid-section {
        position: relative;
        padding: clamp(50px, 6vw, 90px) 0;
        background: linear-gradient(180deg, #F0F4FF 0%, #F8FAFF 100%);
    }
    .vs-grid-section::before {
        content: '';
        position: absolute;
        top: 0; left: 50%;
        transform: translateX(-50%);
        width: 120px; height: 3px;
        background: #7444FD;
        border-radius: 3px;
    }
    .vs-grid__heading {
        text-align: center;
        margin-bottom: 50px;
    }
    .vs-grid__subtitle {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116,68,253,0.08), rgba(116,68,253,0.12));
        border: 1px solid rgba(116,68,253,0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        margin-bottom: 14px;
    }
    .vs-grid__title {
        color: #0f172a !important;
        font-size: clamp(28px, 3.5vw, 42px);
        font-weight: 800;
        letter-spacing: -0.03em;
    }

    /* ---- Video Cards Grid ---- */
    .vs-grid__cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 28px;
    }
    .vs-card {
        overflow: hidden;
        border: 1px solid rgba(116,68,253,0.12);
        border-radius: 22px;
        background: #fff;
        box-shadow: 0 10px 35px rgba(15,23,42,0.06);
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    }
    .vs-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 55px rgba(76,29,149,0.13);
        border-color: rgba(116,68,253,0.3);
    }
    .vs-card__media {
        position: relative;
        display: block;
        width: 100%;
        aspect-ratio: 9 / 16;
        border: 0;
        background: #100a26;
        padding: 0;
        overflow: hidden;
        cursor: pointer;
        text-align: left;
    }
    .vs-card__frame {
        position: relative;
        display: block;
        width: 100%;
        aspect-ratio: 9 / 16;
        border: 0;
        background: #100a26;
    }
    .vs-card__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.55s ease;
    }
    .vs-card:hover .vs-card__media img { transform: scale(1.04); }
    .vs-card__media::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(12,7,29,0.06) 35%, rgba(12,7,29,0.78) 100%);
    }
    .vs-card__tag {
        position: absolute;
        z-index: 2;
        top: 14px; left: 14px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 12px;
        border-radius: 999px;
        color: #fff;
        background: rgba(14,14,12,0.72);
        font-size: 11px;
        font-weight: 700;
        backdrop-filter: blur(8px);
    }
    .vs-card__tag i { color: #ff5252; }
    .vs-card__play {
        position: absolute;
        z-index: 2;
        top: 50%; left: 50%;
        display: flex;
        width: 68px; height: 68px;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255,255,255,0.55);
        border-radius: 50%;
        color: #fff;
        background: rgba(116,68,253,0.88);
        box-shadow: 0 14px 30px rgba(23,12,57,0.35);
        transform: translate(-50%,-50%);
        transition: transform 0.3s ease, background 0.3s ease;
    }
    .vs-card__play i { margin-left: 4px; font-size: 19px; }
    .vs-card__media:hover .vs-card__play {
        background: #5B2EE5;
        transform: translate(-50%,-50%) scale(1.08);
    }
    .vs-card__body {
        padding: 20px;
    }
    .vs-card__number {
        display: block;
        margin-bottom: 7px;
        color: #7444FD;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.12em;
        text-transform: uppercase;
    }
    .vs-card__title {
        margin: 0;
        color: #1e293b !important;
        font-size: 16px;
        font-weight: 700;
        line-height: 1.45;
    }

    /* ---- Empty State ---- */
    .vs-empty {
        text-align: center;
        padding: 80px 20px;
    }
    .vs-empty__icon {
        display: inline-flex;
        width: 80px; height: 80px;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        border-radius: 50%;
        background: rgba(116,68,253,0.1);
        color: #7444FD;
        font-size: 32px;
    }
    .vs-empty__title {
        color: #0f172a;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .vs-empty__desc {
        color: #64748b;
        font-size: 15px;
        max-width: 400px;
        margin: 0 auto;
    }

    @media (max-width: 575px) {
        .vs-grid__cards {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 18px;
        }
    }
</style>

<!-- Breadcrumb -->
<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title rr-title-anim-1">Video Shorts</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Video Shorts</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<!-- Hero Banner -->
<section class="vs-page-hero">
    <div class="container rr-container-1350">
        <div class="row align-items-center g-5">
            <div class="col-lg-8" data-aos="fade-right" data-aos-duration="800">
                <span class="vs-page-hero__eyebrow">
                    <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                    Videos / Shorts
                </span>
                <h2 class="vs-page-hero__title">Healthcare Operations Powered Every Day</h2>
                <p class="vs-page-hero__desc">
                    See how ARK HIMS turns complex hospital workflows into connected, efficient digital experiences for healthcare teams and patients.
                </p>
                <div class="vs-page-hero__actions">
                    <a href="{{ route('contact-us') }}" class="rr-btn-green vs-page-hero__cta">
                        <span class="btn-wrap">
                            <span class="text-one">Book a Demo</span>
                            <span class="text-two">Book a Demo</span>
                        </span>
                    </a>
                    <a class="vs-page-hero__channel" href="https://www.youtube.com/@Avarkhospitalmanagementsystem" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                        Visit our channel
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Grid -->
<section class="vs-grid-section">
    <div class="container rr-container-1350">
        <div class="vs-grid__heading" data-aos="fade-up" data-aos-duration="700">
            <span class="vs-grid__subtitle">All Videos</span>
            <h2 class="vs-grid__title">Watch ARK HIMS in Action</h2>
        </div>

        @if($arkHimsShorts->isNotEmpty())
        <div class="vs-grid__cards">
            @foreach($arkHimsShorts as $short)
            <article class="vs-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $loop->index * 100 }}">
                <button
                    class="vs-card__media js-youtube-short"
                    type="button"
                    data-youtube-id="{{ $short->youtube_id }}"
                    data-video-title="{{ $short->title }}"
                    aria-label="Play {{ $short->title }}">
                    <img loading="lazy" decoding="async"
                        src="{{ $short->thumbnail_url }}"
                        alt="{{ $short->title }} video thumbnail">
                    <span class="vs-card__tag"><i class="fa-brands fa-youtube" aria-hidden="true"></i> YouTube Short</span>
                    <span class="vs-card__play" aria-hidden="true"><i class="fa-solid fa-play"></i></span>
                </button>
                <div class="vs-card__body">
                    <span class="vs-card__number">Short {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3 class="vs-card__title">{{ $short->title }}</h3>
                </div>
            </article>
            @endforeach
        </div>
        @else
        <div class="vs-empty">
            <div class="vs-empty__icon"><i class="fa-brands fa-youtube"></i></div>
            <h3 class="vs-empty__title">No Videos Yet</h3>
            <p class="vs-empty__desc">We're working on creating amazing content. Check back soon!</p>
        </div>
        @endif
    </div>
</section>

<script>
    document.querySelectorAll('.js-youtube-short').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            var videoId = trigger.dataset.youtubeId;
            var videoTitle = trigger.dataset.videoTitle || 'ARK HIMS YouTube Short';
            var iframe = document.createElement('iframe');

            iframe.className = 'vs-card__frame';
            iframe.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(videoId) + '?autoplay=1&rel=0&modestbranding=1';
            iframe.title = videoTitle;
            iframe.loading = 'lazy';
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.referrerPolicy = 'strict-origin-when-cross-origin';
            iframe.allowFullscreen = true;

            trigger.replaceWith(iframe);
        }, { once: true });
    });
</script>

@endsection
