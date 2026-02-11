<?php
/**
 * DOCTOR PROFILE PAGE TEMPLATE
 */

// Set the doctor ID - CHANGE THIS for each doctor
$doctor_id = 'dr-ajay-prajapati'; // ID in doctors-data.php

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
                            Dr. Ajay Prajapati is a highly experienced and renowned Senior Consultant Neurosurgeon specializing in the surgical management of brain, spine, and nerve disorders.
                        </p>
                        <p>
                            He is well-known for treating complex neurological conditions such as brain tumors, spinal disorders, head injuries, and stroke-related complications. With expertise in advanced neurosurgical techniques and minimally invasive spine procedures, he provides accurate diagnosis and high-quality surgical care with excellent patient outcomes.
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
                                    <h4>M.S. (General Surgery)</h4>
                                    <!-- <p class="institution">Institution</p> -->
                                </div>
                            </div>
                             <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="education-content">
                                    <h4>M.Ch (Neuro Surgery)</h4>
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
                                <i class="fas fa-brain"></i>
                                <h4>Brain Surgery</h4>
                                <p>Tumors & Trauma</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-bone"></i>
                                <h4>Spine Surgery</h4>
                                <p>Slip Disc & Sciatica</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-user-injured"></i>
                                <h4>Stroke</h4>
                                <p>Brain Hemorrhage</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-microscope"></i>
                                <h4>Minimally Invasive</h4>
                                <p>Advanced Techniques</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Specializations -->
                    <div class="content-section">
                        <h2 class="section-title">Specializations & Services</h2>
                        <ul class="specialization-list">
                            <li><i class="fas fa-check-circle"></i> Brain Tumor Surgery & Neuro-Oncology</li>
                            <li><i class="fas fa-check-circle"></i> Spine Surgery (Slip Disc, Sciatica, Spinal Stenosis)</li>
                            <li><i class="fas fa-check-circle"></i> Head Injury & Trauma Neurosurgery</li>
                            <li><i class="fas fa-check-circle"></i> Stroke (Brain Hemorrhage) Emergency Surgery</li>
                            <li><i class="fas fa-check-circle"></i> Spine Fracture & Spinal Cord Injury Management</li>
                            <li><i class="fas fa-check-circle"></i> Cervical & Lumbar Spondylosis Treatment</li>
                            <li><i class="fas fa-check-circle"></i> Hydrocephalus (VP Shunt Surgery)</li>
                            <li><i class="fas fa-check-circle"></i> Aneurysm & AVM Management</li>
                            <li><i class="fas fa-check-circle"></i> Nerve Compression and Peripheral Nerve Surgery</li>
                            <li><i class="fas fa-check-circle"></i> Pediatric Neurosurgery Disorders</li>
                            <li><i class="fas fa-check-circle"></i> Neurosurgical ICU & Critical Neuro Care</li>
                            <li><i class="fas fa-check-circle"></i> Minimally Invasive Brain & Spine Surgery</li>
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
