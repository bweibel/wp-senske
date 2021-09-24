<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$icon_url = $args['icon_url'];

if( $icon_url ) :
?>
	<div class="icon">
		<?php echo file_get_contents( $icon_url ); ?>
	</div>
<?php else : ?>
	<div class="icon"></div>
<?php endif; ?>
