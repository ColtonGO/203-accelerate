<?php
/**
 * This is the template for the about / services page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section class="about-hero">
		<?php
		$size = 'full';
		$hero_image = get_field('hero_image');
		$hero_text = get_field('hero_text');
		?>
		<?php if($hero_image) {
			echo wp_get_attachment_image( $hero_image, $size );
			} ?>
	</section>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

	<section class="our-services">
		<div class="site-content">
			
			<ul class="services">
				<?php query_posts('post_type=services'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$service_icon = get_field('service_icon');
						$size = 'full';
					?>
					<li class="service">
						<aside class="services-sidebar">
							<?php if($service_icon) {
								echo wp_get_attachment_image( $service_icon, $size );
							} ?>
						</aside>

						<div class="service-description">
							<h2><?php the_title(); ?></h2>

							<?php the_content(); ?>
						</div>

					</li>
						
				<?php endwhile; // end of the loop. ?>
			</ul>

		</div><!-- .main-content -->


				</section>

<?php get_footer(); ?>
