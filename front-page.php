<?php
/**
 * The template for displaying the Front Page
 *
 * This is the template that displays the Front Page.
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

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="content-cont">
				<?php
					the_content();
					
					$prim3d_topics = new WP_Query( array(
						'post_type'	=> 'prim3d_topics'
					) );
					
					if ( $prim3d_topics->have_posts() ) :
						echo '<div class="front-page__topics-cont">';
						echo '<h2 class="front-page__topics-header">Topics</h2>';
						echo '<div class="front-page__topics-carousel-cont owl-carousel owl-theme">';
						while ( $prim3d_topics->have_posts() ) :
							$prim3d_topics->the_post();
				?>
				<div class="topics-carousel__item-cont">
					<div class="topics-carousel__image-cont" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"><a href="<?php the_permalink(); ?>"></a></div>
					<div class="topics-carousel__copy-cont">
						<a href="<?php the_permalink(); ?>" class="topics-carousel__title"><?php the_title(); ?></a>
						<span class="topics-carousel__excerpt"><?php the_excerpt(); ?></span>
					</div>
				</div>
				<?php
						endwhile;
						wp_reset_postdata();
						echo '</div></div>';
					endif;
				?>
			</div><!-- .content-cont -->
		</article><!-- #post-<?php the_ID(); ?> -->
		
		<?php
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
<?php
get_footer();
