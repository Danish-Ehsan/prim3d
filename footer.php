<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prim3d
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer__top-row-cont">
			<div class="footer__gmsh-logo">
				<a href="http://www.gmsh.ca/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/gmsh_logo.png'; ?>" alt="Gay Men's Sexual Health Logo"></a>
			</div>
			<div class="footer__nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location'	=> 'footer-menu',
						'menu_id'			=> 'footer-menu',
						'container_class'	=> 'footer__menu-cont',
						'menu_class'		=> 'footer__menu-list'
					)
				);
				?>
			</div>
			<div class="footer__socials-cont">
				<a href="https://twitter.com/GMSHAlliance" class="footer__social_icon footer__social_icon-tw" target="_blank"></a>
				<a href="https://www.facebook.com/GMSHAlliance" class="footer__social_icon footer__social_icon-fb" target="_blank"></a>
				<a href="https://www.instagram.com/gaymenssexualhealthalliance/" class="footer__social_icon footer__social_icon-insta" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UCnGJjn0Xn37GiXv0F3jBTTA" class="footer__social_icon footer__social_icon-yt" target="_blank"></a>
			</div>
		</div>
		<div class="footer__bottom-row">
			<span class="footer__copyright-info">&#169; 2021 Gay Men’s Sexual Health Alliance</span>
			<a href="<?php echo get_privacy_policy_url(); ?>" class="footer__privacy-link">Privacy Policy</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
