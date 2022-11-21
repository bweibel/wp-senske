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
$full_content = $args['full_content'];
$card_links = $args['card_links'];
$show_options = $args['show_options'];

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
						'full_content' => $full_content ,
						'card_link'		=> $card_links,
						'show_options'	=> $show_options,
						'el_tag'           => 'li'
					);
					get_template_part( 'template-parts/services/program_card', get_post_type(), $args );
				}
			}
			?>
		</div>
		
	<?php if( $has_button ) : ?>
	<a href="/request-estimate/" class="button">Request an Estimate</a>
	<?php endif; ?>

</section>
