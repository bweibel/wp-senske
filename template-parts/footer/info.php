<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();

?>

<div class="site-info">
	<div class="footer-content">
		<span>Copyright 2021 Senske, Inc. All Rights Reserved</span>
		<span>
			<img src="<?php echo $theme . '/assets/images/isa.png'; ?>" class="footer-logo" alt="ISA logo">
			<img src="<?php echo $theme . '/assets/images/tcia-white-logo.png'; ?>" class="footer-logo" alt="TCIA logo">
		</span>
		<span>
			<span><a href="/terms-conditions/">Terms and Conditions</a></span><span class="sep"> | </span><span><a href="/site-map">Site Map</a></span>
		</span>
	</div>
</div><!-- .site-info -->
