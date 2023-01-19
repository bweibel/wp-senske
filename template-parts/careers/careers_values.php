<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<?php if( have_rows('values') ): ?>
	<?php while( have_rows('values') ): the_row(); ?>


<section class="careers-section">
		<header class="section-header">
			<h4 class="small subtitle"><?php esc_html(the_sub_field('sub_header')); ?></h4>
			<h3 class="section-title underlined"><?php esc_html(the_sub_field('header')); ?></h3>
		</header>
		<?php if( have_rows('cards') ): ?>
			<div class="career-cards" >
				<?php while( have_rows('cards') ): the_row(); ?>
					<?php get_template_part( 'template-parts/careers/careers_card', '', $args ); ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<p style="text-align: center;">
			<a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Apply for a Career Now!</a>
		</p>
	</section>

<?php endwhile; ?>
<?php endif; ?>
