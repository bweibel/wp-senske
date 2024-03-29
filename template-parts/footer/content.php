<?php
/**
 * Template part for displaying the footer info
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use function get_template_directory_uri;

$theme = get_template_directory_uri();
?>

<div class="footer-content">
	<div class="connect">
		<div class="logos" style="display: flex; justify-content: center; align-items: center; max-width: 22em; margin: auto; gap: 1em;">
			<img src="<?php echo $theme . '/assets/images/senske-guarantee-family-owned.png';?>" alt="The Senske Guarantee Seal" class="aligncenter seal">
		</div>
		<?php get_template_part( 'template-parts/components/phone_link' ); ?>

		<?php get_template_part( 'template-parts/components/social_links' ); ?>
	</div>
	<div class="services-links">
		<?php get_template_part( 'template-parts/components/services_list' ); ?>
	</div>
	<div class="find">
		<?php get_template_part( 'template-parts/components/location_list' ); ?>
	</div>
</div>