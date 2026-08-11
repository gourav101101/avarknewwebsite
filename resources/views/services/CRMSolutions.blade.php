@extends('layouts.app')

@section('title', 'CRM Solutions')
@section('meta_description', 'CRM Solutions')
@section('meta_keywords', 'home, CRM Solutions')

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
        <li> CRM Solutions</li>
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
        <img src="assets/imgs/inner/service-detils/crm-services-kp.png" alt="img">
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
            <img src="{{ asset('assets/imgs/inner/service-detils/Solution-PNG.png') }}" alt="CRM Solutions">
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">CRM System</h2>

            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>A Customer Relationship Management (CRM) system is a software solution designed to manage and improve interactions with customers, prospects, and business partners.</p>
                <p>CRM acts as a centralized platform to store, track, and analyze customer information, enabling organizations to build stronger relationships, improve customer satisfaction, and drive sustainable business growth.</p>
                <p>By providing a complete view of customer interactions, CRM systems help businesses deliver personalized experiences, improve communication, and increase operational efficiency.</p>
            </div>

            <!-- Why Choose Us - Card Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Why Choose Our CRM Solutions?</h2>
            <div class="service-why-cards" data-aos="fade-up" data-aos-duration="900">
                <div class="service-why-card">
                    <span class="why-icon">⚡</span>
                    <h4 class="why-title">Fast Services</h4>
                    <p class="why-desc">We provide quick implementation, seamless deployment, and dedicated support to help businesses streamline customer management and accelerate growth.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🔍</span>
                    <h4 class="why-title">Transparency</h4>
                    <p class="why-desc">Our CRM solutions offer complete visibility into customer interactions, sales pipelines, and business performance, ensuring informed decision-making.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🤝</span>
                    <h4 class="why-title">Trustable</h4>
                    <p class="why-desc">Trusted by businesses across industries, our CRM platform is built to strengthen customer relationships while ensuring data security and reliability.</p>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Key Aspects - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Aspects of CRM Systems</h2>
            <div class="accordion service-accordion" id="crmAspects" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#crm1" aria-expanded="true">Customer Data Management</button></h2>
                    <div id="crm1" class="accordion-collapse collapse show" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>Efficiently store, organize, and manage customer information, including:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Contact details</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Purchase history</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Communication records</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Customer preferences</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Interaction history</span></li>
                            </ul>
                            <p>A centralized customer database enables quick access to information and improves collaboration across teams.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crm2">Sales Automation</button></h2>
                    <div id="crm2" class="accordion-collapse collapse" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>Streamline sales processes by managing:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Leads and prospects</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Opportunities and deals</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Sales pipelines</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Follow-ups and reminders</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Quotation and proposal management</span></li>
                            </ul>
                            <p>Sales automation helps improve productivity and increases conversion rates.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crm3">Marketing Automation</button></h2>
                    <div id="crm3" class="accordion-collapse collapse" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>Create, manage, and execute targeted marketing campaigns with features such as:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Email marketing</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Campaign management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Audience segmentation</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Lead nurturing</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Marketing analytics</span></li>
                            </ul>
                            <p>Marketing automation enables businesses to engage customers more effectively and improve campaign performance.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crm4">Customer Service & Support</button></h2>
                    <div id="crm4" class="accordion-collapse collapse" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>Deliver exceptional customer experiences by efficiently handling:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Customer inquiries</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Complaint management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Ticketing and issue resolution</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Service requests</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Customer feedback</span></li>
                            </ul>
                            <p>A robust CRM system ensures timely support and improved customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crm5">Reporting & Analytics</button></h2>
                    <div id="crm5" class="accordion-collapse collapse" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>Generate meaningful insights from customer data through:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Sales reports</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Customer behavior analysis</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Performance dashboards</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Revenue forecasting</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Business intelligence reports</span></li>
                            </ul>
                            <p>Advanced analytics support better decision-making and strategic planning.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crm6">Improved Customer Relationships</button></h2>
                    <div id="crm6" class="accordion-collapse collapse" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>CRM systems help organizations better understand customer needs, preferences, and behaviors, enabling personalized interactions and stronger long-term relationships.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crm7">Increased Sales</button></h2>
                    <div id="crm7" class="accordion-collapse collapse" data-bs-parent="#crmAspects">
                        <div class="accordion-body">
                            <p>By improving sales efficiency, managing opportunities effectively, and identifying cross-selling and upselling opportunities, CRM systems contribute significantly to revenue growth.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Features</h2>
            <div class="accordion service-accordion" id="crmFeatures" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#crmf1" aria-expanded="true">Introduction to CRM</button></h2>
                    <div id="crmf1" class="accordion-collapse collapse show" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Definition and importance of CRM systems.</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Understanding the role of CRM in modern businesses.</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>How CRM enhances customer engagement and business relationships.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crmf2">Key Features of CRM</button></h2>
                    <div id="crmf2" class="accordion-collapse collapse" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Customer Database Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Lead & Opportunity Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Sales Pipeline Tracking</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Marketing Automation</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Task & Activity Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Customer Support Management</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Reporting & Dashboards</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crmf3">CRM Implementation</button></h2>
                    <div id="crmf3" class="accordion-collapse collapse" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Business Requirement Analysis</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>CRM Configuration & Customization</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Data Migration</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>User Training</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Deployment & Go-Live</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Ongoing Support & Maintenance</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crmf4">CRM and Marketing</button></h2>
                    <div id="crmf4" class="accordion-collapse collapse" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <p>CRM enables organizations to create personalized marketing campaigns, track customer engagement, and measure campaign effectiveness for better marketing ROI.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crmf5">CRM and Sales</button></h2>
                    <div id="crmf5" class="accordion-collapse collapse" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <p>CRM improves sales performance through lead management, pipeline visibility, sales forecasting, and automated follow-up processes.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crmf6">CRM and Customer Service</button></h2>
                    <div id="crmf6" class="accordion-collapse collapse" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <p>Provide exceptional customer support through case management, ticket tracking, service automation, and customer interaction history.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crmf7">Integration & Data Security</button></h2>
                    <div id="crmf7" class="accordion-collapse collapse" data-bs-parent="#crmFeatures">
                        <div class="accordion-body">
                            <p>CRM systems integrate seamlessly with existing business applications while ensuring data protection through:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Role-Based Access Control</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Secure Data Encryption</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Regular Data Backup</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>Compliance & Audit Trails</span></li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i><span>API Integrations</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Benefits - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Benefits of CRM</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Improved Customer Relationships</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Increased Customer Retention</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Enhanced Sales Performance</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Better Team Collaboration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Increased Productivity</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Data-Driven Decision Making</span>
            </div>

            <!-- Types - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Types of CRM Systems</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Operational CRM</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Analytical CRM</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Collaborative CRM</span>
                <span class="service-feature-badge"><i class="fa-solid fa-circle-check" style="color: #0b5edd;"></i> Strategic CRM</span>
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
        <p class="cta-section__dec">Experience how our CRM solution can transform your customer relationships and accelerate business growth. Schedule a personalized demo today.</p>
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
