<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;
use get_the_permalink;

$service = $args['service'];
$location_link = $args['location_link'];

$service_fields = get_fields( $service );
$icon_url = $service_fields['icon']['url'];
$content = get_field( 'excerpt' );

$service_id = $service->ID;



$args = array(
	'numberposts'=>-1,
	'post_type' => 'location_service',
	'meta_query' => array (
		array(
			'key'    => 'parent_service',
			'value'  =>  2400,
			'compare'=> 'LIKE',
		)
	)
);

$location_links = get_posts( $args );
print_r($location_links);

if( $location_links) {
	$link = "#";
} else {
	$link = get_the_permalink( $service );
}
?>

<li class="services-item" id=<?php echo $service->ID ?>>

	<?php get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url ) ); ?>
	<div class="service-info">
		<h4 class="service-title"><?php echo  esc_html( $service->post_title ); ?></h4>
		<?php echo esc_html( $content ); ?>
		<a class="services-link" href="<?php echo  esc_html( $link ); ?>" aria-label="Link to Service <?php echo  esc_html( $service->post_title ); ?>">Read More ></a>
	</div>
</li>


