<?php
/**
 * Template part for displaying a Service Expert Card
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

// Program Data.
$expert = $args['expert'];
$expert_image = $expert['image'];
$expert_small_image = $expert['secondary_image'];
$expert_link = $expert['link'];

$card_class = 'card expert-card';
?>

<article <?php post_class( $card_class  ); ?>>
	<?php if ( $expert_link ) : ?>
		<a href="<?php echo $expert_link; ?>" class="card-link"></a>
	<?php endif; ?>
	<div class="image-box">
		<img class="card-image" src="<?php echo $expert['image']['url'];?>" alt="<?php echo $expert['image']['alt'];?>">
	</div>
	<img class="secondary-image" src="<?php echo $expert['secondary_image']['url'];?>" alt="<?php echo $expert['secondary_image']['alt'];?>">

	<h3 class="expert-title"><?php echo $expert['title']; ?></h3>
	<h4 class="expert-name mobile-hide"><?php echo $expert['name']; ?></h4>
</article>
