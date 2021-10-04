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
$location = $args['location'];

// Find the location specific service attached to this generic service
$args = array(
	'numberposts'=> -1,
	'post_type' => 'location_service',
	'meta_query' => array (
		// The parent service
		array(
			'key'    => 'parent_service',
			'value'  =>  $service->ID,
			'compare'=> 'LIKE',
		),
		// the parent location
		array(
			'key'    => 'parent_location',
			'value'  =>  $location->ID,
			'compare'=> 'LIKE',
		),
	)
);

$location_service_links = get_posts( $args );
// There should only be one result on this query, so we'll take the first one.
$location_service = $location_service_links[0];

if( $location_service ) {
	$link = get_the_permalink( $location_service );
} else {
	$link = get_the_permalink( $service );
}

$serivice_class = 'services-item';
if( $location_service ) {
	$serivice_class = $serivice_class . ' has-info';
}
?>


<li class="<?php echo $serivice_class; ?>" id=<?php echo $service->ID; ?>>
	<?php get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url ) ); ?>
	<h4 class="service-title"><?php echo  esc_html( $service->post_title ); ?></h4>
	<?php if ( $location_service ) : ?>
		<div class="service-info">
			<?php
			if ( get_field( 'excerpt', $location_service ) ) {
				echo esc_html( get_field( 'excerpt', $location_service ) );
			} else {
				echo get_the_excerpt( $location_service );
			}
			?>
			<a class="services-link" href="<?php echo esc_html( $link ); ?>" aria-label="Link to Service <?php echo esc_html( $service->post_title ); ?>">Read More ></a>
		</div>
	<?php endif; ?>
	<?php if ( $location_service ) : ?>
				<span class="indicator">V</span>
	<?php endif; ?>
</li>


