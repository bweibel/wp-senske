<?php
/**
 * Template part for displaying a service Card
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

// If we're passed an ID, use that
if ( $args ) {
	$service = $args['service'];
	$service_fields = get_fields( $service );
} else {
	$service = $post;
}

$title = $service->post_title;


?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'service card' ); ?>>
	<header>
		<img src="http://senske.local/wp-content/uploads/senske-tree-care-program.svg" alt="">
		<?php echo $title; ?>
	</header>

</article>
<?php
