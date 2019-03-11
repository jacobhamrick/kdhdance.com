<?php
/*
  Template Name: Portfolio Item
*/
?>
<?php get_header(); ?>

<section>

  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Primary Column -->
    <div class="col">
        <?php the_field('images'); ?>
    </div>

    <!-- Secondary Column / Sidebar -->
    <div class="col">
      <h1><?php the_title(); ?></h1>
      <p><?php the_field('description'); ?></p>
      <hr>
      <p>
        <?php previous_post_link(); ?>
        <a href="<?php bloginfo('url'); ?>/portfolio">Back to Portfolio</a>
        <?php next_post_link(); ?>
      </p>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>
