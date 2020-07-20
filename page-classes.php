<?php
/*
  Template Name: Classes
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">

      <h2 id="classes-title" class="page-title"><?php wp_title('', true,''); ?></h2>

      <p id="classes-intro-header" class="text-center"><?php the_field('classes-intro-header'); ?></p>

      <p id="classes-intro"><?php the_field('classes-intro'); ?></p>

      <?php $image = get_field('featured-classes-photo-1');
      if( !empty( $image ) ): ?>
        <img class="class-photo mx-auto" id="featured-classes-photo-1" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>

      <p id="schedule-header"><?php the_field('schedule-header'); ?></p>

      <div class="classes-wrapper flex">

        <!-- class 1 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-1'); ?></p>
          <?php echo '<div class="class-info">'; the_field('class-info-1'); echo '</div>';?>
          <p class="class-time"><i class="far fa-clock"></i> <?php the_field('class-time-1'); ?></p>

        </div>
        <!-- class 2 -->
        <div class="class-container">
          <p class="class-day"><?php the_field('class-day-2'); ?></p>
          <?php echo '<div class="class-info">'; the_field('class-info-2'); echo '</div>';?>
          <p class="class-time"><i class="far fa-clock"></i> <?php the_field('class-time-2'); ?></p>

        </div>
        <!-- class 3 -->
          <!-- removed for special pandemic schedule, just copy paste other class but update number to 3 -->
        <!-- class 4 -->
          <!-- removed for special pandemic schedule, just copy paste other class but update number to 4 -->

      </div> <!-- end classes-wrapper -->

      <!-- class feature -->

      <div class="featured-classes">
        <?php $image = get_field('featured-classes-photo-2');
        if( !empty( $image ) ): ?>
          <img class="class-photo mx-auto" id="featured-classes-photo-2" src="<?php echo esc_url($image['url']); ?>" />
        <?php endif; ?>
      </div>

      <p id="featured-classes-header" class="text-center"><?php the_field('featured-classes-header'); ?></p>
      <p id="featured-classes-info" class="text-center"><?php the_field('featured-classes-info'); ?></p>

      <div class="featured-classes-container flex">

        <div class="featured-classes accordion mx-auto" id="class-accordion">


          <div class="card">
            <div class="card-header" id="headingOne">
              <p class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p class="mb-0"><i class="far fa-star"></i> <?php the_field('featured-class-title-1'); ?></p>
                </button>
              </p>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#class-accordion">
              <div class="card-body">
                  <p class="mb-0"><?php the_field('featured-class-info-1'); ?></p>
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="headingTwo">
              <p class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <p class="mb-0"><i class="far fa-star"></i> <?php the_field('featured-class-title-2'); ?></p>
                </button>
              </p>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#class-accordion">
              <div class="card-body">
                  <p class="mb-0"><?php the_field('featured-class-info-2'); ?></p>
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="headingThree">
              <p class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <p class="mb-0"><i class="far fa-star"></i> <?php the_field('featured-class-title-3'); ?></p>
                </button>
              </p>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#class-accordion">
              <div class="card-body">
                <p class="mb-0"><?php the_field('featured-class-info-3'); ?></p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFour">
              <p class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <p class="mb-0"><i class="far fa-star"></i> <?php the_field('featured-class-title-4'); ?></p>
                </button>
              </p>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#class-accordion">
              <div class="card-body">
                <p class="mb-0"><?php the_field('featured-class-info-4'); ?></p>
              </div>
            </div>
          </div>

      </div>
    </div>

    <div class="class-photo-group flex">

      <?php $image = get_field('featured-class-photo-3');
      if( !empty( $image ) ): ?>
        <img class="class-photo mx-auto" id="featured-class-photo-3" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>

      <?php $image = get_field('featured-class-photo-4');
      if( !empty( $image ) ): ?>
        <img class="class-photo mx-auto" id="featured-class-photo-4" src="<?php echo esc_url($image['url']); ?>" />
      <?php endif; ?>

    </div>

    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
