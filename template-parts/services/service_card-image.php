<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

// If we're passed an ID, use that
if ( $args ) {
	$service = $args['service'];
	$service_fields = get_fields( $service );
} else {
	$service = $post;
}

$title = $service->post_title;
$icon_url = $service_fields['icon']['url'];
$content =  get_the_content('', false, $service);
$image = get_the_post_thumbnail($service);

//
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
	if( get_field( 'short_title', $location_service)) {
		$title = get_field( 'short_title', $location_service);
	}
} else {
	$link = get_the_permalink( $service );
}


//

print_r( $location_link );

?>

<article <?php post_class( 'service card' ); ?>>
	<header>
		<div class="card-image">
			<a href="<?php echo $link;?>"><?php echo $image;?></a>
		</div>
		<?php get_template_part( 'template-parts/services/service_icon', '', array('icon_url' => $icon_url ) ); ?>
		<a href="<?php echo $link;?>">
		<?php if ( $location ) : ?>
		<h4 class="service-category"><?php echo esc_html( $location->post_title ) . '<br>' . esc_html($title);?></h4>
		<?php else : ?>
		<h4 class="service-category"><?php echo esc_html($title) ?></h4>
		<?php endif; ?>
	</a>
	</header>
	<div class="entry-content">
			<?php
			if( get_field( 'excerpt', $location_service ) ) {
				echo esc_html( get_field( 'excerpt', $location_service) );
			} else {
				echo esc_html($content);
			}
			?>
	</div>
</article>
<?php
