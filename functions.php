<?php

  add_theme_support('menus');
  add_theme_support('post-thumbnails');

  // Stop WordPress from adding <p> tags
  remove_filter( ‘the_content’, ‘wpautop’ );
  remove_filter( ‘the_excerpt’, ‘wpautop’ );


  function register_theme_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Main Menu', 'stereo-lofi')
    )
  );
}

// ------------------------------- NEWS FLASH ----------------------------------

function wpt_create_newsFlash_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsflash-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="newsflash-title">',
    'after_title'   => '</h2>',
  ) );
}
wpt_create_newsFlash_widget( 'News Flash', 'newsflash', 'News Flash!' );


// ------------------------------ NEWS BAR -------------------------------------

// Move Now
function wpt_create_moveNow_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsbar-link-container"><a class="newsbar-link" href="/movenow/"><div id="next-bar" class="newsbar-widget flex">',
    'after_widget'  => '</div></a></div>',
    'before_title'  => '<p class="newsbar-title flex">',
    'after_title'   => '<i class="fas fa-long-arrow-alt-right"></i></p>',
  ) );
}
wpt_create_moveNow_widget( 'Move Now', 'moveNow', 'Move Now' );




// Next Up
function wpt_create_nextUp_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsbar-link-container"><a class="newsbar-link" href="/upcoming-performances/"><div id="next-bar" class="newsbar-widget flex">',
    'after_widget'  => '</div></a></div>',
    'before_title'  => '<p class="newsbar-title flex">',
    'after_title'   => '<i class="fas fa-long-arrow-alt-right"></i></p>',
  ) );
}
wpt_create_nextUp_widget( 'Next Up', 'nextup', 'Next Up' );

// Say What
function wpt_create_saywhat_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsbar-link-container"><a class="newsbar-link" href="/press/"><div id="saywhat-bar" class="newsbar-widget flex">',
    'after_widget'  => '</div></a></div>',
    'before_title'  => '<p class="newsbar-title flex">',
    'after_title'   => '<i class="fas fa-long-arrow-alt-right"></i></p>',
  ) );
}
wpt_create_saywhat_widget( 'Say What', 'saywhat', 'Say What' );

// Classes
function wpt_create_classes_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsbar-link-container"><a class="newsbar-link" href="/classes/"><div id="class-bar" class="newsbar-widget flex">',
    'after_widget'  => '</div></a></div>',
    'before_title'  => '<p class="newsbar-title flex">',
    'after_title'   => '<i class="fas fa-long-arrow-alt-right"></i></p>',
  ) );
}
wpt_create_classes_widget( 'Classes', 'classes', 'Classes' );

// Outreach
function wpt_create_outreach_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsbar-link-container"><a  class="newsbar-link" href="/outreach/"><div id="outreach-bar" class="newsbar-widget flex">',
    'after_widget'  => '</div></a></div>',
    'before_title'  => '<p class="newsbar-title flex">',
    'after_title'   => '<i class="fas fa-long-arrow-alt-right"></i></p>',
  ) );
}
wpt_create_outreach_widget( 'Outreach', 'outreach', 'Outreach' );

// Contribute
function wpt_create_contribute_widget( $name, $id, $description ) {
  register_sidebar( array(
    'name'          => __( $name ),
    'id'            => $id,
    'description'   => __( $description ),
    'before_widget' => '<div class="newsbar-link-container"><a  class="newsbar-link" href="/contribute/"><div id="contribute-bar" class="newsbar-widget flex">',
    'after_widget'  => '</div></a></div>',
    'before_title'  => '<p class="newsbar-title flex">',
    'after_title'   => '<i class="fas fa-long-arrow-alt-right"></i></p>',
  ) );
}
wpt_create_contribute_widget( 'Contribute', 'contribute', 'Contribute' );



// -------------------------------- NAVWALKER ----------------------------------
require_once('class-wp-bootstrap-navwalker.php');
add_action( 'init', 'register_theme_menus');

  // Create Footer Widget Sidebar
  function wpt_create_footer_widget( $name, $id, $description ) {
    register_sidebar(array(
      'name'          => __( $name ),
      'id'            => $id,
      'description'   => __( $description ),
      'before_widget' => '<div class="col-sm d-flex footer-col">',
      'after_widget'  => '</div>',
      'before_title'  => '<u><h5 class="module-heading">',
      'after_title'   => '</h5></u>'
    ));
  }
  wpt_create_footer_widget( 'Footer', 'footer', 'Customize the footer.');


  //namespace
  function stfi_theme_styles() {

    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize-min.css ');
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css ');
    //add all @import links (google fonts, etc)
    //wp_enqueue_style( 'normalize_css', 'http://');
    wp_enqueue_style('swiper_css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css');
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css ');
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css' );
  }

  add_action( 'wp_enqueue_scripts', 'stfi_theme_styles');

  function stfi_theme_js() {
    //load js files sequentially, boolean asks if you want in footer or not
    //wp_enquere_script( 'name_handler', get_template_directory_uri() . '/js/file.js', 'array(dependency)', 'version(blank)', true)
    // ex: wp_enqueue_script( 'main_js',  get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true))
    // seen above, app.js depends on jquery and foundation.js
    //an alternative method would be putting links in header or body/footer - this hides the url environment
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script('text/js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js');
    wp_enqueue_script('text/js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js.map');
    wp_enqueue_script( 'jquery-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ));
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', true);
    wp_enqueue_script( 'myscript.js', get_template_directory_uri() . '/js/myscript.js');


  }
  add_action( 'wp_enqueue_scripts', 'stfi_theme_js');


?>
