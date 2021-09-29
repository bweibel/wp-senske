<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<header class="entry-header">
	<?php

	if ( ! is_search() ) {
		get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
	}

	if ( ! is_front_page() ) {
		if (get_post_type() == 'senske_services' || get_post_type() == 'location_service' ) {
			// Icon Header
			if ( get_post_type() == 'senske_services' ) {
				$icon = get_field('icon');
			} elseif ( get_post_type() == 'senske_services' ) {
				$parent_service = get_field('parent_service');
				$icon = get_field('icon', $parent_service[0]->ID);
			}
			$icon_url = $icon['url'];
			if( $icon_url ){
				get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url, 'el' => 'div' ) );
			}
		}
		get_template_part( 'template-parts/content/entry_title', get_post_type() );
		?>
		<hr>
		<?php
	}

	if ( is_single() ) {
		get_template_part( 'template-parts/content/entry_meta', get_post_type() );
	}

	?>
</header><!-- .entry-header -->
