<?php
/**
 * Template part for displaying a blog post card
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();

senske()->print_styles( 'senske-content', 'senske-post-cards' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry post-card' ); ?>>
	<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="card-link"></a>
	<div class="thumbnail">
	<?php
		if( has_post_thumbnail() ){
			the_post_thumbnail( 'senske-featured', array( 'class' => 'entry-image' ) );
		} else {
			echo '<img class="entry-image" src="' . $theme . '/assets/images/placeholder-header-image.jpg" alt="A Grass lawn" />';
		}
	?>
	</div>
	<?php
	the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	?>

</article>
