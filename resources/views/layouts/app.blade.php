<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="@yield('meta_description', 'Avark Healthcare Technology provides advanced Hospital Management Systems (HMS), ERP, CRM, and digital transformation solutions.')" />
  <meta name="keywords" content="@yield('meta_keywords', 'Healthcare Technology, HMS, ERP System, CRM Solutions, Avark, Digital Healthcare')" />

  <!-- Open Graph / Social Sharing -->
  <meta property="og:title" content="@yield('og_title', 'Avark Healthcare Technology | Digital Solutions')" />
  <meta property="og:description" content="@yield('meta_description', 'Avark Healthcare Technology provides advanced Hospital Management Systems (HMS), ERP, CRM, and digital transformation solutions.')" />
  <meta property="og:image" content="@yield('og_image', asset('assets/imgs/logo/kp-avark-logo.png'))" />
  <meta property="og:type" content="website" />
  
  <meta name="twitter:card" content="summary_large_image" />

  <title>@yield('title', 'Home') | Avark Pvt. Ltd.</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/fevi-icon.png') }}">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/bootstrap/bootstrap.min.css') }}" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/fontawesome/fontawesome-pro.min.css') }}" />

  <!-- Swiper -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/swiper/swiper-bundle.min.css') }}" />

  <!-- Meanmenu -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/menu/meanmenu.min.css') }}" />

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/popup/magnific-popup.css') }}" />

  <!-- Nice Select -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/nice-select/nice-select.css') }}" />

  <!-- Odometer -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/odometer/odometer-theme-default.css') }}" />

  <!-- AOS Animation -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/animation/aos.css') }}" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- JS Files -->

<!-- jQuery -->
<script src="{{ asset('assets/vandor/jquery/jquery.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/vandor/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('assets/vandor/popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Swiper -->
<script src="{{ asset('assets/vandor/swiper/swiper-bundle.min.js') }}"></script>

<!-- GSAP -->
<script src="{{ asset('assets/vandor/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/SplitType.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/customEase.js') }}"></script>

<!-- Odometer -->
<script src="{{ asset('assets/vandor/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/vandor/odometer/waypoints.min.js') }}"></script>

<!-- Menu -->
<script src="{{ asset('assets/vandor/menu/jquery.meanmenu.min.js') }}"></script>

<!-- Nice Select -->
<script src="{{ asset('assets/vandor/nice-select/nice-select.js') }}"></script>

<!-- AOS Animation -->
<script src="{{ asset('assets/vandor/animation/aos.js') }}"></script>

<!-- GSAP Extra -->
<script src="{{ asset('assets/vandor/gsap/throwable.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/matter.js') }}"></script>

<!-- Common JS -->
<script src="{{ asset('assets/vandor/common-js/common.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Chatway Live Chat Widget -->
<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=RE2YD4LgsZ9M"></script>
<!-- Floating Social Buttons -->
<div id="floating-socials" style="
    position: fixed;
    bottom: 90px;
    right: 24px;
    z-index: 9998;
    display: flex;
    flex-direction: column;
    gap: 14px;
    align-items: center;
">
    <!-- Phone Call -->
    <a href="tel:+917400920717" title="Call Us" class="float-btn" style="background: #25D366;">
        <i class="fa-solid fa-phone" style="color: #fff; font-size: 22px;"></i>
    </a>
    <!-- Instagram -->
    <a href="https://www.instagram.com/ark_healfit?utm_source=qr" target="_blank" rel="noopener noreferrer" title="Instagram" class="float-btn" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
        <i class="fa-brands fa-instagram" style="color: #fff; font-size: 24px;"></i>
    </a>
    <!-- WhatsApp -->
    <a href="https://wa.me/917400920717" target="_blank" title="Chat on WhatsApp" class="float-btn" style="background: #25D366;">
        <i class="fa-brands fa-whatsapp" style="color: #fff; font-size: 26px;"></i>
    </a>

</div>
<style>
    .float-btn {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }
    .float-btn:hover {
        transform: scale(1.15);
        box-shadow: 0 6px 20px rgba(0,0,0,0.35);
    }
    .float-btn::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: inherit;
        animation: float-pulse 2.5s infinite;
        z-index: -1;
    }
    @keyframes float-pulse {
        0% { transform: scale(1); opacity: 0.4; }
        70% { transform: scale(1.4); opacity: 0; }
        100% { transform: scale(1.4); opacity: 0; }
    }
</style>


</body>
</html>
