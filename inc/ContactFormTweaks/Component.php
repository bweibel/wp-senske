<?php
/**
 * WP_Rig\WP_Rig\Accessibility\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\ContactFormTweaks;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;


/**
 * Class for adjusting CF7
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'contact_form_tweaks';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		// Turn off the <p> additions on form elements
		add_filter('wpcf7_autop_or_not', '__return_false');
	}



}
