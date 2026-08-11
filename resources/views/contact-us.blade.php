@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with Avark Healthcare Technology Pvt. Ltd. for enterprise software solutions, hospital management systems, or general inquiries.')
@section('meta_keywords', 'Contact Avark, Healthcare Technology, ARK HIMS, IT Support, Software Sales')
@section('og_title', 'Contact Avark Healthcare Technology')

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

    /* ── Form field improvements ── */
    .contact-us-wrapper .comment-form-wrap .form-clt input,
    .contact-us-wrapper .comment-form-wrap .form-clt textarea {
        border: 1.5px solid #e0e0e0;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .contact-us-wrapper .comment-form-wrap .form-clt input:focus,
    .contact-us-wrapper .comment-form-wrap .form-clt textarea:focus {
        border-color: #198754;
        box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.12);
        outline: none;
    }
    .contact-us-wrapper .comment-form-wrap .form-clt input::placeholder,
    .contact-us-wrapper .comment-form-wrap .form-clt textarea::placeholder {
        color: #999;
    }

    /* ── Custom Dropdown ── */
    .custom-select-wrapper {
        position: relative;
        width: 100%;
        user-select: none;
    }

    .custom-select-trigger {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 20px 20px;
        border-radius: 12px;
        background: #F6F6F6;
        border: 1.5px solid #e0e0e0;
        font-size: 16px;
        font-weight: 400;
        color: #999;
        cursor: pointer;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .custom-select-trigger.has-value {
        color: var(--black, #1a1a1a);
    }
    .custom-select-trigger:hover {
        border-color: #c0c0c0;
    }
    .custom-select-trigger.open {
        border-color: #198754;
        box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.12);
    }
    .custom-select-trigger .arrow {
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
        flex-shrink: 0;
        margin-left: 12px;
    }
    .custom-select-trigger.open .arrow {
        transform: rotate(180deg);
    }
    .custom-select-trigger .arrow svg {
        width: 14px;
        height: 14px;
    }

    .custom-select-dropdown {
        position: absolute;
        top: calc(100% + 6px);
        left: 0;
        right: 0;
        background: #fff;
        border: 1.5px solid #e0e0e0;
        border-radius: 12px;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
        z-index: 100;
        max-height: 320px;
        overflow-y: auto;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-8px);
        transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s ease;
        scrollbar-width: thin;
        scrollbar-color: #c0c0c0 transparent;
    }
    .custom-select-dropdown.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .custom-select-dropdown::-webkit-scrollbar {
        width: 6px;
    }
    .custom-select-dropdown::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-select-dropdown::-webkit-scrollbar-thumb {
        background: #c0c0c0;
        border-radius: 3px;
    }

    .custom-select-group-label {
        padding: 12px 20px 6px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        color: #198754;
        pointer-events: none;
    }
    .custom-select-group-label:not(:first-child) {
        border-top: 1px solid #f0f0f0;
        margin-top: 4px;
    }

    .custom-select-option {
        padding: 11px 20px;
        font-size: 15px;
        color: #333;
        cursor: pointer;
        transition: background 0.15s ease, color 0.15s ease;
    }
    .custom-select-option:hover {
        background: #f0faf5;
        color: #198754;
    }
    .custom-select-option.selected {
        background: #e8f5ef;
        color: #198754;
        font-weight: 500;
    }
    .custom-select-option:last-child {
        border-radius: 0 0 12px 12px;
    }

    /* ── Responsive form ── */
    @media only screen and (max-width: 991px) {
        .contact-us-wrapper .comment-form-wrap .form-clt input,
        .contact-us-wrapper .comment-form-wrap .form-clt textarea {
            font-size: 15px;
            padding: 16px 16px;
        }
        .custom-select-trigger {
            padding: 16px 16px;
            font-size: 15px;
        }
    }
    @media only screen and (max-width: 575px) {
        .contact-us-wrapper .comment-form-wrap .form-clt input,
        .contact-us-wrapper .comment-form-wrap .form-clt textarea {
            font-size: 14px;
            padding: 14px 14px;
        }
        .custom-select-trigger {
            padding: 14px 14px;
            font-size: 14px;
        }
    }

    /* ── Bold office names ── */
    .contact-us-wrapper .contact-us__info .contact-us-box h3 strong {
        font-weight: 800;
        font-size: 20px;
        letter-spacing: 0.3px;
    }
</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Contact Us</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Contact Us</li>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>


