<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<?php if( have_rows('cta') ): ?>
	<?php while( have_rows('cta') ): the_row(); ?>
	<?php 
		$button = get_sub_field('button');
		$content = get_sub_field('content');
	?>
<section class="careers-cta fullwidth careers-section">

	<div class="cta-wrap">

		<div class="content column-container" >
			<div class="column size-1 middle">

				<p style="text-align: center;">
					<!-- <a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Apply for current Openings!</a> -->
					<a class="button" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" ><?php echo esc_html( $button['title'] ); ?></a>
				</p>
			</div>
			<div class="column size-1 middle">
				<!-- <h3 class="has-larger-font-size">Our Mission</h3>
				<p>At Senske, we create and maintain environments that are great places to live, work, and play.</p> -->
				<?php the_sub_field('content'); ?>
			</div>

		</div>

	</div>

</section>
<?php endwhile; ?>
<?php endif; ?>
