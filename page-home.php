<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div class="body-skin pink2blue">
  <div class="body-wrap">
    <div class="home-col">
      <div class="newsbar flex">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("News Flash") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Next Up") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Recent") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Classes") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Outreach") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contribute") ) : ?>
        <?php endif; ?>
      </div>
      <div class="scroll page-body">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <hr>
          <?php the_content(); ?>
          <?php if( have_rows('Sponsor Row 1') ): ?>
            <?php while( have_rows('sponsor') ): the_row();
        		// vars
        		$row = get_row();

        		if( $row['image'] ): ?>
        			<img src="<?php echo $row['image']; ?>" />
        			<p><?php echo $row['caption']; ?></p>
        		<?php endif; ?>
        	<?php endwhile; ?>
        <?php endif; ?>
      </div> <!-- end page-body -->
    </div> <!-- end home-col -->
    <?php endwhile; endif; ?>
    
  </div> <!-- end body-wrap -->
</div> <!-- end body-skin -->
<?php get_footer(); ?>
