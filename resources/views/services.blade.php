@extends('layouts.app')

@section('title', 'Our Services | Digital Transformation')
@section('meta_description', 'Explore our comprehensive range of services including Custom Software Development, ERP Systems, CRM Solutions, Cloud Migration, and Enterprise Integration.')
@section('meta_keywords', 'Avark Services, ERP Development, CRM Solutions, Custom Software, Cloud Migration, Enterprise IT Services')
@section('og_title', 'IT & Digital Transformation Services | Avark')

@section('content')

 <!-- breadcrumb-section -->
        <section class="breadcrumb-section__area ">
          <div class=" container rr-container-1900">
            <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
              <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Service</h3>
                <ul class="breadcrumb-section__page">
                  <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                  <li> Service</li>
                </ul>
              </div>
            </div>
            <div class="breadcrumb-section__border"></div>
          </div>
        </section>


        <div class="service-2__area section-spacing">
          <div class="container rr-container-1350">
            <div class="section-title-3__wrapper tx-center">
              <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png"
                  alt="image">Our Best Services For You<img class="right-shape" src="assets/imgs/home-3/shape/shape-right.png"
                  alt="image"></h2>
              <h2 class="title rr-title-anim-1">Digital Solutions That Scale</h2>
              <p class="desc mt-3 mx-auto text-center" style="max-width: 800px;">At Avark Healthcare Technology, we deliver innovative, reliable, and scalable technology solutions designed to empower businesses and healthcare organizations in their digital transformation journey.</p>
            </div>

            <div class="row mb-minus-30">
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-08.png" alt="image">
                  </div>
                  <h2 class="title">ERP System</h2>
                  <p>An Enterprise Resource Planning (ERP) system is a powerful software solution designed to integrate and manage various business processes across an organization. It centralizes data, automates workflows, improves operational efficiency, and enhances decision-making across departments.</p>
                  <a href="{{ route('erp-system') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-09.png" alt="image">
                  </div>
                  <h2 class="title">CRM System</h2>
                  <p>A Customer Relationship Management (CRM) system is a software solution designed to manage customer interactions, streamline sales processes, improve customer engagement, and strengthen long-term business relationships.</p>
                  <a href="{{ route('crm-solutions') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-10.png" alt="image">
                  </div>
                  <h2 class="title">Web Development</h2>
                  <p>Web development is the process of designing, developing, and maintaining websites and web applications tailored to meet business requirements. We create responsive, secure, and scalable digital experiences that drive business growth.</p>
                  <a href="{{ route('web-application-development') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-08.png" alt="image">
                  </div>
                  <h2 class="title">Digital Healthcare Solutions</h2>
                  <p>Our Digital Healthcare Solutions leverage advanced technologies to connect patients, healthcare providers, and healthcare organizations. These solutions improve patient care, streamline clinical workflows, and enhance healthcare accessibility.</p>
                  <a href="{{ route('digital-healthcare-solution') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-09.png" alt="image">
                  </div>
                  <h2 class="title">Application Development</h2>
                  <p>Our application development services focus on understanding project goals, business objectives, and target audiences to deliver customized, user-friendly, and scalable mobile and web applications.</p>
                  <a href="{{ route('mobile-app-development') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-10.png" alt="image">
                  </div>
                  <h2 class="title">Tele-Consultation</h2>
                  <p>Tele-consultation enables patients and healthcare professionals to communicate remotely through secure digital platforms. It improves healthcare accessibility, reduces waiting times, and enhances patient convenience.</p>
                  <a href="{{ route('tele-consultation') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-08.png" alt="image">
                  </div>
                  <h2 class="title">Content Management System (CMS)</h2>
                  <p>A Content Management System (CMS) is a software application that allows users to create, manage, modify, and publish digital content on the web without requiring extensive technical expertise.</p>
                  <a href="{{ route('contact-us') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-09.png" alt="image">
                  </div>
                  <h2 class="title">Data Migration</h2>
                  <p>Data migration refers to the process of transferring data from one storage system, format, or location to another while ensuring data integrity, security, and minimal disruption to business operations.</p>
                  <a href="{{ route('cloud-and-data-migration') }}" class="mt-auto">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="service-2__item h-100 d-flex flex-column">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-10.png" alt="image">
                  </div>
                  <h2 class="title">Other Services</h2>
                  <p>We are continuously expanding our service portfolio to deliver more innovative technology solutions. Stay connected for upcoming services and offerings.</p>
                  <a href="{{ route('contact-us') }}" class="mt-auto">Available Soon</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="our-integrations__area section-spacing-120 rr-bg-gray">
          <div class="container rr-container-1350">
            <div class="our-integrations__top">
              <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png"
                    alt="image">Our Integrations <img class="right-shape" src="assets/imgs/home-3/shape/shape-right.png"
                    alt="image"></h2>
                <h2 class="title rr-title-anim-1">Seamless System Connectivity</h2>
                <p class="desc">Integrate multiple business applications into one smooth and efficient workflow.</p>
              </div>
            </div>
            <div class="our-integrations__wrapper">
              <div class="our-integrations__border tx-center d-none d-lg-block">
                <img src="assets/imgs/home-3/shape/border-shape-3_01.png" alt="border not found">
              </div>
              <div class="our-integrations__brand">
                <div class="our-integrations__item item_1">
                  <img src="assets/imgs/home-3/brand/brand-7.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_2">
                  <img src="assets/imgs/home-3/brand/brand-8.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_3">
                  <img src="assets/imgs/home-3/brand/brand-9.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_4">
                  <img src="assets/imgs/home-3/brand/brand-10.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_5">
                  <img src="assets/imgs/home-3/brand/brand-11.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_6">
                  <img src="assets/imgs/home-3/brand/brand-12.png" alt="logo not found">
                </div>
              </div>
              <div class="our-integrations__btn">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                  <span class="btn-wrap">
                    <span class="text-one">Get a Free Consultation</span>
                    <span class="text-two">Get a Free Consultation</span>
                  </span>
                </a>
              </div>

            </div>
          </div>
        </section>

        <section class="testimonial-section__area">
          <div class="testimonial-section__wrapper section-spacing-120">
            <div class="testimonial-section__shape">
              <img src="assets/imgs/home-3/shape/testi-3-shape.png" alt="shape not found">
            </div>
            <div class="container rr-container-1350 p-relative">
              <div class="testimonial-section__author d-none d-xxl-block">
                <div class="about-3__author">
                  <ul>
                    <li><img src="{{ asset('assets/imgs/home-1/testimonial/author-1.jpg') }}" alt="image"></li>
                    <li><img src="{{ asset('assets/imgs/home-1/testimonial/author-2.jpg') }}" alt="image"></li>
                    <li><img src="{{ asset('assets/imgs/home-1/testimonial/author-3.jpg') }}" alt="image"></li>
                    <li class="plus-icon"><i class="fa-solid fa-plus"></i></li>
                  </ul>

                  <div class="text">
                    <p>300+ People Already Joined</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xxl-7 offset-xxl-5">
                  <div class="testimonial-section__top">
                    <div class="section-title-3__wrapper">
                      <h2 class="sub-title white"><img class="left-shape"
                          src="assets/imgs/home-3/shape/shape-left-white.png" alt="image">Testimonials</h2>
                      <h2 class="title rr-title-anim-1 white">What Our Customers Say</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-section__wrap">
                <div class="swiper testimonial-section__active">
                  <div class="swiper-wrapper">
                    @forelse($testimonials as $testimonial)
                    <div class="swiper-slide">
                      <div class="testimonial-section__item">
                        <div class="testimonial-section__thumb">
                            @if($testimonial->avatar)
                                <img src="{{ asset($testimonial->avatar) }}" alt="image not found">
                            @else
                                <div style="width: 60px; height: 60px; border-radius: 50%; background: #f0f4ed; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 600; color: #16a34a; border: 2px solid rgba(34, 197, 94, 0.2);">
                                    {{ substr($testimonial->client_name, 0, 1) }}
                                </div>
                            @endif
                        </div>
                        <div class="testimonial-section__content">
                          <p class="testimonial-section__dec">"{{ strip_tags($testimonial->content) }}"</p>
                          <div class="testimonial-section__admin">
                            <div class="info">
                              <h3 class="name">{{ $testimonial->client_name }}</h3>
                              <p class="position">{{ $testimonial->client_position ? $testimonial->client_position . ', ' : '' }}{{ $testimonial->client_company }}</p>
                            </div>
                            <div class="quote">
                              <img src="assets/imgs/home-3/testimonial/testimonial-quote.png" alt="quote not found">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @empty
                    <div class="swiper-slide">
                        <p class="text-white">No testimonials available yet.</p>
                    </div>
                    @endforelse
                  </div>
                </div>
              </div>
              <div class="testimonial-section__button">
                <div class="testimonial-section__arrow testimonial-section__arrow-prev"><i
                    class="fa-regular fa-angle-left"></i></div>
                <div class="testimonial-section__arrow testimonial-section__arrow-next"><i
                    class="fa-regular fa-angle-right"></i></div>
              </div>
            </div>
          </div>
        </section>

        <section class="cta-section__area section-spacing-120">
          <div class="container rr-container-1350">
            <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
              <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
                    alt="image">Call to Action <img class="right-shape"
                    src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Ready to Transform Your Business?</h2>
                <p class="cta-section__dec">Get in touch with our experts today and discover how Avark can help accelerate your digital transformation journey.</p>
              </div>
              <div class="cta-section__btn d-flex justify-content-center">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                  <span class="btn-wrap">
                    <span class="text-one">Book a Demo</span>
                    <span class="text-two">Book a Demo</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>


@endsection
