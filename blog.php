<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog - Latest Medical News & Insights | Prayag Hospital</title>

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
                    <li class="breadcrumb-item active" aria-current="page">Health Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Health Blog</h1>
                <p class="blog-hero-subtitle">Expert insights, medical news, and wellness tips from our healthcare
                    professionals</p>

                <!-- Blog Search Bar -->
                <div class="blog-search-wrapper">
                    <div class="blog-search-input-group">
                        <i class="fas fa-search"></i>
                        <input type="text" id="blogSearch" class="blog-search-input"
                            placeholder="Search articles by title, topic, or keyword...">
                    </div>
                    <button class="btn-blog-search">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="blog-content-section">
        <div class="container">
            <div class="row">
                <!-- Main Content Area -->
                <div class="col-lg-8">
                    <!-- Category Pills -->
                    <div class="category-pills-wrapper">
                        <button class="category-pill active" data-category="all">All Posts</button>
                        <button class="category-pill" data-category="cardiology">Cardiology</button>
                        <button class="category-pill" data-category="nutrition">Nutrition</button>
                        <button class="category-pill" data-category="wellness">Wellness</button>
                        <button class="category-pill" data-category="pediatrics">Pediatrics</button>
                        <button class="category-pill" data-category="lifestyle">Lifestyle</button>
                        <button class="category-pill" data-category="preventive">Preventive Care</button>
                    </div>

                    <!-- Results Info -->
                    <div class="blog-results-header">
                        <h3>Showing <span id="blogCount">12</span> Articles</h3>
                        <div class="blog-sort-wrapper">
                            <label>Sort by:</label>
                            <select id="blogSort" class="blog-sort-select">
                                <option value="newest">Newest First</option>
                                <option value="oldest">Oldest First</option>
                                <option value="popular">Most Popular</option>
                            </select>
                        </div>
                    </div>

                    <!-- Blog Posts Grid -->
                    <div class="blog-posts-grid" id="blogPostsGrid">
                        <!-- Blog Post 1 -->
                        <article class="blog-post-card" data-category="cardiology" data-date="2024-01-15"
                            data-popularity="850">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/4A8F73/ffffff?text=Heart+Health"
                                    alt="Heart Health Tips">
                                <div class="blog-category-badge">Cardiology</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Jan 15, 2024</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 5 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 850 views</span>
                                </div>
                                <h3 class="blog-post-title">10 Essential Tips for Maintaining a Healthy Heart</h3>
                                <p class="blog-post-excerpt">Discover simple yet effective ways to keep your heart
                                    healthy and reduce the risk of cardiovascular diseases. Learn about diet, exercise,
                                    and lifestyle changes.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/E8964F/ffffff?text=RK"
                                            alt="Dr. Rajesh Kumar" class="author-avatar">
                                        <span>Dr. Rajesh Kumar</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 2 -->
                        <article class="blog-post-card" data-category="nutrition" data-date="2024-01-12"
                            data-popularity="720">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/E8964F/ffffff?text=Nutrition+Guide"
                                    alt="Nutrition Guide">
                                <div class="blog-category-badge">Nutrition</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Jan 12, 2024</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 7 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 720 views</span>
                                </div>
                                <h3 class="blog-post-title">Complete Guide to Balanced Nutrition for All Ages</h3>
                                <p class="blog-post-excerpt">Understanding nutritional needs across different life
                                    stages. Expert advice on creating balanced meal plans for optimal health and
                                    wellness.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/4A8F73/ffffff?text=AM"
                                            alt="Dr. Anjali Mehta" class="author-avatar">
                                        <span>Dr. Anjali Mehta</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 3 -->
                        <article class="blog-post-card" data-category="wellness" data-date="2024-01-10"
                            data-popularity="950">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/4A8F73/ffffff?text=Mental+Wellness"
                                    alt="Mental Wellness">
                                <div class="blog-category-badge">Wellness</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Jan 10, 2024</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 6 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 950 views</span>
                                </div>
                                <h3 class="blog-post-title">Mental Wellness: Strategies for Stress Management</h3>
                                <p class="blog-post-excerpt">Learn evidence-based techniques to manage stress and
                                    improve mental health. Practical tips for maintaining emotional well-being in daily
                                    life.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/E8964F/ffffff?text=PS"
                                            alt="Dr. Priya Sharma" class="author-avatar">
                                        <span>Dr. Priya Sharma</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 4 -->
                        <article class="blog-post-card" data-category="pediatrics" data-date="2024-01-08"
                            data-popularity="680">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/E8964F/ffffff?text=Child+Health"
                                    alt="Child Health">
                                <div class="blog-category-badge">Pediatrics</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Jan 08, 2024</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 5 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 680 views</span>
                                </div>
                                <h3 class="blog-post-title">Essential Vaccinations for Children: A Parent's Guide</h3>
                                <p class="blog-post-excerpt">Complete information about childhood vaccinations, their
                                    importance, and recommended schedules. Keep your child protected and healthy.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/4A8F73/ffffff?text=SR"
                                            alt="Dr. Sneha Reddy" class="author-avatar">
                                        <span>Dr. Sneha Reddy</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 5 -->
                        <article class="blog-post-card" data-category="lifestyle" data-date="2024-01-05"
                            data-popularity="820">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/4A8F73/ffffff?text=Exercise+Tips"
                                    alt="Exercise Tips">
                                <div class="blog-category-badge">Lifestyle</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Jan 05, 2024</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 8 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 820 views</span>
                                </div>
                                <h3 class="blog-post-title">Developing a Sustainable Exercise Routine for Beginners</h3>
                                <p class="blog-post-excerpt">Start your fitness journey with expert-approved exercises
                                    and tips. Build a workout routine that fits your lifestyle and helps achieve your
                                    goals.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/E8964F/ffffff?text=AP"
                                            alt="Dr. Amit Patel" class="author-avatar">
                                        <span>Dr. Amit Patel</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 6 -->
                        <article class="blog-post-card" data-category="preventive" data-date="2024-01-03"
                            data-popularity="890">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/E8964F/ffffff?text=Preventive+Care"
                                    alt="Preventive Care">
                                <div class="blog-category-badge">Preventive Care</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Jan 03, 2024</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 6 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 890 views</span>
                                </div>
                                <h3 class="blog-post-title">The Importance of Regular Health Checkups</h3>
                                <p class="blog-post-excerpt">Why preventive healthcare matters and what tests you should
                                    get at different ages. Early detection saves lives - learn about essential
                                    screenings.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/4A8F73/ffffff?text=RG"
                                            alt="Dr. Rahul Gupta" class="author-avatar">
                                        <span>Dr. Rahul Gupta</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 7 -->
                        <article class="blog-post-card" data-category="cardiology" data-date="2023-12-28"
                            data-popularity="760">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/4A8F73/ffffff?text=Blood+Pressure"
                                    alt="Blood Pressure">
                                <div class="blog-category-badge">Cardiology</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Dec 28, 2023</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 5 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 760 views</span>
                                </div>
                                <h3 class="blog-post-title">Understanding and Managing High Blood Pressure</h3>
                                <p class="blog-post-excerpt">Comprehensive guide to hypertension: causes, symptoms, and
                                    effective management strategies. Take control of your blood pressure naturally.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/E8964F/ffffff?text=SJ"
                                            alt="Dr. Sanjay Joshi" class="author-avatar">
                                        <span>Dr. Sanjay Joshi</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 8 -->
                        <article class="blog-post-card" data-category="nutrition" data-date="2023-12-25"
                            data-popularity="710">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/E8964F/ffffff?text=Diabetes+Diet"
                                    alt="Diabetes Diet">
                                <div class="blog-category-badge">Nutrition</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Dec 25, 2023</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 7 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 710 views</span>
                                </div>
                                <h3 class="blog-post-title">Diabetes-Friendly Diet: What to Eat and Avoid</h3>
                                <p class="blog-post-excerpt">Expert nutritional advice for managing diabetes through
                                    diet. Discover foods that help control blood sugar levels and improve overall
                                    health.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/4A8F73/ffffff?text=DV"
                                            alt="Dr. Divya Verma" class="author-avatar">
                                        <span>Dr. Divya Verma</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 9 -->
                        <article class="blog-post-card" data-category="wellness" data-date="2023-12-22"
                            data-popularity="840">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/4A8F73/ffffff?text=Sleep+Health"
                                    alt="Sleep Health">
                                <div class="blog-category-badge">Wellness</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Dec 22, 2023</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 6 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 840 views</span>
                                </div>
                                <h3 class="blog-post-title">The Science of Sleep: Tips for Better Rest</h3>
                                <p class="blog-post-excerpt">Understanding sleep cycles and improving sleep quality for
                                    better health. Evidence-based strategies to overcome insomnia and sleep disorders.
                                </p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/E8964F/ffffff?text=KR"
                                            alt="Dr. Kavita Rao" class="author-avatar">
                                        <span>Dr. Kavita Rao</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 10 -->
                        <article class="blog-post-card" data-category="pediatrics" data-date="2023-12-20"
                            data-popularity="650">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/E8964F/ffffff?text=Child+Development"
                                    alt="Child Development">
                                <div class="blog-category-badge">Pediatrics</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Dec 20, 2023</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 8 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 650 views</span>
                                </div>
                                <h3 class="blog-post-title">Milestones in Child Development: A Complete Guide</h3>
                                <p class="blog-post-excerpt">Track your child's growth and development with this
                                    comprehensive guide to age-appropriate milestones and what to watch for.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/4A8F73/ffffff?text=MD"
                                            alt="Dr. Meera Das" class="author-avatar">
                                        <span>Dr. Meera Das</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 11 -->
                        <article class="blog-post-card" data-category="lifestyle" data-date="2023-12-18"
                            data-popularity="780">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/4A8F73/ffffff?text=Yoga+Benefits"
                                    alt="Yoga Benefits">
                                <div class="blog-category-badge">Lifestyle</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Dec 18, 2023</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 5 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 780 views</span>
                                </div>
                                <h3 class="blog-post-title">Yoga for Health: Benefits Beyond Physical Fitness</h3>
                                <p class="blog-post-excerpt">Explore how yoga improves both physical and mental health.
                                    Learn about different styles and how to start your practice safely.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/E8964F/ffffff?text=VS"
                                            alt="Dr. Vikram Singh" class="author-avatar">
                                        <span>Dr. Vikram Singh</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 12 -->
                        <article class="blog-post-card" data-category="preventive" data-date="2023-12-15"
                            data-popularity="920">
                            <div class="blog-post-image">
                                <img src="https://via.placeholder.com/600x400/E8964F/ffffff?text=Cancer+Prevention"
                                    alt="Cancer Prevention">
                                <div class="blog-category-badge">Preventive Care</div>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Dec 15, 2023</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 9 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 920 views</span>
                                </div>
                                <h3 class="blog-post-title">Cancer Prevention: Lifestyle Changes That Matter</h3>
                                <p class="blog-post-excerpt">Evidence-based lifestyle modifications that can
                                    significantly reduce cancer risk. Learn about diet, exercise, and screening
                                    guidelines.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="https://via.placeholder.com/40x40/4A8F73/ffffff?text=AN"
                                            alt="Dr. Arun Nair" class="author-avatar">
                                        <span>Dr. Arun Nair</span>
                                    </div>
                                    <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- No Results Message -->
                    <div class="blog-no-results" id="blogNoResults" style="display: none;">
                        <i class="fas fa-search"></i>
                        <h3>No Articles Found</h3>
                        <p>Try different keywords or browse all categories</p>
                    </div>

                    <!-- Pagination -->
                    <div class="blog-pagination" id="blogPagination">
                        <button class="pagination-btn" disabled><i class="fas fa-chevron-left"></i> Previous</button>
                        <div class="pagination-numbers">
                            <button class="pagination-number active">1</button>
                            <button class="pagination-number">2</button>
                            <button class="pagination-number">3</button>
                            <span>...</span>
                            <button class="pagination-number">10</button>
                        </div>
                        <button class="pagination-btn">Next <i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Popular Posts -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Popular Posts</h3>
                            <div class="popular-posts-list">
                                <div class="popular-post-item">
                                    <img src="https://via.placeholder.com/80x80/4A8F73/ffffff?text=1" alt="Post">
                                    <div class="popular-post-content">
                                        <h4>Mental Wellness: Strategies for Stress</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Jan 10,
                                            2024</span>
                                    </div>
                                </div>
                                <div class="popular-post-item">
                                    <img src="https://via.placeholder.com/80x80/E8964F/ffffff?text=2" alt="Post">
                                    <div class="popular-post-content">
                                        <h4>Cancer Prevention Lifestyle Changes</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Dec 15,
                                            2023</span>
                                    </div>
                                </div>
                                <div class="popular-post-item">
                                    <img src="https://via.placeholder.com/80x80/4A8F73/ffffff?text=3" alt="Post">
                                    <div class="popular-post-content">
                                        <h4>The Importance of Health Checkups</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Jan 03,
                                            2024</span>
                                    </div>
                                </div>
                                <div class="popular-post-item">
                                    <img src="https://via.placeholder.com/80x80/E8964F/ffffff?text=4" alt="Post">
                                    <div class="popular-post-content">
                                        <h4>10 Tips for a Healthy Heart</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Jan 15,
                                            2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="categories-list">
                                <li><a href="#"><i class="fas fa-heartbeat"></i> Cardiology <span>(45)</span></a></li>
                                <li><a href="#"><i class="fas fa-utensils"></i> Nutrition <span>(38)</span></a></li>
                                <li><a href="#"><i class="fas fa-spa"></i> Wellness <span>(52)</span></a></li>
                                <li><a href="#"><i class="fas fa-baby"></i> Pediatrics <span>(29)</span></a></li>
                                <li><a href="#"><i class="fas fa-running"></i> Lifestyle <span>(41)</span></a></li>
                                <li><a href="#"><i class="fas fa-shield-alt"></i> Preventive Care <span>(36)</span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter Subscribe -->
                        <div class="sidebar-widget newsletter-widget">
                            <h3 class="widget-title">Subscribe to Newsletter</h3>
                            <p>Get the latest health tips and medical news delivered to your inbox.</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Your email address" required>
                                <button type="submit" class="btn-subscribe"><i class="fas fa-paper-plane"></i>
                                    Subscribe</button>
                            </form>
                        </div>

                        <!-- Tags Cloud -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tags-cloud">
                                <a href="#" class="tag-item">Heart Health</a>
                                <a href="#" class="tag-item">Nutrition</a>
                                <a href="#" class="tag-item">Exercise</a>
                                <a href="#" class="tag-item">Mental Health</a>
                                <a href="#" class="tag-item">Diabetes</a>
                                <a href="#" class="tag-item">Prevention</a>
                                <a href="#" class="tag-item">Pediatrics</a>
                                <a href="#" class="tag-item">Wellness</a>
                                <a href="#" class="tag-item">Lifestyle</a>
                                <a href="#" class="tag-item">Sleep</a>
                                <a href="#" class="tag-item">Cancer</a>
                                <a href="#" class="tag-item">Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Blog Filtering and Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const blogPosts = document.querySelectorAll('.blog-post-card');
            const searchInput = document.getElementById('blogSearch');
            const categoryPills = document.querySelectorAll('.category-pill');
            const sortSelect = document.getElementById('blogSort');
            const blogCount = document.getElementById('blogCount');
            const noResults = document.getElementById('blogNoResults');
            let activeCategory = 'all';

            function filterBlogPosts() {
                const searchTerm = searchInput.value.toLowerCase();
                let visibleCount = 0;

                blogPosts.forEach(post => {
                    const category = post.dataset.category;
                    const title = post.querySelector('.blog-post-title').textContent.toLowerCase();
                    const excerpt = post.querySelector('.blog-post-excerpt').textContent.toLowerCase();

                    const matchesSearch = searchTerm === '' || title.includes(searchTerm) || excerpt.includes(searchTerm);
                    const matchesCategory = activeCategory === 'all' || activeCategory === category;

                    if (matchesSearch && matchesCategory) {
                        post.style.display = 'block';
                        visibleCount++;
                    } else {
                        post.style.display = 'none';
                    }
                });

                blogCount.textContent = visibleCount;
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
                document.getElementById('blogPagination').style.display = visibleCount === 0 ? 'none' : 'flex';
            }

            // Search functionality
            searchInput.addEventListener('input', filterBlogPosts);

            // Category filtering
            categoryPills.forEach(pill => {
                pill.addEventListener('click', function () {
                    categoryPills.forEach(p => p.classList.remove('active'));
                    this.classList.add('active');
                    activeCategory = this.dataset.category;
                    filterBlogPosts();
                });
            });

            // Sorting functionality
            sortSelect.addEventListener('change', function () {
                const sortValue = this.value;
                const grid = document.getElementById('blogPostsGrid');
                const postsArray = Array.from(blogPosts);

                postsArray.sort((a, b) => {
                    if (sortValue === 'newest') {
                        return new Date(b.dataset.date) - new Date(a.dataset.date);
                    } else if (sortValue === 'oldest') {
                        return new Date(a.dataset.date) - new Date(b.dataset.date);
                    } else if (sortValue === 'popular') {
                        return parseInt(b.dataset.popularity) - parseInt(a.dataset.popularity);
                    }
                });

                postsArray.forEach(post => grid.appendChild(post));
            });

            // Newsletter form
            document.querySelector('.newsletter-form').addEventListener('submit', function (e) {
                e.preventDefault();
                alert('Thank you for subscribing to our newsletter!');
                this.reset();
            });

            // Initial count
            filterBlogPosts();
        });
    </script>

     <?php include 'footer-links.php'; ?>

</body>

</html>