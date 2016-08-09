<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garyt
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="header-hero">


	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'garyt' ); ?></a>
	<header id="masthead" class="site-header" role="banner">



		<div class="site-branding">
		   <a href="home"><span class="logo-1"></span></a>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'garyt' ); ?>

<div class="menuBtn-icon">
  <span class="menuBtn-icon-line01"></span>
  <span class="menuBtn-icon-line02"></span>
  <span class="menuBtn-icon-line03"></span>
</div>


			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="intro-1">
          <h1>Gary Thomson</h1>
          <h2 class="lead-1">Bespoke Joinery.</h2>
          <a href="story" class="more-1">GT Story ></a><span class="separator"> | </span><a href="enquiries" class="more-2">Enquiries ></a>
         </div>

         <div class="callout">
           <div class="container">
           <div class="row">
             <div class="col col--12-of-12">
               <h2 class="lead-2">Specialist in Fitted Alcove Furniture.</h2>

            </div>
           </div>
         </div>
         </div>

	</header><!-- #masthead -->
</div><!-- #header-1 wrapper -->
	<div id="content" class="site-content">
