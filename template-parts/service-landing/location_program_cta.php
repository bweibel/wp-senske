<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$programs = $args['programs'];
$title = $args['title'];
$subtitle = $args['subtitle'];
$has_button = $args['has_button'];
$content = $args['content'];
?>

<section class="programs-cta fullwidth location-section">

	<div class="cta-wrap">

		<div class="content" >
			<?php if( $title ) : ?>
			<header class="section-header">
				<h4 class="subtitle"><?php echo $subtitle;?></h3>
				<h3 class="underlined"><?php echo $title;?></h3>
			</header>
			<?php endif; ?>
			<?php if( $content ) :
				echo $content;
			endif; ?>
			<a href="/request-estimate/" class="button">Request an Estimate</a>
		</div>

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
	</div>
	<?php if( $has_button ) : ?>
	<?php endif; ?>

</section>
