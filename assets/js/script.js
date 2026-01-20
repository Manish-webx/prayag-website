// ================================================
// PRAYAG HOSPITAL - JAVASCRIPT
// Professional Healthcare Website Navigation
// ================================================

$(document).ready(function () {

    // ================================================
    // SMOOTH SCROLLING FOR ANCHOR LINKS
    // ================================================
    $('a[href^="#"]').on('click', function (e) {
        const target = $(this.hash);
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800, 'swing');
        }
    });

    // ================================================
    // NAVBAR BACKGROUND ON SCROLL
    // ================================================
    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $('.primary-nav').addClass('scrolled');
        } else {
            $('.primary-nav').removeClass('scrolled');
        }
    });

    // ================================================
    // DROPDOWN MENU - DESKTOP HOVER BEHAVIOR
    // ================================================
    if ($(window).width() > 991) {
        $('.dropdown').hover(
            function () {
                const $this = $(this);
                clearTimeout($this.data('timeout'));
                $this.addClass('show');
                $this.find('.dropdown-menu').addClass('show');
            },
            function () {
                const $this = $(this);
                const timeout = setTimeout(function () {
                    $this.removeClass('show');
                    $this.find('.dropdown-menu').removeClass('show');
                }, 200); // 200ms delay before hiding
                $this.data('timeout', timeout);
            }
        );
    }

    // ================================================
    // MOBILE MENU TOGGLE
    // ================================================
    $('.navbar-toggler').on('click', function () {
        $(this).toggleClass('active');
        const isExpanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !isExpanded);
    });

    // ================================================
    // CLOSE MOBILE MENU ON LINK CLICK
    // ================================================
    $('.navbar-nav .nav-link').on('click', function () {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
            $('.navbar-toggler').removeClass('active');
        }
    });

    // ================================================
    // ACTIVE NAVIGATION LINK HIGHLIGHT
    // ================================================
    function setActiveNav() {
        const currentPath = window.location.pathname;
        $('.nav-link').each(function () {
            const linkPath = $(this).attr('href');
            if (currentPath.includes(linkPath) && linkPath !== '#') {
                $(this).addClass('active');
            }
        });
    }
    setActiveNav();

    // ================================================
    // SEARCH MODAL FOCUS
    // ================================================
    $('#searchModal').on('shown.bs.modal', function () {
        $(this).find('.form-control').focus();
    });

    // ================================================
    // SEARCH FUNCTIONALITY (DEMO)
    // ================================================
    $('.btn-search-submit').on('click', function (e) {
        e.preventDefault();
        const searchQuery = $('.search-box .form-control').val();
        if (searchQuery.trim() !== '') {
            console.log('Searching for:', searchQuery);
            // Add your search logic here
            alert('Search functionality: ' + searchQuery);
        }
    });

    // Search on Enter key
    $('.search-box .form-control').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            $('.btn-search-submit').click();
        }
    });

    // ================================================
    // MOBILE BOTTOM NAV ACTIVE STATE
    // ================================================
    $('.bottom-nav-item a').on('click', function () {
        $('.bottom-nav-item a').removeClass('active');
        $(this).addClass('active');
    });

    // ================================================
    // APPOINTMENT BUTTON CLICK HANDLER
    // ================================================
    $('.btn-appointment').on('click', function (e) {
        e.preventDefault();
        console.log('Book Appointment clicked');
        // Add appointment booking logic or redirect
        alert('Redirecting to appointment booking...');
    });

    // ================================================
    // HELPLINE CLICK TRACKING
    // ================================================
    $('a[href^="tel:"]').on('click', function () {
        const phoneNumber = $(this).attr('href').replace('tel:', '');
        console.log('Calling:', phoneNumber);
        // Analytics tracking can be added here
    });

    // ================================================
    // DROPDOWN ACCESSIBILITY
    // ================================================
    $('.dropdown-toggle').on('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            $(this).dropdown('toggle');
        }
    });

    // ================================================
    // RESPONSIVE BEHAVIOR ADJUSTMENTS
    // ================================================
    function handleResize() {
        const windowWidth = $(window).width();

        // Remove hover behavior on mobile
        if (windowWidth <= 991) {
            $('.dropdown').off('mouseenter mouseleave');
        } else {
            // Re-enable hover on desktop
            $('.dropdown').hover(
                function () {
                    const $this = $(this);
                    clearTimeout($this.data('timeout'));
                    $this.addClass('show');
                    $this.find('.dropdown-menu').addClass('show');
                },
                function () {
                    const $this = $(this);
                    const timeout = setTimeout(function () {
                        $this.removeClass('show');
                        $this.find('.dropdown-menu').removeClass('show');
                    }, 200);
                    $this.data('timeout', timeout);
                }
            );
        }
    }

    // Run on load and resize
    handleResize();
    $(window).on('resize', handleResize);

    // ================================================
    // SMOOTH PAGE TRANSITIONS
    // ================================================
    $('a:not([href^="#"]):not([href^="tel:"]):not([href^="mailto:"])').on('click', function (e) {
        const href = $(this).attr('href');
        if (href && !href.startsWith('http') && !$(this).attr('target')) {
            e.preventDefault();
            $('body').fadeOut(300, function () {
                window.location.href = href;
            });
        }
    });

    // ================================================
    // LAZY LOADING IMAGES (IF APPLICABLE)
    // ================================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img.lazy').forEach(function (img) {
            imageObserver.observe(img);
        });
    }



    // ================================================
    // CONSOLE WELCOME MESSAGE
    // ================================================
    console.log('%c🏥 Prayag Hospital Website', 'color: #4A8F73; font-size: 20px; font-weight: bold;');
    console.log('%c24/7 Healthcare Excellence', 'color: #E8964F; font-size: 14px;');
    console.log('Helpline: 1800 313 1414');

});

