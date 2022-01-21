<?php
/**
 * WP_Rig\WP_Rig\Social_Media\Component class
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig\Custom_Background;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;
use function add_theme_support;
use function apply_filters;

/**
 * Class for adding social media link support.
 * This provides a central location in the customizer to enter social media info
 */
class Component implements Social_Media {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'social_media';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'action_add_social_media_support' ) );
	}

	/**
	 * Adds support for the Custom Background feature.
	 */
	public function action_add_social_media_support() {
		add_theme_support(
			'social_media',
			apply_filters(
				'senske_social_media_args',
				array()
			)
		);
	}
}
