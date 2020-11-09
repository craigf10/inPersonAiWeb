<?php /* Template Name: Privacy */ ?>

  <?php get_header(); ?>

  <body>

    <!-- Modal Contact -->
    <?php include('inc/modal-contact.php'); ?>


    <!-- Secondary Header -->
    <?php include('inc/header-secondary.php'); ?>


    <!-- Privacy Content -->

    <section style="margin-top: 60px; margin-bottom: 60px;">
      <div class="container_main">

        <h3 class="page-title"><?php the_field('page_title')?></h3>
        <div class="page-paragraph"><?php the_field('single_paragraph')?></div>

        <?php
          // check for rows (parent repeater)
          if( have_rows('content') ):

           	// loop through rows (parent repeater)
              while ( have_rows('content') ) : the_row();?>

              <h4 class="page-sub-title"><?php the_sub_field('page_sub_title')?></h4>

              <?php
              // check for rows (sub repeater)
							if( have_rows('page_paragraphs') ):

                // loop through rows (sub repeater)
                while( have_rows('page_paragraphs') ): the_row();?>

                  <div class="page-paragraph"><?php the_sub_field('page_paragraph')?></div>

              <?php  endwhile;

              else :

              // no rows found

              endif;
              ?>

        <?php  endwhile;

        else :

        // no rows found

        endif;?>

      </div>
    </section>

  <?php get_footer(); ?>