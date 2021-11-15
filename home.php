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
use WP_Query;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-blog' );

get_template_part( 'template-parts/content/page_header' );

// Featured Blog Post query

$args = array(
	'posts_per_page' => 1,
	'category_name' => 'featured'

);
$featured_query = new WP_Query( $args );

if( $featured_query->posts ) :

	get_template_part( 'template-parts/blog/featured_article', 'home', array('article' => $featured_query->posts[0]) );

endif;

?>
	<main id="primary" class="site-main">

			<?php
			get_post_type();
			if ( have_posts() ) :
			?>

			<header class="blog-header">
				<h4 class="subtitle">Learn from Senske</h4>
				<h2 class="blog-heading">Recent Articles</h2>
				<hr>
			</header>

			<div class="blog-posts">

				<?php
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/blog/post_card', get_post_type() );

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
