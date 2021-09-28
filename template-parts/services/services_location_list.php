<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$service = $args['service'];

$service_title = $service->post_title;

if ( $service ) {
	$args = array(
		'posts_per_page'     => -1,
		'order' => 'ASC',
		'orderby' => 'title',
		'post_type' => 'senske_location',
	);
	$locations_query = new WP_Query( $args );
}

?>


<section class="services-cta location-section">
	<header>
		<h4>We Offer <?php echo esc_html( $service_title ) ?> in the following locations:</h4>
	</header>
	<ul>
	<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
	<?php endwhile; ?>

	</ul>
</section>


