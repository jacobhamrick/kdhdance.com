<?php
/*
  Template Name: Contribute
*/
?>
<?php get_header(); ?>

<main>
  <div class="main-body scroll">
    <div class="page-body <?php wp_title('', true,''); echo '-div'?>">
      <h2 class="page-title" id="contribute-title"><?php wp_title('', true,''); ?></h2>
      <h3 class="preheader" id="contribute-preheader"><?php the_field('contribute-preheader'); ?></h3>
      <form action="https://www.paypal.com/donate" method="post" target="_center" style="text-align: center;">
    		<input type="hidden" name="hosted_button_id" value="TBMGK8ELD5M4Y" />
    		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
    		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    	</form>
      <p style="text-align: center;">Venmo <i class="far fa-hand-point-right"></i> @kdhdance</p>

      <?php if( get_field('contribute-banner') ): ?>
          <img id="contribute-banner" src="<?php the_field('contribute-banner'); ?>" />
      <?php endif; ?>

      <div>
        <?php the_field('contribute-text'); ?>
      </div>

      <form action="https://www.paypal.com/donate" method="post" target="_center" style="text-align: center;">
    		<input type="hidden" name="hosted_button_id" value="TBMGK8ELD5M4Y" />
    		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
    		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    	</form>
      <p style="text-align: center;">Venmo <i class="far fa-hand-point-right"></i> @kdhdance</p>

</div>
<!-- end page-body -->
</div>
</main>
<?php get_footer(); ?>
