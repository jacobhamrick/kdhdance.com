<?php
/*
  Template Name: Staff
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="staff-title"><?php wp_title('', true,''); ?></h2>
      <div class="staff-wrapper flex">

        <!-- staff 1 -->
        <div class="staff-container flex">
          <?php $image = get_field('profile-pic-1');
              if( !empty( $image ) ): ?>
                <img class="profile-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="profile-text">'; the_field('profile-text-1'); echo '</div>';?>
        </div>

        <!-- staff 2 -->
        <div class="staff-container flex">
          <?php $image = get_field('profile-pic-2');
              if( !empty( $image ) ): ?>
                <img class="profile-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="profile-text">'; the_field('profile-text-2'); echo '</div>';?>
        </div>

        <!-- staff 3 -->
        <!-- <div class="staff-container flex">
          <?php $image = get_field('profile-pic-3');
              if( !empty( $image ) ): ?>
                <img class="profile-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="profile-text">'; the_field('profile-text-3'); echo '</div>';?>
        </div> -->

        <!-- staff 4 -->
        <!-- <div class="staff-container flex">
          <?php $image = get_field('profile-pic-4');
              if( !empty( $image ) ): ?>
                <img class="profile-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="profile-text">'; the_field('profile-text-4'); echo '</div>';?>
        </div> -->

      </div> <!-- end staff-wrapper -->
    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
