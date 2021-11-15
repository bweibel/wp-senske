<?php
/**
 * Template part for displaying a blog post card
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry post-card' ); ?>>
	<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="card-link"></a>
	<div class="thumbnail">

	<?php
		if( has_post_thumbnail() ){
			get_template_part( 'template-parts/content/entry_header_image', get_post_type() );
		} else {
			echo '<img class="featured-image" src="' . $theme . '/assets/images/placeholder-header-image.jpg" alt="A Grass lawn" />';
		}
	?>
	</div>
	<?php
	get_template_part( 'template-parts/content/entry_title', get_post_type() );
	?>

</article>
