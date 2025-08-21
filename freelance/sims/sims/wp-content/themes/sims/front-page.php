<?php get_header(); ?>

<!---Banner section--->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
	<li data-target="#demo" data-slide-to="2"></li>
  </ul>
    <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/banner-slider/banner1.jpg');">
      <div class="container">
        <div class="banner-caption">
        <h1 class="animate__animated animate__fadeInDown">Transform Your Future at (SIMS)</h1>
        <p class="animate__animated animate__fadeInUp">Welcome to Sikhar Institute of Medical Sciences (SIMS) – The Leading DMLT College in Odisha. Transform Your Future with Expert Education, Modern Facilities, and Hands-On Training. Enroll Today!</p>
        <a href="<?php echo home_url('/admission'); ?>" class="theme-btn hvr-bounce-to-right banner-btn animate__animated animate__fadeInUp" id="get-quote">Admission Enquiry</a>
        </div>
      </div>
    </div>
     <div class="carousel-item " style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/banner-slider/banner2.jpg');">
      <div class="container">
        <div class="banner-caption">
       <h1 class="animate__animated animate__fadeInDown">Excellence in DMLT Education</h1>
        <p class="animate__animated animate__fadeInUp">Join Sikhar Institute of Medical Sciences (SIMS) – Odisha’s Top DMLT College. Achieve Excellence with Expert Faculty, Cutting-Edge Facilities, and Comprehensive Training. Start Your Journey Now!</p>
        <a href="<?php echo home_url('/admission'); ?>" class="theme-btn hvr-bounce-to-right banner-btn animate__animated animate__fadeInUp" id="get-quote">Admission Enquiry</a>
        </div>
      </div>
    </div>
  <div class="carousel-item " style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/banner-slider/banner3.jpg');">
      <div class="container">
        <div class="banner-caption">
       <h1 class="animate__animated animate__fadeInDown">Leading the Way in DMLT Education</h1>
        <p class="animate__animated animate__fadeInUp">"Discover Sikhar Institute of Medical Sciences (SIMS): Your Path to Excellence in DMLT Education. Explore Advanced Facilities, Experienced Faculty, and Opportunities for Professional Growth. Enroll Today!"</p>
        <a href="<?php echo home_url('/admission'); ?>" class="theme-btn hvr-bounce-to-right banner-btn animate__animated animate__fadeInUp" id="get-quote">Admission Enquiry</a>
        </div>
      </div>
    </div> 	
  </div>
  
  <div class="carousel-control-btn-sec">
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <i class="fa fa-chevron-right"></i>
  </a>
</div>
</div>

<!-- About Us section -->
<section class="about-sec">
  <div class="auto-container">
    <div class="row">
 <div class="col-xl-6 col-lg-6" data-aos="zoom-in" data-aos-duration="1500"> 
     <div class="about-sec-thumb">
	  <img src="<?php bloginfo('template_directory'); ?>/assets/img/DMLT-Students.jpg" class="img-fluid">
	 </div>
 
      </div>

      <div class="col-xl-6 col-lg-6 about-content" data-aos="fade-down">
        <div class="theme-heading-sec">
          <p>Welcome To</p>
          <h2>Sikhar Institute of Medical Sciences (SIMS)</h2>
        </div>

        <div class="about-content-sec">
          <h5>SIMS is a NRI venture with unique value propositions:</h5>
          <p>At Sikhar Institute of Medical Sciences (SIMS), we are dedicated to shaping the future of healthcare through excellence in education and training. As the premier DMLT college in Odisha, we offer a comprehensive curriculum, state-of-the-art facilities, and a team of experienced faculty members committed to your success. Join us to embark on a rewarding journey in medical laboratory technology, where you will gain the skills and knowledge needed to excel in your career and make a significant impact in the healthcare industry. Welcome to SIMS, where your future begins.</p>
        
          <a href="<?php echo home_url('/about-us'); ?>" class="theme-btn hvr-bounce-to-right">Know More</a>
        </div>

      </div>
     

    </div>
  </div>
</section>

<!-- Courses Section -->
<section class="course-section">
 <div class="auto-container">
   <div class="row">
       <div class="col-xl-12" data-aos="fade-down">
        <div class="theme-heading-sec">
          <p>You Can Learn</p>
          <h2>Popular Courses</h2>
        </div>
      </div>
	  <div class="owl-carousel course-slider" data-aos="fade-up">

    <?php $i = 1;      
        $query_args = array (
        'post_type' => 'courses', 
        'posts_per_page' => -1,
        'order' => 'ASC',
    );
    $loop = new WP_Query($query_args);
    if($loop->have_posts()) {	while($loop->have_posts()) { $loop->the_post();
     
	?>

     <div class="item">
	     <div class="course-box">
			<div class="course-box-image"> 
				<div class="course-process-image">
                    <?php the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
					<div class="course-num">01</div>
				</div>								
			</div>
		   <div class="course-box-content">
			     <div class="course-box-title"><h5><?php the_title(); ?></h5></div>
				<div class="course-box-description"><?php echo wp_trim_words( get_the_content(), 8); ?></div>
			</div>
		</div>
	  </div>

      <?php $i++; } } ?>  
   </div>
   <a href="<?php echo get_post_type_archive_link('courses'); ?>" class="theme-btn hvr-bounce-to-right">View All Departments</a>
 </div>
</section>

<section id="review" class="testimonial-sec">
  <div class="auto-container">
    <div class="row">

      <!--------News Section--->
