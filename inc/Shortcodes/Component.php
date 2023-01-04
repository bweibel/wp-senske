<?php
/**
 * WP_Rig\WP_Rig\Shortcodes\Component class
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig\Shortcodes;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\senske;
use function add_shortcode;
use function get_theme_file_uri;
use function get_theme_file_path;
use WP_Query;

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

	/**
	 * Initialize Shortcodes
	 */
	public function initialize() {
		add_shortcode( 'button', array( $this, 'handle_button_shortcode' ) );
		add_shortcode( 'featured-article', array( $this, 'handle_featured_shortcode' ) );
		add_shortcode( 'senske-promise', array( $this, 'handle_promise_shortcode' ) );
		add_shortcode( 'location-links', array( $this , 'handle_location_links_shortcode') );
		add_shortcode( 'related-posts', array( $this , 'handle_related_posts_shortcode') );
	}

	public function handle_button_shortcode( $atts = array(), $content = 'Button Text' ) {
		// normalize attribute keys, lowercase
		$atts = array_change_key_case( (array) $atts, CASE_LOWER );

		$button_link  = $atts['link'];
		$button_color = $atts['color'];

		$button_class = 'button';
		if ( $button_color ) {
			$button_class = $button_class . ' button-' . $button_color;
		}

		return '<a href="' .  $button_link  . '" class="' . $button_class . '">' . $content . '</a>';
	}

	public function handle_featured_shortcode( $atts = array() ) {
		// normalize attribute keys, lowercase
		$atts = array_change_key_case( (array) $atts, CASE_LOWER );

		$args = array(
			'posts_per_page' => 1,
			'category_name' => 'featured'

		);
		$featured_query = new WP_Query( $args );

		if( $featured_query->posts ) :

			ob_start();
			get_template_part( 'template-parts/blog/featured_article', 'menu', array('article' => $featured_query->posts[0]) );

			return ob_get_clean();

		endif;

	}

	public function handle_promise_shortcode( ) {
		ob_start();
		get_template_part( 'template-parts/components/senske_promise' );
		return ob_get_clean();
	}

	public function handle_location_links_shortcode( $atts = array() ) {
		ob_start();
		get_template_part( 'template-parts/components/location_list-fancy');
		return ob_get_clean();
	}

	public function handle_related_posts_shortcode( $atts = array() ) {
		ob_start();
		get_template_part( 'template-parts/components/related_posts');
		return ob_get_clean();
	}

}
