<?php
/**
 * DOCTOR PROFILE PAGE TEMPLATE
 * 
 * Instructions:
 * 1. Copy this file and rename it to match the doctor's slug (e.g., dr-ayushi-agarwal.php)
 * 2. Update the $doctor_id variable below with the doctor's ID from doctors-data.php
 * 3. Customize any additional content as needed
 * 
 * The page will automatically pull all doctor information from doctors-data.php
 */

// Set the doctor ID - CHANGE THIS for each doctor
$doctor_id = 'dr-saurav-bhagat'; // Example: Change to match the doctor's ID

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
                        <p class="doctor-profile-department" style="color: var(--prayag-teal); font-weight: 500; margin-bottom: 20px;"><?php echo $doctor['department']; ?></p>

                        <div class="doctor-profile-stats">
                            <div class="profile-stat-item">
                                <i class="fas fa-user-md"></i>
                                <div>
                                    <strong><?php echo $doctor['experience']; ?>+ Years</strong>
                                    <span>Experience</span>
                                </div>
                            </div>
                            <div class="profile-stat-item">
                                <i class="fas fa-procedures"></i>
                                <div>
                                    <strong>500+</strong>
                                    <span>Surgeries/Cases</span>
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
                    <div class="content-section">
                        <h2 class="section-title">About <?php echo $doctor['name']; ?></h2>
                        <p class="lead-text">
                            <?php echo $doctor['name']; ?> is a highly experienced <?php echo $doctor['specialty']; ?> with over <?php echo $doctor['experience']; ?> years of expertise in
                            <?php echo $doctor['department']; ?>.
                        </p>
                        <p>
                            Dedicated to providing the highest quality of care, <?php echo $doctor['name']; ?> specializes in patient-focused treatments and has a proven track record of successful medical outcomes. Known for compassionate care and clinical excellence, patients trust <?php echo $doctor['name']; ?> for their medical needs.
                        </p>
                    </div>

                    <!-- Education & Qualifications (Generic Placeholder) -->
                    <div class="content-section">
                        <h2 class="section-title">Education & Qualifications</h2>
                        <div class="education-timeline">
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="education-content">
                                    <h4>Medical Degree</h4>
                                    <p class="institution">Reputed Medical Institution</p>
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="education-content">
                                    <h4>Specialization in <?php echo $doctor['department']; ?></h4>
                                    <p class="institution">Certified Board of Specialists</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Areas of Expertise -->
                    <div class="content-section">
                        <h2 class="section-title">Areas of Expertise</h2>
                        <div class="expertise-grid">
                            <div class="expertise-card">
                                <i class="fas fa-user-md"></i>
                                <h4><?php echo $doctor['department']; ?></h4>
                                <p>Specialized care in <?php echo $doctor['specialty']; ?></p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-notes-medical"></i>
                                <h4>Patient Consultation</h4>
                                <p>Comprehensive diagnosis and treatment planning</p>
                            </div>
                        </div>
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
