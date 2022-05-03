<?php
/*
  Template Name: Home

*/
?>

<?php get_header(); ?>

<main>

    <div class="newsbar flex">

      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Move Now") ) : ?>
      <?php endif; ?>


      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Next Up") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Say What") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Classes") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Outreach") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contribute") ) : ?>
      <?php endif; ?>
      </div>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("News Flash") ) : ?>
        <i class="fas fa-chevron-right"></i>
      <?php endif; ?>

      <div class="main-body scroll">
        <!-- swiper main container -->
        <div class="swiper-container" id="home-swiper">
          <div class="swiper-wrapper">
      			<!-- Slides -->
            <div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-10'); ?>)">

      			</div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-9'); ?>)">
      			</div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-8'); ?>)">
      			</div>
      			<!-- <div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-1'); ?>)">
      			</div> -->
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-2'); ?>)">
      			</div>
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-3'); ?>)">
      			</div>
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-4'); ?>)">
      			</div>
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-5'); ?>)">
      			</div>
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-6'); ?>)">
      			</div>
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-7'); ?>)">
      			</div>
      		</div> <!-- end swiper-wrapper -->
      		<div class="swiper-pagination"></div><!-- navigation buttons -->
      		<div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
      		<div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
      	</div> <!-- end swiper-container -->
        <p style="float: right; margin-right: 2vw;">Photo 1 by Sarah Annie Navarrete</p>
        <div class="page-body home-div">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- <h2><?php the_title(); ?></h2>
            <hr> -->
            <?php the_content(); ?>

            <section id="sponsor-section">
              <h2>SPONSORS</h2>
              <hr>
              <div id="sponsor-wrapper">
                <div class="sponsor-row sr-1">
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-1-6-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-1-6'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-1-1-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-1-1'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-1-2-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-1-2'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-1-3-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-1-3'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-1-4-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-1-4'); ?>" />
                    </a>
                  </div>
                  <!-- <div class="sponsor-img">
                    <a href="<?php the_field('sr-1-5-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-1-5'); ?>" />
                    </a>
                  </div> -->
                </div> <!-- end sponsor-row-->

                <div class="sponsor-row sr-2">
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-2-1-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-2-1'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-2-2-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-2-2'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-2-3-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-2-3'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-2-4-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-2-4'); ?>" />
                    </a>
                  </div>
                  <div class="sponsor-img">
                    <a href="<?php the_field('sr-2-5-link'); ?>" target="_blank">
                      <img src="<?php the_field('sr-2-5'); ?>" />
                    </a>
                  </div>
                </div> <!-- end sponsor-row-->
              </div> <!-- end sponsor-wrapper -->
            </section>

        </div> <!-- end page-body -->

      </div> <!-- end main-body -->
      <?php endwhile; endif; ?>


</main>
<?php get_footer(); ?>
</div> <!-- end page-body -->
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'fade',
    preloadImages: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  </script>
  </body>
</html>
