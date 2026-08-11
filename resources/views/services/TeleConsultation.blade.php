@extends('layouts.app')

@section('title', 'Tele-Consultation')
@section('meta_description', 'Tele-Consultation Services')
@section('meta_keywords', 'home, Tele-Consultation, Telemedicine')

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
        <li> Tele-Consultation </li>
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
        <img src="assets/imgs/inner/service-detils/Solution-PNG.png" alt="img" class="img-fluid" style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
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
            <li><a href="{{ route('web-application-development') }}">Web Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('mobile-app-development') }}">Application Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('digital-healthcare-solution') }}">Digital Healthcare Solutions</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('tele-consultation') }}">Tele-Consultation</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('cms') }}">Content Management System (CMS)</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Tele-Consultation</h2>

            <!-- Why Choose Us - Card Grid -->
            <h2 class="service-compact-title mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Tele-Consultation Solutions?</h2>
            <div class="service-why-cards" data-aos="fade-up" data-aos-duration="900">
                <div class="service-why-card">
                    <span class="why-icon">⚡</span>
                    <h4 class="why-title">Fast Services</h4>
                    <p class="why-desc">We provide quick and seamless implementation of tele-consultation platforms, enabling healthcare organizations to deliver virtual care efficiently.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🔍</span>
                    <h4 class="why-title">Transparency</h4>
                    <p class="why-desc">Our telehealth solutions ensure transparent communication between patients and healthcare providers while maintaining complete consultation records.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🤝</span>
                    <h4 class="why-title">Trustable</h4>
                    <p class="why-desc">Trusted by healthcare professionals, our secure tele-consultation platform delivers reliable, patient-centric, and compliant virtual healthcare services.</p>
                </div>
            </div>

            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>Tele-consultation, also known as telemedicine or virtual consultation, is a healthcare service that enables patients to consult healthcare professionals remotely using digital technologies such as video calls, audio calls, and secure messaging platforms.</p>
                <p>It allows patients and doctors to interact without requiring physical visits, providing convenient access to medical advice, diagnosis, treatment, and follow-up care from virtually anywhere.</p>
                <p>Tele-consultation bridges the gap between patients and healthcare providers, making healthcare more accessible, efficient, and patient-focused.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Key Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Features of Tele-Consultation</h2>
            <div class="accordion service-accordion" id="tcFeatures" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tc1" aria-expanded="true">Real-Time Communication</button></h2>
                    <div id="tc1" class="accordion-collapse collapse show" data-bs-parent="#tcFeatures">
                        <div class="accordion-body">
                            <p>Tele-consultation platforms facilitate real-time communication between patients and healthcare professionals through:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Video Consultations</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Audio Calls</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Secure Chat Messaging</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Virtual Follow-Up Sessions</span></li>
                            </ul>
                            <p>Real-time interactions enable timely medical advice and improved patient engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tc2">Convenience & Accessibility</button></h2>
                    <div id="tc2" class="accordion-collapse collapse" data-bs-parent="#tcFeatures">
                        <div class="accordion-body">
                            <p>Patients can access healthcare services from any location, reducing the need to travel to hospitals or clinics.</p>
                            <p>Benefits include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Anytime, Anywhere Access</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Reduced Travel Time</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Increased Healthcare Accessibility</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Improved Access for Rural Areas</span></li>
                            </ul>
                            <p>This enhances patient convenience and ensures continuity of care.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tc3">Privacy & Security</button></h2>
                    <div id="tc3" class="accordion-collapse collapse" data-bs-parent="#tcFeatures">
                        <div class="accordion-body">
                            <p>Patient data confidentiality and security are fundamental components of tele-consultation platforms.</p>
                            <p>Security measures include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Secure Video Sessions</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Data Encryption</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Role-Based Access Control</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Secure Authentication</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Compliance with Healthcare Regulations</span></li>
                            </ul>
                            <p>These measures ensure that sensitive patient information remains protected.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tc4">Reduced Waiting Times</button></h2>
                    <div id="tc4" class="accordion-collapse collapse" data-bs-parent="#tcFeatures">
                        <div class="accordion-body">
                            <p>Tele-consultation significantly reduces patient waiting times by allowing appointments to be scheduled according to patient and physician availability.</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Faster Access to Healthcare</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Reduced Appointment Delays</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Improved Resource Utilization</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Better Patient Satisfaction</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tc5">Prescription & Referrals</button></h2>
                    <div id="tc5" class="accordion-collapse collapse" data-bs-parent="#tcFeatures">
                        <div class="accordion-body">
                            <p>Healthcare professionals can:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Issue Digital Prescriptions</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Provide Medical Advice</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Recommend Diagnostic Tests</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Refer Patients to Specialists</span></li>
                            </ul>
                            <p>This streamlines the healthcare journey and improves care coordination.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tc6">Follow-Up Appointments</button></h2>
                    <div id="tc6" class="accordion-collapse collapse" data-bs-parent="#tcFeatures">
                        <div class="accordion-body">
                            <p>Patients can conveniently attend follow-up consultations after treatment, hospitalization, or surgery without visiting healthcare facilities physically.</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Continuous Care</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Better Treatment Adherence</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Improved Recovery Monitoring</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Enhanced Patient Convenience</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Use Cases - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Tele-Consultation Use Cases</h2>
            <div class="accordion service-accordion" id="tcUseCases" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tcu1" aria-expanded="true">Primary Care Consultations</button></h2>
                    <div id="tcu1" class="accordion-collapse collapse show" data-bs-parent="#tcUseCases">
                        <div class="accordion-body"><p>Routine health check-ups, medication reviews, preventive care, and minor health concerns can be effectively managed through virtual consultations.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tcu2">Chronic Disease Management</button></h2>
                    <div id="tcu2" class="accordion-collapse collapse" data-bs-parent="#tcUseCases">
                        <div class="accordion-body">
                            <p>Tele-consultation supports continuous monitoring and management of chronic diseases such as:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Diabetes</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Hypertension</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Heart Disease</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Asthma</span></li>
                            </ul>
                            <p>Regular virtual consultations help improve patient outcomes and treatment compliance.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tcu3">Mental Health Support</button></h2>
                    <div id="tcu3" class="accordion-collapse collapse" data-bs-parent="#tcUseCases">
                        <div class="accordion-body">
                            <p>Tele-consultation provides an accessible and comfortable platform for:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Mental Health Counseling</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Therapy Sessions</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Psychological Support</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Behavioral Health Management</span></li>
                            </ul>
                            <p>Virtual mental healthcare improves accessibility and reduces stigma.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tcu4">Remote Areas & Emergencies</button></h2>
                    <div id="tcu4" class="accordion-collapse collapse" data-bs-parent="#tcUseCases">
                        <div class="accordion-body">
                            <p>Tele-consultation is particularly beneficial in:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Rural and Remote Locations</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Areas with Limited Healthcare Access</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Public Health Emergencies</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Natural Disasters</span></li>
                            </ul>
                            <p>It ensures uninterrupted healthcare delivery when physical access is limited.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Benefits - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Benefits of Tele-Consultation</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Improved Access to Healthcare</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Enhanced Patient Convenience</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Reduced Travel and Waiting Times</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Better Care Continuity</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Increased Patient Engagement</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Efficient Chronic Disease Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Healthcare Accessibility for Rural Areas</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Reduced Operational Costs</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Secure Virtual Care</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Enhanced Patient Satisfaction</span>
            </div>
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>Tele-consultation complements traditional healthcare delivery by enabling efficient, accessible, and patient-centered care while reducing barriers to healthcare access.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Platform Features - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Platform Features</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Secure Video Consultation</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Audio Consultation</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Chat-Based Consultation</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Online Appointment Scheduling</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Electronic Prescription Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Patient Health Records Access</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Follow-Up Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Notification & Reminder System</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Doctor Availability Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Multi-Device Accessibility</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Secure Data Storage</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Analytics & Reporting</span>
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
            alt="image">Book a Demo<img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Experience the future of virtual healthcare.</h2>
        <p class="cta-section__dec">Schedule a personalized demo and discover how our Tele-Consultation platform can transform patient care delivery.</p>
    </div>
    <div class="cta-section__btn">
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
