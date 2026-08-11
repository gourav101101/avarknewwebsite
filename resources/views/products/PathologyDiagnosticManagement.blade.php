@extends('layouts.app')

@section('title', 'Pathology & Diagnostic Management System')
@section('meta_description', 'Pathology & Diagnostic Management System')
@section('meta_keywords', 'home, Pathology & Diagnostic Management System')

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
          <li> Pathology & Diagnostic Management System </li>
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
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Pathology & Diagnostic Management System</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Diagnostic Management Solution?</h2>

            <div class="row row-cols-1 row-cols-md-3 g-3 mt-3" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-warning bg-opacity-10">
                        <div class="mb-3 text-warning fs-1"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="card-title text-dark">Fast Services</h5>
                        <p class="card-text desc small">Rapid implementation to ensure uninterrupted laboratory operations and faster workflows.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <h5 class="card-title text-dark">Transparency</h5>
                        <p class="card-text desc small">Complete visibility into processes, sample tracking, reporting, and performance.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="card-title text-dark">Trustable</h5>
                        <p class="card-text desc small">Trusted by healthcare organizations for accurate, secure, and reliable lab management.</p>
                    </div>
                </div>
            </div>

            <p class="desc mt-5" data-aos="fade-up" data-aos-duration="900">A Pathology or Diagnostic Management System is a specialized software solution designed to streamline, automate, and optimize various processes and workflows within pathology laboratories and diagnostic centers.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">The system improves efficiency, accuracy, and productivity in diagnostic testing and reporting, enabling healthcare professionals to deliver timely and reliable diagnostic results.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Key Features</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/pathology_registration_samples.png?v=2" class="card-img-top" alt="Sample Collection" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-vial-virus me-2"></i> Registration & Samples</h5>
                            <p class="card-text desc small">Efficient patient registration and sample collection management with barcode generation and complete lifecycle tracking.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/pathology_tests_integration.png?v=2" class="card-img-top" alt="Test Analysis" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-microscope me-2"></i> Tests & Integration</h5>
                            <p class="card-text desc small">Order and schedule lab tests seamlessly. Automate test analysis and integrate directly with laboratory instruments to capture results.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/quality_report_1783402173893.png" class="card-img-top" alt="Quality" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-file-medical-alt me-2"></i> Quality & Reporting</h5>
                            <p class="card-text desc small">Maintain diagnostic excellence with quality control mechanisms. Automate report generation, digital delivery, and notifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/pathology_billing_compliance.png?v=2" class="card-img-top" alt="Billing" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-file-invoice-dollar me-2"></i> Billing & Compliance</h5>
                            <p class="card-text desc small">Automate lab billing, insurance, and financial reports. Protect healthcare information with robust security and role-based access.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Benefits & Workflow Automation</h2>
            <div class="accordion" id="accordionBenefits" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB1">
                        <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                            Accuracy & Efficiency
                        </button>
                    </h2>
                    <div id="collapseB1" class="accordion-collapse collapse show" aria-labelledby="headingB1" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Enhanced Accuracy:</strong> Automation reduces human errors and ensures reliable diagnostic results.<br><br>
                            <strong>Improved Efficiency:</strong> Streamlines operations, reduces paperwork, and minimizes manual processes.<br><br>
                            <strong>Fast Turnaround:</strong> Accelerates test processing and report generation for faster diagnosis.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB2">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                            Patient Care & Communication
                        </button>
                    </h2>
                    <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Improved Patient Care:</strong> Timely reports support clinicians in making informed treatment decisions.<br><br>
                            <strong>Customer Satisfaction:</strong> Better experience through faster services and accurate reporting.<br><br>
                            <strong>Effective Communication:</strong> Seamless communication between lab teams and healthcare providers.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB3">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                            Resource & Data Management
                        </button>
                    </h2>
                    <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Data Centralization:</strong> Consolidates patient records, samples, and results into a centralized platform.<br><br>
                            <strong>Resource Management:</strong> Optimizes utilization of reagents, instruments, staff, and consumables.<br><br>
                            <strong>Compliance & Security:</strong> Ensures secure management of data while maintaining healthcare regulations.
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Additional Features</h2>
            <div class="d-flex flex-wrap gap-2 mb-5" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-barcode me-2"></i>Barcode Integration</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-laptop-medical me-2"></i>Online Patient Portal</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-mobile-screen me-2"></i>Mobile Access App</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-boxes-stacked me-2"></i>Inventory Management</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-user-doctor me-2"></i>Doctor Referral</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-building me-2"></i>Multi-Location Support</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-cloud me-2"></i>Cloud & On-Premise</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-link me-2"></i>Third-Party Integrations</span>
            </div>

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
</section>

@include('partials.brochure-download')

@endsection

