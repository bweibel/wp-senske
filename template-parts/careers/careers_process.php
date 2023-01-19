<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<?php if( have_rows('process') ): ?>
	<?php while( have_rows('process') ): the_row(); ?>

    <section class="career-section process lifted fullwidth">
		<header class="section-header">
            <?php if( the_sub_field('sub_header') ): ?>
            <h4 class="small subtitle"><?php esc_html(the_sub_field('sub_header')); ?></h4>
            <?php endif; ?>
			<h3 class="section-title underlined"><?php esc_html(the_sub_field('header')); ?></h3>
		</header>
        <?php the_sub_field('content');?>
		<?php if( have_rows('steps') ): ?>
			<div class="column-container process-icons">
				<?php while( have_rows('steps') ): the_row(); ?>
					<?php get_template_part( 'template-parts/careers/careers_step', '', $args ); ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
        <p style="text-align: center;">
			<a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Start the Simple Process Today!</a>
		</p>
	</section>

<?php endwhile; ?>
<?php endif; ?>
