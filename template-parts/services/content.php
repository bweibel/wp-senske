<?php
/**
 * Template part for displaying main services page
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use function wp_enqueue_script;

use WP_Query;

senske()->print_styles( 'senske-content', 'senske-services' );
wp_enqueue_script('senske-optionslist');

$post_type = 'senske_services';
$taxonomy = 'service_category';

?>


	<?php
	//
	// Programs CTA.
	//
	if( get_field('show_programs') ) {
		$programs_cta = get_field( 'programs_cta' );
		if ( $programs_cta ) {
			$args = array(
				'programs' => $programs_cta['programs'],
				'title'    => $programs_cta['title'],
				'sub_title' => $programs_cta['sub_title'],
				'has_button' => true,
				'show_options' => true,
				'full_content' => true,
			);
			get_template_part( 'template-parts/services/services_program_cta', '', $args );
		}
	}

	?>

	<?php
	get_template_part( 'template-parts/content/entry', 'page' );
	?>

	<?php
	//
	// Individual Residential Services.
	//
	?>
<?php if ( have_rows( 'services_individual' ) && get_field('show_individual_services') ) : ?>
		<?php while ( have_rows( 'services_individual' ) ) : the_row(); ?>
	<section id="individual" class="individual-services services services-section">
		<?php if ( get_sub_field('sub_title') || get_sub_field('title') ) : ?>
		<header class="section-header">
			<?php if ( get_sub_field('sub_title') ) : ?>
			<h4 class="small subtitle"><?php echo get_sub_field('sub_title') ?></h4>
			<?php endif; ?>
			<h3 class="section-title underlined"><?php echo get_sub_field('title'); ?></h3>
		</header>
		<?php endif; ?>

		<?php the_sub_field('content'); ?>

		<?php
		$args = array(
			'services' => get_sub_field('services'),
			'title'    => get_sub_field('title'),
			'sub_title' => get_sub_field('sub_title')
		);

		get_template_part( 'template-parts/services/service_list', '', $args );
		?>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>

	<?php
	// Senske Difference.
	if ( have_rows( 'senske_difference' ) && get_field('show_general_content') ) : ?>
		<?php while ( have_rows( 'senske_difference' ) ) : the_row(); ?>
		<section class="services-section">
		<?php if ( get_sub_field('sub_title') || get_sub_field('title') ) : ?>
		<header class="section-header">
			<?php if ( get_sub_field('subtitle') ) : ?>
			<h4 class="small subtitle"><?php echo get_sub_field('subtitle') ?></h4>
			<?php endif; ?>
			<h3 class="section-title underlined"><?php echo get_sub_field('title')  ?></h3>
		</header>
		<?php endif; ?>
		<?php the_sub_field('content'); ?>
		</section>
		<?php endwhile;
	endif;
	?>

	<?php
	//
	// Individual Commercial Services.
	//
	?>
	<?php if ( have_rows( 'services_commercial' ) && get_field('show_individual_services') ) : ?>
		<?php while ( have_rows( 'services_commercial' ) ) : the_row(); ?>
		<section id="commercial" class="commercial-services services services-section">
			<header >
				<?php if ( get_sub_field('sub_title') ) : ?>
				<h4 class="small subtitle"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
				<h3 class="section-title underlined"><?php echo get_sub_field('title')  ?></h3>
			</header>
			<?php

			the_sub_field('content');

			$args = array(
				'services'  => get_sub_field('services'),
				'title'     => get_sub_field('title'),
				'sub_title' => get_sub_field('sub_title'),
			);

			get_template_part( 'template-parts/services/service_list', 'location', $args );
			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'feedback' ) ) : ?>
		<?php while ( have_rows( 'feedback' ) ) : the_row(); ?>
		<section class="services-section">
			<?php if ( get_sub_field('sub_title') || get_sub_field('title') ) : ?>
				<header class="section-header">
					<?php if ( get_sub_field('subtitle') ) : ?>
					<h4 class="small subtitle"><?php echo get_sub_field('subtitle') ?></h4>
					<?php endif; ?>
					<h3 class="section-title underlined"><?php echo get_sub_field('title')  ?></h3>
				</header>
			<?php
			endif;
			get_template_part( 'template-parts/components/yotpo' );
			?>
		</section>
		<?php
		endwhile;
	endif;
	?>


