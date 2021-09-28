<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_enqueue_script('wp-rig-serviceslist');


$services = $args['services'];
$location_link = $args['location_link'];

print_r($location_links);

?>

<ul class="services-list">
	<?php
	if ($services) :
		foreach ( $services as $service ) :
			$args = array(
				'service'      => $service,
				'full_content' => false,
				'location_link' => $location_link,
			);
			get_template_part( 'template-parts/services/service_item', '', $args );
		endforeach;
	endif;
	?>
</ul>


