@extends('layouts.app')

@section('title', 'Smart Healthcare & Enterprise Solutions')
@section('meta_description', 'Avark provides cutting-edge Hospital Management Systems (HMS), ERP, CRM, and digital transformation solutions to empower modern businesses and healthcare institutions.')
@section('meta_keywords', 'Avark, Hospital Management System, ERP, CRM, Digital Healthcare, Custom Software Development, India')
@section('og_title', 'Avark Healthcare & Enterprise Technology')

@section('content')


<style>
    .brand-1__item img{
        width: 120px;
    }
    
    /* Improve Discover More button in About Us section */
    .features-1 .rr-btn-green {
        background: #7444FD !important;
        color: #fff !important;
        border: none !important;
        box-shadow: 0 8px 24px rgba(116, 68, 253, 0.3) !important;
        padding: 16px 36px !important;
    }
    .features-1 .rr-btn-green * {
        color: #fff !important;
    }
    .features-1 .rr-btn-green::before {
        background: #5B2EE5 !important;
    }
    .features-1 .rr-btn-green:hover * {
        color: #fff !important;
    }

    /* =============================================
       SECTION 2: SERVICES â€” Enhanced Cards
       ============================================= */
    .service.rr-bg-gray {
        background: var(--site-bg-soft, #F0F4FF) !important;
        position: relative;
    }
    .service .section-title__wrapper .sub-title {
        display: inline-block;
        padding: 6px 18px;
        background: rgba(116, 68, 253, 0.08);
        border: 1px solid rgba(116, 68, 253, 0.15);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 600;
        color: #5B2EE5;
        letter-spacing: 0.5px;
    }
    .service__item {
        border-left: 3px solid transparent;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        position: relative;
        overflow: hidden;
    }
    .service__item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(116, 68, 253,0.04), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .service__item:hover {
        border-left-color: #7444FD !important;
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(116, 68, 253, 0.12) !important;
    }
    .service__item:hover::before {
        opacity: 1;
    }
    .service__item .icon {
        transition: transform 0.3s ease;
    }
    .service__item:hover .icon {
        transform: scale(1.1);
    }
    .service__arrow {
        margin-top: 40px;
    }
    .service__arrow button {
        transition: all 0.3s ease !important;
    }
    .service__arrow button:hover {
        background: #7444FD !important;
        color: #fff !important;
        transform: scale(1.1);
    }

    /* =============================================
       SECTION 3: PARTNERS â€” Trust Enhancement
       ============================================= */
    .brand-1 {
        position: relative;
        padding-bottom: 40px;
        background: var(--site-bg-subtle, #F8FAFF);
    }
    .brand-1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(116, 68, 253, 0.2), transparent);
    }
    .brand-1 .section-title__wrapper {
        text-align: center !important;
        margin-bottom: 10px;
    }
    .brand-1 .section-title__wrapper .title {
        font-size: 16px !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666 !important;
        font-weight: 600 !important;
        position: relative;
        display: inline-block;
    }
    .brand-1 .section-title__wrapper .title::before,
    .brand-1 .section-title__wrapper .title::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 40px;
        height: 1px;
        background: #ccc;
    }
    .brand-1 .section-title__wrapper .title::before {
        left: -55px;
    }
    .brand-1 .section-title__wrapper .title::after {
        right: -55px;
    }
    .brand-1__item {
        transition: all 0.3s ease !important;
        filter: grayscale(100%) opacity(0.5);
    }
    .brand-1__item:hover {
        filter: grayscale(0%) opacity(1) !important;
        transform: scale(1.1);
    }

    /* =============================================
       SECTION 4: ABOUT/FEATURES â€” Enhanced Premium
       ============================================= */
    .features-1 {
        position: relative;
        background: #fff;
    }
    .features-1::before {
        content: '';
        position: absolute;
        top: -60px;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(116, 68, 253, 0.15), transparent);
    }
    .features-1 .section-title__wrapper .sub-title {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.08), rgba(116, 68, 253, 0.12));
        border: 1px solid rgba(116, 68, 253, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }
    .features-1 .section-title__wrapper .title {
        color: #0f172a;
    }
    .features-1 .section-title__wrapper .desc {
        color: #475569;
        line-height: 1.8;
    }
    .features-1__item {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        border-left: 3px solid transparent;
        padding-left: 16px !important;
    }
    .features-1__item:hover {
        transform: translateX(8px);
        border-left-color: #5B2EE5;
    }
    .features-1__item span {
        transition: all 0.4s ease;
        border-radius: 12px;
    }
    .features-1__item:hover span {
        transform: scale(1.12);
        box-shadow: 0 8px 24px rgba(116, 68, 253, 0.2);
    }
    .features-1__item .text .title {
        font-weight: 700;
        color: #1e293b;
    }
    .features-1__item .text p {
        color: #64748b;
        line-height: 1.6;
    }
    .features-1 .rr-btn-green {
        background: #7444FD !important;
        box-shadow: 0 4px 16px rgba(116, 68, 253, 0.3);
        transition: all 0.3s ease !important;
    }
    .features-1 .rr-btn-green:hover {
        box-shadow: 0 8px 28px rgba(116, 68, 253, 0.4);
        transform: translateY(-2px);
    }

    /* =============================================
       SECTION 5: PRODUCTS â€” Premium Cards
       ============================================= */
    .ai-features-2 {
        background: var(--site-bg-soft, #F0F4FF);
        position: relative;
    }
    .ai-features-2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 3px;
        background: #7444FD ;
        border-radius: 3px;
    }
    .ai-features-2 .section-title__wrapper .sub-title {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.08), rgba(116, 68, 253, 0.12));
        border: 1px solid rgba(116, 68, 253, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }
    .ai-features-2 .section-title__wrapper .title {
        color: #0f172a;
    }
    .ai-features-2__item {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        border: 1px solid rgba(0,0,0,0.06) !important;
        border-radius: 16px !important;
        border-left: 3px solid transparent !important;
    }
    .ai-features-2__item::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.03), transparent 60%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }
    .ai-features-2__item:hover {
        transform: translateY(-6px) !important;
        box-shadow: 0 16px 40px rgba(116, 68, 253, 0.12) !important;
        border-color: rgba(116, 68, 253, 0.3) !important;
        border-left-color: #7444FD !important;
        background: rgba(255, 255, 255, 0.85) !important;
        backdrop-filter: blur(24px) !important;
        border-radius: 16px !important;
    }
    .ai-features-2__item:hover::after {
        opacity: 1;
    }
    .ai-features-2__item .icon {
        background: #7444FD !important;
        box-shadow: 0 4px 12px rgba(116, 68, 253, 0.25);
        transition: all 0.4s ease;
    }
    .ai-features-2__item:hover .icon {
        transform: scale(1.08);
        box-shadow: 0 6px 20px rgba(116, 68, 253, 0.35);
    }
    .ai-features-2__item .content .title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
    }
    .ai-features-2__item .content .title a {
        color: #1e293b;
        transition: color 0.3s ease;
    }
    .ai-features-2__item:hover .content .title {
        color: #7444FD !important; /* Overrides white text on hover from style.css */
    }
    .ai-features-2__item:hover .content .title a {
        color: #7444FD !important;
    }
    .ai-features-2__item .product-desc {
        font-size: 13px;
        color: #64748b;
        line-height: 1.6;
        margin-top: 6px;
        transition: color 0.3s ease;
    }
    .ai-features-2__item:hover .product-desc {
        color: #334155 !important;
    }
    .ai-features-2__item .product-arrow {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.1), rgba(116, 68, 253, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }
    .ai-features-2__item .product-arrow i {
        font-size: 12px;
        color: #7444FD;
    }
    .ai-features-2__item:hover .product-arrow {
        opacity: 1;
        transform: translateX(0);
        background: rgba(116, 68, 253, 0.1) !important;
    }
    .ai-features-2__item:hover .product-arrow i {
        color: #7444FD !important;
    }

    /* =============================================
       SECTION 6: WHY CHOOSE ARK â€” Premium Deep Green
       ============================================= */
    .choose-us__inner {
        background: var(--site-bg-soft, #F0F4FF) !important;
        position: relative;
        overflow: hidden;
    }
    .choose-us__inner::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(116, 68, 253, 0.08), transparent 70%);
        pointer-events: none;
    }
    .choose-us__content .sub-title.has--green {
        display: inline-block !important;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.12), rgba(116, 68, 253, 0.18)) !important;
        border: 1px solid rgba(116, 68, 253, 0.25) !important;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95 !important;
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }
    .choose-us__content .title {
        color: #0f172a;
    }
    .choose-us__content .desc {
        color: #475569;
        line-height: 1.8;
    }
    .choose-us__content .rr-btn-green.has--drk-gren {
        background: #7444FD !important;
        box-shadow: 0 4px 16px rgba(116, 68, 253, 0.3);
        transition: all 0.3s ease !important;
    }
    .choose-us__content .rr-btn-green.has--drk-gren:hover {
        box-shadow: 0 8px 28px rgba(116, 68, 253, 0.4) !important;
        transform: translateY(-2px);
    }
    .choose-us__item {
        background: rgba(255, 255, 255, 0.8) !important;
        backdrop-filter: blur(16px);
        border: 1px solid rgba(116, 68, 253, 0.12) !important;
        border-radius: 16px !important;
        border-left: 3px solid rgba(116, 68, 253, 0.3) !important;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        position: relative;
        overflow: hidden;
    }
    .choose-us__item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.03), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .choose-us__item:hover {
        background: rgba(255, 255, 255, 0.95) !important;
        transform: translateY(-6px) !important;
        box-shadow: 0 16px 48px rgba(116, 68, 253, 0.12) !important;
        border-left-color: #5B2EE5 !important;
        border-color: rgba(116, 68, 253, 0.25) !important;
    }
    .choose-us__item:hover::before {
        opacity: 1;
    }
    .choose-us__item .title {
        color: #1e293b;
        font-weight: 700;
    }
    .choose-us__item .title a {
        color: #1e293b;
        transition: color 0.3s ease;
    }
    .choose-us__item:hover .title a {
        color: #4C1D95;
    }
    .choose-us__item p {
        color: #475569;
        line-height: 1.7;
    }

    /* =============================================
       SECTION 7: TESTIMONIALS â€” Enhanced Styling
       ============================================= */
    .testimonial__inner {
        background: var(--site-bg-soft, #F0F4FF) !important;
    }
    .testimonial__content .sub-title.has--green {
        display: inline-block !important;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.12), rgba(116, 68, 253, 0.18));
        border: 1px solid rgba(116, 68, 253, 0.25);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
    }
    .testimonial__item {
        transition: all 0.3s ease !important;
    }
    .testimonial__item .desc {
        font-size: 17px !important;
        line-height: 1.7 !important;
        color: #334155 !important;
    }

    /* =============================================
       SECTION 8: TECHNOLOGY/SUPPORT â€” Premium Polish
       ============================================= */
    .technology {
        position: relative;
        background: var(--site-bg-subtle, #F8FAFF);
    }
    .technology::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(116, 68, 253, 0.15), transparent);
    }
    .technology__card {
        border-radius: 24px !important;
        overflow: hidden;
        position: relative;
    }
    .technology__card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: #7444FD ;
    }
    .technology__card .section-title__wrapper .sub-title {
        color: #86efac;
        font-weight: 600;
        letter-spacing: 0.8px;
    }
    .technology__card .rr-btn-green {
        background: #7444FD !important;
        box-shadow: 0 4px 16px rgba(116, 68, 253, 0.4);
        transition: all 0.3s ease !important;
    }
    .technology__card .rr-btn-green:hover {
        box-shadow: 0 8px 28px rgba(116, 68, 253, 0.5);
        transform: translateY(-2px);
    }
    .technology__wrapper {
        border-radius: 24px !important;
        overflow: hidden;
        position: relative;
    }
    .technology__wrapper::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: #7444FD ;
    }
    .technology__wrapper .title {
        color: #fff;
    }
    .technology .client-box {
        transition: all 0.3s ease;
    }
    .technology .client-box:hover {
        transform: scale(1.08);
        box-shadow: 0 8px 24px rgba(116, 68, 253, 0.2);
    }

    /* =============================================
       SECTION 9: FAQ â€” Enhanced Styling
       ============================================= */
    .faq.rr-bg-gray {
        background: var(--site-bg-soft, #F0F4FF) !important;
    }
    .faq .section-title__wrapper .sub-title {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.08), rgba(116, 68, 253, 0.12));
        border: 1px solid rgba(116, 68, 253, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
    }
    .global-accordion-item {
        transition: all 0.3s ease !important;
        border-radius: 12px !important;
        overflow: hidden;
        margin-bottom: 12px !important;
        border-left: 3px solid transparent !important;
    }
    .global-accordion-item:hover {
        transform: translateX(4px);
        border-left-color: #5B2EE5 !important;
    }

    /* =============================================
       VIDEO SHOWCASE — YouTube Shorts
       ============================================= */
    .video-showcase {
        background: var(--site-bg-subtle, #F8FAFF);
    }
    .video-showcase__surface {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        padding: clamp(36px, 5vw, 72px);
        border-radius: 32px;
        background: linear-gradient(135deg, #17102f 0%, #2b1761 52%, #4C1D95 100%);
        box-shadow: 0 28px 80px rgba(76, 29, 149, 0.2);
    }
    .video-showcase__surface::before,
    .video-showcase__surface::after {
        content: '';
        position: absolute;
        z-index: -1;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(2px);
    }
    .video-showcase__surface::before {
        width: 380px;
        height: 380px;
        top: -190px;
        right: 16%;
        background: radial-gradient(circle, rgba(166, 45, 244, 0.34), transparent 70%);
    }
    .video-showcase__surface::after {
        width: 320px;
        height: 320px;
        left: -130px;
        bottom: -180px;
        background: radial-gradient(circle, rgba(116, 68, 253, 0.38), transparent 70%);
    }
    .video-showcase__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 20px;
        padding: 8px 15px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 999px;
        color: #e9e3ff;
        background: rgba(255, 255, 255, 0.08);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }
    .video-showcase__eyebrow i {
        color: #ff5252;
    }
    .video-showcase__title {
        max-width: 520px;
        margin-bottom: 20px;
        color: #fff !important;
        font-size: clamp(36px, 4.2vw, 58px);
        line-height: 1.08;
        letter-spacing: -0.045em;
    }
    .video-showcase__description {
        max-width: 510px;
        margin-bottom: 30px;
        color: rgba(255, 255, 255, 0.74) !important;
        font-size: 16px;
        line-height: 1.75;
    }
    .video-showcase__features {
        display: grid;
        gap: 13px;
        margin: 0 0 34px;
        padding: 0;
        list-style: none;
    }
    .video-showcase__features li {
        display: flex;
        align-items: center;
        gap: 11px;
        color: rgba(255, 255, 255, 0.88);
        font-size: 14px;
        font-weight: 600;
    }
    .video-showcase__features i {
        display: inline-flex;
        width: 27px;
        height: 27px;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        background: rgba(116, 68, 253, 0.65);
        font-size: 11px;
    }
    .video-showcase__actions {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .video-showcase__demo {
        background: #7444FD !important;
        box-shadow: 0 12px 28px rgba(116, 68, 253, 0.35);
    }
    .video-showcase__demo::before {
        background: #5B2EE5 !important;
    }
    .video-showcase__channel {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: #fff !important;
        font-size: 14px;
        font-weight: 700;
    }
    .video-showcase__channel i {
        color: #ff5252;
        font-size: 20px;
    }
    .video-showcase__channel:hover {
        color: #dcd2ff !important;
    }
    .video-showcase__videos {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 22px;
    }
    .short-video-card {
        flex: 1 1 0;
        width: 100%;
        max-width: 255px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 45px rgba(10, 6, 28, 0.3);
        backdrop-filter: blur(12px);
        transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
    }
    .short-video-card:nth-child(2) {
        transform: translateY(28px);
    }
    .short-video-card:hover {
        transform: translateY(-7px);
        border-color: rgba(255, 255, 255, 0.42);
        box-shadow: 0 26px 55px rgba(10, 6, 28, 0.4);
    }
    .short-video-card:nth-child(2):hover {
        transform: translateY(20px);
    }
    .short-video-card__media,
    .short-video-card__frame {
        position: relative;
        display: block;
        width: 100%;
        aspect-ratio: 9 / 16;
        border: 0;
        background: #100a26;
    }
    .short-video-card__media {
        padding: 0;
        overflow: hidden;
        cursor: pointer;
        text-align: left;
    }
    .short-video-card__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.55s ease;
    }
    .short-video-card:hover .short-video-card__media img {
        transform: scale(1.035);
    }
    .short-video-card__media::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(12, 7, 29, 0.06) 35%, rgba(12, 7, 29, 0.82) 100%);
    }
    .short-video-card__tag {
        position: absolute;
        z-index: 2;
        top: 14px;
        left: 14px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 10px;
        border-radius: 999px;
        color: #fff;
        background: rgba(14, 14, 12, 0.72);
        font-size: 11px;
        font-weight: 700;
        backdrop-filter: blur(8px);
    }
    .short-video-card__tag i {
        color: #ff5252;
    }
    .short-video-card__play {
        position: absolute;
        z-index: 2;
        top: 50%;
        left: 50%;
        display: flex;
        width: 68px;
        height: 68px;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.55);
        border-radius: 50%;
        color: #fff;
        background: rgba(116, 68, 253, 0.88);
        box-shadow: 0 14px 30px rgba(23, 12, 57, 0.35);
        transform: translate(-50%, -50%);
        transition: transform 0.3s ease, background 0.3s ease;
    }
    .short-video-card__play i {
        margin-left: 4px;
        font-size: 19px;
    }
    .short-video-card__media:hover .short-video-card__play {
        background: #5B2EE5;
        transform: translate(-50%, -50%) scale(1.08);
    }
    .short-video-card__body {
        min-height: 104px;
        padding: 18px;
    }
    .short-video-card__number {
        display: block;
        margin-bottom: 7px;
        color: #cfc3ff;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.12em;
        text-transform: uppercase;
    }
    .short-video-card__title {
        margin: 0;
        color: #fff !important;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.45;
    }
    @media (max-width: 991px) {
        .video-showcase__content {
            margin-bottom: 44px;
        }
        .video-showcase__videos {
            justify-content: center;
        }
    }
    @media (max-width: 575px) {
        .video-showcase__surface {
            padding: 32px 20px;
            border-radius: 24px;
        }
        .video-showcase__videos {
            justify-content: flex-start;
            gap: 16px;
            margin: 0 -20px;
            padding: 6px 20px 38px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
        }
        .video-showcase__videos::-webkit-scrollbar {
            display: none;
        }
        .short-video-card {
            flex: 0 0 78vw;
            max-width: 270px;
            scroll-snap-align: center;
        }
        .short-video-card:nth-child(2),
        .short-video-card:nth-child(2):hover {
            transform: none;
        }
    }
    .global-accordion-header {
        transition: background 0.3s ease;
    }
    .global-accordion-button.style .question {
        font-weight: 600 !important;
        font-size: 16px !important;
        color: #1e293b;
    }
    .global-accordion-body.style p {
        line-height: 1.7 !important;
        color: #475569 !important;
    }

    /* =============================================
       SUPPORT & HELP — FAQ Redesign
       ============================================= */
    .faq-redesigned {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, #F0F4FF 0%, #F8FAFF 100%) !important;
    }
    .faq-redesigned::before {
        content: '';
        position: absolute;
        top: -180px;
        right: -130px;
        width: 430px;
        height: 430px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(116, 68, 253, 0.12), transparent 70%);
        pointer-events: none;
    }
    .faq-redesigned .row {
        position: relative;
        z-index: 1;
    }
    .faq-support-card {
        position: sticky;
        top: 110px;
        display: flex;
        flex-direction: column;
        isolation: isolate;
        overflow: hidden;
        height: auto;
        min-height: 640px;
        padding: clamp(30px, 3.4vw, 44px);
        border-radius: 28px;
        color: #fff;
        background: linear-gradient(145deg, #18102f 0%, #34206c 58%, #4C1D95 100%);
        box-shadow: 0 24px 65px rgba(76, 29, 149, 0.2);
    }
    .faq-support-card::before,
    .faq-support-card::after {
        content: '';
        position: absolute;
        z-index: -1;
        border-radius: 50%;
        pointer-events: none;
    }
    .faq-support-card::before {
        width: 280px;
        height: 280px;
        top: -130px;
        right: -100px;
        background: radial-gradient(circle, rgba(166, 45, 244, 0.45), transparent 70%);
    }
    .faq-support-card::after {
        width: 230px;
        height: 230px;
        left: -110px;
        bottom: -110px;
        background: radial-gradient(circle, rgba(116, 68, 253, 0.42), transparent 70%);
    }
    .faq-support-card__icon {
        display: inline-flex;
        width: 54px;
        height: 54px;
        align-items: center;
        justify-content: center;
        margin-bottom: 21px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 18px;
        color: #fff;
        background: rgba(255, 255, 255, 0.1);
        font-size: 22px;
        backdrop-filter: blur(10px);
    }
    .faq-support-card__eyebrow {
        display: block;
        margin-bottom: 13px;
        color: #d9d0ff;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 0.11em;
        text-transform: uppercase;
    }
    .faq-support-card__title {
        max-width: 410px;
        margin-bottom: 15px;
        color: #fff !important;
        font-size: clamp(30px, 3vw, 42px);
        line-height: 1.12;
        letter-spacing: -0.04em;
    }
    .faq-support-card__description {
        max-width: 430px;
        margin-bottom: 0;
        color: rgba(255, 255, 255, 0.72) !important;
        font-size: 15px;
        line-height: 1.75;
    }
    .faq-support-card__footer {
        margin-top: auto;
        padding-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.14);
    }
    .faq-support-card__footer-label {
        display: block;
        margin-bottom: 14px;
        color: rgba(255, 255, 255, 0.56);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.12em;
        text-transform: uppercase;
    }
    .faq-support-card__topics {
        display: flex;
        gap: 9px;
        flex-wrap: wrap;
        margin-bottom: 27px;
    }
    .faq-support-card__topics span {
        padding: 8px 12px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 999px;
        color: rgba(255, 255, 255, 0.86);
        background: rgba(255, 255, 255, 0.07);
        font-size: 12px;
        font-weight: 600;
    }
    .faq-support-card__actions {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }
    .faq-support-card__button {
        background: #7444FD !important;
        box-shadow: 0 12px 28px rgba(9, 5, 25, 0.28);
    }
    .faq-support-card__button::before {
        background: #5B2EE5 !important;
    }
    .faq-support-card__phone {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: #fff !important;
        font-size: 14px;
        font-weight: 700;
    }
    .faq-support-card__phone i {
        color: #cfc3ff;
    }
    .faq-panel {
        padding-left: clamp(0px, 2vw, 20px);
    }
    .faq-panel__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 13px;
        color: #5B2EE5;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }
    .faq-panel__eyebrow::before {
        content: '';
        width: 22px;
        height: 2px;
        border-radius: 2px;
        background: #7444FD;
    }
    .faq-panel__title {
        margin-bottom: 12px;
        color: #0F172A !important;
        font-size: clamp(31px, 3.2vw, 45px);
        line-height: 1.14;
        letter-spacing: -0.035em;
    }
    .faq-panel__intro {
        max-width: 610px;
        margin-bottom: 30px;
        color: #64748B !important;
        line-height: 1.7;
    }
    .faq-redesigned .accordion .global-accordion-item {
        padding: 0 !important;
        margin-bottom: 13px !important;
        border: 1px solid rgba(116, 68, 253, 0.12) !important;
        border-left: 1px solid rgba(116, 68, 253, 0.12) !important;
        border-radius: 17px !important;
        background: rgba(255, 255, 255, 0.9) !important;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.045);
        transform: none !important;
        transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease !important;
    }
    .faq-redesigned .accordion .global-accordion-item:hover {
        border-color: rgba(116, 68, 253, 0.3) !important;
        box-shadow: 0 13px 32px rgba(76, 29, 149, 0.09);
        transform: translateY(-2px) !important;
    }
    .faq-redesigned .accordion .global-accordion-item:has(.global-accordion-button:not(.collapsed)) {
        border-color: rgba(116, 68, 253, 0.42) !important;
        background: #fff !important;
        box-shadow: 0 15px 38px rgba(76, 29, 149, 0.1);
    }
    .faq-redesigned .global-accordion-button {
        gap: 16px;
        width: 100%;
        padding: 21px 22px;
        border: 0;
        color: #0F172A !important;
        background: transparent;
        text-align: left;
        cursor: pointer;
    }
    .faq-redesigned .global-accordion-button::after {
        width: 36px !important;
        min-width: 36px !important;
        height: 36px !important;
        border: 1px solid rgba(116, 68, 253, 0.2) !important;
        border-radius: 50% !important;
        color: #5B2EE5;
        background: #F4F1FF !important;
        font-family: var(--font_jakarta);
        font-size: 21px;
        font-weight: 500;
    }
    .faq-redesigned .global-accordion-button:not(.collapsed)::after {
        color: #fff;
        background: #7444FD !important;
        border-color: #7444FD !important;
    }
    .faq-redesigned .faq-question-number {
        display: inline-flex;
        width: 34px;
        min-width: 34px;
        height: 34px;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        color: #7444FD;
        background: #F1EDFF;
        font-size: 12px;
        font-weight: 800;
    }
    .faq-redesigned .global-accordion-button:not(.collapsed) .faq-question-number {
        color: #fff;
        background: #7444FD;
    }
    .faq-redesigned .global-accordion-button.style .question {
        flex: 1;
        color: #1E293B !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        line-height: 1.45;
    }
    .faq-redesigned .global-accordion-body {
        padding: 0 72px 23px 72px;
        background: transparent !important;
    }
    .faq-redesigned .global-accordion-body.style p {
        margin: 0 !important;
        color: #64748B !important;
        font-size: 14px;
        line-height: 1.75 !important;
    }
    @media (max-width: 991px) {
        .faq-support-card {
            position: relative;
            top: auto;
            min-height: 0;
            margin-bottom: 44px;
        }
        .faq-support-card__footer {
            margin-top: 34px;
        }
        .faq-panel {
            padding-left: 0;
        }
    }
    @media (max-width: 575px) {
        .faq-support-card {
            padding: 30px 22px;
            border-radius: 22px;
        }
        .faq-redesigned .global-accordion-button {
            gap: 11px;
            padding: 17px 15px;
        }
        .faq-redesigned .faq-question-number {
            width: 30px;
            min-width: 30px;
            height: 30px;
        }
        .faq-redesigned .global-accordion-button::after {
            width: 32px !important;
            min-width: 32px !important;
            height: 32px !important;
        }
        .faq-redesigned .global-accordion-body {
            padding: 0 52px 19px 56px;
        }
    }

    /* =============================================
       SECTION 6: WHY CHOOSE US â€” Enhanced Styling
       ============================================= */
    .choose-us__content .title {
        color: #0f172a;
    }
    .choose-us__content .desc {
        color: #475569;
        line-height: 1.8;
    }
    .choose-us__content .rr-btn-green.has--drk-gren {
        background: #7444FD !important;
        box-shadow: 0 4px 16px rgba(116, 68, 253, 0.3);
        transition: all 0.3s ease !important;
    }
    .choose-us__content .rr-btn-green.has--drk-gren:hover {
        box-shadow: 0 8px 28px rgba(116, 68, 253, 0.4) !important;
        transform: translateY(-2px);
    }
        border-radius: 16px !important;
        border-left: 3px solid rgba(116, 68, 253, 0.3) !important;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        position: relative;
        overflow: hidden;
    }
    .choose-us__item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.03), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .choose-us__item:hover {
        background: rgba(255, 255, 255, 0.95) !important;
        transform: translateY(-6px) !important;
        box-shadow: 0 16px 48px rgba(116, 68, 253, 0.12) !important;
        border-left-color: #5B2EE5 !important;
        border-color: rgba(116, 68, 253, 0.25) !important;
    }
    .choose-us__item:hover::before {
        opacity: 1;
    }
    .choose-us__item .title {
        color: #1e293b;
        font-weight: 700;
    }
    .choose-us__item .title a {
        color: #1e293b;
        transition: color 0.3s ease;
    }
    .choose-us__item:hover .title a {
        color: #4C1D95;
    }
    .choose-us__item p {
        color: #475569;
        line-height: 1.7;
    }

    /* =============================================
       SECTION 7: TESTIMONIALS â€” Enhanced Styling
       ============================================= */
    .testimonial__inner {
        background: var(--site-bg-soft, #F0F4FF) !important;
    }
    .testimonial__content .sub-title.has--green {
        display: inline-block !important;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.12), rgba(116, 68, 253, 0.18));
        border: 1px solid rgba(116, 68, 253, 0.25);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
    }
    .testimonial__item {
        transition: all 0.3s ease !important;
    }
    .testimonial__item .desc {
        font-size: 17px !important;
        line-height: 1.7 !important;
        color: #334155 !important;
    }

    /* =============================================
       SECTION 8: TECHNOLOGY/SUPPORT â€” Premium Polish
       ============================================= */
    .technology {
        position: relative;
        background: var(--site-bg-subtle, #F8FAFF);
    }
    .technology::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(116, 68, 253, 0.15), transparent);
    }
    .technology__card {
        border-radius: 24px !important;
        overflow: hidden;
        position: relative;
    }
    .technology__card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: #7444FD ;
    }
    .technology__card .section-title__wrapper .sub-title {
        color: #86efac;
        font-weight: 600;
        letter-spacing: 0.8px;
    }
    .technology__card .rr-btn-green {
        background: #7444FD !important;
        box-shadow: 0 4px 16px rgba(116, 68, 253, 0.4);
        transition: all 0.3s ease !important;
    }
    .technology__card .rr-btn-green:hover {
        box-shadow: 0 8px 28px rgba(116, 68, 253, 0.5);
        transform: translateY(-2px);
    }
    .technology__wrapper {
        border-radius: 24px !important;
        overflow: hidden;
        position: relative;
    }
    .technology__wrapper::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: #7444FD ;
    }
    .technology__wrapper .title {
        color: #fff;
    }
    .technology .client-box {
        transition: all 0.3s ease;
    }
    .technology .client-box:hover {
        transform: scale(1.08);
        box-shadow: 0 8px 24px rgba(116, 68, 253, 0.2);
    }

    /* =============================================
       SECTION 9: FAQ â€” Enhanced Styling
       ============================================= */
    .faq.rr-bg-gray {
        background: var(--site-bg-soft, #F0F4FF) !important;
    }
    .faq .section-title__wrapper .sub-title {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(116, 68, 253, 0.08), rgba(116, 68, 253, 0.12));
        border: 1px solid rgba(116, 68, 253, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #4C1D95;
        letter-spacing: 0.8px;
    }
    .global-accordion-item {
        transition: all 0.3s ease !important;
        border-radius: 12px !important;
        overflow: hidden;
        margin-bottom: 12px !important;
        border-left: 3px solid transparent !important;
    }
    .global-accordion-item:hover {
        transform: translateX(4px);
        border-left-color: #5B2EE5 !important;
    }
    .global-accordion-header {
        transition: background 0.3s ease;
    }
    .global-accordion-button.style .question {
        font-weight: 600 !important;
        font-size: 16px !important;
        color: #1e293b;
    }
    .global-accordion-body.style p {
        line-height: 1.7 !important;
        color: #475569 !important;
    }

    /* =============================================
       HERO REDESIGN â€” Premium Healthcare Hero
       ============================================= */

    .hero-redesigned .hero__inner {
        padding-top: 180px;
        padding-bottom: 100px;
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    /* Light Gradient Overlay â€” keeps text readable over background */
    .hero-light-overlay {
        position: absolute;
        inset: 0;
        z-index: 2;
        background: 
            linear-gradient(90deg, 
                rgba(240, 244, 255, 0.95) 0%, 
                rgba(240, 244, 255, 0.85) 25%, 
                rgba(240, 244, 255, 0.6) 50%, 
                rgba(240, 244, 255, 0.2) 75%, 
                transparent 100%
            ),
            linear-gradient(180deg, 
                rgba(240, 244, 255, 0.7) 0%, 
                rgba(255, 255, 255, 0.2) 30%, 
                rgba(255, 255, 255, 0.15) 70%, 
                rgba(240, 244, 255, 0.6) 100%
            );
        pointer-events: none;
    }

    /* Animated Grid Overlay */
    .hero-grid-overlay {
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px);
        background-size: 60px 60px;
        animation: gridShift 20s linear infinite;
        z-index: 0;
    }
    @keyframes gridShift {
        0% { transform: translate(0, 0); }
        100% { transform: translate(60px, 60px); }
    }

    /* Floating Particles */
    .hero-particle {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: 1;
    }
    .hero-particle--1 {
        width: 6px; height: 6px;
        background: #7444FD;
        top: 20%; left: 10%;
        animation: particleFloat 6s ease-in-out infinite;
        box-shadow: 0 0 12px #7444FD;
    }
    .hero-particle--2 {
        width: 4px; height: 4px;
        background: #7444FD;
        top: 60%; left: 5%;
        animation: particleFloat 8s ease-in-out infinite 1s;
        box-shadow: 0 0 10px #7444FD;
    }
    .hero-particle--3 {
        width: 5px; height: 5px;
        background: #7444FD;
        top: 30%; right: 15%;
        animation: particleFloat 7s ease-in-out infinite 2s;
        box-shadow: 0 0 10px #7444FD;
    }
    .hero-particle--4 {
        width: 3px; height: 3px;
        background: #67e8f9;
        top: 75%; right: 25%;
        animation: particleFloat 9s ease-in-out infinite 0.5s;
        box-shadow: 0 0 8px #67e8f9;
    }
    .hero-particle--5 {
        width: 5px; height: 5px;
        background: #06b6d4;
        bottom: 15%; left: 40%;
        animation: particleFloat 7s ease-in-out infinite 3s;
        box-shadow: 0 0 10px #06b6d4;
    }
    @keyframes particleFloat {
        0%, 100% { transform: translateY(0) translateX(0); opacity: 0.4; }
        25% { transform: translateY(-30px) translateX(15px); opacity: 1; }
        50% { transform: translateY(-10px) translateX(-10px); opacity: 0.6; }
        75% { transform: translateY(-40px) translateX(5px); opacity: 0.9; }
    }

    /* --- Hero Content (Left Side) --- */
    .hero-redesigned .hero__content {
        margin-right: 0;
        position: relative;
        z-index: 5;
    }

    /* Badge */
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 20px;
        border-radius: 100px;
        background: rgba(116, 68, 253, 0.12);
        border: 1px solid rgba(116, 68, 253, 0.28);
        backdrop-filter: blur(10px);
        margin-bottom: 28px;
    }
    .hero-badge__dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #7444FD;
        animation: dotPulse 2s ease-in-out infinite;
    }
    @keyframes dotPulse {
        0%, 100% { opacity: 1; box-shadow: 0 0 0 0 rgba(116, 68, 253, 0.4); }
        50% { opacity: 0.7; box-shadow: 0 0 0 6px rgba(116, 68, 253, 0); }
    }
    .hero-badge__text {
        font-size: 14px;
        font-weight: 700;
        color: #5B2EE5 !important;
        letter-spacing: 0.3px;
    }

    /* Title */
    .hero-title {
        font-size: 58px;
        font-weight: 800;
        line-height: 1.15;
        color: #0f172a !important;
        margin-bottom: 24px;
        letter-spacing: -0.5px;
    }
    .hero-title__gradient {
        background: #7444FD ;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline;
    }
    .hero-title__gradient div,
    .hero-title__gradient span {
        background: #7444FD !important;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
        background-clip: text !important;
    }

    @media (max-width: 1399px) {
        .hero-title { font-size: 48px; }
    }
    @media (max-width: 991px) {
        .hero-title { font-size: 42px; }
    }
    @media (max-width: 575px) {
        .hero-redesigned .hero__inner {
            min-height: auto;
            padding-top: 140px;
            padding-bottom: 60px;
        }
        .hero-redesigned .container,
        .hero-redesigned .row,
        .hero-redesigned .row > * {
            width: 100%;
            min-width: 0;
            max-width: 100%;
        }
        .hero-redesigned .row {
            margin-right: 0;
            margin-left: 0;
        }
        .hero-redesigned .row > * {
            padding-right: 0;
            padding-left: 0;
        }
        .hero-redesigned .hero__content {
            width: 100%;
            min-width: 0;
        }
        .hero-title {
            max-width: 100%;
            font-size: clamp(27px, 8.25vw, 32px);
            line-height: 1.2;
            overflow-wrap: normal;
        }
        .hero-badge {
            display: flex;
            width: 100%;
            max-width: 100%;
            padding: 8px 12px;
        }
        .hero-badge__text {
            min-width: 0;
            font-size: 12px;
            line-height: 1.35;
            white-space: normal;
        }
    }

    /* Description */
    .hero-desc {
        font-size: 17px;
        font-weight: 500;
        line-height: 1.7;
        color: #334155 !important;
        margin-bottom: 36px;
        max-width: 560px;
    }

    /* Inline Stats */
    .hero-stats {
        display: flex;
        align-items: center;
        gap: 32px;
        margin-bottom: 40px;
        padding: 20px 28px;
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        backdrop-filter: blur(12px);
        max-width: fit-content;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }
    .hero-stats__item {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    .hero-stats__number {
        font-size: 28px;
        font-weight: 800;
        color: #5B2EE5 !important;
        line-height: 1;
    }
    .hero-stats__label {
        font-size: 13px;
        color: #64748b !important;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .hero-stats__divider {
        width: 1px;
        height: 40px;
        background: rgba(0, 0, 0, 0.08);
    }
    @media (max-width: 575px) {
        .hero-stats {
            justify-content: space-between;
            gap: 10px;
            width: 100%;
            max-width: 100%;
            padding: 16px 12px;
            flex-wrap: nowrap;
        }
        .hero-stats__item { min-width: 0; }
        .hero-stats__number { font-size: 22px; }
        .hero-stats__label { font-size: 11px; letter-spacing: 0; }
    }

    /* Buttons */
    .hero-redesigned .hero__content-wrap {
        margin-top: 0;
        display: flex;
        align-items: center;
        gap: 24px;
        flex-wrap: wrap;
        margin-bottom: 36px;
    }
    .hero-btn-primary {
        display: inline-flex !important;
        align-items: center;
        gap: 10px;
    }
    .hero-btn-icon {
        font-size: 14px;
        transition: transform 0.3s ease;
    }
    .hero-btn-primary:hover .hero-btn-icon {
        transform: translateX(4px);
    }

    .hero-btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        color: #0f172a !important;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        transition: all 0.3s ease;
        padding: 10px 0;
    }
    .hero-btn-secondary:hover {
        color: #5B2EE5 !important;
    }
    .hero-btn-secondary__icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        font-size: 12px;
        color: #5B2EE5 !important;
        position: relative;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .hero-btn-secondary__icon::before {
        content: '';
        position: absolute;
        inset: -4px;
        border-radius: 50%;
        border: 2px solid transparent;
        border-top-color: #7444FD;
        animation: iconSpin 3s linear infinite;
    }
    @keyframes iconSpin {
        to { transform: rotate(360deg); }
    }
    .hero-btn-secondary:hover .hero-btn-secondary__icon {
        background: rgba(116, 68, 253, 0.1);
        border-color: rgba(116, 68, 253, 0.2);
    }

    /* Trust Section */
    .hero-trust {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .hero-trust__avatars {
        display: flex;
        align-items: center;
    }
    .hero-trust__avatars img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 2px solid #fff;
        margin-left: -10px;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .hero-trust__avatars img:first-child {
        margin-left: 0;
    }
    .hero-trust__more {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #f0fdfa;
        border: 2px solid #ccfbf1;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -10px;
        font-size: 14px;
        font-weight: 700;
        color: #5B2EE5 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .hero-trust__text {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    .hero-trust__stars {
        display: flex;
        gap: 2px;
    }
    .hero-trust__stars i {
        color: #eab308 !important;
        font-size: 12px;
    }
    .hero-trust__text span {
        font-size: 13px;
        color: #475569 !important;
    }
    .hero-trust__text strong {
        color: #0f172a !important;
    }
    @media (max-width: 575px) {
        .hero-trust { flex-direction: column; align-items: flex-start; gap: 8px; }
    }

    /* --- Phone Mockup (Right Side) --- */
    .hero-phone {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 3;
    }
    @media (max-width: 991px) {
        .hero-phone {
            margin-top: 60px;
        }
    }

    .hero-phone__img {
        max-width: 340px;
        width: 100%;
        height: auto;
        position: relative;
        z-index: 3;
        filter: drop-shadow(0 30px 60px rgba(0,0,0,0.4));
        animation: phoneFloat 5s ease-in-out infinite;
    }
    @keyframes phoneFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    /* Glow effects */
    .hero-phone__glow {
        position: absolute;
        width: 320px;
        height: 320px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 212, 255, 0.25), transparent 70%);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        animation: glowPulse 4s ease-in-out infinite;
    }
    .hero-phone__glow--secondary {
        width: 420px;
        height: 420px;
        background: radial-gradient(circle, rgba(124, 58, 237, 0.12), transparent 70%);
        animation: glowPulse 6s ease-in-out infinite 1s;
    }
    @keyframes glowPulse {
        0%, 100% { opacity: 0.6; transform: translate(-50%, -50%) scale(1); }
        50% { opacity: 1; transform: translate(-50%, -50%) scale(1.1); }
    }

    /* Floating Cards around phone */
    .hero-float-card {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 18px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 1);
        border-radius: 14px;
        z-index: 5;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
        animation: cardFloat 5s ease-in-out infinite;
        min-width: 190px;
    }
    .hero-float-card__icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .hero-float-card__icon i {
        color: #fff;
        font-size: 16px;
    }
    .hero-float-card__info {
        display: flex;
        flex-direction: column;
    }
    .hero-float-card__value {
        font-size: 18px;
        font-weight: 800;
        color: #0f172a !important;
        line-height: 1.2;
    }
    .hero-float-card__label {
        font-size: 11px;
        color: #64748b !important;
        font-weight: 600;
        white-space: nowrap;
    }

    /* Card positions */
    .hero-float-card--1 {
        top: 8%;
        left: -30px;
        animation-delay: 0s;
    }
    .hero-float-card--2 {
        bottom: 30%;
        right: -40px;
        animation-delay: 1.5s;
    }
    .hero-float-card--3 {
        bottom: 5%;
        left: -20px;
        animation-delay: 3s;
    }

    @keyframes cardFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    @media (max-width: 1399px) {
        .hero-float-card--1 { left: -10px; }
        .hero-float-card--2 { right: -10px; }
        .hero-float-card--3 { left: 0; }
    }
    @media (max-width: 991px) {
        .hero-float-card { display: none; }
        .hero-phone__img { max-width: 280px; }
    }
    @media (max-width: 575px) {
        .hero-phone__img { max-width: 240px; }
        .hero-phone__glow { width: 220px; height: 220px; }
        .hero-phone__glow--secondary { width: 300px; height: 300px; }
    }


    /* Hero-specific CTA Button Override */
    body .hero-redesigned a.rr-btn-green.hero-btn-primary {
        background: #7444FD !important;
        box-shadow: 0 8px 24px rgba(116, 68, 253, 0.32) !important;
        border: none !important;
    }
    body .hero-redesigned a.rr-btn-green.hero-btn-primary::before {
        background: #5B2EE5 !important;
    }
    body .hero-redesigned a.rr-btn-green.hero-btn-primary * {
        color: #fff !important;
    }
    body .hero-redesigned a.rr-btn-green.hero-btn-primary:hover {
        box-shadow: 0 12px 32px rgba(116, 68, 253, 0.42) !important;
        transform: translateY(-2px);
    }

    /* --- Navbar Overrides for Light Hero --- */
    .header__logo img {
        filter: brightness(0) !important;
    }
    .header-area-1 .main-menu > ul > li > a {
        color: #0f172a !important;
        font-weight: 600;
    }
    .header-area-1 .main-menu > ul > li:hover > a {
        color: #5B2EE5 !important;
        text-shadow: none !important;
    }
    .header-area-1 .header-right .side-toggle .bar-icon span {
        background-color: #0f172a !important;
    }
    .header-area-1 .main-menu > ul > li > a::after {
        background: #5B2EE5 !important;
    }
