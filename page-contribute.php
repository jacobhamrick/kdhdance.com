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

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
        <input name="hosted_button_id" type="hidden" value="JMSGW4D7UYZAW" />
        <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image" />
        <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
      </form>

      <?php if( get_field('contribute-banner') ): ?>
          <img id="contribute-banner" src="<?php the_field('contribute-banner'); ?>" />
      <?php endif; ?>

      <div>
        <?php the_field('contribute-text'); ?>
      </div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
        <input name="hosted_button_id" type="hidden" value="JMSGW4D7UYZAW" />
        <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image" />
        <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
      </form>
</div>
<!-- end page-body -->
</div>
</main>
<?php get_footer(); ?>
