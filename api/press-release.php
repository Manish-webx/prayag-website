<?php
// Mock Press Data
$press_releases = [
    [
        'title' => 'Prayag Hospital Launches Advanced Cardiac Care Center',
        'date' => '2024-01-10',
        'excerpt' => 'New state-of-the-art facility equipped with the latest technology for comprehensive heart care.',
        'image' => 'https://via.placeholder.com/600x400/4A8F73/ffffff?text=Cardiac+Center+Launch',
        'source' => 'Healthcare News',
        'link' => '#'
    ],
    [
        'title' => 'Free Health Checkup Camp Organized for Senior Citizens',
        'date' => '2023-12-15',
        'excerpt' => 'Over 500 senior citizens benefited from the free health screening camp organized by Prayag Hospital.',
        'image' => 'https://via.placeholder.com/600x400/E8964F/ffffff?text=Health+Camp',
        'source' => 'City Chronicles',
        'link' => '#'
    ],
    [
        'title' => 'Prayag Hospital Awarded "Best Multispecialty Hospital" in the Region',
        'date' => '2023-11-20',
        'excerpt' => 'Recognized for excellence in patient care, medical expertise, and infrastructure.',
        'image' => 'https://via.placeholder.com/600x400/4A8F73/ffffff?text=Award+Ceremony',
        'source' => 'Medical Times',
        'link' => '#'
    ],
    [
        'title' => 'Dr. Rajesh Kumar Successfully Performs Rare Robotic Surgery',
        'date' => '2023-10-05',
        'excerpt' => 'A milestone achievement in minimally invasive surgery at Prayag Hospital.',
        'image' => 'https://via.placeholder.com/600x400/E8964F/ffffff?text=Robotic+Surgery',
        'source' => 'Science Today',
        'link' => '#'
    ],
    [
        'title' => 'Prayag Hospital Partners with International Research Institute',
        'date' => '2023-09-12',
        'excerpt' => 'Strategic reference collaboration to advance clinical research and treatment protocols.',
        'image' => 'https://via.placeholder.com/600x400/4A8F73/ffffff?text=Partnership',
        'source' => 'Global Health Wire',
        'link' => '#'
    ],
    [
        'title' => 'Expansion Plans: New Wing for Mother and Child Care',
        'date' => '2023-08-01',
        'excerpt' => 'Construction begins on a dedicated facility for obstetrics, gynecology, and pediatrics.',
        'image' => 'https://via.placeholder.com/600x400/E8964F/ffffff?text=New+Wing',
        'source' => 'Infrastructure Weekly',
        'link' => '#'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Press Releases - Media & News | Prayag Hospital</title>
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
                    <li class="breadcrumb-item"><a href="#">News & Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Press Releases</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Press Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Press Releases</h1>
                <p class="blog-hero-subtitle">Latest updates, announcements, and media coverage from Prayag Hospital.</p>
            </div>
        </div>
    </section>

    <!-- Press Content Section -->
    <section class="blog-content-section" style="padding: 40px 0;">
        <div class="container">
            <div class="row">
                <!-- Main Content Area -->
                <div class="col-lg-12">
                    
                    <!-- Press Grid -->
                    <div class="row g-4">
                        <?php foreach ($press_releases as $press): ?>
                        <div class="col-md-6 col-12">
                            <article class="blog-post-card h-100">
                                <div class="blog-post-image">
                                    <img src="<?php echo $press['image']; ?>" alt="<?php echo $press['title']; ?>">
                                    <div class="blog-category-badge"><?php echo $press['source']; ?></div>
                                </div>
                                <div class="blog-post-content d-flex flex-column h-100" style="min-height: 250px;">
                                    <div class="blog-post-meta">
                                        <span class="meta-item"><i class="far fa-calendar"></i> <?php echo date('M d, Y', strtotime($press['date'])); ?></span>
                                    </div>
                                    <h3 class="blog-post-title"><?php echo $press['title']; ?></h3>
                                    <p class="blog-post-excerpt"><?php echo $press['excerpt']; ?></p>
                                    <div class="blog-post-footer mt-auto">
                                        <a href="<?php echo $press['link']; ?>" class="btn-read-more">Read Full Story <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
