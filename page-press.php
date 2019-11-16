<?php
/*
  Template Name: Press
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="press-title"><?php wp_title('', true,''); ?></h2>

      <?php the_field('press-header'); ?>
      <hr>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else : ?>
      	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
      <?php endif; ?>


    </div>
  </div>
</main>

<?php get_footer(); ?>
