<?php get_header(); ?>

<!-- Form Section -->
<section class="quote-form-sec animate__animated animate__fadeInUp page-contact">
  <div class="auto-container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="video-sec">
          <div class="play-btn"><a href="https://www.youtube.com/watch?v=EgQ3n5CDLPQ" target="_blank"><i class="fa fa-play"></i></a></div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/form-img.jpg" class="img-fluid" alt="">
        </div>
      </div>
      <div id="quote-form" class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-up">

        <div class="theme-heading-sec">
          <p>Get a quote</p>
          <h2>Use our form to get Admission</h2>
        </div>

        <div class="quote-form-wrapper" >
        <form action="/action_page.php">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
            </div>

            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
            </div>

           <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Phone">
            </div>

            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter State">
            </div>

            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your City">
            </div>

            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Qualification">
            </div>

            <div class="col-xl-12 col-lg-12 col-md-4 form-group">
              <input type="submit" class="form-control" name="submit" value="Submit">
            </div>
      
          </div>
      </form>
    </div>
      </div>
    </div>
  </div>
</section>

<!-- insert map -->
<!-- using a responsive iframe -->
<div class="responsive-map-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d499563.8606287806!2d85.28871845350251!3d20.963939301067295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a18d69bddba1f0b%3A0xb62e917b9798580a!2sSub-Divisional%20Head%20Post%20Office!5e0!3m2!1sen!2sin!4v1720203690690!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /insert map -->

<?php get_footer(); ?>