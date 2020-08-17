<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prim3d
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="front-page__gradient">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'prim3d' ); ?></a>

	<header id="masthead" class="site-header header-landing">
		<div class="header__top-image" style="background-image: url(<?php echo get_template_directory_uri() . '/images/header_background.jpg'; ?>);"></div>
		<div class="site-branding header__logo">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation header__nav">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'prim3d' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'	=> 'main-menu',
					'menu_id'			=> 'primary-menu',
					'container_class'	=> 'header__menu-cont',
					'menu_class'		=> 'header__menu-list'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
