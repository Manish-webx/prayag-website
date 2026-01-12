<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Guide & Process - Prayag Hospital</title>
    <?php include 'header-links.php'; ?>
    <style>
        .admission-process-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .process-timeline {
            position: relative;
            padding-left: 40px;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: #e0e0e0;
        }

        .timeline-step {
            position: relative;
            margin-bottom: 40px;
        }

        .timeline-marker {
            position: absolute;
            left: -40px;
            top: 0;
            width: 32px;
            height: 32px;
            background-color: var(--prayag-teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            z-index: 1;
            border: 4px solid #fff;
            box-shadow: 0 0 0 2px var(--prayag-teal);
        }

        .step-content {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #eee;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }

        .step-content:hover {
            transform: translateX(5px);
            border-color: var(--prayag-teal);
        }

        .step-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark-text);
        }

        .step-desc {
            color: #666;
            margin-bottom: 0;
            line-height: 1.6;
        }

        .checklist-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .checklist-card {
            background-color: #e8f5f0;
            border-radius: 12px;
            padding: 30px;
            height: 100%;
        }

        .checklist-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--prayag-teal);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .custom-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .custom-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            color: #555;
        }

        .custom-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 3px;
            color: var(--prayag-teal);
        }

        .info-box {
            background: #fff5eb;
            border-radius: 12px;
            padding: 25px;
            border-left: 4px solid var(--prayag-orange);
            margin-top: 30px;
        }

        .info-box h4 {
            color: var(--prayag-orange);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 14px;
            color: #666;
            margin-bottom: 0;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admission Guide</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Admission Guide</h1>
                <p class="blog-hero-subtitle">A step-by-step guide to make your hospital admission process smooth and hassle-free.</p>
            </div>
        </div>
    </section>

    <!-- Admission Process -->
    <section class="admission-process-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-header-center text-center mb-5">
                        <h2 class="section-title" style="color: var(--dark-text); font-weight: 700;">Admission Process Flow</h2>
                    </div>

                    <div class="process-timeline">
                        <!-- Step 1 -->
                        <div class="timeline-step">
                            <div class="timeline-marker">1</div>
                            <div class="step-content">
                                <h3 class="step-title">Doctor's Advice</h3>
                                <p class="step-desc">The admission process begins with a recommendation from your consultant doctor at Prayag Hospital. The doctor will fill out an 'Admission Advice' form detailing the diagnosis and estimated duration of stay.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="timeline-step">
                            <div class="timeline-marker">2</div>
                            <div class="step-content">
                                <h3 class="step-title">Registration Desk</h3>
                                <p class="step-desc">Proceed to the Admission / Registration desk in the main lobby. Submit the Admission Advice form along with patient ID proof. You will be asked to fill out the Patient Registration Form.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="timeline-step">
                            <div class="timeline-marker">3</div>
                            <div class="step-content">
                                <h3 class="step-title">Room Selection & Financial Counseling</h3>
                                <p class="step-desc">Our counselors will guide you through the available room categories (General, Twin Sharing, Private, Suite) and their respective charges. You will receive an estimate of the treatment cost.</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="timeline-step">
                            <div class="timeline-marker">4</div>
                            <div class="step-content">
                                <h3 class="step-title">Payment / Insurance Processing</h3>
                                <p class="step-desc">
                                    <strong>For Cash Patients:</strong> An initial deposit is required at the time of admission.<br>
                                    <strong>For Insurance/TPA:</strong> Visit the TPA desk for pre-authorization. (See our <a href="tpa-insurance.php" style="color: var(--prayag-teal); text-decoration: none; font-weight: 600;">TPA Guide</a>).
                                </p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="timeline-step">
                            <div class="timeline-marker">5</div>
                            <div class="step-content">
                                <h3 class="step-title">Patient Allotment</h3>
                                <p class="step-desc">Once formalities are complete, you will be issued a Unique Hospital Identification (UHID) number and escorted to your allotted room by our nursing staff.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checklist Section -->
    <section class="checklist-section">
        <div class="container">
            <div class="row g-4 equal-height">
                <!-- What to Bring -->
                <div class="col-lg-6">
                    <div class="checklist-card">
                        <h3 class="checklist-title"><i class="fas fa-suitcase-medical"></i> What to Bring</h3>
                        <ul class="custom-list">
                            <li>Valid Photo ID (Aadhar Card, Voter ID, Passport)</li>
                            <li>Current medication list and past medical records</li>
                            <li>Comfortable clothing and non-slip slippers</li>
                            <li>Personal toiletries (Toothbrush, paste, soap, comb)</li>
                            <li>Spectacles, hearing aids, or dentures (if used)</li>
                            <li>Mobile phone and charger</li>
                        </ul>
                    </div>
                </div>

                <!-- What NOT to Bring -->
                <div class="col-lg-6">
                    <div class="checklist-card" style="background-color: #fff0f0;">
                        <h3 class="checklist-title" style="color: #d63031;"><i class="fas fa-ban"></i> What NOT to Bring</h3>
                        <ul class="custom-list">
                            <li>Large amounts of cash or jewelry (Hospital is not responsible for loss)</li>
                            <li>Outside food and beverages (Strictly prohibited)</li>
                            <li>Electrical appliances (Heaters, kettles)</li>
                            <li>Flowers or plants (To prevent infection risks)</li>
                            <li>Weapons or sharp objects</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Important Note -->
            <div class="row">
                <div class="col-12">
                    <div class="info-box">
                        <h4><i class="fas fa-info-circle"></i> Important Note for Discharge</h4>
                        <p>The discharge process usually takes 2-4 hours from the time the doctor advises discharge. This involves preparing the discharge summary, finalizing the bill, and pharmacy clearance. Please coordinate with the ward nurse for a smooth checkout.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
