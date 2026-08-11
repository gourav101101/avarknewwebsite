@extends('layouts.app')

@section('title', 'Web Application Development')
@section('meta_description', 'Web Application Development Services')
@section('meta_keywords', 'home, Web Application Development')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
<div class=" container rr-container-1900">
    <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
    <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title">Service</h3>
        <ul class="breadcrumb-section__page">
        <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
        <li> Service <i class="fa-regular fa-angle-right"></i></li>
        <li> Web Application Development</li>
        </ul>
    </div>
    </div>
    <div class="breadcrumb-section__border"></div>
</div>
</section>

<section class="service-details section-spacing">
<div class="container rr-container-1350">
    <div class="service-details__top">
    <div class="media" data-aos="zoom-in" data-aos-duration="900">
        <img src="{{ asset('assets/imgs/inner/service-detils/Solution-PNG.png') }}" alt="img" class="img-fluid" style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-12">
        <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
        <h4 class="title">Service Categories</h4>
        <div class="service-details-sidebar-categories">
            <ul>
            <li><a href="{{ route('erp-system') }}">ERP System Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('crm-solutions') }}">CRM Solutions</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('web-application-development') }}">Web Application Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
        </div>
        </div>
        <div class="media" data-aos="fade-up" data-aos-duration="900">
            <img src="assets/imgs/inner/service-detils/KPWeb-app-development-022.jpg" alt="img">
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Web Development</h2>

            <!-- Why Choose Us - Card Grid -->
            <h2 class="service-compact-title mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our Web Development Services?</h2>
            <div class="service-why-cards" data-aos="fade-up" data-aos-duration="900">
                <div class="service-why-card">
                    <span class="why-icon">⚡</span>
                    <h4 class="why-title">Fast Services</h4>
                    <p class="why-desc">We deliver high-quality websites and web applications within committed timelines while ensuring performance, reliability, and scalability.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🔍</span>
                    <h4 class="why-title">Transparency</h4>
                    <p class="why-desc">Our development process is completely transparent, keeping clients informed throughout every stage—from planning and design to deployment and support.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🤝</span>
                    <h4 class="why-title">Trustable</h4>
                    <p class="why-desc">Trusted by businesses across industries, we build secure, scalable, and future-ready web solutions tailored to your business needs.</p>
                </div>
            </div>

            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>Web development is the process of building and maintaining websites and web applications that are accessible through the internet.</p>
                <p>It involves various activities, from designing the user interface (UI) and user experience (UX) to coding functionalities and implementing server-side operations. Web development encompasses both front-end development, which focuses on the client-side (the user's browser), and back-end development, which handles server-side logic, databases, and application functionality.</p>
                <p>Our web development solutions are designed to create engaging, responsive, and high-performing digital experiences that help organizations grow and succeed online.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Key Aspects - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Aspects of Web Development</h2>
            <div class="accordion service-accordion" id="wadAspects" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#wad1" aria-expanded="true">UX & UI Design</button></h2>
                    <div id="wad1" class="accordion-collapse collapse show" data-bs-parent="#wadAspects">
                        <div class="accordion-body"><p>User Experience (UX) and User Interface (UI) design focus on creating intuitive, visually appealing, and user-friendly digital experiences that maximize customer engagement and satisfaction.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wad2">Responsive Design</button></h2>
                    <div id="wad2" class="accordion-collapse collapse" data-bs-parent="#wadAspects">
                        <div class="accordion-body"><p>We ensure that websites and web applications adapt seamlessly to different screen sizes and devices, providing an optimal user experience across desktops, tablets, and smartphones.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wad3">Deployment & Hosting</button></h2>
                    <div id="wad3" class="accordion-collapse collapse" data-bs-parent="#wadAspects">
                        <div class="accordion-body"><p>Our team deploys applications securely and efficiently using modern hosting environments, including cloud platforms such as AWS, Microsoft Azure, and other reliable hosting providers.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wad4">Web Applications</button></h2>
                    <div id="wad4" class="accordion-collapse collapse" data-bs-parent="#wadAspects">
                        <div class="accordion-body"><p>We develop dynamic and interactive web applications that provide advanced functionalities and support complex business processes.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wad5">Content Management Systems (CMS)</button></h2>
                    <div id="wad5" class="accordion-collapse collapse" data-bs-parent="#wadAspects">
                        <div class="accordion-body"><p>We build and integrate CMS platforms such as WordPress, Joomla, and Drupal, enabling organizations to manage website content easily without technical expertise.</p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wad6">Web Security</button></h2>
                    <div id="wad6" class="accordion-collapse collapse" data-bs-parent="#wadAspects">
                        <div class="accordion-body"><p>Security is integrated into every stage of development. We implement industry-standard security practices to protect websites and applications against common vulnerabilities and cyber threats.</p></div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Front-End Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Front-End Development</h2>
            <div class="accordion service-accordion" id="wadFrontend" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#wadf1" aria-expanded="true">Core Technologies</button></h2>
                    <div id="wadf1" class="accordion-collapse collapse show" data-bs-parent="#wadFrontend">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>HTML:</strong> The foundation of web pages, used to structure and organize website content.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>CSS:</strong> Defines the presentation, styling, and layout of web pages.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>JavaScript:</strong> A powerful scripting language for interactivity, animations, and dynamic functionality.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Responsive Design:</strong> Ensures consistent experience across various devices and screen sizes.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Web Accessibility:</strong> Implements accessibility standards for all users.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Cross-Browser Compatibility:</strong> Ensures consistent appearance across major web browsers.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Animation & Interactivity:</strong> Enhances user engagement and overall experience.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wadf2">Frameworks & Libraries</button></h2>
                    <div id="wadf2" class="accordion-collapse collapse" data-bs-parent="#wadFrontend">
                        <div class="accordion-body">
                            <p>We utilize modern technologies such as:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>React.js</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Angular</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Vue.js</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Bootstrap</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Material UI</span></li>
                            </ul>
                            <p>These frameworks accelerate development and ensure consistent user experiences.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Back-End Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Back-End Development</h2>
            <div class="accordion service-accordion" id="wadBackend" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#wadb1" aria-expanded="true">Server-Side Languages</button></h2>
                    <div id="wadb1" class="accordion-collapse collapse show" data-bs-parent="#wadBackend">
                        <div class="accordion-body">
                            <p>Our developers utilize modern server-side technologies:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>PHP</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Python</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Node.js</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Java</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Ruby</span></li>
                            </ul>
                            <p>to build robust, scalable, and secure applications.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wadb2">Database Management</button></h2>
                    <div id="wadb2" class="accordion-collapse collapse" data-bs-parent="#wadBackend">
                        <div class="accordion-body">
                            <p>Efficient data storage and management using:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>MySQL</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>PostgreSQL</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>MongoDB</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Microsoft SQL Server</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wadb3">Infrastructure & Security</button></h2>
                    <div id="wadb3" class="accordion-collapse collapse" data-bs-parent="#wadBackend">
                        <div class="accordion-body">
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>API Integration:</strong> Seamlessly integrate third-party APIs and external services.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>User Authentication & Authorization:</strong> Secure login systems and role-based access control.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Server Management & Deployment:</strong> Configure and deploy using reliable cloud infrastructures.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Security Measures:</strong> Data Encryption, SSL, Vulnerability Protection, Regular Updates.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Caching & Performance:</strong> Advanced caching techniques and best practices.</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span><strong>Error Handling & Logging:</strong> Robust error management systems.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wadb4">CMS Integration</button></h2>
                    <div id="wadb4" class="accordion-collapse collapse" data-bs-parent="#wadBackend">
                        <div class="accordion-body">
                            <p>Integrate popular content management platforms including WordPress, Joomla, and Drupal for easy website administration.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Additional Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Additional Web Development Features</h2>
            <div class="accordion service-accordion" id="wadExtra" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#wade1" aria-expanded="true">SEO & Analytics</button></h2>
                    <div id="wade1" class="accordion-collapse collapse show" data-bs-parent="#wadExtra">
                        <div class="accordion-body">
                            <p><strong>Search Engine Optimization (SEO):</strong> Optimize website structure, content, and performance to improve search engine rankings and online visibility.</p>
                            <p><strong>Analytics Integration:</strong> Integrate analytics platforms such as Google Analytics to monitor user behavior, traffic, and business performance.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wade2">Social Media & E-Commerce</button></h2>
                    <div id="wade2" class="accordion-collapse collapse" data-bs-parent="#wadExtra">
                        <div class="accordion-body">
                            <p><strong>Social Media Integration:</strong> Connect websites with social media platforms to improve engagement, content sharing, and brand visibility.</p>
                            <p><strong>E-Commerce Functionality:</strong> Develop secure e-commerce platforms featuring Product Catalogs, Shopping Carts, Order Management, Secure Payment Gateways, and Inventory Management.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wade3">Forms & CDN</button></h2>
                    <div id="wade3" class="accordion-collapse collapse" data-bs-parent="#wadExtra">
                        <div class="accordion-body">
                            <p><strong>Forms & Data Collection:</strong> Create interactive forms to collect customer inquiries, registrations, feedback, and business data.</p>
                            <p><strong>Content Delivery Network (CDN) Integration:</strong> Leverage CDN services to improve website performance, reduce latency, and ensure faster content delivery worldwide.</p>
                        </div>
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
            alt="image">Let's Build Your Next Digital Platform<img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Custom Web Applications Designed for Innovation & Growth</h2>
        <p class="cta-section__dec">Build a secure, scalable, and high-performing web solution tailored to your business goals.</p>
    </div>
    <div class="cta-section__btn">
        <a href="{{ route('contact-us') }}" class="rr-btn">
        <span class="btn-wrap">
            <span class="text-one">Start Your Project Today</span>
            <span class="text-two">Start Your Project Today</span>
        </span>
        </a>
    </div>
    <div class="cta-section__list">
        <ul>
        <li><i class="fa-regular fa-angles-right"></i> End-to-End Development Support </li>
        <li><i class="fa-regular fa-angles-right"></i> Agile & Transparent Development Process </li>
        </ul>
    </div>
    </div>
</div>
</section>
@endsection
