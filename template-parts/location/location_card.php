<?php
/**
 * Template part for displaying a locations's card
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


$location_ID = $post->ID;
$location_name = $location->post_title;
$phone = get_field('phone_number');
$hours = get_field('hours');
$yotpo_id = get_field('yotpo_id');
$address = get_field('address');

?>

<aside class="location-card">
	<?php get_template_part( 'template-parts/components/googlemap', '', array() );?>
	<hr>
	<h2>Senske <?php echo $location_name; ?> Lawn Care</h2>
	<a class="phone" href="tel:<?php echo esc_html($phone); ?>" ><?php echo $phone; ?></a>
	<?php echo $hours; ?>
	<?php echo $address; ?>
	<div class="yotpo bottomLine" data-yotpo-product-id="SKU/<?php echo $yotpo_id; ?>"></div>
	<a href="/request-estimate/" class="button">Request your free estimate</a>
</aside>
