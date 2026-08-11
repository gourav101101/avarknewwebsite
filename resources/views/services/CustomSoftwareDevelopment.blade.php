@extends('layouts.app')

@section('title', 'Custom Software Development')
@section('meta_description', 'Custom Software Development')
@section('meta_keywords', 'home, Custom Software Development')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
<div class=" container rr-container-1900">
    <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
    <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title">Service</h3>
        <ul class="breadcrumb-section__page">
        <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
        <li> Service <i class="fa-regular fa-angle-right"></i></li>
        <li> Custom Software Development</li>
        </ul>
    </div>
    </div>
    <div class="breadcrumb-section__border"></div>
</div>
</section>

<section class="service-details section-spacing">
<div class="container rr-container-1350">
    <div class="service-details__top">
    <div class="media" data-aos="zoom-in" data-aos-duration="900">
        <img src="assets/imgs/inner/service-detils/custom-software-development.png" alt="img">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-12">
        <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
        <h4 class="title">Service Categories</h4>
        <div class="service-details-sidebar-categories">
            <ul>
            <li><a href="{{ route('erp-system') }}">ERP System Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('crm-solutions') }}">CRM Solutions</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('web-application-development') }}">Web Application Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
        </div>
        </div>
        <div class="media" data-aos="fade-up" data-aos-duration="900">
            <img src="assets/imgs/inner/service-detils/custom-software-developmentkp01.png" alt="img">
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Drive Growth with Intelligent CRM Solutions</h2>

            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>Our CRM platform helps businesses streamline communication, automate sales processes, and enhance customer engagement. By organizing every customer touchpoint in one place, you can ensure faster response times, improved conversions, and long-term customer loyalty.</p>
                <p>Our CRM Service is designed to centralize and optimize your entire customer lifecycle—from lead generation to deal closure and post-sales support. Instead of relying on spreadsheets or disconnected systems, CRM connects your marketing, sales, and support teams into a single intelligent ecosystem.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Key Benefits - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Benefits</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Centralized customer data and interaction history</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Real-time sales pipeline tracking</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Automated follow-ups and task reminders</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Improved customer engagement and retention</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Better sales forecasting and performance analysis</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Scalable CRM solution that grows with your business</span>
            </div>

            <hr class="service-section-divider">

            <!-- Core Features - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Core Features</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Lead & Contact Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Sales Pipeline & Opportunity Tracking</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Marketing Automation Tools</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Email & Communication Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Task & Activity Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Customer Support & Ticket Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Advanced Reporting & Analytics Dashboard</span>
            </div>

        </div>
    </div>
    </div>
</div>
</section>

<section class="cta-section__area">
<div class="container rr-container-1350">
    <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
    <div class="section-title-3__wrapper tx-center">
        <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
            alt="image">Connect With Us <img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Let's Build Your Next Digital Solution</h2>
        <p class="cta-section__dec">Custom Software Engineered for Performance & Growth</p>
    </div>
    <div class="cta-section__btn">
        <a href="{{ route('contact-us') }}" class="rr-btn">
        <span class="btn-wrap">
            <span class="text-one">Start Your Project Today</span>
            <span class="text-two">Start Your Project Today</span>
        </span>
        </a>
    </div>
    <div class="cta-section__list">
        <ul>
        <li><i class="fa-regular fa-angles-right"></i> End-to-End Development Support </li>
        <li><i class="fa-regular fa-angles-right"></i> Agile & Transparent Development Process </li>
        </ul>
    </div>
    </div>
</div>
</section>
@endsection
