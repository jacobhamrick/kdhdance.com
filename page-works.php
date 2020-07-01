<?php
/*
  Template Name: Page Works
*/
?>

<?php get_header(); ?>
<main>

  <nav id="portfolio-nav" class="flex">
    <ul class="flex">
      <li><a href="#piece-title-1"><?php the_field('piece-title-1'); ?></a></li>
      <li><a href="#piece-title-2"><?php the_field('piece-title-2'); ?></a></li>
      <li><a href="#piece-title-3"><?php the_field('piece-title-3'); ?></a></li>
    </ul>
  </nav>

  <div id="portfolio-main-body" class="main-body scroll">

    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">


      <div id="portfolio">

        <div class="portfolio-piece">
          <p id="piece-title-1" class="piece-title"><?php the_field('piece-title-1'); ?> <?php the_field('piece-year-1'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-1'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-1'); echo '</div>';?>
        </div>

        <div class="portfolio-piece">
          <p id="piece-title-2" class="piece-title"><?php the_field('piece-title-2'); ?> <?php the_field('piece-year-2'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-2'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-2'); echo '</div>';?>
        </div>

        <div class="portfolio-piece">
          <p id="piece-title-3" class="piece-title"><?php the_field('piece-title-3'); ?> <?php the_field('piece-year-3'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-3'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-3'); echo '</div>';?>
        </div>



      </div>

    </div>
    <!-- end page-body -->
  </div>
    <!-- end main-body-scroll -->
</main>
<?php get_footer(); ?>
