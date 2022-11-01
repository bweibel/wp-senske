<?php
/**
 * Template part for displaying a slide
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$image = $args['image']['image'];
$url = get_the_post_thumbnail( $args['image'], 'thumbnail');
$the_image = get_the_post_thumbnail($image, 'thumbnail');

?>


<li class="slide">
	<div class="career-item">
		<?php
		echo( '<img src="' . $image['url'] . '">' );
		?>

	</div>
</li>
