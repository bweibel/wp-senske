<?php
/**
 * Template part for displaying main services page
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

senske()->print_styles( 'senske-content', 'senske-services' );

$post_type = 'senske_services';
$taxonomy = 'service_category';

?>

	<main id="primary" class="site-main">
		<?php
		if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
		}
		?>
	</main><!-- #primary -->

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


	<?php if ( have_rows( 'feedback' ) ) : ?>
		<?php while ( have_rows( 'feedback' ) ) : the_row(); ?>
		<section class="services-section">
			<header class="section-header">
				<?php if ( get_sub_field('subtitle') ) : ?>
				<h4 class="small subtitle"><?php echo get_sub_field('subtitle') ?></h4>
				<?php endif; ?>
				<h3 class="section-title underlined"><?php echo get_sub_field('title') . ' ' . $location_name_full; ?></h3>
			</header>
			<?php
			get_template_part( 'template-parts/components/yotpo' );
			?>
		</section>
		<?php
		endwhile;
	endif;
	?>


