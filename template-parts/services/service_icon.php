<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$icon_url = $args['icon_url'];
$el = $args['el'];

if ( ! $el ) {
	$el = 'div';
}

if( $icon_url ) :
?>
	<<?php echo $el; ?> class="icon">
		<?php echo file_get_contents( $icon_url ); ?>
	</<?php echo $el; ?>/>
<?php else : ?>
	<div class="icon"></div>
<?php endif; ?>
