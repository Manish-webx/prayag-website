<?php
// Mock Events Data
$events = [
    [
        'title' => 'World Heart Day Awareness Run',
        'date' => '2025-09-29',
        'time' => '6:00 AM - 9:00 AM',
        'location' => 'City Stadium, Noida',
        'description' => 'Join us for a 5K run to raise awareness about cardiovascular health. Free heart screenings for all participants.',
        'image' => 'https://via.placeholder.com/600x400/E8964F/ffffff?text=Heart+Day+Run',
        'status' => 'Upcoming'
    ],
    [
        'title' => 'Free Diabetes Checkup Camp',
        'date' => '2025-08-14',
        'time' => '10:00 AM - 4:00 PM',
        'location' => 'Prayag Hospital Campus',
        'description' => 'Comprehensive diabetes screening and consultation with our expert endocrinologists. Open to all.',
        'image' => 'https://via.placeholder.com/600x400/4A8F73/ffffff?text=Diabetes+Camp',
        'status' => 'Upcoming'
    ],
    [
        'title' => 'CME on Advanced Laparoscopic Surgery',
        'date' => '2025-07-20',
        'time' => '9:00 AM - 5:00 PM',
        'location' => 'Hotel Radisson Blu, Noida',
        'description' => 'Continuing Medical Education program for surgeons focusing on the latest techniques in minimal access surgery.',
        'image' => 'https://via.placeholder.com/600x400/4A8F73/ffffff?text=CME+Surgery',
        'status' => 'Upcoming'
    ],
    [
        'title' => 'Antenatal Workshop for Expecting Mothers',
        'date' => '2025-06-15',
        'time' => '11:00 AM - 1:00 PM',
        'location' => 'Prayag Hospital Auditorium',
        'description' => 'Expert advice on diet, exercise, and baby care for expecting mothers. Registration required.',
        'image' => 'https://via.placeholder.com/600x400/E8964F/ffffff?text=Antenatal+Workshop',
        'status' => 'Upcoming'
    ],
    [
        'title' => 'Blood Donation Drive',
        'date' => '2025-05-10',
        'time' => '9:00 AM - 3:00 PM',
        'location' => 'Prayag Hospital Blood Bank',
        'description' => 'Be a hero, save a life. Join our voluntary blood donation camp.',
        'image' => 'https://via.placeholder.com/600x400/4A8F73/ffffff?text=Blood+Donation',
        'status' => 'Completed'
    ],
    [
        'title' => 'Seminar on Mental Health in Workplace',
        'date' => '2025-04-28',
        'time' => '3:00 PM - 5:00 PM',
        'location' => 'Virtual (Zoom)',
        'description' => 'Interactive session on managing stress and maintaining work-life balance.',
        'image' => 'https://via.placeholder.com/600x400/E8964F/ffffff?text=Mental+Health',
        'status' => 'Completed'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events & Workshops - Prayag Hospital</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Events & Workshops</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Events & Workshops</h1>
                <p class="blog-hero-subtitle">Participate in our health camps, medical workshops, and community awareness programs.</p>
            </div>
        </div>
    </section>

    <!-- Events Grid Section -->
    <section class="events-section" style="padding: 40px 0; background-color: #f9f9f9;">
        <div class="container">
            <!-- Filter Tabs -->
            <div class="d-flex justify-content-center mb-5">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-success active" id="btn-upcoming" onclick="filterEvents('Upcoming')">Upcoming Events</button>
                    <button type="button" class="btn btn-outline-secondary" id="btn-past" onclick="filterEvents('Completed')">Past Events</button>
                </div>
            </div>

            <div class="row g-4" id="events-container">
                <?php foreach ($events as $event): 
                    $day = date('d', strtotime($event['date']));
                    $month = date('M', strtotime($event['date']));
                    $isinfo = $event['status'] === 'Upcoming';
                ?>
                <div class="col-lg-4 col-md-6 col-12 event-item" data-status="<?php echo $event['status']; ?>">
                    <div class="event-card">
                        <div class="event-image-wrapper">
                            <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>">
                            <div class="event-date-badge">
                                <span class="event-date-day"><?php echo $day; ?></span>
                                <span class="event-date-month"><?php echo $month; ?></span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-status <?php echo $isinfo ? 'status-upcoming' : 'status-completed'; ?>">
                                <?php echo $event['status']; ?>
                            </span>
                            <h3 class="event-title"><?php echo $event['title']; ?></h3>
                            
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo $event['time']; ?></span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><?php echo $event['location']; ?></span>
                                </div>
                            </div>

                            <p class="event-description"><?php echo $event['description']; ?></p>

                            <?php if ($isinfo): ?>
                                <a href="#" class="btn-event btn-register">Register Now</a>
                            <?php else: ?>
                                <a href="#" class="btn-event btn-view">View Recap</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

    <script>
        function filterEvents(status) {
            const items = document.querySelectorAll('.event-item');
            const btnUpcoming = document.getElementById('btn-upcoming');
            const btnPast = document.getElementById('btn-past');

            // Update Buttons
            if (status === 'Upcoming') {
                btnUpcoming.classList.add('active', 'btn-outline-success');
                btnUpcoming.classList.remove('btn-outline-secondary');
                btnPast.classList.remove('active', 'btn-outline-success');
                btnPast.classList.add('btn-outline-secondary');
            } else {
                btnPast.classList.add('active', 'btn-outline-success');
                btnPast.classList.remove('btn-outline-secondary');
                btnUpcoming.classList.remove('active', 'btn-outline-success');
                btnUpcoming.classList.add('btn-outline-secondary');
            }

            // Filter Items
            items.forEach(item => {
                if (item.getAttribute('data-status') === status) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Initialize with filtering
        document.addEventListener('DOMContentLoaded', () => {
            filterEvents('Upcoming');
        });
    </script>

</body>

</html>
