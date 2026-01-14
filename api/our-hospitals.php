<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hospitals - Prayag Hospital & Research Centre</title>
    <?php include 'header-links.php'; ?>
    <style>
        .hospital-card {
            border: 1px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            background: #fff;
        }

        .hospital-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .hospital-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .hospital-details {
            padding: 25px;
        }

        .hospital-name {
            font-size: 24px;
            font-weight: 700;
            color: var(--prayag-teal);
            margin-bottom: 15px;
        }

        .hospital-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            color: var(--light-text);
        }

        .hospital-info-item i {
            color: var(--prayag-orange);
            width: 20px;
            margin-top: 5px;
            margin-right: 15px;
        }

        .hospital-actions {
            margin-top: 25px;
            display: flex;
            gap: 15px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .feature-item {
            font-size: 14px;
            color: #666;
            display: flex;
            align-items: center;
        }

        .feature-item i {
            color: var(--prayag-teal);
            margin-right: 8px;
            font-size: 12px;
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
                    <li class="breadcrumb-item"><a href="#">Prayag Group</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Hospitals</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Our Network</h1>
                <p class="blog-hero-subtitle">State-of-the-art medical facilities located in Noida and Gurugram, delievering excellence in healthcare.</p>
            </div>
        </div>
    </section>

    <!-- Hospitals Grid -->
    <section class="hospitals-section section-padding" style="padding: 40px 0;">
        <div class="container">
            <div class="row g-4 justify-content-center">
                
                <!-- Noida Branch -->
                <div class="col-lg-6 col-md-10">
                    <div class="hospital-card">
                        <img src="https://images.unsplash.com/photo-1587351021759-3e566b9af923?w=800&h=450&fit=crop" 
                             alt="Prayag Hospital Noida" class="hospital-image">
                        <div class="hospital-details">
                            <h2 class="hospital-name">Prayag Hospital, Noida</h2>
                            
                            <div class="hospital-info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>
                                    Prayag Hospital & Research Centre<br>
                                    Sector 41, Noida,<br>
                                    Uttar Pradesh 201301
                                </span>
                            </div>
                            
                            <div class="hospital-info-item">
                                <i class="fas fa-phone-alt"></i>
                                <span>
                                    +91 120-2570111, +91 120-2570112<br>
                                    <small class="text-muted">(Emergency 24/7)</small>
                                </span>
                            </div>

                            <div class="hospital-info-item">
                                <i class="fas fa-envelope"></i>
                                <span>info.noida@prayaghospital.in</span>
                            </div>

                            <div class="features-grid">
                                <div class="feature-item"><i class="fas fa-check-circle"></i> 200+ Beds</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Trauma Centre</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Burn Unit</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Cath Lab</div>
                            </div>

                            <div class="hospital-actions">
                                <a href="https://goo.gl/maps/placeholder" target="_blank" class="btn btn-outline-teal flex-grow-1">
                                    <i class="fas fa-location-arrow"></i> Get Directions
                                </a>
                                <a href="tel:+911202570111" class="btn btn-primary-orange flex-grow-1">
                                    <i class="fas fa-phone"></i> Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gurugram Branch -->
                <div class="col-lg-6 col-md-10">
                    <div class="hospital-card">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&h=450&fit=crop" 
                             alt="Prayag Hospital Gurugram" class="hospital-image">
                        <div class="hospital-details">
                            <h2 class="hospital-name">Prayag Hospital, Gurugram</h2>
                            
                            <div class="hospital-info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>
                                    Prayag Hospital & Research Centre<br>
                                    J-Block, Sector 38, Near Huda City Centre,<br>
                                    Gurugram, Haryana 122001
                                </span>
                            </div>
                            
                            <div class="hospital-info-item">
                                <i class="fas fa-phone-alt"></i>
                                <span>
                                    0124-4086666, +91 8811780937<br>
                                    <small class="text-muted">(Emergency 24/7)</small>
                                </span>
                            </div>

                            <div class="hospital-info-item">
                                <i class="fas fa-envelope"></i>
                                <span>info.ggn@prayaghospital.in</span>
                            </div>

                            <div class="features-grid">
                                <div class="feature-item"><i class="fas fa-check-circle"></i> 150+ Beds</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Advanced ICU</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Kidney Transplant</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Onco-Surgery</div>
                            </div>

                            <div class="hospital-actions">
                                <a href="https://goo.gl/maps/placeholder" target="_blank" class="btn btn-outline-teal flex-grow-1">
                                    <i class="fas fa-location-arrow"></i> Get Directions
                                </a>
                                <a href="tel:+918811780937" class="btn btn-primary-orange flex-grow-1">
                                    <i class="fas fa-phone"></i> Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Map Integration Section -->
    <section class="map-integration-section bg-light section-padding" style="padding: 40px 0;">
        <div class="container">
            <h2 class="section-title-dark text-center mb-2">Locate Us</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <h4 class="text-center mb-3">Noida</h4>
                    <div style="height: 300px; width: 100%;">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.603347901584!2d77.35987631508076!3d28.55163698244971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5e0f5555555%3A0x6b7235a9634288b3!2sPrayag%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1645000000000!5m2!1sen!2sin" 
                         width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mb-3">Gurugram</h4>
                    <div style="height: 300px; width: 100%;">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.840798154676!2d77.04354531508244!3d28.43447598249646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d187295555555%3A0x1234567890abcdef!2sPrayag%20Hospital%20Gurugram!5e0!3m2!1sen!2sin!4v1645000000000!5m2!1sen!2sin" 
                         width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
