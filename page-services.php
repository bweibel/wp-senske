<?php
/**
 * Template Name: Services Page
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

get_template_part( 'template-parts/content/page_header' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/services/content', 'services' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
