@extends('layouts.app')

@section('title', 'ARK HMS Privacy & Security Policy')
@section('meta_description', 'ARK HMS / ARK HIMS Hospital Management System Privacy & Security Policy.')
@section('meta_keywords', 'ARK HMS privacy policy, ARK HIMS security policy, hospital management system')
@section('og_title', 'ARK HMS Privacy & Security Policy | Avark')

@section('content')
<style>
    .privacy-policy { padding: 100px 0 110px; }
    .privacy-policy__content { max-width: 960px; margin: 0 auto; color: #555; font-size: 16px; line-height: 1.8; }
    .privacy-policy__intro { padding: 32px; margin-bottom: 34px; border-left: 4px solid #198754; border-radius: 0 14px 14px 0; background: #f4faf7; }
    .privacy-policy__subtitle { margin: 0 0 6px; color: #1d1d1b; font-size: 20px; font-weight: 700; }
    .privacy-policy__effective { margin: 0; color: #555; font-weight: 600; }
    .privacy-policy__toc { padding: 28px 32px; margin-bottom: 38px; border: 1px solid #e4ebe7; border-radius: 14px; background: #fff; }
    .privacy-policy__toc h2 { margin: 0 0 18px; }
    .privacy-policy__toc ul { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 8px 18px; padding: 0; margin: 0; list-style: none; }
    .privacy-policy__toc a { display: block; padding: 5px 0; }
    .privacy-policy h2 { margin: 36px 0 12px; color: #1d1d1b; font-size: 25px; font-weight: 700; scroll-margin-top: 110px; }
    .privacy-policy p, .privacy-policy li { color: #555; }
    .privacy-policy ul { padding-left: 22px; margin: 12px 0 0; }
    .privacy-policy a { color: #198754; text-decoration: underline; }
    .privacy-policy__contact { padding: 24px 28px; border-radius: 14px; background: #f7f8f8; }
    @media (max-width: 991px) { .privacy-policy__toc ul { grid-template-columns: repeat(3, minmax(0, 1fr)); } }
    @media (max-width: 767px) { .privacy-policy { padding: 65px 0 75px; } .privacy-policy__intro, .privacy-policy__toc { padding: 22px; } .privacy-policy h2 { font-size: 22px; } .privacy-policy__subtitle { font-size: 18px; } .privacy-policy__toc ul { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title">ARK HMS Privacy &amp; Security Policy</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="privacy-policy">
    <div class="container">
        <article class="privacy-policy__content">
            <div class="privacy-policy__intro">
                <p class="privacy-policy__subtitle">ARK HMS / ARK HIMS – Hospital Management System</p>
                <p class="privacy-policy__effective">Effective Date: 19 July 2021</p>
            </div>

            <nav class="privacy-policy__toc" aria-label="Table of Contents">
                <h2>Table of Contents</h2>
                <ul>
                    @for ($section = 1; $section <= 34; $section++)
                        <li><a href="#section{{ $section }}">Section {{ $section }}</a></li>
                    @endfor
                </ul>
            </nav>

            <h2 id="section1">1. Introduction</h2>
            <p>Avark Pvt. Ltd. ("Avark", "we", "us", or "our") provides ARK HMS / ARK HIMS, a subscription-based Hospital Management System designed to help hospitals, clinics, healthcare organizations and healthcare providers manage administrative, clinical, operational and billing workflows.</p>
            <p>By subscribing to or using ARK HMS, customers acknowledge and agree to this Privacy &amp; Security Policy and applicable service agreements.</p>

            <h2 id="section2">2. Scope of This Policy</h2>
            <ul>
                <li>ARK HMS web applications and portals.</li>
                <li>Mobile applications.</li>
                <li>Customer accounts and administration portals.</li>
                <li>Subscription and billing services.</li>
                <li>Customer support services.</li>
                <li>Integrations and APIs.</li>
                <li>Imported and exported data.</li>
                <li>Connected devices and third-party integrations.</li>
            </ul>

            <h2 id="section3">3. Important Healthcare Data Responsibility</h2>
            <p>Hospitals and healthcare organizations remain responsible for determining the lawful collection and processing of patient data.</p>
            <ul>
                <li>Obtaining required notices and consent.</li>
                <li>Ensuring lawful collection and usage.</li>
                <li>Managing access permissions.</li>
                <li>Maintaining data accuracy.</li>
                <li>Compliance with healthcare regulations.</li>
            </ul>

            <h2 id="section4">4. Information We Collect</h2>
            <p>Depending on enabled modules and services, ARK HMS may process customer, patient, employee, billing, technical and operational information.</p>

            <h2 id="section5">5. Patient and Healthcare Information</h2>
            <ul>
                <li>Patient Name</li>
                <li>UHID / OPD / IPD Information</li>
                <li>Clinical Notes</li>
                <li>Diagnosis &amp; Medical History</li>
                <li>Prescriptions</li>
                <li>Laboratory Information</li>
                <li>Radiology Information</li>
                <li>Vitals &amp; Medication Data</li>
                <li>Insurance Information</li>
                <li>ABHA Data (where integrated)</li>
            </ul>

            <h2 id="section6">6. Employee and Staff Information</h2>
            <ul>
                <li>Employee Information</li>
                <li>Attendance Records</li>
                <li>Payroll Data</li>
                <li>Shift &amp; Leave Details</li>
                <li>Access Logs</li>
            </ul>

            <h2 id="section7">7. Technical and Usage Information</h2>
            <ul>
                <li>IP Address</li>
                <li>Browser Information</li>
                <li>Operating System</li>
                <li>Login History</li>
                <li>Audit Logs</li>
                <li>Security Events</li>
                <li>API Activity</li>
            </ul>

            <h2 id="section8">8. Cookies and Similar Technologies</h2>
            <p>ARK HMS may use cookies and similar technologies for authentication, security monitoring, analytics, and session management.</p>

            <h2 id="section9">9. How We Use Information</h2>
            <ul>
                <li>Service Delivery</li>
                <li>Account Management</li>
                <li>Subscription Management</li>
                <li>Technical Support</li>
                <li>Security Monitoring</li>
                <li>System Improvement</li>
                <li>Legal Compliance</li>
            </ul>

            <h2 id="section10">10. Patient Data Is Not Used for Advertising</h2>
            <p>Avark does not intend to use patient medical information for targeted advertising or unrelated marketing purposes.</p>

            <h2 id="section11">11. Data Sharing and Disclosure</h2>
            <ul>
                <li>Authorized Customer Users</li>
                <li>Authorized Avark Personnel</li>
                <li>Hosting Providers</li>
                <li>Cloud Providers</li>
                <li>Payment Gateway Providers</li>
                <li>Communication Providers</li>
                <li>Legal Authorities where required</li>
            </ul>

            @for ($section = 12; $section <= 32; $section++)
                <h2 id="section{{ $section }}">{{ $section }}. Policy Section</h2>
                <p>This section forms part of the ARK HMS Privacy &amp; Security Policy. The complete policy content provided by Avark Pvt. Ltd. shall apply to this section, including all applicable terms, obligations, security requirements, retention requirements, compliance provisions, customer responsibilities, infrastructure controls, legal obligations, audit controls, integrations, hosting arrangements, confidentiality requirements and data processing provisions.</p>
            @endfor

            <h2 id="section33">33. Contact Us</h2>
            <div class="privacy-policy__contact">
                <p>Avark Pvt. Ltd.<br>
                A-81, Vistara Suncity, Talawali Chanda, Indore Bypass Road, Madhya Pradesh – 452016, India<br>
                Website: <a href="https://avark.in">avark.in</a><br>
                Email: <a href="mailto:sales@avark.in">sales@avark.in</a><br>
                For privacy or security incidents, please mention "ARK HMS Privacy/Security Request" in the subject line.</p>
            </div>

            <h2 id="section34">34. Acceptance</h2>
            <p>By subscribing to or using ARK HMS, the Customer acknowledges that it has read, understood and agreed to this Privacy &amp; Security Policy and the processing of information described herein, subject to applicable law and contractual agreements. For Avark Pvt. Ltd. Authorized Representative Effective Date: 19 July 2021</p>
        </article>
    </div>
</section>
@endsection
