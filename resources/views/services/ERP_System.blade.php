@extends('layouts.app')

@section('title', 'ERP System')
@section('meta_description', 'ERP System Development Services')
@section('meta_keywords', 'home, ERP System')

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
        <li> ERP System</li>
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
        <img src="{{ asset('assets/imgs/inner/service-detils/kp-inner-2.png') }}" alt="img">
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
            <img src="{{ asset('assets/imgs/inner/service-detils/erpservie.png') }}" alt="ERP System">
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">ERP System</h2>

            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>An Enterprise Resource Planning (ERP) system is a powerful software solution designed to integrate and manage various business processes across an organization.</p>
                <p>ERP serves as a centralized platform that enables efficient coordination and communication among different departments, streamlining operations and improving overall productivity.</p>
                <p>By connecting various functions within a single platform, organizations can eliminate manual processes, reduce errors, improve collaboration, and gain real-time insights for smarter business decisions.</p>
            </div>

            <!-- Why Choose Us - Card Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Why Choose Our ERP Solutions?</h2>
            <div class="service-why-cards" data-aos="fade-up" data-aos-duration="900">
                <div class="service-why-card">
                    <span class="why-icon">⚡</span>
                    <h4 class="why-title">Fast Services</h4>
                    <p class="why-desc">We ensure rapid implementation, seamless deployment, and dedicated support to help your organization achieve operational efficiency without delays.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🔍</span>
                    <h4 class="why-title">Transparency</h4>
                    <p class="why-desc">Our ERP solutions provide complete visibility across all business processes, enabling better monitoring, reporting, and informed decision-making.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🤝</span>
                    <h4 class="why-title">Trustable</h4>
                    <p class="why-desc">Trusted by organizations across various industries, our ERP solutions are built with reliability, security, and long-term business growth in mind.</p>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Key Aspects - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Aspects of ERP Systems</h2>
            <div class="accordion service-accordion" id="erpAspects" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#erp1" aria-expanded="true">Functionality</button></h2>
                    <div id="erp1" class="accordion-collapse collapse show" data-bs-parent="#erpAspects">
                        <div class="accordion-body"><p>A robust ERP system provides features that align with specific industry requirements and business objectives, ensuring streamlined operations across departments.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erp2">Integration</button></h2>
                    <div id="erp2" class="accordion-collapse collapse" data-bs-parent="#erpAspects">
                        <div class="accordion-body"><p>ERP integrates multiple business functions such as finance, inventory, human resources, procurement, sales, and customer management into a unified platform. This integration ensures real-time data availability, eliminates information silos, and enhances collaboration across the organization.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erp3">Scalability</button></h2>
                    <div id="erp3" class="accordion-collapse collapse" data-bs-parent="#erpAspects">
                        <div class="accordion-body"><p>A quality ERP system is designed to grow with your business. It can accommodate increasing data volumes, additional users, and expanded functionalities without compromising performance.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erp4">Data Accuracy & Security</button></h2>
                    <div id="erp4" class="accordion-collapse collapse" data-bs-parent="#erpAspects">
                        <div class="accordion-body"><p>Reliable ERP solutions ensure data accuracy and integrity through advanced validation mechanisms, role-based access controls, encryption, and secure data management practices.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erp5">Performance & Reliability</button></h2>
                    <div id="erp5" class="accordion-collapse collapse" data-bs-parent="#erpAspects">
                        <div class="accordion-body"><p>High-performing ERP systems deliver consistent performance, minimize downtime, and ensure uninterrupted business operations through reliable infrastructure and optimized architecture.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erp6">Training & Documentation</button></h2>
                    <div id="erp6" class="accordion-collapse collapse" data-bs-parent="#erpAspects">
                        <div class="accordion-body"><p>Comprehensive training resources, user guides, and documentation help organizations maximize system adoption and empower users to utilize the ERP platform effectively.</p></div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Features</h2>
            <div class="accordion service-accordion" id="erpFeatures" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#erpf1" aria-expanded="true">Introduction to ERP</button></h2>
                    <div id="erpf1" class="accordion-collapse collapse show" data-bs-parent="#erpFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Definition and purpose of ERP systems.</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Understanding how ERP software works.</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Benefits of implementing ERP within an organization.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erpf2">Key Features of ERP</button></h2>
                    <div id="erpf2" class="accordion-collapse collapse" data-bs-parent="#erpFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Centralized Database</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Workflow Automation</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Real-Time Reporting & Analytics</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Multi-Department Integration</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Role-Based Access Control</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Dashboard & MIS Reports</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erpf3">ERP Implementation</button></h2>
                    <div id="erpf3" class="accordion-collapse collapse" data-bs-parent="#erpFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Requirement Analysis</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>System Configuration</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Data Migration</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>User Training</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Go-Live Support</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Continuous Maintenance</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erpf4">Functional ERP Modules</button></h2>
                    <div id="erpf4" class="accordion-collapse collapse" data-bs-parent="#erpFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Finance & Accounting</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Human Resource Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Inventory & Procurement</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Sales & Customer Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Production Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Asset Management</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erpf5">Integration & Data Management</button></h2>
                    <div id="erpf5" class="accordion-collapse collapse" data-bs-parent="#erpFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Third-Party Integrations</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>API Connectivity</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Data Synchronization</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Centralized Information Management</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erpf6">Mobile ERP</button></h2>
                    <div id="erpf6" class="accordion-collapse collapse" data-bs-parent="#erpFeatures">
                        <div class="accordion-body"><p>Access critical business information anytime, anywhere through secure mobile applications, enabling remote workforce management and decision-making.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#erpf7">Case Studies & Success Stories</button></h2>
                    <div id="erpf7" class="accordion-collapse collapse" data-bs-parent="#erpFeatures">
                        <div class="accordion-body"><p>Discover how organizations have transformed their operations, improved productivity, and achieved business growth through ERP implementation.</p></div>
                    </div>
                </div>
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
            alt="image">Call to Action <img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Ready to Transform Your Business?</h2>
        <p class="cta-section__dec">Experience the power of our ERP solutions. Schedule a personalized demo with our experts today.</p>
    </div>
    <div class="cta-section__btn d-flex justify-content-center">
        <a href="{{ route('contact-us') }}" class="rr-btn">
        <span class="btn-wrap">
            <span class="text-one">Book a Demo</span>
            <span class="text-two">Book a Demo</span>
        </span>
        </a>
    </div>
    </div>
</div>
</section>

@endsection
