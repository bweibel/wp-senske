<?php
/**
 * Template part for displaying a post
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<?php

	// Search and others.
	if ( is_search() || ! is_singular( get_post_type() ) ) {
		get_template_part( 'template-parts/content/entry_header', get_post_type() );
		get_template_part( 'template-parts/content/entry_summary', get_post_type() );
	} else {
		// Standard Content and Blog Page have page headers
		if ( ! get_field('page_header_background') || is_singular( 'post' ) ) {
			get_template_part( 'template-parts/content/entry_header', get_post_type() );
		}
		get_template_part( 'template-parts/content/entry_content', get_post_type() );
		// Additional Page Content (ACF).
		get_template_part( 'template-parts/acf/flexible', get_post_type(), array( 'row_group' => 'page_blocks' ) );
	}

	if ( is_search() || ! is_singular( get_post_type() ) ) {
		get_template_part( 'template-parts/content/entry_footer', get_post_type() );
	}
	?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
if ( is_singular( get_post_type() ) ) {


	// Show comments only when the post type supports it and when comments are open or at least one comment exists.
	if ( post_type_supports( get_post_type(), 'comments' ) && ( comments_open() || get_comments_number() ) && !is_home() ) {
		comments_template();
	}
}
