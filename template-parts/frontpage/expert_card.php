<?php
/**
 * Template part for displaying a Service Expert Card
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

// Program Data.
$expert = $args['expert'];
$expert_fields = get_fields( $program );
$expert_image = $expert['image'];

$card_class = 'card expert-card';
?>

<article <?php post_class( $card_class  ); ?>>
	<img src="<?php echo $expert['image']['url'];?>" alt="<?php echo $expert['image']['alt'];?>">
	<h3 class="expert-title"><?php echo $expert['title']; ?></h3>
	<h4 class="expert-name mobile-hide"><?php echo $expert['name']; ?></h4>
</article>
