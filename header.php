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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'prim3d' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header__top-image" style="background-image: url(<?php echo get_template_directory_uri() . '/images/header_background.png'; ?>);"></div>
		<div class="site-branding header__logo">
			<?php the_custom_logo(); ?>
			<button class="menu-toggle header__nav-btn" aria-controls="primary-menu" aria-expanded="false">
				<div class="header__nav-btn-line"></div>
				<div class="header__nav-btn-line"></div>
				<div class="header__nav-btn-line"></div>
			</button>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation header__nav">
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
			<a href="<?php echo get_privacy_policy_url(); ?>" class="header__privacy-policy">Privacy Policy</a>
			<div class="header__socials-cont">
				<a href="https://twitter.com/GMSHAlliance" class="header__social_icon header__social_icon-tw" target="_blank"></a>
				<a href="https://www.facebook.com/GMSHAlliance" class="header__social_icon header__social_icon-fb" target="_blank"></a>
				<a href="https://www.instagram.com/gaymenssexualhealthalliance/" class="header__social_icon header__social_icon-insta" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UCnGJjn0Xn37GiXv0F3jBTTA"" class="header__social_icon header__social_icon-yt" target="_blank"></a>
			</div>
		</nav><!-- #site-navigation -->
		<button class="header__search-btn"><img src="<?php echo get_template_directory_uri() . '/images/search_icon.png'; ?>" alt="search-icon"></button>
		<div class="header__search-field-cont">
			<!--<input type="text" name="search" class="header__search-field">-->
			<?php get_search_form(); ?>
		</div>
	</header><!-- #masthead -->
