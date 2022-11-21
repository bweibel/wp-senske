<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;


$programs = $args['programs'];
$title = $args['title'];

?>

<div class="programs-cta fullwidth location-section" style="">
	<div class="program-cards">
		<?php
		if( $programs ) {
			foreach( $programs as $program ) {
				$args= array(
					'program'      => $program,
                    
				);


				get_template_part( 'template-parts/services/program_card', 'homepage', $args );
			}
		}
		?>
	</div>

	</div>
