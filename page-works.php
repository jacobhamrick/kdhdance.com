<?php
/*
  Template Name: Page Works
*/
?>
<?php get_header(); ?>

<div class="body-skin whitekout">
  <div class="body-wrap">
    <div class="page-wrapper page-body scroll">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <hr>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    </div>
    <!-- end page-wrapper -->
    <?php endwhile; else : ?>
  	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>
  </div>
  <!-- end page-body -->
</div>
<!-- end body-skin -->

<?php get_footer(); ?>
