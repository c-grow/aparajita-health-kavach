<?php
$page_title = "Aparajita Health Kavach | Home Nursing & Elderly Care Patna";
$active_page = "home";
$extra_css = '
<style>
    .testimonial-slider-container {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    .testimonial-slider-wrapper {
        overflow: hidden;
        width: 100%;
        border-radius: 14px;
    }
    .testimonial-slider {
        display: flex;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        width: 100%;
    }
    .testi-slide {
        min-width: 100%;
        box-sizing: border-box;
        padding: 0 10px;
    }
    .testi-slide .testi-card {
        margin: 10px auto;
        max-width: 700px;
        box-shadow: 0 12px 35px rgba(30, 60, 114, 0.08);
    }
    .slider-btn {
        background: #ffffff;
        border: 1px solid rgba(30, 60, 114, 0.1);
        color: #1e3c72;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        flex-shrink: 0;
        outline: none;
    }
    .slider-btn:hover {
        background: #ff4757;
        color: #ffffff;
        border-color: #ff4757;
        transform: scale(1.08);
    }
    .slider-dots {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 1.5rem;
    }
    .slider-dots .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #cbd5e1;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .slider-dots .dot.active {
        background: #ff4757;
        width: 24px;
        border-radius: 5px;
    }
    @media (max-width: 768px) {
        .testimonial-slider-container {
            gap: 0.5rem;
        }
        .slider-btn {
            width: 38px;
            height: 38px;
            font-size: 0.9rem;
        }
    }
</style>
';
include 'includes/header.php';
?>

  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <h2>Professional Healthcare <br>at Your Doorstep</h2>
        <p>24/7 Home Nursing | Elderly Care | Home ICU | Physiotherapy | Lab Tests</p>
        <div class="hero-actions">
          <a href="contact.php" class="btn-primary">Get Emergency Help</a>
          <a href="service.php" class="btn-secondary">Our Services</a>
        </div>
      </div>
      <div class="enquiry-card">
        <h3>Quick Enquiry</h3>
        <p>Share your details. Our care team will call you shortly.</p>
        <form action="backend/contact.php" method="POST" id="homeEnquiryForm">
          <input type="text" name="name" placeholder="Your Full Name" required>
          <input type="tel" name="phone" placeholder="Phone Number" required>
          <select name="service" required>
            <option value="">Select Service</option>
            <option>Home Nursing Care</option>
            <option>Elderly Care</option>
            <option>Home ICU Setup</option>
            <option>Physiotherapy</option>
            <option>Lab Tests</option>
            <option>Comfort Living Facility</option>
            <option>Medical Equipment</option>
            <option>Child Care</option>
          </select>
          <textarea name="message" rows="4" placeholder="Location / Requirement" required></textarea>
          <button type="submit" class="btn-primary">Send Enquiry</button>
        </form>
        <div id="homeFormMessage" class="form-message"></div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="features" aria-label="Why choose Aparajita Health Kavach">
    <div class="container">
      <h2 class="section-title">Why Families Choose Us</h2>
      <div class="feature-grid">
        <div class="feature-card">
          <i class="fas fa-shield-alt"></i>
          <h3>Patient-first Care</h3>
          <p>Safe, timely nursing & monitoring—every step at home.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-user-nurse"></i>
          <h3>Trained Care Team</h3>
          <p>Qualified nurses & caregivers with clear care plans.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-laptop-medical"></i>
          <h3>Complete Home Services</h3>
          <p>Home nursing, ICU setup, physiotherapy & lab tests.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-headset"></i>
          <h3>Fast Response, 24/7</h3>
          <p>Quick support for emergencies and routine assistance.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- SERVICES -->
  <section class="section section-alt" id="services">
    <div class="section-header reveal">
      <div class="eyebrow">Our Services</div>
      <h2>Healthcare at Home</h2>
      <p>Professional healthcare services designed for comfort, recovery, and well-being at home.</p>
    </div>

    <div class="services-grid">

      <a class="service-card reveal" href="home-nursing-care.php" aria-label="Home Nursing Care">
        <div class="service-icon"><i class="fas fa-user-nurse"></i></div>
        <h3>Home Nursing Care</h3>
        <p>Skilled nursing support for recovery, medication, and daily care needs.</p>
      </a>

      <a class="service-card reveal" href="elderly-care.php" aria-label="Elderly Care">
        <div class="service-icon"><i class="fas fa-user-md"></i></div>
        <h3>Elderly Care</h3>
        <p>Compassionate assistance and health monitoring for senior family members.</p>
      </a>

      <a class="service-card reveal" href="home-icu-setup.php" aria-label="Home ICU Setup">
        <div class="service-icon"><i class="fas fa-laptop-medical"></i></div>
        <h3>Home ICU Setup</h3>
        <p>Advanced critical care equipment and professional support at home.</p>
      </a>

      <a class="service-card reveal" href="physiotherapy-at-home.php" aria-label="Physiotherapy at Home">
        <div class="service-icon"><i class="fas fa-walking"></i></div>
        <h3>Physiotherapy</h3>
        <p>Personalized rehabilitation and mobility improvement sessions.</p>
      </a>

      <a class="service-card reveal" href="lab-tests-at-home.php" aria-label="Lab Tests at Home">
        <div class="service-icon"><i class="fas fa-flask"></i></div>
        <h3>Lab Tests at Home</h3>
        <p>Safe sample collection and convenient diagnostic testing services.</p>
      </a>

      <a class="service-card reveal" href="medical-equipment.php" aria-label="Medical Equipment">
        <div class="service-icon"><i class="fas fa-bed"></i></div>
        <h3>Medical Equipment</h3>
        <p>Reliable rental and supply of essential healthcare equipment.</p>
      </a>

      <a class="service-card reveal" href="child-care.php" aria-label="Child Care">
        <div class="service-icon"><i class="fas fa-baby"></i></div>
        <h3>Child Care</h3>
        <p>Trusted care and support for newborns and young children.</p>
      </a>

      <a class="service-card reveal" href="house-cleaning-sanitization.php" aria-label="House Cleaning & Sanitization">
        <div class="service-icon"><i class="fas fa-broom"></i></div>
        <h3>House Cleaning</h3>
        <p>Clean, hygienic environments to support patient safety and comfort.</p>
      </a>

    </div>
  </section>
  <!-- TESTIMONIALS -->
  <section class="section" id="testimonials">
    <div class="section-header reveal">
      <div class="eyebrow">Testimonials</div>
      <h2>What Our Families Say</h2>
      <p>Real stories from families we've served across Patna and Bihar.</p>
    </div>
    
    <div class="testimonial-slider-container reveal">
      <button class="slider-btn prev-btn" aria-label="Previous Testimonial"><i class="fas fa-chevron-left"></i></button>
      
      <div class="testimonial-slider-wrapper">
        <div class="testimonial-slider">
          
          <div class="testi-slide">
            <div class="testi-card">
              <div class="stars">★★★★★</div>
              <p class="testi-text">The nurse assigned to my mother was incredibly caring and professional. She managed all medications and kept us updated daily. We could not have asked for better support.</p>
              <div class="testi-author">
                <div class="testi-avatar">RK</div>
                <div>
                  <div class="testi-name">Ramesh Kumar</div>
                  <div class="testi-role">Patna, Bihar</div>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-slide">
            <div class="testi-card">
              <div class="stars">★★★★★</div>
              <p class="testi-text">The home ICU setup was done within hours and the care team was truly like family. My father recovered comfortably at home instead of a hospital. Truly grateful.</p>
              <div class="testi-author">
                <div class="testi-avatar">PD</div>
                <div>
                  <div class="testi-name">Priya Devi</div>
                  <div class="testi-role">Boring Road, Patna</div>
                </div>
              </div>
            </div>
          </div>

          <div class="testi-slide">
            <div class="testi-card">
              <div class="stars">★★★★★</div>
              <p class="testi-text">The Comfort Living facility has been a blessing for my elderly mother. She gets doctor visits, healthy food, and great company. The staff treats her like their own family.</p>
              <div class="testi-author">
                <div class="testi-avatar">AS</div>
                <div>
                  <div class="testi-name">Amit Sinha</div>
                  <div class="testi-role">Danapur, Patna</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
      <button class="slider-btn next-btn" aria-label="Next Testimonial"><i class="fas fa-chevron-right"></i></button>
    </div>
    
    <div class="slider-dots">
      <span class="dot active" data-slide="0"></span>
      <span class="dot" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
    </div>
  </section>

  <!-- COVERAGE -->
  <section class="coverage-section">
    <h2>Serving Across Bihar</h2>
    <p>Bringing professional healthcare to families all across Patna and surrounding districts</p>
    <div class="coverage-chips">
      <div class="chip main">📍 Patna (HQ)</div>
      <div class="chip">Boring Road</div>
      <div class="chip">Danapur</div>
      <div class="chip">Khagaul</div>
      <div class="chip">Phulwari Sharif</div>
      <div class="chip">Hajipur</div>
      <div class="chip">Muzaffarpur</div>
      <div class="chip">Gaya</div>
      <div class="chip">Ara</div>
      <div class="chip">Chapra</div>
      <div class="chip">Bihar Sharif</div>
      <div class="chip">+ All Bihar</div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <h2>Need Immediate Medical Assistance?</h2>
      <p>Call us 24/7 for emergency home healthcare services</p>
      <a href="tel:+919876543210" class="btn-call">Call Now: +91 98765 43210</a>
    </div>
  </section>

