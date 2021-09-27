<?php
/**
 * Template part for displaying main services page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-location' );

$post_type = 'senske_services';
$taxonomy = 'service_category';



	the_title('<h1>', '</h1>');
?>



	<?php
	//
	// Programs CTA.
	//
	$programs_cta = get_field( 'programs_cta' );
	if ( $programs_cta ) {
		$args = array(
			'programs' => $programs_cta['programs'],
			'title'    => $programs_cta['title'],
			'sub_title' => $programs_cta['sub_title'],
		);
		get_template_part( 'template-parts/location/location_program_cta', '', $args );
	}
	?>
	<?php
	//
	// Residential Services.
	//
	$args = array(
		'post_type' => $post_type,
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'field' => 'slug',
				'terms' => 'individual-services'
			)
		)
	);
	$residential_query = new WP_Query( $args );
	$services_residential = $residential_query->posts;

	// print_r($services);

	if ( $services_residential ) {
		$args = array(
			'services' => $services_residential,
		);
		get_template_part( 'template-parts/services/service_list', '', $args );
	}
	?>

	<?php
	//
	// Individual Residential Services.
	//
	?>

	<section class="individual-services services services-section">
		<header>
			<?php if ( get_sub_field('sub_title') ) : ?>
			<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
			<?php endif; ?>
			<h3><?php echo get_sub_field('title') . ' ' . $location_name_full; ?></h3>
			<hr>
		</header>
		<?php the_sub_field('content'); ?>

		<?php
		$args = array(
			'services' => get_sub_field('services'),
			'title'    => get_sub_field('title'),
			'sub_title' => get_sub_field('sub_title'),
		);

		get_template_part( 'template-parts/services/service_list', 'location', $args );
		?>
	</section>


	<?php // Senske Promise. ?>

	<?php // Senske Difference. ?>

	<?php
	//
	// Individual Commercial Services.
	//
	?>
	<?php if ( have_rows( 'services_commercial' ) ) : ?>
		<?php while ( have_rows( 'services_commercial' ) ) : the_row(); ?>
		<section class="commercial-services services location-section">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
				<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
				<h3><?php echo get_sub_field('title') . ' ' . $location_name_full; ?></h3>
				<hr>
			</header>
			<?php the_sub_field('content'); ?>
			<?php

			$args = array(
				'services' => get_sub_field('services'),
				'title'    => get_sub_field('title'),
				'sub_title' => get_sub_field('sub_title'),
			);

			get_template_part( 'template-parts/services/service_list', 'location', $args );
			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>



<?php
