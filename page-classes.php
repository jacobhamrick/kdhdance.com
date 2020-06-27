<?php
/*
  Template Name: Classes
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="classes-title"><?php wp_title('', true,''); ?></h2>
      <p id="classes-intro-header"><?php the_field('classes-intro-header'); ?></p>
      <p id="classes-intro"><?php the_field('classes-intro'); ?></p>
      <?php $image = get_field('class-feature-photo-1');
      if( !empty( $image ) ): ?>
        <img class="class-photo" id="class-feature-photo-1" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>
      <p id="schedule-header"><?php the_field('schedule-header'); ?></p>
      <div class="classes-wrapper flex">

        <!-- class 1 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-1'); ?></p>
          <?php echo '<div class="class-info">'; the_field('class-info-1'); echo '</div>';?>
          <p class="class-time"><?php the_field('class-time-1'); ?></p>

        </div>
        <!-- class 2 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-2'); ?></p>
          <?php echo '<div class="class-info">'; the_field('class-info-2'); echo '</div>';?>
          <p class="class-time"><?php the_field('class-time-2'); ?></p>

        </div>
        <!-- class 3 -->
          <!-- removed for special pandemic schedule, just copy paste other class but update number to 3 -->
        <!-- class 4 -->
          <!-- removed for special pandemic schedule, just copy paste other class but update number to 4 -->

      </div> <!-- end classes-wrapper -->

      <!-- class feature -->

      <div class="class-feature">
        <?php $image = get_field('class-feature-photo-2');
        if( !empty( $image ) ): ?>
          <img class="class-photo" id="class-feature-photo-2" src="<?php echo esc_url($image['url']); ?>" />
        <?php endif; ?>
      </div>

      <p id="class-feature-title"><?php the_field('class-feature-title'); ?></p>

      <div class="class-feature-container flex">

        <div class="class-feature">
          <?php the_field('class-feature'); ?>
        </div>


      </div>

      <div class="class-photo-group flex">

        <?php $image = get_field('class-feature-photo-3');
        if( !empty( $image ) ): ?>
          <img class="class-photo" id="class-feature-photo-3" src="<?php echo esc_url($image['url']); ?>" />
        <?php endif; ?>

        <?php $image = get_field('class-feature-photo-4');
        if( !empty( $image ) ): ?>
          <img class="class-photo" id="class-feature-photo-4" src="<?php echo esc_url($image['url']); ?>" />
        <?php endif; ?>

      </div>

    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
