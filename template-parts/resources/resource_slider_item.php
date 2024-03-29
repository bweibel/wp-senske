<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$resource = $args['resource'];

$resource_fields = get_fields( $resource );
$image = get_the_post_thumbnail($resource, 'thumbnail');

?>


<li class="slide">
	<div class="resources-item">
		<a class="resources-link" href="<?php echo get_permalink( $resource ); ?>" aria-label="Link to resource <?php echo $resource->post_title; ?>"></a>
		<h4 class="resource-title"><a href="<?php echo get_permalink( $resource ); ?>"><?php echo $resource->post_title; ?></a></h4>
		<?php echo $image; ?>
	</div>
</li>
