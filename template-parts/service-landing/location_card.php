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
$theme = get_template_directory_uri();

?>

<aside class="location-card">
	<div class="thumbnail">
		<?php
			if( get_the_post_thumbnail( $article ) ) {
				$image = get_the_post_thumbnail( $article, 'wp-rig-content', array( 'class' => 'featured-image' ) );
				print_r( $image );
				$size = 'full';
			} else {
				echo '<img class="featured-image" src="' . $theme . '/assets/images/placeholder-header-image.jpg" alt="A Grass lawn" />';
			}
		?>
	</div>
	<hr class="divider">
	<h2>Get Senske<br> <?php echo $location_name; ?> Services</h2>
	<div class="contact-info">
		<a class="phone" href="tel:<?php echo esc_html($phone); ?>" ><?php echo $phone; ?></a>
		<?php echo $hours; ?>
		<?php echo $address; ?>
	</div>
    <div class="yotpo bottomLine" data-appkey="F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74" data-product-id="<?php echo $yotpo_id; ?>"></div>
	<a href="/request-estimate/" class="button">Request a free estimate</a>

</aside>
