@extends('layouts.app')

@section('title', 'Our Valued Partners')
@section('meta_description', 'Building Strong Partnerships for Better Digital Solutions')
@section('meta_keywords', 'partners, avark, healthcare technology, digital solutions')

@section('content')

<style>
    /* Premium Partners Page Styles */
    .partner-hero-logos {
        background: linear-gradient(180deg, #f0fdf4 0%, #ffffff 100%);
        border-bottom: 1px solid rgba(22, 163, 74, 0.1);
    }
    .partner-logo-item {
        filter: grayscale(100%) opacity(0.6);
        transition: all 0.4s ease;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.03);
        border: 1px solid rgba(22, 163, 74, 0.05);
    }
    .partner-logo-item:hover {
        filter: grayscale(0%) opacity(1);
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(22, 163, 74, 0.15);
        border-color: rgba(22, 163, 74, 0.2);
    }
    
    .premium-service-card {
        border-left: 4px solid #16a34a !important;
        background: #fff;
        transition: all 0.3s ease;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04);
        position: relative;
        overflow: hidden;
    }
    .premium-service-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, rgba(22,163,74,0.05), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .premium-service-card:hover {
        transform: translateX(8px);
        box-shadow: 0 10px 25px rgba(22,163,74,0.12);
        border-left-color: #15803d !important;
    }
    .premium-service-card:hover::before {
        opacity: 1;
    }

    .network-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        height: 100%;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        border: 1px solid rgba(22, 163, 74, 0.08);
        transition: all 0.4s ease;
    }
    .network-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(22, 163, 74, 0.12);
        border-color: rgba(22, 163, 74, 0.3);
    }
    .network-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .network-list li {
        padding: 12px 0;
        border-bottom: 1px solid #f1f5f9;
        color: #475569;
        display: flex;
        align-items: center;
        transition: color 0.3s ease;
    }
    .network-list li:last-child {
        border-bottom: none;
    }
    .network-list li:hover {
        color: #15803d;
    }
    .network-list li i {
        color: #16a34a;
        margin-right: 12px;
        font-size: 1.1rem;
    }
    
    .benefit-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 35px;
        height: 100%;
        border: 1px solid rgba(22, 163, 74, 0.1);
        transition: all 0.4s ease;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    .benefit-card::after {
        content: '';
        position: absolute;
        bottom: 0; left: 0; width: 100%; height: 4px;
        background: linear-gradient(90deg, #22c55e, #15803d);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }
    .benefit-card:hover {
        box-shadow: 0 20px 40px rgba(22, 163, 74, 0.08);
        transform: translateY(-5px);
    }
    .benefit-card:hover::after {
        transform: scaleX(1);
    }
    .benefit-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(22,163,74,0.1), rgba(21,128,61,0.15));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #15803d;
        font-size: 24px;
        transition: all 0.3s ease;
    }
    .benefit-card:hover .benefit-icon {
        background: linear-gradient(135deg, #16a34a, #15803d);
        color: #fff;
        transform: scale(1.1) rotate(5deg);
    }
    
    .section-badge {
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
        margin-bottom: 15px;
    }
</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Our Valued Partners</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Partners</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<!-- Partner Logos Section (Moved to Top) -->
<section class="partner-hero-logos py-5">
    <div class="container">
        <div class="text-center mb-4">
            <span class="section-badge">Trusted By Leaders</span>
        </div>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="partner-logo-item d-flex justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/imgs/home-1/brand/amazonwebservices.png') }}" class="img-fluid" alt="Amazon Web Services" style="max-height: 50px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="partner-logo-item d-flex justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/imgs/home-1/brand/oracle.png') }}" class="img-fluid" alt="Oracle" style="max-height: 50px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="partner-logo-item d-flex justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/imgs/home-1/brand/makd.png') }}" class="img-fluid" alt="MAKD" style="max-height: 50px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="partner-logo-item d-flex justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/imgs/home-1/brand/bigrock.png') }}" class="img-fluid" alt="BigRock" style="max-height: 50px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="partner-logo-item d-flex justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/imgs/home-1/brand/emegh-logo.png') }}" class="img-fluid" alt="eMegh" style="max-height: 50px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Partners Section -->
