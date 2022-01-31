<?php
/*
  Template Name: Page Works
*/
?>

<?php get_header(); ?>
<main>

  <nav id="portfolio-nav" class="flex">
    <ul class="flex">
      <li><i class="fas fa-circle"></i><a href="#piece-title-1"><?php the_field('piece-title-1'); ?></a></li>
      <li><i class="fas fa-circle"></i><a href="#piece-title-2"><?php the_field('piece-title-2'); ?></a></li>
      <li><i class="fas fa-circle"></i><a href="#piece-title-3"><?php the_field('piece-title-3'); ?></a></li>
      <li><i class="fas fa-circle"></i><a href="#piece-title-4"><?php the_field('piece-title-4'); ?></a></li>
      <li><i class="fas fa-circle"></i><a href="#piece-title-5"><?php the_field('piece-title-5'); ?></a></li>
      <li><i class="fas fa-circle"></i><a href="#piece-title-6"><?php the_field('piece-title-6'); ?></a></li>
      <li><i class="fas fa-circle"></i><a href="#piece-title-7"><?php the_field('piece-title-7'); ?></a></li>
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

        <div class="portfolio-piece">
          <p id="piece-title-4" class="piece-title"><?php the_field('piece-title-4'); ?> <?php the_field('piece-year-4'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-4'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-4'); echo '</div>';?>
        </div>

        <div class="portfolio-piece">
          <p id="piece-title-5" class="piece-title"><?php the_field('piece-title-5'); ?> <?php the_field('piece-year-5'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-5'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-5'); echo '</div>';?>
        </div>

        <div class="portfolio-piece">
          <p id="piece-title-6" class="piece-title"><?php the_field('piece-title-6'); ?> <?php the_field('piece-year-6'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-6'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-6'); echo '</div>';?>
        </div>

        <div class="portfolio-piece">
          <p id="piece-title-7" class="piece-title"><?php the_field('piece-title-7'); ?> <?php the_field('piece-year-7'); ?></p>
          <?php echo '<div class="piece-text">'; the_field('piece-text-7'); echo '</div>';?>
          <?php echo '<div>'; the_field('gallery-link-7'); echo '</div>';?>
        </div>



      </div>

    </div>
    <!-- end page-body -->
  </div>
    <!-- end main-body-scroll -->
</main>
<?php get_footer(); ?>
