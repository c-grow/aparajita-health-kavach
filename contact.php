<?php
$page_title = "Contact Us - Aparajita Health Kavach";
$active_page = "contact";
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with us for any healthcare needs</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Call Us 24/7</h3>
                        <p>+91 98765 43210<br>+91 620 123 4567</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>care@aparajitahealthkavach.com<br>info@aparajitahealth.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Visit Us</h3>
                        <p>Main Office: Patrakar Nagar, Old Kankarbagh Gate No - 15, Near RNB Udhyog Patna - 800020<br>Service Available Across Bihar</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h3>Working Hours</h3>
                        <p>24/7 Emergency Services<br>Office Hours: 9 AM - 7 PM</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form action="backend/contact.php" method="POST" id="contactForm">
                    <input type="text" name="name" placeholder="Your Full Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
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
                        <option>House Cleaning</option>
                    </select>
                    <textarea name="message" rows="5" placeholder="Your Message / Location in Bihar" required></textarea>
                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
                <div id="formMessage" style="margin-top: 1rem;"></div>
            </div>
        </div>
    </div>
</section>

<?php
$extra_js = '<script>handleAjaxForm("contactForm", "formMessage");</script>';
include 'includes/footer.php';
?>
