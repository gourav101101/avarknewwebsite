@extends('layouts.app')

@section('title', 'Content Management System (CMS)')
@section('meta_description', 'Content Management System (CMS) Solutions')
@section('meta_keywords', 'home, CMS, Content Management System')

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
        <li> Content Management System (CMS) </li>
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
        <img src="assets/imgs/inner/service-detils/Solution-PNG.png" alt="img" class="img-fluid" style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
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
            <li><a href="{{ route('web-application-development') }}">Web Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('mobile-app-development') }}">Application Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('digital-healthcare-solution') }}">Digital Healthcare Solutions</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('tele-consultation') }}">Tele-Consultation</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            <li><a href="{{ route('cms') }}">Content Management System (CMS)</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Content Management System (CMS)</h2>

            <!-- Why Choose Us - Card Grid -->
            <h2 class="service-compact-title mt-4" data-aos="fade-up" data-aos-duration="900">Why Choose Our CMS Solutions?</h2>
            <div class="service-why-cards" data-aos="fade-up" data-aos-duration="900">
                <div class="service-why-card">
                    <span class="why-icon">⚡</span>
                    <h4 class="why-title">Fast Services</h4>
                    <p class="why-desc">We provide rapid deployment and implementation of CMS solutions, enabling organizations to manage digital content efficiently and effectively.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🔍</span>
                    <h4 class="why-title">Transparency</h4>
                    <p class="why-desc">Our CMS platforms offer complete transparency in content creation, publishing workflows, and user management, ensuring streamlined operations.</p>
                </div>
                <div class="service-why-card">
                    <span class="why-icon">🤝</span>
                    <h4 class="why-title">Trustable</h4>
                    <p class="why-desc">Trusted by businesses across industries, our CMS solutions are secure, scalable, and designed to simplify website and content management.</p>
                </div>
            </div>

            <!-- Intro Text -->
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>A Content Management System (CMS) is a software application that allows users to create, manage, and publish digital content on the web without requiring advanced technical expertise.</p>
                <p>CMS platforms simplify website and web application management by providing an intuitive interface for content creation, editing, and publishing. By separating content from design and functionality, CMS solutions make it easier to update, maintain, and scale digital platforms efficiently.</p>
                <p>Content Management Systems are widely used for blogs, corporate websites, e-commerce portals, news platforms, educational websites, and many other digital experiences.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Key Components - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Components of a CMS</h2>
            <div class="accordion service-accordion" id="cmsComponents" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#comp1" aria-expanded="true">Content Creation & Editing</button></h2>
                    <div id="comp1" class="accordion-collapse collapse show" data-bs-parent="#cmsComponents">
                        <div class="accordion-body">
                            <p>CMS platforms provide a user-friendly <strong>WYSIWYG (What You See Is What You Get)</strong> editor that allows users to create and edit content without coding knowledge.</p>
                            <p>Features include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Rich Text Editing</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Drag-and-Drop Content Management</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Content Formatting Tools</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Real-Time Preview</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Multimedia Content Integration</span></li>
                            </ul>
                            <p>This enables non-technical users to manage website content independently.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp2">Content Organization</button></h2>
                    <div id="comp2" class="accordion-collapse collapse" data-bs-parent="#cmsComponents">
                        <div class="accordion-body">
                            <p>Efficient content organization helps manage large volumes of information.</p>
                            <p>CMS solutions provide:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Categories</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Tags</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Content Hierarchies</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Custom Taxonomies</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Search and Filtering Capabilities</span></li>
                            </ul>
                            <p>These features ensure content remains structured and easy to access.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp3">User Roles & Permissions</button></h2>
                    <div id="comp3" class="accordion-collapse collapse" data-bs-parent="#cmsComponents">
                        <div class="accordion-body">
                            <p>Role-based access control allows administrators to define permissions for different users.</p>
                            <p>Typical user roles include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Administrator</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Editor</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Author</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Contributor</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Subscriber</span></li>
                            </ul>
                            <p>This ensures that only authorized users can create, modify, approve, or publish content.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp4">Media Management</button></h2>
                    <div id="comp4" class="accordion-collapse collapse" data-bs-parent="#cmsComponents">
                        <div class="accordion-body">
                            <p>CMS platforms include centralized media libraries for managing digital assets such as:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Images</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Videos</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Documents</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Audio Files</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>PDFs</span></li>
                            </ul>
                            <p>Media management features improve content consistency and simplify asset organization.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp5">Themes & Templates</button></h2>
                    <div id="comp5" class="accordion-collapse collapse" data-bs-parent="#cmsComponents">
                        <div class="accordion-body">
                            <p>CMS platforms support customizable themes and templates that allow organizations to modify website design and layout without affecting the underlying content.</p>
                            <p>Benefits include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Consistent Branding</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Flexible Design Customization</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Faster Website Development</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Easy Design Updates</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp6">Version Control</button></h2>
                    <div id="comp6" class="accordion-collapse collapse" data-bs-parent="#cmsComponents">
                        <div class="accordion-body">
                            <p>Version control functionality maintains a history of content revisions and modifications.</p>
                            <p>Benefits include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Content History Tracking</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Revision Comparison</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Rollback to Previous Versions</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Audit Trails</span></li>
                            </ul>
                            <p>This ensures content accuracy and accountability.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Key Features - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Key Features of CMS</h2>
            <div class="accordion service-accordion" id="cmsFeatures" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#feat1" aria-expanded="true">Scheduling & Publishing</button></h2>
                    <div id="feat1" class="accordion-collapse collapse show" data-bs-parent="#cmsFeatures">
                        <div class="accordion-body">
                            <p>Users can schedule content publication for specific dates and times, enabling efficient content planning and automated publishing workflows.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#feat2">Responsive Design</button></h2>
                    <div id="feat2" class="accordion-collapse collapse" data-bs-parent="#cmsFeatures">
                        <div class="accordion-body">
                            <p>Modern CMS platforms support responsive design principles, ensuring websites deliver optimal experiences across:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Desktops</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Tablets</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Smartphones</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Multiple Screen Sizes</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#feat3">Plugins & Extensions</button></h2>
                    <div id="feat3" class="accordion-collapse collapse" data-bs-parent="#cmsFeatures">
                        <div class="accordion-body">
                            <p>CMS platforms support plugins and extensions that enable organizations to add new features and functionalities without custom development.</p>
                            <p>Examples include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>SEO Tools</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Contact Forms</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Security Enhancements</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Analytics Integrations</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>E-Commerce Modules</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Types of CMS - Accordion -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Types of CMS Platforms</h2>
            <div class="accordion service-accordion" id="cmsTypes" data-aos="fade-up" data-aos-duration="900">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#type1" aria-expanded="true">Traditional CMS</button></h2>
                    <div id="type1" class="accordion-collapse collapse show" data-bs-parent="#cmsTypes">
                        <div class="accordion-body">
                            <p>Traditional CMS platforms manage both content and presentation layers.</p>
                            <p>Suitable for:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Corporate Websites</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Blogs</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Informational Websites</span></li>
                            </ul>
                            <p>Popular examples include: WordPress, Joomla, Drupal</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#type2">Headless CMS</button></h2>
                    <div id="type2" class="accordion-collapse collapse" data-bs-parent="#cmsTypes">
                        <div class="accordion-body">
                            <p>Headless CMS separates the content management backend from the front-end presentation layer.</p>
                            <p>Benefits include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Greater Flexibility</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Omnichannel Content Delivery</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>API-Based Content Distribution</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Improved Scalability</span></li>
                            </ul>
                            <p>Headless CMS is ideal for delivering content across websites, mobile apps, IoT devices, and digital platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#type3">Enterprise CMS</button></h2>
                    <div id="type3" class="accordion-collapse collapse" data-bs-parent="#cmsTypes">
                        <div class="accordion-body">
                            <p>Enterprise CMS solutions are designed for large organizations with complex content management requirements.</p>
                            <p>Features include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Advanced Workflows</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Multi-Site Management</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Enterprise Integrations</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Content Governance</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Scalability</span></li>
                            </ul>
                            <p>Enterprise CMS platforms often integrate with systems such as CRM and ERP.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#type4">E-Commerce CMS</button></h2>
                    <div id="type4" class="accordion-collapse collapse" data-bs-parent="#cmsTypes">
                        <div class="accordion-body">
                            <p>E-Commerce CMS platforms are specifically designed for managing online stores and product catalogs.</p>
                            <p>Features include:</p>
                            <ul>
                                <li><i class="fa-solid fa-angles-right"></i><span>Product Management</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Shopping Cart Functionality</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Order Management</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Payment Gateway Integration</span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Inventory Management</span></li>
                            </ul>
                            <p>Popular examples include: Magento, Shopify, WooCommerce</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-section-divider">

            <!-- Benefits - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Benefits of CMS</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Easy Content Creation and Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Reduced Dependency on Technical Teams</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Faster Website Updates</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Improved Collaboration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Better Content Organization</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Enhanced User Experience</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Scalable Website Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Consistent Branding</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> SEO-Friendly Content Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Cost-Effective Website Maintenance</span>
            </div>
            <div class="service-intro-text" data-aos="fade-up" data-aos-duration="900">
                <p>Content Management Systems have transformed web development by enabling organizations and individuals to manage their digital presence efficiently without extensive programming knowledge.</p>
            </div>

            <hr class="service-section-divider">

            <!-- Additional Features - Badge Grid -->
            <h2 class="service-compact-title" data-aos="fade-up" data-aos-duration="900">Additional CMS Features</h2>
            <div class="service-features-grid" data-aos="fade-up" data-aos-duration="900">
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Multi-Language Support</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Search Engine Optimization (SEO)</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Workflow Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Analytics Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Security Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Backup & Recovery</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> API Integration</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Cloud Deployment</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Multi-Site Management</span>
                <span class="service-feature-badge"><i class="fa-solid fa-angles-right"></i> Content Approval Workflows</span>
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
            alt="image">Book a Demo<img class="right-shape"
            src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
        <h2 class="title rr-title-anim-1 white">Empower your organization with a powerful and flexible Content Management System.</h2>
        <p class="cta-section__dec">Schedule a personalized demo today.</p>
    </div>
    <div class="cta-section__btn">
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
