<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Get in Touch | Prayag Hospital</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="blog-hero-section" style="margin-bottom:30px">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Contact Us</h1>
                <p class="blog-hero-subtitle">We are here to help. Reach out to us for any medical queries, appointments, or emergency services.</p>
            </div>
        </div>
    </section>

    <!-- Contact Info & Maps Section -->
    <section class="contact-layout-section">
        <div class="container">
            <div class="row g-5">
                <!-- Left Column: Contact Information -->
                <div class="col-lg-5">
                    <div class="contact-details-wrapper">
                        <h2 class="section-title mb-4">Get in Touch</h2>
                        
                        <!-- Noida Location -->
                        <div class="location-block mb-4">
                            <h3 class="location-title"><i class="fas fa-map-marker-alt text-primary-orange me-2"></i> Noida</h3>
                            <p class="location-address">
                                Prayag Hospital & Research Centre<br>
                                Sector 41, Noida,<br>
                                Uttar Pradesh 201301
                            </p>
                        </div>

                        <!-- Greater Noida Location -->
                        <div class="location-block mb-4">
                            <h3 class="location-title"><i class="fas fa-map-marker-alt text-primary-orange me-2"></i> Greater Noida</h3>
                            <p class="location-address">
                                Prayag Hospital & Research Centre<br>
                                NH-021, Block M, Delta III,<br>
                                Greater Noida, UP 201310
                            </p>
                        </div>

                        <!-- General Contact -->
                        <div class="contact-block mb-4">
                            <h3 class="location-title"><i class="fas fa-phone-alt text-primary-orange me-2"></i> Phone</h3>
                            <p class="contact-text mb-1"><strong>Emergency:</strong> <a href="tel:+911202570111">+91 120-2570111</a></p>
                            <p class="contact-text"><strong>Appointment:</strong> <a href="tel:+919811166666">+91 98111 66666</a></p>
                        </div>

                        <div class="contact-block mb-4">
                            <h3 class="location-title"><i class="fas fa-envelope text-primary-orange me-2"></i> Email</h3>
                            <p class="contact-text"><a href="mailto:info@prayaghospital.in">info@prayaghospital.in</a></p>
                        </div>

                        <div class="contact-block mb-4">
                            <h3 class="location-title"><i class="fas fa-clock text-primary-orange me-2"></i> Hours</h3>
                            <p class="contact-text">Monday - Sunday: 24 Hours Open</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Maps -->
                <div class="col-lg-7">
                    <div class="maps-wrapper">
                        <!-- Noida Map -->
                        <div class="map-container mb-4">
                            <h4 class="map-label">Noida Centre</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.603347901584!2d77.35987631508076!3d28.55163698244971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5e0f5555555%3A0x6b7235a9634288b3!2sPrayag%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1645000000000!5m2!1sen!2sin" 
                                width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <!-- Greater Noida Map -->
                        <div class="map-container">
                            <h4 class="map-label">Greater Noida Centre</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.6698665046276!2d77.03964431507873!3d28.46014698248611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18f77363f03b%3A0x867332204b4c5222!2sPrayag%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1672345678901!5m2!1sen!2sin" 
                                width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-container">
                        <h2 class="form-title text-center">Send us a Message</h2>
                        <p class="form-subtitle text-center">Have a question or need assistance? Fill out the form below and our team will get back to you shortly.</p>
                        
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-control">
                                    <option value="" selected disabled>Select Department (Optional)</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Orthopedics">Orthopedics</option>
                                    <option value="General">General Inquiry</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary-orange px-5 py-3">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
