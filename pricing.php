<?php
$page_title = "Affordable Home Care & Nursing Service Pricing - Aparajita Health Kavach";
$active_page = "pricing";
include 'includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <h1>Our Pricing Plans</h1>
    <p>Transparent and affordable rates for professional medical and caregiver services at home</p>
  </div>
</section>

<section class="section">
  <div class="container">
    
    <!-- CATEGORY TABS -->
    <div class="pricing-category-tabs">
      <button class="pricing-category-btn active" onclick="switchPricingTab(event, 'nursing-pricing')">Nursing &amp; Care Attendants</button>
      <button class="pricing-category-btn" onclick="switchPricingTab(event, 'visits-pricing')">Specialized Visits &amp; ICU Setups</button>
    </div>

    <!-- CATEGORY 1: NURSING ATTENDANTS -->
    <div id="nursing-pricing" class="pricing-tab-content active">
      <div class="section-header section-header-pricing">
        <div class="eyebrow">Attendant Packages</div>
        <h2>Caregiver Attendant Pricing</h2>
        <p>Flexible daily shift options tailored for your patient's recovery and companion needs.</p>
      </div>

      <div class="featured-pricing-grid">
        
        <!-- Basic Care Card -->
        <div class="pricing-card">
          <div class="pricing-card-header">
            <h3 class="pricing-card-title">Basic Attendant</h3>
            <p class="pricing-card-desc">For daily companion support, personal hygiene, and general mobility assistance.</p>
            <div class="pricing-card-price">₹1,000 <span>/ 24 Hours</span></div>
          </div>
          <ul class="pricing-card-features">
            <li><i class="fas fa-check-circle"></i> <strong>12 Hours Shift:</strong> ₹600 / day</li>
            <li><i class="fas fa-check-circle"></i> <strong>8 Hours Shift:</strong> ₹400 / day</li>
            <li><i class="fas fa-check-circle"></i> Personal grooming &amp; bathing</li>
            <li><i class="fas fa-check-circle"></i> Feeding &amp; dressing support</li>
            <li><i class="fas fa-check-circle"></i> Vital signs monitoring (BP, Sugar)</li>
            <li><i class="fas fa-check-circle"></i> Bed-sores turning &amp; prevention</li>
            <li><i class="fas fa-check-circle"></i> Diaper care &amp; sanitation</li>
          </ul>
          <button class="buy-btn" onclick="selectAndScroll('Basic Nursing Care (24 Hours)')">Book Basic Care</button>
        </div>

        <!-- Standard Care Card (Popular) -->
        <div class="pricing-card popular">
          <div class="pricing-card-header">
            <h3 class="pricing-card-title">Standard Attendant</h3>
            <p class="pricing-card-desc">For clinical assistance, bedside nursing support, and regular vital logs.</p>
            <div class="pricing-card-price">₹1,500 <span>/ 24 Hours</span></div>
          </div>
          <ul class="pricing-card-features">
            <li><i class="fas fa-check-circle"></i> <strong>12 Hours Shift:</strong> ₹800 / day</li>
            <li><i class="fas fa-check-circle"></i> <strong>8 Hours Shift:</strong> ₹600 / day</li>
            <li><i class="fas fa-check-circle"></i> <strong>All Basic Care duties included</strong></li>
            <li><i class="fas fa-check-circle"></i> Ryles Tube Feeding</li>
            <li><i class="fas fa-check-circle"></i> Cleaning &amp; dressing wounds</li>
            <li><i class="fas fa-check-circle"></i> Oral &amp; IV medication delivery</li>
            <li><i class="fas fa-check-circle"></i> Tracheostomy suctioning &amp; care</li>
          </ul>
          <button class="buy-btn" style="background:#ff4757;" onclick="selectAndScroll('Nursing Care (24 Hours)')">Book Standard Care</button>
        </div>

        <!-- Critical Care Card -->
        <div class="pricing-card">
          <div class="pricing-card-header">
            <h3 class="pricing-card-title">Critical Attendant</h3>
            <p class="pricing-card-desc">For high-dependency patients, advanced clinical support, and device management.</p>
            <div class="pricing-card-price">₹3,200 <span>/ 24 Hours</span></div>
          </div>
          <ul class="pricing-card-features">
            <li><i class="fas fa-check-circle"></i> <strong>12 Hours Shift:</strong> ₹2200 / day</li>
            <li><i class="fas fa-check-circle"></i> <strong>8 Hours Shift:</strong> ₹1200 / day</li>
            <li><i class="fas fa-check-circle"></i> <strong>All Standard Care duties included</strong></li>
            <li><i class="fas fa-check-circle"></i> Infusion pump &amp; IV fluid care</li>
            <li><i class="fas fa-check-circle"></i> BiPAP / CPAP ventilator tracking</li>
            <li><i class="fas fa-check-circle"></i> Urinary catheter maintenance</li>
            <li><i class="fas fa-check-circle"></i> Stoma care &amp; bag management</li>
          </ul>
          <button class="buy-btn" onclick="selectAndScroll('Critical Nursing Care (24 Hours)')">Book Critical Care</button>
        </div>

      </div>
    </div>

    <!-- CATEGORY 2: SPECIALIZED VISITS & ICU SETUPS -->
    <div id="visits-pricing" class="pricing-tab-content">
      <div class="section-header section-header-pricing">
        <div class="eyebrow">Medical &amp; Equipment Support</div>
        <h2>Specialized Home Visits &amp; Setups</h2>
        <p>Expert healthcare interventions and essential clinical assistance available directly at home.</p>
      </div>

      <div class="addon-services-grid">
        
        <!-- ICU Setup -->
        <div class="addon-card">
          <div class="addon-card-header">
            <div class="addon-icon"><i class="fas fa-laptop-medical"></i></div>
            <div class="addon-info">
              <h4>Home ICU Setup</h4>
              <p>Hospital-grade ICU setup with ventilator support, cardiac monitoring, and clinical layout.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Starting from</span>
              <span class="addon-amount">₹5,000 / day</span>
            </div>
            <button class="buy-btn" onclick="selectAndScroll('Rental ICU Setup at Home')">Book Setup</button>
          </div>
        </div>

        <!-- Physiotherapist -->
        <div class="addon-card">
          <div class="addon-card-header">
            <div class="addon-icon"><i class="fas fa-walking"></i></div>
            <div class="addon-info">
              <h4>Physiotherapist Visit</h4>
              <p>Professional post-surgery rehabilitation, pain management, and orthopedic mobility sessions.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Per Session</span>
              <span class="addon-amount">₹500 / visit</span>
            </div>
            <button class="buy-btn" onclick="selectAndScroll('Physiotherapist (Per Visit)')">Book Visit</button>
          </div>
        </div>

        <!-- Nebulisation -->
        <div class="addon-card">
          <div class="addon-card-header">
            <div class="addon-icon"><i class="fas fa-lungs"></i></div>
            <div class="addon-info">
              <h4>Nebulisation Session</h4>
              <p>Clinical nebulisation support for asthma, COPD, and respiratory comfort visits.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Per Session</span>
              <span class="addon-amount">₹300 / visit</span>
            </div>
            <button class="buy-btn" onclick="selectAndScroll('Nebulisation (Per Visit)')">Book Visit</button>
          </div>
        </div>

        <!-- Blood Collection -->
        <div class="addon-card">
          <div class="addon-card-header">
            <div class="addon-icon"><i class="fas fa-vial"></i></div>
            <div class="addon-info">
              <h4>Blood &amp; Sample Collection</h4>
              <p>Professional home diagnostics sample extraction with certified, verified lab integration.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Home Extraction</span>
              <span class="addon-amount">₹150 / visit</span>
            </div>
            <button class="buy-btn" onclick="selectAndScroll('Blood Collection')">Book Visit</button>
          </div>
        </div>

        <!-- Medicine Delivery -->
        <div class="addon-card">
          <div class="addon-card-header">
            <div class="addon-icon"><i class="fas fa-pills"></i></div>
            <div class="addon-info">
              <h4>Medicine Delivery at Home</h4>
              <p>Prompt medicine, prescription items, and medical supplies dispatch to patient bedside.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Per Delivery</span>
              <span class="addon-amount">₹100 / visit</span>
            </div>
            <button class="buy-btn" onclick="selectAndScroll('Medicine Delivery')">Request</button>
          </div>
        </div>

        <!-- Consumables -->
        <div class="addon-card">
          <div class="addon-card-header">
            <div class="addon-icon"><i class="fas fa-box-tissue"></i></div>
            <div class="addon-info">
              <h4>Consumables &amp; Disposables</h4>
              <p>Essential gloves, underpads, medical sanitizers, catheters, and syringes supply.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Rates Info</span>
              <span class="addon-amount">At MRP Rates</span>
            </div>
            <button class="buy-btn" onclick="selectAndScroll('Consumables Enquiry')">Enquire</button>
          </div>
        </div>

        <!-- Air Ambulance -->
        <div class="addon-card" style="grid-column: span 1;">
          <div class="addon-card-header">
            <div class="addon-icon" style="background:#fee2e2; color:#ef4444;"><i class="fas fa-plane-departure"></i></div>
            <div class="addon-info">
              <h4>Emergency Air Ambulance</h4>
              <p>24/7 immediate medical evacuation and transit support with expert paramedics onboard.</p>
            </div>
          </div>
          <div class="addon-card-footer">
            <div>
              <span class="addon-price-label">Evacuation Rate</span>
              <span class="addon-amount" style="font-size: 1.1rem; color:#ef4444;">Call for details</span>
            </div>
            <a href="tel:+919876543210" class="buy-btn btn-coral-red">Call Now</a>
          </div>
        </div>

      </div>
    </div>

    <!-- BOOKING & REFUND POLICY NOTICE -->
    <div class="policy-alert">
      <h3><i class="fas fa-exclamation-triangle"></i> Important Booking &amp; Refund Policy</h3>
      <p>Please note the following terms before booking nursing or attendant services:</p>
      <ul>
        <li><strong>Non-refundable Charges:</strong> All charges mentioned above are strictly non-refundable.</li>
        <li><strong>Advance Payment Requirement:</strong>
          <ul>
            <li>Minimum of <strong>15 days</strong> advance payment is required to start <strong>Basic Nursing Attendant</strong> services.</li>
            <li>Minimum of <strong>10 days</strong> advance payment is required for <strong>Standard Nursing Attendant</strong>.</li>
            <li>Minimum of <strong>8 days</strong> advance payment is required for <strong>Critical Nursing Attendant</strong>.</li>
          </ul>
        </li>
        <li><strong>Slot Extensions &amp; Renewal:</strong> Once a slot (15, 10, or 8 days) is booked and service ends, a new slot must be booked for the same duration to continue services.</li>
      </ul>
    </div>

    <!-- TABS SECTION FOR CAREGIVER DUTIES -->
    <div class="tabs-container pricing-wrapper-margin">
      <div class="section-header tabs-section-header">
        <div class="eyebrow">Attendant Duties</div>
        <h2>What's Included in the Service</h2>
        <p>Compare the detailed duties included in each nursing care category.</p>
      </div>

      <div class="tabs-header">
        <button class="tab-btn active" onclick="openTab(event, 'basic-care')">Basic Attendant Duties</button>
        <button class="tab-btn" onclick="openTab(event, 'standard-care')">Standard Attendant Duties</button>
        <button class="tab-btn" onclick="openTab(event, 'critical-care')">Critical Attendant Duties</button>
      </div>

      <!-- Basic Care Content -->
      <div id="basic-care" class="tab-content active">
        <div class="tab-detail-header">
          <h3 class="tab-detail-title"><i class="fas fa-heartbeat tab-detail-icon"></i> Basic Nursing Attendant Duties</h3>
          <p class="tab-detail-desc">Focuses on daily living support, basic monitoring, and personal hygiene care.</p>
        </div>
        <ul class="duty-list">
          <li><i class="fas fa-check-circle"></i> Personal care (bathing, grooming, toileting)</li>
          <li><i class="fas fa-check-circle"></i> Eating and dressing assistance</li>
          <li><i class="fas fa-check-circle"></i> Monitoring of medication schedules</li>
          <li><i class="fas fa-check-circle"></i> Taking vital signs (BP, Temp, Pulse)</li>
          <li><i class="fas fa-check-circle"></i> Turning bed-bound patients to avoid bed sores</li>
          <li><i class="fas fa-check-circle"></i> Emptying urine from the drainage bag</li>
          <li><i class="fas fa-check-circle"></i> Providing and emptying bedpans</li>
          <li><i class="fas fa-check-circle"></i> Changing diapers &amp; diaper area hygiene</li>
          <li><i class="fas fa-check-circle"></i> Lifting patients into beds or wheelchairs</li>
          <li><i class="fas fa-check-circle"></i> Cleaning and sanitizing patient areas</li>
          <li><i class="fas fa-check-circle"></i> Making patient beds and managing linens</li>
        </ul>
      </div>

      <!-- Standard Care Content -->
      <div id="standard-care" class="tab-content">
        <div class="tab-detail-header">
          <h3 class="tab-detail-title"><i class="fas fa-user-nurse tab-detail-icon"></i> Standard Nursing Attendant Duties</h3>
          <p class="tab-detail-desc">Provides bedside care along with medical intervention support under supervision.</p>
        </div>
        <ul class="duty-list">
          <li><i class="fas fa-check-circle"></i> Personal care (bathing, grooming, eating, dressing)</li>
          <li><i class="fas fa-check-circle"></i> Taking vital signs and recording daily logs</li>
          <li><i class="fas fa-check-circle"></i> Turning bed-bound patients to prevent pressure sores</li>
          <li><i class="fas fa-check-circle"></i> Ryles Tube Feeding</li>
          <li><i class="fas fa-check-circle"></i> Cleaning and dressing wounds</li>
          <li><i class="fas fa-check-circle"></i> Oral and Intravenous medication administration</li>
          <li><i class="fas fa-check-circle"></i> Oxygen Care &amp; therapy monitoring</li>
          <li><i class="fas fa-check-circle"></i> Tracheostomy suctioning &amp; care</li>
          <li><i class="fas fa-check-circle"></i> Basic mobility and range-of-motion support</li>
        </ul>
      </div>

      <!-- Critical Care Content -->
      <div id="critical-care" class="tab-content">
        <div class="tab-detail-header">
          <h3 class="tab-detail-title"><i class="fas fa-laptop-medical tab-detail-icon"></i> Critical Nursing Attendant Duties</h3>
          <p class="tab-detail-desc">Handles high-dependency clinical care, critical parameters, and medical devices.</p>
        </div>
        <ul class="duty-list">
          <li><i class="fas fa-check-circle"></i> Intravenous Medication administration</li>
          <li><i class="fas fa-check-circle"></i> IV Fluid management &amp; monitoring</li>
          <li><i class="fas fa-check-circle"></i> Infusion pump &amp; DVT Pumps Management</li>
          <li><i class="fas fa-check-circle"></i> Tracheostomy care &amp; clean suctioning</li>
          <li><i class="fas fa-check-circle"></i> Urinary catheter management and hygiene</li>
          <li><i class="fas fa-check-circle"></i> BiPAP / CPAP support and adjustments</li>
          <li><i class="fas fa-check-circle"></i> Ventilator check-ups &amp; alarms response</li>
          <li><i class="fas fa-check-circle"></i> Stoma Care &amp; bag empty/change</li>
          <li><i class="fas fa-check-circle"></i> Ryles Tube Insertion and Feeding</li>
        </ul>
      </div>
    </div>

    <!-- BOOKING FORM -->
    <div id="booking-section" class="booking-form-wrapper reveal">
      <div class="enquiry-card premium-card booking-card-padding">
        <h3 class="booking-form-title"><i class="fas fa-file-medical"></i> Book Appointment</h3>
        <p class="booking-form-desc">Secure your booking slot. Our coordinator will contact you shortly.</p>
        
        <form action="backend/contact.php" method="POST" id="pricingBookingForm">
          <div class="premium-form-group">
            <label class="premium-form-label">Patient or Guardian Name</label>
            <input type="text" name="name" class="premium-form-input" placeholder="Enter Full Name" required>
          </div>
          
          <div class="premium-form-group">
            <label class="premium-form-label">Phone Number</label>
            <input type="tel" name="phone" class="premium-form-input" placeholder="Enter Contact Number" required>
          </div>
          
          <div class="premium-form-group">
            <label class="premium-form-label">Select Required Service</label>
            <select name="service" id="booking-service-select" class="premium-form-input" required>
              <option value="">-- Select Package --</option>
              <option value="Basic Nursing Care (8 Hours)">Basic Nursing Care (8 Hours) - ₹400/day</option>
              <option value="Basic Nursing Care (12 Hours)">Basic Nursing Care (12 Hours) - ₹600/day</option>
              <option value="Basic Nursing Care (24 Hours)">Basic Nursing Care (24 Hours) - ₹1000/day</option>
              <option value="Nursing Care (8 Hours)">Standard Nursing Care (8 Hours) - ₹600/day</option>
              <option value="Nursing Care (12 Hours)">Standard Nursing Care (12 Hours) - ₹800/day</option>
              <option value="Nursing Care (24 Hours)">Standard Nursing Care (24 Hours) - ₹1500/day</option>
              <option value="Critical Nursing Care (8 Hours)">Critical Nursing Care (8 Hours) - ₹1200/day</option>
              <option value="Critical Nursing Care (12 Hours)">Critical Nursing Care (12 Hours) - ₹2200/day</option>
              <option value="Critical Nursing Care (24 Hours)">Critical Nursing Care (24 Hours) - ₹3200/day</option>
              <option value="Rental ICU Setup at Home">Rental ICU Setup at Home - ₹5000/day</option>
              <option value="Nebulisation (Per Visit)">Nebulisation (Per Visit) - ₹300/visit</option>
              <option value="Physiotherapist (Per Visit)">Physiotherapist (Per Visit) - ₹500/visit</option>
              <option value="Blood Collection">Blood Collection for Home Service - ₹150/visit</option>
              <option value="Medicine Delivery">Medicine Delivery at Home - ₹100/visit</option>
              <option value="Consumables Enquiry">Consumables Enquiry</option>
            </select>
          </div>
          
          <div class="premium-form-group">
            <label class="premium-form-label">Patient Location / Specific Requirements</label>
            <textarea name="message" rows="4" class="premium-form-input" placeholder="Describe the patient's condition, age, and your address..." required></textarea>
          </div>
          
          <button type="submit" class="booking-submit-btn">Confirm Booking Details</button>
        </form>
        <div id="bookingFormMessage" class="form-message booking-message-center"></div>
      </div>
    </div>

  </div>
</section>

<?php
$extra_js = '
<script>
    handleAjaxForm("pricingBookingForm", "bookingFormMessage");

    // Interactive Tab Functions for duties
    function openTab(evt, tabId) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("active");
        }
        tablinks = document.getElementsByClassName("tab-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        document.getElementById(tabId).classList.add("active");
        evt.currentTarget.classList.add("active");
    }

    // Category switch tabs for pricing
    function switchPricingTab(evt, tabId) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("pricing-tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("active");
        }
        tablinks = document.getElementsByClassName("pricing-category-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        document.getElementById(tabId).classList.add("active");
        evt.currentTarget.classList.add("active");
    }

    // Scroll and Pre-select Service
    function selectAndScroll(serviceVal) {
        const selectEl = document.getElementById("booking-service-select");
        if(selectEl) {
            selectEl.value = serviceVal;
        }
        const targetSection = document.getElementById("booking-section");
        if(targetSection) {
            targetSection.scrollIntoView({ behavior: "smooth" });
        }
    }
</script>
';
include 'includes/footer.php';
?>
