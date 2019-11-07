<?php
/**
 * The template for displaying the case study archive.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
        <?php while ( have_posts() ) : the_post();
				$size = "full";
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');?>

			<article class="case-study">
				<aside class="case-study-sidebar">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
				<h6 class="grey-font"><?php echo $services; ?></h6>
				<h6>Client: <?php echo $client; ?></h6>

				<?php the_excerpt(); ?>

				<p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site ></a></strong></p>
				</aside>

				<div class="case-study-images">
                    <a href="<?php the_permalink(); ?>">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
                     } ?>
                     </a>
				</div>

			</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>