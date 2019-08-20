<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main>

    <div class="newsbar flex">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("News Flash") ) : ?>
        <i class="fas fa-chevron-right"></i>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Next Up") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Recent") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Classes") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Outreach") ) : ?>
      <?php endif; ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contribute") ) : ?>
      <?php endif; ?>
      </div>

      <div class="main-body scroll">
        <!-- Slider main container -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
      			<!-- Slides -->
      			<div class="swiper-slide" style="background-image: url(<?php the_field('home-slider-image-1'); ?>)">
      			</div>
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
        <div class="page-body">
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
                    <img src="<?php the_field('sr-1-1'); ?>" />
                  </div>
                  <div class="sponsor-img">
                    <img src="<?php the_field('sr-1-2'); ?>" />
                  </div>
                  <div class="sponsor-img">
                    <img src="<?php the_field('sr-1-3'); ?>" />
                  </div>
                  <div class="sponsor-img">
                    <img src="<?php the_field('sr-1-4'); ?>" />
                  </div>
                  <div class="sponsor-img">
                    <img src="<?php the_field('sr-1-5'); ?>" />
                  </div>
                </div> <!-- end sponsor-row-->

                <div class="sponsor-row sr-2">
                <div class="sponsor-img">
                  <img src="<?php the_field('sr-2-1'); ?>" />
                </div>
                <div class="sponsor-img">
                  <img src="<?php the_field('sr-2-2'); ?>" />
                </div>
                <div class="sponsor-img">
                  <img src="<?php the_field('sr-2-3'); ?>" />
                </div>
                <div class="sponsor-img">
                  <img src="<?php the_field('sr-2-4'); ?>" />
                </div>
                <div class="sponsor-img">
                  <img src="<?php the_field('sr-2-5'); ?>" />
                </div>
                </div> <!-- end sponsor-row-->
              </div> <!-- end sponsor-wrapper -->
            </section>

        </div>

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
