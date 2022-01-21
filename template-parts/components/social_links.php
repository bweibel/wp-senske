<?php
/**
 * Template part for displaying a button
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

// $social_links = arr('facebook' => 'http://www.facebook.com',	'twitter' => 'http://www.twitter.com',	'youtube' => 'http://www.youtube.com');

$theme = get_template_directory_uri();

?>

<div class="social-links">
	<a href="https://www.facebook.com/SenskeServices" class="social-icon facebook" target="_blank" rel="nofollow">
		<img src="<?php echo $theme . '/assets/images/senske-facebook.png'; ?>" alt="Facebook">
	</a>
	<a href="https://twitter.com/senskeservices" class="social-icon twitter" target="_blank" rel="nofollow">
		<img src="<?php echo $theme . '/assets/images/senske-twitter.png'; ?>" alt="Twitter">
	</a>
	<a href="https://www.youtube.com/channel/UC3_O_6774OQDIauyKaDJFgA" class="social-icon youtube" target="_blank" rel="nofollow">
		<img src="<?php echo $theme . '/assets/images/senske-youtube.png'; ?>" alt="Youtube">
	</a>
	<a href="https://www.instagram.com/senskeservices/" class="social-icon instagram" target="_blank" rel="nofollow">
		<img src="<?php echo $theme . '/assets/images/senske-instagram.png'; ?>" alt="Instagram">
	</a>
</div>
