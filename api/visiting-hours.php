<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiting Hours & Guidelines - Prayag Hospital</title>
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
                    <li class="breadcrumb-item"><a href="#">Patient Guide</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visiting Hours</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Visiting Hours</h1>
                <p class="blog-hero-subtitle">We value the support of family and friends in the healing process. Please check our visiting schedule.</p>
            </div>
        </div>
    </section>

    <!-- Hours Grid -->
    <section class="visiting-section">
        <div class="container">
            <div class="row g-4">
                <!-- General Wards -->
                <div class="col-lg-6">
                    <div class="hours-card">
                        <div class="hours-header">
                            <h3 class="hours-title"><i class="fas fa-procedures"></i> General Wards</h3>
                            <p class="hours-subtitle">For patients in Rooms, Twin Sharing, and General Wards</p>
                        </div>
                        <div class="time-slot">
                            <div class="slot-icon"><i class="fas fa-sun"></i></div>
                            <div class="slot-details">
                                <h4>Morning Slot</h4>
                                <p>11:00 AM - 12:00 PM</p>
                            </div>
                        </div>
                        <div class="time-slot">
                            <div class="slot-icon"><i class="fas fa-moon"></i></div>
                            <div class="slot-details">
                                <h4>Evening Slot</h4>
                                <p>5:00 PM - 7:00 PM</p>
                            </div>
                        </div>
                        <div class="p-3 bg-light text-center small text-muted">
                            * Max 2 visitors allowed at a time
                        </div>
                    </div>
                </div>

                <!-- ICU / HDU -->
                <div class="col-lg-6">
                    <div class="hours-card" style="border-top-color: var(--prayag-orange);">
                        <div class="hours-header">
                            <h3 class="hours-title"><i class="fas fa-heartbeat"></i> ICU / CCU / HDU</h3>
                            <p class="hours-subtitle">Critical Care Units (Restricted Access)</p>
                        </div>
                        <div class="time-slot">
                            <div class="slot-icon" style="background-color: #fff5eb; color: var(--prayag-orange);"><i class="fas fa-sun"></i></div>
                            <div class="slot-details">
                                <h4>Morning Slot</h4>
                                <p>11:00 AM - 11:30 AM</p>
                            </div>
                        </div>
                        <div class="time-slot">
                            <div class="slot-icon" style="background-color: #fff5eb; color: var(--prayag-orange);"><i class="fas fa-moon"></i></div>
                            <div class="slot-details">
                                <h4>Evening Slot</h4>
                                <p>5:00 PM - 5:30 PM</p>
                            </div>
                        </div>
                        <div class="p-3 bg-light text-center small text-muted">
                            * Only 1 visitor allowed at a time for limited duration
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guidelines & Pass Info -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h2 class="mb-3" style="color: var(--dark-text); font-weight: 700;">Visitor Guidelines</h2>
                        <p class="text-muted">To ensure the safety and comfort of our patients, we request all visitors to adhere to the following guidelines:</p>
                    </div>
                    
                    <div class="guidelines-box">
                        <ul class="guideline-list">
                            <li><strong>Wear a Mask:</strong> All visitors must wear a mask at all times within the hospital premises.</li>
                            <li><strong>Sanitize Hands:</strong> Use hand sanitizer before entering and after leaving the patient's room.</li>
                            <li><strong>Limit Noise:</strong> Please maintain silence in corridors and patient areas.</li>
                            <li><strong>No Outside Food:</strong> Outside food and beverages are strictly prohibited for patients.</li>
                            <li><strong>Children Policy:</strong> Children below 12 years are restricted from visiting patient areas to prevent infection risks.</li>
                            <li><strong>Respect Privacy:</strong> Please respect the privacy of other patients and staff instructions.</li>
                            <li><strong>Do Not Visit if Sick:</strong> If you have a cold, flu, or any contagious symptom, please avoid visiting.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pass-info-card h-100 d-flex flex-column justify-content-center">
                        <i class="fas fa-id-card pass-icon"></i>
                        <h3>Visitor Pass Policy</h3>
                        <p class="mb-4 text-white-50">Visitor passes are mandatory for entry into inpatient areas.</p>
                        <div class="text-start px-3">
                            <p class="mb-2"><i class="fas fa-check me-2"></i> Only 1 Attendant Pass (24/7)</p>
                            <p class="mb-0"><i class="fas fa-check me-2"></i> 2 Visitor Passes (Visiting Hours Only)</p>
                        </div>
                        <p class="mt-4 small text-white-50">Passes are issued at the Admission Desk at the time of admission.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
