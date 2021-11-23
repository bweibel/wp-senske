<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$services = $args['services'];
$title = $args['title'];
$sub_title = $args['sub_title'];

$location = $args['location'];

print_r($location);
?>
<section class="services-cta location-section">
	<header>
		<h4><?php echo $sub_title ; ?></h4>
		<h3 class="underlined"><?php echo $title . ' ' . get_field('full_title'); ?></h3>
	</header>

	<div class="service-cards">
	<?php
	if( $services ) {
		foreach( $services as $service ){
			$args= array(
				'service'      => $service,
				'location'     => $location,
				'full_content' => true,
				'el_tag'       => 'li'
			);
			get_template_part( 'template-parts/services/service_card', 'image', $args );
		}
	}
		?>
	</div>
</section>


