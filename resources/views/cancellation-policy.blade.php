@extends('layouts.app')

@section('title', 'ARK HMS Cancellation Policy')
@section('meta_description', 'Hospital Management System Subscription Cancellation Terms & Conditions for ARK HMS.')
@section('meta_keywords', 'ARK HMS cancellation policy, subscription cancellation, hospital management system')
@section('og_title', 'ARK HMS Cancellation Policy | Avark')

@section('content')
<style>
    .cancellation-policy { padding: 100px 0 110px; }
    .cancellation-policy__content { max-width: 960px; margin: 0 auto; color: #555; font-size: 16px; line-height: 1.8; }
    .cancellation-policy__intro { padding: 32px; margin-bottom: 34px; border-left: 4px solid #198754; border-radius: 0 14px 14px 0; background: #f4faf7; }
    .cancellation-policy__subtitle { margin: 0 0 6px; color: #1d1d1b; font-size: 20px; font-weight: 700; }
    .cancellation-policy__effective { margin: 0; color: #555; font-weight: 600; }
    .cancellation-policy h2 { margin: 36px 0 12px; color: #1d1d1b; font-size: 25px; font-weight: 700; }
    .cancellation-policy p, .cancellation-policy li { color: #555; }
    .cancellation-policy ul { padding-left: 22px; margin: 12px 0 0; }
    .cancellation-policy a { color: #198754; text-decoration: underline; }
    .cancellation-policy__contact { padding: 24px 28px; border-radius: 14px; background: #f7f8f8; }
    .cancellation-policy__notice { padding: 24px 28px; margin-top: 38px; border-radius: 14px; background: #1d1d1b; color: #fff !important; }
    @media (max-width: 767px) { .cancellation-policy { padding: 65px 0 75px; } .cancellation-policy__intro { padding: 22px; } .cancellation-policy h2 { font-size: 22px; } .cancellation-policy__subtitle { font-size: 18px; } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title">ARK HMS Cancellation Policy</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Cancellation Policy</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="cancellation-policy">
    <div class="container">
        <article class="cancellation-policy__content">
            <div class="cancellation-policy__intro">
                <p class="cancellation-policy__subtitle">Hospital Management System Subscription Cancellation Terms &amp; Conditions</p>
                <p class="cancellation-policy__effective">Effective Date: 19 July 2021</p>
            </div>

            <h2>1. Purpose</h2>
            <p>This Cancellation Policy defines the terms and conditions for cancellation of an ARK HMS subscription purchased by a hospital, clinic, healthcare organization, or other customer.</p>
            <p>By purchasing an ARK HMS subscription, the customer agrees to the terms of this policy.</p>

            <h2>2. Subscription Cancellation</h2>
            <p>Customers may request cancellation of their ARK HMS subscription at any time by contacting Avark Pvt. Ltd. through the official support or communication channel.</p>
            <p>Cancellation requests should include:</p>
            <ul>
                <li>Hospital / Organization Name</li>
                <li>Registered Customer Name</li>
                <li>Registered Mobile Number or Email ID</li>
                <li>Subscription / Invoice Number</li>
                <li>Reason for Cancellation</li>
            </ul>

            <h2>3. Cancellation After Activation</h2>
            <p>Once an ARK HMS subscription has been activated, the customer may discontinue the service.</p>
            <p>However, cancellation does not automatically entitle the customer to a refund for the unused portion of the subscription period.</p>
            <p>The subscription will normally remain active until the end of the paid subscription period unless otherwise agreed by Avark Pvt. Ltd.</p>

            <h2>4. Cancellation Before Activation</h2>
            <p>If a customer requests cancellation before the subscription is activated, Avark Pvt. Ltd. may consider the cancellation and refund request, subject to verification and the applicable Refund Policy.</p>

            <h2>5. Automatic Renewal</h2>
            <p>If the subscription is configured for automatic renewal, the customer may request cancellation of future renewals before the next billing date.</p>
            <p>Once a renewal payment has been successfully processed, the applicable Refund Policy will apply.</p>

            <h2>6. Cancellation Due to Non-Payment</h2>
            <p>Avark Pvt. Ltd. reserves the right to suspend or terminate ARK HMS services if subscription fees or other applicable charges remain unpaid after the due date.</p>
            <p>Suspension or termination due to non-payment does not waive any outstanding payment obligations of the customer.</p>

            <h2>7. Cancellation by Avark Pvt. Ltd.</h2>
            <p>Avark Pvt. Ltd. may suspend or terminate an ARK HMS subscription in cases including:</p>
            <ul>
                <li>Non-payment of subscription or agreed charges.</li>
                <li>Violation of ARK HMS Terms and Conditions.</li>
                <li>Unauthorized, fraudulent, illegal, or abusive use of the service.</li>
                <li>Attempted unauthorized access to the system or infrastructure.</li>
                <li>Activities that may compromise system security or other customers.</li>
                <li>Any situation where termination is reasonably necessary to protect the service, company, customers, or legal requirements.</li>
            </ul>

            <h2>8. Effect of Cancellation</h2>
            <p>After the subscription expires or is terminated:</p>
            <ul>
                <li>Access to ARK HMS may be disabled.</li>
                <li>Login credentials may no longer provide access to the system.</li>
                <li>Subscription-based features and services may no longer be available.</li>
                <li>Outstanding invoices or charges will remain payable.</li>
                <li>Data retention and deletion will be handled according to applicable service terms.</li>
            </ul>

            <h2>9. Customer Data</h2>
            <p>Customers are responsible for requesting or exporting any required data before the subscription expires or is cancelled.</p>
            <p>Where applicable, Avark Pvt. Ltd. may provide a reasonable data-export facility, subject to account status, technical limitations, and applicable charges.</p>

            <h2>10. Re-Activation</h2>
            <p>A cancelled or expired ARK HMS subscription may be reactivated subject to:</p>
            <ul>
                <li>Availability of the service.</li>
                <li>Payment of applicable subscription charges.</li>
                <li>Settlement of outstanding dues.</li>
                <li>Current commercial and technical terms of ARK HMS.</li>
            </ul>

            <h2>11. No Partial-Term Refund</h2>
            <p>Unless specifically approved by Avark Pvt. Ltd. or required under applicable law, no prorated refund will be provided for the unused portion of an active subscription period after the customer requests cancellation.</p>

            <h2>12. Changes to This Policy</h2>
            <p>Avark Pvt. Ltd. reserves the right to modify this Cancellation Policy from time to time. Changes will apply to future subscriptions and transactions from the effective date of the revised policy.</p>

            <h2>13. Contact Information</h2>
            <div class="cancellation-policy__contact">
                <p><strong>Company:</strong> Avark Pvt. Ltd.<br>
                <strong>Product:</strong> ARK HMS<br>
                <strong>Website:</strong> <a href="https://avark.in">avark.in</a><br>
                <strong>Email:</strong> <a href="mailto:support@avark.in">support@avark.in</a><br>
                <strong>Phone:</strong> <a href="tel:9977699982">9977699982</a></p>
            </div>

            <p class="cancellation-policy__notice"><strong>Important Notice</strong> Cancellation of an ARK HMS subscription is different from a refund. Cancellation stops future service and renewal obligations as applicable, while refund eligibility is governed separately by the ARK HMS Refund Policy.</p>
        </article>
    </div>
</section>
@endsection