<div class="col-xl-5 col-lg-6 news-upcoming">
        <div class="site-heading">
          <h4>Event / Placements / Notice / Result</h4>
        </div>
        <div class="news-wrapper">
          <marquee direction = "up" onMouseOver="this.stop()" onMouseOut="this.start()">
            <ul>
            <?php $i = 1;      
              $query_args = array (
				      'post_type' => 'notice',
              'posts_per_page' => -1,
              'order' => 'DESC',
				);
				$loop = new WP_Query($query_args);
				if($loop->have_posts()) {	while($loop->have_posts()) { $loop->the_post();   
			    ?>
                <li>
                  <a href="<?php echo get_the_permalink(); ?>" class="more-content"><?php the_title(); ?></a> 
                  <span class="date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> 
                    <?php echo ((get_post_meta($loop->post->ID,'notice_date',true))); ?>
                  </span>
                </li>
                <?php $i++; } } ?>
                
                <!-- <li><a href="#" class="more-content">1st and 2nd Sem. result 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 24th Oct 2023</span></li>
                <li><a href="#" class="more-content">New Batch Admission for - 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20th Dec. 2023</span></li>
                <li><a href="#" class="more-content">1st and 2nd Sem. result 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 24th Oct 2023</span></li>
                <li><a href="#" class="more-content">New Batch Admission for - 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20th Dec. 2023</span></li>
                <li><a href="#" class="more-content">1st and 2nd Sem. result 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 24th Oct 2023</span></li>
                <li><a href="#" class="more-content">New Batch Admission for - 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20th Dec. 2023</span></li>
                <li><a href="#" class="more-content">1st and 2nd Sem. result 2023</a> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 24th Oct 2023</span></li> -->
            </ul>
        </marquee>
        </div>
		<a href="" class="news-box-btn hvr-bounce-to-right">View More</a>
      </div> 

      <div class="col-xl-7 col-lg-6">
        <div class="testimonial-area">

        <div class="theme-heading-sec" data-aos="fade-down">
          <p>Testimonials </p>
          <h2>What Our Happy Student Say</h2>
        </div>

        <div class="owl-carousel testimonial-carousel" data-aos="fade-down">

          
           <div class="item">
            <div class="testimonial-wrapper">
                <div class="testimonial-content-sec">
                  <p>"My name is Pradeep Kumar Nayak, and I recently enrolled in the DMLT course at Sikhar Institute of Medical Sciences (SIMS). This college truly excels in providing top-notch education and comprehensive training. I'm confident I made the best choice for my studies."</p>
                </div>

                <div class="testimonial-bottom-sec">
                  <div class="testimonial-img-sec"><img src="<?php bloginfo('template_directory'); ?>/assets/img/pradeep.jpg" class="img-fluid" alt="client-img"></div>
                  <div class="testimonial-title-sec"><h5>Pradeep Kumar Nayak</h5><p>Bhadrak, Batch 2024</p></div>
                </div>

            </div>
          </div> 

         
           <div class="item">
            <div class="testimonial-wrapper">
                <div class="testimonial-content-sec">
                  <p>"My name is Srikant Dash, and I'm a student in the DMLT course at Sikhar Institute of Medical Sciences (SIMS). The quality of education and the dedication of the faculty here are outstanding. I'm proud to be a part of such a prestigious institution."</p>
                </div>

                <div class="testimonial-bottom-sec">
                  <div class="testimonial-img-sec"><img src="<?php bloginfo('template_directory'); ?>/assets/img/srikant.jpg" class="img-fluid" alt="client-img"></div>
                  <div class="testimonial-title-sec"><h5>Srikant Dash</h5><p>Bhadrak, Batch 2024</p></div>
                </div>

            </div>
          </div> 

        </div>
        <a href="#" class="theme-btn hvr-bounce-to-right">View All Reviews</a>
        </div>
      </div>
    </div>
    
  </div>
</section> 

<!-- Our Top Recruiters Section -->
<section class="recruiters-sec" data-aos="fade-up">
  <div class="auto-container">
    <div class="row">
	 <div class="col-xl-12">
        <div class="theme-heading-sec">
          <p>Placement</p>
          <h2>Our Top Recruiters</h2>
        </div>
      </div>
      <div class="col-xl-12">

        <div class="owl-carousel recruiters-carousel">

          <div class="item">
            <div class="recruiters-wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/apollo.png" class="img-fluid" alt="apollo" title="apollo"></div>
          </div>

          <div class="item">
            <div class="recruiters-wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/idiraivf.png" class="img-fluid" alt="idiraivf" title="idiraivf"></div>
          </div>

          <div class="item">
            <div class="recruiters-wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/redcliffe.webp" class="img-fluid" alt="redcliffe" title=""></div>
          </div>

          <div class="item">
            <div class="recruiters-wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/hemalata.png" class="img-fluid" alt="hemalata" title="hemalata"></div>
          </div>

          <div class="item">
            <div class="recruiters-wrapper">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/lal-pathlab.webp" class="img-fluid" alt="lal-pathlab" title="lal-pathlab"></div>
          </div>
          
          <div class="item">
            <div class="recruiters-wrapper">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/genx.webp" class="img-fluid" alt="Genx" title="Genx"></div>
          </div>
        </div>

    </div>
  </div>

  </div>
</section>

<!-- Form Section -->
<section class="quote-form-sec animate__animated animate__fadeInUp">
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

<?php echo do_shortcode('[contact-form-7 id="798d2cd" title="Contact form 1"]'); ?>
      
    </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>