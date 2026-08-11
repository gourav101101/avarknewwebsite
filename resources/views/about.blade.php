@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Learn about Avark Healthcare Technology, our mission to empower businesses with agile solutions, and our journey in digital healthcare and IT transformation.')
@section('meta_keywords', 'About Avark, Healthcare Technology Company, IT Company Indore, Digital Transformation, Software Development')
@section('og_title', 'About Avark Healthcare Technology')

@section('content')

<style>
  .crm-benefits__wrapper {
    overflow: hidden;
    position: relative;
    border-radius: 32px;
    background: linear-gradient(90deg, #0E0E0C 0%, #198754 100%);
  }

  .counter__item.item-2 {
    background: #9dd3ce;
  }

  .service-details .analytics {
    padding: 40px 32px;
    position: relative;
    border-radius: 16px;
    background: linear-gradient(90deg, #198754 0%, var(--Text-Primary, #c9c939) 100%), var(--BG-Sedentary, #F6F6F6);
  }
</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
  <div class=" container rr-container-1900">
    <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
      <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title rr-title-anim-1">About Us</h3>
        <ul class="breadcrumb-section__page">
          <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
          <li> About Us</li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-section__border"></div>
  </div>
</section>


<section class="about-section-2 section-spacing-top-120 fade-wrapper">
  <div class="shape-4">
    <img src="assets/imgs/shape/about-shape-4.png" alt="shape">
  </div>
  <div class="shape-5">
    <img src="assets/imgs/shape/about-shape-5.png" alt="shape">
  </div>
  <div class="container rr-container-1350">
    <div class="about-section-2__wrapper ">
      <div class="about-section-2__box" data-aos="fade-right" data-aos-duration="900">
        <div class="shapes">
          <div class="shape-1">
            <img src="assets/imgs/home-3/about/about1.png" alt="img not found">
          </div>
          <div class="shape-2 shape-animaiton1">
            <img src="assets/imgs/home-3/about/about2.png" alt="img not found">
          </div>
          <div class="shape-3 shape-animaiton1">
            <img src="assets/imgs/home-3/about/about3.png" alt="img not found">
          </div>
        </div>
      </div>
      <div class="about-section-2__item" data-aos="fade-left" data-aos-duration="900">
        <div class="about-section-2__content">
          <div class="section-title-2__wrapper">
            <h2 class="sub-title">About us</h2>
            <h2 class="title rr-title-anim-1">Who we are </h2>
          </div>
          <p class="decs">Avark Healthcare Technology Pvt. Ltd. is established in 2019,
            Since then a key goal for all healthcare providers is to improve the quality of care for patients and residents.
            Our integrated system gives you the ability to transform unreliable processes and inconsistent communications into a streamlined and centralised approach,
            revolutionising how you provide care.

          </p>
          <div class="about-section-2__list">
            <ul>
              <li><i class="far fa-chevron-right"></i>Optimize patient management workflows</li>
              <li><i class="far fa-chevron-right"></i>Improve internal communication</li>
              <li><i class="far fa-chevron-right"></i>Reduce operational errors</li>
              <li><i class="far fa-chevron-right"></i>Enhance overall care delivery standards</li>
            </ul>
          </div>
          <a href="{{ route ('contact-us') }}" class="rr-btn-green green-2">
            <span class="btn-wrap">
              <span class="text-one">Request a Demo</span>
              <span class="text-two">Request a Demo</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="brand-3 " data-aos="fade-up" data-aos-duration="900">
  <div class="container rr-container-1350">
    <div class="section-title-3__wrapper">
      <h2 class="title rr-title-anim-1">Avark Trusted By 18M+ People</h2>
    </div>
    <div class="swiper brand-3__active">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="brand-3__item">
            <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="blog section-spacing">
  <div class="container rr-container-1350">
    <div class="row">
      <div class="col-lg-4">
        <div class="blog__item" data-aos="fade-up" data-aos-duration="1000">
          <div class="media" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/home-1/blog/kpm/Vision.png" alt="image not fond">
          </div>
          <div class="content">
            <h2 class="title rr-title-anim-1"><a href="{{ route('about') }}">Vision</a></h2>

            <p class="crm-benefits__dec mt-1">To be the preferred and trusted medical technology company,
              setting the highest standards on products and services,
              delivering affordable solutions to the last mile in the markets we serve,
              with commitment to customer centricity and ethical business practices.</span></p>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog__item" data-aos="fade-up" data-aos-duration="1000">
          <div class="media" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/home-1/blog/kpm/Ethics.png" alt="image not fond">
          </div>
          <div class="content">
            <h2 class="title rr-title-anim-1"><a href="{{ route('about') }}">Ethics</a></h2>

            <p class="crm-benefits__dec mt-1">We uphold the ehtics & believe in team work every action and decision of ours. <br> We
              pursue our goals with honour, integrity, trust, and fairness towards our employees,
              our customers, the business, and our Country.<br><br></span></p>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog__item" data-aos="fade-up" data-aos-duration="1000">
          <div class="media" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/home-1/blog/kpm/CustomerFocus.png" alt="image not fond">
          </div>
          <div class="content">
            <h2 class="title rr-title-anim-1"><a href="{{ route('about') }}">Customer Focus</a></h2>

            <p class="crm-benefits__dec mt-1">We believe in upholding our commitments,
              we strive for the best in quality in whatever we do, we drive on innovation, all of it,
              to create value for our customers – internal & external,
              in our pledge towards Customer Delight.<br><br></span></p>

          </div>
        </div>
      </div>

    </div>

    <div class="row mt-3">
      <div class="col-lg-4">
        <div class="blog__item" data-aos="fade-up" data-aos-duration="1000">
          <div class="media" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/home-1/blog/kpm/Accountability.png" alt="image not fond">
          </div>
          <div class="content">
            <h2 class="title rr-title-anim-1"><a href="{{ route('about') }}">Accountability</a></h2>

            <p class="crm-benefits__dec mt-1">We are all Champions of our Company, driven by the same purpose to ‘Help Save Lives’,
              from taking ownership, to remaining committed from start to finish,
              in doing what is right, not just what is expected, and in going beyond,
              towards making a positive impact on everything we do.<br><br><br></span></p>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog__item" data-aos="fade-up" data-aos-duration="1000">
          <div class="media" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/home-1/blog/kpm/Respect.png" alt="image not fond">
          </div>
          <div class="content">
            <h2 class="title rr-title-anim-1"><a href="{{ route('about') }}">Respect</a></h2>

            <p class="crm-benefits__dec mt-1">
              We believe in listening, sharing, and being open to people, valuing their individual strengths and leveraging them.
              We believe in empowering our people with the right environment,
              efficient tools and opportune learning platforms towards nurturing a passionate team who in-turn respect the organization & its goals. <br><br></span></p>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog__item" data-aos="fade-up" data-aos-duration="1000">
          <div class="media" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/home-1/blog/kpm/Speed.png" alt="image not fond">
          </div>
          <div class="content">
            <h2 class="title rr-title-anim-1"><a href="{{ route('about') }}">Speed</a></h2>

            <p class="crm-benefits__dec mt-1">
              Challenging the status quo, racing against competition,
              by constantly striving for excellence, finding & discovering fast & smart solutions,
              towards continuous improvements and re-engineering self. We, therefore,
              are an organization driven by SPEED, of thought, of creation,
              of service, of delivering on our commitments & exceeding expectations.</span></p>

          </div>
        </div>
      </div>

    </div>

  </div>
</section>





<section class="counter section-spacing-top-60">
  <div class="container rr-container-1350 ">
    <div class="row mb-minus-30">
      <div class="col-md-4 col-sm-6 d-flex" data-aos="fade-right" data-aos-duration="900">
        <div class="counter__item" data-background="assets/imgs/funfact/counter-bg.png">
          <h2><span class="odometer" data-count="99">100</span>%</h2>
          <h2 class="sub-title">Client Satisfaction Rate </h2>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-duration="900">
        <div class="counter__item item-2">
          <h2><span class="odometer" data-count="90">50</span>+</h2>
          <h2 class="sub-title">Healthcare Institutions Served</h2>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 d-flex" data-aos="fade-left" data-aos-duration="900">
        <div class="counter__item item-3">
          <h2><span class="odometer" data-count="10">10</span>k+</h2>
          <h2 class="sub-title">Patients Managed Through Our Systems</h2>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Kuldeep Code -->
<section class="service-details section-spacing">
  <div class="container rr-container-1350">
    <div class="service-details__top">
      <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
        <img src="assets/imgs/home-3/about/about1.png" alt="img">
      </div>
    </div>
  </div>
</section>



<!-- kuldeep code -->

<section class="crm-benefits__area section-spacing-top-120">
  <div class="crm-benefits__wrapper section-spacing-120">
    <div class="crm-benefits__shape">
      <img src="assets/imgs/home-3/about/circle-shape-2.png" alt="shape not found">
    </div>
    <div class="container rr-container-1350">
      <div class="crm-benefits__top">
        <div class="row align-items-end">
          <div class="col-lg-6">
            <div class="crm-benefits__top-left" data-aos="fade-right" data-aos-duration="900">
              <div class="section-title-3__wrapper">
                <h2 class="sub-title white"><img class="left-shape"
                    src="assets/imgs/home-3/shape/shape-left-white.png" alt="image">Avark HMS</h2>
                <h2 class="title rr-title-anim-1 white">Smart Healthcare. Simplified Management.</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="crm-benefits__top-right" data-aos="fade-left" data-aos-duration="900">
              <p class="crm-benefits__top-dec">Our Hospital Management System helps hospitals, clinics, 
                and healthcare centers deliver better care while reducing operational complexity and improving overall productivity.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="crm-benefits__thumb" data-aos="zoom-in" data-aos-duration="900">
            <div class="image-1">
              <img src="assets/imgs/home-3/about/about-apointment.jpeg" alt="image not found">
            </div>
            <!--<div class="image-2 shape-animaiton1">-->
            <!--  <img src="assets/imgs/home-3/about/about-page.jpeg" alt="image not found">-->
            <!--</div>-->
            <!--<div class="image-3 shape shape-animaiton1">-->
            <!--  <img src="assets/imgs/home-3/about/patient list.jpeg" alt="image not found">-->
            <!--</div>-->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="crm-benefits__wrap">
            <div class="crm-benefits__item" data-aos="fade-left" data-aos-duration="900">
              <div class="crm-benefits__info">
                <div class="crm-benefits__icon">
                  <img src="assets/imgs/icon/icon-05.png" alt="icon not found">
                </div>
                <h3 class="crm-benefits__title">Patient Management</h3>
              </div>
              <p class="crm-benefits__dec">All patient records and reports in one secure system.</span></p>
            </div>
            <div class="crm-benefits__item" data-aos="fade-left" data-aos-duration="900">
              <div class="crm-benefits__info">
                <div class="crm-benefits__icon">
                  <img src="assets/imgs/icon/icon-06.png" alt="icon not found">
                </div>
                <h3 class="crm-benefits__title">Appointment Management</h3>
              </div>
              <p class="crm-benefits__dec">Easy scheduling and smooth OPD/IPD handling.</span></p>
            </div>
            <div class="crm-benefits__item" data-aos="fade-left" data-aos-duration="900">
              <div class="crm-benefits__info">
                <div class="crm-benefits__icon">
                  <img src="assets/imgs/icon/icon-07.png" alt="icon not found">
                </div>
                <h3 class="crm-benefits__title">Billing & Accounts</h3>
              </div>
              <p class="crm-benefits__dec">Quick billing and accurate financial tracking.</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="our-integrations__area section-spacing-120 rr-bg-gray">
  <div class="container rr-container-1350">
    <div class="our-integrations__top">
      <div class="section-title-3__wrapper tx-center">
        <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png" alt="image">Digital Integrations <img class="right-shape" src="assets/imgs/home-3/shape/shape-right.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1">Connect Your Digital Ecosystem</h2>
        <p class="desc">Enhance your IT infrastructure by integrating with the tools and platforms your business already relies on. 
          From cloud services and CRM systems to payment gateways and enterprise applications — everything works together seamlessly for maximum efficiency.</p>
      </div>
    </div>
    <div class="our-integrations__wrapper">
      <div class="our-integrations__border tx-center d-none d-lg-block">
        <img src="assets/imgs/home-3/shape/border-shape-3_01.png" alt="border not found">
      </div>
      <div class="our-integrations__brand">
        <div class="our-integrations__item item_1" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%) translate3d(-100.037px, -26.1141px, 0px);">
          <img src="assets/imgs/home-3/brand/brand-7.png" alt="logo not found">
        </div>
        <div class="our-integrations__item item_2" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%) translate3d(-124.142px, 0px, 0px);">
          <img src="assets/imgs/home-3/brand/brand-8.png" alt="logo not found">
        </div>
        <div class="our-integrations__item item_3" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%) translate3d(-98.631px, 25.7124px, 0px);">
          <img src="assets/imgs/home-3/brand/brand-9.png" alt="logo not found">
        </div>
        <div class="our-integrations__item item_4" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%) translate3d(100.037px, -26.1141px, 0px);">
          <img src="assets/imgs/home-3/brand/brand-10.png" alt="logo not found">
        </div>
        <div class="our-integrations__item item_5" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%) translate3d(123.54px, 0px, 0px);">
          <img src="assets/imgs/home-3/brand/brand-11.png" alt="logo not found">
        </div>
        <div class="our-integrations__item item_6" style="translate: none; rotate: none; scale: none; transform: translate(-50%, -50%) translate3d(98.631px, 25.7124px, 0px);">
          <img src="assets/imgs/home-3/brand/brand-12.png" alt="logo not found">
        </div>
      </div>
      <div class="our-integrations__btn">
        <a href="{{ route('services') }}" class="rr-btn">
          <span class="btn-wrap">
            <span class="text-one">Get Services</span>
            <span class="text-two">Get Services</span>
          </span>
        </a>
      </div>

    </div>
  </div>
</section>


@endsection
