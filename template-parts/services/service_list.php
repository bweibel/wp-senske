<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$services = $args['services'];
?>
<ul class="services-list">
	<?php
	if ($services) :
		foreach ( $services as $service ) :
			$args = array(
				'service'      => $service,
				'full_content' => false,
			);

		?>

		<?php get_template_part( 'template-parts/services/service_item', '', $args ); ?>
		<?php
		endforeach;
	endif;
	?>
</ul>


