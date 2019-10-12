<?php
/*
  Template Name: Page
*/
?>
<?php get_header(); ?>
<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <div class="page-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      </div>
    </div>
    <!-- end page-body -->

    <?php endwhile; else : ?>
    	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
      <?php endif; ?>
  </div>
    <!-- end main-body-scroll -->
</main>
<?php get_footer(); ?>
