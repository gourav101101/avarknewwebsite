  <div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
      <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
      <div class="load-text">
        <span>A</span>
        <span>V</span>
        <span>A</span>
        <span>R</span>
        <span>K</span>
      </div>
    </div>
  </div>


  <!-- Scroll to top removed -->

  <!-- side toggle start -->
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href="{{ route('home') }}">
              <img class="show-light" src="{{ asset('assets/imgs/logo/kp-avark-logo.png') }}" alt="site logo" style="filter: brightness(0) invert(1);" />
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="mobile-menu d-xl-none fix"></div>
        <div class="offset-button">
          <a href="{{ route ('contact-us') }}" class="rr-btn">
            <span class="btn-wrap">
              <span class="text-one">Let's Talk</span>
              <span class="text-two">Let's Talk</span>
            </span>
          </a>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Contact US</h2>
          <div class="contact-meta">
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              <span class="text">A-81, Vistara City, Indore,452001</span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-envelope"></i></span>
              <span class="text"><a href="mailto:support@avark.in">support@avark.in</a></span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-phone"></i></span>
              <span class="text"><a href="tel:917400920717">+91-7400920717</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>
  <!-- side toggle end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <!-- Header area start -->
      <style>
        /* On inner pages with breadcrumb, overlay header on top of the breadcrumb */
        body:has(.breadcrumb-section__area) .header-area-1 {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          z-index: 100;
        }
        body:has(.breadcrumb-section__area) .header-area-1 .header-main {
          background: transparent;
        }
        /* Make the logo appear white globally */
        .header__logo img {
          filter: brightness(0) invert(1);
        }
        /* Push breadcrumb content down so it's not hidden behind the header */
        body:has(.breadcrumb-section__area) .breadcrumb-section__wrapper {
          padding-top: 100px;
        }

        /* ===== Enhanced Navbar Hover for All Pages ===== */

        /* Smooth transition for all nav links */
        .header-area-1 .main-menu li a {
          transition: color 0.3s ease, text-shadow 0.3s ease, transform 0.3s ease;
        }

        /* Top-level nav hover — vivid white glow effect */
        .header-area-1 .main-menu > ul > li:hover > a {
          color: #fff !important;
          text-shadow: 0 0 8px rgba(160, 234, 113, 0.9), 0 0 20px rgba(160, 234, 113, 0.5);
        }

        /* Top-level nav link — subtle underline animation on hover */
        .header-area-1 .main-menu > ul > li > a {
          position: relative;
        }
        .header-area-1 .main-menu > ul > li > a::after {
          content: '';
          position: absolute;
          bottom: 28px;
          left: 50%;
          width: 0;
          height: 2px;
          background: #A0EA71;
          transition: width 0.3s ease, left 0.3s ease;
          border-radius: 2px;
        }
        .header-area-1 .main-menu > ul > li:hover > a::after {
          width: 60%;
          left: 20%;
        }

        /* Dropdown menu items — improved hover */
        .header-area-1 .main-menu ul.dp-menu li:hover > a {
          color: #A0EA71 !important;
          text-shadow: 0 0 6px rgba(160, 234, 113, 0.4);
          padding-left: 5px;
        }
        .header-area-1 .main-menu ul.dp-menu li a {
          transition: color 0.3s ease, text-shadow 0.3s ease, padding-left 0.3s ease, letter-spacing 0.3s ease;
        }

        /* Mobile hamburger bar glow on hover */
        .header-area-1 .header-right .side-toggle .bar-icon:hover span {
          background: #fff;
          box-shadow: 0 0 6px rgba(160, 234, 113, 0.8);
        }
      </style>
      <header class="header-area-1">
            <div class="header-main">
                <div class="container rr-container-1800">

                    <div class="header-area-1__inner">

                        {{-- Logo --}}
                        <div class="header__logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/imgs/logo/kp-avark-logo.png') }}" class="normal-logo" alt="Site Logo">
                            </a>
                        </div>

                        {{-- Navigation --}}
                        <div class="header__nav">
                            <nav class="main-menu">
                                <ul>

                                    <li>
                                        <a href="{{ route('home') }}">Home</a>

                                    </li>
                                  


                                    <!-- <li>
                                        <a href="#">Service</a>
                                        <ul class="dp-menu">
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Service Details</a></li>
                                        </ul>
                                    </li> -->

                                      <li class="">
                                        <!-- <li class="menu-item-has-children"> -->
                                        <a href="{{ route('services') }}">Services</a>
                                        <ul class="dp-menu column-2">
                                            <li>
                                                <a href="{{ route('erp-system') }}">ERP System Development</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('crm-solutions') }}">CRM Solutions</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('custom-software-development') }}">Custom Software Development</a>
                                            </li>
                                            <li> 
                                                <a href="{{ route('web-application-development') }}">Web Application Development </a>
                                            </li>
                                            <li> 
                                                <a href="{{ route('mobile-app-development') }}">Mobile App Development</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services</a>
                                            </li>
                                        </ul>
                                    </li>



                                    <li class="">
                                        <!-- <li class="menu-item-has-children"> -->
                                        <a href="{{ route('products') }}">Products</a>
                                        <ul class="dp-menu column-2">
                                            <li>
                                                <a href="{{route('hms')}}">Advance Hospital Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('kiosk-management-system')}}">KIOSK Management System</a>
                                            </li>
                                            <li>
                                                <a href="{{route('feedback-management')}}">Feedback Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('business-marketing-tool')}}">Business Marketing Tool</a>
                                            </li>
                                            <li>
                                                <a href="{{route('inventory-stock-management')}}">Inventory or Stock Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a>
                                            </li>
                                            <li>
                                                <a href="{{route('dialysis-management')}}">Dialysis Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('enterprise-support-management')}}">Enterprise Support Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('digital-signage-solutions')}}">Digital Signage Solutions</a>
                                            </li>
                                            <li>
                                                <a href="{{route('opd-management-system')}}">OPD Management Software</a>
                                            </li>
                                            <li>
                                                <a href="{{route('industrial-asset-management')}}">Industrial Asset Management Software</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{ route('partners') }}">Partners</a>
                                    </li>

                                    <!-- <li>
                                        <a href="#">Pages</a>
                                        <ul class="dp-menu">
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </li> -->

                                    <li>
                                        <a href="{{ route ('contact-us') }}">Contact</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        {{-- Right side --}}
                        <div class="header-right">

                            <!-- <div class="search-wrap">
                                <button class="search">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                </button>
                            </div> -->
                            <div class="header-btn d-none d-sm-flex">
                            <a href="{{ route ('contact-us') }}" class="rr-btn rr-btn-4">
                                <span class="btn-wrap">
                                <span class="text-one">Get Started</span>
                                <span class="text-two">Get Started</span>
                                </span>
                            </a>
                            </div>
                            <!--<a href="{{ route ('contact-us') }}" class="rr-btn-green">-->
                            <!--    <span class="btn-wrap">-->
                            <!--        <span class="text-one">Get Started</span>-->
                            <!--        <span class="text-two">Get Started</span>-->
                            <!--    </span>-->
                            <!--</a>-->

                            {{-- Mobile toggle --}}
                            <div class="header__navicon d-xl-none">
                                <div class="side-toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>
      <!-- Header area end -->
      <main>
