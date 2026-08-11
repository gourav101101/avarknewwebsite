@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta_description', 'Read the Privacy Policy for Avark Healthcare Technology Pvt. Ltd. and learn how we handle information collected through our website.')
@section('meta_keywords', 'Avark privacy policy, data privacy, healthcare technology privacy')
@section('og_title', 'Privacy Policy | Avark Healthcare Technology')

@section('content')
<style>
    .privacy-policy { padding: 100px 0 110px; }
    .privacy-policy__content { max-width: 960px; margin: 0 auto; color: #555; font-size: 16px; line-height: 1.8; }
    .privacy-policy__intro { padding: 32px; margin-bottom: 34px; border-left: 4px solid #198754; border-radius: 0 14px 14px 0; background: #f4faf7; }
    .privacy-policy h2 { margin: 36px 0 12px; color: #1d1d1b; font-size: 25px; font-weight: 700; }
    .privacy-policy p, .privacy-policy li { color: #555; }
    .privacy-policy ul { padding-left: 22px; margin: 12px 0 0; }
    .privacy-policy a { color: #198754; text-decoration: underline; }
    .privacy-policy__updated { margin-top: 38px; font-weight: 600; color: #1d1d1b; }
    @media (max-width: 767px) { .privacy-policy { padding: 65px 0 75px; } .privacy-policy__intro { padding: 22px; } .privacy-policy h2 { font-size: 22px; } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title">Privacy Policy</h1>
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
                <p class="mb-0">Avark Healthcare Technology Pvt. Ltd. ("Avark", "we", "us", or "our") respects your privacy. This Privacy Policy explains how we collect, use, disclose, and protect information when you visit <strong>avark.in</strong> and use its related contact and communication features (collectively, the "Website"). By using the Website, you agree to this Privacy Policy.</p>
            </div>

            <h2>1. Scope of This Policy</h2>
            <p>This Policy applies to information collected through the Website. It does not apply to third-party websites, platforms, or services that may be linked from the Website, or to customer software environments operated under a separate written agreement. Those services may have their own privacy notices, contractual data-processing terms, and security arrangements.</p>

            <h2>2. Information We Collect</h2>
            <p>We may collect information you choose to provide when you contact us, request a demo or quote, download a brochure, or communicate with us. This can include your name, phone number, email address, organisation or hospital name, the product or service you are interested in, and the content of your message.</p>
            <p>We may also receive technical information automatically when you use the Website, such as your IP address, browser and device type, operating system, pages visited, referring page, approximate location derived from IP address, and the date and time of your visit. This information helps us operate, secure, and improve the Website.</p>
            <p>If you contact us through WhatsApp, email, phone, or chat, we may retain the information contained in that communication and any information needed to respond or follow up. Please provide only information that is necessary for your inquiry.</p>

            <h2>3. How We Use Your Information</h2>
            <p>We use information we collect to:</p>
            <ul>
                <li>respond to your inquiries and provide requested demos, quotes, support, or information;</li>
                <li>understand your interest in our products and services;</li>
                <li>operate, maintain, secure, and improve the Website and our services;</li>
                <li>communicate important updates or service-related information; and</li>
                <li>meet legal, regulatory, and record-keeping obligations.</li>
            </ul>
            <p>Where permitted by applicable law, we may also use business contact information to share information about Avark products, services, events, or updates that may be relevant to you. You can ask us to stop receiving promotional communications at any time by contacting us.</p>

            <h2>4. WhatsApp, Chat, Maps, and Third-Party Services</h2>
            <p>Our contact form may open WhatsApp with the details you enter pre-filled in a message to Avark. If you choose to send that message, your information is shared with WhatsApp/Meta and is subject to its privacy policy. The Website also includes a Chatway chat widget and may embed Google Maps. These providers may collect information directly through their services under their own privacy policies.</p>
            <p>We may use trusted service providers to support our Website, communications, hosting, security, and business operations. They may process information only as needed to provide those services to us and in accordance with applicable obligations.</p>

            <h2>5. Cookies and Similar Technologies</h2>
            <p>The Website and its third-party features may use cookies or similar technologies to enable functionality, remember preferences, protect the Website, and understand general usage. You can control cookies through your browser settings. Disabling cookies may affect some Website features or third-party services.</p>
            <p>Cookies are small files stored on your device. They may be session cookies, which expire when you close your browser, or persistent cookies, which remain for a longer period. Third-party features may use their own cookies or similar technologies. We do not control those technologies; please consult the relevant third party’s privacy policy for more information.</p>

            <h2>6. How We Share Information</h2>
            <p>We do not sell or rent your personal information. We may share information with service providers, professional advisers, or authorities where necessary to comply with law, protect rights and safety, investigate misuse, or respond to a valid legal request. If Avark is involved in a merger, acquisition, financing, or transfer of business assets, information may be transferred as part of that transaction, subject to applicable law.</p>
            <p>We may also share information with an Avark group company or authorised business partner when it is necessary to respond to a request you have made, provide requested services, or support our legitimate business operations. We do not permit service providers to use personal information for their own unrelated marketing purposes.</p>

            <h2>7. Data Security and Retention</h2>
            <p>We use reasonable administrative, technical, and organisational safeguards designed to protect information under our control. No online system is completely secure, so we cannot guarantee absolute security. We retain information only for as long as reasonably necessary for the purposes described in this Policy, including legal, accounting, and operational requirements.</p>
            <p>Retention periods depend on the nature of the information, the purpose for which it was collected, and applicable legal requirements. When information is no longer required, we will delete, anonymise, or securely archive it in accordance with our retention practices, unless we are required or permitted by law to retain it longer.</p>

            <h2>8. Your Choices and Rights</h2>
            <p>You may choose not to provide certain information; however, this may limit our ability to respond to your request or provide particular features. Subject to applicable law, you may request access to, correction of, or deletion of personal information we hold about you. You may also ask questions about our handling of your information by contacting us using the details below.</p>
            <p>Before acting on a request, we may need to verify your identity and authority. We may retain limited information where necessary to comply with legal obligations, resolve disputes, enforce agreements, or protect our rights and systems.</p>

            <h2>9. Children’s Privacy</h2>
            <p>The Website is intended for business users and is not directed to children. We do not knowingly collect personal information from children through the Website. If you believe that a child has provided personal information to us, please contact us so that we can take appropriate steps.</p>

            <h2>10. Links to Other Websites</h2>
            <p>The Website may link to third-party websites and services. We are not responsible for their content, security, or privacy practices. Please review the privacy policy of each third-party site you visit.</p>

            <h2>11. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time. Any revised version will be posted on this page with an updated effective date. We encourage you to review this page periodically.</p>

            <h2>12. Contact Us</h2>
            <p>If you have questions, concerns, or requests regarding this Privacy Policy or your personal information, please contact us at <a href="mailto:support@avark.in">support@avark.in</a> or call <a href="tel:+917400920717">+91 74009 20717</a>.</p>
            <p>Avark Healthcare Technology Pvt. Ltd.<br>A-81, Vistara City, Indore – 452001, Madhya Pradesh, India</p>

            <p class="privacy-policy__updated">Last updated: August 11, 2026</p>
        </article>
    </div>
</section>
@endsection
