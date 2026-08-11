@extends('layouts.app')

@section('title', 'Business Marketing Tool')
@section('meta_description', 'Business Marketing Tool')
@section('meta_keywords', 'home, Business Marketing Tool')

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
          <li> Business Marketing Tool </li>
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
        <div class="service-details__content">            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Business Marketing Tool</h2>
            
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Business Marketing Tool?</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-3 mt-3" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-warning bg-opacity-10">
                        <div class="mb-3 text-warning fs-1"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="card-title text-dark">Fast Services</h5>
                        <p class="card-text desc small">Automate and simplify your marketing activities with a centralized and intelligent platform.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <h5 class="card-title text-dark">Transparency</h5>
                        <p class="card-text desc small">Gain complete visibility into campaigns, engagement, and performance from a single dashboard.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="card-title text-dark">Trustable</h5>
                        <p class="card-text desc small">Trusted by businesses to streamline marketing operations and improve customer engagement.</p>
                    </div>
                </div>
            </div>

            <p class="desc mt-5" data-aos="fade-up" data-aos-duration="900">Our Business Marketing Tool is a cloud-based solution designed to simplify, automate, and optimize your marketing activities with minimal effort.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">The platform connects seamlessly with digital screens, social media platforms, and customer engagement channels, enabling you to manage all activities from a centralized system.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Key Features</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/ark_cloud_content_feedback.png?v=2" class="card-img-top" alt="Content Management" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-layer-group me-2"></i> Content & Feedback Management</h5>
                            <p class="card-text desc small">Manage social media content, handle feedback, and monitor engagement from a single platform, eliminating the need for multiple systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/ark_cloud_social_media.png?v=2" class="card-img-top" alt="Social Media" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-hashtag me-2"></i> Social Media & Feeds</h5>
                            <p class="card-text desc small">Manage Facebook, Instagram, digital screens, and other connected channels directly to monitor your digital presence effortlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/ark_cloud_video_ad.png?v=2" class="card-img-top" alt="Video Management" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-film me-2"></i> Ad & Video Management</h5>
                            <p class="card-text desc small">Upload videos or broadcast live events, announcements, and promotions across connected displays to enhance customer engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/ark_cloud_multi_screen.png?v=2" class="card-img-top" alt="Multi-Screen" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-display me-2"></i> Multi-Screen Display</h5>
                            <p class="card-text desc small">Control content displayed across multiple screens at various business locations with centralized scheduling and remote updates.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Benefits</h2>
            <div class="accordion" id="accordionBenefits" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB1">
                        <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                            Cost & Efficiency
                        </button>
                    </h2>
                    <div id="collapseB1" class="accordion-collapse collapse show" aria-labelledby="headingB1" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Reduced Marketing Costs:</strong> Automating activities can reduce overall costs by up to 50%.<br><br>
                            <strong>Simplified Operations:</strong> Manage campaigns, displays, social media, and interactions all in one place.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB2">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                            Engagement & Visibility
                        </button>
                    </h2>
                    <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Increased Engagement:</strong> Deliver interactive content that strengthens brand loyalty.<br><br>
                            <strong>Improved Brand Visibility:</strong> Maintain a consistent, professional brand presence across all digital touchpoints.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB3">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                            Communication & Analytics
                        </button>
                    </h2>
                    <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Real-Time Communication:</strong> Instantly share announcements and offers with your audience.<br><br>
                            <strong>Better Decision-Making:</strong> Leverage feedback and analytics to optimize campaigns and business performance.
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Additional Features</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-calendar-check me-2"></i>Campaign Scheduling</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-share-square me-2"></i>Social Media Publishing</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-tv me-2"></i>Digital Signage</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-chart-pie me-2"></i>Feedback Analytics</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-check-double me-2"></i>Approval Workflow</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-bell me-2"></i>Notifications</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-cloud me-2"></i>Cloud-Based Access</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-sitemap me-2"></i>Multi-Branch Support</span>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Industries We Serve</h2>
            <div class="row row-cols-2 row-cols-md-3 g-3 mb-5" data-aos="fade-up" data-aos-duration="900">
                <div class="col"><div class="p-3 border rounded shadow-sm bg-light text-center h-100 d-flex flex-column justify-content-center"><i class="fa-solid fa-hospital fs-4 text-primary mb-2"></i><span class="small fw-bold">Healthcare</span></div></div>
                <div class="col"><div class="p-3 border rounded shadow-sm bg-light text-center h-100 d-flex flex-column justify-content-center"><i class="fa-solid fa-store fs-4 text-primary mb-2"></i><span class="small fw-bold">Retail Stores</span></div></div>
                <div class="col"><div class="p-3 border rounded shadow-sm bg-light text-center h-100 d-flex flex-column justify-content-center"><i class="fa-solid fa-utensils fs-4 text-primary mb-2"></i><span class="small fw-bold">Restaurants</span></div></div>
                <div class="col"><div class="p-3 border rounded shadow-sm bg-light text-center h-100 d-flex flex-column justify-content-center"><i class="fa-solid fa-hotel fs-4 text-primary mb-2"></i><span class="small fw-bold">Hotels & Malls</span></div></div>
                <div class="col"><div class="p-3 border rounded shadow-sm bg-light text-center h-100 d-flex flex-column justify-content-center"><i class="fa-solid fa-school fs-4 text-primary mb-2"></i><span class="small fw-bold">Educational</span></div></div>
                <div class="col"><div class="p-3 border rounded shadow-sm bg-light text-center h-100 d-flex flex-column justify-content-center"><i class="fa-solid fa-building fs-4 text-primary mb-2"></i><span class="small fw-bold">Corporate</span></div></div>
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
