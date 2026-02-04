<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Patients - World-Class Healthcare | Prayag Hospital</title>

    <?php include 'header-links.php'; ?>
    <link rel="stylesheet" href="../assets/css/international-journey.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">International Patients</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="international-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="hero-title">Welcome to Prayag Hospital</h1>
                    <p class="hero-subtitle">World-Class Healthcare for International Patients</p>
                    <p class="hero-description">Experience exceptional medical care in India with our comprehensive support services designed specifically for international patients. From your first inquiry to post-treatment follow-up, we're with you every step of the way.</p>
                    <div class="hero-actions">
                        <a href="#contact-form" class="btn btn-primary-prayag btn-lg">
                            <i class="fas fa-envelope"></i> Request a Quote
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="https://www.prayaghospital.in/images/prayag-hospital.jpg" alt="Prayag Hospital" class="img-fluid rounded-lg shadow-lg">
                        <div class="hero-badge">
                            <div class="badge-content">
                                <i class="fas fa-globe"></i>
                                <div>
                                    <strong>35+</strong>
                                    <span>Countries Served</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="stat-number">15,000+</h3>
                        <p class="stat-label">International Patients</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h3 class="stat-number">35+</h3>
                        <p class="stat-label">Countries Served</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="stat-number">98%</h3>
                        <p class="stat-label">Success Rate</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="stat-number">24/7</h3>
                        <p class="stat-label">Dedicated Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step-by-Step Process Section -->
    <section class="process-section" id="process">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Your Journey to Recovery</h2>
                <p class="section-description">A simple, transparent process designed for your convenience</p>
            </div>

            <div class="process-timeline-wrapper">
                <div class="timeline-center-line"></div>
                
                <!-- Step 1: Content Left, Image Right -->
                <div class="timeline-row">
                    <div class="timeline-col content-col">
                        <div class="timeline-content left-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-file-medical"></i>
                                </div>

                            </div>
                            <h3 class="step-title">Initial Consultation</h3>
                            <p class="step-description">Share your medical reports and concerns with our international patient coordinator.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step1Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step1Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>What You Need:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Recent medical reports</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Doctor's referral letter</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Brief medical history</li>
                                    </ul>
                                    <div class="step-time mt-2">
                                        <i class="fas fa-clock text-warning me-2"></i> <strong>24-48 hours</strong> response time
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Initial-Consultation.webp" alt="Initial Consultation" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Step 2: Image Left, Content Right -->
                <div class="timeline-row reverse">
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Medical-plan.webp" alt="Medical Opinion" class="img-fluid">
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col content-col">
                        <div class="timeline-content right-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-user-md"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Medical Opinion & Plan</h3>
                            <p class="step-description">Our specialists review your case and provide a comprehensive treatment plan and cost estimate.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step2Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step2Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>You Will Receive:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Detailed medical opinion</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Estimated cost breakdown</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Expected duration of stay</li>
                                    </ul>
                                    <div class="step-time mt-2">
                                        <i class="fas fa-clock text-warning me-2"></i> <strong>3-5 days</strong> evaluation
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Content Left, Image Right -->
                <div class="timeline-row">
                    <div class="timeline-col content-col">
                        <div class="timeline-content left-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-passport"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Visa & Travel</h3>
                            <p class="step-description">We assist with medical visa invitation letters and help plan your travel to India.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step3Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step3Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>Our Support:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Visa invitation letter</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Accomodation booking</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Flight assistance</li>
                                    </ul>
                                    <div class="step-time mt-2">
                                        <i class="fas fa-clock text-warning me-2"></i> <strong>7-14 days</strong> processing
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Visa-Travel.webp" alt="Visa & Travel" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Step 4: Image Left, Content Right -->
                <div class="timeline-row reverse">
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Arrival-Welcome.webp" alt="Arrival" class="img-fluid">
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col content-col">
                        <div class="timeline-content right-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-plane-arrival"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Arrival & Welcome</h3>
                            <p class="step-description">Comfortable arrival with our dedicated team greeting you at the airport for transfer.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step4Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step4Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>Upon Arrival:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Airport pickup</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Local SIM & assistance</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Hotel/Hospital transfer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5: Content Left, Image Right -->
                <div class="timeline-row">
                    <div class="timeline-col content-col">
                        <div class="timeline-content left-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-hospital-user"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Pre-Treatment</h3>
                            <p class="step-description">Meet your medical team, undergo diagnostics, and finalize the treatment plan.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step5Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step5Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>Process:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Specialist consultation</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Pre-op tests</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Consent & Documentation</li>
                                    </ul>
                                    <div class="step-time mt-2">
                                        <i class="fas fa-clock text-warning me-2"></i> <strong>1-2 days</strong> assessment
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/pre-treatment.webp" alt="Pre-Treatment" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Step 6: Image Left, Content Right -->
                <div class="timeline-row reverse">
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Treatment-Care.webp" alt="Treatment" class="img-fluid">
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col content-col">
                        <div class="timeline-content right-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-procedures"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Treatment & Care</h3>
                            <p class="step-description">Receive world-class treatment from our expert medical team with 24/7 nursing care.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step6Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step6Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>Care Standards:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Experienced specialists</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Interpreter services</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Regular family updates</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 7: Content Left, Image Right -->
                <div class="timeline-row">
                    <div class="timeline-col content-col">
                        <div class="timeline-content left-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Recovery & Discharge</h3>
                            <p class="step-description">Monitored recovery followed by comprehensive discharge planning and reports.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step7Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step7Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>Includes:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Discharge summary</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Medication plan</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Fit-to-fly certificate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Recovery-Discharge.webp" alt="Recovery" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Step 8: Image Left, Content Right -->
                <div class="timeline-row reverse">
                    <div class="timeline-col image-col">
                        <div class="timeline-image-wrapper">
                            <img src="../assets/images/Follow-Up.webp" alt="Follow-Up" class="img-fluid">
                        </div>
                    </div>
                    <div class="timeline-center-dot"></div>
                    <div class="timeline-col content-col">
                        <div class="timeline-content right-content">
                            <div class="step-header">
                                <div class="step-icon-wrapper">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
    
                            </div>
                            <h3 class="step-title">Follow-Up</h3>
                            <p class="step-description">Continued support after you return home with online consultations and record access.</p>
                            <button class="btn-more-details collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step8Details">
                                More Details <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                            <div id="step8Details" class="collapse mt-3">
                                <div class="step-details-inner">
                                    <h5>Ongoing Care:</h5>
                                    <ul class="step-list">
                                        <li><i class="fas fa-check text-success me-2"></i> Video consultations</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Email support</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Lifetime record access</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Comprehensive Support Services</h2>
                <p class="section-description">Everything you need for a comfortable medical journey</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h3>Visa Assistance</h3>
                        <p>Complete support for medical visa applications, extensions, and attendant visas for family members</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3>Airport Transfers</h3>
                        <p>Complimentary pickup and drop-off services with comfortable, air-conditioned vehicles</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <h3>Language Support</h3>
                        <p>Professional interpreters available in multiple languages for seamless communication</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <h3>Accommodation</h3>
                        <p>Assistance in booking hotels, guest houses, or serviced apartments near the hospital</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>International Cuisine</h3>
                        <p>Dietary preferences catered to with options for various international cuisines</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Dedicated Manager</h3>
                        <p>Personal case manager to coordinate all medical and non-medical requirements</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h3>Flexible Payments</h3>
                        <p>Multiple payment options including wire transfer, credit cards, and foreign currency</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Insurance Coordination</h3>
                        <p>Assistance with international insurance claims and direct billing arrangements</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3>Local Assistance</h3>
                        <p>Help with local SIM cards, currency exchange, and sightseeing arrangements</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section" id="contact-form" style="padding:40px 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <div class="form-header text-center mb-4">
                            <h2>Request a Free Medical Opinion</h2>
                            <p>Fill out the form below and our team will get back to you within 24 hours</p>
                        </div>

                        <form class="international-patient-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Country *</label>
                                    <select class="form-control" required>
                                        <option value="">Select Country</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="uae">United Arab Emirates</option>
                                        <option value="nigeria">Nigeria</option>
                                        <option value="kenya">Kenya</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Medical Condition / Treatment Required *</label>
                                    <textarea class="form-control" rows="4" required></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Upload Medical Reports (Optional)</label>
                                    <input type="file" class="form-control" multiple>
                                    <small class="text-muted">Accepted formats: PDF, JPG, PNG (Max 10MB)</small>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Preferred Date of Travel</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Additional Information</label>
                                    <textarea class="form-control" rows="3" placeholder="Any specific questions or requirements?"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary-prayag btn-lg px-5">
                                        <i class="fas fa-paper-plane"></i> Submit Request
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-description">Find answers to common questions about international patient services</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What documents do I need for a Medical Visa?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>For a Medical Visa to India, you will need:</p>
                                    <ul>
                                        <li>Valid passport (minimum 6 months validity)</li>
                                        <li>Medical invitation letter from Prayag Hospital</li>
                                        <li>Recent medical reports and diagnosis</li>
                                        <li>Proof of sufficient funds</li>
                                        <li>Passport-size photographs</li>
                                        <li>Visa application form (online)</li>
                                    </ul>
                                    <p>Our team will provide the medical invitation letter and guide you through the entire visa application process.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How much does treatment cost?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Treatment costs vary depending on the procedure and complexity. However, medical treatment in India is typically 60-80% less expensive than in Western countries while maintaining the same quality standards. After reviewing your medical reports, we provide a detailed cost estimate including:
                                    <ul>
                                        <li>Consultation fees</li>
                                        <li>Diagnostic tests</li>
                                        <li>Surgery/procedure costs</li>
                                        <li>Hospital stay</li>
                                        <li>Medications</li>
                                        <li>Post-operative care</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you accept international health insurance?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we work with major international insurance providers and TPAs. Please share your insurance policy details with our admission team in advance. We can:
                                    <ul>
                                        <li>Verify your coverage</li>
                                        <li>Process pre-authorization</li>
                                        <li>Arrange direct billing (if applicable)</li>
                                        <li>Provide detailed invoices for reimbursement claims</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Can my family accompany me?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! We encourage family support during your treatment. We can assist with:
                                    <ul>
                                        <li>Medical Attendant Visas for family members</li>
                                        <li>Accommodation arrangements for families</li>
                                        <li>Visitor passes for hospital access</li>
                                        <li>Family waiting areas and amenities</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept multiple payment methods for your convenience:
                                    <ul>
                                        <li>International Wire Transfer (SWIFT)</li>
                                        <li>Credit/Debit Cards (Visa, Mastercard, Amex)</li>
                                        <li>Foreign Currency (USD, EUR, GBP, AED)</li>
                                        <li>Online Payment Gateways</li>
                                    </ul>
                                    <p>Currency exchange services are available at the hospital. We provide detailed invoices and receipts for all transactions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                    How long should I plan to stay in India?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The duration of stay depends on your treatment:
                                    <ul>
                                        <li><strong>Consultations/Diagnostics:</strong> 2-3 days</li>
                                        <li><strong>Minor Procedures:</strong> 5-7 days</li>
                                        <li><strong>Major Surgeries:</strong> 2-4 weeks</li>
                                        <li><strong>Complex Treatments:</strong> 4-8 weeks</li>
                                    </ul>
                                    <p>We provide a detailed timeline after reviewing your case, including pre-treatment preparation, procedure, recovery, and follow-up period.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
