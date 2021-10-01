<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$services = $args['services'];
$location = $args['location'];
$title = $args['title'];
$sub_title = $args['sub_title'];

?>


<section class="services-cta location-section">
	<header>
		<h4><?php echo $sub_title ; ?></h4>
		<h3><?php echo $title . ' ' . get_field('full_title'); ?></h3>
		<hr>
	</header>

	<div class="service-cards">
	<?php
	if( $services ) {
		foreach( $services as $service ){
			$args= array(
				'service'      => $service,
				'location'     => $location,
				'full_content' => true,
				'el_tag'       => 'li',
			);
			get_template_part( 'template-parts/services/service_card', 'image', $args );
		}
	}
		?>
	</div>
</section>


