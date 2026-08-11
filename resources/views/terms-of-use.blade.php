@extends('layouts.app')

@section('title', 'Terms of Use & Services')
@section('meta_description', 'Read the Terms of Use and Services for Avark Healthcare Technology Pvt. Ltd.')
@section('meta_keywords', 'Avark terms of use, terms of service, healthcare technology terms')
@section('og_title', 'Terms of Use & Services | Avark Healthcare Technology')

@section('content')
<style>
    .terms-page { padding: 100px 0 110px; }
    .terms-page__content { max-width: 960px; margin: 0 auto; color: #555; font-size: 16px; line-height: 1.8; }
    .terms-page__intro { padding: 32px; margin-bottom: 34px; border-left: 4px solid #198754; border-radius: 0 14px 14px 0; background: #f4faf7; }
    .terms-page h2 { margin: 36px 0 12px; color: #1d1d1b; font-size: 25px; font-weight: 700; }
    .terms-page p, .terms-page li { color: #555; }
    .terms-page ul { padding-left: 22px; margin: 12px 0 0; }
    .terms-page a { color: #198754; text-decoration: underline; }
    .terms-page__updated { margin-top: 38px; font-weight: 600; color: #1d1d1b; }
    @media (max-width: 767px) { .terms-page { padding: 65px 0 75px; } .terms-page__intro { padding: 22px; } .terms-page h2 { font-size: 22px; } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title">Terms of Use &amp; Services</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Terms of Use</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="terms-page">
    <div class="container">
        <article class="terms-page__content">
            <div class="terms-page__intro">
                <p class="mb-0">These Terms of Use &amp; Services ("Terms") govern your access to and use of the Avark Healthcare Technology Pvt. Ltd. website, <strong>avark.in</strong> (the "Website"). By accessing or using the Website, you agree to these Terms. If you are using the Website for an organisation, you confirm that you are authorised to accept these Terms on its behalf.</p>
            </div>

            <h2>1. Acceptance and Eligibility</h2>
            <p>You must be legally able to enter into a binding agreement to use the Website. If you use the Website on behalf of a company, hospital, clinic, or other organisation, you represent that you have authority to bind that organisation to these Terms. If you do not agree to these Terms, do not use the Website.</p>

            <h2>2. Website Purpose</h2>
            <p>The Website provides general information about Avark, our healthcare technology products, software development, digital transformation, and related services. Information on the Website is for general business and informational purposes only. It does not constitute medical advice, legal advice, or a guarantee that a particular product or service is suitable for your needs.</p>

            <p>Avark does not provide emergency medical services or clinical care through this Website. Do not use the Website to submit urgent medical requests. If you are experiencing a medical emergency, contact your local emergency services or a qualified healthcare professional immediately.</p>

            <h2>3. Services and Commercial Agreements</h2>
            <p>Any purchase, implementation, subscription, support, or use of an Avark product or service is subject to the applicable proposal, order form, statement of work, licence, or other written agreement between Avark and the customer. If there is a conflict between these Website Terms and a signed agreement, the signed agreement will prevail.</p>
            <p>Website content, product descriptions, features, and availability may change without notice. A request for a demo, quote, brochure, or contact does not create a contract or obligate Avark to provide services.</p>

            <h2>4. Availability and Acceptable Use</h2>
            <p>You agree to use the Website only for lawful purposes. You must not:</p>
            <ul>
                <li>interfere with, disrupt, or attempt to gain unauthorised access to the Website, its systems, or its data;</li>
                <li>use automated tools to scrape, copy, index, or extract Website content without our written permission;</li>
                <li>submit false, misleading, harmful, or unlawful information through the Website; or</li>
                <li>use the Website in a way that infringes another person's rights or damages Avark’s reputation, systems, or services.</li>
            </ul>
            <p>We may restrict or suspend access to the Website where we reasonably believe it is necessary to protect the Website, our users, or Avark. We do not guarantee that the Website or any content will always be available or uninterrupted.</p>

            <h2>5. Your Submissions and Confidential Information</h2>
            <p>You are responsible for the accuracy and legality of information you submit through the Website. Do not send confidential patient information, protected health information, passwords, payment-card data, or other sensitive information through the Website contact form, WhatsApp, or chat widget unless Avark has specifically provided a secure channel for that purpose.</p>
            <p>By submitting an inquiry, you allow Avark to use the information provided to respond to and manage that inquiry. Unless we agree otherwise in writing, a Website inquiry does not create a confidential relationship. You must not submit material that is unlawful, defamatory, infringing, harmful, or that contains malware.</p>

            <h2>6. Intellectual Property</h2>
            <p>The Website, including its text, graphics, logos, designs, software, and other content, is owned by or licensed to Avark and protected by applicable intellectual-property laws. You may view and download Website content for personal or internal business reference only. You may not copy, reproduce, modify, distribute, publish, or commercially exploit Website content without Avark’s prior written permission.</p>

            <h2>7. Third-Party Links and Services</h2>
            <p>The Website may link to or use third-party services, including WhatsApp, Chatway, social media platforms, and Google Maps. These services are provided for convenience. Avark does not control and is not responsible for their content, availability, security, or privacy practices. Your use of those services is governed by their respective terms and policies.</p>

            <h2>8. Fees and Payments</h2>
            <p>Unless an authorised Avark representative provides a written quotation or agreement, Website access, product information, and requests for demos or consultations are provided without charge. Fees, taxes, payment terms, renewal terms, and refunds for Avark products or services will be set out in the applicable written commercial agreement. We are not required to provide a product or service until the relevant agreement is executed.</p>

            <h2>9. Disclaimer</h2>
            <p>The Website is provided on an "as is" and "as available" basis. To the extent permitted by law, Avark makes no express or implied warranties about the Website’s accuracy, completeness, availability, security, or fitness for a particular purpose. We do not guarantee that the Website will be uninterrupted, error-free, or free from harmful components.</p>

            <h2>10. Limitation of Liability</h2>
            <p>To the extent permitted by law, Avark will not be liable for any indirect, incidental, special, consequential, or punitive loss or damage arising from your use of, or inability to use, the Website. Nothing in these Terms excludes liability that cannot be excluded under applicable law.</p>

            <h2>11. Indemnity</h2>
            <p>To the extent permitted by law, you agree to indemnify and hold Avark, its directors, employees, contractors, and partners harmless from claims, losses, liabilities, and expenses arising from your unlawful use of the Website, your breach of these Terms, or your infringement of another person’s rights.</p>

            <h2>12. Privacy</h2>
            <p>Your use of the Website is also governed by our <a href="{{ route('privacy-policy') }}">Privacy Policy</a>, which explains how we handle personal information collected through the Website.</p>

            <h2>13. Changes and Termination</h2>
            <p>We may change, suspend, or discontinue any part of the Website at any time. We may update these Terms by posting a revised version on this page. Your continued use of the Website after an update means you accept the updated Terms.</p>

            <h2>14. Governing Law, Severability, and Contact</h2>
            <p>These Terms are governed by the laws of India. Subject to applicable law, courts in Indore, Madhya Pradesh, will have jurisdiction over disputes arising from these Terms or the Website.</p>
            <p>If any provision of these Terms is found invalid or unenforceable, the remaining provisions will continue in effect. These Terms, together with the Privacy Policy and any applicable written service agreement, form the entire agreement relating to your use of the Website.</p>
            <p>For questions about these Terms, contact Avark Healthcare Technology Pvt. Ltd. at <a href="mailto:support@avark.in">support@avark.in</a> or <a href="tel:+917400920717">+91 74009 20717</a>.</p>

            <p class="terms-page__updated">Last updated: August 11, 2026</p>
        </article>
    </div>
</section>
@endsection
