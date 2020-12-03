<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prim3d
 */

get_header();
?>

	<main id="primary" class="site-main prim3d-topics-archive">

		<?php if ( have_posts() ) : ?>

			<header class="page-header prim3d-topics-archive__header">
				<?php
				echo '<h1 class="page-title">';
				post_type_archive_title();
				echo '</h1>';
				?>
				<span class="prim3d-topics-archive__subheader">Explore various sections of the online PRIM3D guide in detail.</span>
			</header><!-- .page-header -->
			<div class="prim3d-topics-archive__all-articles-cont">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>
			<a href="<?php the_permalink(); ?>" class="prim3d-topics-archive__article-cont">
				<span class="prim3d-topics-archive__article-title"><?php the_title(); ?></span>
				<span class="prim3d-topics-archive__article-excerpt"><?php the_excerpt(); ?></span>
			</a>
			<?php
			endwhile;
			echo '</div>';
		else :

			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
