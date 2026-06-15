<?php
$page_title = "Comfort Living - Geriatric Facility | Aparajita Health Kavach";
$active_page = "comfort-living";
$extra_css = '
    <style>
        .comfort-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\'https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?w=1200\');
            background-size: cover;
            height: 60vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }
        .features-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }
        .feature-box {
            background: #f9f9f9;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }
        .feature-box i {
            font-size: 3rem;
            color: #ff4757;
            margin-bottom: 1rem;
        }
    </style>
';
include 'includes/header.php';
?>

<section class="comfort-hero">
    <div class="container">
        <h1>Comfort Living - Geriatric Facility</h1>
        <p>A safe and comfortable home for your loved ones</p>
    </div>
</section>

<section class="comfort-description">
    <div class="container">
        <h2 class="section-title">Why Choose Comfort Living?</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">For seniors who live alone or need medical supervision, our Comfort Living facility provides a nurturing environment with professional healthcare support.</p>
        
        <div class="features-list">
            <div class="feature-box">
                <i class="fas fa-wind"></i>
                <h3>AC Rooms</h3>
                <p>Well-furnished, air-conditioned rooms with comfortable bedding</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-user-md"></i>
                <h3>Regular Doctor Visits</h3>
                <p>Experienced doctors visit weekly for health checkups</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-flask"></i>
                <h3>In-house Lab Facility</h3>
                <p>On-site sample collection and testing services</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-utensils"></i>
                <h3>Nutritious Meals</h3>
                <p>Balanced, hygienic meals as per dietary needs</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-hand-holding-heart"></i>
                <h3>24/7 Nursing Care</h3>
                <p>Round-the-clock nursing staff for medical needs</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-yoga"></i>
                <h3>Recreation Activities</h3>
                <p>Daily activities, yoga, and entertainment programs</p>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <h2>Book a Visit to Comfort Living</h2>
        <p>See our facility and meet our caring staff</p>
        <a href="contact.php" class="btn-call">Schedule Visit Now</a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