</style>


<section class="hero hero-redesigned">
    <div class="hero__inner" style="background-color: #f0f4ff;" data-background="{{ asset('assets/imgs/home-1/hero/bg-light.jpg') }}">
        <!-- Animated background grid -->
        <div class="hero-grid-overlay"></div>
        <!-- Light overlay for text readability -->
        <div class="hero-light-overlay"></div>
        <!-- Floating particles -->
        <div class="hero-particle hero-particle--1"></div>
        <div class="hero-particle hero-particle--2"></div>
        <div class="hero-particle hero-particle--3"></div>
        <div class="hero-particle hero-particle--4"></div>
        <div class="hero-particle hero-particle--5"></div>

        <div class="container rr-container-1350">
            <div class="row align-items-center">

                <!-- Left: Text Content -->
                <div class="col-xl-7 col-lg-7">
                    <div class="hero__content" data-aos="fade-right" data-aos-duration="900">

                        <div class="hero-badge" data-aos="fade-down" data-aos-delay="200">
                            <span class="hero-badge__dot"></span>
                            <span class="hero-badge__text"><i class="fa-solid fa-rocket" style="margin-right: 6px;"></i> #1 Healthcare Technology Platform in India</span>
                        </div>

                        <h1 class="hero-title rr-title-anim-2">
                            Transform Your Hospital with
                            <span class="hero-title__gradient">ARK Hospital Management</span>
                            Software
                        </h1>

                        <p class="hero-desc">
                            Avark Healthcare Technology empowers hospitals, clinics, and healthcare organizations to operate smarter, faster, and more efficiently with cutting-edge digital solutions.
                        </p>

                        <!-- Inline Stats -->
                        <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                            <div class="hero-stats__item">
                                <span class="hero-stats__number" data-count="100">100+</span>
                                <span class="hero-stats__label">Hospitals</span>
                            </div>
                            <div class="hero-stats__divider"></div>
                            <div class="hero-stats__item">
                                <span class="hero-stats__number" data-count="1000">1K</span>
                                <span class="hero-stats__label">Active Users</span>
                            </div>
                            <div class="hero-stats__divider"></div>
                            <div class="hero-stats__item">
                                <span class="hero-stats__number">99.9%</span>
                                <span class="hero-stats__label">Uptime</span>
                            </div>
                        </div>

                        <div class="hero__content-wrap" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{ route('contact-us') }}" class="rr-btn-green hero-btn-primary">
                                <span class="btn-wrap">
                                    <span class="text-one">Book a Free Demo</span>
                                    <span class="text-two">Book a Free Demo</span>
                                </span>
                                <i class="fa-solid fa-arrow-right hero-btn-icon"></i>
                            </a>

                            <a href="{{ route('products') }}" class="hero-btn-secondary">
                                <span class="hero-btn-secondary__icon">
                                    <i class="fa-solid fa-play"></i>
                                </span>
                                <span>Explore Products</span>
                            </a>
                        </div>

                        <!-- Trust Avatars -->
                        <div class="hero-trust" data-aos="fade-up" data-aos-delay="600">
                            <div class="hero-trust__avatars">
                                <img loading="eager" decoding="async" src="{{ asset('assets/imgs/home-1/hero/author-1.png') }}" alt="User">
                                <img loading="eager" decoding="async" src="{{ asset('assets/imgs/home-1/hero/author-2.png') }}" alt="User">
                                <img loading="eager" decoding="async" src="{{ asset('assets/imgs/home-1/hero/author-3.png') }}" alt="User">
                                <span class="hero-trust__more">+</span>
                            </div>
                            <div class="hero-trust__text">
                                <div class="hero-trust__stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                                <span>Trusted by <strong>1K</strong> active users</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right: Phone Mockup -->
                <div class="col-xl-5 col-lg-5">
                    <div class="hero-phone" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <!-- Glow effect behind phone -->
                        <div class="hero-phone__glow"></div>
                        <div class="hero-phone__glow hero-phone__glow--secondary"></div>

                        <!-- Main phone image -->
                        <img loading="eager" decoding="async" fetchpriority="high" class="hero-phone__img" src="{{ asset('assets/imgs/home-1/hero/kp-mobile.png') }}" alt="ARK HMS Dashboard">

                        <!-- Floating stat cards -->
                        <div class="hero-float-card hero-float-card--1" data-aos="fade-left" data-aos-delay="800">
                            <div class="hero-float-card__icon" style="background: #7444FD ;">
                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <div class="hero-float-card__info">
                                <span class="hero-float-card__value">100+</span>
                                <span class="hero-float-card__label">Hospitals Connected</span>
                            </div>
                        </div>

                        <div class="hero-float-card hero-float-card--2" data-aos="fade-right" data-aos-delay="1000">
                            <div class="hero-float-card__icon" style="background: #7444FD ;">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="hero-float-card__info">
                                <span class="hero-float-card__value">1K</span>
                                <span class="hero-float-card__label">Active Users</span>
                            </div>
                        </div>

                        <div class="hero-float-card hero-float-card--3" data-aos="fade-left" data-aos-delay="1200">
                            <div class="hero-float-card__icon" style="background: #7444FD ;">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="hero-float-card__info">
                                <span class="hero-float-card__value">99.9%</span>
                                <span class="hero-float-card__label">Secure & Reliable</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="service rr-bg-gray section-spacing rr-ov-hidden">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper text-center" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sub-title">Our Technology Services</h2>
            <h2 class="title rr-title-anim-1">One Platform, Complete Business Solutions</h2>
        </div>
        <div class="swiper service-slide__active" data-aos="fade-up" data-aos-duration="900">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/erp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('erp-system') }}">ERP System Development</a></h3>
                        <p class="desc">Streamline operations, manage resources efficiently, and gain real-time business insights with our scalable ERP solutions.</p>
                        <a href="{{ route('erp-system') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/crm-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('crm-solutions') }}">CRM Solutions</a></h3>
                        <p class="desc">Improve customer relationships, automate sales processes, and boost engagement with intelligent CRM systems.</p>
                        <a href="{{ route('crm-solutions') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/CustomSoftwareDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('custom-software-development') }}">Custom Software Development</a></h3>
                        <p class="desc">Tailor-made software solutions designed specifically to match your business workflows and operational requirements.</p>
                        <a href="{{ route('custom-software-development') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/WebApplicationDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('web-application-development') }}">Web Application Development</a></h3>
                        <p class="desc">Secure, responsive, and high-performance web platforms built using modern technologies for scalable growth.</p>
                        <a href="{{ route('web-application-development') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/mobile-development.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('mobile-app-development') }}">Mobile App Development</a></h3>
                        <p class="desc">User-friendly Android & iOS applications that enhance customer experience and expand your digital reach.</p>
                        <a href="{{ route('mobile-app-development') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/cloud-computing-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a></h3>
                        <p class="desc">Smooth and secure migration of legacy systems and business data to modern cloud-based infrastructure.</p>
                        <a href="{{ route('cloud-and-data-migration') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/service/digital-transformation-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services</a></h3>
                        <p class="desc">Seamlessly integrate ERP, CRM, third-party tools, and APIs into one unified digital ecosystem.</p>
                        <a href="{{ route('enterprise-integration-services') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="service__arrow">
            <button class="service__arrow-prev"> <i class="fa-solid fa-angle-left"></i></button>
            <div class="service-pagination"></div>
            <button class="service__arrow-next"><i class="fa-solid fa-angle-right"></i></button>

        </div>
    </div>
