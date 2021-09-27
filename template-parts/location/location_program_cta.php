<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$programs = $args['programs'];
$title = $args['title'];


?>

<section class="programs-cta fullwidth location-section" style="">
	<header>
		<h3><?php echo $title;?></h3>
		<hr>
	</header>
	<div class="program-cards">
		<?php
		if( $programs ) {
			foreach( $programs as $program ) {
				$args= array(
					'program'      => $program,
					'full_content' => true,
					'el_tag'           => 'li',
				);
				get_template_part( 'template-parts/services/program_card', '', $args );
			}
		} else {
			echo "NOPE";
		}
		?>
	</div>

	<a href="#" class="button">Request an Estimate</a>
</section>
