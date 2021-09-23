<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

// If we're passed an ID, use that
if ( $args ) {
	$service_plan = $args['plan_id'];
} else {
	$service_plan = $post;
}

$title = get_the_title( $service_plan );
$icon = get_field($service_plan, 'icon');

$price = 49.95;
$price_dollars = 49;
$price_cents = 95;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'service card' ); ?>>
	<header>
		<img src="http://senske.local/wp-content/uploads/senske-tree-care-program.svg" alt="">
		<?php echo $title; ?>
	</header>

</article>
<?php
