<?php
/**
 * DOCTOR PROFILE PAGE TEMPLATE
 */

// Set the doctor ID - CHANGE THIS for each doctor
$doctor_id = 'dr-uma-sharma'; // ID in doctors-data.php

// Load doctor data
include 'doctors-data.php';

$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === $doctor_id) {
        $doctor = $d;
        break;
    }
}

// Redirect if doctor not found
if (!$doctor) {
    header("Location: find-doctor.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $doctor['name']; ?> - <?php echo $doctor['specialty']; ?> | Prayag Hospital</title>

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
                    <li class="breadcrumb-item"><a href="find-doctor.php">Find a Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $doctor['name']; ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctor Profile Hero Section -->
    <section class="doctor-profile-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="doctor-profile-image-container">
                        <img src="<?php echo $doctor['image']; ?>"
                            alt="<?php echo $doctor['name']; ?>" class="doctor-profile-image">
                        <div class="doctor-verification-badge">
                            <i class="fas fa-check-circle"></i>
                            <span>Verified</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="doctor-profile-header">
                        <h1 class="doctor-profile-name"><?php echo $doctor['name']; ?></h1>
                        <p class="doctor-profile-designation"><?php echo $doctor['specialty']; ?></p>
                        <p class="lead-text">
                            Dr. Uma Sharma is a highly experienced and trusted Senior Consultant Pulmonologist specializing in the diagnosis and treatment of lung and respiratory diseases.
                        </p>
                        <p>
                            She is well-known for managing complex chest disorders such as asthma, COPD, pneumonia, tuberculosis, and respiratory failure. With expertise in pulmonary function testing, bronchoscopy, and ICU respiratory care, he provides advanced and evidence-based treatment for all respiratory conditions.
                        </p>
                        <div class="doctor-profile-stats">
                            <div class="profile-stat-item">
                                <i class="fas fa-user-md"></i>
                                <div>
                                    <strong><?php echo $doctor['experience']; ?> Years</strong>
                                    <span>Experience</span>
                                </div>
                            </div>
                            <div class="profile-stat-item">
                                <i class="fas fa-star"></i>
                                <div>
                                    <strong>4.9/5</strong>
                                    <span>Patient Rating</span>
                                </div>
                            </div>
                        </div>

                        <div class="doctor-profile-actions">
                            <a href="#book-appointment" class="btn btn-primary-prayag">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Doctor Section -->
    <section class="doctor-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Education & Qualifications -->
                    <div class="content-section">
                        <h2 class="section-title">Education & Qualifications</h2>
                        <div class="education-timeline">
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="education-content">
                                    <h4>MBBS</h4>
                                    <!-- <p class="institution">University</p> -->
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="education-content">
                                    <h4>DTCD (Tuberculosis and Chest Diseases)</h4>
                                    <!-- <p class="institution">Institution</p> -->
                                </div>
                            </div>
                             <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="education-content">
                                    <h4>DNB (Respiratory Medicine)</h4>
                                    <!-- <p class="institution">Institution</p> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Areas of Expertise -->
                    <div class="content-section">
                        <h2 class="section-title">Areas of Expertise</h2>
                        <div class="expertise-grid">
                            <div class="expertise-card">
                                <i class="fas fa-lungs"></i>
                                <h4>Respiratory Care</h4>
                                <p>Asthma & COPD Management</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-briefcase-medical"></i>
                                <h4>Tuberculosis</h4>
                                <p>Diagnosis & Treatment</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-bed"></i>
                                <h4>Sleep Medicine</h4>
                                <p>Sleep Apnea & CPAP</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-virus"></i>
                                <h4>Lung Infections</h4>
                                <p>Pneumonia & Post-COVID Care</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Specializations -->
                    <div class="content-section">
                        <h2 class="section-title">Specializations & Services</h2>
                        <ul class="specialization-list">
                            <li><i class="fas fa-check-circle"></i> Asthma Treatment & Long-Term Management</li>
                            <li><i class="fas fa-check-circle"></i> COPD (Chronic Bronchitis / Emphysema) Management</li>
                            <li><i class="fas fa-check-circle"></i> Tuberculosis (TB) Diagnosis & Treatment</li>
                            <li><i class="fas fa-check-circle"></i> Pneumonia and Lung Infections Management</li>
                            <li><i class="fas fa-check-circle"></i> Chronic Cough & Breathlessness Evaluation</li>
                            <li><i class="fas fa-check-circle"></i> Interstitial Lung Disease (ILD) Treatment</li>
                            <li><i class="fas fa-check-circle"></i> Sleep Apnea (Snoring) Evaluation & CPAP Management</li>
                            <li><i class="fas fa-check-circle"></i> Lung Cancer Screening and Pulmonary Nodule Evaluation</li>
                            <li><i class="fas fa-check-circle"></i> Pleural Effusion & Chest Pain Assessment</li>
                            <li><i class="fas fa-check-circle"></i> Allergy and Respiratory Disorders</li>
                             <li><i class="fas fa-check-circle"></i> ICU Respiratory Failure Management</li>
                            <li><i class="fas fa-check-circle"></i> Post-COVID Lung Complications Treatment</li>
                        </ul>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Quick Appointment Form -->
                        <div class="appointment-sidebar-card" id="book-appointment">
                            <h3>Book an Appointment with <?php echo $doctor['name']; ?></h3>
                            <form class="appointment-quick-form">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Enter phone number" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label>Preferred Date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Message (Optional)</label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Any specific concerns?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary-prayag w-100">
                                    <i class="fas fa-calendar-check"></i> Request Appointment
                                </button>
                            </form>
                        </div>

                        <!-- Contact Info Card -->
                        <div class="contact-info-card" id="contact">
                            <h3>Contact Information</h3>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Location</strong>
                                    <p>Prayag Hospital<br><?php echo $doctor['department']; ?> Wing</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Phone</strong>
                                    <p><a href="tel:+911234567890">+91 123 456 7890</a></p>
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
