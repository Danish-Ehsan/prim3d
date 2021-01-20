<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prim3d
 */

get_header();
?>

	<main id="primary" class="site-main page__get-prim3d">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'get-prim3d' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
