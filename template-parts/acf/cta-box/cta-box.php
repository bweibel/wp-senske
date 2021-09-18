<?php
/**
 * Template part for displaying a CTA Box
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$image = get_sub_field( 'background' );
$size = 'wp-rig-content';

?>

<div class="cta-box" style="background-image: url(<?php echo $image['sizes'][$size] ?>)">
	<?php
		get_template_part( '/template-parts/acf/flexible', 'cta_content' );
	?>
</div>

<?php
