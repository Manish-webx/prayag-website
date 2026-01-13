<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Get in Touch | Prayag Hospital</title>
    <?php include 'header-links.php'; ?>
    <style>


        .contact-info-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s ease;
            text-align: center;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(74, 143, 115, 0.1);
            color: var(--prayag-teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 20px;
        }

        .contact-card-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-text);
        }

        .contact-card-text {
            color: var(--light-text);
            margin-bottom: 0;
            line-height: 1.6;
        }

        .contact-card-text a {
            color: var(--prayag-teal);
            text-decoration: none;
            font-weight: 500;
        }

        .contact-form-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .form-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        }

        .form-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark-text);
        }

        .form-subtitle {
            color: var(--light-text);
            margin-bottom: 30px;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: var(--prayag-teal);
        }

        .btn-submit {
            background-color: var(--prayag-orange);
            color: #ffffff;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #e67e22; /* Use a slightly darker orange for hover if variable not available, or darken typical orange */
             /* Assuming --prayag-orange is #E8964F based on previous files, hover can be handled by browser or simple adjustment */
             filter: brightness(0.9);
        }

        .map-section {
            height: 450px;
            width: 100%;
        }
        
        iframe {
            width: 100%;
            height: 100%;
            border: 0;
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
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Contact Us</h1>
                <p class="blog-hero-subtitle">We are here to help. Reach out to us for any medical queries, appointments, or emergency services.</p>
            </div>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="contact-info-section" style="padding: 60px 0; position: relative; margin-top: -50px;">
        <div class="container">
            <div class="row g-4">
                <!-- Address -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="contact-card-title">Hospital Address</h3>
                        <p class="contact-card-text">
                            Prayag Hospital & Research Centre<br>
                            Sector 41, Noida,<br>
                            Uttar Pradesh 201301
                        </p>
                    </div>
                </div>

                <!-- Emergency -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h3 class="contact-card-title">Emergency (24/7)</h3>
                        <p class="contact-card-text">
                            <strong><a href="tel:+911202570111">+91 120-2570111</a></strong><br>
                            <strong><a href="tel:+911202570112">+91 120-2570112</a></strong>
                        </p>
                    </div>
                </div>

                <!-- Appointment -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3 class="contact-card-title">Appointments</h3>
                        <p class="contact-card-text">
                            <strong><a href="tel:+919811166666">+91 98111 66666</a></strong><br>
                            (9:00 AM - 8:00 PM)
                        </p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-card-title">Email Us</h3>
                        <p class="contact-card-text">
                            For General Queries:<br>
                            <a href="mailto:info@prayaghospital.in">info@prayaghospital.in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row g-5">
                <!-- Google Map -->
                <div class="col-lg-6">
                    <div class="map-section">
                        <!-- Map Placeholder - Replace defined src with actual embed link if available, utilizing generic lat/long for Noida/Prayag Hospital -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.603347901584!2d77.35987631508076!3d28.55163698244971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5e0f5555555%3A0x6b7235a9634288b3!2sPrayag%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1645000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="form-container">
                        <h2 class="form-title">Send us a Message</h2>
                        <p class="form-subtitle">Have a question or need assistance? Fill out the form below and our team will get back to you shortly.</p>
                        
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>
                            <input type="email" class="form-control" placeholder="Email Address" required>
                            <input type="tel" class="form-control" placeholder="Phone Number" required>
                            <select class="form-control">
                                <option value="" selected disabled>Select Department (Optional)</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Orthopedics">Orthopedics</option>
                                <option value="General">General Inquiry</option>
                            </select>
                            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                            <button type="submit" class="btn btn-submit w-100">Send Message</button>
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
