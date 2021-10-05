<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );


?>
	<main id="primary" class="site-main">

<?php
	// Hero.
	$hero = get_field('hero');

	get_template_part( 'template-parts/acf/flexible_hero', 'homepage', ['hero' => $hero] );

	// Service Plan and Map.
	$service_cards = get_field('service_card');
	$find_location = get_field('find_my_location');

	if ( $service_cards || $find_location ) :
		if ( $service_cards ) :
		?>
		<section class="home-section services-map">
			<section class="service-plan-cards">
				<header class="tab-header">
					<h3 class="tab-header__heading">Choose Your Service Plan</h3>
				</header>
				<div class="program-cards">
				<?php
				//
				// Programs CTA.
				//
				$programs_cta = get_field( 'programs' );
				if ( $programs_cta ) {
					$args = array(
						'programs' => $programs_cta,
					);
					get_template_part( 'template-parts/location/location_program_cta', 'homepage', $args );
				}
				?>
			</div>
			</section>
		<?php endif; ?>
		<?php if( have_rows('additional_service_content') ): ?>
			<?php while( have_rows('additional_service_content') ): the_row();

				// Get sub field values.
				$icon = get_sub_field('icon');
				$link = get_sub_field('link');
				$icon_url = $icon['url'];
				?>
				<div class="service-extra">
					<?php get_template_part( 'template-parts/services/service_icon', '', array('icon_url' => $icon_url ) ); ?>
					<?php the_sub_field('content'); ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

		<?php if ( have_rows( 'content_group' ) ) : ?>
			<?php while ( have_rows( 'content_group' ) ) : the_row(); ?>
				<section class="service-plans-content">
					<header>
						<?php if ( get_sub_field('subtitle') ) : ?>
						<h4 class="small"><?php echo get_sub_field( 'subtitle' ) ?></h4>
						<?php endif; ?>
						<h3><?php echo get_sub_field( 'title' ); ?></h3>
						<hr>
					</header>
					<?php the_sub_field( 'content' ); ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php

		if ( $find_location ) :

			$button_args = array(
				'text' => $find_location['button_title'],
				'link' => $find_location['button_link']['url'],
			);
			?>
			<section class="find-location">
				<header class="tab-header">
					<h3 class="tab-header__heading">Find Senske Near Me</h3>
				</header>
				<div class="map">
					<?php do_shortcode( '[wpgmza id="1"]' ); ?>
				</div>
				<?php
				get_template_part( 'template-parts/components/button', '', $button_args );
				?>
			</section>

		</section>
		<?php
		endif;
	endif;

	// Senske Difference.
?>

	<section class="home-section senske-difference fullwidth">

		<?php if ( have_rows( 'join_senske' ) ) : ?>
			<?php while ( have_rows( 'join_senske' ) ) : the_row(); ?>
				<section class="join-senske-content">
					<header>
						<?php if ( get_sub_field('subtitle') ) : ?>
						<h4 class="small subtitle"><?php echo get_sub_field( 'subtitle' ); ?></h4>
						<?php endif; ?>
						<h3 class="title"><?php echo get_sub_field( 'title' ); ?></h3>
						<hr>
					</header>
					<div class="grid-container">
						<?php
						if( get_sub_field( 'image' ) ) :
							$image = get_sub_field('image');
							$size = 'full';
							?>
							<div class="image-box">
								<?php if( $image ) : ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="card">
							<h4>Manage Your Senske Services</h4>
							<ul>
								<li>Pay your bill</li>
								<li>Add Additional Services</li>
								<li>Update Your Information</li>
							</ul>
							<a href="https://www.lawngateway.com/SenskeLawnTreeCare/Login_New.aspx" class="button">Enter Client Portal</a>
						</div>
						<div class="card">
							<h4>Join Our Family - Work for Senske!</h4>
							<ul>
								<li>Solid Career Choice</li>
								<li>Competitive Pay</li>
								<li>Flexible Schedules</li>
							</ul>
							<a href="" class="button">Apply for a Career</a>
						</div>
						<div class="content">
							<?php the_sub_field( 'content' ); ?>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<?php if ( have_rows( 'questions' ) ) : ?>
		<?php while ( have_rows( 'questions' ) ) : the_row(); ?>
		<section class="home-section questions">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
					<h4 class="small subtitle"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
					<h3 class="title"><?php echo get_sub_field('title'); ?></h3>
				<hr>
			</header>

			<div class="entry-content">
				<?php the_sub_field('content'); ?>
			</div>

			<?php
			$staff_cards = get_sub_field('staff_cards');
			get_template_part( 'template-parts/frontpage/experts', '', array( 'experts' => $staff_cards ) );
			?>

		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'advice' ) ) : ?>
		<?php while ( have_rows( 'advice' ) ) : the_row(); ?>
		<section class="home-section advice">
			<header>
				<?php if ( get_sub_field('subtitle') ) : ?>
					<h4 class="small subtitle"><?php echo get_sub_field('subtitle') ?></h4>
				<?php endif; ?>
					<h3 class="title"><?php echo get_sub_field('title'); ?></h3>
				<hr>
			</header>
			<?php
			$post = get_sub_field( 'featured_post' )[0];
			if ( $post ) {
				get_template_part( 'template-parts/blog/featured_article', '', array( 'article' => $post ) );
			}
			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>
		<?php get_template_part( 'template-parts/components/yotpo' ); ?>

	</main><!-- #primary -->
<?php
get_footer();
