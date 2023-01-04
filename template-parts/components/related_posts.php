<?php
/**
 * Template part for displaying the header branding
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

// $terms = get_the_terms( $post_id, 'category' );
$terms_blog =  get_field( 'related_categories_blog' ) ? get_field( 'related_categories_blog' ) : array();
$terms_learn = get_field( 'related_categories_learn' ) ? get_field( 'related_categories_learn' ) : array() ;

$parent_service = get_field( 'parent_service' )[0];

if ( $parent_service ) {
    $terms_blog =  get_field( 'related_categories_blog', $parent_service->ID ) ? get_field( 'related_categories_blog', $parent_service->ID ) : array();
    $terms_learn = get_field( 'related_categories_learn', $parent_service->ID ) ? get_field( 'related_categories_learn', $parent_service->ID ) : array() ;
}

$related_count = 5;

$related_args = array(
	'post_type' => array('post', 'senske_resource'),
	'posts_per_page' => $related_count,
	'post_status' => 'publish',
	'orderby' => 'rand',
	'tax_query' => array(
        'relation' => 'OR',
            array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => wp_list_pluck( $terms_blog, 'slug' )
            ),
            array(
                'taxonomy' => 'resource_category',
                'field' => 'slug',
                'terms' => wp_list_pluck( $terms_learn, 'slug' )
            ) 
	)
);

$related_posts = new WP_Query( $related_args );

if ( $related_posts->have_posts() ) {
?>

<div class="related-posts">
	<header class="pull-left">
		<h3 class="has-large-font-size">Related Reading</h3>
	</header>
	<div class="post-list">
		<?php while ( $related_posts->have_posts() ) : $related_posts->the_post();
            the_title( '<h4 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
        endwhile; ?>
	</div>
</div>
<?php
}