</section>

<section class="brand-1 section-spacing-top-100">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper">
            <h2 class="title rr-title-anim-1">Our Partners</h2>
        </div>
        <div class="swiper brand-1__active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/makd.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/bigrock.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/amazonwebservices.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/oracle.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/emegh-logo.png" alt="eMEGH Partner">
                    </div>
                </div>
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" decoding="async" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section>

<section class="features-1 section-spacing-top-120 rr-ov-hidden">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-xl-8">
                <div class="features-1">
                    <div class="features-1__content" data-aos="fade-right" data-aos-duration="900">
                        <div class="section-title__wrapper">
                            <h2 class="sub-title">About Us — Who We Are</h2>
                            <h2 class="title rr-title-anim-1">Transforming Healthcare Through Technology Since 2019</h2>
                            <p class="desc">Avark Healthcare Technology Pvt. Ltd. is a healthcare-focused technology company committed to helping hospitals, clinics, and healthcare organizations operate smarter, faster, and more efficiently. Our integrated digital platform empowers healthcare providers to replace fragmented processes with a centralized, intelligent, and data-driven system.</p>

                            <a href="{{ route('products') }}" class="rr-btn-green">
                                <span class="btn-wrap">
                                    <span class="text-one">Discover More</span>
                                    <span class="text-two">Discover More</span>
                                </span>
                            </a>
                        </div>
                        <div class="features-1__shape-1 shape-animaiton1" data-aos="fade-down-left" data-aos-duration="900" style="position: absolute; right: 20px; bottom: 100px; z-index: 2;">
                            <div style="width: 320px; height: 320px; border-radius: 50%; overflow: hidden; box-shadow: 0 25px 50px rgba(116, 68, 253, 0.15); border: 10px solid #ffffff; background: #ffffff;">
                                <img loading="lazy" decoding="async" src="assets/imgs/home-1/features/healthcare_tech.png" alt="Digital Healthcare Technology" style="width: 100%; height: 100%; object-fit: cover; object-position: center; transform: scale(1.1);">
                            </div>
                        </div>
                        <div class="features-1__shape-2 rotate"><img loading="lazy" decoding="async" src="assets/imgs/home-1/features/line-shape.png"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="features-1__wrapper">
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="500">
                        <span><img loading="lazy" decoding="async" src="assets/imgs/home-1/features/icon-1.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Healthcare-Focused Solution</h2>
                            <p>Designed exclusively for hospitals, clinics, and healthcare organizations with workflows that match real-world hospital operations.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="700">
                        <span><img loading="lazy" decoding="async" src="assets/imgs/home-1/features/icon-2.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Centralized Patient Records</h2>
                            <p>Doctors and staff can access patient information quickly and securely from anywhere.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="900">
                        <span><img loading="lazy" decoding="async" src="assets/imgs/home-1/features/icon-3.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Integration Across Departments</h2>
                            <p>Pharmacy, laboratory, radiology, HR, inventory, wards, and billing operate on a unified platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ai-features-2 section-spacing fade-wrapper">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper text-center" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sub-title"> Our Products </h2>
            <h2 class="title rr-title-anim-1"> Intelligent Products Built for Business Growth </h2>
        </div>
        <div class="ai-features-2__wrapper fade-top">
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('hms')}}'">
                <div class="icon">
                    <img loading="lazy" decoding="async" src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('hms')}}">Advance Hospital Management System</a></h3>
                    <p class="product-desc">End-to-end OPD, IPD, billing, pharmacy & lab management</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('inventory-stock-management')}}'">
                <div class="icon">
                    <img loading="lazy" decoding="async" src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('inventory-stock-management')}}">Inventory or Stock Management System</a></h3>
                    <p class="product-desc">Real-time stock tracking, purchase orders & alerts</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('pathology-diagnostic-management')}}'">
                <div class="icon">
                    <img loading="lazy" decoding="async" src="assets/imgs/icon/ai-features-icon-3.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a></h3>
                    <p class="product-desc">Automated lab workflows, test tracking & report generation</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('white-label-practice-management')}}'">
                <div class="icon">
                    <img loading="lazy" decoding="async" src="assets/imgs/icon/ai-features-icon-4.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a></h3>
                    <p class="product-desc">Branded clinic apps with appointments & records</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('dialysis-management')}}'">
                <div class="icon">
                    <img loading="lazy" decoding="async" src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('dialysis-management')}}">Dialysis Management System</a></h3>
                    <p class="product-desc">Specialized dialysis scheduling & patient tracking</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>


            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('enterprise-support-management')}}'">
                <div class="icon">
                    <img loading="lazy" decoding="async" src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('enterprise-support-management')}}">Enterprise Support Management System</a></h3>
                    <p class="product-desc">Ticketing, SLA management & support automation</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </div>
    </div>
