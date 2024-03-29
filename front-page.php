<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
senske()->print_styles( 'senske-content', 'senske-front-page' );


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
					<header class="pull-left">
						<?php if ( get_sub_field('subtitle') ) : ?>
						<h4 class="small"><?php echo get_sub_field( 'subtitle' ) ?></h4>
						<?php endif; ?>
						<h3 class="underlined"><?php echo get_sub_field( 'title' ); ?></h3>
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
					<?php echo do_shortcode( '[display-map id="3554"]' ); ?>
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
						<h3 class="title underlined"><?php echo get_sub_field( 'title' ); ?></h3>
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
						<?php
						if ( get_sub_field( 'cta_card' ) ) :
							$cta_cards = get_sub_field( 'cta_card' );
							foreach ( $cta_cards as $cta_card ) :
								?>
								<div class="card">
									<h4><?php echo $cta_card['title']?></h4>
									<?php echo $cta_card['content']; ?>
									<a href="<?php echo $cta_card['button']['url']; ?>" class="button"><?php echo $cta_card['button']['title']; ?></a>
								</div>
								<?php
							endforeach;
							?>
						<?php endif; ?>
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
					<h3 class="title underlined"><?php echo get_sub_field('title'); ?></h3>
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
					<h3 class="title underlined"><?php echo get_sub_field('title'); ?></h3>
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
