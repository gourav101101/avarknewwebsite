@extends('layouts.app')

@section('title', 'Client Testimonials - What Our Clients Say')
@section('meta_description', "Read what hospitals, clinics, and healthcare organizations say about Avark's ARK HIMS and enterprise solutions.")
@section('meta_keywords', 'Avark testimonials, client reviews, hospital management reviews, ARK HIMS feedback, healthcare technology reviews')
@section('og_title', 'Client Testimonials | Avark Healthcare Technology')

@section('content')

<style>
    /* =============================================
       TESTIMONIALS PAGE - Premium Design
       ============================================= */

    /* ---- Stats Bar ---- */
    .tp-stats {
        position: relative;
        padding: clamp(40px, 5vw, 65px) 0;
        background: #fff;
        overflow: visible;
    }
    .tp-stats__inner {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        position: relative;
        z-index: 1;
        max-width: 960px;
        margin: 0 auto;
    }
    .tp-stats__item {
        text-align: center;
        padding: 24px 16px;
        position: relative;
    }
    .tp-stats__item:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 20%;
        right: 0;
        height: 60%;
        width: 1px;
        background: linear-gradient(180deg, transparent, rgba(116,68,253,0.2), transparent);
    }
    .tp-stats__icon {
        display: inline-flex;
        width: 48px;
        height: 48px;
        align-items: center;
        justify-content: center;
        margin: 0 auto 14px;
        border-radius: 14px;
        background: linear-gradient(135deg, rgba(116,68,253,0.1), rgba(116,68,253,0.06));
        border: 1px solid rgba(116,68,253,0.12);
        color: #7444FD;
        font-size: 18px;
    }
    .tp-stats__number {
        display: block;
        font-size: clamp(32px, 4vw, 44px);
        font-weight: 800;
        color: #7444FD;
        line-height: 1.1;
        letter-spacing: -0.03em;
    }
    .tp-stats__label {
        display: block;
        margin-top: 8px;
        color: #64748b;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }
    .tp-stats__divider {
        display: none;
    }
    @media (max-width: 575px) {
        .tp-stats__inner {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px 0;
        }
        .tp-stats__item:nth-child(2)::after { display: none; }
        .tp-stats__number { font-size: 28px; }
    }

    /* ---- Grid Section ---- */
    .tp-grid-section {
        position: relative;
        padding: clamp(50px, 6vw, 90px) 0;
        background: linear-gradient(180deg, #F0F4FF 0%, #F8FAFF 100%);
    }
    .tp-grid-section::before {
        content: '';
        position: absolute;
        top: 0; left: 50%;
        transform: translateX(-50%);
        width: 120px; height: 3px;
        background: #7444FD;
        border-radius: 3px;
    }
    .tp-grid__heading {
        text-align: center;
        margin-bottom: 50px;
    }
    .tp-grid__subtitle {
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
    .tp-grid__title {
        color: #0f172a !important;
        font-size: clamp(28px, 3.5vw, 42px);
        font-weight: 800;
        letter-spacing: -0.03em;
    }
    .tp-grid__desc {
        max-width: 620px;
        margin: 14px auto 0;
        color: #64748b;
        font-size: 16px;
        line-height: 1.7;
    }

    /* ---- Testimonial Cards ---- */
    .tp-grid__cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 28px;
    }
    .tp-card {
        position: relative;
        display: flex;
        flex-direction: column;
        padding: clamp(28px, 3vw, 38px);
        border: 1px solid rgba(116,68,253,0.12);
        border-left: 4px solid rgba(116,68,253,0.3);
        border-radius: 22px;
        background: #fff;
        box-shadow: 0 10px 35px rgba(15,23,42,0.05);
        transition: transform 0.4s cubic-bezier(0.25,0.46,0.45,0.94), box-shadow 0.4s ease, border-color 0.4s ease;
        overflow: hidden;
    }
    .tp-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: linear-gradient(135deg, rgba(116,68,253,0.03), transparent 60%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }
    .tp-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 55px rgba(76,29,149,0.12);
        border-color: rgba(116,68,253,0.28);
        border-left-color: #5B2EE5;
    }
    .tp-card:hover::before { opacity: 1; }
    .tp-card__quote {
        position: absolute;
        top: 20px; right: 24px;
        width: 42px; height: 42px;
        opacity: 0.08;
    }
    .tp-card__stars {
        display: flex;
        gap: 3px;
        margin-bottom: 16px;
    }
    .tp-card__stars i {
        color: #eab308;
        font-size: 14px;
    }
    .tp-card__stars i.fa-regular { color: #cbd5e1; }
    .tp-card__text {
        flex: 1;
        margin-bottom: 22px;
        color: #334155 !important;
        font-size: 15px;
        line-height: 1.75;
        font-style: italic;
    }
    .tp-card__author {
        display: flex;
        align-items: center;
        gap: 14px;
        padding-top: 18px;
        border-top: 1px solid rgba(0,0,0,0.06);
    }
    .tp-card__avatar {
        width: 48px; height: 48px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgba(116,68,253,0.2);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .tp-card__avatar-placeholder {
        width: 48px; height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #7444FD, #5B2EE5);
        color: #fff;
        font-size: 18px;
        font-weight: 800;
        border: 2px solid rgba(116,68,253,0.2);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .tp-card__info {
        display: flex;
        flex-direction: column;
    }
    .tp-card__name {
        color: #1e293b;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.3;
    }
    .tp-card__role {
        color: #7444FD;
        font-size: 13px;
        font-weight: 600;
    }

    /* ---- CTA Section ---- */
    .tp-cta {
        padding: clamp(50px, 6vw, 80px) 0;
        background: #fff;
        text-align: center;
    }
    .tp-cta__title {
        color: #0f172a;
        font-size: clamp(24px, 3vw, 36px);
        font-weight: 800;
        margin-bottom: 16px;
    }
    .tp-cta__desc {
        max-width: 550px;
        margin: 0 auto 30px;
        color: #64748b;
        font-size: 16px;
        line-height: 1.7;
    }
    .tp-cta__btn {
        background: #7444FD !important;
        box-shadow: 0 8px 24px rgba(116,68,253,0.3);
    }
    .tp-cta__btn::before { background: #5B2EE5 !important; }

    /* ---- Empty State ---- */
    .tp-empty {
        text-align: center;
        padding: 80px 20px;
    }
    .tp-empty__icon {
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
    .tp-empty__title {
        color: #0f172a;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .tp-empty__desc {
        color: #64748b;
        font-size: 15px;
        max-width: 400px;
        margin: 0 auto;
    }

    @media (max-width: 575px) {
        .tp-grid__cards {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>

<!-- Breadcrumb -->
<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title rr-title-anim-1">Testimonials</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Testimonials</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<!-- Stats Banner -->
<section class="tp-stats">
    <div class="container rr-container-1350">
        <div class="tp-stats__inner" data-aos="fade-up" data-aos-duration="700">
            <div class="tp-stats__item">
                <div class="tp-stats__icon"><i class="fa-solid fa-hospital"></i></div>
                <span class="tp-stats__number">100+</span>
                <span class="tp-stats__label">Hospitals</span>
            </div>
            <div class="tp-stats__item">
                <div class="tp-stats__icon"><i class="fa-solid fa-users"></i></div>
                <span class="tp-stats__number">1K+</span>
                <span class="tp-stats__label">Active Users</span>
            </div>
            <div class="tp-stats__item">
                <div class="tp-stats__icon"><i class="fa-solid fa-server"></i></div>
                <span class="tp-stats__number">99.9%</span>
                <span class="tp-stats__label">Uptime</span>
            </div>
            <div class="tp-stats__item">
                <div class="tp-stats__icon"><i class="fa-solid fa-star"></i></div>
                <span class="tp-stats__number">4.8<span style="font-size: 0.45em; color: #94a3b8;">/5</span></span>
                <span class="tp-stats__label">Average Rating</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="tp-grid-section">
    <div class="container rr-container-1350">
        <div class="tp-grid__heading" data-aos="fade-up" data-aos-duration="700">
            <span class="tp-grid__subtitle">Testimonials</span>
            <h2 class="tp-grid__title">What Our Clients Say</h2>
            <p class="tp-grid__desc">Real feedback from hospitals, clinics, and healthcare organizations that trust Avark to power their digital operations.</p>
        </div>

        @if($testimonials->isNotEmpty())
        <div class="tp-grid__cards">
            @foreach($testimonials as $testimonial)
            <article class="tp-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ ($loop->index % 3) * 120 }}">
                <img loading="lazy" class="tp-card__quote" src="{{ asset('assets/imgs/home-1/testimonial/quite.png') }}" alt="" aria-hidden="true">

                <div class="tp-card__stars">
                    @for($star = 1; $star <= 5; $star++)
                        <i class="fa-{{ $star <= $testimonial->rating ? 'solid' : 'regular' }} fa-star"></i>
                    @endfor
                </div>

                <p class="tp-card__text">&ldquo;{{ strip_tags($testimonial->content) }}&rdquo;</p>

                <div class="tp-card__author">
                    @if($testimonial->avatar)
                        <img loading="lazy" class="tp-card__avatar" src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}">
                    @else
                        <span class="tp-card__avatar-placeholder">{{ Str::upper(Str::substr($testimonial->client_name, 0, 1)) }}</span>
                    @endif
                    <div class="tp-card__info">
                        <span class="tp-card__name">{{ $testimonial->client_name }}</span>
                        <span class="tp-card__role">{{ collect([$testimonial->client_position, $testimonial->client_company])->filter()->implode(', ') }}</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @else
        <div class="tp-empty">
            <div class="tp-empty__icon"><i class="fa-solid fa-quote-right"></i></div>
            <h3 class="tp-empty__title">No Testimonials Yet</h3>
            <p class="tp-empty__desc">We're collecting feedback from our amazing clients. Check back soon!</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="tp-cta" data-aos="fade-up" data-aos-duration="700">
    <div class="container rr-container-1350">
        <h2 class="tp-cta__title">Ready to Transform Your Hospital?</h2>
        <p class="tp-cta__desc">Join 100+ hospitals that trust Avark to power their healthcare operations. Book a free demo today.</p>
        <a href="{{ route('contact-us') }}" class="rr-btn-green tp-cta__btn">
            <span class="btn-wrap">
                <span class="text-one">Book a Free Demo</span>
                <span class="text-two">Book a Free Demo</span>
            </span>
        </a>
    </div>
</section>

@endsection
