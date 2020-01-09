<?php
/*
  Template Name: Page Works
*/
?>

<?php get_header(); ?>
<main>

  <nav id="portfolio-nav" class="flex">
    <ul class="flex">
      <a href="#piece-title-1"><li><?php the_field('piece-title-1'); ?></li></a>
    </ul>
  </nav>

  <div id="portfolio-main-body" class="main-body scroll">

    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">


      <div id="portfolio">

        <div class="portfolio-piece">
          <p id="piece-title-1" class="piece-title"><?php the_field('piece-title-1'); ?></p>

          <?php echo '<div class="piece-text">'; the_field('piece-text-1'); echo '</div>';?>
        </div>
        <!-- end portfolio-piece -->

      </div>

    </div>
    <!-- end page-body -->
  </div>
    <!-- end main-body-scroll -->
</main>
<?php get_footer(); ?>
