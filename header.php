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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet">

  </head>


  <body <?php body_class(""); ?>>
    <div id="body-wrapper" class="loading">
    <header>
      <nav id="sticky-nav" class="sticky navbar flex">
        <div class="title-wrapper flex">
          <a id="nav-text" class="flex" href="<?php bloginfo('url'); ?>">
            <span class="blue navtext">K<span class="hideMe">athy</span>D<span class="hideMe">unn</span>H<span class="hideMe">amrick</span>
            </span>
            <span class="pink navtext">Dance</span>
          </a>

          <div class="menu-button toggle-menu flex" role="navigation">
            <span></span>
            <span></span>
            <span></span>
            <!-- <p id="menu-text">MENU</p> -->
        </div>
      </div> <!-- end title-wrapper -->
    </nav>

    <div class="menu" role="menu">
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
  </header>
