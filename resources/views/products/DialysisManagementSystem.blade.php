@extends('layouts.app')

@section('title', 'Dialysis Management System')
@section('meta_description', 'Dialysis Management System')
@section('meta_keywords', 'home, Dialysis Management System')

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
          <li> Dialysis Management System </li>
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
        <div class="service-details__content">            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Dialysis Management System</h2>
            
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Dialysis Management Solution?</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-3 mt-3" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-warning bg-opacity-10">
                        <div class="mb-3 text-warning fs-1"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="card-title text-dark">Fast Services</h5>
                        <p class="card-text desc small">Rapid implementation and seamless deployment to ensure uninterrupted dialysis operations.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <h5 class="card-title text-dark">Transparency</h5>
                        <p class="card-text desc small">Complete visibility into treatments, patient progress, clinical workflows, and performance.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="card-title text-dark">Trustable</h5>
                        <p class="card-text desc small">Trusted by hospitals and centers for secure, accurate, and reliable care management.</p>
                    </div>
                </div>
            </div>

            <p class="desc mt-5" data-aos="fade-up" data-aos-duration="900">A Dialysis Management System is a specialized healthcare software solution designed to streamline and automate the various processes involved in managing dialysis treatment for patients suffering from kidney failure or chronic kidney disease (CKD).</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">The system is widely used in hospitals, nephrology departments, and dialysis centers to improve operational efficiency, ensure accurate treatment administration, and enhance the quality of patient care.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">By digitizing dialysis workflows, healthcare providers can effectively monitor treatment progress, improve patient safety, and deliver high-quality dialysis services.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Key Features</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/dialysis_patient_management.png?v=2" class="card-img-top" alt="Patient Management" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-bed-pulse me-2"></i> Patient & Treatment Management</h5>
                            <p class="card-text desc small">Centralized patient registry, prescription tracking, and protocol adherence monitoring. Easily track medical history, demographics, and clinical documentation in one place.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/dialysis_medical_charting.png?v=2" class="card-img-top" alt="Medical Charting" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-chart-line me-2"></i> Medical Charting & Fluid Balance</h5>
                            <p class="card-text desc small">Real-time charting of vital signs, weight, BP, and temperature. Track fluid intake and output for effective fluid management and risk reduction.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/dialysis_medication.png?v=2" class="card-img-top" alt="Medication Management" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-pills me-2"></i> Medication & Documentation</h5>
                            <p class="card-text desc small">Safely manage IV medications, schedules, and dosages. Digitally document real-time clinical events, nursing observations, and adverse reactions.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/dialysis_labs_calculations.png?v=2" class="card-img-top" alt="Lab & Decision Support" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-flask me-2"></i> Labs, Calculations & CDS</h5>
                            <p class="card-text desc small">Automate Kt/V and URR calculations, seamlessly integrate lab results, and utilize clinical decision support alerts for critical patient conditions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Benefits & Security</h2>
            <div class="accordion" id="accordionBenefits" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB1">
                        <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                            Patient Safety & Care Quality
                        </button>
                    </h2>
                    <div id="collapseB1" class="accordion-collapse collapse show" aria-labelledby="headingB1" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Improved Safety:</strong> Accurate treatment administration and timely intervention.<br><br>
                            <strong>Higher Quality of Care:</strong> Standardized protocols and evidence-based clinical decisions improve patient outcomes.<br><br>
                            <strong>Patient Empowerment:</strong> Patient portals for accessing schedules, lab reports, and educational materials.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB2">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                            Operational Efficiency
                        </button>
                    </h2>
                    <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Enhanced Efficiency:</strong> Automates routine workflows, significantly reducing documentation time.<br><br>
                            <strong>Real-Time Monitoring:</strong> Instant visibility into patient conditions across the center.<br><br>
                            <strong>Resource Management:</strong> Optimize the usage of dialysis machines, staff, consumables, and treatment resources.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB3">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                            Compliance & Data Security
                        </button>
                    </h2>
                    <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Clinical Compliance:</strong> Supports adherence to regulatory standards and nephrology best practices.<br><br>
                            <strong>Data Security:</strong> Role-based access, data encryption, audit trails, and secure authentication protect sensitive PHI.
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Additional Features</h2>
            <div class="d-flex flex-wrap gap-2 mb-5" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-calendar-check me-2"></i>Scheduling</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-clock-rotate-left me-2"></i>Session Planning</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-server me-2"></i>Machine Allocation</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-user-nurse me-2"></i>Nursing Workflow</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-box-open me-2"></i>Inventory</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-laptop-medical me-2"></i>EMR Integration</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-file-invoice-dollar me-2"></i>Billing & Finance</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-building me-2"></i>Multi-Center Support</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-cloud me-2"></i>Cloud & On-Premise</span>
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
            </div></div>
      </div>
    </div>
  </div>
</section>

@include('partials.brochure-download')

@endsection

