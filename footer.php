    <footer id="contact" class="footer">
      <div class="container">
        <div class="footer-cta">
          <div>
            <span class="section-number">06</span>
            <p class="eyebrow">Let’s work together</p>
            <h2>Ready to build something great?</h2>
          </div>
          <a href="<?php echo $linkedin_url; ?>" class="btn btn-primary" target="_blank" rel="noopener">Connect on LinkedIn</a>
        </div>
        <div class="footer-contact">
          <a href="mailto:<?php echo $email; ?>" class="footer-contact-item">
            <span class="footer-contact-label">Email</span>
            <span><?php echo $email; ?></span>
          </a>
          <a href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>" class="footer-contact-item">
            <span class="footer-contact-label">Phone</span>
            <span><?php echo $phone; ?></span>
          </a>
          <div class="footer-contact-item">
            <span class="footer-contact-label">Location</span>
            <span><?php echo $location; ?></span>
          </div>
        </div>
        <div class="footer-bottom">
          <span>&copy; <?php echo date('Y'); ?> <?php echo $name; ?>. All rights reserved.</span>
          <a href="#home" class="back-to-top">Back to top ↑</a>
        </div>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
