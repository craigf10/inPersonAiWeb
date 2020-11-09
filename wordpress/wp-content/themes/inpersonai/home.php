<?php /* Template Name: Home */ ?>

  <?php get_header(); ?>

  <body>

    <!-- Modal Contact -->
    <?php include('inc/modal-contact.php'); ?>

    <div class="mob_nav__ham_menu_container mob_nav__home">
      <div class="mob_nav__ham_icon"></div>
    </div>

    <div class="mob_nav__menu_overlay">
      <ul>
        <li><a href="<?php echo get_permalink( 2 ); ?>">Home</a></li>
        <li><a href="https://virtual-visits.co.uk/visits/" target="_blank">Explore the Visits</a></li>
        <li class="mobile-nav__btn"><button class="button button__blue contact-button-modal">Learn more</button></li>
      </ul>
    </div>


    <!-- Hero -->

    <section class="home__hero_container">

      <div class="container_main">

        <div class="home__hero_content">

          <header>
            <div class="home__hero_nav_container">
              <div class="home__hero_logo_lockup_container">
                <a class="home__hero_logo_container" href="#">
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/logo.png">
                </a>
              </div>
              <div class="home__hero_nav_items">
                <button class="button button__white contact-button-modal">Learn more</button>
              </div>
            </div>
          </header>

          <div class="home__hero_text_container">
            <h2>Effortless, immersive realism powered by artificial intelligence</h2>
            <p class="body_large">A true alternative to 3D simulated graphics, by transforming 360 video into an ultra-immersive, interactive and photorealistic digital experience.</p>
          </div>

        </div>

      </div>

      <div class="home__hero_video_container">
        <div class="home__hero_video_overlay"></div>
        <iframe src="https://player.vimeo.com/video/475925831?api=1&autoplay=1&muted=1&loop=1&background=1" frameborder="0"></iframe>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/hero/home-hero-img.jpg"/>
      </div>

      <div class="home__hero_logos_wrapper">
        <div class="container_main">
          <div class="home__hero_logos_content_container">
            <p>In partnership with</p>
            <div class="home__hero_logos_container">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/logos/LU.png"/>
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/logos/YT.png"/>
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/logos/IUK.png"/>
            </div>
          </div>
        </div>
      </div>

    </section>


    <!-- Section Two -->

    <section class="home__section_container">

      <div class="container_main">
        <div class="home__section_content_container">

          <div class="home__phones_img_container">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/360.png">
          </div>

          <div class="home__section_content_text_container">
            <h3>Deep Neural Network</h3>
            <p>Raw 360 video footage goes in, and an immersive, photorealistic 3D environment comes out.</p>
          </div>

          

        </div>
        
      </div>

    </section>

    <!-- Section Three -->

    <section class="home__section_container">

      <div class="container_main">

        <div class="home__section_content_container reverse">

          <div class="home__ipad_img_container">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/unity.png">
          </div>

          <div class="home__section_content_text_container home__section_explore_content_text_container">
            <h3>Unity Integration</h3>
            <p>Interaction Engine ‒ How this can be loaded into Unity to be able to enhance the experience. And how you can use and interact with it.</p>
          </div>

        </div>

      </div>

    </section>


    <!-- Call to Action -->

    <section class="home__cta_section_container">
      
      <div class="container_main">

        <div class="home__section_content_container">
          <div class="home__cta_text_container">
            <h2>Want to find out more?</h2>
            <p>For more information, simply leave your details below</p>
            <button class="button button__white contact-button-modal">Find out more</button>
          </div>
        </div>

      </div>
    </section>

  <?php get_footer(); ?>
