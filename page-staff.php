<?php
/*
  Template Name: Staff
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body">
      <h2 class="page-title" id="staff-title"><?php wp_title('', true,''); ?></h2>
      <div id="staff-wrapper flex">

        <!-- staff 1 -->
        <div class="staff-container flex">
          <?php if( get_field('profile-pic-1') ): ?>
              <img class="profile-pic" src="<?php the_field('profile-pic-1'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="profile-text">'; the_field('profile-text-1'); echo '</p>';?>
        </div>

        <!-- staff 2 -->
        <div class="staff-container flex">
          <?php if( get_field('profile-pic-2') ): ?>
              <img class="profile-pic" src="<?php the_field('profile-pic-2'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="profile-text">'; the_field('profile-text-2'); echo '</p>';?>
        </div>

        <!-- staff 3 -->
        <div class="staff-container flex">
          <?php if( get_field('profile-pic-3') ): ?>
              <img class="profile-pic" src="<?php the_field('profile-pic-3'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="profile-text">'; the_field('profile-text-3'); echo '</p>';?>
        </div>

        <!-- staff 4 -->
        <div class="staff-container flex">
          <?php if( get_field('profile-pic-4') ): ?>
              <img class="profile-pic" src="<?php the_field('profile-pic-4'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="profile-text">'; the_field('profile-text-4'); echo '</p>';?>
        </div>

      </div> <!-- end staff-wrapper -->
    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
