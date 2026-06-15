<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : "Aparajita Health Kavach | Home Nursing & Elderly Care Patna"; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">
        <img src="Image/Logo.png" alt="Aparajita Health Kavach logo">
        <div>
          <h1>Aparajita <span>Health Kavach</span></h1>
          <p>हर घर स्वास्थ्य, हर जीवन सुरक्षित</p>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="index.php" class="<?php echo (isset($active_page) && $active_page === 'home') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="service.php" class="<?php echo (isset($active_page) && $active_page === 'service') ? 'active' : ''; ?>">Services</a></li>
          <li><a href="pricing.php" class="<?php echo (isset($active_page) && $active_page === 'pricing') ? 'active' : ''; ?>">Pricing</a></li>
          <li><a href="gallery.php" class="<?php echo (isset($active_page) && $active_page === 'gallery') ? 'active' : ''; ?>">Gallery</a></li>
          <li><a href="comfort-living.php" class="<?php echo (isset($active_page) && $active_page === 'comfort-living') ? 'active' : ''; ?>">Comfort Living</a></li>
          <li><a href="contact.php" class="<?php echo (isset($active_page) && $active_page === 'contact') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
      </nav>
      <div class="mobile-menu">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </header>
