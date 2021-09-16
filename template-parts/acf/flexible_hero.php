<?php
/**
 * Template part for displaying a post's featured image
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


if ( post_password_required() || ! post_type_supports( $support_slug, 'thumbnail' )  ) {
	return;
}

?>
<div class="post-header-image">
	<?php the_post_thumbnail( 'wp-rig-featured', array( 'class' => 'skip-lazy' ) ); ?>
</div><!-- .post-thumbnail -->
<?php
