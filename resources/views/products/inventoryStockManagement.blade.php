@extends('layouts.app')

@section('title', 'Inventory Management System')
@section('meta_description', 'Inventory Management System')
@section('meta_keywords', 'home, Inventory or Stock Management System')

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
          <li> Inventory Management System </li>
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
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Inventory Management System</h2>
            <h2 class="title rr-title-anim-1 mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Inventory Management Solution?</h2>

            <div class="row row-cols-1 row-cols-md-3 g-3 mt-3" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-warning bg-opacity-10">
                        <div class="mb-3 text-warning fs-1"><i class="fa-solid fa-bolt"></i></div>
                        <h5 class="card-title text-dark">Fast Services</h5>
                        <p class="card-text desc small">Efficient and scalable solutions that help businesses streamline stock operations.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-info bg-opacity-10">
                        <div class="mb-3 text-info fs-1"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <h5 class="card-title text-dark">Transparency</h5>
                        <p class="card-text desc small">Complete visibility into inventory movements, stock levels, and procurement processes.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center p-3 feature-card bg-success bg-opacity-10">
                        <div class="mb-3 text-success fs-1"><i class="fa-solid fa-handshake"></i></div>
                        <h5 class="card-title text-dark">Trustable</h5>
                        <p class="card-text desc small">Trusted by organizations to ensure reliability, data accuracy, and operational excellence.</p>
                    </div>
                </div>
            </div>

            <p class="desc mt-5" data-aos="fade-up" data-aos-duration="900">An Inventory or Stock Management System is a comprehensive software solution designed to help businesses efficiently track, manage, and control their inventory, stock, materials, and products.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Effective inventory management optimizes stock levels, minimizes operational costs, reduces wastage, and ensures that the right products are available at the right time.</p>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Key Features</h2>
            
            <div class="row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up" data-aos-duration="900">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/inventory_box_1783400245007.png" class="card-img-top" alt="Real-Time Tracking" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-boxes-packing me-2"></i> Real-Time Tracking</h5>
                            <p class="card-text desc small">Monitor Stock-In, Stock-Out, and Stock-On-Hand in real time. Maintain a complete audit trail of all inventory transactions.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/analytics_dashboard_1783400138562.png" class="card-img-top" alt="Automated Reordering" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-truck-ramp-box me-2"></i> Automated Reordering</h5>
                            <p class="card-text desc small">Automatically generate purchase requests based on predefined reorder levels and thresholds to avoid stockouts.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/barcode_scanner_1783402194262.png" class="card-img-top" alt="Barcode & RFID" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-barcode me-2"></i> Barcode & RFID Integration</h5>
                            <p class="card-text desc small">Leverage barcodes and RFID for faster counting, reduced errors, and automated tracking of products and batches.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <img src="assets/imgs/inner/features/cloud_server_1783400149336.png" class="card-img-top" alt="Reporting" style="height: 180px; object-fit: cover;">
                        <div class="card-body bg-light rounded-bottom">
                            <h5 class="card-title text-primary"><i class="fa-solid fa-chart-line me-2"></i> Reporting & Integration</h5>
                            <p class="card-text desc small">Generate comprehensive reports and seamlessly integrate with Sales, Purchasing, Billing, and ERP platforms.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-4" data-aos="fade-up" data-aos-duration="900">Benefits & Analytics</h2>
            <div class="accordion" id="accordionBenefits" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB1">
                        <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                            Optimized Levels & Fulfillment
                        </button>
                    </h2>
                    <div id="collapseB1" class="accordion-collapse collapse show" aria-labelledby="headingB1" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Optimized Inventory Levels:</strong> Prevent overstocking and stock shortages while reducing carrying costs.<br><br>
                            <strong>Improved Order Fulfillment:</strong> Ensure orders are processed accurately and delivered on time.<br><br>
                            <strong>Streamlined Purchasing:</strong> Automated reorders ensure you purchase the right products at the right time.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB2">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                            Cost Savings & Loss Reduction
                        </button>
                    </h2>
                    <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Reduced Shrinkage:</strong> Minimize losses from theft, damage, expiry, or mismanagement.<br><br>
                            <strong>Cost Savings:</strong> Lower operational expenses by optimizing procurement planning.<br><br>
                            <strong>Increased Efficiency:</strong> Automation of processes reduces manual work and saves time.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-2 shadow-sm">
                    <h2 class="accordion-header" id="headingB3">
                        <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                            Reporting & Valuations
                        </button>
                    </h2>
                    <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionBenefits">
                        <div class="accordion-body desc bg-light rounded-bottom">
                            <strong>Stock Valuation:</strong> Accurate calculations using FIFO, LIFO, or Weighted Average Cost.<br><br>
                            <strong>Comprehensive Reporting:</strong> Real-time consumption, reorder, and valuation reports.<br><br>
                            <strong>Alerts & Notifications:</strong> Receive automated alerts for low stock, expiries, and overstocking.
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title rr-title-anim-1 mt-5 mb-3" data-aos="fade-up" data-aos-duration="900">Additional Features & Industries</h2>
            <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-duration="900">
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-list-check me-2"></i>Purchase Orders</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-users me-2"></i>Supplier Management</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-warehouse me-2"></i>Multi-Location</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-magnifying-glass-chart me-2"></i>Inventory Auditing</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-right-left me-2"></i>Stock Transfers</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle p-2 fs-6"><i class="fa-solid fa-cloud me-2"></i>Cloud / On-Premise</span>
            </div>
            
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Ideal for Healthcare, Pharmacies, Retail, Warehouses, Manufacturing, Distribution, Diagnostic Labs, and Multi-Branch Enterprises.</p>

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

