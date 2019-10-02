<?php
/*
  Template Name: Classes
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body">
      <h2 id="classes-title"><?php wp_title('', true,''); ?></h2>
      <p id="classes-intro"><?php the_field('classes-intro'); ?></p>
      <div class="classes-wrapper flex">
        <!-- class 1 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-1'); ?></p>
          <p class="class-time"><?php the_field('class-time-1'); ?></p>
          <span class="class-info"><?php the_field('class-info-1'); ?></span>
        </div>
        <!-- class 2 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-2'); ?></p>
          <p class="class-time"><?php the_field('class-time-2'); ?></p>
          <span class="class-info"><?php the_field('class-info-2'); ?></span>
        </div>
        <!-- class 3 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-3'); ?></p>
          <p class="class-time"><?php the_field('class-time-3'); ?></p>
          <span class="class-info"><?php the_field('class-info-3'); ?></span>
        </div>
        <!-- class 4 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-4'); ?></p>
          <p class="class-time"><?php the_field('class-time-4'); ?></p>
          <p class="class-info"><?php the_field('class-info-4'); ?></p>
        </div>
        <!-- class feature -->
      </div>
      <!-- end classes-wrapper -->
      <div id="class-feature-container">
        <p id="class-feature-title"><?php the_field('class-feature-title'); ?></p>
        <span id="class-feature"><?php the_field('class-feature'); ?>
          <?php if( get_field('class-feature-photo') ): ?>
              <img src="<?php the_field('class-feature-photo'); ?>" />
        </span>
          <?php endif; ?>
      </div>
        <!--
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?> -->
    </div>
    <!-- end page-body -->
      <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
