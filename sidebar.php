<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_sidebar_active() ) {
	return;
}

wp_rig()->print_styles( 'wp-rig-sidebar', 'wp-rig-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<div class="sidebar">
		<h2 class="screen-reader-text"><?php esc_attr_e( 'Asides', 'wp-rig' ); ?></h2>
		<?php
		if ( get_post_type( ) === 'senske_location' ) {
			wp_rig()->display_services_sidebar();
			get_template_part( 'template-parts/services/services_location_list', '', array('service' => $post) );
			?>
			<a href="/pricing-service-plans/" class="button button-green">< All Senske Services</a>
			<?php
		} elseif ( get_post_type() === 'senske_service' ) {
			wp_rig()->display_services_sidebar();
			get_template_part( 'template-parts/services/services_location_list', '', array('service' => $post) );
			?>
			<a href="/pricing-service-plans/" class="button button-green">< All Senske Services</a>
			<?php
		} elseif ( get_post_type() === 'location_service' ) {
			// Location service
			$location = get_field('parent_location');
			// wp_rig()->display_services_sidebar();
			get_template_part( 'template-parts/location/location_card', 'location_service', array('location' => $location) );
		} else {
			wp_rig()->display_primary_sidebar();
		}
		?>
	</div>
</aside><!-- #secondary -->

<?php  ?>
