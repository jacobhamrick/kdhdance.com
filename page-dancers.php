<?php
/*
  Template Name: Dancers
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body">
      <h2 class="page-title" id="dancers-title"><?php wp_title('', true,''); ?></h2>
      <div id="dancer-wrapper flex">

        <!-- dancer 1 -->
        <div class="dancer-container flex">
          <?php if( get_field('dancer-pic-1') ): ?>
              <img class="dancer-pic" src="<?php the_field('dancer-pic-1'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="dancer-text">'; the_field('dancer-text-1'); echo '</p>';?>
        </div>

        <!-- dancer 2 -->
        <div class="dancer-container flex">
          <?php if( get_field('dancer-pic-2') ): ?>
              <img class="dancer-pic" src="<?php the_field('dancer-pic-2'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="dancer-text">'; the_field('dancer-text-2'); echo '</p>';?>
        </div>

        <!-- dancer 3 -->
        <div class="dancer-container flex">
          <?php if( get_field('dancer-pic-3') ): ?>
              <img class="dancer-pic" src="<?php the_field('dancer-pic-3'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="dancer-text">'; the_field('dancer-text-3'); echo '</p>';?>
        </div>

        <!-- dancer 4 -->
        <div class="dancer-container flex">
          <?php if( get_field('dancer-pic-4') ): ?>
              <img class="dancer-pic" src="<?php the_field('dancer-pic-4'); ?>" />
          <?php endif; ?>
          <?php echo '<p class="dancer-text">'; the_field('dancer-text-4'); echo '</p>';?>
        </div>

      </div> <!-- end dancer-wrapper -->
    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
