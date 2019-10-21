<?php
/*
  Template Name: Board
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="board-page-title"><?php wp_title('', true,''); ?></h2>
      <p class="board-section-title"><?php the_field('board-section-title'); ?></p>

      <div id="board-text-wrapper" class="flex">
        <?php echo '<div id="board-intro">'; the_field('board-intro'); echo '</div>';?>

        <!-- board list -->
        <div class="board-list">
          <div class="board-member">
            <p class="board-title">Board President:</p>
            <p><?php the_field('board-president'); ?></p>
          </div>
          <div class="board-member">
            <p class="board-title">Board Secretary:</p>
            <p><?php the_field('secretary'); ?></p>
          </div>
          <p class="board-title">Board Members:</p>
          <?php echo '<div class="board-members">'; the_field('board-members'); echo '</div>';?>
        </div>
      </div>

      <!-- swiper main container -->
      <div class="board-swiper-div">
        <div class="swiper-container" id="board-swiper">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-1'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-2'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-3'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-4'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-5'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-6'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-7'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-8'); ?>)">
            </div>
            <div class="swiper-slide" style="background-image: url(<?php the_field('board-image-9'); ?>)">
            </div>
          </div> <!-- end swiper-wrapper -->
          <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
          <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
        </div> <!-- end swiper-container -->
      </div>
    </div>
  </div> <!-- end page-body -->
</main>
<?php get_footer(); ?>
<script>
  var mySwiper = new Swiper ('#board-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'fade',
    preloadImages: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  </script>
