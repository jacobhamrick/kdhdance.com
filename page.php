<?php
/*
  Template Name: Page
*/
?>
<?php get_header(); ?>
<main>
  <div class="main-body scroll">
    <div class="page-body">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2 class="page-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>

    </div>
      <?php endwhile; else : ?>
  </div>

  	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>

</main>
<?php get_footer(); ?>
