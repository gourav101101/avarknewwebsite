@extends('layouts.app')

@section('title', 'ARK HIMS – Hospital Management Software')
@section('meta_description', 'ARK HIMS – Hospital Management Software')
@section('meta_keywords', 'home, Advance Hospital Management System')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
  <div class=" container rr-container-1900">
    <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
      <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title">Products</h3>
        <ul class="breadcrumb-section__page">
          <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
          <li> Products <i class="fa-regular fa-angle-right"></i> </li>
          <li> Advance HMS </li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-section__border"></div>
  </div>
</section>

<section class="service-details section-spacing">
  <div class="container rr-container-1350">
    
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
          <h4 class="title">Product Categories</h4>
          <div class="service-details-sidebar-categories">
            <ul>
              <li><a href="{{route('hms')}}">Advance Hospital Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('inventory-stock-management')}}">Inventory or Stock Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('dialysis-management')}}">Dialysis Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('enterprise-support-management')}}">Enterprise Support Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('business-marketing-tool')}}">Business Marketing Tool</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('opd-management-system')}}">OPD Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12">
        <div class="service-details__content">            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">ARK HIMS – Hospital Management Software</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Transforming Healthcare Through Intelligent Automation</h2>

            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">ARK Hospital Management Software (HIMS) is a comprehensive healthcare management platform designed to streamline, automate, and optimize administrative, clinical, financial, and operational processes within hospitals and healthcare facilities.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">The primary objective of ARK HIMS is to improve operational efficiency, enhance patient care, reduce manual paperwork, minimize errors, and empower healthcare professionals to focus more on delivering quality healthcare services.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">ARK HIMS provides an integrated digital ecosystem that connects every department within a healthcare organization, ensuring seamless coordination, real-time information access, and better decision-making.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">ARK HIMS Core Features</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <!-- Feature Card 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/fingerprint_scan_1783402162195.png" class="card-img-top" alt="Registration" style="height: 200px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-fingerprint me-2"></i> Easy Fingerprint Registration</h5>
                            <p class="card-text desc small">Advanced biometric patient identification enabling hospitals to accurately identify patients using fingerprint and photo-based systems.</p>
                            <ul class="list-unstyled small mt-2">
                                <li><i class="fa-solid fa-check text-success me-1"></i> Faster Registration</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Accurate Identification</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Reduced Duplicates</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/machine_kiosk_1783400298207.png" class="card-img-top" alt="Self-Service Kiosk" style="height: 200px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-tablet-screen-button me-2"></i> Self-Service Kiosk</h5>
                            <p class="card-text desc small">Hospital kiosks simplify patient registration and administrative processes while significantly reducing waiting times.</p>
                            <ul class="list-unstyled small mt-2">
                                <li><i class="fa-solid fa-check text-success me-1"></i> Faster Check-In</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Reduced Workload</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Contactless Services</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/queue_management_system.png" class="card-img-top" alt="Queue Management" style="height: 200px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-users-line me-2"></i> Queue Management System</h5>
                            <p class="card-text desc small">An intelligent queue management system that optimizes patient flow and reduces waiting times across departments.</p>
                            <ul class="list-unstyled small mt-2">
                                <li><i class="fa-solid fa-check text-success me-1"></i> Digital Queue Monitoring</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Real-Time Notifications</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Improved OPD Efficiency</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 4 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/advanced_analytics_reports.png?v=2" class="card-img-top" alt="Advanced Reports" style="height: 200px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-chart-line me-2"></i> Advanced Analytics & Reports</h5>
                            <p class="card-text desc small">Generate comprehensive financial, operational, and statistical reports that provide valuable insights into operations.</p>
                            <ul class="list-unstyled small mt-2">
                                <li><i class="fa-solid fa-check text-success me-1"></i> Financial Analysis</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Department Performance</li>
                                <li><i class="fa-solid fa-check text-success me-1"></i> Better Decision Making</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Additional Capabilities</h2>
            
            <div class="accordion" id="accordionCapabilities" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Clinical & Medical Records
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionCapabilities">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Visual EMR:</strong> Specialty-wise Electronic Medical Records with visual case sheets for follow-up visits, patient history, and diagnoses.<br><br>
                            <strong>ICD-10 Coding:</strong> Integrated coding for standardized recording and reporting of diseases.<br><br>
                            <strong>Laboratory Management:</strong> Sample registration, barcode generation, tracking, machine integration, and automated reporting.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Operational Management
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionCapabilities">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Complete OT Management:</strong> OT scheduling, surgeon/anaesthetist allocation, calendar views, and rescheduling.<br><br>
                            <strong>Pharmacy Management:</strong> Ward requests, stock management, prescription processing, daily collections, and FSN analysis.<br><br>
                            <strong>Bed Management:</strong> Real-time bed availability, room transfers, maintenance tracking, and multiple tariff plans.<br><br>
                            <strong>Hospital Inventory:</strong> Stock monitoring, procurement, alerts, and FSN analysis to optimize costs.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Staff & Administration
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionCapabilities">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>HR & Payroll Management:</strong> Payroll processing, attendance, leave management, and HR reporting.<br><br>
                            <strong>User Management:</strong> Role-based access for doctors, nurses, receptionists, pharmacists, HR, and diagnostic staff.<br><br>
                            <strong>Doctor & Nursing Management:</strong> Dedicated interfaces for clinical documentation, prescriptions, and workflow optimization.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Compliance & Billing Integration
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionCapabilities">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>NABH / NABL / JCI / CAP:</strong> Support for implementing and maintaining healthcare accreditation standards.<br><br>
                            <strong>Scheme Integration:</strong> Support for ESIC, CGHS, and Ayushman Bharat.<br><br>
                            <strong>Mediclaim Management:</strong> Eligibility verification, claim processing, and reimbursement tracking.<br><br>
                            <strong>Discharge Summary:</strong> Template-based summaries with automated documentation and billing validation.
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Seamless Integrations</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary-subtle p-2 fs-6"><i class="fa-solid fa-flask me-2"></i>Laboratory Information Systems (LIS)</span>
                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle p-2 fs-6"><i class="fa-solid fa-images me-2"></i>PACS</span>
                <span class="badge bg-info bg-opacity-10 text-info border border-info-subtle p-2 fs-6"><i class="fa-solid fa-laptop-medical me-2"></i>Electronic Medical Records (EMR)</span>
                <span class="badge bg-warning bg-opacity-10 text-warning border border-warning-subtle p-2 fs-6"><i class="fa-solid fa-plug me-2"></i>Third-Party Applications</span>
            </div>

            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">By connecting people, processes, and technology, ARK HIMS empowers healthcare organizations to deliver superior patient care while achieving operational excellence.</p>
            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Let's Talk</h2>
            
            <div class="card border-0 shadow-sm p-4 bg-light bg-opacity-50" data-aos="fade-up" data-aos-duration="900">
                <div class="row g-4">
                    <div class="col-md-6">
                        <h5 class="text-primary"><i class="fa-solid fa-phone me-2"></i> Contact Information</h5>
                        <ul class="list-unstyled mt-3 lh-lg desc">
                            <li><strong>Mobile:</strong> <a href="tel:+917400920717" class="text-decoration-none">+91-7400920717</a>, <a href="tel:+919977699982" class="text-decoration-none">+91-9977699982</a></li>
                            <li><strong>Sales:</strong> <a href="mailto:sales@avark.in" class="text-decoration-none">sales@avark.in</a></li>
                            <li><strong>Support:</strong> <a href="mailto:support@avark.in" class="text-decoration-none">support@avark.in</a></li>
                        </ul>
                        
                        <h5 class="text-primary mt-4"><i class="fa-solid fa-share-nodes me-2"></i> Connect With Us</h5>
                        <div class="d-flex gap-3 mt-3">
                            <a href="#" class="fs-4 text-primary"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="fs-4 text-danger"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="fs-4 text-info"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="fs-4 text-success"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-primary"><i class="fa-solid fa-location-dot me-2"></i> Office Addresses</h5>
                        <ul class="list-unstyled mt-3 lh-lg desc">
                            <li><strong style="color: #000; font-weight: 700;">Indore:</strong> A-81, Vistara City, Indore - 452001, MP, India</li>
                            <li><strong style="color: #000; font-weight: 700;">Bangalore:</strong> No. 124, 2nd Cross, Nethravathi Street, Uday Nagar, Bengaluru - 560016, Karnataka, India</li>
                        </ul>
                    </div>
                </div>
            </div>
</div>
      </div>
    </div>
  </div>
</section>

@include('partials.brochure-download')

@endsection

