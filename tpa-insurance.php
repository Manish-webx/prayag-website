<?php
// Mock TPA Data
$tpas = [
    'Raksha TPA', 'Paramount Health', 'Medi Assist', 'Vidal Health', 
    'MDIndia Healthcare', 'Heritage Health', 'Family Health Plan (FHPL)', 
    'United Health Care', 'Vipul Medcorp', 'Medsave Health', 'East West Assist',
    'Genins India', 'Health India', 'Good Health', 'Park Mediclaim'
];

// Mock Insurance Companies Data
$insurance_companies = [
    'Star Health & Allied Insurance', 'Niva Bupa Health Insurance', 'HDFC ERGO', 
    'ICICI Lombard', 'Bajaj Allianz', 'Care Health Insurance', 
    'The New India Assurance', 'The Oriental Insurance', 
    'National Insurance', 'United India Insurance', 'SBI General Insurance',
    'Reliance General Insurance', 'Tata AIG', 'Aditya Birla Health'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPA & Insurance - Cashless Mediclaim | Prayag Hospital</title>
    <?php include 'header-links.php'; ?>

</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">TPA & Insurance</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">TPA & Insurance</h1>
                <p class="blog-hero-subtitle">Hassle-free cashless hospitalization services with our wide network of insurance partners.</p>
            </div>
        </div>
    </section>

    <!-- Cashless Process Section -->
    <section class="tpa-content-section">
        <div class="container">
            <div class="section-header-center text-center mb-5">
                <h2 class="section-title" style="color: var(--dark-text); font-weight: 700;">Cashless Hospitalization Process</h2>
                <p style="color: var(--light-text); max-width: 600px; margin: 0 auto;">Simple steps to avail cashless facilities at Prayag Hospital</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <h3 class="step-title">Admission & Intimation</h3>
                        <p class="step-desc">Visit the TPA desk with your ID card and Policy papers while getting admitted. Emergency cases are handled on priority.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <h3 class="step-title">Pre-Authorization</h3>
                        <p class="step-desc">Our TPA desk sends a pre-authorization request form to your Insurance Co./TPA for approval.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <h3 class="step-title">Treatment & Approval</h3>
                        <p class="step-desc">Once initial approval is received, treatment continues. Updates are sent to TPA if stay is extended.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <h3 class="step-title">Discharge</h3>
                        <p class="step-desc">Final bill is sent to TPA. After final approval, patient pays only for non-medical items (if any) and is discharged.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Required Documents Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-4" style="color: var(--dark-text); font-weight: 700;">Documents Required</h2>
                    <p class="mb-4 text-muted">Please carry the following documents to the TPA Desk for seamless processing of your cashless claim:</p>
                    <div class="documents-box">
                        <ul class="documents-list">
                            <li>Valid Health Insurance Policy Card / TPA ID Card</li>
                            <li>Photo ID Proof (Aadhar Card / PAN Card / Voter ID) of the Patient</li>
                            <li>Employee ID Card (for Corporate Group Insurance)</li>
                            <li>Previous Consultation Papers & Investigation Reports</li>
                            <li>Policy Document (Copy)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info-card text-center" style="background: var(--prayag-teal); color: #fff; border-radius: 12px; padding: 40px;">
                        <i class="fas fa-headset mb-3" style="font-size: 40px; opacity: 0.8;"></i>
                        <h3 style="color: #fff; margin-bottom: 15px;">TPA Help Desk</h3>
                        <p style="opacity: 0.9; margin-bottom: 25px;">For queries regarding pre-authorization or claim status, visit our TPA desk located at the Main Reception.</p>
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div>
                                <strong class="d-block mb-1">Call Us</strong>
                                <a href="tel:+911202570111" style="color: #fff; text-decoration: none; font-size: 18px;">+91 120-2570111</a>
                            </div>
                            <div>
                                <strong class="d-block mb-1">Email</strong>
                                <a href="mailto:tpa@prayaghospital.in" style="color: #fff; text-decoration: none; font-size: 18px;">tpa@prayaghospital.in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Empanelled Partners -->
    <section class="tpa-grid-section">
        <div class="container">
            <!-- Insurance Companies -->
            <h3 class="mb-4 pb-2 border-bottom" style="color: var(--dark-text); font-weight: 700;">Empanelled Insurance Companies</h3>
            <div class="row g-3 mb-5">
                <?php foreach ($insurance_companies as $company): ?>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="tpa-card">
                        <h4 class="tpa-name"><?php echo $company; ?></h4>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- TPAs -->
            <h3 class="mb-4 pb-2 border-bottom" style="color: var(--dark-text); font-weight: 700;">Empanelled TPAs (Third Party Administrators)</h3>
            <div class="row g-3">
                <?php foreach ($tpas as $tpa): ?>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="tpa-card">
                        <h4 class="tpa-name"><?php echo $tpa; ?></h4>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
