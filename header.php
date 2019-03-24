<!-- html opening tag+head, opening body tag, nav and header that's the same on every page -->

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>

    <!-- functions.php enqueue styles and scripts loaded here -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  </head>


  <body  <?php body_class(); ?>>
    <nav id="sticky-nav" class="sticky navbar flex">
      <a href="<?php bloginfo('url'); ?>">
        <div class="title-wrapper flex">
              <div class="blue flex">
                <h2>K<span class="hideMe">athy</span>D<span class="hideMe">unn</span>H<span class="hideMe">amrick</span>
                </h2>
              </div>
              <div class="pink flex">
                <h2>Dance</h2>
              </div>
        </div> <!-- end title-wrapper -->
      </a>
    </nav>

    <div class="menu-button toggle-menu">
        <div class="burger-box"><hr class="the-burger top-bun"><hr class="the-burger goods"><hr class="the-burger bottom-bun"></div>
    </div>
    <div class="menu">
      <h2>menu</h2>
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'menu-wrapper',
        'menu_class'        => 'navbar-nav',
        'container_id'      => 'navbarSupportedContent',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()
      ) );
      ?>
    </div> <!-- end #menu -->
