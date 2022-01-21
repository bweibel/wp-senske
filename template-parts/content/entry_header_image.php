<?php
/**
 * Template part for displaying a post's featured image
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

if ( post_password_required() || ! post_type_supports( $support_slug, 'thumbnail' ) || ! has_post_thumbnail() ) {
	return;
}
if ( is_singular( get_post_type() ) ) {
	?>
	<div class="post-header-image">
		<?php the_post_thumbnail( 'senske-featured', array( 'class' => 'skip-lazy' ) ); ?>
	</div><!-- .post-thumbnail -->
	<?php
}
