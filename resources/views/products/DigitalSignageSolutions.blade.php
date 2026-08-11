@extends('layouts.app')

@section('title', 'Digital Signage Solutions')
@section('meta_description', 'Digital Signage Solutions')
@section('meta_keywords', 'home, Digital Signage Solutions')

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
          <li> Digital Signage Solutions </li>
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
              <li><a href="{{route('feedback-management')}}">Feedback Management</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('business-marketing-tool')}}">Business Marketing Tool</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('inventory-stock-management')}}">Inventory or Stock Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('dialysis-management')}}">Dialysis Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('business-marketing-tool')}}">Business Marketing Tool</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('opd-management-system')}}">OPD Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
            <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Digital Signage Solutions</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Engage. Inform. Inspire — In Real Time.</h2>

            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Transform the way you communicate with customers, employees, and visitors through powerful Digital Signage Solutions. Manage and display dynamic content across screens, locations, and devices from a centralized cloud-based platform.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Deliver impactful visual communication anytime, anywhere.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Why Digital Signage?</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-3 mb-5" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-primary bg-opacity-10">
                        <div class="mb-3 text-primary fs-1"><i class="fa-solid fa-bullhorn"></i></div>
                        <h5 class="card-title text-dark">Enhanced Visibility</h5>
                        <p class="card-text desc small">Capture attention and strengthen brand recall with dynamic visuals.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-satellite-dish"></i></div>
                        <h5 class="card-title text-dark">Real-Time Comms</h5>
                        <p class="card-text desc small">Instantly broadcast announcements, news, or emergency alerts.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-gamepad"></i></div>
                        <h5 class="card-title text-dark">Measurable Engagement</h5>
                        <p class="card-text desc small">Drive interactivity and keep audiences engaged effortlessly.</p>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Core Capabilities</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/machine_kiosk_1783400298207.png" class="card-img-top" alt="Cloud Management" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-cloud-arrow-up me-2"></i> Cloud-Based Management</h5>
                            <p class="card-text desc small">Centralized control and automated scheduling. Manage content across multiple locations without manual intervention.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/cloud_server_1783400149336.png" class="card-img-top" alt="Media Automation" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-photo-film me-2"></i> Media Scheduling & Automation</h5>
                            <p class="card-text desc small">Supports image, video, and live feed scheduling. Display the right message at the right time seamlessly.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Comprehensive Features</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-cloud me-2"></i>Cloud-Based CM</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-bolt me-2"></i>Real-Time Updates</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-tv me-2"></i>Multi-Screen Support</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-video me-2"></i>Video & Live Feeds</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-chart-line me-2"></i>Display Analytics</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-shield-halved me-2"></i>Role-Based Access</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-satellite-dish me-2"></i>Remote Monitoring</span>
            </div>
            
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Whether for marketing, information display, or corporate communication — our platform ensures seamless content delivery and high visibility.</p>
        
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
        <h2 class="title rr-title-anim-1 white">Ready to Upgrade Your Visual Communication? </h2>
        <p class="cta-section__dec">Modernize your communication strategy with smart digital signage. </p>
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
                What are Digital Signage Solutions?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Digital Signage Solutions are cloud-based platforms that allow businesses to display dynamic content such as advertisements, announcements, videos, dashboards, and promotions on digital screens. Content can be managed and updated remotely from a centralized dashboard.
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
                Can I manage multiple screens and locations from one system?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. The solution supports multi-screen and multi-location management. You can control, schedule, and update content across different branches or devices from a single centralized admin panel.
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
                What type of content can be displayed on digital signage?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                The platform supports various content formats including images, videos, slideshows, live feeds, scrolling text, and real-time data dashboards. You can also schedule content to display at specific times or dates.
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

