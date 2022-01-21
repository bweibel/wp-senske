<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;
use get_the_permalink;

// Service post, handed down from the list
$service = $args['service'];
$service_fields = get_fields( $service );
$icon_url = $service_fields['icon']['url'];
$link = get_permalink( $service );

// Find the location specific service attached to this generic service
$args = array(
	'numberposts'=> -1,
	'post_type' => 'page',
	'meta_query' => array (
		// The parent service
		array(
			'key'    => 'parent_service',
			'value'  =>  $service->ID,
			'compare'=> 'LIKE',
		),
	)
);


$service_class = 'services-item';

?>


<li class="<?php echo $service_class; ?>" id=<?php echo $service->ID; ?>>
	<?php get_template_part( 'template-parts/services/service_icon', '', array( 'icon_url' => $icon_url ) ); ?>
	<h4 class="service-title"><a href="<?php echo esc_html( $link ); ?>"><?php echo esc_html( $service->post_title ); ?></a></h4>
	<?php if ( $service ) : ?>
		<div class="service-info">
			<?php
			if ( get_field( 'excerpt', $service ) ) {
				echo esc_html( get_field( 'excerpt' ) );
			} else {
				echo get_the_excerpt( $service );
			}
			?>
			<a class="services-link" href="<?php echo esc_html( $link ); ?>" aria-label="Link to Service <?php echo esc_html( $service->post_title ); ?>">Read More ></a>
		</div>
	<?php endif; ?>

</li>


