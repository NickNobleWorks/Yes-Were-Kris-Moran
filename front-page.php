<?php
/**
 * The front page for our theme.
 *
 * @package Km
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta name="description" content="Set decorator, production designer, and art director based in New York City. Work includes Moonrise Kingdom, Doubt, The Darjeeling Limited, Dark Horse...">

<script src="https://use.typekit.net/aqg6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'km' ); ?></a>

  <header id="masthead" class="site-header" role="banner">

    <?php if ( get_header_image() ) : ?>

    <img class="splash" src="<?php header_image(); ?>" alt="Yes we're Kris Moran!">

    <?php endif; // End header image check. ?>
  

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->

  </header><!-- #masthead -->

  <div id="content" class="site-content">


<?php 
get_footer();