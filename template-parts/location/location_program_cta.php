<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$programs = $args['programs'];

?>

<section class="programs-cta fullwidth" style="">
	<header>
		<h3>We'll Take Care of You</h3>
		<hr>
	</header>
	<div class="program-cards">
		<?php
		foreach( $programs as $program ){
			$args= array(
				'program'      => $program,
				'full_content' =>true,
				'el_tag'           => 'li'
			);
			get_template_part( 'template-parts/services/program_card', '', $args );
		}
		?>
	</div>

	<a href="#" class="button">Request an Estimate</a>
</section>
