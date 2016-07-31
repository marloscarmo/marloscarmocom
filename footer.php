    <?php
    if (!is_single()) {
    ?>

    <footer>
      <div class="container">
        <div class="footer-contact">
          <span class="footer-label">mail to:</span><br>
          <a href="mailto:marlos@marloscarmo.com">marlos@marloscarmo.com</a>
        </div>
        <div class="footer-social">
          <a class="social-icons icon-linkedin" href="#"></a>
          <a class="social-icons icon-github" href="#"></a>
          <a class="social-icons icon-twitter" href="#"></a>
        </div>
      </div>
    </footer>

    <?php
    }
    ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  </body>
</html>
