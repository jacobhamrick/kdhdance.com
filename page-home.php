<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("News Flash") ) : ?>

<?php endif; ?>


<div class="scroll">
  <div class="home-wrapper page-space">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <hr>
      <div class="container"><?php the_content(); ?></div>

</div> <!--end home-wrapper -->
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
