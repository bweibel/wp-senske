<?php
/**
 * Template part for displaying a locations's card
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$location = $args['location'][0];

$location_ID = $location->ID;
$location_name = $location->post_title;
$phone = get_field('phone_number', $location_ID);
$hours = get_field('hours', $location_ID);
$yotpo_id = get_field('yotpo_id', $location_ID);
$address = get_field('address', $location_ID);
?>

<aside class="primary-sidebar">
	<section class="location-card">
		<?php get_template_part( 'template-parts/components/googlemap', '', array() );?>
		<hr>
		<h2>Senske Services in <?php echo $location_name; ?></h2>
		<a class="phone" href="tel:<?php echo esc_html($phone); ?>" ><?php echo $phone; ?></a>
		<?php echo $hours; ?>
		<?php echo $address; ?>
		<div class="yotpo bottomLine" data-yotpo-product-id="SKU/<?php echo $yotpo_id; ?>"></div>
		<a href="/request-estimate/" class="button">Request your free estimate</a>
	</section>
</aside>
