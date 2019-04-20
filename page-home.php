<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>


<div class="newsbar flex">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Next Up") ) : ?>
  <?php endif; ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Recent") ) : ?>
  <?php endif; ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Classes") ) : ?>
  <?php endif; ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Outreach") ) : ?>
  <?php endif; ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contribute") ) : ?>
  <?php endif; ?>
</div>


<div class="scroll">
  <div class="home-wrapper page-space">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <hr>
      <div class="container"><?php the_content(); ?></div>

</div> <!--end home-wrapper -->
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
