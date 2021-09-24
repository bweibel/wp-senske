<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
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
$icon_url = $service_fields['icon']['url'];
$content =  get_the_content('', false, $service);
$image = get_the_post_thumbnail($service);

?>

<article <?php post_class( 'service card' ); ?>>
	<header>
		<?php echo $image ;?>
		<?php if( $icon_url ) : ?>
			<div class="icon">
				<?php echo file_get_contents( $icon_url ); ?>
			</div>
		<?php else : ?>
			<div class="icon"></div>
		<?php endif; ?>
		<h4 class="service-category"><?php echo $title ?></h4>
	</header>
	<div class="entry-content">
			<?php echo $content; ?>
	</div>
</article>
<?php
