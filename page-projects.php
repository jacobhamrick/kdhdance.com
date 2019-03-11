<?php
/*
  Template Name: Projects Page
*/
?>
<?php get_header(); ?>

<!-- HTML goes here  -->
<div class="projects-page page-space">
  <div class="col-sm-12 col-md-6">
    <?php
      $projects = new Pod('projects');
      $projects->findRecords('name ASC');

      ?>


</div>
  <div class="col-sm-12 col-md-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <!-- end loop -->
        <?php endwhile; endif; ?>

  </div>

<?php
  $args = array(
    'post_type' => 'portfolio'
  );
  $query = new WP_Query( $args );
?>



</div>


<?php get_footer(); ?>
