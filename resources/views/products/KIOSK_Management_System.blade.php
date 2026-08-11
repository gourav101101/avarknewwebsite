@extends('layouts.app')

@section('title', 'KIOSK Management System')
@section('meta_description', 'KIOSK Management System')
@section('meta_keywords', 'home, KIOSK Management System')

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
          <li> KIOSK Management System </li>
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
              <li><a href="{{route('hms')}}">Advance Hospital Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('feedback-management')}}">Feedback Management</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('business-marketing-tool')}}">Business Marketing Tool</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('inventory-stock-management')}}">Inventory or Stock Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('dialysis-management')}}">Dialysis Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('business-marketing-tool')}}">Business Marketing Tool</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('opd-management-system')}}">OPD Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('digital-signage-solutions')}}">Digital Signages </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
            <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">KIOSK Management System</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Smart Self-Service for Faster Patient Experience</h2>

            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Transform your hospital or clinic with our advanced KIOSK Management System. Enable patients to register, book appointments, make payments, and check reports through an easy-to-use self-service kiosk — reducing queues and improving operational efficiency.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Deliver faster service, minimize manual workload, and enhance patient satisfaction with intelligent automation.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Why Use Kiosks?</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-3 mb-5" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-primary bg-opacity-10">
                        <div class="mb-3 text-primary fs-1"><i class="fa-solid fa-stopwatch"></i></div>
                        <h5 class="card-title text-dark">Reduce Wait Time</h5>
                        <p class="card-text desc small">Patients bypass front desk lines for routine tasks.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-users-gear"></i></div>
                        <h5 class="card-title text-dark">Improve Productivity</h5>
                        <p class="card-text desc small">Staff can focus on critical healthcare responsibilities.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        <h5 class="card-title text-dark">Faster Payments</h5>
                        <p class="card-text desc small">Secure and rapid self-service billing and payments.</p>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Core Capabilities</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/machine_kiosk_1783400298207.png" class="card-img-top" alt="Digital Collection" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-clipboard-user me-2"></i> Registration & Booking</h5>
                            <p class="card-text desc small">Self patient registration, appointment booking, and token generation. Digitizes front-desk operations entirely.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/security_lock_1783400190184.png" class="card-img-top" alt="Real-Time Analytics" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-file-invoice-dollar me-2"></i> Billing & Reports</h5>
                            <p class="card-text desc small">Handle OPD/IPD bill payments with secure gateway integration and provide instant access to lab report printing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Comprehensive Features</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-user-plus me-2"></i>Self Registration</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-calendar-check me-2"></i>Token & Booking</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-credit-card me-2"></i>Secure Payments</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-print me-2"></i>Report Printing</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-language me-2"></i>Multi-Language</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-hand-pointer me-2"></i>Touch Interface</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-server me-2"></i>Real-Time HMS Sync</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-id-card me-2"></i>Aadhaar/QR Login</span>
            </div>
            
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">From OPD registrations to bill payments, token generation to report downloads — everything becomes smooth, quick, and paperless.</p>
        
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

<section class="cta-section__area">
  <div class="container rr-container-1350">
    <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
      <div class="section-title-3__wrapper tx-center">
        <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
            alt="image">Connect With Us <img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Ready to Digitize Your Front Desk?</h2>
        <p class="cta-section__dec">Experience the power of smart self-service technology.</p>
      </div>
      <div class="cta-section__btn">
        <a href="{{ route ('contact-us') }}" class="rr-btn">
          <span class="btn-wrap">
            <span class="text-one">Request a Demo</span>
            <span class="text-two">Request a Demo</span>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="cta-section__area py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">

        <div class="accordion" id="accordionExample">

          <!-- Item 1 -->
          <div class="accordion-item mb-3 border-0 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="false"
                aria-controls="collapseOne">
                What is a KIOSK Management System and how does it work?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                A KIOSK Management System is a self-service digital solution that allows patients to perform tasks such as registration, appointment booking, bill payments, token generation, and report access without staff assistance. It integrates directly with your Hospital Management System (HMS) to update data in real-time and ensure smooth hospital operations.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item mb-3 border-0 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo">
                Is the KIOSK system secure for patient data and payments?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. Our KIOSK Management System uses secure data encryption and integrates with trusted payment gateways to ensure safe transactions. Patient information is protected and compliant with healthcare data security standards.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item border-0 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree">
                Can the KIOSK system be customized for my hospital?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Absolutely. The system is fully customizable based on your hospital’s workflow, language preferences, branding, and service requirements. It can be configured for single-location clinics or multi-branch hospitals.
              </div>
            </div>
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
  </div>
</section>






@include('partials.brochure-download')

@endsection

