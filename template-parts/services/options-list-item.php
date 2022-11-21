<?php
/**
 * Template part for displaying a Service Program Card
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;


$title = $args['title'];

$text = $args['text'];
?>


<li class="option-item">
	<h5 class="option-title"><?php echo esc_html( $title ); ?></h5>
	<p class="option-text"><?php echo esc_html( $text ); ?></p>
</li>

<?php
