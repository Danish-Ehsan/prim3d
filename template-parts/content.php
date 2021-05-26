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
		$current_post_ID = get_the_ID();
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
			
				$prim3d_topics = new WP_Query( array(
					'post_type'	=> 'prim3d_topics'
				) );
				
				$section_title = (get_language_attributes() == 'lang="en-US"') ? 'Prim3d Topics' : 'Sujets Prim3d';

				if ( $prim3d_topics->have_posts() ) :
					echo '<div class="page-navigation__topics-carousel-cont">';
					echo "<h2 class=\"page-navigation__topics-carousel-header\">$section_title</h2>";
					echo '<div class="prim3d-topics-carousel__cont owl-carousel owl-theme">';
					while ( $prim3d_topics->have_posts() ) :
						$prim3d_topics->the_post();
						if (get_the_ID() != $current_post_ID) :
			?>
			<div class="prim3d-topics-carousel__item-cont">
				<div class="prim3d-topics-carousel__image-cont" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"><a href="<?php the_permalink(); ?>"></a></div>
				<div class="prim3d-topics-carousel__copy-cont">
					<a href="<?php the_permalink(); ?>" class="prim3d-topics-carousel__title"><?php the_title(); ?></a>
				</div>
			</div>
			<?php
						endif;
					endwhile;
					wp_reset_postdata();
					echo '</div></div>';
				endif;
			?>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
