<?php
/**
 * The template for displaying location pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

get_header();

senske()->print_styles( 'senske-content', 'senske-location' );

$parent_location = get_field( 'parent_location' )[0];
$parent_service = get_field( 'parent_service' )[0];


$yotpo_key = 'F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74';
$yotpo_id = get_field('yotpo_id', $parent_location->ID);


get_template_part( 'template-parts/content/page_header' );

?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
			get_template_part( 'template-parts/services/services_location_list', '', array('service' => $parent_service, 'location' => $parent_location) );
		}

		?>
	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