<!-- Contact Section-3 Start -->
<section class="contact-section section-spacing ">
    <div class="container">
        <div class="contact-us-wrapper">
            <div class="row">

                <div class="col-lg-7">
                    <div class="comment-form-wrap">
                        <h3>Fill the Contact Form</h3>

                        <form action="contact.php" id="contact-form" method="POST">

                            <div class="row">

                                <!-- Name -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-clt">
                                        <input type="text"
                                            name="name"
                                            id="name"
                                            placeholder="Your Full Name"
                                            required>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-clt">
                                        <input type="tel"
                                            name="mobile"
                                            id="mobile"
                                            placeholder="Your Mobile Number"
                                            pattern="[0-9]{10}"
                                            required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-clt">
                                        <input type="email"
                                            name="email"
                                            id="email"
                                            placeholder="Your Email Address"
                                            required>
                                    </div>
                                </div>

                                <!-- Hospital Name -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-clt">
                                        <input type="text"
                                            name="hospital"
                                            id="hospital"
                                            placeholder="Hospital Name (Optional)">
                                    </div>
                                </div>

                                <!-- Service / Product - Custom Dropdown -->
                                <div class="col-12">
                                    <div class="form-clt">
                                        <input type="hidden" name="service" id="service" required>
                                        <div class="custom-select-wrapper" id="customSelectWrapper">
                                            <div class="custom-select-trigger" id="customSelectTrigger">
                                                <span id="customSelectText">Select Service / Product</span>
                                                <span class="arrow">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="custom-select-dropdown" id="customSelectDropdown">
                                                <div class="custom-select-group-label">Products</div>
                                                <div class="custom-select-option" data-value="ArkCloudCast">ArkCloudCast</div>
                                                <div class="custom-select-option" data-value="Dialysis Management System">Dialysis Management System</div>
                                                <div class="custom-select-option" data-value="Digital Signage Solutions">Digital Signage Solutions</div>
                                                <div class="custom-select-option" data-value="Enterprise Support Management">Enterprise Support Management</div>
                                                <div class="custom-select-option" data-value="Feedback Management">Feedback Management</div>
                                                <div class="custom-select-option" data-value="HMS">HMS (Hospital Management System)</div>
                                                <div class="custom-select-option" data-value="Industrial Asset Management">Industrial Asset Management</div>
                                                <div class="custom-select-option" data-value="Inventory Stock Management">Inventory Stock Management</div>
                                                <div class="custom-select-option" data-value="KIOSK Management System">KIOSK Management System</div>
                                                <div class="custom-select-option" data-value="OPD Management System">OPD Management System</div>
                                                <div class="custom-select-option" data-value="Pathology Diagnostic Management">Pathology Diagnostic Management</div>
                                                <div class="custom-select-option" data-value="White Label Practice Management Application">White Label Practice Management Application</div>
                                                <div class="custom-select-group-label">Services</div>
                                                <div class="custom-select-option" data-value="Cloud and Data Migration">Cloud and Data Migration</div>
                                                <div class="custom-select-option" data-value="CMS">CMS</div>
                                                <div class="custom-select-option" data-value="CRM Solutions">CRM Solutions</div>
                                                <div class="custom-select-option" data-value="Custom Software Development">Custom Software Development</div>
                                                <div class="custom-select-option" data-value="Digital Healthcare Solution">Digital Healthcare Solution</div>
                                                <div class="custom-select-option" data-value="Enterprise Integration Services">Enterprise Integration Services</div>
                                                <div class="custom-select-option" data-value="ERP System">ERP System</div>
                                                <div class="custom-select-option" data-value="Mobile App Development">Mobile App Development</div>
                                                <div class="custom-select-option" data-value="Tele Consultation">Tele Consultation</div>
                                                <div class="custom-select-option" data-value="Web Application Development">Web Application Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="form-clt">
                                        <textarea name="message"
                                            id="message"
                                            rows="5"
                                            placeholder="Type your message here..."
                                            required></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="rr-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send Message</span>
                                            <span class="text-two">Send Message</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!-- Custom Dropdown Script -->
                        <script>
                        (function() {
                            var trigger = document.getElementById('customSelectTrigger');
                            var dropdown = document.getElementById('customSelectDropdown');
                            var textEl = document.getElementById('customSelectText');
                            var hiddenInput = document.getElementById('service');
                            var options = dropdown.querySelectorAll('.custom-select-option');

                            trigger.addEventListener('click', function(e) {
                                e.stopPropagation();
                                var isOpen = dropdown.classList.contains('show');
                                if (isOpen) {
                                    dropdown.classList.remove('show');
                                    trigger.classList.remove('open');
                                } else {
                                    dropdown.classList.add('show');
                                    trigger.classList.add('open');
                                }
                            });

                            options.forEach(function(opt) {
                                opt.addEventListener('click', function(e) {
                                    e.stopPropagation();
                                    options.forEach(function(o) { o.classList.remove('selected'); });
                                    opt.classList.add('selected');
                                    hiddenInput.value = opt.getAttribute('data-value');
                                    textEl.textContent = opt.textContent;
                                    trigger.classList.add('has-value');
                                    dropdown.classList.remove('show');
                                    trigger.classList.remove('open');
                                });
                            });

                            document.addEventListener('click', function() {
                                dropdown.classList.remove('show');
                                trigger.classList.remove('open');
                            });
                        })();
                        </script>

                        <!-- WhatsApp Redirection Script -->
                        <script>
                            document.getElementById('contact-form').addEventListener('submit', function(e) {
                                e.preventDefault(); // Prevent default form submission to contact.php
                                
                                // Gather form data
                                var name = document.getElementById('name').value;
                                var mobile = document.getElementById('mobile').value;
                                var email = document.getElementById('email').value;
                                var hospital = document.getElementById('hospital').value;
                                var service = document.getElementById('service').value;
                                var message = document.getElementById('message').value;
                                
                                // Format the message for WhatsApp
                                var text = "Hello Avark IT Services,\n\nI have a new inquiry:\n\n" +
                                           "*Name:* " + name + "\n" +
                                           "*Mobile:* " + mobile + "\n" +
                                           "*Email:* " + email + "\n" +
                                           (hospital ? "*Hospital:* " + hospital + "\n" : "") +
                                           "*Service/Product:* " + service + "\n" +
                                           "*Message:* " + message;
                                           
                                // Target WhatsApp number
                                var whatsappNumber = "917400920717";
                                
                                // URL encode the message text
                                var encodedText = encodeURIComponent(text);
                                
                                // Construct the WhatsApp API URL
                                var whatsappUrl = "https://wa.me/" + whatsappNumber + "?text=" + encodedText;
                                
                                // Open the WhatsApp chat in a new tab
                                window.open(whatsappUrl, '_blank');
                            });
                        </script>
                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="contact-us__info">
                        <div class="text">
                            <h2 class="title">Get in touch with us</h2>
                            <p>Connect with us for healthcare technology solutions, demos, and support.
                            </p>
                        </div>
                        <div class="contact-us-box">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    <a href="tel:917400920717">+91-7400920717</a>
                                </h3>
                                <h3>
                                    <a href="tel:919977699982">+91-9977699982</a>
                                </h3>
                                <p>Call us for any support, we are happy to help.</p>
                            </div>
                        </div>
                        <div class="contact-us-box ">
                            <div class="icon">
                                <i class="fa-solid fa-square-chevron-down"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    <a href="mailto:sales@avark.in">sales@avark.in</a>
                                </h3>
                                <h3>
                                    <a href="mailto:support@avark.in">support@avark.in</a>
                                </h3>
                                <p>Email us anytime for any query.</p>
                            </div>
                        </div>
                        <div class="contact-us-box">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3><strong>Indore Office</strong></h3>
                                <p>A-81, Vistara City, Indore – 452001, Madhya Pradesh, India</p>
                            </div>
                        </div>
                        <div class="contact-us-box mb-0">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3><strong>Bangalore Office</strong></h3>
                                <p>No. 124, 2nd Cross, Nethravathi Street, Uday Nagar, Bengaluru – 560016, Karnataka, India</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="map mb-5 pb-5">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Indore Office Map -->
            <div class="col-lg-6">
                <div class="map-box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.5796739631414!2d75.92894427587633!3d22.78097502529988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631dec5b794003%3A0x61c3f111e90a752d!2sAvark%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1771241199009!5m2!1sen!2sin"
                        style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <!-- Bangalore Office Map -->
            <div class="col-lg-6">
                <div class="map-box">
                    <iframe
                        src="https://maps.google.com/maps?q=No.%20124,%202nd%20Cross,%20Nethravathi%20Street,%20Uday%20Nagar,%20Bengaluru%20%E2%80%93%20560016,%20Karnataka,%20India&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="cta-section__area">
    <div class="container rr-container-1350">
        <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
                        alt="image">Connect With Us <img class="right-shape"
                        src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Let’s Talk — Experience the Future of Healthcare Management</h2>
                <p class="cta-section__dec">Have questions about ARK HIMS or our healthcare solutions? Our team is here to provide the right guidance and solutions tailored to your hospital.</p>
            </div>
            <div class="cta-section__btn">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Book a Demo</span>
                        <span class="text-two">Book a Demo</span>
                    </span>
                </a>
                <a href="{{ route('contact-us') }}" class="rr-btn rr-btn-3">
                    <span class="btn-wrap">
                        <span class="text-one">Request a Quote</span>
                        <span class="text-two">Request a Quote</span>
                    </span>
                </a>
            </div>
            <div class="cta-section__list">
                <ul>
                    <li><i class="fa-regular fa-angles-right"></i> 14-day free trial</li>
                    <li><i class="fa-regular fa-angles-right"></i> No credit card required</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection