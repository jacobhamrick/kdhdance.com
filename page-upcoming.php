<?php
/*
  Template Name: Upcoming
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="upcoming-title"><?php wp_title('', true,''); ?></h2>
     <h2 id="upcoming-season">   <!-- Season --> <?php the_field('season_num'); ?></h2>
      <div class="upcoming-wrapper flex">
        <!-- show 1 -->
        <div class="upcoming-show">
          <p class="show-title"><?php the_field('up-show-title-1'); ?></p>

          <p class="show-date"><?php the_field('up-date-1'); ?></p>

          <?php if( get_field('up-info-1') ): ?>
              <span class="show-info"><?php the_field('up-info-1'); ?></span>
          <?php endif; ?>
          <?php if( get_field('show-venue-1') ): ?>
              <p class="show-venue"><?php the_field('show-venue-1'); ?></p>
          <?php endif; ?>
          <?php if( get_field('show-city-1') ): ?>
              <p class="show-city"><?php the_field('show-city-1'); ?></p>
          <?php endif; ?>
        </div>
        <!-- show 2 -->
        <div class="upcoming-show">
          <p class="show-title"><?php the_field('up-show-title-2'); ?></p>

          <p class="show-date"><?php the_field('up-date-2'); ?></p>

          <?php if( get_field('up-info-2') ): ?>
              <span class="show-info"><?php the_field('up-info-2'); ?></span>
          <?php endif; ?>
          <?php if( get_field('show-venue-2') ): ?>
              <p class="show-venue"><?php the_field('show-venue-2'); ?></p>
          <?php endif; ?>
          <?php if( get_field('show-city-2') ): ?>
              <p class="show-city"><?php the_field('show-city-2'); ?></p>
          <?php endif; ?>
        </div>
        <!-- show 3 -->
        <div class="upcoming-show">
          <p class="show-title"><?php the_field('up-show-title-3'); ?></p>

          <p class="show-date"><?php the_field('up-date-3'); ?></p>

          <?php if( get_field('up-info-3') ): ?>
              <span class="show-info"><?php the_field('up-info-3'); ?></span>
          <?php endif; ?>
          <?php if( get_field('show-venue-3') ): ?>
              <p class="show-venue"><?php the_field('show-venue-3'); ?></p>
          <?php endif; ?>
          <?php if( get_field('show-city-3') ): ?>
              <p class="show-city"><?php the_field('show-city-3'); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <!-- end upcoming-wrapper -->
      <div class="show-about-cotainer">
        <?php the_field('show-about'); ?>
        </div>

        <?php if( get_field('show-photo') ): ?>
            <img id="show-photo" src="<?php the_field('show-photo'); ?>" />
        <?php endif; ?>
    </div>
    <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
