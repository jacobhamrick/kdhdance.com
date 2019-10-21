<?php
/*
  Template Name: Outreach
*/
?>
<?php get_header(); ?>
<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="outreach-page-title"><?php wp_title('', true,''); ?></h2>
      <?php echo '<div id="outreach-header">'; the_field('outreach-header'); echo '</div>';?>
      <?php echo '<div id="outreach-intro">'; the_field('outreach-intro'); echo '</div>';?>
      <p><?php the_field('outreach-banner'); ?></p>
      <?php echo '<div id="outreach-section">'; the_field('outreach-section'); echo '</div>';?>
      



      </div>

    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