<section class="about-section section-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content pe-lg-4">
                    <span class="section-badge">Why Partner With Us</span>
                    <h2 class="section-title mb-4" style="color: #0f172a; font-weight: 700;">Building Strong Partnerships for Better Digital Solutions</h2>
                    <p style="color: #475569; line-height: 1.8;">
                        At <strong>Avark Healthcare Technology Pvt. Ltd.</strong>, we believe that strong partnerships are the foundation of innovation and long-term success.
                    </p>
                    <p style="color: #475569; line-height: 1.8;">
                        Our trusted partners play a vital role in helping us deliver world-class healthcare technology solutions, enterprise software, and digital transformation services. Through collaboration with hospitals, healthcare organizations, technology providers, and industry experts, we continue to create innovative solutions that improve operational efficiency and patient care.
                    </p>
                    <p class="mb-0 fw-bold" style="color: #15803d;">
                        Together, we are building a smarter, more connected, and technology-driven future.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 mt-4 mt-lg-0">
                    <div class="col-md-12">
                        <div class="premium-service-card p-4">
                            <h4 style="color: #1e293b; font-weight: 700;"><i class="fa-solid fa-bolt text-success me-2"></i> Fast Services</h4>
                            <p class="mb-0 text-muted">We collaborate with trusted partners to deliver innovative, reliable, and efficient technology solutions across healthcare and enterprise industries.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="premium-service-card p-4">
                            <h4 style="color: #1e293b; font-weight: 700;"><i class="fa-solid fa-magnifying-glass text-success me-2"></i> Transparency</h4>
                            <p class="mb-0 text-muted">Our partnerships are built on transparency, integrity, and long-term collaboration, ensuring consistent value for our clients.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="premium-service-card p-4">
                            <h4 style="color: #1e293b; font-weight: 700;"><i class="fa-solid fa-handshake-angle text-success me-2"></i> Trustable</h4>
                            <p class="mb-0 text-muted">We proudly work with leading organizations, technology providers, healthcare institutions, and business partners who share our commitment to quality and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Network Section -->
<section class="services-section section-spacing py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f0fdf4 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Collaboration</span>
            <h2 class="section-title" style="color: #0f172a; font-weight: 700;">Our Partner Network</h2>
            <p style="color: #475569;">We proudly collaborate with organizations across various industries to build impactful solutions.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="network-card">
                    <h5 class="mb-4" style="color: #1e293b; font-weight: 700;">Healthcare Providers</h5>
                    <ul class="network-list">
                        <li><i class="fa-solid fa-hospital"></i> Hospitals & Multi-Specialty Centers</li>
                        <li><i class="fa-solid fa-microscope"></i> Diagnostic & Pathology Labs</li>
                        <li><i class="fa-solid fa-user-doctor"></i> Clinics & Medical Practices</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="network-card">
                    <h5 class="mb-4" style="color: #1e293b; font-weight: 700;">Technology Partners</h5>
                    <ul class="network-list">
                        <li><i class="fa-solid fa-cloud"></i> Technology & Cloud Providers</li>
                        <li><i class="fa-solid fa-truck-medical"></i> Healthcare Equipment Suppliers</li>
                        <li><i class="fa-solid fa-building-columns"></i> Government Health Organizations</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="network-card">
                    <h5 class="mb-4" style="color: #1e293b; font-weight: 700;">Enterprise Partners</h5>
                    <ul class="network-list">
                        <li><i class="fa-solid fa-graduation-cap"></i> Educational Institutions</li>
                        <li><i class="fa-solid fa-building"></i> Corporate Enterprises</li>
                        <li><i class="fa-solid fa-network-wired"></i> Digital Transformation Partners</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Partnerships Matter Section -->
<section class="benefits-section section-spacing py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">The Advantage</span>
            <h2 class="section-title" style="color: #0f172a; font-weight: 700;">Why Our Partnerships Matter</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h4 class="mb-3" style="color: #1e293b; font-weight: 700;">Innovation Through Collaboration</h4>
                    <p style="color: #475569; line-height: 1.7;">Working together with industry leaders enables us to continuously improve our products and introduce innovative technologies.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-users-viewfinder"></i>
                    </div>
                    <h4 class="mb-3" style="color: #1e293b; font-weight: 700;">Better Customer Experience</h4>
                    <p style="color: #475569; line-height: 1.7;">Our partner ecosystem allows us to deliver comprehensive, integrated, and customer-focused solutions that meet evolving business needs.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="mb-3" style="color: #1e293b; font-weight: 700;">Trusted Technology</h4>
                    <p style="color: #475569; line-height: 1.7;">We collaborate with reliable technology providers to ensure our software solutions remain secure, scalable, and future-ready.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-earth-asia"></i>
                    </div>
                    <h4 class="mb-3" style="color: #1e293b; font-weight: 700;">Nationwide Support</h4>
                    <p style="color: #475569; line-height: 1.7;">Our growing network of partners enables us to provide timely implementation, training, and support services across India and beyond.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section__area">
    <div class="container rr-container-1350">
        <div class="cta-section__wrapper" data-background="{{ asset('assets/imgs/home-3/shape/cta-3-bg.png') }}">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="{{ asset('assets/imgs/home-3/shape/shape-left-white.png') }}"
                        alt="image">Connect With Us <img class="right-shape"
                        src="{{ asset('assets/imgs/home-3/shape/shape-right-white.png') }}" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Request for a Quote</h2>
                <p class="cta-section__dec">Interested in our solutions or partnership opportunities?<br>Contact us today and our team will get in touch with you.</p>
            </div>
            <div class="cta-section__btn">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Fill Contact Form</span>
                        <span class="text-two">Fill Contact Form</span>
                    </span>
                </a>
                <a href="{{ route('contact-us') }}" class="rr-btn rr-btn-3">
                    <span class="btn-wrap">
                        <span class="text-one">Let's Talk</span>
                        <span class="text-two">Let's Talk</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
