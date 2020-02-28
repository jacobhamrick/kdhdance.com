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

      <div id="mc_embed_signup">
      <form action="https://kdhdance.us1.list-manage.com/subscribe/post?u=9c082ad3171554d61d5303fd5&amp;id=63af082203" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
      	<h5>SUBSCRIBE TO THE KDH DANCE MAILING LIST</h5>
      <div class="mc-field-group">
      	<label for="mce-EMAIL"></label>
      	<input type="email" value="email address" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      	<div id="mce-responses" class="clear">
      		<div class="response" id="mce-error-response" style="display:none"></div>
      		<div class="response" id="mce-success-response" style="display:none"></div>
      	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9c082ad3171554d61d5303fd5_63af082203" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->

    </div> <!-- end page-body -->
  </div>
</main>
<?php get_footer(); ?>
