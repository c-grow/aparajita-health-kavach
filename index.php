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
  <section class="modern-trust-section" aria-label="Why choose Aparajita Health Kavach">
    <div class="container">
      <div class="trust-container">
        
        <!-- Left Side: Interactive Brand Promise & Key Highlights -->
        <div class="trust-brand-promise">
          <div class="promise-badge"><i class="fas fa-certificate"></i> Govt. Registered &amp; ISO Certified</div>
          <h2>Hospital-Grade Healthcare, Delivered Safely at Your Home</h2>
          <p>Aparajita Health Kavach is Patna's premier healthcare service provider. We bridge the gap between hospital treatment and home recovery with qualified clinical teams, daily health reports, and prompt escalation systems.</p>
          
          <div class="promise-features">
            <div class="promise-feat-item">
              <div class="feat-bullet"><i class="fas fa-check"></i></div>
              <div>
                <h4>Continuous Medical Supervision</h4>
                <p>All care plans are supervised by doctors and senior nursing administrators.</p>
              </div>
            </div>
            <div class="promise-feat-item">
              <div class="feat-bullet"><i class="fas fa-check"></i></div>
              <div>
                <h4>100% Background-Verified Staff</h4>
                <p>Rigorous verification process for maximum patient safety and absolute peace of mind.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side: The 4 Core Pillars Grid -->
        <div class="trust-cards-grid">
          <div class="trust-card-new">
            <div class="trust-icon-box red-gradient"><i class="fas fa-hand-holding-medical"></i></div>
            <h3>Patient-First Care</h3>
            <p>Safe, timely nursing, vital monitoring, and personalized care plans customized for every patient at home.</p>
          </div>
          
          <div class="trust-card-new">
            <div class="trust-icon-box blue-gradient"><i class="fas fa-user-nurse"></i></div>
            <h3>Trained Care Team</h3>
            <p>Verified, qualified, and background-checked nurses &amp; caregivers with constant medical supervision.</p>
          </div>
          
          <div class="trust-card-new">
            <div class="trust-icon-box green-gradient"><i class="fas fa-laptop-medical"></i></div>
            <h3>Complete Home Services</h3>
            <p>One-stop solution for Home ICU setups, oxygen support, routine wellness visits, physiotherapy, and lab tests.</p>
          </div>
          
          <div class="trust-card-new">
            <div class="trust-icon-box orange-gradient"><i class="fas fa-phone-alt"></i></div>
            <h3>Fast Response, 24/7</h3>
            <p>Our dedicated support lines and coordinators are active 24/7 for prompt updates and emergency support.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="modern-services-section" id="services">
    <div class="container">
      <div class="modern-title-area reveal">
        <span class="eyebrow">Our Services</span>
        <h2>Healthcare at Home</h2>
        <p>Professional healthcare services designed for comfort, recovery, and well-being at home.</p>
      </div>

      <div class="services-card-grid">

        <a class="service-card-new reveal" href="home-nursing-care.php" aria-label="Home Nursing Care">
          <div class="service-icon-box"><i class="fas fa-user-nurse"></i></div>
          <h3>Home Nursing Care</h3>
          <p>Skilled nursing support for recovery, medication administration, and daily care needs.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="elderly-care.php" aria-label="Elderly Care">
          <div class="service-icon-box"><i class="fas fa-user-md"></i></div>
          <h3>Elderly Care</h3>
          <p>Compassionate assistance, health tracking, and comfort for senior family members.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="home-icu-setup.php" aria-label="Home ICU Setup">
          <div class="service-icon-box"><i class="fas fa-laptop-medical"></i></div>
          <h3>Home ICU Setup</h3>
          <p>Advanced critical care equipment, monitors, and expert support at home.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="physiotherapy-at-home.php" aria-label="Physiotherapy at Home">
          <div class="service-icon-box"><i class="fas fa-walking"></i></div>
          <h3>Physiotherapy</h3>
          <p>Personalized physical rehabilitation and post-op mobility recovery sessions.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="lab-tests-at-home.php" aria-label="Lab Tests at Home">
          <div class="service-icon-box"><i class="fas fa-flask"></i></div>
          <h3>Lab Tests at Home</h3>
          <p>Safe sample collection and convenient professional diagnostic testing services.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="medical-equipment.php" aria-label="Medical Equipment">
          <div class="service-icon-box"><i class="fas fa-bed"></i></div>
          <h3>Medical Equipment</h3>
          <p>Reliable rental and supply of medical devices, beds, and support equipment.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="child-care.php" aria-label="Child Care">
          <div class="service-icon-box"><i class="fas fa-baby"></i></div>
          <h3>Child Care</h3>
          <p>Trusted newborn baby care, nanny services, and pediatric nursing.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

        <a class="service-card-new reveal" href="house-cleaning-sanitization.php" aria-label="House Cleaning & Sanitization">
          <div class="service-icon-box"><i class="fas fa-broom"></i></div>
          <h3>House Cleaning</h3>
          <p>Clean, hygienic environments to support patient recovery and safety.</p>
          <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>

      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="modern-testi-section" id="testimonials">
    <div class="container">
      <div class="modern-title-area reveal">
        <span class="eyebrow">Testimonials</span>
        <h2>What Our Families Say</h2>
        <p>Real stories from families we've served across Patna and Bihar.</p>
      </div>
      
      <div class="testimonial-slider-container reveal">
        <button class="slider-btn prev-btn" aria-label="Previous Testimonial"><i class="fas fa-chevron-left"></i></button>
        
        <div class="testimonial-slider-wrapper">
          <div class="testimonial-slider">
            
            <div class="testi-slide">
              <div class="modern-testi-card">
                <span class="stars">★★★★★</span>
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
              <div class="modern-testi-card">
                <span class="stars">★★★★★</span>
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
              <div class="modern-testi-card">
                <span class="stars">★★★★★</span>
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
    </div>
  </section>

  <!-- COVERAGE -->
  <section class="modern-coverage-section">
    <div class="container">
      <div class="coverage-container">
        
        <!-- Left: Stats & Headquarters Card -->
        <div class="coverage-visual">
          <div class="coverage-hq">
            <div class="coverage-hq-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h3>Patna Headquarters</h3>
              <p>Centrally located to coordinate care fast</p>
            </div>
          </div>
          <div class="coverage-stats">
            <div class="stat-item">
              <h4>10K+</h4>
              <p>Happy Families</p>
            </div>
            <div class="stat-item">
              <h4>15+</h4>
              <p>Districts Covered</p>
            </div>
          </div>
        </div>
        
        <!-- Right: Modern active neighbourhood list -->
        <div class="coverage-showcase">
          <h3>Serving Across Bihar</h3>
          <div class="modern-chips-grid">
            <div class="modern-chip hq-chip"><span class="active-dot"></span> Patna (HQ)</div>
            <div class="modern-chip">Boring Road</div>
            <div class="modern-chip">Danapur</div>
            <div class="modern-chip">Khagaul</div>
            <div class="modern-chip">Phulwari Sharif</div>
            <div class="modern-chip">Hajipur</div>
            <div class="modern-chip">Muzaffarpur</div>
            <div class="modern-chip">Gaya</div>
            <div class="modern-chip">Ara</div>
            <div class="modern-chip">Chapra</div>
            <div class="modern-chip">Bihar Sharif</div>
            <div class="modern-chip">+ All Bihar</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="modern-faq-section" id="faqs">
    <div class="container">
      <div class="modern-title-area">
        <span class="eyebrow">FAQs</span>
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions about our home nursing, elderly care, and critical healthcare services.</p>
      </div>

      <div class="faq-accordion-container">
        
        <details class="faq-item" open>
          <summary class="faq-question">
            <span>What nursing services do you provide at home?</span>
            <span class="faq-toggle-icon"><i class="fas fa-plus"></i></span>
          </summary>
          <div class="faq-answer">
            <p>We provide full-spectrum home healthcare including Basic Attendant Care, Standard Nursing Care (bed sores, dressings, feeding, vitals, vitals logging), Critical Nursing Care (ventilator, tracheostomy, IV line management), Home ICU setups, Physiotherapy sessions, and Lab test collections at home.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">
            <span>Are your caregivers background checked and trained?</span>
            <span class="faq-toggle-icon"><i class="fas fa-plus"></i></span>
          </summary>
          <div class="faq-answer">
            <p>Yes, all our nurses and care attendants undergo strict background verification (address and identity check) and are qualified medical professionals or trained assistants. They work under constant clinical supervision to ensure maximum patient safety.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">
            <span>What are the booking policies and advance payments?</span>
            <span class="faq-toggle-icon"><i class="fas fa-plus"></i></span>
          </summary>
          <div class="faq-answer">
            <p>For home nursing services, we require an advance payment booking. The booking duration varies based on care tier (e.g., 15 days advance for Basic, 10 days for Nursing, and 8 days for Critical). All payments are non-refundable since we dedicate staff resources to your patient's schedule.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">
            <span>Can we request a change if we are not satisfied with the caregiver?</span>
            <span class="faq-toggle-icon"><i class="fas fa-plus"></i></span>
          </summary>
          <div class="faq-answer">
            <p>Absolutely. If you feel the assigned caregiver is not a suitable fit for your patient's specific care requirements, we will coordinate and arrange a qualified replacement caregiver within 24 hours.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">
            <span>Which areas do you serve in Patna and Bihar?</span>
            <span class="faq-toggle-icon"><i class="fas fa-plus"></i></span>
          </summary>
          <div class="faq-answer">
            <p>We are headquartered in Patna and actively serve Boring Road, Danapur, Khagaul, Phulwari Sharif, Kankarbagh, and other key areas. Additionally, we provide critical care setup and nursing support services across major districts in Bihar including Hajipur, Muzaffarpur, Gaya, Ara, and Chapra.</p>
          </div>
        </details>

      </div>
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
