<?php
/**
 * The template for displaying a single Service.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			
			<?php while ( have_posts() ) : the_post();
				$size = "full";
				$service_icon = get_field('service_icon');?>

			<article class="service">
				<aside class="services-sidebar">
					<?php if($service_icon) {
						echo wp_get_attachment_image( $service_icon, $size );
					} ?>
				</aside>

				<div class="service-description">
					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>
				</div>

			</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/case-studies/') ?>">&larr; <span>Back to work</span></a></div>
	</nav>

<?php get_footer(); ?>
