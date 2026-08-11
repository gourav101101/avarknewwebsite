@extends('layouts.app')

@section('title', 'Feedback Management')
@section('meta_description', 'Feedback Management')
@section('meta_keywords', 'home, Feedback Management')

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
          <li> Feedback Management</li>
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
              <li><a href="{{route('kiosk-management-system')}}">KIOSK Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
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
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Feedback Management System</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Turn Patient Feedback into Actionable Insights</h2>

            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Improve service quality and strengthen patient trust with Avark Feedback Management. Collect, monitor, and analyze real-time feedback to enhance patient experience and operational performance.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Understand what your patients truly feel — and take smarter decisions backed by data.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Why Choose Feedback Management?</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-3 mb-5" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-primary bg-opacity-10">
                        <div class="mb-3 text-primary fs-1"><i class="fa-solid fa-face-smile"></i></div>
                        <h5 class="card-title text-dark">Improve Experience</h5>
                        <p class="card-text desc small">Directly capture and address patient concerns to boost satisfaction.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-chart-pie"></i></div>
                        <h5 class="card-title text-dark">Data-Driven</h5>
                        <p class="card-text desc small">Make smarter operational decisions backed by real patient feedback data.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-users-gear"></i></div>
                        <h5 class="card-title text-dark">Accountability</h5>
                        <p class="card-text desc small">Increase staff accountability through department and doctor-wise ratings.</p>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Core Capabilities</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/user_management_1783400202674.png" class="card-img-top" alt="Digital Collection" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-mobile-screen-button me-2"></i> Digital Collection</h5>
                            <p class="card-text desc small">Collect feedback seamlessly via QR Codes, Kiosks, SMS, or Web Links. Move entirely beyond paper forms.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/analytics_dashboard_1783400138562.png" class="card-img-top" alt="Real-Time Analytics" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-chart-line me-2"></i> Real-Time Analytics</h5>
                            <p class="card-text desc small">Get real-time responses, instant alerts for low ratings, and comprehensive performance insights in a smart dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Comprehensive Features</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-qrcode me-2"></i>QR / Kiosk / SMS</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-building me-2"></i>Dept-Wise Tracking</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-user-doctor me-2"></i>Doctor Ratings</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-chart-pie me-2"></i>Live Dashboard</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-file-pen me-2"></i>Custom Templates</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-language me-2"></i>Multi-Language</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-bell me-2"></i>Instant Alerts</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-shield-halved me-2"></i>Secure Data</span>
            </div>
            
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Whether it’s OPD, IPD, pharmacy, laboratory, or billing — measure satisfaction levels and identify improvement areas instantly.</p>
        
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
        <h2 class="title rr-title-anim-1 white">Ready to Elevate Patient Satisfaction?</h2>
        <p class="cta-section__dec">Start transforming feedback into measurable growth.</p>
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
                What is Avark Feedback Management?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Avark Feedback Management is a digital solution that helps hospitals and healthcare organizations collect, monitor, and analyze patient feedback in real time. It enables management to identify service gaps, improve patient satisfaction, and make data-driven decisions.
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
                How is feedback collected through this product?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Feedback can be collected through multiple channels such as QR codes, kiosks, SMS links, tablets, or web forms. Patients can easily rate their experience across departments like OPD, IPD, pharmacy, laboratory, and billing, ensuring structured and measurable insights.
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
                Can feedback reports be customized for our hospital?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. Avark Feedback Management allows fully customizable feedback forms, rating parameters, and performance reports. You can generate department-wise, doctor-wise, or monthly reports based on your hospital’s requirements.
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

