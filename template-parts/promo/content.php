<?php
/**
 * Template part for displaying a post
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry promotion' ); ?>>
	<?php

	// Search and others.

	// Standard Content.
	get_template_part( 'template-parts/content/entry_content', get_post_type() );

	?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
