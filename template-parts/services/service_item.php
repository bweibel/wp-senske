<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;
use get_the_permalink;

// Service post, handed down from the list
$service = $args['service'];
$service_fields = get_fields( $service );
$icon_url = $service_fields['icon']['url'];

// Location post, handed down from the list
$location_link = $args['location_link'];

// Find the location specific service attached to this generic service
$args = array(
	'numberposts'=> -1,
	'post_type' => 'location_service',
	'meta_query' => array (
		array(
			'key'    => 'parent_service',
			'value'  =>  $service->ID,
			'compare'=> 'LIKE',
		)
	)
);

$location_links = get_posts( $args );

$location_service = $location_links[0];

if( $location_service) {
	$link = get_the_permalink( $location_service );
} else {
	$link = get_the_permalink( $service );
}
?>

<li class="services-item" id=<?php echo $service->ID ?>>
	<?php get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url ) ); ?>
	<h4 class="service-title"><?php echo  esc_html( $service->post_title ); ?></h4>
	<div class="service-info">
		<?php echo esc_html( get_field( 'excerpt', $location_service) ); ?>
		<a class="services-link" href="<?php echo  esc_html( $link ); ?>" aria-label="Link to Service <?php echo  esc_html( $service->post_title ); ?>">Read More ></a>
	</div>
</li>


