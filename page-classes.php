<?php
/*
  Template Name: Classes
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body">
      <h2 id="upcoming-season"><?php wp_title('', true,''); ?></h2>
      <div class="classes-wrapper flex">
        <!-- show 1 -->
        <div class="class-container">
          <p class="show-title"><?php the_field('class-day-1'); ?></p>
          <p class="show-date"><?php the_field('class-time-1'); ?></p>
          <p class="show-info"><?php the_field('class-info-1'); ?></p>
        </div>
        <!-- show 2 -->
        <div class="class-container">
          <p class="show-title"><?php the_field('class-day-2'); ?></p>
          <p class="show-date"><?php the_field('class-time-2'); ?></p>
          <p class="show-info"><?php the_field('class-info-2'); ?></p>
        </div>
        <!-- show 3 -->
        <div class="class-container">
          <p class="show-title"><?php the_field('class-day-3'); ?></p>
          <p class="show-date"><?php the_field('class-time-3'); ?></p>
          <p class="show-info"><?php the_field('class-info-3'); ?></p>
        </div>
      </div>
      <!-- end upcoming-wrapper -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    </div>
    <!-- end page-body -->
      <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
