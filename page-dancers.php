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
      <div id="dancer-wrapper flex">

        <!-- dancer 1 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-1');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-1'); echo '</div>';?>
        </div>

        <!-- dancer 2 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-2');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-2'); echo '</div>';?>
        </div>

        <!-- dancer 3 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-3');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-3'); echo '</div>';?>
        </div>

        <!-- dancer 4 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-4');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-4'); echo '</div>';?>
        </div>

        <!-- dancer 5 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-5');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-5'); echo '</div>';?>
        </div>

        <!-- dancer 6 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-6');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-6'); echo '</div>';?>
        </div>

        <!-- dancer 7 -->
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-7');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-7'); echo '</div>';?>
        </div>

        <!-- dancer 8 -->
        <!--
        <div class="dancer-container flex">
          <?php $image = get_field('dancer-pic-8');
              if( !empty( $image ) ): ?>
                <img class="dancer-pic" src="<?php echo esc_url($image['url']); ?>" />
              <?php endif; ?>
          <?php echo '<div class="dancer-text">'; the_field('dancer-text-8'); echo '</div>';?>
        </div>
      -->


        <!-- dancer photo credit -->
        <div id="dancer-photo-credit-div">
          <p id="dancer-photo-credit-text"><?php the_field('dancer-photo-credit'); ?></p>
        </div>

      </div> <!-- end dancer-wrapper -->
    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
