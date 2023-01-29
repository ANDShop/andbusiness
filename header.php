<!DOCTYPE html>
<!--html-->
<html <?php language_attributes(); ?>>
<html>
<head>
  <?php wp_head(); ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $url = home_url();?>
</head>

<body <?php body_class(); ?>>
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'andbusiness' ); ?></a>
  <?php $description = get_bloginfo( 'description', 'display' );

if ( get_theme_mod( 'checkbox_sample', true ) ) {
  ?>
  <div class="top-bar">
    <div class="top-bar-content">
      <ul class="top-bar-main">
        <!-- tell -->

        <?php
      $tell = get_option('tell');
      if (empty($tell)) {
        ?>
        <li class="none"></li>
        <?php
      }else {
        ?>
        <li class="top-bar-main-phone"><?php echo $tell ?></li>
        <?php } ?>

        <!-- contact -->
        <?php
      $contact = get_option('contact');
      if (empty($contact)) {
        ?>
        <li class="none"></li>
        <?php
      }else {
        ?>
        <li class="top-bar-main-contact">
          <a href="<?php echo $contact ?>">
            <?php esc_html_e( 'Contact' , 'andbusiness' );?>
          </a>
        </li>
        <?php } ?>

        <!-- access -->
        <?php
      $access = get_option('access');
      if (empty($access)) {
        ?>
        <li class="none"></li>
        <?php
      }else {
        ?>
        <li class="top-bar-main-access">
          <a href="<?php echo $access ?>"><?php esc_html_e( 'Access' , 'andbusiness' );?></a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <!-- top_bar finish -->
  <?php
  }else {
    ?>
  <div class="top-bar none"></div>
  <?php } ?>

  <header id="header_background_color" class="sticky-sidebar">
    <div class="header-inner">
      <div class="main-header main-header-original">
        <div class="main-header-content">

          <!-- logo -->
          <div class="site-branding">
            <div class="site-logo">
              <a href="<?php echo esc_url( $url ); ?>">
                <?php the_custom_logo(); ?>
              </a>
            </div>
          </div>

          <!-- nav -->
          <nav class="main-navigation"　id="site-navigation">
            <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'header-nav',
                'menu_class'      => 'menu-wrapper',
                'container_class' => 'primary-menu-container',
                'items_wrap'      => '<ul id="menu-mainmn" class="menu">%3$s</ul>',
                'fallback_cb'     => false,
                )
              );
              ?>
          </nav>

          <!--sp menu-->
          <button
          class="toggle navbar-toggler hamburger close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal"
          aria-expanded="false"
          data-set-focus=".close-nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </button>
          
        <div class="globalMenuSp cover-modal mobile-menu" role="navigation" data-modal-target-string=".menu-modal">
          <!-- navmenu -->

          <nav class="menu-modal" role="navigation">
          <ul class="reset-list-style">
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'header-nav',
                    'menu'            => 'gnavi',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',
                    'container_id'    => 'header-nav',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'items_wrap'      => '<ul tabindex="-1">%3$s</ul>',
                    'fallback_cb'     => '',
                ) );
                ?>
            </ul>
          </nav>

        </div>

          <!-- main-header-content -->
        </div>
        <!-- main-header -->
      </div>
      <!--end header-inner-->
    </div>
  </header>