<?php
$extra_js = '
<script>
    handleAjaxForm("homeEnquiryForm", "homeFormMessage");

    // Testimonial Slider JS
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.querySelector(".testimonial-slider");
        const slides = document.querySelectorAll(".testi-slide");
        const dots = document.querySelectorAll(".slider-dots .dot");
        const prevBtn = document.querySelector(".prev-btn");
        const nextBtn = document.querySelector(".next-btn");

        let currentIndex = 0;
        const totalSlides = slides.length;
        let autoPlayTimer = null;

        function updateSlider(index) {
            if (index < 0) index = totalSlides - 1;
            if (index >= totalSlides) index = 0;
            currentIndex = index;
            
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            dots.forEach((dot, idx) => {
                dot.classList.toggle("active", idx === currentIndex);
            });
        }

        function nextSlide() {
            updateSlider(currentIndex + 1);
        }

        function prevSlide() {
            updateSlider(currentIndex - 1);
        }

        if (prevBtn && nextBtn && slider) {
            prevBtn.addEventListener("click", () => {
                prevSlide();
                resetAutoPlay();
            });
            nextBtn.addEventListener("click", () => {
                nextSlide();
                resetAutoPlay();
            });
            
            dots.forEach(dot => {
                dot.addEventListener("click", (e) => {
                    const slideIdx = parseInt(e.target.dataset.slide);
                    updateSlider(slideIdx);
                    resetAutoPlay();
                });
            });
            
            function startAutoPlay() {
                autoPlayTimer = setInterval(nextSlide, 5000);
            }
            
            function resetAutoPlay() {
                clearInterval(autoPlayTimer);
                startAutoPlay();
            }
            
            startAutoPlay();
        }
    });
</script>
';
include 'includes/footer.php';
?>