</section>
<section class="choose-us">
    <div class="choose-us__inner section-spacing">
        <div class="container rr-container-1350">
            <div class="row">
                <div class="col-xl-6">
                    <div class="choose-us__content">
                        <div class="section-title__wrapper">
                            <h2 class="sub-title has--green" data-aos="fade-up" data-aos-duration="500">Why Choose ARK?
                            </h2>
                            <h3 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Future-Ready Hospital Technology</h3>
                            <p class="desc" data-aos="fade-up" data-aos-duration="900">ARK HIMS combines intelligent automation, real-time analytics, cloud technology, mobility, and seamless integrations to help healthcare organizations stay ahead in an evolving digital healthcare landscape. Designed to scale with your growth, ARK HIMS empowers hospitals to deliver better patient outcomes, optimize operations, and embrace the future of connected healthcare.</p>

                            <a href="{{ route('contact-us') }}" class="rr-btn-green has--drk-gren" data-aos="fade-up"
                                data-aos-duration="900">
                                <span class="btn-wrap">
                                    <span class="text-one">Book a Demo</span>
                                    <span class="text-two">Book a Demo</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-us__media" data-aos="fade-up" data-aos-duration="900">
                        <img loading="lazy" decoding="async" class="image-1" src="assets/imgs/home-3/about/about2.png" alt="Hospital Analytics" style="width: 484px; height: 303px; object-fit: cover; object-position: left; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                        <img loading="lazy" decoding="async" class="image-2" src="assets/imgs/home-3/about/about-apointment.jpeg" alt="Hospital Automation" style="width: 424px; height: 307px; object-fit: cover; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                        <!-- <img loading="lazy" decoding="async" class="image-3" src="assets/imgs/home-1/choose-us/choose-3.png" alt="image"> -->
                        <img loading="lazy" decoding="async" class="image-4" src="assets/imgs/home-1/choose-us/icon-1.png" alt="image">
                        <img loading="lazy" decoding="async" class="image-5" src="assets/imgs/home-1/choose-us/icon-2.png" alt="image">

                        <div class="rotation-container">
                            <div class="ring ring1"></div>
                            <div class="ring ring2"></div>
                            <div class="ring ring3"></div>
                            <div class="dot"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="choose-us__wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-right" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/choose-us/icon-3.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Faster Patient Care</a></h2>
                            <p>Reduce waiting times and improve patient satisfaction through streamlined workflows.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-up" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/choose-us/icon-4.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Built for Quality & Compliance</a></h2>
                            <p>Support accreditation and quality initiatives with NABH-Ready workflows, ABHA integration, clinical documentation, and compliance monitoring.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-left" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" decoding="async" src="assets/imgs/home-1/choose-us/icon-5.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Multi-Location Support</a></h2>
                            <p>Manage multiple hospitals, clinics, or branches from a single platform with centralized reporting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="testimonial">
    <div class="testimonial__inner section-spacing rr-pos-rel">
        <div class="shape-1"><img loading="lazy" decoding="async" src="assets/imgs/home-1/testimonial/shape.png" alt="image"></div>
        <div class="container rr-container-1350">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__content" data-aos="fade-right" data-aos-duration="900">
                        <div class="section-title__wrapper ">
                            <h2 class="sub-title has--green">Testimonials</h2>
                            <h2 class="title rr-title-anim-1">What Our Clients Say</h2>
                        </div>

                        <div class="testimonial__author">
                            <ul>
                                @foreach($testimonials->take(3) as $testimonial)
                                    <li>
                                        @if($testimonial->avatar)
                                            <img loading="lazy" decoding="async" src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}">
                                        @else
                                            <span>{{ Str::upper(Str::substr($testimonial->client_name, 0, 1)) }}</span>
                                        @endif
                                    </li>
                                @endforeach
                                <li><i class="fa-solid fa-plus"></i></li>
                            </ul>

                            <h3 class="active">10,000+ Active
                                users world-wide</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900">

                    <div class=" testimonial-slide__active" id="slideContainer">
                        <div class="arrow__wrapper">

                            <button class="arrow-btn prev" onclick="changeSlide(-1)">
                                <i class="fa-solid fa-angle-up"></i>
                            </button>

                            <button class="arrow-btn next" onclick="changeSlide(1)">
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                        </div>
                        @forelse($testimonials as $testimonial)
                            <div class="testimonial__item{{ $loop->iteration > 1 ? ' item-' . $loop->iteration : '' }}" data-index="{{ $loop->index }}">
                                <div class="testimonial__stars">
                                    @for($star = 1; $star <= 5; $star++)
                                        <i class="fa-{{ $star <= $testimonial->rating ? 'solid' : 'regular' }} fa-star"></i>
                                    @endfor
                                </div>
                                <p class="desc">&ldquo;{{ strip_tags($testimonial->content) }}&rdquo;</p>
                                <div class="testimonial__info">
                                    <div class="testimonial__info__media">
                                        @if($testimonial->avatar)
                                            <img loading="lazy" decoding="async" src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}">
                                        @else
                                            <span>{{ Str::upper(Str::substr($testimonial->client_name, 0, 1)) }}</span>
                                        @endif
                                    </div>
                                    <div class="testimonial__info__content">
                                        <h2 class="title">{{ $testimonial->client_name }}</h2>
                                        <span class="sub-title">{{ collect([$testimonial->client_position, $testimonial->client_company])->filter()->implode(', ') }}</span>
                                    </div>
                                </div>
                                <div class="shape"><img loading="lazy" decoding="async" src="{{ asset('assets/imgs/home-1/testimonial/quite.png') }}" alt="image"></div>
                            </div>
                        @empty
                            <div class="testimonial__item" data-index="0">
                                <p class="desc">No testimonials available yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if($arkHimsShorts->isNotEmpty())
