<?php
/**
 * Template part for displaying Resources in a list
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;


$location_name = $args['location_name'];

// Check value exists.
if ( have_rows( 'resource_list' ) ) :

	// Loop through rows.
	while ( have_rows( 'resource_list') ) : the_row();
		?>
		<div class="entry-content">
			<?php
				echo '<h4>' . get_sub_field('title') . ' ' . $location_name . '</h4>';
				the_sub_field('content');
			?>
			</div>
			<?php
				$args = array(
					'resources' =>  get_sub_field( 'resources' ),
				);
				get_template_part( 'template-parts/resources/resources_slider', '', $args );

			?>


		<?php
		// End loop.
	endwhile;

	// No value.
else :
	// Do something...
endif;
?>

