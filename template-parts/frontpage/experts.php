<?php
/**
 * Template part for displaying a locations content
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;


$experts = $args['experts'];
?>

<?php if ( $experts ) : ?>
	<div class="expert-cards">
	<?php
	foreach ( $experts as $expert ) {
		$args = array(
			'expert'      => $expert,
		);
		get_template_part( 'template-parts/frontpage/expert_card', '', $args );
	}
	?>
	</div>
<?php endif; ?>
