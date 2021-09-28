<?php
/**
 * WP_Rig\WP_Rig\Accessibility\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Google_Map;

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
		return 'google_map';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'acf/init', array( $this, 'my_acf_init' ) );
	}

	function my_acf_init() {
		acf_update_setting('google_api_key', 'AIzaSyDV0m2Kp7D_W42pBcrgsduMM1paOO5I3DE');
	}

}
