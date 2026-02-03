<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Services - Patient Care & Facilities | Prayag Hospital</title>

    <?php include 'header-links.php'; ?>

    <style>
        .doctor-card {
            width: 100% !important;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Breadcrumb Navigation -->
        <div class="breadcrumb-wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Departments</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Support Services
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="hero-content-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Text Content -->
                    <div class="col-lg-7 col-md-12">
                        <h1 class="hero-main-title">
                            Comprehensive Patient Support Services
                        </h1>
                        <p class="hero-subtitle" style="color:#000 !important">
                            At Prayag Hospital, we believe that healing goes beyond medical treatment. Our dedicated support services ensure a seamless, comfortable, and hassle-free experience for patients and their families.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="hero-cta-buttons">
                            <a href="find-doctor.php" class="btn-book-appointment">
                                Find Doctor
                            </a>
                            <a href="#tpa" class="btn-request-callback">
                                TPA Assistance
                            </a>
                        </div>

                        <!-- Hero Stats -->
                        <div class="hero-stats">
                            <div class="hero-stat-item">
                                <strong>24/7 Availability</strong>
                                Round-the-clock Pharmacy, Ambulance, and Emergency support to handle any medical requirement instantly.
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Hero Image -->
                    <div class="col-lg-5 col-md-12">
                        <div class="hero-image-wrapper">
                            <div class="hero-image-container">
                                <img src="../assets/images/Support-Services-thumb.webp"
                                    alt="Hospital Support Services" class="hero-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Table of Contents Navigation Strip -->
    <section class="toc-section">
        <div class="container-fluid px-0">
            <ul class="toc-nav">
                <li class="toc-nav-item">
                    <a href="#overview" class="toc-nav-link">Overview</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#facilities" class="toc-nav-link">Facilities</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#tpa" class="toc-nav-link">Insurance/TPA</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#why-choose-us" class="toc-nav-link">Why Choose Us</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#patient-speak" class="toc-nav-link">Patient Speak</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#faq" class="toc-nav-link">FAQ</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Ambulance Service</h3>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">24/7 Pharmacy</h3>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Dietary Services</h3>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">TPA Desk</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview-section" id="overview">
        <div class="container">
            <div class="overview-content">
                <h2 class="overview-heading">Seamless Care & Support</h2>
                <p class="overview-text">
                    The Support Services department acts as the backbone of Prayag Hospital, facilitating smooth operations and ensuring patient comfort. From the moment a patient arrives until their discharge, our support teams work tirelessly behind the scenes.
                </p>
                <p class="overview-text">
                    We understand that hospital visits can be stressful. Our dedicated patient care executives, billing assistants, and TPA coordinators are trained to guide you through administrative processes with empathy and efficiency.
                </p>
                <p class="overview-text">
                    Our support ecosystem extends to clinically assisted services like our 24/7 ACLS-equipped ambulances, fully stocked in-house pharmacy, and hygienic dietary services that cater to the nutritional needs of diverse patient groups.
                </p>
            </div>

            <div class="overview-image-wrapper">
                <img src="../assets/images/Support-Services-main.webp"
                    alt="Hospital Reception" class="overview-image">
            </div>

            <div class="overview-highlights">
                <div class="overview-highlight">
                    <i class="fas fa-headset"></i>
                    <h4>Help Desk</h4>
                    <p>Centralized assistance for appointments, queries, and wayfinding.</p>
                </div>
                <div class="overview-highlight">
                    <i class="fas fa-pump-soap"></i>
                    <h4>Hygiene & Safety</h4>
                    <p>Rigorous housekeeping protocols to maintain a sterile and infection-free environment.</p>
                </div>
                <div class="overview-highlight">
                    <i class="fas fa-praying-hands"></i>
                    <h4>Pastoral Care</h4>
                    <p>Psychological and spiritual support for patients and families in distress.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="conditions-section" id="facilities">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Key Facilities</h2>
                <p class="section-subtitle">
                    Essential services for a complete healthcare experience.
                </p>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">24/7 Pharmacy</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Critical Care Ambulance</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Cafeteria</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Blood Storage Unit</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Diagnostic Labs</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Patient Lounge</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Prayer Room</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="condition-card">
                        <h3 class="condition-name">Parking Facility</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TPA/Insurance Section -->
    <section class="treatment-section" id="tpa">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Insurance & TPA Support</h2>
                <p class="section-subtitle">
                    Hassle-free cashless hospitalization and reimbursement assistance.
                </p>
            </div>

            <div class="row g-4">
                <!-- Treatment Card 1 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3 class="treatment-card-title">Cashless Hospitalization</h3>
                        <p class="treatment-card-description">
                           We are empanelled with all major TPAs and Insurance companies to provide cashless treatment facilities.
                        </p>
                    </div>
                </div>

                <!-- Treatment Card 2 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon">
                            <i class="fas fa-briefcase-medical"></i>
                        </div>
                        <h3 class="treatment-card-title">Corporate Tie-ups</h3>
                        <p class="treatment-card-description">
                            Special healthcare packages and priority services for employees of our corporate partners.
                        </p>
                    </div>
                </div>

                <!-- Treatment Card 3 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="treatment-card-title">Claim Assistance</h3>
                        <p class="treatment-card-description">
                             Our TPA desk assists with document preparation and query resolution for fast claim processing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section" id="why-choose-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Service Excellence</h2>
                <p class="section-subtitle">
                    Going the extra mile for your comfort.
                </p>
            </div>

            <!-- Why Points Grid -->
            <div class="why-points-grid">
                <div class="why-point">
                    <div class="why-point-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="why-point-content">
                        <h4>Round-the-Clock</h4>
                        <p>All essential support services operate 24x7 without interruption.</p>
                    </div>
                </div>

                <div class="why-point">
                    <div class="why-point-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="why-point-content">
                        <h4>Patient First</h4>
                        <p>Our staff is trained to prioritize patient needs and handle requests with courtesy.</p>
                    </div>
                </div>

                <div class="why-point">
                    <div class="why-point-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="why-point-content">
                        <h4>Transparency</h4>
                        <p>Clear billing and communication at every step to avoid any confusion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Speak Section (Testimonials) -->
    <section class="patient-speak-section" id="patient-speak">
        <div class="container">
            <div class="section-header-center">
                <h2 class="section-title-dark">Voice of Patients</h2>
                <p class="section-subtitle-gray">
                    Feedback on our support and facilities.
                </p>
            </div>

            <div class="testimonials-slider-wrapper">
                <button class="testimonial-nav testimonial-nav-prev" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="testimonials-slider-container">
                    <div class="testimonials-slider">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card">
                            <div class="testimonial-thumbnail">
                                <img src="https://via.placeholder.com/400x250/e3f2fd/1565c0?text=Smooth+Admission"
                                    alt="Patient">
                                <div class="play-button">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="testimonial-overlay">
                                <p class="testimonial-text">"The admission process was incredibly smooth. The TPA desk handled all the insurance paperwork efficiently."</p>
                                <h4 class="testimonial-name">Mx. J. Doe</h4>
                                <p class="testimonial-procedure">Insurance Claim</p>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card">
                            <div class="testimonial-thumbnail">
                                <img src="https://via.placeholder.com/400x250/e3f2fd/1565c0?text=Fast+Ambulance"
                                    alt="Ambulance Service">
                                <div class="play-button">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="testimonial-overlay">
                                <p class="testimonial-text">"The ambulance arrived within 15 minutes of our call. The paramedics were very professional and caring."</p>
                                <h4 class="testimonial-name">Mr. P. Singh</h4>
                                <p class="testimonial-procedure">Emergency Service</p>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card">
                            <div class="testimonial-thumbnail">
                                <img src="https://via.placeholder.com/400x250/e3f2fd/1565c0?text=Good+Food" alt="Patient">
                                <div class="play-button">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="testimonial-overlay">
                                <p class="testimonial-text">"I was impressed by the dietary service. The food was healthy, hygienic, and delivered on time."</p>
                                <h4 class="testimonial-name">Mrs. S. Khan</h4>
                                <p class="testimonial-procedure">In-patient Care</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="testimonial-nav testimonial-nav-next" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">
                    Common queries about hospital facilities.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Is the pharmacy open at night?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, our in-house pharmacy is open 24 hours a day, 7 days a week, serving both in-patients and out-patients.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    How do I book an ambulance?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    In case of an emergency, please call our 24/7 ambulance helpline at +91-8811780937. Our response team will dispatch the nearest available ambulance immediately.
                                </div>
                            </div>
                        </div>

                         <!-- FAQ 3 -->
                         <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Do you accept all health insurance cards?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We have tie-ups with most major public and private insurance providers and TPAs. Please visit our TPA assistance desk in the lobby or check the TPA & Insurance page on our website for a complete list.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    What are the visiting hours for patients?
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    General ward visiting hours are from 5:00 PM to 7:00 PM daily. For ICU patients, visiting is restricted to one family member for a short duration during specified hours. Please check with the reception for current timings.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    Can I bring food from outside for the patient?
                                </button>
                            </h2>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    To ensure hygiene and proper nutrition, we generally do not allow outside food for in-patients. Our dietary department provides customized, healthy meals prescribed by the dietician.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                                    Is parking available at the hospital?
                                </button>
                            </h2>
                            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we have ample parking space available for patients and visitors within the hospital premises. Valet parking services are also available during peak hours.
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

    <script>
        // Testimonials Slider Logic
        const slider = document.querySelector('.testimonials-slider');
        const prevBtn = document.querySelector('.testimonial-nav-prev');
        const nextBtn = document.querySelector('.testimonial-nav-next');
        const cards = document.querySelectorAll('.testimonial-card');
        
        if(slider && cards.length > 0) {
            let cardWidth = cards[0].offsetWidth + 24; // Width + gap
            
            nextBtn.addEventListener('click', () => {
                slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
            });

            prevBtn.addEventListener('click', () => {
                slider.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            });
        }
    </script>
</body>

</html>
