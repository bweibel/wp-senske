<?php
/**
 * Template Name: Location Reveiw Page
 * The template for displaying Location Review pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$yotpo_id = get_field('yotpo_id_location');

get_header();

senske()->print_styles( 'senske-content' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
		?>

	</main><!-- #primary -->
<?php
get_footer();
