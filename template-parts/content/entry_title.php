<?php
/**
 * Template part for displaying a post's title
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


if ( is_singular( get_post_type() ) ) {
	if (get_post_type() == 'senske_services' ) {
		$icon = get_field('icon');
		$icon_url = $icon['url'];

		echo '<h1 class="entry-title entry-title-singular">';
		get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url, 'el' => 'span' ) );
		the_title();
		echo '</h1>';

	} else {
		the_title( '<h1 class="entry-title entry-title-singular">', '</h1>' );
	}
} else {
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
}
