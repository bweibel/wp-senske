<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
		}
		?>
	</main><!-- #primary -->


<?php

get_sidebar();
?>
<aside class="after-main">
	<?php get_template_part( 'template-parts/blog/related_posts' ); ?>
</aside>
<?php
get_footer();
