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

        /* Gallery Grid Styles */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            cursor: pointer;
            aspect-ratio: 4/3;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item-overlay {
            display: none;
        }

        .gallery-item-title {
            display: none;
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.5);
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 40px;
            color: #fff;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.1);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
            z-index: 10000;
        }

        .lightbox-close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 40px;
            color: #fff;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.1);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
            user-select: none;
        }

        .lightbox-nav:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .lightbox-prev {
            left: 30px;
        }

        .lightbox-next {
            right: 30px;
        }

        .lightbox-caption {
            display: none;
        }

        .lightbox-counter {
            position: absolute;
            top: 20px;
            left: 30px;
            color: #fff;
            font-size: 1rem;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            border-radius: 20px;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 15px;
            }

            .lightbox-nav {
                width: 50px;
                height: 50px;
                font-size: 30px;
            }

            .lightbox-prev {
                left: 10px;
            }

            .lightbox-next {
                right: 10px;
            }

            .lightbox-close {
                top: 10px;
                right: 10px;
                width: 40px;
                height: 40px;
                font-size: 30px;
            }


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

        <section class="blog-hero-section">
            <div class="container">
                <div class="blog-hero-content">
                    <h1 class="blog-hero-title">World Class Infrastructure</h1>
                    <p class="blog-hero-subtitle">Designed for Patient Comfort, Safety, and Healing</p>
                </div>
            </div>
        </section>
       
        <!-- Infrastructure Gallery -->
        <section class="py-5 bg-light">
            <div class="container">               

                <div class="gallery-grid" id="infrastructureGallery">
                    <!-- Gallery items will be dynamically loaded here -->
                    <?php
                    // Loop through all 65 images
                    for ($i = 1; $i <= 65; $i++) {
                        echo '<div class="gallery-item" data-index="' . ($i - 1) . '">';
                        echo '<img src="../assets/images/gallery/' . $i . '.webp" alt="Infrastructure Image ' . $i . '">';
                        echo '<div class="gallery-item-overlay">';
                        echo '<p class="gallery-item-title">Infrastructure ' . $i . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </main>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <span class="lightbox-close" id="lightboxClose">&times;</span>
        <div class="lightbox-counter" id="lightboxCounter"></div>
        <span class="lightbox-nav lightbox-prev" id="lightboxPrev">&#10094;</span>
        <div class="lightbox-content">
            <img src="" alt="" class="lightbox-image" id="lightboxImage">
        </div>
        <span class="lightbox-nav lightbox-next" id="lightboxNext">&#10095;</span>
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>

    <?php include 'footer-links.php'; ?>

    <script>
        // Lightbox functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');
        const galleryItems = document.querySelectorAll('.gallery-item');

        let currentIndex = 0;
        const totalImages = galleryItems.length;

        // Open lightbox
        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // Close lightbox
        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Update lightbox content
        function updateLightbox() {
            const item = galleryItems[currentIndex];
            const img = item.querySelector('img');
            const title = item.querySelector('.gallery-item-title');

            lightboxImage.src = img.src;
            lightboxImage.alt = img.alt;
            lightboxCaption.textContent = title ? title.textContent : img.alt;
            lightboxCounter.textContent = `${currentIndex + 1} / ${totalImages}`;
        }

        // Navigate to next image
        function nextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            updateLightbox();
        }

        // Navigate to previous image
        function prevImage() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateLightbox();
        }

        // Event listeners
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => openLightbox(index));
        });

        lightboxClose.addEventListener('click', closeLightbox);
        lightboxNext.addEventListener('click', nextImage);
        lightboxPrev.addEventListener('click', prevImage);

        // Close lightbox when clicking outside the image
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;

            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });

        // Prevent scrolling when lightbox is open
        lightbox.addEventListener('wheel', (e) => {
            e.preventDefault();
        }, { passive: false });
    </script>
</body>

</html>
