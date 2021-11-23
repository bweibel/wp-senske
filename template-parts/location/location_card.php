<?php
/**
 * Template part for displaying a locations's card
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$location = $args['location'];

$location_ID = $post->ID;
$location_name = $location->post_title;
$phone = get_field('phone_number');
$hours = get_field('hours');
$yotpo_id = get_field('yotpo_id');
$address = get_field('address');

?>

<aside class="location-card">
	<?php get_template_part( 'template-parts/components/googlemap', '', array() );?>
	<hr class="divider">
	<h2>Senske <?php echo $location_name; ?> Lawn Care</h2>
	<div class="contact-info">
		<a class="phone" href="tel:<?php echo esc_html($phone); ?>" ><?php echo $phone; ?></a>
		<?php echo $hours; ?>
		<?php echo $address; ?>
	</div>
    <div class="yotpo bottomLine" data-appkey="F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74" data-product-id="<?php echo $yotpo_id; ?>"></div>
	<a href="/request-estimate/" class="button">Request your free estimate</a>

</aside>

<script type="text/javascript">
	(function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
</script>
