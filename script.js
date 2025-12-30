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
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.specialities-carousel');
    if (!carousel) return;

    const grid = carousel.querySelector('.specialities-grid');
    const cards = grid.querySelectorAll('.speciality-card');
    const prevBtn = document.querySelector('.nav-prev');
    const nextBtn = document.querySelector('.nav-next');

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
        const allCards = grid.querySelectorAll('.speciality-card');
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
        return parseFloat(gridStyle.columnGap) || 20;
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

    // Next button click
    nextBtn.addEventListener('click', function () {
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
    });

    // Previous button click
    prevBtn.addEventListener('click', function () {
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
    });

    // Initialize
    updateCarousel(false);

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

    // Next button click
    nextBtn.addEventListener('click', function () {
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
    });

    // Previous button click
    prevBtn.addEventListener('click', function () {
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
    });

    // Initialize
    updateCarousel(false);

    // Update on window resize
    window.addEventListener('resize', debounce(() => updateCarousel(false), 250));
});

// ================================================
// NEWS SLIDER FUNCTIONALITY - SHOW 3 ITEMS, SLIDE 1 AT A TIME
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const newsSliderContainer = document.querySelector('.news-slider-container');
    if (!newsSliderContainer) return;

    const newsSlider = document.querySelector('.news-slider');
    const newsItems = newsSlider.querySelectorAll('.news-item');
    const prevBtn = document.querySelector('.news-nav-prev');
    const nextBtn = document.querySelector('.news-nav-next');

    const visibleItems = 3; // Show 3 items at a time
    const totalItems = newsItems.length;
    const maxIndex = totalItems - visibleItems;
    let currentIndex = 0;
    let isTransitioning = false;

    // Calculate item width dynamically
    function getItemWidth() {
        if (newsItems[0]) {
            const itemStyle = window.getComputedStyle(newsItems[0]);
            const itemWidth = newsItems[0].offsetWidth;
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

    function updateSlider() {
        const itemWidth = getItemWidth();
        const gap = getGap();
        const translateX = -currentIndex * (itemWidth + gap);

        newsSlider.style.transform = `translateX(${translateX}px)`;

        // Update button states
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;

        prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
        nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';

        prevBtn.style.cursor = currentIndex === 0 ? 'not-allowed' : 'pointer';
        nextBtn.style.cursor = currentIndex >= maxIndex ? 'not-allowed' : 'pointer';
    }

    // Next button click - slide 1 item at a time
    nextBtn.addEventListener('click', function () {
        if (isTransitioning || currentIndex >= maxIndex) return;
        isTransitioning = true;

        currentIndex++;
        updateSlider();

        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    });

    // Previous button click - slide 1 item at a time
    prevBtn.addEventListener('click', function () {
        if (isTransitioning || currentIndex === 0) return;
        isTransitioning = true;

        currentIndex--;
        updateSlider();

        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    });

    // Initialize
    updateSlider();

    // Update on window resize
    window.addEventListener('resize', debounce(() => {
        currentIndex = Math.min(currentIndex, maxIndex);
        updateSlider();
    }, 250));
});

// ================================================
// PATIENT TESTIMONIALS SLIDER
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const testimonialSlider = document.querySelector('.testimonials-slider');
    const prevBtn = document.querySelector('.testimonial-nav-prev');
    const nextBtn = document.querySelector('.testimonial-nav-next');
    const testimonialCards = document.querySelectorAll('.testimonial-card');

    if (testimonialSlider && prevBtn && nextBtn && testimonialCards.length > 0) {
        let currentIndex = 0;
        const totalItems = testimonialCards.length;
        const visibleItems = getVisibleItems();
        const maxIndex = Math.max(0, totalItems - visibleItems);

        function getVisibleItems() {
            if (window.innerWidth >= 992) return 3;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }

        function updateSlider() {
            const itemWidth = testimonialCards[0].offsetWidth;
            const gap = 25;
            const offset = currentIndex * (itemWidth + gap);
            testimonialSlider.style.transform = `translateX(-${offset}px)`;
            updateButtons();
        }

        function updateButtons() {
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const newVisibleItems = getVisibleItems();
                const newMaxIndex = Math.max(0, totalItems - newVisibleItems);
                if (currentIndex > newMaxIndex) {
                    currentIndex = newMaxIndex;
                }
                updateSlider();
            }, 250);
        });

        // Initial update
        updateButtons();
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
// DOCTORS SLIDER FUNCTIONALITY - SHOW 3 ITEMS, SLIDE 1 AT A TIME
// ================================================
document.addEventListener('DOMContentLoaded', function () {
    const doctorsSliderWrapper = document.querySelector('.doctors-slider-wrapper');
    if (!doctorsSliderWrapper) return;

    const doctorsGrid = document.querySelector('.doctors-grid');
    const doctorCards = doctorsGrid.querySelectorAll('.doctor-card');
    const prevBtn = document.querySelector('.doctor-nav-prev');
    const nextBtn = document.querySelector('.doctor-nav-next');

    const visibleItems = 3; // Show 3 items at a time
    const totalItems = doctorCards.length;
    const maxIndex = totalItems - visibleItems;
    let currentIndex = 0;
    let isTransitioning = false;

    // Calculate card width dynamically
    function getCardWidth() {
        if (doctorCards[0]) {
            const cardWidth = doctorCards[0].offsetWidth;
            return cardWidth;
        }
        return 0;
    }

    // Calculate gap between cards
    function getGap() {
        const gridStyle = window.getComputedStyle(doctorsGrid);
        return parseFloat(gridStyle.gap) || 30;
    }

    function updateSlider() {
        const cardWidth = getCardWidth();
        const gap = getGap();
        const translateX = -currentIndex * (cardWidth + gap);

        doctorsGrid.style.transform = `translateX(${translateX}px)`;

        // Update button states
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;
    }

    // Next button click - slide 1 card at a time
    nextBtn.addEventListener('click', function () {
        if (isTransitioning || currentIndex >= maxIndex) return;
        isTransitioning = true;

        currentIndex++;
        updateSlider();

        setTimeout(() => {
            isTransitioning = false;
        }, 400);
    });

    // Previous button click - slide 1 card at a time
    prevBtn.addEventListener('click', function () {
        if (isTransitioning || currentIndex === 0) return;
        isTransitioning = true;

        currentIndex--;
        updateSlider();

        setTimeout(() => {
            isTransitioning = false;
        }, 400);
    });

    // Initialize
    updateSlider();

    // Update on window resize
    window.addEventListener('resize', debounce(() => {
        currentIndex = Math.min(currentIndex, maxIndex);
        updateSlider();
    }, 250));
});

