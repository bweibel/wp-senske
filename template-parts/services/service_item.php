<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$service = $args['service'];
$location_link = $args['location_link'];

$service_fields = get_fields( $service );
$icon_url = $service_fields['icon']['url'];
$content = get_the_excerpt(  $service );

if( !$location_link ) {
	$link = get_the_permalink( $service );
}
?>


<li class="services-item">
	<a class="services-link" href="<?php echo $link; ?>" aria-label="Link to Service <?php echo $service->post_title; ?>"></a>
	<?php get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url ) ); ?>
	<div class="service-info">
		<h4 class="service-title"><?php echo $service->post_title; ?></h4>
		<?php echo $content; ?>
	</div>
</li>


