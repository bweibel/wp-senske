<?php
/**
 * Template part for displaying a slider of resources
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$resources = $args['resources'];


?>
<ul class="resources-list slider">
	<?php
	if ($resources) :

		foreach ( $resources as $resource ) :
			$args = array(
				'resource'      => $resource,
				'full_content' => false,
			);

		?>

		<?php get_template_part( 'template-parts/resources/resource_slider_item', '', $args ); ?>
		<?php
		endforeach;
	endif;
	?>
</ul>


