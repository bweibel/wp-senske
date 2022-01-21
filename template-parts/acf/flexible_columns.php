<?php
/**
 * Template part for displaying Columns
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<div class="entry-content">
	<div class="column-container">
		<?php

		// Check value exists.
		if ( have_rows( 'column_content' ) ) :

			// Loop through rows.
			while ( have_rows( 'column_content' ) ) :
				the_row();

				$class_name = 'column';
				$col_size = get_sub_field( 'size' );
				if ( $col_size ) {
					$class_name = $class_name . ' size-' . $col_size;
				}
				$vertical_alignment = get_sub_field( 'vertical_alignment' );
				if ( $vertical_alignment ) {
					$class_name = $class_name . ' ' . $vertical_alignment;
				}
				?>
				<div class="<?php echo esc_html( $class_name ); ?>">
					<?php
					// Case: Generic WYSIWYG Content.
					if ( get_row_layout() == 'generic_content' ) :
						the_sub_field( 'content' );
					endif;
					?>
				</div>
				<?php
				// End loop.
			endwhile;

			// No value.
		endif;
		?>
	</div>
</div><!-- .entry-content -->
