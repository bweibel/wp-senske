<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$terms = get_the_terms( $post_id, 'category' );

if ( empty( $terms ) ) $terms = array();

$related_count = 4;

$term_list = wp_list_pluck( $terms, 'slug' );

$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => $related_count,
	'post_status' => 'publish',
	'post__not_in' => array( $post_id ),
	'orderby' => 'rand',
	'tax_query' => array(
		array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'terms' => $term_list
		)
	)
);

$related_posts = new WP_Query( $related_args );

if ( $related_posts->have_posts() ) {
?>

<div class="related-posts">
	<header class="pull-left">
		<h3 class="subtitle">Learn from Senske</h3>
		<h2 class="section-title underlined">Related Posts</h2>
	</header>
	<div class="post-list">
		<?php while ( $related_posts->have_posts() ) : $related_posts->the_post();
			get_template_part( 'template-parts/blog/post_card', get_post_type() );
		endwhile; ?>
	</div>
</div>
<?php
}
