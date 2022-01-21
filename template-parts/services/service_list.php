<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

wp_enqueue_script('senske-serviceslist');

$services = $args['services'];
$location = $args['location'];
$full_content = $args['full_content'];

?>

<ul class="services-list">

	<?php

	if ( $services ) {
		foreach ( $services as $service ) {
			$args = array(
				'service'      => $service,
				'full_content' => false,
				'location'     => $location,
			);
			// If this list has a location, use the location specific service items
			if ( $location ) {
				get_template_part( 'template-parts/services/service_item-location', '', $args );
			} else {
				get_template_part( 'template-parts/services/service_item', '', $args );
			}
		}
	}
	?>
</ul>


