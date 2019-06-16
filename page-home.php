<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div class="body-skin pink2blue">
  <div class="body-wrap flex">
    <div class="newsbar flex">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("News Flash") ) : ?>
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
      <div class="scroll">
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
            <h2><?php the_title(); ?></h2>
            <hr>
            <?php the_content(); ?>
            <h2>SPONSORS</h2>
            <hr>
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
        </div> <!-- end page-body -->
      </div> <!-- end page-scroll -->
    <?php endwhile; endif; ?>
  </div> <!-- end body-wrap -->
</div> <!-- end body-skin -->
<?php get_footer(); ?>
