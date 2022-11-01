<?php
/**
 * Template part for displaying a slider of resources
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

wp_enqueue_script('senske-resourcelist');
senske()->print_styles( 'senske-flexslider' );



$images = $args['images'];



?>
<div class="flexslider resource-slider career-slider">
	<ul class="career-list slides">
		<?php
		if ($images) :

			foreach ( $images as $image ) :
				$args = array(
					'image'      => $image,
					'full_content' => false,
				);
			?>
			<?php get_template_part( 'template-parts/careers/career_slider_item', '', $args );
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
			itemWidth: 310,
			itemMargin: 28,
			maxItems: 3,
			useCSS: true,
			prevText: "Previous",
			nextText: "Next",
			touch: true,
		});
	});
</script>
