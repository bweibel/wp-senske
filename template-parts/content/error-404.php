<?php
/**
 * Template part for displaying the page content when a 404 error has occurred
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();

?>
<section class="error">
	<?php get_template_part( 'template-parts/content/page_header' ); ?>

	<div class="page-content">
		<img src="<?php echo $theme . '/assets/images/mole.jpg'?>" alt="">

		<h2 class="page-title">I knew I shoulda taken that left turn at Albuquerque!</h2>


		<p>
			<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-rig' ); ?>
		</p>

		<?php
		get_search_form();

		wp_rig()->print_styles( 'wp-rig-widgets' );
		the_widget( 'WP_Widget_Recent_Posts' );
		?>

		<div class="widget widget_categories">
			<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'wp-rig' ); ?></h2>
			<ul>
			<?php
			wp_list_categories(
				array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				)
			);
			?>
			</ul>
		</div><!-- .widget -->

		<?php

		the_widget( 'WP_Widget_Tag_Cloud' );
		?>
	</div><!-- .page-content -->
</section><!-- .error -->
