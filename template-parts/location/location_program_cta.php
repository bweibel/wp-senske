<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$background = 'http://senske.local/wp-content/uploads/grass.jpg';
?>

<section class="programs-cta" style="background-image: url(<?php echo $background; ?>)">
	<header>
		<h3>We'll Take Care of You</h3>
		<hr>
	</header>
	<ul class="program-cards">
		<?php get_template_part( 'template-parts/services/program_card' ); ?>
		<?php get_template_part( 'template-parts/services/program_card' ); ?>
		<?php get_template_part( 'template-parts/services/program_card' ); ?>
	</ul>

	<a href="#" class="button">Request an Estimate</a>
</section>
