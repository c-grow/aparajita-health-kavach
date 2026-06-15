<?php
$page_title = "Gallery & Testimonials - Aparajita Health Kavach";
$active_page = "gallery";
$extra_css = '
    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }
        .gallery-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .gallery-caption {
            padding: 1rem;
            text-align: center;
        }
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }
        .testimonial-card {
            background: #f9f9f9;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .testimonial-card i {
            font-size: 3rem;
            color: #ff4757;
            margin-bottom: 1rem;
        }
        .rating {
            color: #ffd700;
            margin: 1rem 0;
        }
        .page-header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-top: 70px;
        }
    </style>
';
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Our Gallery & Testimonials</h1>
        <p>See our work and what our patients say about us</p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <h2 class="section-title">Our Work in Action</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=400" alt="Nurse caring for elderly">
                <div class="gallery-caption">
                    <h3>Elderly Care Service</h3>
                    <p>Professional nurse attending to senior citizen at home</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=400" alt="Home ICU setup">
                <div class="gallery-caption">
                    <h3>Home ICU Setup</h3>
                    <p>Advanced medical equipment installed at patient's home</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400" alt="Physiotherapy session">
                <div class="gallery-caption">
                    <h3>Physiotherapy at Home</h3>
                    <p>Professional physiotherapist helping patient recover</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=400" alt="Comfort Living facility">
                <div class="gallery-caption">
                    <h3>Comfort Living Facility</h3>
                    <p>Our geriatric care home with AC rooms</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1585435557343-3b092031a4ec?w=400" alt="Lab sample collection">
                <div class="gallery-caption">
                    <h3>Lab Tests at Home</h3>
                    <p>Sample collection at patient's doorstep</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=400" alt="Child care">
                <div class="gallery-caption">
                    <h3>Child Care Service</h3>
                    <p>Trained nanny taking care of newborn</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title">What Our Patients Say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p>"Aparajita Health Kavach provided excellent home nursing care for my father after his surgery. The nurses were very professional and caring."</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>- Rajesh Kumar, Patna</h4>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p>"The Comfort Living facility is amazing! My mother feels safe and well-cared for. Regular doctor visits and clean environment."</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>- Sunita Devi, Muzaffarpur</h4>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p>"Quick response and professional service. The home ICU setup saved my husband's life during emergency. Highly recommended!"</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>- Meena Sharma, Patna</h4>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
