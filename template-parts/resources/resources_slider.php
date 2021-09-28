<?php
/**
 * Template part for displaying a slider of resources
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_enqueue_script('wp-rig-resourcelist');
wp_rig()->print_styles( 'wp-rig-flexslider' );



$resources = $args['resources'];



?>
<div class="flexslider resource-slider">
	<ul class="resources-list slides">
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
</div>

<script>
	jQuery(window).load( function() {
		jQuery( '.flexslider' ).flexslider({
			animation: "slide",
			pauseOnHover: true,
			itemWidth: 160,
			itemMargin: 20,
			maxItems: 6,
			useCSS: true,
			prevText: "Previous",
			nextText: "Next",
			touch: true,
		});
	});
</script>
