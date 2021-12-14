<?php
/**
 * Template Name: Service Landing Page
 * The template for displaying location pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-service-landing' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/service-landing/content', get_post_type() );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
