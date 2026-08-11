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
        background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%) !important;
        color: #fff !important;
        border: none !important;
        box-shadow: 0 8px 24px rgba(34, 197, 94, 0.3) !important;
        padding: 16px 36px !important;
    }
    .features-1 .rr-btn-green * {
        color: #fff !important;
    }
    .features-1 .rr-btn-green::before {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    .features-1 .rr-btn-green:hover * {
        color: #fff !important;
    }

    /* =============================================
       SECTION 2: SERVICES — Enhanced Cards
       ============================================= */
    .service.rr-bg-gray {
        background: linear-gradient(180deg, #f0f4ed 0%, #f8faf6 100%) !important;
        position: relative;
    }
    .service .section-title__wrapper .sub-title {
        display: inline-block;
        padding: 6px 18px;
        background: rgba(34, 197, 94, 0.08);
        border: 1px solid rgba(34, 197, 94, 0.15);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 600;
        color: #16a34a;
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
        background: linear-gradient(135deg, rgba(34,197,94,0.04), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .service__item:hover {
        border-left-color: #22c55e !important;
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(34, 197, 94, 0.12) !important;
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
        background: #22c55e !important;
        color: #fff !important;
        transform: scale(1.1);
    }

    /* =============================================
       SECTION 3: PARTNERS — Trust Enhancement
       ============================================= */
    .brand-1 {
        position: relative;
        padding-bottom: 40px;
    }
    .brand-1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(34,197,94,0.2), transparent);
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
       SECTION 4: ABOUT/FEATURES — Enhanced Premium
       ============================================= */
    .features-1 {
        position: relative;
    }
    .features-1::before {
        content: '';
        position: absolute;
        top: -60px;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(21, 128, 61, 0.15), transparent);
    }
    .features-1 .section-title__wrapper .sub-title {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(21, 128, 61, 0.08), rgba(34, 197, 94, 0.12));
        border: 1px solid rgba(21, 128, 61, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #15803d;
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
        border-left-color: #16a34a;
    }
    .features-1__item span {
        transition: all 0.4s ease;
        border-radius: 12px;
    }
    .features-1__item:hover span {
        transform: scale(1.12);
        box-shadow: 0 8px 24px rgba(22, 163, 74, 0.2);
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
        background: linear-gradient(135deg, #16a34a, #15803d) !important;
        box-shadow: 0 4px 16px rgba(22, 163, 74, 0.3);
        transition: all 0.3s ease !important;
    }
    .features-1 .rr-btn-green:hover {
        box-shadow: 0 8px 28px rgba(22, 163, 74, 0.4);
        transform: translateY(-2px);
    }

    /* =============================================
       SECTION 5: PRODUCTS — Premium Cards
       ============================================= */
    .ai-features-2 {
        background: linear-gradient(180deg, #f0fdf4 0%, #f8faf6 50%, #fff 100%);
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
        background: linear-gradient(90deg, #22c55e, #15803d);
        border-radius: 3px;
    }
    .ai-features-2 .section-title__wrapper .sub-title {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(21, 128, 61, 0.08), rgba(34, 197, 94, 0.12));
        border: 1px solid rgba(21, 128, 61, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #15803d;
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
        background: linear-gradient(135deg, rgba(0, 79, 252, 0.03), transparent 60%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }
    .ai-features-2__item:hover {
        transform: translateY(-6px) !important;
        box-shadow: 0 16px 40px rgba(0, 79, 252, 0.12) !important;
        border-color: rgba(0, 79, 252, 0.3) !important;
        border-left-color: #004FFC !important;
        background: rgba(255, 255, 255, 0.85) !important;
        backdrop-filter: blur(24px) !important;
        border-radius: 16px !important;
    }
    .ai-features-2__item:hover::after {
        opacity: 1;
    }
    .ai-features-2__item .icon {
        background: linear-gradient(135deg, #004FFC 0%, #003cc2 100%) !important;
        box-shadow: 0 4px 12px rgba(0, 79, 252, 0.25);
        transition: all 0.4s ease;
    }
    .ai-features-2__item:hover .icon {
        transform: scale(1.08);
        box-shadow: 0 6px 20px rgba(0, 79, 252, 0.35);
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
        color: #004FFC !important; /* Overrides white text on hover from style.css */
    }
    .ai-features-2__item:hover .content .title a {
        color: #004FFC !important;
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
        background: linear-gradient(135deg, rgba(0, 79, 252, 0.1), rgba(0, 79, 252, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }
    .ai-features-2__item .product-arrow i {
        font-size: 12px;
        color: #004FFC;
    }
    .ai-features-2__item:hover .product-arrow {
        opacity: 1;
        transform: translateX(0);
        background: rgba(0, 79, 252, 0.1) !important;
    }
    .ai-features-2__item:hover .product-arrow i {
        color: #004FFC !important;
    }

    /* =============================================
       SECTION 6: WHY CHOOSE ARK — Premium Deep Green
       ============================================= */
    .choose-us__inner {
        background: linear-gradient(135deg, #dcfce7 0%, #f0fdf4 35%, #ecfdf5 65%, #d1fae5 100%) !important;
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
        background: radial-gradient(circle, rgba(22, 163, 74, 0.08), transparent 70%);
        pointer-events: none;
    }
    .choose-us__content .sub-title.has--green {
        display: inline-block !important;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(21, 128, 61, 0.12), rgba(22, 163, 74, 0.18)) !important;
        border: 1px solid rgba(21, 128, 61, 0.25) !important;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #15803d !important;
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
        background: linear-gradient(135deg, #16a34a, #15803d) !important;
        box-shadow: 0 4px 16px rgba(22, 163, 74, 0.3);
        transition: all 0.3s ease !important;
    }
    .choose-us__content .rr-btn-green.has--drk-gren:hover {
        box-shadow: 0 8px 28px rgba(22, 163, 74, 0.4) !important;
        transform: translateY(-2px);
    }
    .choose-us__item {
        background: rgba(255, 255, 255, 0.8) !important;
        backdrop-filter: blur(16px);
        border: 1px solid rgba(22, 163, 74, 0.12) !important;
        border-radius: 16px !important;
        border-left: 3px solid rgba(22, 163, 74, 0.3) !important;
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
        background: linear-gradient(135deg, rgba(22, 163, 74, 0.03), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    .choose-us__item:hover {
        background: rgba(255, 255, 255, 0.95) !important;
        transform: translateY(-6px) !important;
        box-shadow: 0 16px 48px rgba(22, 163, 74, 0.12) !important;
        border-left-color: #16a34a !important;
        border-color: rgba(22, 163, 74, 0.25) !important;
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
        color: #15803d;
    }
    .choose-us__item p {
        color: #475569;
        line-height: 1.7;
    }

    /* =============================================
       SECTION 7: TESTIMONIALS — Enhanced Styling
       ============================================= */
    .testimonial__inner {
        background: linear-gradient(135deg, #dcfce7 0%, #f0fdf4 50%, #ecfdf5 100%) !important;
    }
    .testimonial__content .sub-title.has--green {
        display: inline-block !important;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(21, 128, 61, 0.12), rgba(22, 163, 74, 0.18));
        border: 1px solid rgba(21, 128, 61, 0.25);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #15803d;
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
       SECTION 8: TECHNOLOGY/SUPPORT — Premium Polish
       ============================================= */
    .technology {
        position: relative;
    }
    .technology::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(21, 128, 61, 0.15), transparent);
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
        background: linear-gradient(90deg, #22c55e, #15803d);
    }
    .technology__card .section-title__wrapper .sub-title {
        color: #86efac;
        font-weight: 600;
        letter-spacing: 0.8px;
    }
    .technology__card .rr-btn-green {
        background: linear-gradient(135deg, #22c55e, #16a34a) !important;
        box-shadow: 0 4px 16px rgba(34, 197, 94, 0.4);
        transition: all 0.3s ease !important;
    }
    .technology__card .rr-btn-green:hover {
        box-shadow: 0 8px 28px rgba(34, 197, 94, 0.5);
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
        background: linear-gradient(90deg, #15803d, #22c55e);
    }
    .technology__wrapper .title {
        color: #fff;
    }
    .technology .client-box {
        transition: all 0.3s ease;
    }
    .technology .client-box:hover {
        transform: scale(1.08);
        box-shadow: 0 8px 24px rgba(22, 163, 74, 0.2);
    }

    /* =============================================
       SECTION 9: FAQ — Enhanced Styling
       ============================================= */
    .faq.rr-bg-gray {
        background: linear-gradient(180deg, #f0fdf4 0%, #f8faf6 50%, #f0f4ed 100%) !important;
    }
    .faq .section-title__wrapper .sub-title {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(21, 128, 61, 0.08), rgba(34, 197, 94, 0.12));
        border: 1px solid rgba(21, 128, 61, 0.18);
        border-radius: 100px;
        font-size: 14px;
        font-weight: 700;
        color: #15803d;
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
        border-left-color: #16a34a !important;
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
       HERO REDESIGN — Premium Healthcare Hero
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

    /* Animated Grid Overlay */
    .hero-grid-overlay {
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
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
        background: #22c55e;
        top: 20%; left: 10%;
        animation: particleFloat 6s ease-in-out infinite;
        box-shadow: 0 0 12px #22c55e;
    }
    .hero-particle--2 {
        width: 4px; height: 4px;
        background: #3b82f6;
        top: 60%; left: 5%;
        animation: particleFloat 8s ease-in-out infinite 1s;
        box-shadow: 0 0 10px #3b82f6;
    }
    .hero-particle--3 {
        width: 5px; height: 5px;
        background: #a855f7;
        top: 30%; right: 15%;
        animation: particleFloat 7s ease-in-out infinite 2s;
        box-shadow: 0 0 10px #a855f7;
    }
    .hero-particle--4 {
        width: 3px; height: 3px;
        background: #d0fc9c;
        top: 75%; right: 25%;
        animation: particleFloat 9s ease-in-out infinite 0.5s;
        box-shadow: 0 0 8px #d0fc9c;
    }
    .hero-particle--5 {
        width: 5px; height: 5px;
        background: #22c55e;
        bottom: 15%; left: 40%;
        animation: particleFloat 7s ease-in-out infinite 3s;
        box-shadow: 0 0 10px #22c55e;
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
        background: rgba(34, 197, 94, 0.1);
        border: 1px solid rgba(34, 197, 94, 0.25);
        backdrop-filter: blur(10px);
        margin-bottom: 28px;
    }
    .hero-badge__dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        animation: dotPulse 2s ease-in-out infinite;
    }
    @keyframes dotPulse {
        0%, 100% { opacity: 1; box-shadow: 0 0 0 0 rgba(34,197,94,0.4); }
        50% { opacity: 0.7; box-shadow: 0 0 0 6px rgba(34,197,94,0); }
    }
    .hero-badge__text {
        font-size: 14px;
        font-weight: 600;
        color: #d0fc9c;
        letter-spacing: 0.3px;
    }

    /* Title */
    .hero-title {
        font-size: 58px;
        font-weight: 800;
        line-height: 1.15;
        color: #fff;
        margin-bottom: 24px;
        letter-spacing: -0.5px;
    }
    .hero-title__gradient {
        color: #7dd956;
        display: inline;
    }
    .hero-title__gradient div,
    .hero-title__gradient span {
        color: #7dd956 !important;
    }

    @media (max-width: 1399px) {
        .hero-title { font-size: 48px; }
    }
    @media (max-width: 991px) {
        .hero-title { font-size: 42px; }
    }
    @media (max-width: 575px) {
        .hero-title { font-size: 32px; line-height: 1.2; }
        .hero-redesigned .hero__inner { padding-top: 140px; padding-bottom: 60px; min-height: auto; }
    }

    /* Description */
    .hero-desc {
        font-size: 17px;
        font-weight: 400;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.75);
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
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        backdrop-filter: blur(12px);
        max-width: fit-content;
    }
    .hero-stats__item {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    .hero-stats__number {
        font-size: 28px;
        font-weight: 800;
        color: #d0fc9c;
        line-height: 1;
    }
    .hero-stats__label {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.55);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .hero-stats__divider {
        width: 1px;
        height: 40px;
        background: rgba(255, 255, 255, 0.12);
    }
    @media (max-width: 575px) {
        .hero-stats {
            gap: 20px;
            padding: 16px 20px;
            flex-wrap: wrap;
        }
        .hero-stats__number { font-size: 22px; }
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
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 10px 0;
    }
    .hero-btn-secondary:hover {
        color: #d0fc9c;
    }
    .hero-btn-secondary__icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
        font-size: 12px;
        color: #fff;
        position: relative;
    }
    .hero-btn-secondary__icon::before {
        content: '';
        position: absolute;
        inset: -4px;
        border-radius: 50%;
        border: 2px solid transparent;
        border-top-color: #22c55e;
        animation: iconSpin 3s linear infinite;
    }
    @keyframes iconSpin {
        to { transform: rotate(360deg); }
    }
    .hero-btn-secondary:hover .hero-btn-secondary__icon {
        background: rgba(34,197,94,0.15);
        border-color: rgba(34,197,94,0.4);
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
        border: 2px solid #1a3a0a;
        margin-left: -10px;
        object-fit: cover;
    }
    .hero-trust__avatars img:first-child {
        margin-left: 0;
    }
    .hero-trust__more {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(34, 197, 94, 0.2);
        border: 2px solid rgba(34, 197, 94, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -10px;
        font-size: 14px;
        font-weight: 700;
        color: #d0fc9c;
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
        color: #facc15;
        font-size: 12px;
    }
    .hero-trust__text span {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
    }
    .hero-trust__text strong {
        color: #fff;
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
        background: radial-gradient(circle, rgba(34, 197, 94, 0.25), transparent 70%);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        animation: glowPulse 4s ease-in-out infinite;
    }
    .hero-phone__glow--secondary {
        width: 420px;
        height: 420px;
        background: radial-gradient(circle, rgba(34, 197, 94, 0.08), transparent 70%);
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
        background: rgba(20, 30, 15, 0.75);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 14px;
        z-index: 5;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
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
        color: #fff;
        line-height: 1.2;
    }
    .hero-float-card__label {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.55);
        font-weight: 500;
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

</style>


<section class="hero hero-redesigned">
    <div class="hero__inner" data-background="{{ asset('assets/imgs/home-1/hero/bg.png') }}">
        <!-- Animated background grid -->
        <div class="hero-grid-overlay"></div>
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
                            <span class="hero-badge__text">🚀 #1 Healthcare Technology Platform in India</span>
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
                                <span class="hero-stats__number" data-count="500">500+</span>
                                <span class="hero-stats__label">Hospitals</span>
                            </div>
                            <div class="hero-stats__divider"></div>
                            <div class="hero-stats__item">
                                <span class="hero-stats__number" data-count="10000">10K+</span>
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
                                <img src="{{ asset('assets/imgs/home-1/hero/author-1.png') }}" alt="User">
                                <img src="{{ asset('assets/imgs/home-1/hero/author-2.png') }}" alt="User">
                                <img src="{{ asset('assets/imgs/home-1/hero/author-3.png') }}" alt="User">
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
                                <span>Trusted by <strong>10,000+</strong> healthcare professionals</span>
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
                        <img class="hero-phone__img" src="{{ asset('assets/imgs/home-1/hero/kp-mobile.png') }}" alt="ARK HMS Dashboard">

                        <!-- Floating stat cards -->
                        <div class="hero-float-card hero-float-card--1" data-aos="fade-left" data-aos-delay="800">
                            <div class="hero-float-card__icon" style="background: linear-gradient(135deg, #22c55e, #16a34a);">
                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <div class="hero-float-card__info">
                                <span class="hero-float-card__value">500+</span>
                                <span class="hero-float-card__label">Hospitals Connected</span>
                            </div>
                        </div>

                        <div class="hero-float-card hero-float-card--2" data-aos="fade-right" data-aos-delay="1000">
                            <div class="hero-float-card__icon" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="hero-float-card__info">
                                <span class="hero-float-card__value">10,000+</span>
                                <span class="hero-float-card__label">Active Users</span>
                            </div>
                        </div>

                        <div class="hero-float-card hero-float-card--3" data-aos="fade-left" data-aos-delay="1200">
                            <div class="hero-float-card__icon" style="background: linear-gradient(135deg, #a855f7, #7c3aed);">
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
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/erp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('erp-system') }}">ERP System Development</a></h3>
                        <p class="desc">Streamline operations, manage resources efficiently, and gain real-time business insights with our scalable ERP solutions.</p>
                        <a href="{{ route('erp-system') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/crm-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('crm-solutions') }}">CRM Solutions</a></h3>
                        <p class="desc">Improve customer relationships, automate sales processes, and boost engagement with intelligent CRM systems.</p>
                        <a href="{{ route('crm-solutions') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/CustomSoftwareDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('custom-software-development') }}">Custom Software Development</a></h3>
                        <p class="desc">Tailor-made software solutions designed specifically to match your business workflows and operational requirements.</p>
                        <a href="{{ route('custom-software-development') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/WebApplicationDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('web-application-development') }}">Web Application Development</a></h3>
                        <p class="desc">Secure, responsive, and high-performance web platforms built using modern technologies for scalable growth.</p>
                        <a href="{{ route('web-application-development') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/mobile-development.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('mobile-app-development') }}">Mobile App Development</a></h3>
                        <p class="desc">User-friendly Android & iOS applications that enhance customer experience and expand your digital reach.</p>
                        <a href="{{ route('mobile-app-development') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/cloud-computing-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a></h3>
                        <p class="desc">Smooth and secure migration of legacy systems and business data to modern cloud-based infrastructure.</p>
                        <a href="{{ route('cloud-and-data-migration') }}" class="service-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/digital-transformation-kpm.png" alt="image"></span>
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
                        <img loading="lazy" src="assets/imgs/home-1/brand/makd.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/bigrock.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/amazonwebservices.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/oracle.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/emegh-logo.png" alt="eMEGH Partner">
                    </div>
                </div>
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
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
                            <div style="width: 320px; height: 320px; border-radius: 50%; overflow: hidden; box-shadow: 0 25px 50px rgba(0, 79, 252, 0.15); border: 10px solid #ffffff; background: #ffffff;">
                                <img loading="lazy" src="assets/imgs/home-1/features/healthcare_tech.png" alt="Digital Healthcare Technology" style="width: 100%; height: 100%; object-fit: cover; object-position: center; transform: scale(1.1);">
                            </div>
                        </div>
                        <div class="features-1__shape-2 rotate"><img loading="lazy" src="assets/imgs/home-1/features/line-shape.png"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="features-1__wrapper">
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="500">
                        <span><img loading="lazy" src="assets/imgs/home-1/features/icon-1.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Healthcare-Focused Solution</h2>
                            <p>Designed exclusively for hospitals, clinics, and healthcare organizations with workflows that match real-world hospital operations.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="700">
                        <span><img loading="lazy" src="assets/imgs/home-1/features/icon-2.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Centralized Patient Records</h2>
                            <p>Doctors and staff can access patient information quickly and securely from anywhere.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="900">
                        <span><img loading="lazy" src="assets/imgs/home-1/features/icon-3.png" alt="image"></span>
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
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('hms')}}">Advance Hospital Management System</a></h3>
                    <p class="product-desc">End-to-end OPD, IPD, billing, pharmacy & lab management</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('inventory-stock-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('inventory-stock-management')}}">Inventory or Stock Management System</a></h3>
                    <p class="product-desc">Real-time stock tracking, purchase orders & alerts</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('pathology-diagnostic-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-3.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a></h3>
                    <p class="product-desc">Automated lab workflows, test tracking & report generation</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('white-label-practice-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-4.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a></h3>
                    <p class="product-desc">Branded clinic apps with appointments & records</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('dialysis-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('dialysis-management')}}">Dialysis Management System</a></h3>
                    <p class="product-desc">Specialized dialysis scheduling & patient tracking</p>
                </div>
                <span class="product-arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </div>


            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('enterprise-support-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
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
                        <img loading="lazy" class="image-1" src="assets/imgs/home-3/about/about2.png" alt="Hospital Analytics" style="width: 484px; height: 303px; object-fit: cover; object-position: left; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                        <img loading="lazy" class="image-2" src="assets/imgs/home-3/about/about-apointment.jpeg" alt="Hospital Automation" style="width: 424px; height: 307px; object-fit: cover; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                        <!-- <img loading="lazy" class="image-3" src="assets/imgs/home-1/choose-us/choose-3.png" alt="image"> -->
                        <img loading="lazy" class="image-4" src="assets/imgs/home-1/choose-us/icon-1.png" alt="image">
                        <img loading="lazy" class="image-5" src="assets/imgs/home-1/choose-us/icon-2.png" alt="image">

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
                            <h2 class="title"><span class="icon"><img loading="lazy" src="assets/imgs/home-1/choose-us/icon-3.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Faster Patient Care</a></h2>
                            <p>Reduce waiting times and improve patient satisfaction through streamlined workflows.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-up" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" src="assets/imgs/home-1/choose-us/icon-4.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Built for Quality & Compliance</a></h2>
                            <p>Support accreditation and quality initiatives with NABH-Ready workflows, ABHA integration, clinical documentation, and compliance monitoring.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-left" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" src="assets/imgs/home-1/choose-us/icon-5.png"
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
        <div class="shape-1"><img loading="lazy" src="assets/imgs/home-1/testimonial/shape.png" alt="image"></div>
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
                                            <img loading="lazy" src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}">
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
                                            <img loading="lazy" src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}">
                                        @else
                                            <span>{{ Str::upper(Str::substr($testimonial->client_name, 0, 1)) }}</span>
                                        @endif
                                    </div>
                                    <div class="testimonial__info__content">
                                        <h2 class="title">{{ $testimonial->client_name }}</h2>
                                        <span class="sub-title">{{ collect([$testimonial->client_position, $testimonial->client_company])->filter()->implode(', ') }}</span>
                                    </div>
                                </div>
                                <div class="shape"><img loading="lazy" src="{{ asset('assets/imgs/home-1/testimonial/quite.png') }}" alt="image"></div>
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

<section class="technology section-spacing">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900">
                <div class="technology__card" data-background="assets/imgs/home-1/technology/bg.png">
                    <img loading="lazy" class="shape-1" src="assets/imgs/home-1/technology/kuldeep01.png" alt="image">
                    <!-- <img loading="lazy" class="shape-2" src="assets/imgs/home-1/technology/shape-2.png" alt="image"> -->
                    <div class="section-title__wrapper ">
                        <h2 class="sub-title">Healthcare Operations Powered Every Day</h2>
                        <h2 class="title rr-title-anim-1 color-white">Future-Ready Hospital Technology</h2>


                        <p class="decs">ARK HIMS combines intelligent automation, real-time analytics, cloud technology, mobility, and seamless integrations to help healthcare organizations stay ahead in an evolving digital healthcare landscape.
                        </p>
                    </div>

                    <a href="{{ route('contact-us') }}" class="rr-btn-green">
                        <span class="btn-wrap">
                            <span class="text-one">Book a Demo</span>
                            <span class="text-two">Book a Demo</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="900">
                <div class="technology__wrapper" data-background="assets/imgs/home-1/technology/bg-2.png">

                    <h2 class="title">Secure, Scalable & Future Ready</h2>
                    <div class="client-capsule-wrapper-box" data-t-throwable-scene="true">
                        <div class="client-capsule-wrapper">
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s1.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s2.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s3.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s4.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s5.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s6.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s7.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s8.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s9.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s10.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s11.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s12.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s13.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s14.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s15.png" alt="image">
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq rr-bg-gray section-spacing rr-ov-hidde">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-lg-5">
                <div class="faq__content" data-aos="fade-right" data-aos-duration="500">
                    <div class="section-title__wrapper">
                        <h2 class="sub-title"><span><img loading="lazy" src="assets/imgs/icon/massage.png" alt="image"></span>Support &
                            Help</h2>
                        <h2 class="title rr-title-anim-1">Got Questions? We’ve Got Answers </h2>
                        <p class="desc">Find clear answers to common questions about ARK Hospital Management Software, Inventory Management, Pathology & Diagnostic solutions — covering features, pricing, security, and implementation.</p>

                        <a href="{{ route('contact-us') }}" class="rr-btn-green">
                            <span class="btn-wrap">
                                <span class="text-one">CONTACT US</span>
                                <span class="text-two">CONTACT US</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="accordion" id="accordionExample">
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="500">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="question">
                                    What is Avark and what solutions does it offer?
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="global-accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Avark is a technology company providing enterprise software products such as ERP Systems, Industrial Inventory Management Systems, and PACS Integration Solutions designed to streamline business operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="600">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="question">
                                    Are Avark’s software solutions secure?
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="global-accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Yes. Our systems are built with enterprise-grade security standards, role-based access control, and secure data architecture to ensure complete protection of business information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="question">
                                    Can the software be customized as per business needs? </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Absolutely. Avark products are scalable and customizable to match your specific workflows, industry requirements, and operational structure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="800">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="question">
                                    Does Avark provide implementation and support?
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Yes. We offer complete implementation assistance, onboarding support, training, and ongoing technical support to ensure smooth operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="900">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="question">
                                    Is pricing fixed or flexible?
                                </div>
                            </div>
                        </div>
                        <div id="collapseFive" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Pricing depends on the product, number of users, modules required, and deployment model. We offer flexible plans tailored to your business needs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="900">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <div class="question">
                                    Can Avark software integrate with existing systems?
                                </div>
                            </div>
                        </div>
                        <div id="collapseSix" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Yes. Our solutions support API-based integrations and can be connected with third-party tools, accounting systems, and other enterprise platforms.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


@endsection
