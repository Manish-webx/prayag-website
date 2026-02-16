<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hospitals - Prayag Hospital & Research Centre</title>
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
                <div class="col-lg-6 col-md-6">
                    <div class="hospital-card">
                        <img src="../assets/images/prayag-hostipal-img.webp" 
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
                                    <i class="fas fa-location-arrow"></i> Directions
                                </a>
                                <a href="tel:+911202570111" class="btn btn-primary-orange flex-grow-1">
                                    <i class="fas fa-phone"></i> Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>             

                <!-- Greater Noida Branch -->
                <div class="col-lg-6 col-md-6">
                    <div class="hospital-card">
                        <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800&h=450&fit=crop" 
                             alt="Prayag Hospital Greater Noida" class="hospital-image">
                        <div class="hospital-details">
                            <h2 class="hospital-name">Prayag Hospital, Greater Noida</h2>
                            
                            <div class="hospital-info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>
                                    Prayag Hospital & Research Centre<br>
                                    NH-021, Block M, Delta III,<br>
                                    Greater Noida, UP 201310
                                </span>
                            </div>
                            
                            <div class="hospital-info-item">
                                <i class="fas fa-phone-alt"></i>
                                <span>
                                    +91 92896 62853<br>
                                    <small class="text-muted">(Emergency 24/7)</small>
                                </span>
                            </div>

                            <div class="hospital-info-item">
                                <i class="fas fa-envelope"></i>
                                <span>info.gn@prayaghospital.in</span>
                            </div>

                            <div class="features-grid">
                                <div class="feature-item"><i class="fas fa-check-circle"></i> 100+ Beds</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Modular High-Tech OT</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> 24/7 Pharmacy</div>
                                <div class="feature-item"><i class="fas fa-check-circle"></i> Diagnostics</div>
                            </div>

                            <div class="hospital-actions">
                                <a href="https://maps.app.goo.gl/ZpgoC2Si63ecqSXh9" target="_blank" class="btn btn-outline-teal flex-grow-1">
                                    <i class="fas fa-location-arrow"></i> Directions
                                </a>
                                <a href="tel:+919289662853" class="btn btn-primary-orange flex-grow-1">
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
                    <h4 class="text-center mb-3">Greater Noida</h4>
                    <div style="height: 300px; width: 100%;">
                         <iframe src="https://maps.google.com/maps?q=Prayag+Hospital+Greater+Noida&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
