<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="footer-content">
	<div class="connect">
		<?php get_template_part( 'template-parts/components/phone_link' ); ?>
		<?php get_template_part( 'template-parts/components/social_links' ); ?>
	</div>
	<div class="services">
		<?php get_template_part( 'template-parts/components/services_list' ); ?>
	</div>
	<div class="find">
		<?php get_template_part( 'template-parts/components/location_list' ); ?>
	</div>
</div>
