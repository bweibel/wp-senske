<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$location_name = get_field('short_title');
$location_name_full = get_field('full_title');
$phone = get_field('phone_number');
$hours = get_field('hours');

$services = get_field('services');

$post_type = $senske_services;
$taxonomy = 'service_category';

$yotpo_id = get_field('yotpo_id');

?>

	<section class="location-info ">
		<section class="location-content">
			<?php
			get_template_part( 'template-parts/service-landing/location_header' );
			get_template_part( 'template-parts/content/entry_content', get_post_type() );
			?>
		</section>
		<?php get_template_part( 'template-parts/service-landing/location_card', 'location', array('location' => $post ) ); ?>
	</section>

	<?php
	//
	// Programs CTA.
	//
	$programs_cta = get_field( 'programs_cta' );
	if ( $programs_cta ) {
		$args = array(
			'programs'   => $programs_cta['programs'],
			'title'      => $programs_cta['title'],
			'subtitle'   => $programs_cta['sub_title'],
			'has_button' => $programs_cta['has_quote_button'],
			'content'	 => $programs_cta['content']
		);
		get_template_part( 'template-parts/service-landing/location_program_cta', '', $args );
	}
	?>

	<?php
	//
	// Individual Residential Services.
	//
	?>
	<?php if ( have_rows( 'services_individual' ) ) : ?>
		<?php while ( have_rows( 'services_individual' ) ) : the_row(); ?>
		<section class="individual-services services location-section">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
				<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
				<h3 class="underlined"><?php echo get_sub_field('title');  ?></h3>
			</header>
			<?php the_sub_field('content'); ?>

			<?php
			$args = array(
				'services' => get_sub_field('services'),
				'title'    => get_sub_field('title'),
				'sub_title' => get_sub_field('sub_title'),

			);

			get_template_part( 'template-parts/services/service_list', '', $args );
			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>



	<?php if ( have_rows( 'resources' ) ) : ?>
		<?php while ( have_rows( 'resources' ) ) : the_row(); ?>
		<section class="resources location-section fullwidth" id="resources">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
					<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
					<h3 class="underlined"><?php echo get_sub_field('title'); ?></h3>
			</header>

			<div class="entry-content">
				<?php the_sub_field('content'); ?>
			</div>
			<?php get_template_part( 'template-parts/service-landing/location_resources_list', '', array( 'location_name' => $location_name ) );?>

		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php get_template_part( 'template-parts/components/senske_promise' ); ?>


	<?php get_template_part( 'template-parts/acf/flexible', get_post_type(), array( 'row_group' => 'page_blocks' ) ); ?>



<?php
