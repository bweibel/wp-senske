<?php
/**
 * Template part for displaying the footer info
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();

?>

<div class="site-info">
	<div class="footer-content">
		<span>Copyright 2021 Senske, Inc. All Rights Reserved</span>
		<span>
			<a href="https://www.isa-arbor.com/Credentials" rel="nofollow" target="_blank"><img src="<?php echo $theme . '/assets/images/isa.png'; ?>" class="footer-logo" alt="ISA logo"></a>
			<a href="https://www.tcia.org/" rel="nofollow" target="_blank"><img src="<?php echo $theme . '/assets/images/tcia-white-logo.png'; ?>" class="footer-logo" alt="TCIA logo"></a>
		</span>
		<span>
			<span><a href="/pest-control-sds/">Pest Conrtol Label/SDS</a></span><span class="sep"> | </span><span><a href="/turf-and-ornamental-sds/">Turf & Ornamental SDS</a></span><br>
			<span><a href="/terms-conditions/">Terms and Conditions</a></span><span class="sep"> | </span><span><a href="/site-map">Site Map</a></span>
		</span>
	</div>
</div><!-- .site-info -->
