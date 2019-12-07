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
      <p class="preheader" id="outreach-preheader"><?php the_field('outreach-preheader'); ?></p>
      <?php echo '<div id="outreach-header">'; the_field('outreach-header'); echo '</div>';?>
      <?php echo '<div id="outreach-intro">'; the_field('outreach-intro'); echo '</div>';?>
      <p id="outreach-banner"><?php the_field('outreach-banner'); ?></p>

      <div id="outreach-sections" class="flex">

        <!-- outreach section w/ image -->
        <div class="outreach-section" id="outreachSection1">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle1">
              <?php the_field('outreach-section-title-1'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse1" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle1" data-parent="#outreachSection1">
              <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-1'); echo '</div>';?>
              <?php $image = get_field('outreach-section-1-image');
                  if( !empty( $image ) ): ?>
                    <img class="outreach-section-image" src="<?php echo esc_url($image['url']); ?>" />
                  <?php endif; ?>
          </div>

        </div>


        <!-- outreach section w/ image -->
        <div class="outreach-section" id="outreachSection2">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle2">
              <?php the_field('outreach-section-title-2'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse2" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle2" data-parent="#outreachSection2">
            <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-2'); echo '</div>';?>
              <?php $image = get_field('outreach-section-2-image');
                  if( !empty( $image ) ): ?>
                    <img class="outreach-section-image" src="<?php echo esc_url($image['url']); ?>" />
                  <?php endif; ?>
          </div>

        </div>


        <!-- outreach section w/ image -->
        <div class="outreach-section" id="outreachSection3">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle3">
              <?php the_field('outreach-section-title-3'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse3" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle3" data-parent="#outreachSection3">
            <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-3'); echo '</div>';?>
              <?php $image = get_field('outreach-section-3-image');
                  if( !empty( $image ) ): ?>
                    <img class="outreach-section-image" src="<?php echo esc_url($image['url']); ?>" />
                  <?php endif; ?>
          </div>

        </div>

        <!-- outreach section text only -->
        <div class="outreach-section" id="outreachSection4">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle4">
              <?php the_field('outreach-section-title-4'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse4" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle4" data-parent="#outreachSection4">
            <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-4'); echo '</div>';?>
          </div>

        </div>

        <!-- outreach section text only -->
        <div class="outreach-section" id="outreachSection5">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle5">
              <?php the_field('outreach-section-title-5'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse5" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle5" data-parent="#outreachSection5">
            <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-5'); echo '</div>';?>
          </div>

        </div>

        <!-- outreach section w/ big image -->
        <div class="outreach-section" id="outreachSection6">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle6">
              <?php the_field('outreach-section-title-6'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse6" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle6" data-parent="#outreachSection6">
            <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-6'); echo '</div>';?>
              <?php $image = get_field('outreach-section-6-image');
                  if( !empty( $image ) ): ?>
                    <img class="outreach-section-image" id="outreach-feature-image" src="<?php echo esc_url($image['url']); ?>" />
                  <?php endif; ?>
          </div>

        </div>

        <!-- outreach section text only -->
        <div class="outreach-section" id="outreachSection7">

          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" aria-hidden="false">
            <h4 class="outreach-section-title" id="sectionTitle7">
              <?php the_field('outreach-section-title-7'); ?> <i class="fas" ></i>
            </h4>
          </button>

          <div id="collapse7" class="outreach-section-wrapper flex collapse" aria-labelledby="sectionTitle7" data-parent="#outreachSection7">
            <?php echo '<div class="outreach-paragraph">'; the_field('outreach-section-paragraph-7'); echo '</div>';?>
          </div>

        </div>


      </div> <!-- end outreach-sections -->
    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
