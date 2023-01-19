<?php
/**
 * Template part for displaying a locations content
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

?>

	<?php
	//
	// Careers CTA.
	//
	get_template_part( 'template-parts/careers/careers_cta', '', $args );
	?>

	<?php
	//
	// Values Section
	//
	get_template_part( 'template-parts/careers/careers_values', '', $args );
	?>

	<?php
	//
	// Values Section
	//
	get_template_part( 'template-parts/careers/careers_process', '', $args );
	?>

	<section class="career-section why-work">
		<header class="section-header">
			<h3 class="section-title underlined">Why Work With Us?</h3>
		</header>
		<?php get_template_part( 'template-parts/acf/flexible', get_post_type(), array( 'row_group' => 'page_blocks' ) ); ?>

	</section>

	<section class="career-section slider lifted fullwidth">
		<header class="section-header">
			<h4 class="small subtitle">Real People Enjoying Real Careers</h4>
			<h3 class="section-title underlined">A Few of Our Amazing Technicians and Employees</h3>
		</header>
		<?php
		if ( have_rows( 'slider' ) ) :
			while ( have_rows( 'slider' ) ) : the_row();
				$args = array(
					'images' =>  get_sub_field( 'images' ),
				);
				get_template_part( 'template-parts/careers/career_slider', '', $args );

			endwhile;
		endif;
		?>
		<p style="text-align: center;">
			<a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Start the Simple Process Today!</a>
		</p>
	</section>

	<?php
	//
	// Individual Commercial Services.
	//
	get_template_part( 'template-parts/careers/careers_cta_bottom', '', $args );

	?>


<?php
