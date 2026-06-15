<?php
$page_title = "Our Services - Aparajita Health Kavach";
$active_page = "service";
$extra_css = '
<style>
    .services-detailed {
        padding: 5rem 0;
        background: #f8fafc;
    }
    .services-detailed-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 2.5rem;
        margin-top: 1rem;
    }
    .service-card-detailed {
        background: #ffffff;
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(30, 60, 114, 0.03);
        border: 1px solid rgba(30, 60, 114, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    .service-card-detailed::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, #ff4757, #1e3c72);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .service-card-detailed:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(30, 60, 114, 0.1);
        border-color: rgba(30, 60, 114, 0.1);
    }
    .service-card-detailed:hover::before {
        opacity: 1;
    }
    .service-card-detailed .service-icon {
        width: 65px;
        height: 65px;
        background: linear-gradient(135deg, rgba(255, 71, 87, 0.1) 0%, rgba(30, 60, 114, 0.1) 100%);
        color: #ff4757;
        border-radius: 12px;
        display: grid;
        place-items: center;
        font-size: 1.8rem;
        margin: 0 0 1.5rem 0;
        transition: all 0.3s ease;
    }
    .service-card-detailed:hover .service-icon {
        background: linear-gradient(135deg, #ff4757 0%, #1e3c72 100%);
        color: #ffffff;
        transform: scale(1.05) rotate(5deg);
    }
    .service-info h3 {
        font-size: 1.4rem;
        color: #1e3c72;
        margin-bottom: 0.8rem;
        font-weight: 700;
    }
    .service-info p {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    .service-info ul {
        list-style: none;
        padding: 0;
        margin: 0 0 2rem 0;
    }
    .service-info ul li {
        font-size: 0.92rem;
        color: #475569;
        margin-bottom: 0.6rem;
        display: flex;
        align-items: center;
        gap: 0.65rem;
    }
    .service-info ul li i {
        color: #10b981;
        font-size: 0.95rem;
    }
    .service-card-action {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #ff4757;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.95rem;
        transition: gap 0.2s ease, color 0.2s ease;
        margin-top: auto;
    }
    .service-card-detailed:hover .service-card-action {
        color: #1e3c72;
        gap: 0.8rem;
    }
    @media (max-width: 768px) {
        .services-detailed {
            padding: 3.5rem 0;
        }
        .services-detailed-grid {
            gap: 1.8rem;
        }
        .service-card-detailed {
            padding: 1.8rem;
        }
    }
</style>
';
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Our Healthcare Services</h1>
        <p>Comprehensive medical care delivered at your doorstep</p>
    </div>
</section>

<section class="services-detailed">
    <div class="container">
        <div class="services-detailed-grid">

            <!-- Card 1 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-user-nurse"></i>
                </div>
                <div class="service-info">
                    <h3>Home Nursing Care</h3>
                    <p>24/7 professional nursing care at home including wound care, medication management, and patient monitoring. Our trained nurses are available for shift-based or full-time care.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Post-operative care</li>
                        <li><i class="fas fa-check-circle"></i> Chronic disease management</li>
                        <li><i class="fas fa-check-circle"></i> Bedside assistance</li>
                        <li><i class="fas fa-check-circle"></i> Medical equipment handling</li>
                    </ul>
                </div>
                <a href="home-nursing-care.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 2 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <div class="service-info">
                    <h3>Elderly Care (60+ Years)</h3>
                    <p>Specialized care for senior citizens focusing on their physical, emotional, and medical needs. Regular health monitoring, medicine reminders, and companionship.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Daily routine assistance</li>
                        <li><i class="fas fa-check-circle"></i> Medication management</li>
                        <li><i class="fas fa-check-circle"></i> Fall prevention</li>
                        <li><i class="fas fa-check-circle"></i> Memory care for dementia</li>
                    </ul>
                </div>
                <a href="elderly-care.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 3 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-laptop-medical"></i>
                </div>
                <div class="service-info">
                    <h3>Home ICU Setup</h3>
                    <p>Hospital-grade ICU facility at home with advanced medical equipment and trained critical care nurses. Available in Patna and nearby areas.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Ventilator support</li>
                        <li><i class="fas fa-check-circle"></i> Cardiac monitoring</li>
                        <li><i class="fas fa-check-circle"></i> Infusion pumps</li>
                        <li><i class="fas fa-check-circle"></i> 24/7 critical care nurse</li>
                    </ul>
                </div>
                <a href="home-icu-setup.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 4 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-walking"></i>
                </div>
                <div class="service-info">
                    <h3>Physiotherapy at Home</h3>
                    <p>Professional physiotherapy sessions at home for recovery from surgery, stroke, or chronic pain conditions.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Post-stroke rehabilitation</li>
                        <li><i class="fas fa-check-circle"></i> Joint pain therapy</li>
                        <li><i class="fas fa-check-circle"></i> Sports injury recovery</li>
                        <li><i class="fas fa-check-circle"></i> Geriatric physiotherapy</li>
                    </ul>
                </div>
                <a href="physiotherapy-at-home.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 5 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-flask"></i>
                </div>
                <div class="service-info">
                    <h3>Lab Tests at Home</h3>
                    <p>Convenient sample collection from home for various diagnostic tests with accurate and timely reports.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Blood tests</li>
                        <li><i class="fas fa-check-circle"></i> Urine analysis</li>
                        <li><i class="fas fa-check-circle"></i> COVID-19 testing</li>
                        <li><i class="fas fa-check-circle"></i> Health checkup packages</li>
                    </ul>
                </div>
                <a href="lab-tests-at-home.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 6 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-couch"></i>
                </div>
                <div class="service-info">
                    <h3>Home Medical Equipment</h3>
                    <p>Rental and sale of medical equipment for home use with delivery and setup support.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Oxygen cylinders &amp; concentrators</li>
                        <li><i class="fas fa-check-circle"></i> Hospital beds</li>
                        <li><i class="fas fa-check-circle"></i> Wheelchairs &amp; walkers</li>
                        <li><i class="fas fa-check-circle"></i> CPAP/BiPAP machines</li>
                    </ul>
                </div>
                <a href="medical-equipment.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 7 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-baby-carriage"></i>
                </div>
                <div class="service-info">
                    <h3>Child Care Services</h3>
                    <p>Professional childcare support including newborn care, nanny services, and pediatric nursing.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Newborn baby care</li>
                        <li><i class="fas fa-check-circle"></i> Nanny services</li>
                        <li><i class="fas fa-check-circle"></i> Child development monitoring</li>
                        <li><i class="fas fa-check-circle"></i> Pediatric home nursing</li>
                    </ul>
                </div>
                <a href="child-care.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 8 -->
            <div class="service-card-detailed">
                <div class="service-icon">
                    <i class="fas fa-broom"></i>
                </div>
                <div class="service-info">
                    <h3>House Cleaning &amp; Sanitization</h3>
                    <p>Professional cleaning and disinfection services for patient rooms and entire homes.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Deep cleaning services</li>
                        <li><i class="fas fa-check-circle"></i> Hospital-grade sanitization</li>
                        <li><i class="fas fa-check-circle"></i> Patient room disinfection</li>
                        <li><i class="fas fa-check-circle"></i> Regular housekeeping</li>
                    </ul>
                </div>
                <a href="house-cleaning-sanitization.php" class="service-card-action">Learn More &amp; Book <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
