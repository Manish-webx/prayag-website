<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services - Comprehensive Medical Care | Prayag Hospital</title>

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
                    <li class="breadcrumb-item active" aria-current="page">All Services</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Our Medical Services</h1>
                <p class="blog-hero-subtitle">Comprehensive healthcare services across multiple specialties</p>

                <!-- Search Bar -->
                <div class="doctor-search-bar">
                    <div class="search-input-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" id="serviceSearch" class="search-input"
                            placeholder="Search for a service or specialty...">
                    </div>
                    <button class="btn-search">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Listing Section -->
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

                        <!-- Category Filter -->
                        <div class="filter-group">
                            <h4 class="filter-title">Category</h4>
                            <div class="filter-options">
                                <label class="filter-option">
                                    <input type="radio" name="category" class="category-filter" value="all" checked>
                                    <span>All Services</span>
                                </label>
                                <label class="filter-option">
                                    <input type="radio" name="category" class="category-filter" value="excellence">
                                    <span>Centres of Excellence</span>
                                </label>
                                <label class="filter-option">
                                    <input type="radio" name="category" class="category-filter" value="clinical">
                                    <span>Clinical Departments</span>
                                </label>
                                <label class="filter-option">
                                    <input type="radio" name="category" class="category-filter" value="diagnostics">
                                    <span>Diagnostics & Support</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Grid -->
                <div class="col-lg-9 col-md-8">
                    <!-- Results Info -->
                    <div class="results-header">
                        <div class="results-count">
                            <h3>Showing <span id="serviceCount">0</span> Services</h3>
                        </div>
                        <div class="sort-options">
                            <label>Sort by:</label>
                            <select id="sortServices" class="sort-select">
                                <option value="name">Name (A-Z)</option>
                                <option value="category">Category</option>
                            </select>
                        </div>
                    </div>

                    <!-- Services Grid -->
                    <div class="services-grid" id="servicesGrid">
                        <!-- Centres of Excellence -->
                        <div class="service-card" data-category="excellence" data-name="Cardiac Sciences">
                            <a href="cardiac-care.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Cardiac Sciences</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Comprehensive cardiac care including interventional cardiology, cardiac surgery, and heart failure management</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="excellence" data-name="Neurosciences">
                            <a href="neuroscience.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Neurosciences</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Advanced neurology and neurosurgery services for brain and spine disorders</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="excellence" data-name="Orthopedics">
                            <a href="orthopedics.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-bone"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Orthopedics & Joint Replacement</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Expert care for bone, joint, and musculoskeletal conditions</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="excellence" data-name="Obstetrics & Gynecology">
                            <a href="obstetrics-gynecology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-baby"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Mother & Child Care</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Comprehensive obstetrics, gynecology, and neonatal care</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="excellence" data-name="Gastroenterology">
                            <a href="gastroenterology.php" class="service-card-link">
                                <div class="service-icon">
                                    <img src="../assets/images/liver.webp" alt="Gastroenterology" style="width: 37px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Gastroenterology & Hepatology</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Advanced digestive and liver disease management</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="excellence" data-name="Nephrology">
                            <a href="nephrology-dialysis.php" class="service-card-link">
                                <div class="service-icon">
                                    <img src="../assets/images/RENAL.webp" alt="Renal Sciences" style="width: 37px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Renal Sciences (Kidney Care)</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Comprehensive kidney care and dialysis services</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="excellence" data-name="Oncology">
                            <a href="oncology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-ribbon"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Oncology (Cancer Care)</h3>
                                    <p class="service-category">Centres of Excellence</p>
                                    <p class="service-description">Multidisciplinary cancer treatment and care</p>
                                </div>
                            </a>
                        </div>

                        <!-- Clinical Departments -->
                        <div class="service-card" data-category="clinical" data-name="Internal Medicine">
                            <a href="internal-medicine.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Internal & Family Medicine</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Primary care and management of complex medical conditions</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Critical Care">
                            <a href="critical-care.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-procedures"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Critical Care & ICU</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Advanced intensive care for critically ill patients</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Emergency Medicine">
                            <a href="emergency-medicine.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-ambulance"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Emergency Medicine</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">24/7 emergency care and trauma management</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="General Surgery">
                            <a href="general-surgery.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-scalpel"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">General & Laparoscopic Surgery</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Minimally invasive and traditional surgical procedures</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="ENT">
                            <a href="ent.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-ear-listen"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">ENT (Ear, Nose, Throat)</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Comprehensive ENT care and cochlear implants</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Dermatology">
                            <a href="dermatology.php" class="service-card-link">
                                <div class="service-icon">
                                    <img src="../assets/images/DERMA.webp" alt="Dermatology" style="width: 37px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Dermatology</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Skin, hair, and nail care services</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Plastic Surgery">
                            <a href="plastic-surgery.php" class="service-card-link">
                                <div class="service-icon">
                                    <img src="../assets/images/PLASTIC.webp" alt="Plastic Surgery" style="width: 37px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Plastic Surgery</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Reconstructive and cosmetic surgery</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Psychiatry">
                            <a href="psychiatry.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Psychiatry</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Mental health and behavioral disorder treatment</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Dental">
                            <a href="dental-science.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-tooth"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Dental Science</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Comprehensive dental and oral care</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Urology">
                            <a href="urology-urodynamics.php" class="service-card-link">
                                <div class="service-icon">
                                   <img src="../assets/images/UROLOGY.webp" alt="Urology" style="width: 37px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Urology</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Urinary tract and male reproductive system care</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Paediatric Surgery">
                            <a href="paediatric-surgery.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-child"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Paediatric Surgery</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Specialized surgical care for children</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Vascular Surgery">
                            <a href="vascular-surgery.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Vascular Surgery</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Treatment of blood vessel disorders</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Respiratory Medicine">
                            <a href="respiratory-medicine.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-lungs"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Respiratory Medicine</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Comprehensive lung and respiratory care</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Oral & Maxillofacial Surgery">
                            <a href="oral-maxillofacial-surgery.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-head-side-mask"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Oral & Maxillofacial Surgery</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Facial and jaw surgical procedures</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="clinical" data-name="Neonatology">
                            <a href="neonatology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-baby"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Neonatology</h3>
                                    <p class="service-category">Clinical Departments</p>
                                    <p class="service-description">Specialized care for newborns and premature babies</p>
                                </div>
                            </a>
                        </div>

                        <!-- Diagnostics & Support -->
                        <div class="service-card" data-category="diagnostics" data-name="Ophthalmology">
                            <a href="ophthalmology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Ophthalmology</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Comprehensive eye care and vision services</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Anesthesiology">
                            <a href="anesthesiology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-syringe"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Anesthesiology</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Pain management and anesthesia services</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Radiology">
                            <a href="radiology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-x-ray"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Radiology & Imaging</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Advanced diagnostic imaging services</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Pathology">
                            <a href="pathology.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-vial"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Laboratory Services</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Comprehensive pathology and lab testing</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Physiotherapy">
                            <a href="physiotherapy.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-walking"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Physiotherapy & Rehab</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Physical therapy and rehabilitation services</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Dietetics">
                            <a href="dietetics.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-apple-alt"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Dietetics & Nutrition</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Nutritional counseling and diet planning</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="EEG">
                            <a href="eeg.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">EEG (Brain Activity)</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Electroencephalography for brain activity monitoring</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="EMG/EP">
                            <a href="emg-ep.php" class="service-card-link">
                                <div class="service-icon">
                                    <img src="../assets/images/EMG_EP.webp" alt="EMG" style="width: 37px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">EMG/EP (Nerve & Muscle)</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Electromyography and evoked potential testing</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Pulmonary Function Test">
                            <a href="pulmonary-function-test.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-lungs"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Pulmonary Function Test</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Comprehensive lung function assessment</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Spirometry">
                            <a href="spirometry.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-wind"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Spirometry</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Breathing test for lung capacity measurement</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Treadmill Testing">
                            <a href="treadmill-testing.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Treadmill Testing (TMT)</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Cardiac stress testing and heart function evaluation</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Support Services">
                            <a href="support-services.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Support Services</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">24/7 pharmacy, dietary services, and patient support</p>
                                </div>
                            </a>
                        </div>

                        <div class="service-card" data-category="diagnostics" data-name="Health Checkups">
                            <a href="health-checkup.php" class="service-card-link">
                                <div class="service-icon">
                                    <i class="fas fa-notes-medical"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="service-name">Preventive Health Checkups</h3>
                                    <p class="service-category">Diagnostics & Support</p>
                                    <p class="service-description">Comprehensive health screening packages</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- No Results Message -->
                    <div class="no-results" id="noResults" style="display: none;">
                        <i class="fas fa-hospital"></i>
                        <h3>No Services Found</h3>
                        <p>Try adjusting your filters or search terms</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Services Filtering and Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const serviceCards = document.querySelectorAll('.service-card');
            const searchInput = document.getElementById('serviceSearch');
            const categoryFilters = document.querySelectorAll('.category-filter');
            const clearFiltersBtn = document.getElementById('clearFilters');
            const sortSelect = document.getElementById('sortServices');
            const serviceCount = document.getElementById('serviceCount');
            const noResults = document.getElementById('noResults');

            function filterServices() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedCategory = document.querySelector('.category-filter:checked').value;

                let visibleCount = 0;

                serviceCards.forEach(card => {
                    const category = card.dataset.category;
                    const name = card.dataset.name.toLowerCase();
                    const description = card.querySelector('.service-description').textContent.toLowerCase();

                    // Search filter
                    const matchesSearch = searchTerm === '' ||
                        name.includes(searchTerm) ||
                        description.includes(searchTerm);

                    // Category filter
                    const matchesCategory = selectedCategory === 'all' || selectedCategory === category;

                    // Show/hide card
                    if (matchesSearch && matchesCategory) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update count and show/hide no results message
                serviceCount.textContent = visibleCount;
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }

            // Event listeners
            searchInput.addEventListener('input', filterServices);
            categoryFilters.forEach(filter => filter.addEventListener('change', filterServices));

            // Clear filters
            clearFiltersBtn.addEventListener('click', function () {
                searchInput.value = '';
                document.querySelector('.category-filter[value="all"]').checked = true;
                filterServices();
            });

            // Sort functionality
            sortSelect.addEventListener('change', function () {
                const sortValue = this.value;
                const grid = document.getElementById('servicesGrid');
                const cardsArray = Array.from(serviceCards);

                cardsArray.sort((a, b) => {
                    if (sortValue === 'name') {
                        const nameA = a.dataset.name;
                        const nameB = b.dataset.name;
                        return nameA.localeCompare(nameB);
                    } else if (sortValue === 'category') {
                        const catA = a.dataset.category;
                        const catB = b.dataset.category;
                        return catA.localeCompare(catB);
                    }
                });

                cardsArray.forEach(card => grid.appendChild(card));
            });

            // Initial count
            filterServices();
        });
    </script>

    <?php include 'footer-links.php'; ?>

</body>

</html>
