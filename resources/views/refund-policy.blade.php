@extends('layouts.app')

@section('title', 'ARK HIMS Refund Policy')
@section('meta_description', 'Hospital Information Management System Subscription Refund Terms & Conditions for ARK HIMS.')
@section('meta_keywords', 'ARK HIMS refund policy, subscription refund, hospital information management system')
@section('og_title', 'ARK HIMS Refund Policy | Avark')

@section('content')
<style>
    .refund-policy { padding: 100px 0 110px; background: var(--site-bg-subtle, #F8FAFF); }
    .refund-policy__content { max-width: 960px; margin: 0 auto; color: #555; font-size: 16px; line-height: 1.8; }
    .refund-policy__intro { padding: 32px; margin-bottom: 34px; border-left: 4px solid #7444FD; border-radius: 0 14px 14px 0; background: var(--site-bg-soft, #F0F4FF); }
    .refund-policy__subtitle { margin: 0 0 6px; color: #1d1d1b; font-size: 20px; font-weight: 700; }
    .refund-policy__effective { margin: 0; color: #555; font-weight: 600; }
    .refund-policy h2 { margin: 36px 0 12px; color: #1d1d1b; font-size: 25px; font-weight: 700; }
    .refund-policy p, .refund-policy li { color: #555; }
    .refund-policy ul { padding-left: 22px; margin: 12px 0 0; }
    .refund-policy a { color: #7444FD; text-decoration: underline; }
    .refund-policy__contact { padding: 24px 28px; border-radius: 14px; background: var(--site-bg-soft, #F0F4FF); }
    .refund-policy__notice { padding: 24px 28px; margin-top: 38px; border-radius: 14px; background: #1d1d1b; color: #fff !important; }
    @media (max-width: 767px) { .refund-policy { padding: 65px 0 75px; } .refund-policy__intro { padding: 22px; } .refund-policy h2 { font-size: 22px; } .refund-policy__subtitle { font-size: 18px; } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title">ARK HIMS Refund Policy</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Refund Policy</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="refund-policy">
    <div class="container">
        <article class="refund-policy__content">
            <div class="refund-policy__intro">
                <p class="refund-policy__subtitle">Hospital Information Management System Subscription Refund Terms &amp; Conditions</p>
                <p class="refund-policy__effective">Effective Date: 19 July 2021</p>
            </div>

            <h2>1. Purpose</h2>
            <p>This Refund Policy explains the terms and conditions applicable to subscription payments made for ARK HIMS software and related subscription services.</p>
            <p>By purchasing or renewing an ARK HIMS subscription, the customer agrees to the terms stated in this policy.</p>

            <h2>2. Subscription Payments</h2>
            <p>ARK HIMS subscriptions are generally offered on a prepaid basis. Subscription fees are payable for the selected subscription period before the service is activated or renewed.</p>
            <p>Once the subscription has been activated, the customer receives access to the software and its subscribed features.</p>

            <h2>3. Refund Eligibility</h2>
            <ul>
                <li>Duplicate payment made accidentally for the same subscription.</li>
                <li>Payment deducted but subscription not activated due to a technical issue attributable to Avark Pvt. Ltd.</li>
                <li>Payment made in error and refund requested before activation, subject to approval.</li>
                <li>Any exceptional circumstance specifically approved by Avark Pvt. Ltd.</li>
            </ul>

            <h2>4. Non-Refundable Situations</h2>
            <ul>
                <li>Change of mind after purchasing the subscription.</li>
                <li>Failure to use the software after activation.</li>
                <li>Non-usage of any module or feature included in the subscription.</li>
                <li>Temporary absence of hospital staff or administrators.</li>
                <li>Failure to configure or use the software properly.</li>
                <li>Decision to discontinue ARK HIMS during the subscription period.</li>
                <li>Subscription downgrade or early termination.</li>
                <li>Incorrect requirements or information provided by the customer.</li>
                <li>Third-party charges already incurred including SMS, WhatsApp, hosting, domain, payment gateway, integrations, etc.</li>
            </ul>

            <h2>5. Technical Issues</h2>
            <p>If a customer experiences a technical problem that prevents reasonable access to ARK HIMS, Avark support should be contacted immediately.</p>
            <p>Refunds will not normally be issued where issues can be resolved through support, configuration, training, or troubleshooting.</p>

            <h2>6. Service Downtime</h2>
            <p>Temporary interruptions caused by maintenance, upgrades, network failures, ISP issues, force majeure events, or third-party infrastructure will not automatically qualify for a refund.</p>

            <h2>7. Duplicate Payments</h2>
            <p>If duplicate payments are made for the same subscription, the excess amount may be refunded after verification.</p>
            <p>Approved refunds will generally be processed to the original payment source wherever technically possible.</p>

            <h2>8. Refund Request Process</h2>
            <p>Please provide the following details:</p>
            <ul>
                <li>Hospital / Organization Name</li>
                <li>Registered Customer Name</li>
                <li>Registered Mobile Number or Email ID</li>
                <li>Subscription / Invoice Number</li>
                <li>Transaction ID or Payment Reference</li>
                <li>Date and Amount of Payment</li>
                <li>Reason for Refund Request</li>
            </ul>

            <h2>9. Refund Approval</h2>
            <p>All refund requests are subject to verification and approval by Avark Pvt. Ltd.</p>
            <p>Approval of one refund request does not guarantee approval of future requests.</p>

            <h2>10. Refund Processing</h2>
            <p>Once approved, refunds will be initiated through the applicable payment method.</p>
            <p>Processing time may vary depending on banks, payment gateways, card issuers, and financial institutions.</p>

            <h2>11. Cancellation and Renewal</h2>
            <p>Cancellation does not automatically entitle the customer to a refund for the remaining subscription period.</p>
            <p>Unless otherwise agreed, cancellation only prevents future renewals while access remains active until the paid subscription expires.</p>

            <h2>12. Changes to Subscription Plans</h2>
            <p>Subscription upgrades, changes, and adjustments will be governed by the applicable commercial terms agreed with Avark Pvt. Ltd.</p>
            <p>Any refund or adjustment resulting from plan changes is subject to approval.</p>

            <h2>13. Data and Account Responsibility</h2>
            <p>Customers are responsible for exporting and retaining any data they are entitled to keep before cancellation or discontinuation of services.</p>

            <h2>14. Policy Changes</h2>
            <p>Avark Pvt. Ltd. reserves the right to update or modify this Refund Policy at any time. Updated versions apply to future subscriptions and transactions from their effective date.</p>

            <h2>15. Contact Information</h2>
            <div class="refund-policy__contact">
                <p><strong>Company:</strong> Avark Pvt. Ltd.<br>
                <strong>Product:</strong> ARK HIMS<br>
                <strong>Website:</strong> <a href="https://avark.in">avark.in</a><br>
                <strong>Email:</strong> <a href="mailto:support@avark.in">support@avark.in</a><br>
                <strong>Phone:</strong> <a href="tel:9977699982">9977699982</a></p>
            </div>

            <p class="refund-policy__notice"><strong>Important Notice:</strong> All subscription purchases should be made after carefully reviewing ARK HIMS features, subscription terms, and suitability for organizational requirements. Except where expressly stated in this policy or required by applicable law, subscription fees paid after activation are non-refundable.</p>
        </article>
    </div>
</section>
@endsection
