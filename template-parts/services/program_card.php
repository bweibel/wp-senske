<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$price = 49.95;
$price_dollars = 49;
$price_cents = 95;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'prgoram card' ); ?>>
	<div class="popular">Most Popular</div>
	<header>

		<h4 class="program-category"><img class="icon" src="http://senske.local/wp-content/uploads/senske-tree-care-program.svg" alt=""> Lawn Care Program</h4>
		<h3 class="program-title">8 Treatment Rounds</h3>
	</header>
	<div class="pricing">
		<span class="small">Starting at</span>
		<span class="price">$<?php echo $price_dollars; ?><span class="small-price"><?php echo $price_cents; ?></span></span>
		<span class="small">Per treatment</span>
	</div>
	<a href="#">Learn More</a>
</article>
<?php
