<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$services = $args['programs'];

?>


<section class="services-cta">
	<header>
		<h4>Enjoy Your Outdoor Space Again</h4>
		<h3>Residential Services in <?php echo get_field('full_title'); ?></h3>
		<hr>
	</header>

	<ul class="service-cards">
	<?php
		foreach( $services as $service ){
			$args= array(
				'service'      => $service,
				'full_content' => true,
				'el_tag'       => 'li'
			);
			get_template_part( 'template-parts/services/service_card', 'image', $args );
		}
		?>
	</ul>
</section>


