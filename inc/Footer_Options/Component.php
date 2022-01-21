<?php

/**
 * WP_Rig\WP_Rig\Accessibility\Component class
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig\Footer_Options;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\senske;
use function add_menu_page;

/**
 * Class for Flexslider.
 */
class Component implements Component_Interface
{

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug(): string {
		return 'footer-options';
	}
	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action('admin_menu', array($this, 'add_footer_menu_page'));
	}

	/**
	 * Enqueues a script that improves navigation menu accessibility.
	 */
	public function add_footer_menu_page() {
		add_menu_page(
			__('Footer', 'textdomain'),
			'Footer',
			'manage_options',
			'myplugin/myplugin-admin.php',
			array($this, 'footer_settings_page'),
			'none',
			40
		);
	}

	/**
	 * Settings page display callback.
	 */
	function footer_settings_page() {
		echo __('<h3>Footer Content</h3>', 'textdomain');
	}
}
