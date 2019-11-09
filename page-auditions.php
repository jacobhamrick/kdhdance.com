<?php
/*
  Template Name: Auditions
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="auditions-page-title"><?php wp_title('', true,''); ?></h2>

      <?php $image = get_field('audition-image-1');
      if( !empty( $image ) ): ?>
        <img class="audition-image" id="audition-image-1" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>

      <div class="audition-paragraph"><?php the_field('audition-paragraph-1'); ?></div>

      <?php $image = get_field('audition-image-2');
      if( !empty( $image ) ): ?>
        <img class="audition-image" id="audition-image-2" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>

      <div class="audition-paragraph"><?php the_field('audition-paragraph-2'); ?></div>

      <?php $image = get_field('audition-image-3');
      if( !empty( $image ) ): ?>
        <img class="audition-image" id="audition-image-3" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>

      <div class="audition-paragraph"><?php the_field('audition-paragraph-3'); ?></div>

    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
