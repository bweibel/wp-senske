<?php
/**
 * Template part for displaying a hero image area
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

// If we're passed an ID, use that.
if ( $args ) {
	$hero = $args['hero'];
} else {
	$hero = $post;
}

?>

<section class="hero fullwidth" style="background-image: url(<?php echo $hero['image']['url']; ?>)">
	<h2 class="main-title"><?php echo $hero['title']; ?></h2>
	<h4 class="secondary-title"><?php echo $hero['subtitle']; ?></h4>
	<?php
	$button = $hero['button'];

	$args = array(
		'text' => $button['link']['title'],
		'link'=> $button['link']['url'],
		'color' => 'yellow'
	);
	get_template_part( 'template-parts/components/button', '', $args );
	?>
</section><!-- .entry-content -->
