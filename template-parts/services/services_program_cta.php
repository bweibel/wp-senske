<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;


$programs = $args['programs'];
$title = $args['title'];
$has_button = $args['has_button'];

?>

<section class="programs-cta fullwidth location-section" style="">
	<?php if( $title ) : ?>
		<header>
			<h3 class="underlined"><?php echo $title;?></h3>
		</header>
	<?php endif; ?>
		<div class="backdrop"></div>
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
			}
			?>
		</div>
		<?php
		if ( have_rows( 'program_options' ) ) :
			?>
			<div class="options">
				<?php
				while ( have_rows( 'program_options' ) ) : the_row();
				$args = array(
					'title' => get_sub_field('options_list_title'),
					'options'    => get_sub_field('options'),
				);
				get_template_part( 'template-parts/services/options-list', '', $args );
				endwhile;
				?>
			</div>
			<?php
		endif;
?>
	<?php if( $has_button ) : ?>
	<a href="/request-estimate/" class="button">Request an Estimate</a>
	<?php endif; ?>

</section>
