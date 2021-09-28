<?php
/**
 * The template for displaying location pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-location' );

$location = get_field('parent_location');

$yotpo_key = 'F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74';

// print_r($location[0]->ID);
$yotpo_id = get_field('yotpo_id', $location[0]->ID);

?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
		}

		?>
	</main><!-- #primary -->
	<?php get_template_part( 'template-parts/location/location_card', 'location_service', array('location' => $location) ); ?>

	<script type="text/javascript">
		(function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
	</script>
<?php
get_footer();
