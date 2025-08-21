<footer>
  <div class="container">

    <div class="row footer-link-wrapper">

      <!--Footer about & social section-->

      <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="about-business-wrapper">
          <div class="footer-logo">
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/img/sims-new-white-logo.png" class="img-fluid" alt="footer-logo"></a>
          </div>
          <p><?php echo esc_attr(get_option('sims_footer_paragraph') ); ?></p>
        </div>
      </div>

      <!--Footer quick link section-->

      <div class="col-xl-5 col-lg-8 col-md-7 col-sm-7">
        <div class="row">

        <!--Footer service link section-->

          <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="quick-links-wrapper">
              <h4>Quick Links</h4>
              <?php wp_nav_menu(array('theme_location' => 'secondary', 'container' => false, 'menu_class' => 'footer-nav')); ?>
            </div>
          </div>
        </div>
      </div>

      <!--Footer Recent Post section-->

      <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5">
        <div class="open-hrs-wrapper">
          <h4>Corporate Office:</h4>
          <div class="footer-openhrs">
            <p><?php echo esc_attr(get_option('sims_address') ); ?></p>
            <ul>
              <li><i class="fa fa-phone"></i><a href="tel:<?php echo esc_attr(get_option('sims_phone') ); ?>">+91 <?php echo esc_attr( get_option('sims_phone') ); ?></a></li>
              <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_attr(get_option('sims_email') ); ?>"> <?php echo esc_attr(get_option('sims_email') ); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticky-icons">
    <a href="https://wa.me/+919853818255?text=have a inquiry" class="whatsapp-icon" target="_blank"><i class="fa fa-whatsapp"></i><small>Chat with Us</small></a>
  </div>
</footer>

    <!--Footer copyright section-->
<footer class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="copyright-wrapper">
        <p>© 2023 Sikhar Institute of Medical Sciences (SIMS) || All Rights Reserved</p>
        <p>Created by <a href="https://webgiant.in" class="author-link" target="blank">Webgiant</a></p>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-caret-up"></i></a>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-ui.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/aos.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script>
	   $(window).on('load', function () {
        $('.preloader').fadeOut(700);
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
