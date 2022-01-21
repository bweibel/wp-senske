<?php
/**
 * The template for displaying category archives.
 *
 * When active, applies to all category archives.
 * To target a specific category, rename file to category-{slug/id}.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

get_header();

senske()->print_styles( 'senske-content' );

get_template_part( 'template-parts/content/page_header' );


?>
	<main id="primary" class="site-main">
		<?php
		if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
		if ( have_posts() ) {


			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', get_post_type() );
			}

			get_template_part( 'template-parts/content/pagination' );
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
