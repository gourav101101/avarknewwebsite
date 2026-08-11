@extends('layouts.app')

@section('title', 'Enterprise Integration Services')
@section('meta_description', 'Enterprise Integration Services')
@section('meta_keywords', 'home, Enterprise Integration Services')

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
        <li> Enterprise Integration Services</li>
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
        <img src="{{ asset('assets/imgs/inner/service-detils/Enterprise-Integration-Services-kp01.png') }}" alt="img" class="img-fluid" style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
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
        <div class="media mt-4" data-aos="fade-up" data-aos-duration="900">
            <img src="assets/imgs/inner/service-detils/Enterprice-System-Integration.jpg" alt="img" class="img-fluid">
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Connect Systems. Streamline Operations. Accelerate Growth.</h2>
            
            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>At Avark IT Services, we help organizations integrate their diverse software systems, applications, and data sources into one unified digital ecosystem.</p>
                <p>In today’s fast-paced business environment, disconnected systems create inefficiencies, data silos, and operational delays. Our Enterprise Integration Services ensure seamless communication between your platforms — improving productivity, visibility, and decision-making.</p>
                <p>Enterprise Integration is about enabling different business systems — such as ERP, CRM, HRMS, accounting software, eCommerce platforms, and third-party applications — to work together in real time.</p>
                <p>Our integration solutions eliminate manual processes, reduce errors, and provide centralized access to accurate business data.</p>
            </div>

            <hr class="service-section-divider">

            <!-- We Specialize In - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">We Specialize In</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> ERP & CRM Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> API Development & Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Legacy System Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Cloud-to-Cloud & Hybrid Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Data Synchronization & Automation</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Third-Party Software Integration</span>
            </div>
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>Our team designs secure, scalable, and future-ready integration architectures that align with your long-term digital strategy.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Key Benefits - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Benefits</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Elimination of data silos</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Real-time data synchronization</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Improved operational efficiency</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Automated workflows across departments</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Enhanced reporting & decision-making</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Reduced manual errors</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Scalable integration architecture</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Improved customer & employee experience</span>
            </div>

            <hr class="service-section-divider">

            <!-- Core Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Core Features</h2>
            <div class="accordion service-accordion" id="eiFeatures" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#eif1" aria-expanded="true">API & Middleware</button></h2>
                    <div id="eif1" class="accordion-collapse collapse show" data-bs-parent="#eiFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>API Development & Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Middleware & Integration Frameworks</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Data Mapping & Transformation</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#eif2">Platform Integrations</button></h2>
                    <div id="eif2" class="accordion-collapse collapse" data-bs-parent="#eiFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Cloud & On-Premise System Integration</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>ERP, CRM & Accounting Software Integration</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Payment Gateway & Third-Party API Integration</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#eif3">Security & Management</button></h2>
                    <div id="eif3" class="accordion-collapse collapse" data-bs-parent="#eiFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Real-Time Data Exchange</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Secure Authentication & Compliance</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Monitoring & Performance Optimization</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Our Integration Approach - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Our Integration Approach</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> System Assessment & Requirement Analysis</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Integration Architecture Planning</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Secure API & Middleware Development</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Testing & Performance Validation</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Deployment & Ongoing Support</span>
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
            alt="image">Unify Your Business Systems <img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Today Seamless Integration. Smarter Operations. Faster Growth.</h2>
        <p class="cta-section__dec">Break down system barriers and build a connected enterprise with Avark’s integration expertise.</p>
    </div>
    <div class="cta-section__btn">
        <a href="{{ route('contact-us') }}" class="rr-btn">
        <span class="btn-wrap">
            <span class="text-one">Schedule an Integration Consultation</span>
            <span class="text-two">Start Your Integration Project</span>
        </span>
        </a>
    </div>
    <div class="cta-section__list">
        <ul>
        <li><i class="fa-regular fa-angles-right"></i> Secure & Scalable Architecture </li>
        <li><i class="fa-regular fa-angles-right"></i> Real-Time Data Synchronization</li>
        </ul>
    </div>
    </div>
</div>
</section>

@endsection
