<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kihon
 * @since 1.0.0
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kihon' ); ?></a>

	<header id="site-header" class="site-header" role="banner">
		<div class="container clear">
			<div class="header-branding">
				<h1 class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php if ( get_header_image() ) : ?>
				<div class="header-logo">
					<h1 class="header-logo-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					</h1>
				</div>
				<?php endif; // End header image check. ?>
				<h2 class="header-description screen-reader-text"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .header-branding -->

			<nav id="header-navigation" class="header-navigation">
				<button class="toggle-header-menu">
					<span class="screen-reader-text"><?php _e( 'Header Menu', 'kihon' ); ?></span>
					<i class="fa fa-bars"></i><?php _e( 'Menu', 'kihon' ); ?>
				</button>

				<?php wp_nav_menu( array(
					'theme_location'  => 'header',
					'container_class' => 'header-menu-container',
					'menu_class'      => 'header-menu clear'
				) ); ?>
			</nav><!-- #header-navigation -->
		</div><!-- .container -->
	</header><!-- #site-header -->

	<div id="content" class="site-content">