// ================================================
// VANILLA JS - EMERGENCY FEATURES
// ================================================

// Quick access to emergency services
document.addEventListener('DOMContentLoaded', function () {

    // Emergency shortcut (Ctrl/Cmd + E)
    document.addEventListener('keydown', function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'e') {
            e.preventDefault();
            window.location.href = 'tel:18003131414';
        }
    });

    // Add emergency notification banner (if needed)
    function showEmergencyBanner(message) {
        const banner = document.createElement('div');
        banner.className = 'emergency-banner';
        banner.innerHTML = `
            <i class="fas fa-exclamation-triangle"></i>
            <span>${message}</span>
            <button onclick="this.parentElement.remove()">×</button>
        `;
        banner.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #D32F2F;
            color: white;
            padding: 12px 20px;
            text-align: center;
            z-index: 9999;
            animation: slideDown 0.3s ease;
        `;
        document.body.insertBefore(banner, document.body.firstChild);
    }

    // Example: Uncomment to show emergency banner
    // showEmergencyBanner('Emergency services available 24/7. Call 1800 313 1414');

});

// ================================================
// PERFORMANCE OPTIMIZATION
// ================================================

// Debounce function for scroll/resize events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for frequent events
function throttle(func, limit) {
    let inThrottle;
    return function (...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// ================================================
// SPECIALITIES CAROUSEL FUNCTIONALITY - SEAMLESS INFINITE LOOP
// ================================================
// ================================================
// SPECIALITIES CAROUSEL FUNCTIONALITY - SEAMLESS INFINITE LOOP
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.specialities-carousel');
    if (!carousel) return;

    const grid = carousel.querySelector('.specialities-grid');
    const cards = grid.querySelectorAll('.speciality-card');
    const prevBtn = document.querySelector('.speciality-nav-prev');
    const nextBtn = document.querySelector('.speciality-nav-next');

    if (!prevBtn || !nextBtn) return;

    const totalCards = cards.length;
    let currentPage = 0;
    let isTransitioning = false;
    let cardSlotWidth = 0;

    // Clone all cards and append to grid for seamless infinite loop
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        grid.appendChild(clone);
    });

    // Function to calculate exact card width based on viewport
    function calculateDimensions() {
        const carouselWidth = carousel.offsetWidth;
        const gap = 20; // Must match CSS gap
        let visibleItems = 4;

        if (window.innerWidth < 768) {
            visibleItems = 1;
        } else if (window.innerWidth < 992) {
            visibleItems = 2;
        }

        // Calculate precise width for each item to fit exactly 'visibleItems' in the viewport
        const exactCardWidth = (carouselWidth - (gap * (visibleItems - 1))) / visibleItems;

        // Apply this width to the grid columns
        grid.style.gridAutoColumns = `${exactCardWidth}px`;

        return exactCardWidth + gap;
    }

    function updateCarousel(smooth = true) {
        // Recalculate dimensions to handle resizes
        cardSlotWidth = calculateDimensions();

        // Current translate calculation
        let translateX = -(currentPage * cardSlotWidth);

        // Enable or disable transition
        grid.style.transition = smooth ? 'transform 0.5s ease-in-out' : 'none';
        grid.style.transform = `translateX(${translateX}px)`;
    }

    // Next button click
    nextBtn.addEventListener('click', function () {
        if (isTransitioning) return;
        isTransitioning = true;

        currentPage++;
        updateCarousel(true);

        // Check if we've reached the cloned section
        // Note: Logic allows seamless scroll across the cloned buffer
        // Since we have 2 rows, we only have totalCards/2 columns (approx)
        // But simpler logic: if we scrolled past original set
        // The original logic was Math.ceil(totalCards / 2) because of the 2-row layout

        // Wait for transition to complete
        setTimeout(() => {
            // If we have scrolled far enough to reach the start of the cloned set
            // Reset back to 0 (which looks identical)
            // The limit depends on how many columns the original set takes.
            // Since it's a 2-row grid, the number of columns is Math.ceil(totalCards / 2).
            const limit = Math.ceil(totalCards / 2);

            if (currentPage >= limit) {
                currentPage = 0;
                updateCarousel(false); // Jump back instantly
            }
            isTransitioning = false;
        }, 500);
    });

    // Previous button click
    prevBtn.addEventListener('click', function () {
        if (isTransitioning) return;
        isTransitioning = true;

        currentPage--;

        if (currentPage < 0) {
            // Jump to the end of the cloned section first (which is the end of original set equivalent)
            const limit = Math.ceil(totalCards / 2);
            currentPage = limit - 1;

            updateCarousel(false); // Jump instantly without animation

            // Force reflow
            void grid.offsetWidth;

            // Then slide to the target
            // Actually, if we want to slide BACKWARDS from 0, we need to jump to 'limit', then slide to 'limit - 1'
            // But here we jumped to limit-1. 
            // Let's adjust: Jump to 'limit', then animate to 'limit-1' is better for "prev" feel?
            // Existing logic was: jump to limit-1, then animate? No, that's not a slide.

            // Correct logic for seamless prev from 0:
            // 1. Jump to `limit` (which is the start of the clones, visually identical to 0? No, wait.)
            // The clones are at the END.
            // visual 0 is start.
            // visual `limit` is start of clones.
            // So if we are at 0 and want to go prev, we want to go to -1.
            // But -1 doesn't exist.
            // So we jump to `limit` (which is visually same as 0), then animate to `limit - 1`.

            currentPage = limit;
            updateCarousel(false); // Instant jump to matching clone position

            setTimeout(() => {
                currentPage = limit - 1;
                updateCarousel(true); // Animate to prev
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }, 50);

            return; // Exit early since we handled the special case
        }

        updateCarousel(true);
        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    });

    // Initialize
    // Use setTimeout to ensure layout is fully rendered before initial calculation
    setTimeout(() => {
        updateCarousel(false);
    }, 100);

    // Update on window resize
    window.addEventListener('resize', debounce(() => updateCarousel(false), 250));
});

// ================================================
// WHY CHOOSE US CAROUSEL FUNCTIONALITY - SEAMLESS INFINITE LOOP
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.why-choose-carousel');
    if (!carousel) return;

    const grid = carousel.querySelector('.why-choose-grid');
    const cards = grid.querySelectorAll('.why-choose-card');
    const prevBtn = document.querySelector('.nav-prev-why');
    const nextBtn = document.querySelector('.nav-next-why');

    const itemsPerPage = 8; // Show 8 cards (2 rows x 4 columns) at a time
    const totalCards = cards.length;
    const totalPages = Math.ceil(totalCards / itemsPerPage);
    let currentPage = 0;
    let isTransitioning = false;

    // Clone all cards and append to grid for seamless infinite loop
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        grid.appendChild(clone);
    });

    // Calculate card width dynamically
    function getCardWidth() {
        const allCards = grid.querySelectorAll('.why-choose-card');
        if (allCards[0]) {
            const cardStyle = window.getComputedStyle(allCards[0]);
            const cardWidth = allCards[0].offsetWidth;
            const marginRight = parseFloat(cardStyle.marginRight) || 0;
            return cardWidth + marginRight;
        }
        return 0;
    }

    // Calculate gap between cards
    function getGap() {
        const gridStyle = window.getComputedStyle(grid);
        return parseFloat(gridStyle.columnGap) || 25;
    }

    function updateCarousel(smooth = true) {
        const cardWidth = getCardWidth();
        const gap = getGap();
        const columnsToMove = 1; // Move by 1 column
        const translateX = -currentPage * columnsToMove * (cardWidth + gap);

        // Enable or disable transition
        if (smooth) {
            grid.style.transition = 'transform 0.5s ease-in-out';
        } else {
            grid.style.transition = 'none';
        }

        grid.style.transform = `translateX(${translateX}px)`;

        // Arrows are always enabled for infinite loop
        prevBtn.disabled = false;
        nextBtn.disabled = false;
        prevBtn.style.opacity = '1';
        nextBtn.style.opacity = '1';
        prevBtn.style.cursor = 'pointer';
        nextBtn.style.cursor = 'pointer';
    }

    function handleNext() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentPage++;
        updateCarousel(true);

        // Check if we've reached the cloned section
        if (currentPage >= totalCards) {
            setTimeout(() => {
                currentPage = 0;
                updateCarousel(false); // Jump back instantly without animation
                setTimeout(() => {
                    isTransitioning = false;
                }, 50);
            }, 500); // Wait for transition to complete
        } else {
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
    }

    function handlePrev() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentPage--;

        // If going below 0, jump to the end of cloned section first
        if (currentPage < 0) {
            currentPage = totalCards - 1;
            updateCarousel(false); // Jump instantly without animation
            setTimeout(() => {
                currentPage--;
                updateCarousel(true);
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }, 50);
        } else {
            updateCarousel(true);
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
    }

    // Next button click
    nextBtn.addEventListener('click', handleNext);

    // Previous button click
    prevBtn.addEventListener('click', handlePrev);

    // Touch Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    grid.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    grid.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const threshold = 50; // min distance for swipe
        if (touchEndX < touchStartX - threshold) {
            // Swipe Left (Next)
            handleNext();
        }
        if (touchEndX > touchStartX + threshold) {
            // Swipe Right (Prev)
            handlePrev();
        }
    }

    // Initialize
    updateCarousel(false);

    // Update on window resize
    window.addEventListener('resize', debounce(() => updateCarousel(false), 250));
});

// ================================================
// ================================================
// NEWS SLIDER FUNCTIONALITY - SEAMLESS INFINITE LOOP
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const newsSliderContainer = document.querySelector('.news-slider-container');
    if (!newsSliderContainer) return;

    const newsSlider = document.querySelector('.news-slider');
    const newsItems = newsSlider.querySelectorAll('.news-item');
    const prevBtn = document.querySelector('.news-nav-prev');
    const nextBtn = document.querySelector('.news-nav-next');

    // Number of items to clone for seamless loop
    const totalItems = newsItems.length;
    let currentIndex = 0;
    let isTransitioning = false;

    // Clone all items and append to slider for seamless infinite loop
    newsItems.forEach(item => {
        const clone = item.cloneNode(true);
        newsSlider.appendChild(clone);
    });

    // Calculate item width dynamically
    function getItemWidth() {
        const allItems = newsSlider.querySelectorAll('.news-item');
        if (allItems[0]) {
            const itemStyle = window.getComputedStyle(allItems[0]);
            const itemWidth = allItems[0].offsetWidth;
            const marginRight = parseFloat(itemStyle.marginRight) || 0;
            return itemWidth + marginRight;
        }
        return 0;
    }

    // Calculate gap between items
    function getGap() {
        const sliderStyle = window.getComputedStyle(newsSlider);
        return parseFloat(sliderStyle.gap) || 25;
    }

    function updateSlider(smooth = true) {
        const itemWidth = getItemWidth();
        const gap = getGap();
        const translateX = -currentIndex * (itemWidth + gap);

        // Enable or disable transition
        if (smooth) {
            newsSlider.style.transition = 'transform 0.5s ease-in-out';
        } else {
            newsSlider.style.transition = 'none';
        }

        newsSlider.style.transform = `translateX(${translateX}px)`;

        // Arrows are always enabled for infinite loop
        prevBtn.disabled = false;
        nextBtn.disabled = false;
        prevBtn.style.opacity = '1';
        nextBtn.style.opacity = '1';
        prevBtn.style.cursor = 'pointer';
        nextBtn.style.cursor = 'pointer';
    }

    function handleNext() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentIndex++;
        updateSlider(true);

        // Check if we've reached the cloned section
        if (currentIndex >= totalItems) {
            setTimeout(() => {
                currentIndex = 0;
                updateSlider(false); // Jump back instantly without animation
                setTimeout(() => {
                    isTransitioning = false;
                }, 50);
            }, 500); // Wait for transition to complete
        } else {
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
    }

    function handlePrev() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentIndex--;

        // If going below 0, jump to the end of cloned section first
        if (currentIndex < 0) {
            currentIndex = totalItems - 1;
            updateSlider(false); // Jump instantly without animation
            setTimeout(() => {
                currentIndex--;
                updateSlider(true);
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }, 50);
        } else {
            updateSlider(true);
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
    }

    // Next button click
    nextBtn.addEventListener('click', handleNext);

    // Previous button click
    prevBtn.addEventListener('click', handlePrev);

    // Initialize
    updateSlider(false);

    // Update on window resize
    window.addEventListener('resize', debounce(() => updateSlider(false), 250));
});

// ================================================
// PATIENT TESTIMONIALS SLIDER - SEAMLESS INFINITE LOOP
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const testimonialSlider = document.querySelector('.testimonials-slider');
    const prevBtn = document.querySelector('.testimonial-nav-prev');
    const nextBtn = document.querySelector('.testimonial-nav-next');
    const testimonialCards = document.querySelectorAll('.testimonial-card');

    if (testimonialSlider && prevBtn && nextBtn && testimonialCards.length > 0) {
        // Number of items to clone for seamless loop
        const totalItems = testimonialCards.length;
        let currentIndex = 0;
        let isTransitioning = false;

        // Clone all items and append to slider for seamless infinite loop
        testimonialCards.forEach(item => {
            const clone = item.cloneNode(true);
            testimonialSlider.appendChild(clone);
        });

        // Calculate item width dynamically
        function getItemWidth() {
            const allItems = testimonialSlider.querySelectorAll('.testimonial-card');
            if (allItems[0]) {
                const itemWidth = allItems[0].offsetWidth;
                return itemWidth;
            }
            return 0;
        }

        // Calculate gap between items
        function getGap() {
            return 25; // Fixed gap as per original code
        }

        function updateSlider(smooth = true) {
            const itemWidth = getItemWidth();
            const gap = getGap();
            const translateX = -currentIndex * (itemWidth + gap);

            // Enable or disable transition
            if (smooth) {
                testimonialSlider.style.transition = 'transform 0.5s ease-in-out';
            } else {
                testimonialSlider.style.transition = 'none';
            }

            testimonialSlider.style.transform = `translateX(${translateX}px)`;

            // Arrows are always enabled for infinite loop
            prevBtn.disabled = false;
            nextBtn.disabled = false;
            prevBtn.style.opacity = '1';
            nextBtn.style.opacity = '1';
            prevBtn.style.cursor = 'pointer';
            nextBtn.style.cursor = 'pointer';
        }

        function handleNext() {
            if (isTransitioning) return;
            isTransitioning = true;

            currentIndex++;
            updateSlider(true);

            // Check if we've reached the cloned section
            if (currentIndex >= totalItems) {
                setTimeout(() => {
                    currentIndex = 0;
                    updateSlider(false); // Jump back instantly without animation
                    setTimeout(() => {
                        isTransitioning = false;
                    }, 50);
                }, 500); // Wait for transition to complete
            } else {
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }
        }

        function handlePrev() {
            if (isTransitioning) return;
            isTransitioning = true;

            currentIndex--;

            // If going below 0, jump to the end of cloned section first
            if (currentIndex < 0) {
                currentIndex = totalItems - 1;
                updateSlider(false); // Jump instantly without animation
                setTimeout(() => {
                    currentIndex--;
                    updateSlider(true);
                    setTimeout(() => {
                        isTransitioning = false;
                    }, 500);
                }, 50);
            } else {
                updateSlider(true);
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }
        }

        // Next button click
        nextBtn.addEventListener('click', handleNext);

        // Previous button click
        prevBtn.addEventListener('click', handlePrev);

        // Touch Swipe Support
        let touchStartX = 0;
        let touchEndX = 0;

        testimonialSlider.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        testimonialSlider.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const threshold = 50; // min distance for swipe
            if (touchEndX < touchStartX - threshold) {
                // Swipe Left (Next)
                handleNext();
            }
            if (touchEndX > touchStartX + threshold) {
                // Swipe Right (Prev)
                handlePrev();
            }
        }

        // Initialize
        updateSlider(false);

        // Update on window resize
        window.addEventListener('resize', debounce(() => updateSlider(false), 250));
    }
});

// ================================================
// YOUTUBE VIDEO MODAL
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('youtubeModal');
    const modalClose = document.querySelector('.youtube-modal-close');
    const iframe = document.getElementById('youtubeIframe');
    const testimonialCards = document.querySelectorAll('.testimonial-card');

    // Open modal when testimonial card is clicked
    testimonialCards.forEach(card => {
        card.addEventListener('click', function () {
            const videoId = this.getAttribute('data-video-id');
            if (videoId) {
                iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // Close modal
    function closeModal() {
        modal.classList.remove('active');
        iframe.src = '';
        document.body.style.overflow = '';
    }

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    // Close on background click
    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    }

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
});

// ================================================
// DOCTORS SLIDER FUNCTIONALITY - SEAMLESS INFINITE LOOP
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const doctorsSliderWrapper = document.querySelector('.doctors-slider-wrapper');
    if (!doctorsSliderWrapper) return;

    const doctorsGrid = document.querySelector('.doctors-grid');
    const doctorCards = doctorsGrid.querySelectorAll('.doctor-card');
    const prevBtn = document.querySelector('.doctor-nav-prev');
    const nextBtn = document.querySelector('.doctor-nav-next');

    // Number of items to clone for seamless loop
    const totalCards = doctorCards.length;
    let currentIndex = 0;
    let isTransitioning = false;

    // Clone all cards and append to grid for seamless infinite loop
    doctorCards.forEach(card => {
        const clone = card.cloneNode(true);
        doctorsGrid.appendChild(clone);
    });

    // Calculate card width dynamically
    function getCardWidth() {
        const allCards = doctorsGrid.querySelectorAll('.doctor-card');
        if (allCards[0]) {
            const cardWidth = allCards[0].offsetWidth;
            return cardWidth;
        }
        return 0;
    }

    // Calculate gap between cards
    function getGap() {
        const gridStyle = window.getComputedStyle(doctorsGrid);
        return parseFloat(gridStyle.gap) || 30;
    }

    function updateSlider(smooth = true) {
        const cardWidth = getCardWidth();
        const gap = getGap();
        const translateX = -currentIndex * (cardWidth + gap);

        // Enable or disable transition
        if (smooth) {
            doctorsGrid.style.transition = 'transform 0.5s ease-in-out';
        } else {
            doctorsGrid.style.transition = 'none';
        }

        doctorsGrid.style.transform = `translateX(${translateX}px)`;

        // Arrows are always enabled for infinite loop
        prevBtn.disabled = false;
        nextBtn.disabled = false;
        prevBtn.style.opacity = '1';
        nextBtn.style.opacity = '1';
        prevBtn.style.cursor = 'pointer';
        nextBtn.style.cursor = 'pointer';
    }

    function handleNext() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentIndex++;
        updateSlider(true);

        // Check if we've reached the cloned section
        if (currentIndex >= totalCards) {
            setTimeout(() => {
                currentIndex = 0;
                updateSlider(false); // Jump back instantly without animation
                setTimeout(() => {
                    isTransitioning = false;
                }, 50);
            }, 500); // Wait for transition to complete
        } else {
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
    }

    function handlePrev() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentIndex--;

        // If going below 0, jump to the end of cloned section first
        if (currentIndex < 0) {
            currentIndex = totalCards - 1;
            updateSlider(false); // Jump instantly without animation
            setTimeout(() => {
                currentIndex--;
                updateSlider(true);
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }, 50);
        } else {
            updateSlider(true);
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
    }

    // Next button click
    nextBtn.addEventListener('click', handleNext);

    // Previous button click
    prevBtn.addEventListener('click', handlePrev);

    // Touch Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    doctorsGrid.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    doctorsGrid.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const threshold = 50; // min distance for swipe
        if (touchEndX < touchStartX - threshold) {
            // Swipe Left (Next)
            handleNext();
        }
        if (touchEndX > touchStartX + threshold) {
            // Swipe Right (Prev)
            handlePrev();
        }
    }

    // Initialize
    updateSlider(false);

    // Update on window resize
    window.addEventListener('resize', debounce(() => updateSlider(false), 250));
});


// ================================================
// SPECIALITIES SLIDER FUNCTIONALITY - SEAMLESS INFINITE LOOP
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    // ================================================
    // SPECIALITIES SLIDER - 2-ROW COLUMN-BASED LOGIC
    // ================================================
    const specialitiesCarousel = document.querySelector('.specialities-carousel');
    if (!specialitiesCarousel) return;

    const specialitiesGrid = specialitiesCarousel.querySelector('.specialities-grid');
    const specialityCards = specialitiesGrid.querySelectorAll('.speciality-card');

    // Inject navigation buttons if they don't exist
    let prevBtn = specialitiesCarousel.querySelector('.speciality-nav-prev');
    let nextBtn = specialitiesCarousel.querySelector('.speciality-nav-next');

    if (!prevBtn) {
        const navContainer = document.createElement('div');
        navContainer.className = 'speciality-nav-container';
        navContainer.innerHTML = `
            <button class="speciality-nav-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="speciality-nav-next"><i class="fas fa-chevron-right"></i></button>
        `;
        specialitiesCarousel.appendChild(navContainer);
        prevBtn = navContainer.querySelector('.speciality-nav-prev');
        nextBtn = navContainer.querySelector('.speciality-nav-next');
    }

    // Number of columns in original set (2 items per column)
    // We calculate this BEFORE cloning
    const totalCols = Math.ceil(specialityCards.length / 2);
    let currentCol = 0; // Use column index instead of item index
    let isTransitioning = false;

    // Double Clone for safety buffer to prevent blank space
    // Set 1 (Original) -> Set 2 (Clone 1) -> Set 3 (Clone 2)
    specialityCards.forEach(item => {
        const clone = item.cloneNode(true);
        specialitiesGrid.appendChild(clone);
    });
    specialityCards.forEach(item => {
        const clone = item.cloneNode(true);
        specialitiesGrid.appendChild(clone);
    });

    // Calculate Column Width dynamically based on CSS logic
    function getColWidth() {
        const windowWidth = window.innerWidth;
        const style = window.getComputedStyle(specialitiesGrid);

        // Grid Container Content Width (clientWidth - padding)
        const paddingLeft = parseFloat(style.paddingLeft) || 0;
        const paddingRight = parseFloat(style.paddingRight) || 0;
        const availableWidth = specialitiesGrid.clientWidth - paddingLeft - paddingRight;

        // Match the CSS grid-auto-columns rules:
        // Mobile (<768px): calc(50% - 4px)
        // Tablet (<991px): calc(33.333% - 10px)
        // Desktop: calc(25% - 15px)

        if (windowWidth <= 768) {
            return (availableWidth * 0.5) - 4;
        } else if (windowWidth <= 991) {
            return (availableWidth * 0.33333) - 10;
        } else {
            return (availableWidth * 0.25) - 15;
        }
    }

    // Calculate gap between items
    function getGap() {
        const gridStyle = window.getComputedStyle(specialitiesGrid);
        return parseFloat(gridStyle.columnGap) || parseFloat(gridStyle.gap) || 20;
    }

    function updateSlider(smooth = true) {
        const colWidth = getColWidth();
        const gap = getGap();
        const translateX = -currentCol * (colWidth + gap);

        if (smooth) {
            specialitiesGrid.style.transition = 'transform 0.5s ease-in-out';
        } else {
            specialitiesGrid.style.transition = 'none';
        }

        specialitiesGrid.style.transform = `translateX(${translateX}px)`;

        // Improve button state handling
        setTimeout(() => {
            if (!isTransitioning) {
                prevBtn.disabled = false;
                nextBtn.disabled = false;
            }
        }, 50);
    }

    function handleNext() {
        if (isTransitioning) return;
        isTransitioning = true;
        nextBtn.disabled = true;
        prevBtn.disabled = true;

        currentCol++;
        updateSlider(true);

        // Infinite Loop Reset:
        // Reset when we've scrolled past the Original Set (totalCols)
        if (currentCol >= totalCols) {
            setTimeout(() => {
                currentCol = 0;
                updateSlider(false); // Jump back instantly
                setTimeout(() => {
                    isTransitioning = false;
                    nextBtn.disabled = false;
                    prevBtn.disabled = false;
                }, 50);
            }, 500);
        } else {
            setTimeout(() => {
                isTransitioning = false;
                nextBtn.disabled = false;
                prevBtn.disabled = false;
            }, 500);
        }
    }

    function handlePrev() {
        if (isTransitioning) return;
        isTransitioning = true;
        nextBtn.disabled = true;
        prevBtn.disabled = true;

        currentCol--;

        // If going below 0, jump to end of Clone 1
        if (currentCol < 0) {
            // Jump to the equivalent position in the buffer (Start of Clone 1)
            currentCol = totalCols;
            updateSlider(false); // Jump instantly

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    currentCol--;
                    updateSlider(true);
                    setTimeout(() => {
                        isTransitioning = false;
                        nextBtn.disabled = false;
                        prevBtn.disabled = false;
                    }, 500);
                });
            });
        } else {
            updateSlider(true);
            setTimeout(() => {
                isTransitioning = false;
                nextBtn.disabled = false;
                prevBtn.disabled = false;
            }, 500);
        }
    }

    // Next button click
    nextBtn.addEventListener('click', handleNext);

    // Previous button click
    prevBtn.addEventListener('click', handlePrev);

    // Touch Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    specialitiesGrid.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    specialitiesGrid.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const threshold = 50; // min distance for swipe
        if (touchEndX < touchStartX - threshold) {
            handleNext();
        }
        if (touchEndX > touchStartX + threshold) {
            handlePrev();
        }
    }

    // Initialize
    updateSlider(false);

    // Update on window resize (debounce included in listener above)
    window.addEventListener('resize', debounce(() => updateSlider(false), 250));
});

