<?php
/**
 * Template Name: Careers Page
 * The template for displaying location pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

get_header();

senske()->print_styles( 'senske-content', 'senske-careers' );

get_template_part( 'template-parts/content/page_header' );

?>
	<main id="primary" class="site-main">
		<?php

        

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/careers/content', get_post_type() );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
