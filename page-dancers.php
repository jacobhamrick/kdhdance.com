<?php
/*
  Template Name: Dancers
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>" >
      <h2 class="page-title" id="dancers-title"><?php wp_title('', true,''); ?></h2>

      <div class="dancer-list flex">
        <p>
          <a href="#dancer-1"><?php the_field('dancer-name-1'); ?></a> / <a href="#dancer-2"><?php the_field('dancer-name-2'); ?></a> / <a href="#dancer-3"><?php the_field('dancer-name-3'); ?></a> / <a href="#dancer-4"><?php the_field('dancer-name-4'); ?></a> / <a href="#dancer-5"><?php the_field('dancer-name-5');?></a> / <a href="#dancer-6"><?php the_field('dancer-name-6'); ?></a> / <a href="#dancer-7"><?php the_field('dancer-name-7'); ?></a> /
          <a href="#dancer-8"><?php the_field('dancer-name-8'); ?></a>
        </p>
      </div>

      <div class="dancer-wrapper flex">

        <!-- dancer 1 -->
        <div class="dancer-container flex" id="dancer-1">
          <?php $image = get_field('dancer-pic-1');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-1'); echo '</div>';?>
        </div>

        <!-- dancer 2 -->
        <div class="dancer-container flex" id="dancer-2">
          <?php $image = get_field('dancer-pic-2');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-2'); echo '</div>';?>
        </div>

        <!-- dancer 3 -->
        <div class="dancer-container flex" id="dancer-3">
          <?php $image = get_field('dancer-pic-3');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-3'); echo '</div>';?>
        </div>

        <!-- dancer 4 -->
        <div class="dancer-container flex" id="dancer-4">
          <?php $image = get_field('dancer-pic-4');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-4'); echo '</div>';?>
        </div>

        <!-- dancer 5 -->
        <div class="dancer-container flex" id="dancer-5">
          <?php $image = get_field('dancer-pic-5');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-5'); echo '</div>';?>
        </div>

        <!-- dancer 6 -->
        <div class="dancer-container flex"id="dancer-6">
          <?php $image = get_field('dancer-pic-6');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-6'); echo '</div>';?>
        </div>

        <!-- dancer 7 -->
        <div class="dancer-container flex" id="dancer-7">
          <?php $image = get_field('dancer-pic-7');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-7'); echo '</div>';?>
        </div>

        <!-- dancer 8 -->
        <div class="dancer-container flex" id="dancer-8">
          <?php $image = get_field('dancer-pic-8');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-8'); echo '</div>';?>
        </div>



        <!-- dancer photo credit -->
        <div id="dancer-photo-credit-div">
          <p id="dancer-photo-credit-text"><?php the_field('dancer-photo-credit'); ?></p>
        </div>

      </div> <!-- end dancer-wrapper -->
    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
