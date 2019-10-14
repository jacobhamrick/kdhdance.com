<?php
/*
  Template Name: Upcoming
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="upcoming-season">Season <?php the_field('season_num'); ?></h2>
      <div class="upcoming-wrapper flex">
        <!-- show 1 -->
        <div class="upcoming-show">
          <p class="show-title"><?php the_field('up-show-title-1'); ?></p>
          <p class="show-date"><?php the_field('up-date-1'); ?></p>
          <p class="show-info"><?php the_field('up-info-1'); ?></p>
        </div>
        <!-- show 2 -->
        <div class="upcoming-show">
          <p class="show-title"><?php the_field('up-show-title-2'); ?></p>
          <p class="show-date"><?php the_field('up-date-2'); ?></p>
          <p class="show-info"><?php the_field('up-info-2'); ?></p>
        </div>
        <!-- show 3 -->
        <div class="upcoming-show">
          <p class="show-title"><?php the_field('up-show-title-3'); ?></p>
          <p class="show-date"><?php the_field('up-date-3'); ?></p>
          <p class="show-info"><?php the_field('up-info-3'); ?></p>
        </div>
      </div>
      <!-- end upcoming-wrapper -->
      <div class="show-about-cotainer">
        <p class="show-about"><?php the_field('show-about'); ?></p>
        <?php if( get_field('show-photo') ): ?>
            <img id="show-photo" src="<?php the_field('show-photo'); ?>" />
        <?php endif; ?>
      </div>
      <!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?> -->
    </div>
    <!-- end page-body -->
      <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
