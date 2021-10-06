<?php
/**
 *  * Template Name: Location Service Subpage
 * The template for displaying location's service subpages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-location' );

$parent_location = get_field( 'parent_location' )[0];
$parent_service = get_field( 'parent_service' )[0];


$yotpo_key = 'F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74';
$yotpo_id = get_field('yotpo_id', $parent_location->ID);

?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', 'location_service' );
			get_template_part( 'template-parts/services/services_location_list', '', array('service' => $parent_service, 'location' => $parent_location) );
		}

		?>
	</main><!-- #primary -->


	<script type="text/javascript">
		(function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
	</script>
<?php
get_sidebar();
get_footer();
