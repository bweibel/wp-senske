<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$parent_location = get_field('parent_service');

$service_title = $parent_location[0]->post_title;


?>


<section class="services-cta location-section">
	<header>
		<h4>We Offer <?php echo esc_html( $service_title ) ?> in the following locations:</h4>
	</header>
	<ul>

	</ul>
</section>


