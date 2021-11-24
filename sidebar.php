<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use is_single;

if ( ! wp_rig()->is_primary_sidebar_active() ) {
	return;
}

wp_rig()->print_styles( 'wp-rig-sidebar', 'wp-rig-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<div class="sidebar">
		<h2 class="screen-reader-text"><?php esc_attr_e( 'Asides', 'senske' ); ?></h2>
		<?php

		if ( get_post_type() === 'senske_location' ) {
			wp_rig()->display_services_sidebar();
			?>
			<a href="/pricing-service-plans/" class="button button-green">< All Senske Services</a>
			<?php
		} elseif ( get_post_type() === 'senske_service' ) {
			wp_rig()->display_services_sidebar();
			?>
			<a href="/pricing-service-plans/" class="button button-green">< All Senske Services</a>

			<?php
		}   elseif ( get_post_type() === 'location_service' || get_page_template_slug() === 'page-location_service.php' ) {
			// Location service
			$parent_location = get_field('parent_location')[0];
			// wp_rig()->display_services_sidebar();
			get_template_part( 'template-parts/location/location_card', 'location_service', array('location' => $parent_location) );

			?>
			<?php
		} else {
			wp_rig()->display_primary_sidebar();
			wp_rig()->display_blog_sidebar();
			// Show post navigation only when the post type is 'post' or has an archive.
			if ( is_single() && 'post' == get_post_type() ) {
				the_post_navigation(
					array(
						'prev_text' => esc_html__( 'Previous', 'wp-rig' ),
						'next_text' => esc_html__( 'Next', 'wp-rig' ),
					)
				);
			}
		}
		?>
	</div>
</aside><!-- #secondary -->

<?php  ?>
