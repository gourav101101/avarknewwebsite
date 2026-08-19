@extends('layouts.app')

@section('title', 'ARK HIMS Subscription Terms and Conditions')
@section('meta_description', 'ARK HIMS / ARK HMS Hospital Management System Subscription Terms and Conditions.')
@section('meta_keywords', 'ARK HIMS subscription terms, ARK HMS terms and conditions, hospital management system')
@section('og_title', 'ARK HIMS Subscription Terms and Conditions | Avark')

@section('content')
<style>
    .terms-policy { padding: 100px 0 110px; }
    .terms-policy__content { max-width: 960px; margin: 0 auto; color: #555; font-size: 16px; line-height: 1.8; }
    .terms-policy__intro { padding: 32px; margin-bottom: 34px; border-left: 4px solid #198754; border-radius: 0 14px 14px 0; background: #f4faf7; }
    .terms-policy__subtitle { margin: 0 0 6px; color: #1d1d1b; font-size: 20px; font-weight: 700; }
    .terms-policy__effective { margin: 0; color: #555; font-weight: 600; }
    .terms-policy h2 { margin: 36px 0 12px; color: #1d1d1b; font-size: 25px; font-weight: 700; scroll-margin-top: 110px; }
    .terms-policy__provider { padding: 24px 28px; margin-bottom: 34px; border-radius: 14px; background: #f7f8f8; }
    .terms-policy__provider h2 { margin-top: 0; }
    .terms-policy__line { margin: 5px 0; color: #555; }
    .terms-policy__spaced { margin-top: 18px; }
    @media (max-width: 767px) { .terms-policy { padding: 65px 0 75px; } .terms-policy__intro, .terms-policy__provider { padding: 22px; } .terms-policy h2 { font-size: 22px; } .terms-policy__subtitle { font-size: 18px; } }
</style>

<section class="breadcrumb-section__area">
    <div class="container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h1 class="breadcrumb-section__title">ARK HIMS Subscription Terms and Conditions</h1>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Terms and Conditions</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

@php
$policyText = <<<'POLICY'
ARK HIMS Subscription Terms and Conditions
ARK HIMS / ARK HMS – Hospital Management System

Effective Date: 19 July 2021
Product & Service Provider
Product: ARK HIMS / ARK HMS – Hospital Management System

Service Provider: Avark Pvt. Ltd.

Website: avark.in

1. Agreement
These Terms and Conditions ("Terms") govern the purchase and use of the ARK HIMS / ARK HMS subscription service ("Service") provided by Avark Pvt. Ltd. ("Avark", "we", "us", or "our").

The person, hospital, clinic, healthcare organization, company, or other entity purchasing or using the Service is referred to as the "Customer", "Hospital", "Organization", "you", or "your".

By purchasing, activating, renewing, accessing, or using ARK HIMS, the Customer agrees to these Terms.

If the Customer does not agree with these Terms, the Customer should not purchase or use the Service.

2. ARK HIMS Subscription Service
ARK HIMS is a subscription-based Hospital Management System that may provide modules and features including, depending on the Customer's selected plan:

Patient Registration
OPD Management
IPD Management
Appointment Management
Doctor Management
Bed Management
Nursing Management
Billing and Receipts
Pharmacy Management
Laboratory Management
Radiology/Diagnostic Management
Inventory Management
Accounting
HR and Attendance
Payroll
Reports and Dashboards
WhatsApp/SMS integrations
Payment gateway integrations
Medical device integrations
ABHA/ABDM-related integrations where supported
APIs and third-party integrations
Other modules introduced or made available by Avark
The exact features available to the Customer shall depend on the subscription plan, commercial proposal, order, invoice, or written agreement accepted by the Customer.

3. Subscription License
Subject to payment of applicable subscription fees, Avark grants the Customer a limited, non-exclusive, non-transferable and revocable right to access and use ARK HIMS during the active subscription period.

The subscription does not transfer ownership of ARK HIMS software, source code, databases, designs, documentation, trademarks, or intellectual property to the Customer.

4. Subscription Period
The subscription period will be specified in the applicable:

Subscription plan
Invoice
Quotation
Purchase order
Commercial proposal
Written agreement between Avark and the Customer
The subscription may be monthly, annual, or for another period offered by Avark.

The subscription begins from the activation date or such other date specified in the applicable commercial document.

5. Subscription Fees
The Customer shall pay the subscription fees applicable to the selected ARK HIMS plan.

Subscription fees may depend on factors including:

Selected modules
Number of users
Number of beds
Number of branches/locations
Deployment model
Integrations
Storage requirements
Support requirements
Customization
Additional services
Other commercially agreed requirements
Applicable taxes, including GST, shall be charged as required by law.

6. Payment Terms
Subscription fees must be paid according to the payment terms specified in the invoice, quotation, purchase order, or subscription plan.

Subscription services are prepaid.
Avark may restrict activation, renewal, or continued access where applicable fees remain unpaid.

7. Renewal
Unless otherwise agreed, the Customer must renew the subscription before its expiry to continue using ARK HIMS.

Where automatic renewal is specifically enabled, the subscription may renew according to the applicable renewal terms.

Avark may notify the Customer regarding upcoming expiry or renewal.

Failure to renew may result in suspension or termination of access.

8. Price Changes
Avark may revise subscription fees, plans, modules, features, or commercial terms from time to time.

For an existing active subscription, any applicable price change will normally be communicated before the next renewal period.

The Customer may choose not to renew if it does not accept the revised commercial terms.

9. Refund Policy
Subscription payments are generally non-refundable after activation.

Refunds may be considered in circumstances specifically described in the ARK HIMS Refund Policy, including eligible duplicate payments or certain technical activation failures.

No refund will normally be provided merely because:

The Customer does not use the software
The Customer uses only some modules
The Customer changes its business requirements
The Customer cancels before the subscription expires
The Customer does not use the remaining subscription period
The Refund Policy forms part of these Terms.

10. Cancellation Policy
The Customer may request cancellation of its ARK HIMS subscription.

Cancellation will generally stop future renewal obligations but will not automatically entitle the Customer to a refund for the remaining paid subscription period.

The separate ARK HIMS Cancellation Policy shall apply.

11. Account and User Access
The Customer is responsible for:

Creating authorized users
Maintaining accurate user information
Assigning appropriate roles
Protecting login credentials
Removing access for former employees
Preventing credential sharing
Maintaining appropriate internal access-control procedures
Each user must use the account only for authorized purposes.

The Customer must immediately notify Avark if it suspects unauthorized access.

12. Customer Responsibility for Patient Data
ARK HIMS may be used to store and process patient and healthcare information.

The Customer is responsible for ensuring that:

Patient information is collected lawfully
Required notices and consents are obtained where applicable
Information is entered accurately
Access is provided only to authorized personnel
Patient confidentiality is maintained
Applicable healthcare and data-protection requirements are followed
Avark provides the technology platform and does not determine the Customer's medical, clinical, or legal decisions.

13. Customer Data
Information uploaded, entered, generated, or stored by the Customer through ARK HIMS is referred to as Customer Data.

Subject to these Terms, the Customer retains its rights in Customer Data.

The Customer grants Avark the limited rights necessary to host, store, transmit, process, backup, secure, support, and otherwise provide ARK HIMS services.

14. Healthcare and Patient Information
Customer Data may contain sensitive information, including:

Patient demographic information
Medical records
Diagnoses
Prescriptions
Laboratory reports
Radiology information
Vital signs
Billing information
Insurance information
ABHA/health identity information
Employee information
Other healthcare-related information
Avark will process such information only as reasonably necessary to provide the Service, comply with applicable law, maintain security, provide support, and fulfil contractual obligations.

15. Privacy and Data Protection
The Customer and Avark shall handle personal data in accordance with applicable privacy and data-protection laws.

Where Avark processes personal data on behalf of the Customer, the Customer may act as the party determining the purpose and means of processing, while Avark may process such data on the Customer's behalf as a service provider/data processor, depending on the applicable legal framework and specific processing arrangement.

The Customer remains responsible for its lawful use of personal data.

The ARK HIMS Privacy & Security Policy forms part of these Terms.

16. Data Security
Avark will implement reasonable technical and organizational measures designed to protect Customer Data against unauthorized access, loss, alteration, misuse, or disclosure.

Security measures may include:

Authentication
Role-based access control
Secure communications
Server security
Access restrictions
Audit logs
Backup procedures
Monitoring
Security updates
Other reasonable security controls
No online service can guarantee absolute security.

17. Backup and Data Recovery
Where included in the applicable hosting/service arrangement, Avark may maintain backups for disaster recovery and service restoration.

Backup frequency, retention, restoration time, and recovery services may vary according to the Customer's subscription and deployment model.

The Customer should maintain appropriate independent backups of critical information where required by its internal policies or applicable law.

18. Data Retention After Expiry or Cancellation
After subscription expiry or termination, Customer Data may remain temporarily available in active systems or backups according to Avark's applicable data-retention procedures.

The Customer should export or request required data before the subscription expires or is terminated.

Avark may delete or anonymize Customer Data after the applicable retention period, subject to legal, contractual, backup, and security requirements.

19. Data Export
Where technically available, Avark may provide Customer Data export facilities.

Data export may be subject to:

Subscription status
Technical limitations
Data format
Applicable charges
Outstanding payments
Reasonable processing requirements
Avark will not intentionally withhold Customer Data contrary to applicable law or a specific contractual obligation.

20. Hosting
ARK HIMS may be deployed using:

Avark-managed infrastructure
Third-party cloud infrastructure
Customer-controlled/on-premise infrastructure
Another deployment arrangement agreed with the Customer
The applicable hosting model will be determined by the Customer's commercial agreement.

21. On-Premise Deployment
Where ARK HIMS is deployed on the Customer's own server or infrastructure, the Customer is responsible for the security and availability of that infrastructure, including:

Server hardware
Network
Firewall
Operating system
Physical security
Internet connectivity
Local backup
Antivirus/security controls
Authorized server access
Avark's responsibility in such deployments is limited to the software and services expressly agreed with the Customer.

22. Third-Party Integrations
ARK HIMS may integrate with third-party services, including:

Payment gateways
SMS providers
WhatsApp/communication platforms
Accounting software
Laboratory systems
Diagnostic systems
Medical devices
Government platforms
ABDM/ABHA-related services
Other third-party systems
Third-party services may have separate fees, terms, privacy policies, technical requirements, and availability limitations.

Avark is not responsible for outages, errors, changes, or failures of third-party services beyond Avark's reasonable control.

23. Medical Devices and External Data
Where ARK HIMS receives information from medical devices or external systems, the Customer is responsible for ensuring that:

The device is properly configured
The device is maintained
Patient/device mapping is correct
Data is clinically reviewed where required
Staff use the system appropriately
Avark does not provide medical diagnosis or clinical decision-making through ARK HIMS.

ARK HIMS should not be treated as a replacement for professional medical judgment.

24. Software Updates
Avark may periodically release:

Bug fixes
Security updates
Performance improvements
New features
Module enhancements
Interface changes
Database improvements
Updates may be deployed automatically or manually depending on the deployment model.

Avark may temporarily restrict access during scheduled maintenance where reasonably necessary.

25. Support Services
Support services may include:

Technical assistance
Troubleshooting
Configuration support
Software updates
User assistance
Issue investigation
The scope and availability of support may depend on the Customer's subscription plan or separate service agreement.

Customization, on-site visits, training, data migration, and special integrations may be charged separately unless included in the Customer's commercial agreement.

26. Service Availability
Avark will make reasonable efforts to maintain ARK HIMS availability.

However, uninterrupted service is not guaranteed.

Service interruptions may occur due to:

Scheduled maintenance
Emergency maintenance
Internet/network failure
Cloud or hosting provider issues
Cybersecurity incidents
Hardware failure
Third-party service failures
Force majeure events
Circumstances outside Avark's reasonable control
27. Acceptable Use
The Customer shall not:

Attempt unauthorized access
Circumvent security controls
Reverse engineer the software
Copy or resell ARK HIMS
Rent, lease, or sublicense the Service without written permission
Introduce malware or harmful code
Interfere with system infrastructure
Access another Customer's information
Use the Service for unlawful purposes
Abuse APIs or system resources
Share credentials improperly
Use ARK HIMS in a manner that could harm Avark or other customers
28. Intellectual Property
ARK HIMS and all associated intellectual property remain the property of Avark Pvt. Ltd. or its respective licensors.

This includes, without limitation:

Source code
Object code
Software architecture
User interface
Designs
Logos
Trademarks
Documentation
APIs
Database structures
Reports
Algorithms
Workflows
Proprietary technology
No ownership rights are transferred to the Customer through subscription.

29. Customer Content and Feedback
The Customer may provide suggestions, feedback, recommendations, or feature requests.

Avark may use such feedback to improve ARK HIMS without creating an obligation to provide the suggested feature.

30. Confidentiality
Each party shall maintain the confidentiality of confidential information received from the other party.

Confidential information shall not include information that:

Is publicly available
Was already lawfully known
Is independently developed
Is received lawfully from another source
Must be disclosed by law or lawful authority
31. Suspension of Service
Avark may temporarily suspend access where reasonably necessary due to:

Non-payment
Security threats
Suspected unauthorized access
Fraudulent activity
Material violation of these Terms
Illegal use
Abuse of system resources
Other circumstances where suspension is reasonably necessary
Where reasonably practicable, Avark will provide notice before suspension.

32. Termination
Either party may terminate the subscription in accordance with the applicable subscription and cancellation terms.

Avark may terminate or suspend the Service where the Customer materially breaches these Terms and fails to remedy the breach within a reasonable period after notice, where remediation is possible.

Termination does not eliminate payment obligations already incurred.

33. Effect of Termination
The Customer's right to access ARK HIMS will end.
Future subscription services will cease.
Outstanding amounts remain payable.
Data export may be requested subject to applicable terms.
Customer Data will be retained and deleted according to applicable policy.
Confidentiality obligations will continue where applicable.
Intellectual property provisions will survive termination.
34. Disclaimer Regarding Medical Decisions
ARK HIMS is a software and administrative/clinical information-management platform.

Avark does not provide medical diagnosis, treatment, clinical advice, or medical judgment through ARK HIMS.

Healthcare professionals and the Customer remain solely responsible for:

Patient diagnosis
Treatment decisions
Medication decisions
Clinical interpretation
Emergency decisions
Patient care
35. Accuracy of Information
Avark provides tools for recording, processing, and displaying information.

The Customer is responsible for verifying information entered into ARK HIMS.

Avark is not responsible for clinical or administrative consequences arising from inaccurate, incomplete, incorrectly mapped, or improperly entered information by Customer users.

36. Limitation of Liability
To the maximum extent permitted by applicable law, Avark shall not be liable for indirect, incidental, special, consequential, exemplary, or loss-of-profit damages arising from the use or inability to use ARK HIMS.

Avark's aggregate liability arising from the subscription shall, to the extent legally permissible, be limited to the subscription fees actually paid by the Customer to Avark for the applicable subscription period giving rise to the claim.

This limitation shall not apply to liability that cannot legally be limited or excluded.

37. Force Majeure
Avark shall not be liable for failure or delay caused by circumstances beyond its reasonable control, including:

Natural disasters
Fire
Flood
War
Terrorism
Government action
Internet or telecommunications failure
Major infrastructure failure
Cybersecurity events
Power failure
Cloud provider failure
Other force majeure events
38. Indemnification
The Customer agrees to indemnify and hold Avark harmless from claims, losses, liabilities, damages, or expenses arising from:

Unlawful use of ARK HIMS
Unauthorized use of Customer accounts
Violation of applicable law
Violation of these Terms
Unauthorized disclosure or misuse of patient information
Customer-provided content
Claims resulting from Customer's clinical or business decisions
39. Changes to ARK HIMS
Avark may modify, enhance, replace, or discontinue features of ARK HIMS from time to time.

Avark will make reasonable efforts to avoid materially reducing core functionality during an active subscription period, except where necessary for security, legal compliance, technical limitations, or circumstances beyond reasonable control.

40. Changes to These Terms
Avark may update these Terms periodically.

Updated Terms may be published on the Avark website or communicated to Customers through appropriate channels.

Continued use or renewal of ARK HIMS after the effective date of updated Terms may constitute acceptance of the revised Terms, subject to applicable law.

41. Electronic Acceptance
The Customer may accept these Terms electronically through:

Website acceptance
Subscription checkout
Digital signature
Email confirmation
Purchase order
Electronic communication
Continued use of the Service
Electronic records and electronic contracts may have legal recognition under applicable Indian law.

42. Governing Law
These Terms shall be governed by the laws of India.

Subject to applicable law and the dispute-resolution provisions agreed between the parties, disputes shall be subject to the jurisdiction of the competent courts having jurisdiction over the applicable place of Avark's registered/contracting office.

43. Dispute Resolution
The parties shall first attempt to resolve disputes through good-faith discussions.

Where the parties have separately agreed to arbitration, such arbitration agreement shall apply.

Nothing in these Terms prevents either party from seeking urgent legal or equitable relief where such relief is available under applicable law.

44. Severability
If any provision of these Terms is determined to be invalid, unlawful, or unenforceable, the remaining provisions shall continue to remain effective to the extent permitted by law.

45. Entire Agreement
These Terms, together with the applicable:

Subscription Plan
Quotation
Invoice
Order Form
Privacy & Security Policy
Refund Policy
Cancellation Policy
Data Processing Agreement, where applicable
Other written commercial agreements
constitute the agreement between Avark and the Customer concerning the ARK HIMS subscription.

Where there is a conflict between documents, the specific written commercial agreement signed by both parties shall prevail to the extent of the conflict.

46. Contact Information
 Avark Pvt. Ltd.
 A-81, Vistara Suncity, Talawali Chanda, Indore Bypass Road, Madhya Pradesh – 452016, India
 Product: ARK HIMS / ARK HMS
 Website: avark.in
 Email: sales@avark.in
47. Customer Acceptance
By purchasing, activating, renewing, accessing, or using ARK HIMS, the Customer confirms that it has read, understood, and agreed to these Subscription Terms and Conditions.

For Avark Pvt. Ltd.

Authorized Representative
Avark Pvt. Ltd.

Effective Date: 19 July 2021
POLICY;
$policyLines = preg_split('/\R/u', $policyText);
$previousWasBlank = false;
@endphp

<section class="terms-policy">
    <div class="container">
        <article class="terms-policy__content">
            @foreach ($policyLines as $lineNumber => $policyLine)
                @php
                    $policyLine = trim($policyLine);
                    $isBlank = $policyLine === '';
                    $isSection = preg_match('/^(\d+)\.\s/u', $policyLine, $sectionMatch) === 1;
                @endphp

                @if ($lineNumber === 0)
                    @continue
                @elseif ($isBlank)
                    @php $previousWasBlank = true; @endphp
                    @continue
                @elseif ($lineNumber === 1)
                    <div class="terms-policy__intro">
                        <p class="terms-policy__subtitle">{{ $policyLine }}</p>
                @elseif ($policyLine === 'Effective Date: 19 July 2021' && $lineNumber < 5)
                        <p class="terms-policy__effective">{{ $policyLine }}</p>
                    </div>
                @elseif ($policyLine === 'Product & Service Provider')
                    <div class="terms-policy__provider">
                        <h2>{{ $policyLine }}</h2>
                @elseif ($isSection)
                    @if ((int) $sectionMatch[1] === 1)
                    </div>
                    @endif
                    <h2 id="section{{ $sectionMatch[1] }}">{{ $policyLine }}</h2>
                @else
                    <p class="terms-policy__line{{ $previousWasBlank ? ' terms-policy__spaced' : '' }}">{{ $policyLine }}</p>
                @endif

                @php $previousWasBlank = false; @endphp
            @endforeach
        </article>
    </div>
</section>
@endsection
