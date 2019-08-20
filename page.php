<?php
/*
  Template Name: Page
*/
?>
<?php get_header(); ?>

<div class="body-skin yel2ora">
  <div class="body-wrap">
  <div class="main-body scroll">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class="page-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>


  <?php endwhile; else : ?>
  	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
