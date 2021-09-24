<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$service = $args['service'];

$service_fields = get_fields( $service );
$icon_url = $service_fields['icon']['url'];
$content = get_the_excerpt(  $service );
?>


<li class="services-item">
	<?php get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url ) ); ?>
	<div class="service-info">
		<h4 class="service-title"><?php echo $service->post_title; ?></h4>
		<?php echo $content; ?>
	</div>
</li>


