<?php
/**
 * WP_Rig\WP_Rig\Shortcodes\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Shortcodes;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use function add_shortcode;
use function get_theme_file_uri;
use function get_theme_file_path;

/**
 * Class for adding the various shortcodes to the theme
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'shortcodes';
	}

	public function initialize() {
		add_shortcode( 'button', array( $this, 'handle_button_shortcode' ) );
	}

	public function handle_button_shortcode( $atts = array(), $content = 'Button Text' ) {
		// normalize attribute keys, lowercase
		$atts = array_change_key_case( (array) $atts, CASE_LOWER );

		$button_link  = '#';
		$button_color = $atts['color'];

		$button_class = 'button';
		if ( $button_color ) {
			$button_class = $button_class . ' button-' . $button_color;
		}

		return '<a href="' .  $button_link  . '" class="' . $button_class . '">' . $content . '</a>';
	}

}
