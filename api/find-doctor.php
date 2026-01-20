<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Doctor - Expert Medical Professionals | Prayag Hospital</title>

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
                    <li class="breadcrumb-item active" aria-current="page">Find a Doctor</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Find a Doctor</h1>
                <p class="blog-hero-subtitle">Connect with our team of highly qualified and experienced medical
                    professionals</p>

                <!-- Search Bar -->
                <div class="doctor-search-bar">
                    <div class="search-input-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" id="doctorSearch" class="search-input"
                            placeholder="Search by doctor name, specialty, or department...">
                    </div>
                    <button class="btn-search">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter and Results Section -->
    <section class="doctors-listing-section">
        <div class="container">
            <div class="row">
                <!-- Filters Sidebar -->
                <div class="col-lg-3 col-md-4">
                    <div class="filters-sidebar">
                        <div class="filter-header">
                            <h3><i class="fas fa-filter"></i> Filters</h3>
                            <button class="btn-clear-filters" id="clearFilters">Clear All</button>
                        </div>

                        <!-- Specialty Filter -->
                        <div class="filter-group">
                            <h4 class="filter-title">Specialty</h4>
                            <div class="filter-options">
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="cardiology">
                                    <span>Cardiac Sciences</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="neurosciences">
                                    <span>Neurosciences</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="orthopedics">
                                    <span>Orthopedics</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="gynecology">
                                    <span>Obstetrics & Gynecology</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="surgery">
                                    <span>General & Laparoscopic Surgery</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="internal-medicine">
                                    <span>Internal Medicine & Critical Care</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="gastroenterology">
                                    <span>Gastroenterology</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="nephrology">
                                    <span>Renal Sciences (Nephrology)</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="ent">
                                    <span>ENT</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="dental">
                                    <span>Dental</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="plastic-surgery">
                                    <span>Plastic Surgery</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="dermatology">
                                    <span>Dermatology</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="psychiatry">
                                    <span>Psychiatry</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="specialty-filter" value="diagnostics">
                                    <span>Diagnostic Services</span>
                                </label>
                            </div>
                        </div>

                        <!-- Experience Filter -->
                        <div class="filter-group">
                            <h4 class="filter-title">Experience</h4>
                            <div class="filter-options">
                                <label class="filter-option">
                                    <input type="checkbox" class="experience-filter" value="0-5">
                                    <span>0-5 Years</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="experience-filter" value="5-10">
                                    <span>5-10 Years</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="experience-filter" value="10-20">
                                    <span>10-20 Years</span>
                                </label>
                                <label class="filter-option">
                                    <input type="checkbox" class="experience-filter" value="20+">
                                    <span>20+ Years</span>
                                </label>
                            </div>
                        </div>

                        <!-- Gender Filter -->
                        <div class="filter-group">
                            <h4 class="filter-title">Gender</h4>
                            <div class="filter-options">
                                <label class="filter-option">
                                    <input type="radio" name="gender" class="gender-filter" value="all" checked>
                                    <span>All</span>
                                </label>
                                <label class="filter-option">
                                    <input type="radio" name="gender" class="gender-filter" value="male">
                                    <span>Male</span>
                                </label>
                                <label class="filter-option">
                                    <input type="radio" name="gender" class="gender-filter" value="female">
                                    <span>Female</span>
                                </label>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Doctors Grid -->
                <div class="col-lg-9 col-md-8">
                    <!-- Results Info -->
                    <div class="results-header">
                        <div class="results-count">
                            <h3>Showing <span id="doctorCount">12</span> Doctors</h3>
                        </div>
                        <div class="sort-options">
                            <label>Sort by:</label>
                            <select id="sortDoctors" class="sort-select">
                                <option value="name">Name (A-Z)</option>
                                <option value="experience">Experience (High to Low)</option>
                                <option value="rating">Rating (High to Low)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Doctors Grid -->
                    <div class="doctors-grid" id="doctorsGrid">
                        <?php include 'doctors-data.php'; ?>
                        <?php foreach ($doctors as $doctor): ?>
                        <div class="find-doctor-card" 
                             data-specialty="<?php echo $doctor['specialty_code']; ?>" 
                             data-experience="<?php echo $doctor['experience']; ?>" 
                             data-gender="<?php echo $doctor['gender']; ?>">
                            <div class="doctor-card-image">
                                <img src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">

                            </div>
                            <div class="doctor-card-content">
                                <h3 class="doctor-card-name"><?php echo $doctor['name']; ?></h3>
                                <p class="doctor-card-specialty"><?php echo $doctor['specialty']; ?></p>
                                <p class="doctor-card-expertise"><?php echo $doctor['department']; ?></p>
                                <div class="doctor-card-actions">
                                    <a href="<?php echo isset($doctor['slug']) ? $doctor['slug'] : $doctor['id']; ?>.php" class="btn-view-profile">View Profile</a>
                                    <a href="#" class="btn-book-now">Book Apt.</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- No Results Message -->
                    <div class="no-results" id="noResults" style="display: none;">
                        <i class="fas fa-user-md"></i>
                        <h3>No Doctors Found</h3>
                        <p>Try adjusting your filters or search terms</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Find Doctor Filtering and Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const doctorCards = document.querySelectorAll('.find-doctor-card');
            const searchInput = document.getElementById('doctorSearch');
            const specialtyFilters = document.querySelectorAll('.specialty-filter');
            const experienceFilters = document.querySelectorAll('.experience-filter');
            const genderFilters = document.querySelectorAll('.gender-filter');

            const clearFiltersBtn = document.getElementById('clearFilters');
            const sortSelect = document.getElementById('sortDoctors');
            const doctorCount = document.getElementById('doctorCount');
            const noResults = document.getElementById('noResults');

            function filterDoctors() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedSpecialties = Array.from(specialtyFilters)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);
                const selectedExperience = Array.from(experienceFilters)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);
                const selectedGender = document.querySelector('.gender-filter:checked').value;


                let visibleCount = 0;

                doctorCards.forEach(card => {
                    const specialty = card.dataset.specialty;
                    const experience = parseInt(card.dataset.experience);
                    const gender = card.dataset.gender;

                    const name = card.querySelector('.doctor-card-name').textContent.toLowerCase();
                    const cardSpecialty = card.querySelector('.doctor-card-specialty').textContent.toLowerCase();
                    const expertise = card.querySelector('.doctor-card-expertise').textContent.toLowerCase();

                    // Search filter
                    const matchesSearch = searchTerm === '' ||
                        name.includes(searchTerm) ||
                        cardSpecialty.includes(searchTerm) ||
                        expertise.includes(searchTerm);

                    // Specialty filter
                    const matchesSpecialty = selectedSpecialties.length === 0 ||
                        selectedSpecialties.includes(specialty);

                    // Experience filter
                    let matchesExperience = selectedExperience.length === 0;
                    if (!matchesExperience) {
                        selectedExperience.forEach(range => {
                            if (range === '0-5' && experience <= 5) matchesExperience = true;
                            if (range === '5-10' && experience > 5 && experience <= 10) matchesExperience = true;
                            if (range === '10-20' && experience > 10 && experience <= 20) matchesExperience = true;
                            if (range === '20+' && experience > 20) matchesExperience = true;
                        });
                    }

                    // Gender filter
                    const matchesGender = selectedGender === 'all' || selectedGender === gender;



                    // Show/hide card
                    if (matchesSearch && matchesSpecialty && matchesExperience && matchesGender) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update count and show/hide no results message
                doctorCount.textContent = visibleCount;
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }

            // Event listeners
            searchInput.addEventListener('input', filterDoctors);
            specialtyFilters.forEach(filter => filter.addEventListener('change', filterDoctors));
            experienceFilters.forEach(filter => filter.addEventListener('change', filterDoctors));
            genderFilters.forEach(filter => filter.addEventListener('change', filterDoctors));


            // Clear filters
            clearFiltersBtn.addEventListener('click', function () {
                searchInput.value = '';
                specialtyFilters.forEach(cb => cb.checked = false);
                experienceFilters.forEach(cb => cb.checked = false);

                document.querySelector('.gender-filter[value="all"]').checked = true;
                filterDoctors();
            });

            // Sort functionality
            sortSelect.addEventListener('change', function () {
                const sortValue = this.value;
                const grid = document.getElementById('doctorsGrid');
                const cardsArray = Array.from(doctorCards);

                cardsArray.sort((a, b) => {
                    if (sortValue === 'name') {
                        const nameA = a.querySelector('.doctor-card-name').textContent;
                        const nameB = b.querySelector('.doctor-card-name').textContent;
                        return nameA.localeCompare(nameB);
                    } else if (sortValue === 'experience') {
                        return parseInt(b.dataset.experience) - parseInt(a.dataset.experience);
                    } else if (sortValue === 'rating') {
                        const ratingA = parseFloat(a.querySelector('.info-item:last-child').textContent);
                        const ratingB = parseFloat(b.querySelector('.info-item:last-child').textContent);
                        return ratingB - ratingA;
                    }
                });

                cardsArray.forEach(card => grid.appendChild(card));
            });

            // Initial count
            filterDoctors();
        });
    </script>

    <?php include 'footer-links.php'; ?>

</body>

</html>