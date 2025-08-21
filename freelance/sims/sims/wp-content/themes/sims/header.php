<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sikhar Institute of Medical Sciences (SIMS)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/hover.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/aos.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="icon" type="image/jpg" href="<?php bloginfo('template_directory'); ?>/assets/img/sims-new-logo.png" />
</head>

<body>
<div class="preloader">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/bit.gif">
</div>
<!--Topbar section-->
<section class="topbar-sec">
  <div class="container">
    <div class="row">
      <a href="<?php echo home_url('/'); ?>" class="navbar-brand" >        
       <img src="<?php bloginfo('template_directory'); ?>/assets/img/sims-new-logo.png" class="img-fluid" alt="logo">      
      </a>
        
      <div class="menu-title"><p>Sikhar Institute of Medical Sciences (SIMS)</p></div>
        
      <div class="topbar-contact-section">
        <div class="call-wrapper">
          <div class="topbar-icon-sec">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-phone.svg" class="img-fluid" alt="phone-icon">
          </div>
          <div class="topbar-cont-dtls-sec">
            <span>Call Us</span>
            <a href="tel:+91 <?php echo esc_attr(get_option('sims_phone') ); ?>"> +91 <?php echo esc_attr(get_option('sims_phone') ); ?></a>
          </div>
        </div>

        <div class="email-wrapper">
          <div class="topbar-icon-sec">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/open-email.svg" class="img-fluid" alt="mail-icon">
          </div>
          <div class="topbar-cont-dtls-sec">
            <span>Email Us</span>
            <a href="mailto:<?php echo esc_attr(get_option('sims_email') ); ?>"><?php echo esc_attr(get_option('sims_email') ); ?></a>
          </div>
        </div>

        <div class="location-wrapper">
          <div class="social-ic-sec">
            <a href="<?php echo esc_attr(get_option('sims_facebook') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo esc_attr(get_option('sims_twitter') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo esc_attr(get_option('sims_lindin') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="<?php echo esc_attr(get_option('sims_insta') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!---Header section--->


  <header id="header">
    <div class="container">

      <div class="row">
        <div class="col-xl-12 theme-inner-header">
          
         <a href="<?php echo home_url('/'); ?>" class="logo mr-auto navbar-brand"><img src="" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
          </nav>
            <div class="mob-menu-area"></div>
          <div class="request-quote-btn-wrapper">
            <a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </header>
<div class="social-sec-sticky">
    <a href="<?php echo esc_attr(get_option('sims_facebook') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-facebook"></i></a>
    <a href="<?php echo esc_attr(get_option('sims_twitter') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-twitter"></i></a>
    <a href="<?php echo esc_attr(get_option('sims_lindin') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="<?php echo esc_attr(get_option('sims_insta') ); ?>" class="hvr-rotate" traget="_blank"><i class="fa fa-instagram"></i></a>
</div>
  <?php wp_head(); ?>