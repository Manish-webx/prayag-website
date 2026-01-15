<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrastructure & Facilities - Prayag Hospital</title>

    <?php include 'header-links.php'; ?>

    <style>
        .infra-hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1600&h=600&fit=crop');
            background-size: cover;
            background-position: center;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 0 0 50px 50px;
            margin-bottom: 50px;
        }

        .infra-hero-title {
            color: #fff;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            animation: fadeInDown 1s ease-out;
        }

        .infra-section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .infra-section-title {
            color: #2c3e50;
            font-weight: 700;
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }

        .infra-section-title::after {
            content: '';
            width: 60px;
            height: 3px;
            background: #e67e22;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .facility-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border: 1px solid #eee;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .facility-image {
            height: 250px;
            overflow: hidden;
        }

        .facility-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .facility-card:hover .facility-image img {
            transform: scale(1.1);
        }

        .facility-content {
            padding: 25px;
        }

        .facility-title {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .facility-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .tech-highlight-section {
            background-color: #f8f9fa;
            padding: 80px 0;
            margin-top: 50px;
        }

        .tech-list-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .tech-list-icon {
            background: #e67e22;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .tech-list-content h4 {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .tech-list-content p {
            color: #666;
            font-size: 0.95rem;
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
                    <li class="breadcrumb-item active" aria-current="page">Infrastructure</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
        <!-- Hero Section -->
        <section class="infra-hero-section">
            <div class="container">
                <div class="infra-hero-content">
                    <h1 class="infra-hero-title">World Class Infrastructure</h1>
                    <p class="text-white fs-5">Designed for Patient Comfort, Safety, and Healing</p>
                </div>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1587351021759-3e566b9af922?w=800&h=600&fit=crop"
                        alt="Hospital Architecture" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h2 class="mb-4 text-primary-dark">Environment That Heals</h2>
                        <p class="lead mb-4">Prayag Hospital blends state-of-the-art medical technology with a
                            patient-friendly aesthetics to create an environment that promotes faster healing and well-being.</p>
                        <p class="text-secondary">Our infrastructure is meticulously planned to ensure seamless patient flow,
                            infection control, and maximum comfort. From spacious waiting areas to advanced critical care
                            units, every corner of our hospital reflects our commitment to excellence. We maintain the highest standards of hygiene and safety, ensuring a sterile and secure environment for all procedures.</p>
                        <p class="text-secondary">With 24/7 power backup, centralized medical gas systems, and advanced
                            fire safety measures, our facility is equipped to handle any medical emergency with efficiency and precision.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Facilities Grid -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="infra-section-header">
                    <h2 class="infra-section-title">Key Facilities</h2>
                    <p class="text-muted mt-3">A glimpse into our advanced medical infrastructure.</p>
                </div>

                <div class="row g-4">
                    <!-- Facility 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-card">
                            <div class="facility-image">
                                <img src="https://images.unsplash.com/photo-1516549655169-df83a06745ed?w=800&h=500&fit=crop"
                                    alt="Modular OT">
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">Modular Operation Theaters</h3>
                                <p class="facility-description">Ultra-modern modular OTs equipped with HEPA filters,
                                    laminar airflow, and advanced surgical workstations to ensure zero-infection surgeries.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Facility 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-card">
                            <div class="facility-image">
                                <img src="https://plus.unsplash.com/premium_photo-1661281397737-9b5d75902255?w=800&h=500&fit=crop"
                                    alt="ICU">
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">Advanced ICU & CCU</h3>
                                <p class="facility-description">Dedicated Intensive Care Units with multi-para monitors,
                                    ventilators, and 24/7 intensivist support for critical patients.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Facility 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-card">
                            <div class="facility-image">
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&h=500&fit=crop"
                                    alt="Radiology">
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">Diagnostic & Imaging Wing</h3>
                                <p class="facility-description">Comprehensive diagnostic center featuring 1.5 Tesla MRI,
                                    128-slice CT Scan, Digital X-Ray, and advanced ultrasound machines.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Facility 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-card">
                            <div class="facility-image">
                                <img src="https://images.unsplash.com/photo-1596541223130-5d31a73fb6c6?w=800&h=500&fit=crop"
                                    alt="Patient Ward">
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">Patient Rooms & Suites</h3>
                                <p class="facility-description">Comfortable and hygienic wards, private rooms, and deluxe
                                    suites designed to provide a home-like atmosphere for recovery.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Facility 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-card">
                            <div class="facility-image">
                                <img src="https://images.unsplash.com/photo-1516574187841-693025292b83?w=800&h=500&fit=crop"
                                    alt="Emergency">
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">24/7 Emergency & Trauma</h3>
                                <p class="facility-description">Fully equipped Level-1 Trauma Center capable of handling all
                                    medical and surgical emergencies round the clock.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Facility 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-card">
                            <div class="facility-image">
                                <img src="https://images.unsplash.com/photo-1585435557343-3b092031a831?w=800&h=500&fit=crop"
                                    alt="Pharmacy">
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">Pharmacy & Cafeteria</h3>
                                <p class="facility-description">24/7 in-house pharmacy stocking all essential medicines and
                                    a hygienic cafeteria serving healthy meals for visitors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section class="tech-highlight-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="mb-4">Technology at the Core</h2>
                        <p class="mb-4">We continually invest in the latest medical technology to ensure precise diagnosis
                            and effective treatment.</p>
                        
                        <div class="tech-list-item">
                            <div class="tech-list-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="tech-list-content">
                                <h4>Robotic Surgery System</h4>
                                <p>For minimally invasive surgeries with higher precision and faster recovery.</p>
                            </div>
                        </div>

                        <div class="tech-list-item">
                            <div class="tech-list-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="tech-list-content">
                                <h4>Advanced Cath Lab</h4>
                                <p>Digital flat-panel Cath Lab for accurate cardiac interventions.</p>
                            </div>
                        </div>

                        <div class="tech-list-item">
                            <div class="tech-list-icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <div class="tech-list-content">
                                <h4>Molecular Pathology Lab</h4>
                                <p>NABL accredited lab for high-end genetic and molecular testing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-2">
                            <div class="col-6">
                                <img src="https://images.unsplash.com/photo-1576091160550-2187580016f3?w=600&h=800&fit=crop" class="img-fluid rounded shadow w-100" alt="Tech 1">
                            </div>
                            <div class="col-6">
                                <img src="https://images.unsplash.com/photo-1617135092914-1145bc3d842d?w=600&h=800&fit=crop" class="img-fluid rounded shadow w-100" alt="Tech 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </main>

    <?php include 'footer-links.php'; ?>
</body>

</html>
