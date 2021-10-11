<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-blog' );

// get_template_part( 'template-parts/content/page_header' );

// Featured Blog Post query

?>
	<main id="primary" class="site-main">

			<?php
			get_post_type();
			if ( have_posts() ) :
			?>
			<div class="blog-posts">
				<?php
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content/entry', get_post_type() );
				}

				?>
			</div>
				<?php
				if ( ! is_singular() ) {
					get_template_part( 'template-parts/content/pagination' );
				} else {
				get_template_part( 'template-parts/content/error' );
				}
			endif;
			?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
