<?php
/**
 * Template part for displaying a CTA Box
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$image = get_sub_field( 'background' );
$size = 'senske-content';

?>

<div class="cta-box" style="background-image: url(<?php echo esc_html( $image['sizes'][ $size ] ); ?>)">
	<?php
		get_template_part( '/template-parts/acf/flexible', 'cta_content' );
	?>
</div>

<?php
