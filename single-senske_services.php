<?php
/**
 * The template for displaying service pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

get_header();

senske()->print_styles( 'senske-content', 'senske-location' );

?>
	<main id="primary" class="site-main">
		<?php


		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
			get_template_part( 'template-parts/services/services_location_list', '', array('service' => $post ) );

		}
		?>
	</main><!-- #primary -->


<?php
get_sidebar();
get_footer();