<section class="video-showcase section-spacing" aria-labelledby="video-showcase-title">
    <div class="container rr-container-1350">
        <div class="video-showcase__surface">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="video-showcase__content" data-aos="fade-right" data-aos-duration="800">
                        <span class="video-showcase__eyebrow">
                            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                            Videos / Shorts
                        </span>
                        <h2 id="video-showcase-title" class="video-showcase__title">Healthcare Operations Powered Every Day</h2>
                        <p class="video-showcase__description">
                            See how ARK HIMS turns complex hospital workflows into connected, efficient digital experiences for healthcare teams and patients.
                        </p>
                        <ul class="video-showcase__features" aria-label="ARK HIMS benefits">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Faster, connected hospital workflows</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Real-time operational visibility</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Secure and scalable healthcare technology</li>
                        </ul>
                        <div class="video-showcase__actions">
                            <a href="{{ route('contact-us') }}" class="rr-btn-green video-showcase__demo">
                                <span class="btn-wrap">
                                    <span class="text-one">Book a Demo</span>
                                    <span class="text-two">Book a Demo</span>
                                </span>
                            </a>
                            <a class="video-showcase__channel" href="https://www.youtube.com/@Avarkhospitalmanagementsystem" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                                Visit our channel
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="video-showcase__videos" data-aos="fade-left" data-aos-duration="900">
                        @foreach($arkHimsShorts as $short)
                        <article class="short-video-card">
                            <button
                                class="short-video-card__media js-youtube-short"
                                type="button"
                                data-youtube-id="{{ $short->youtube_id }}"
                                data-video-title="{{ $short->title }}"
                                aria-label="Play {{ $short->title }}">
                                <img loading="lazy" decoding="async"
                                    src="{{ $short->thumbnail_url }}"
                                    alt="{{ $short->title }} video thumbnail">
                                <span class="short-video-card__tag"><i class="fa-brands fa-youtube" aria-hidden="true"></i> YouTube Short</span>
                                <span class="short-video-card__play" aria-hidden="true"><i class="fa-solid fa-play"></i></span>
                            </button>
                            <div class="short-video-card__body">
                                <span class="short-video-card__number">Short {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <h3 class="short-video-card__title">{{ $short->title }}</h3>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="faq faq-redesigned rr-bg-gray section-spacing">
    <div class="container rr-container-1350">
        <div class="row align-items-start g-5">
            <div class="col-lg-5">
                <aside class="faq-support-card" data-aos="fade-right" data-aos-duration="700">
                    <span class="faq-support-card__icon" aria-hidden="true">
                        <i class="fa-solid fa-headset"></i>
                    </span>
                    <span class="faq-support-card__eyebrow">Support &amp; Help</span>
                    <h2 class="faq-support-card__title">Need clarity? Our team is ready to help.</h2>
                    <p class="faq-support-card__description">
                        Get practical guidance on ARK HIMS features, implementation, integrations, pricing, and the right setup for your healthcare organization.
                    </p>
                    <div class="faq-support-card__footer">
                        <span class="faq-support-card__footer-label">How we can help</span>
                        <div class="faq-support-card__topics" aria-label="Support topics">
                            <span>Product guidance</span>
                            <span>Implementation</span>
                            <span>Demo planning</span>
                        </div>
                        <div class="faq-support-card__actions">
                            <a href="{{ route('contact-us') }}" class="rr-btn-green faq-support-card__button">
                                <span class="btn-wrap">
                                    <span class="text-one">Talk to Our Team</span>
                                    <span class="text-two">Talk to Our Team</span>
                                </span>
                            </a>
                            <a class="faq-support-card__phone" href="tel:+917400920717">
                                <i class="fa-regular fa-phone" aria-hidden="true"></i>
                                +91 74009 20717
                            </a>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-7">
                <div class="faq-panel" data-aos="fade-left" data-aos-duration="700">
                    <span class="faq-panel__eyebrow">Frequently Asked Questions</span>
                    <h2 class="faq-panel__title rr-title-anim-1">Answers for confident decisions</h2>
                    <p class="faq-panel__intro">Explore the questions healthcare teams commonly ask before choosing, implementing, and scaling Avark solutions.</p>

                    <div class="accordion" id="homeFaqAccordion">
                        <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="450">
                            <div class="global-accordion-header">
                                <button class="global-accordion-button style" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#homeFaqOne" aria-expanded="true" aria-controls="homeFaqOne">
                                    <span class="faq-question-number">01</span>
                                    <span class="question">What is Avark and what solutions does it offer?</span>
                                </button>
                            </div>
                            <div id="homeFaqOne" class="global-accordion-collapse collapse show" data-bs-parent="#homeFaqAccordion">
                                <div class="global-accordion-body style">
                                    <p>Avark provides healthcare and enterprise technology solutions, including hospital management, ERP, inventory management, diagnostic workflows, integrations, and custom software.</p>
                                </div>
                            </div>
                        </div>

                        <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="500">
                            <div class="global-accordion-header">
                                <button class="global-accordion-button collapsed style" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#homeFaqTwo" aria-expanded="false" aria-controls="homeFaqTwo">
                                    <span class="faq-question-number">02</span>
                                    <span class="question">Are Avark's software solutions secure?</span>
                                </button>
                            </div>
                            <div id="homeFaqTwo" class="global-accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="global-accordion-body style">
                                    <p>Yes. Our systems use secure architecture, role-based access, controlled permissions, and safeguards designed to protect sensitive operational and healthcare information.</p>
                                </div>
                            </div>
                        </div>

                        <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="550">
                            <div class="global-accordion-header">
                                <button class="global-accordion-button collapsed style" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#homeFaqThree" aria-expanded="false" aria-controls="homeFaqThree">
                                    <span class="faq-question-number">03</span>
                                    <span class="question">Can the software be customized for our workflows?</span>
                                </button>
                            </div>
                            <div id="homeFaqThree" class="global-accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="global-accordion-body style">
                                    <p>Yes. Avark solutions can be configured and extended to match your departments, approval processes, reporting needs, integrations, and operational structure.</p>
                                </div>
                            </div>
                        </div>

                        <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="600">
                            <div class="global-accordion-header">
                                <button class="global-accordion-button collapsed style" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#homeFaqFour" aria-expanded="false" aria-controls="homeFaqFour">
                                    <span class="faq-question-number">04</span>
                                    <span class="question">Does Avark provide implementation and support?</span>
                                </button>
                            </div>
                            <div id="homeFaqFour" class="global-accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="global-accordion-body style">
                                    <p>Yes. We assist with implementation, onboarding, training, workflow setup, and ongoing technical support to help teams adopt the platform smoothly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="650">
                            <div class="global-accordion-header">
                                <button class="global-accordion-button collapsed style" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#homeFaqFive" aria-expanded="false" aria-controls="homeFaqFive">
                                    <span class="faq-question-number">05</span>
                                    <span class="question">Is pricing fixed or flexible?</span>
                                </button>
                            </div>
                            <div id="homeFaqFive" class="global-accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="global-accordion-body style">
                                    <p>Pricing is tailored to the selected product, required modules, user count, customization scope, and deployment model.</p>
                                </div>
                            </div>
                        </div>

                        <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="global-accordion-header">
                                <button class="global-accordion-button collapsed style" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#homeFaqSix" aria-expanded="false" aria-controls="homeFaqSix">
                                    <span class="faq-question-number">06</span>
                                    <span class="question">Can Avark integrate with our existing systems?</span>
                                </button>
                            </div>
                            <div id="homeFaqSix" class="global-accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="global-accordion-body style">
                                    <p>Yes. API-based integrations can connect Avark products with compatible third-party tools, accounting platforms, diagnostics, and existing enterprise systems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.js-youtube-short').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            var videoId = trigger.dataset.youtubeId;
            var videoTitle = trigger.dataset.videoTitle || 'ARK HIMS YouTube Short';
            var iframe = document.createElement('iframe');

            iframe.className = 'short-video-card__frame';
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
