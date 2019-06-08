<?php
/*
  Template Name: Staff
*/
?>
<?php get_header(); ?>
<div class="scroll">
  <div class="page-wrapper page-space">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class="page-title"><?php the_title(); ?></h2>
    <hr>
    <?php the_content(); ?>


  <?php endwhile; else : ?>
  	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
