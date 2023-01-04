<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use is_single;

if ( ! senske()->is_primary_sidebar_active() ) {
	return;
}

senske()->print_styles( 'senske-sidebar', 'senske-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<div class="sidebar">
		<h2 class="screen-reader-text"><?php esc_attr_e( 'Asides', 'senske' ); ?></h2>
		<?php

		if ( get_post_type() === 'senske_location' ) {
				senske()->display_services_sidebar();

		} elseif ( get_post_type() === 'senske_services' ) {
			senske()->display_services_sidebar();
		} elseif ( get_post_type() === 'location_service' || get_page_template_slug() === 'page-location_service.php' ) {
			// Location service
			$parent_location = get_field('parent_location')[0];
			get_template_part( 'template-parts/location/location_card', 'location_service', array('location' => $parent_location) );
			// senske()->display_services_sidebar();
			?>
			<?php
		} else {
			senske()->display_primary_sidebar();
			senske()->display_blog_sidebar();
			// Show post navigation only when the post type is 'post' or has an archive.
			if ( is_single() && 'post' == get_post_type() ) {
				the_post_navigation(
					array(
						'prev_text' => esc_html__( 'Previous', 'senske' ),
						'next_text' => esc_html__( 'Next', 'senske' ),
					)
				);
			}
		}
		?>
	</div>
</aside><!-- #secondary -->

<?php  ?>
