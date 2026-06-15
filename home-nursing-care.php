<?php
$page_title = "Home Nursing Care - Aparajita Health Kavach";
include 'includes/header.php';
?>

<section class="page-header">
  <div class="container">
    <h1>Home Nursing Care</h1>
    <p>Skilled 24/7 home nursing support for faster recovery and peace of mind</p>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header" style="margin-bottom:2rem; padding:0; max-width: 900px;">
      <div class="eyebrow">A-Z Service Details</div>
      <h2>Everything You Need, At Your Doorstep</h2>
      <p>Post-surgery recovery, medication management, wound care, and daily monitoring—our trained nurses help you maintain comfort and safety at home.</p>
    </div>

    <div class="feature-grid" style="margin-top:1.5rem;">
      <div class="feature-card" style="text-align:left;">
        <i class="fas fa-notes-medical"></i>
        <h3>What We Do</h3>
        <p>
          • Wound care & dressing changes<br>
          • Medication administration & reminders<br>
          • Vital monitoring (BP, sugar, pulse as required)<br>
          • Patient hygiene support and comfort care<br>
          • Post-operative care and rehabilitation support
        </p>
      </div>

      <div class="feature-card" style="text-align:left;">
        <i class="fas fa-user-nurse"></i>
        <h3>Who Benefits</h3>
        <p>
          • Patients recovering from surgery<br>
          • Chronic illness patients needing daily support<br>
          • Senior citizens requiring supervision & assistance<br>
          • Bedridden or mobility-limited patients
        </p>
      </div>

      <div class="feature-card" style="text-align:left;">
        <i class="fas fa-clipboard-check"></i>
        <h3>Care Process</h3>
        <p>
          1) Enquiry & requirement assessment<br>
          2) Nurse availability & schedule confirmation<br>
          3) Home setup guidance (as required)<br>
          4) Daily care plan and monitoring
        </p>
      </div>

      <div class="feature-card" style="text-align:left;">
        <i class="fas fa-user-clock"></i>
        <h3>Service Options</h3>
        <p>
          • Shift-based nursing (day/evening/night)<br>
          • Full-time nursing support<br>
          • Emergency visit support (as per availability)
        </p>
      </div>

      <div class="feature-card" style="text-align:left;">
        <i class="fas fa-kit-medical"></i>
        <h3>We Support With</h3>
        <p>
          • Basic medical care routines at home<br>
          • Coordination with family for medication timing<br>
          • Guidance on hygiene, cleanliness, and safe handling
        </p>
      </div>

      <div class="feature-card" style="text-align:left;">
        <i class="fas fa-shield-virus"></i>
        <h3>Why Aparajita Health Kavach</h3>
        <p>
          • Trained and experienced nurses<br>
          • Patient-first approach and safety focus<br>
          • Regular updates to family regarding care progress
        </p>
      </div>
    </div>

    <!-- TABS SECTION FOR CAREGIVER DUTIES -->
    <div class="tabs-container">
      <div class="section-header tabs-section-header">
        <div class="eyebrow">Attendant Duties</div>
        <h2>What Our Caregivers Do</h2>
        <p>Compare duties and select the right support tier for your loved ones.</p>
      </div>

      <div class="tabs-header">
        <button class="tab-btn active" onclick="openTab(event, 'basic-care')">Basic Nursing Attendant</button>
        <button class="tab-btn" onclick="openTab(event, 'standard-care')">Standard Nursing Attendant</button>
        <button class="tab-btn" onclick="openTab(event, 'critical-care')">Critical Nursing Attendant</button>
      </div>

      <!-- Basic Care Content -->
      <div id="basic-care" class="tab-content active">
        <div class="tab-detail-header">
          <h3 class="tab-detail-title"><i class="fas fa-heartbeat tab-detail-icon"></i> Basic Nursing Attendant</h3>
          <p class="tab-detail-desc">Focuses on daily living assistance, hygiene maintenance, and general patient care.</p>
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
          <h3 class="tab-detail-title"><i class="fas fa-user-nurse tab-detail-icon"></i> Standard Nursing Attendant</h3>
          <p class="tab-detail-desc">Provides general bedside nursing care alongside medical support routines.</p>
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
          <h3 class="tab-detail-title"><i class="fas fa-laptop-medical tab-detail-icon"></i> Critical Nursing Attendant</h3>
          <p class="tab-detail-desc">Handles advanced clinical care, medical device monitoring, and high-dependency patients.</p>
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

    <!-- PRICING LIST SECTION -->
    <div class="pricing-section-wrapper" id="pricing-packages">
      <div class="section-header tabs-section-header">
        <div class="eyebrow">Affordable Rates</div>
        <h2>Price List for Nursing &amp; Home Care</h2>
        <p>Choose from our transparently priced plans for home nursing and wellness visits.</p>
      </div>

      <div class="pricing-table-container">
        <table class="pricing-table">
          <thead>
            <tr>
              <th class="col-sl">Sl. No.</th>
              <th>Services</th>
              <th>Amount</th>
              <th class="col-action">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="cell-sl">1</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Basic Nursing Care (8 Hours)</a></strong></td>
              <td><span class="cell-amount">₹400.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Basic Nursing Care (8 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">2</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Basic Nursing Care (12 Hours)</a></strong></td>
              <td><span class="cell-amount">₹600.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Basic Nursing Care (12 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">3</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Basic Nursing Care (24 Hours)</a></strong></td>
              <td><span class="cell-amount">₹1,000.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Basic Nursing Care (24 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">4</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Nursing Care (8 Hours)</a></strong></td>
              <td><span class="cell-amount">₹600.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Nursing Care (8 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">5</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Nursing Care (12 Hours)</a></strong></td>
              <td><span class="cell-amount">₹800.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Nursing Care (12 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">6</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Nursing Care (24 Hours)</a></strong></td>
              <td><span class="cell-amount">₹1,500.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Nursing Care (24 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">7</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Critical Nursing Care (8 Hours)</a></strong></td>
              <td><span class="cell-amount">₹1,200.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Critical Nursing Care (8 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">8</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Critical Nursing Care (12 Hours)</a></strong></td>
              <td><span class="cell-amount">₹2,200.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Critical Nursing Care (12 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">9</td>
              <td><strong><a href="home-nursing-care.php" class="pricing-link">Critical Nursing Care (24 Hours)</a></strong></td>
              <td><span class="cell-amount">₹3,200.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Critical Nursing Care (24 Hours)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">10</td>
              <td><strong><a href="home-icu-setup.php" class="pricing-link">Rental ICU Setup at Home (24 Hours)</a></strong></td>
              <td><span class="cell-amount">₹5,000.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Rental ICU Setup at Home')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">11</td>
              <td><strong><a href="service.php" class="pricing-link">Nebulisation (Per Visit)</a></strong></td>
              <td><span class="cell-amount">₹300.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Nebulisation (Per Visit)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">12</td>
              <td><strong><a href="physiotherapy-at-home.php" class="pricing-link">Physiotherapist (Per Visit)</a></strong></td>
              <td><span class="cell-amount">₹500.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Physiotherapist (Per Visit)')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">13</td>
              <td><strong><a href="lab-tests-at-home.php" class="pricing-link">Blood Collection for Home Service (Per Visit)</a></strong></td>
              <td><span class="cell-amount">₹150.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Blood Collection')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">14</td>
              <td><strong><a href="service.php" class="pricing-link">Medicine Delivery at Home (Per Visit)</a></strong></td>
              <td><span class="cell-amount">₹100.00/-</span> *</td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Medicine Delivery')">Book Now</button></td>
            </tr>
            <tr>
              <td class="cell-sl">15</td>
              <td><strong><a href="medical-equipment.php" class="pricing-link">Consumables</a></strong></td>
              <td><span class="pricing-badge">MRP Rates</span></td>
              <td class="cell-center"><button class="buy-btn" onclick="selectAndScroll('Consumables Enquiry')">Enquire</button></td>
            </tr>
            <tr>
              <td class="cell-sl">16</td>
              <td><strong><a href="service.php" class="pricing-link">Air Ambulance</a></strong></td>
              <td><span class="pricing-badge badge-danger">Call for Price</span></td>
              <td class="cell-center"><a href="tel:+919876543210" class="buy-btn btn-coral-red">Call Now</a></td>
            </tr>
          </tbody>
        </table>
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

    <!-- SLEEK BOOKING FORM -->
    <div id="booking-section" class="booking-form-wrapper reveal">
      <div class="enquiry-card premium-card booking-card-padding">
        <h3 class="booking-form-title"><i class="fas fa-file-medical"></i> Book Appointment</h3>
        <p class="booking-form-desc">Secure your booking slot. Our coordinator will contact you shortly.</p>
        
        <form action="backend/contact.php" method="POST" id="nursingBookingForm">
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
    handleAjaxForm("nursingBookingForm", "bookingFormMessage");

    // Interactive Tab Functions
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
