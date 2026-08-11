@extends('layouts.app')

@section('title', 'Asset Management System')
@section('meta_description', 'Asset Management System')
@section('meta_keywords', 'home, Asset Management System')

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
          <li> Asset Management System </li>
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
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Asset Management System</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Asset Management Solution?</h2>

            <div class="row row-cols-1 row-cols-md-3 g-3 mt-3" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-warning bg-opacity-10">
                        <div class="mb-3 text-warning fs-1"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="card-title text-dark">Fast Services</h5>
                        <p class="card-text desc small">Streamline asset operations and improve productivity through automated asset tracking.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <h5 class="card-title text-dark">Transparency</h5>
                        <p class="card-text desc small">Gain complete visibility into asset lifecycle, utilization, and performance.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="card-title text-dark">Trustable</h5>
                        <p class="card-text desc small">Trusted to ensure secure, reliable, and efficient management of valuable assets.</p>
                    </div>
                </div>
            </div>

            <p class="desc mt-5" data-aos="fade-up" data-aos-duration="900">Asset Management refers to the systematic and strategic management of an organization's assets to optimize their value, performance, and lifecycle.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Effective asset management ensures that physical assets, financial assets, and intangible assets are tracked, maintained, and utilized efficiently to minimize operational costs and risks.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Key Features</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/iam_inventory_tracking.png?v=2" class="card-img-top" alt="Tracking" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-map-location-dot me-2"></i> Inventory & Tracking</h5>
                            <p class="card-text desc small">Comprehensive inventory with real-time location, status, and usage monitoring for all organizational assets.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/cloud_server_1783400149336.png" class="card-img-top" alt="Maintenance" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-screwdriver-wrench me-2"></i> Maintenance & Repair</h5>
                            <p class="card-text desc small">Schedule preventive maintenance and track work orders to minimize downtime and extend asset life.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/analytics_dashboard_1783400138562.png" class="card-img-top" alt="Valuation" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-chart-line me-2"></i> Depreciation & Valuation</h5>
                            <p class="card-text desc small">Track asset depreciation, maintain accurate valuations, and support financial reporting and compliance.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/security_lock_1783400190184.png" class="card-img-top" alt="Risk" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-shield-halved me-2"></i> Risk & Lifecycle</h5>
                            <p class="card-text desc small">Mitigate risks (theft, damage, obsolescence) and plan for asset disposal, retirement, or replacement.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Benefits & Analytics</h2>
            <div class="accordion" id="accordionBenefits" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB1">
                        <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                            Cost & Efficiency
                        </button>
                    </h2>
                    <div id="collapseB1" class="accordion-collapse collapse show" aria-labelledby="headingB1" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Cost Savings:</strong> Reduce maintenance expenses and unnecessary capital expenditures.<br><br>
                            <strong>Improved Efficiency:</strong> Automate asset tracking and management to reduce manual effort.<br><br>
                            <strong>Extended Lifecycle:</strong> Proper maintenance maximizes return on investment (ROI).
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB2">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                            Performance & Compliance
                        </button>
                    </h2>
                    <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Enhanced Performance:</strong> Proactive maintenance improves asset reliability.<br><br>
                            <strong>Financial Accuracy:</strong> Support accurate financial reporting and valuation.<br><br>
                            <strong>Risk Reduction:</strong> Minimize operational, financial, and regulatory risks.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB3">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                            Asset Performance Analysis
                        </button>
                    </h2>
                    <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Utilization & Maintenance:</strong> Analyze usage trends to prevent idle assets or overuse.<br><br>
                            <strong>Cost & Downtime:</strong> Detailed reports on asset maintenance costs and downtime.<br><br>
                            <strong>Strategic Decisions:</strong> Data-driven insights help optimize overall asset investments.
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Additional Features & Industries</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-barcode me-2"></i>Barcode & QR</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-wifi me-2"></i>RFID Tracking</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-mobile-screen me-2"></i>Mobile Management</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-file-contract me-2"></i>Warranty Management</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-building me-2"></i>Multi-Location</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-cloud me-2"></i>Cloud / On-Premise</span>
            </div>
            
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Ideal for Healthcare, Manufacturing, Education, Utilities, Transportation, Government, Corporate, and Warehousing sectors.</p>

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
