<?php
/*
  Template Name: Projects Page
*/
?>
<?php get_header(); ?>

<!-- HTML goes here  -->
<div class="page-space">
        <?php
//this is normally where the WP Loop would be. Instead we add a loop to get pods stuff
  $mypod = pods('mypods');
  $mypod->find('name Projects');      
?>

  <?php while ( $mypod->fetch() ) : ?>

    <?php
      // set our variables
      $name= $mypod->field('name');
      $permalink= $mypod->field('permalink');
    ?>
<div id="<?php echo $permalink; ?>" class="slide">

<h1><a href="<?php echo $permalink; ?>"><?php echo $name; ?></a></h1>

</div><!-- close -->
<?php endwhile; ?>
		</div><!-- #content -->
	        </div><!-- #primary -->


</div>


<?php get_footer(); ?>
