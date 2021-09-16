<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$location_name = 'Kennewick';
$location_name_full = 'Kennewick, WA';
$phone = '5093745000';
$phone_pretty = '(509) 374-5000';
?>


<section class="services-cta">
	<header>
		<h4>Enjoy Your Outdoor Space Again</h4>
		<h3>Residential Services in <?php echo $location_name_full; ?></h3>
		<hr>
	</header>

	<ul class="service-cards">
		<?php get_template_part( 'template-parts/services/service_card', 'image' ); ?>
		<?php get_template_part( 'template-parts/services/service_card', 'image' ); ?>
		<?php get_template_part( 'template-parts/services/service_card', 'image' ); ?>
	</ul>
</section>


