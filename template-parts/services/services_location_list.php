<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
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
		'post_type'      => 'page',
		'post_status' => 'publish',
		'meta_query' => array(
			array(
				'key'   => '_wp_page_template',
				'value' => 'page-location.php'
			)
		)
	);
	$locations_query = new WP_Query( $args );
}

?>


<section class="locations entry-content">
	<header>
		<h4>We Offer <a href="<?php echo esc_html( $service_link );?>"><?php echo esc_html( $service_title ); ?></a> in the following locations:</h4>
	</header>
	<ul class="locations-list">
		<?php
		echo $service_category;
		// Loop through each Location and figure out if it has this service (ugly, I know)
		while ( $locations_query->have_posts() ) : $locations_query->the_post();

			$location_services_residential = [];
			$location_services_individual = [];
			$location_services_commercial = [];
			
			if( get_field('services_residential')['services'] ) {
				$location_services_residential = get_field('services_residential')['services'];
			}
			if( get_field('services_individual')['services'] ) {
				$location_services_individual = get_field('services_individual')['services'];
			}
			if( get_field('services_commercial')['services'] ) {
				$location_services_commercial = get_field('services_commercial')['services'];
			}
			

			$location_services = array_merge( $location_services_residential, $location_services_individual, $location_services_commercial );

			if ( is_array($location_services ) || is_object( $location_services ) ) :
				foreach( $location_services as $location_service ) :
					if ($location_service->ID === $service->ID ): ?>
						<li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
					<?php 
					endif;
				endforeach;
			endif;
			?>
			



	<?php endwhile; ?>
	</ul>
</section>

<?php wp_reset_query(); ?>

