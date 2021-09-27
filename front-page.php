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
					$count = 0;
					foreach( $service_cards as $card ) {
						$count++;
						$popular = $count == 2;
						$service_plan_id = $card['service_plan'][0];
						// get_template_part('template-parts/services/program_card', 'homepage', array('plan_id' => $service_plan_id, 'popular'=> $popular ) );
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
				<h4 class="small"><?php echo get_sub_field('subtitle') ?></h4>
				<?php endif; ?>
				<h3><?php echo get_sub_field('title')  ?></h3>
				<hr>
			</header>
			<?php the_sub_field('content'); ?>
			<?php


			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>



		<?php


		if ( $find_location ) :

			$button_args = array(
				'text' => $find_location['button_title'],
				'link' => $find_location['button_link']['url']
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

	// Senske Difference
	if ( true ) :
	?>
	<section class="home-section senske-difference">

	</section>
	<?php
		endif;
?>
	</main><!-- #primary -->
<?php
get_footer();
