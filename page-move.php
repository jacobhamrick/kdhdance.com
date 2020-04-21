<?php
/*
  Template Name: Move Now
*/
?>
<?php get_header(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
<main>
  <div class="main-body">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="move-page-title"><?php wp_title('', true,''); ?></h2>
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
</main>
<?php get_footer(); ?>
