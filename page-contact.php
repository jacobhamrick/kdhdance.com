<?php
/*
  Template Name: Contact
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="contact-page-title"><?php wp_title('', true,''); ?></h2>
      <div class="contact-list flex">

        <div class="contact-item">
          <a href="mailto:<?php the_field('contact-us-email'); ?>" id="contact-us-email"><?php the_field('contact-us-email'); ?></a>
          <br>
          <a href="<?php the_field('contact-us-phone'); ?>" id="contact-us-phone"><?php the_field('contact-us-phone'); ?></a>
        </div>

        <div class="contact-item">
          <h3>Artistic Director</h3>
          <p id="artistic-director"><?php the_field('artistic-director'); ?></p>
        </div>

        <div class="contact-item">
          <h3>Board President</h3>
          <p id="board-president"><?php the_field('board-president'); ?></p>
        </div>

        <div class="contact-item">
          <h3>Administrative Assistants</h3>
          <?php echo '<div class="administrative-assistants">'; the_field('administrative-assistants'); echo '</div>';?>
        </div>

        <div class="contact-item">
          <h3>Physical Address</h3>
          <?php echo '<div class="physical-address">'; the_field('physical-address'); echo '</div>';?>
        </div>

        <div class="contact-item">
          <h3>CORRESPONDENCE ONLY</h3>
          <?php echo '<div class="correspondence-only">'; the_field('correspondence-only'); echo '</div>';?>
        </div>

      </div> <!-- end contact-list -->

      <div id="mc_embed_signup" style="">
        <form id="mc-embedded-subscribe-form" class="validate" action="https://kdhdance.us1.list-manage.com/subscribe/post?u=9c082ad3171554d61d5303fd5&amp;id=c3c42aaff6" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
          <div id="mc_embed_signup_scroll">
            <label style="" for="mce-EMAIL">SUBSCRIBE TO THE KDH DANCE MAILING LIST</label>
            <input id="mce-EMAIL" class="email" name="EMAIL" required="" type="email" value="" placeholder="email address" style="width: 100%;" />
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px; text-align: center;" aria-hidden="true"><input tabindex="-1" name="b_9c082ad3171554d61d5303fd5_c3c42aaff6" type="text" value="" /></div>
            <div style="text-align: center;"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="SUBSCRIBE" /></div>
          </div>
        </form>
      </div> <!--end mc_embed_signup-->

    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
