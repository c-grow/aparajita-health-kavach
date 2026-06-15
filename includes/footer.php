  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Aparajita Health Kavach</h3>
          <p>Trusted home healthcare service provider in Patna & Bihar</p>
        </div>
        <div class="footer-section">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Contact</h4>
          <p><i class="fas fa-phone"></i> +91 98765 43210</p>
          <p><i class="fas fa-envelope"></i> care@aparajitahealth.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Patna, Bihar</p>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> Aparajita Health Kavach. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script.js?v=<?php echo filemtime('script.js'); ?>"></script>
  <?php if (isset($extra_js)) echo $extra_js; ?>
</body>
</html>
