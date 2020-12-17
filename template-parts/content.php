<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prim3d
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-cont' ); ?>>
	<header class="content-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="content-cont">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'prim3d' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<div class="page-navigation">
			<?php
				if ( get_previous_post() ) {
					echo '<div class="page-navigation__prev">';
					previous_post_link( '%link', '%title');
					echo '</div>';
				}
				if ( get_next_post() ) {
					echo '<div class="page-navigation__next">';
					next_post_link( '%link', '%title' );
					echo '</div>';
				}
			?>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
