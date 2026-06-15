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

  <section class="hero" style="background: linear-gradient(rgba(10, 25, 47, 0.75), rgba(10, 25, 47, 0.75)), url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200') center/cover no-repeat; min-height: 85vh; padding: 6rem 0 5rem;">
    <div class="container hero-grid">
      <div class="hero-content" style="color: white;">
        <div class="hero-badge"><i class="fas fa-heartbeat" style="animation: pulse 1.5s infinite;"></i> 24/7 Professional Home Healthcare</div>
        <h2 style="font-size: 3.2rem; line-height: 1.25; margin-bottom: 1.2rem; font-weight: 700;">Professional Care <br><span style="color: #ff4757;">at Your Doorstep</span></h2>
        <p style="font-size: 1.2rem; line-height: 1.6; margin-bottom: 2.2rem; opacity: 0.95;">Compassionate and qualified 24/7 Home Nursing, Elderly Care, Home ICU Setup, Physiotherapy, and Lab Tests in Patna and across Bihar.</p>
        <div class="hero-actions" style="margin-bottom: 3rem;">
          <a href="tel:+919876543210" class="btn-primary" style="background: #ff4757; font-weight: 600; padding: 14px 32px;"><i class="fas fa-phone-alt"></i> Call +91 98765 43210</a>
          <a href="service.php" class="btn-secondary" style="border: 2px solid white; font-weight: 600; padding: 14px 32px;">Our Services</a>
        </div>
        <div class="hero-features">
          <div class="hero-feat-item"><i class="fas fa-user-nurse"></i> Trained Nurses</div>
          <div class="hero-feat-item"><i class="fas fa-shield-alt"></i> 100% Patient Safe</div>
          <div class="hero-feat-item"><i class="fas fa-map-marker-alt"></i> Serving Patna &amp; Bihar</div>
        </div>
      </div>
      
      <!-- Premium Quick Enquiry Form Card -->
      <div class="enquiry-card premium-card" style="padding: 2.2rem; background: rgba(255, 255, 255, 0.98); border-radius: 16px; border: 1px solid rgba(255,255,255,0.8); box-shadow: 0 20px 45px rgba(0,0,0,0.18);">
        <h3 style="color: #1e3c72; margin-bottom: 0.4rem; font-size: 1.5rem; font-weight: 700;"><i class="fas fa-envelope-open-text" style="color: #ff4757;"></i> Quick Enquiry</h3>
        <p style="color: #475569; font-size: 0.92rem; margin-bottom: 1.5rem; line-height: 1.4;">Fill in details. Our care team will call you within 15 minutes.</p>
        <form action="backend/contact.php" method="POST" id="homeEnquiryForm">
          <div class="premium-form-group">
            <label class="premium-form-label">Full Name</label>
            <input type="text" name="name" class="premium-form-input" style="padding: 0.8rem 1rem;" placeholder="Your Name" required>
          </div>
          <div class="premium-form-group">
            <label class="premium-form-label">Phone Number</label>
            <input type="tel" name="phone" class="premium-form-input" style="padding: 0.8rem 1rem;" placeholder="Mobile Number" required>
          </div>
          <div class="premium-form-group">
            <label class="premium-form-label">Required Service</label>
            <select name="service" class="premium-form-input" style="padding: 0.8rem 1rem;" required>
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
          </div>
          <div class="premium-form-group">
            <label class="premium-form-label">Location / Special Instructions</label>
            <textarea name="message" rows="3" class="premium-form-input" style="padding: 0.8rem 1rem; min-height: 80px;" placeholder="Patient location & condition..." required></textarea>
          </div>
          <button type="submit" class="btn-primary" style="width: 100%; border: 0; padding: 1rem; border-radius: 8px; font-weight: 600; cursor: pointer; background: #ff4757; text-align: center; display: block; margin: 0.5rem 0 0;">Request Call Back</button>
        </form>
        <div id="homeFormMessage" class="form-message" style="text-align: center; font-size: 0.95rem;"></div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="features" aria-label="Why choose Aparajita Health Kavach" style="padding: 5.5rem 0; background: #ffffff;">
    <div class="container">
      <div class="section-header" style="text-align: center; margin-bottom: 3.5rem;">
        <div class="eyebrow">Trust &amp; Quality</div>
        <h2 style="color: #1e3c72; font-size: 2.5rem; font-weight: 700; margin-bottom: 0.8rem;">Why Families Trust Us</h2>
        <p style="color: #64748b; font-size: 1.05rem; max-width: 700px; margin: 0 auto;">We provide hospital-grade care in the comfort of your home, ensuring professional medical oversight and emotional support.</p>
      </div>
      
      <div class="feature-grid">
        <div class="feature-card" style="border-radius: 12px; border: 1px solid rgba(30, 60, 114, 0.05); padding: 2.2rem 1.8rem; text-align: left; transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; gap: 1rem;">
          <div style="width: 55px; height: 55px; background: rgba(255, 71, 87, 0.08); color: #ff4757; border-radius: 10px; display: grid; place-items: center; font-size: 1.6rem;"><i class="fas fa-hand-holding-medical"></i></div>
          <h3 style="color: #1e3c72; font-size: 1.25rem; font-weight: 700; margin: 0;">Patient-First Care</h3>
          <p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;">Safe, timely nursing, vital monitoring, and personalized care plans customized for every patient at home.</p>
        </div>
        
        <div class="feature-card" style="border-radius: 12px; border: 1px solid rgba(30, 60, 114, 0.05); padding: 2.2rem 1.8rem; text-align: left; transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; gap: 1rem;">
          <div style="width: 55px; height: 55px; background: rgba(30, 60, 114, 0.08); color: #1e3c72; border-radius: 10px; display: grid; place-items: center; font-size: 1.6rem;"><i class="fas fa-user-nurse"></i></div>
          <h3 style="color: #1e3c72; font-size: 1.25rem; font-weight: 700; margin: 0;">Trained Care Team</h3>
          <p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;">Verified, qualified, and background-checked nurses &amp; caregivers with constant medical supervision.</p>
        </div>
        
        <div class="feature-card" style="border-radius: 12px; border: 1px solid rgba(30, 60, 114, 0.05); padding: 2.2rem 1.8rem; text-align: left; transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; gap: 1rem;">
          <div style="width: 55px; height: 55px; background: rgba(16, 185, 129, 0.08); color: #10b981; border-radius: 10px; display: grid; place-items: center; font-size: 1.6rem;"><i class="fas fa-laptop-medical"></i></div>
          <h3 style="color: #1e3c72; font-size: 1.25rem; font-weight: 700; margin: 0;">Complete Home Services</h3>
          <p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;">One-stop solution for Home ICU setups, oxygen support, routine wellness visits, physiotherapy, and lab tests.</p>
        </div>
        
        <div class="feature-card" style="border-radius: 12px; border: 1px solid rgba(30, 60, 114, 0.05); padding: 2.2rem 1.8rem; text-align: left; transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; gap: 1rem;">
          <div style="width: 55px; height: 55px; background: rgba(245, 158, 11, 0.08); color: #f59e0b; border-radius: 10px; display: grid; place-items: center; font-size: 1.6rem;"><i class="fas fa-phone-alt"></i></div>
          <h3 style="color: #1e3c72; font-size: 1.25rem; font-weight: 700; margin: 0;">Fast Response, 24/7</h3>
          <p style="color: #64748b; font-size: 0.95rem; margin: 0; line-height: 1.6;">Our dedicated support lines and coordinators are active 24/7 for prompt updates and emergency support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section section-alt" id="services" style="padding: 5.5rem 0; background: #f8fafc;">
    <div class="section-header reveal">
      <div class="eyebrow">Our Services</div>
      <h2 style="color: #1e3c72; font-size: 2.5rem; font-weight: 700; margin-bottom: 0.8rem;">Healthcare at Home</h2>
      <p style="color: #64748b; font-size: 1.05rem; max-width: 700px; margin: 0 auto;">Professional healthcare services designed for comfort, recovery, and well-being at home.</p>
    </div>

    <div class="services-grid">

      <a class="service-card reveal" href="home-nursing-care.php" aria-label="Home Nursing Care" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-user-nurse"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Home Nursing Care</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Skilled nursing support for recovery, medication administration, and daily care needs.</p>
      </a>

      <a class="service-card reveal" href="elderly-care.php" aria-label="Elderly Care" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-user-md"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Elderly Care</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Compassionate assistance, health tracking, and comfort for senior family members.</p>
      </a>

      <a class="service-card reveal" href="home-icu-setup.php" aria-label="Home ICU Setup" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-laptop-medical"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Home ICU Setup</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Advanced critical care equipment, monitors, and expert support at home.</p>
      </a>

      <a class="service-card reveal" href="physiotherapy-at-home.php" aria-label="Physiotherapy at Home" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-walking"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Physiotherapy</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Personalized physical rehabilitation and post-op mobility recovery sessions.</p>
      </a>

      <a class="service-card reveal" href="lab-tests-at-home.php" aria-label="Lab Tests at Home" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-flask"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Lab Tests at Home</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Safe sample collection and convenient professional diagnostic testing services.</p>
      </a>

      <a class="service-card reveal" href="medical-equipment.php" aria-label="Medical Equipment" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-bed"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Medical Equipment</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Reliable rental and supply of medical devices, beds, and support equipment.</p>
      </a>

      <a class="service-card reveal" href="child-care.php" aria-label="Child Care" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-baby"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">Child Care</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Trusted newborn baby care, nanny services, and pediatric nursing.</p>
      </a>

      <a class="service-card reveal" href="house-cleaning-sanitization.php" aria-label="House Cleaning & Sanitization" style="border-radius: 12px; padding: 2.2rem 1.5rem; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; text-decoration: none; color: inherit;">
        <div class="service-icon" style="margin-bottom: 1.2rem;"><i class="fas fa-broom"></i></div>
        <h3 style="font-weight: 700; font-size: 1.2rem; color: #1e3c72;">House Cleaning</h3>
        <p style="font-size: 0.92rem; color: #64748b; margin-top: 0.5rem; line-height: 1.5;">Clean, hygienic environments to support patient recovery and safety.</p>
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
