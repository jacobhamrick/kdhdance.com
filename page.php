<?php
/*
  Template Name: Page
*/
?>
<?php get_header(); ?>
<div class="page-space">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class="page-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

  <?php endwhile; else : ?>
  	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
