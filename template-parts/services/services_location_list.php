<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$service = $args['service'];

// If there's no connected service, do nothing.
if ( ! $service ) {
	return;
}

$service_title = $service->post_title;
$service_link = get_the_permalink( $service->ID );

// If this is already a service, we need to check where it is offered.
if ( $service ) {
	$args = array(
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'title',
		'post_type'      => 'senske_location',
		// 'meta_query' => array(
		// 	array(
		// 		'key' => 'services_individual', // name of custom field
		// 		'value' => '"' . $service->ID . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
		// 		'compare' => 'LIKE'
		// 	)
		// ),
	);
	$locations_query = new WP_Query( $args );
}


?>

<section class="locations entry-content">
	<header>
		<h4>We Offer <a href="<?php echo esc_html( $service_link );?>"><?php echo esc_html( $service_title ); ?></a> in the following locations:</h4>
	</header>
	<ul class="locations-list">
	<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>
		<?php print_r( get_sub_field('services_individual') ); ?>
		<li><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></li>
	<?php endwhile; ?>

	</ul>
</section>

<?php wp_reset_query(); ?>
