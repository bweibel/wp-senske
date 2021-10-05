<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$article = $args['article'];

// print_r( $article );

?>

<div class="featured-article">
	<div class="content">
		<h3 class="post-title"><a href="<?php echo get_permalink( $article ); ?>"><?php echo $article->post_title; ?></a></h3>
		<?php echo get_the_excerpt( $article ); ?>
	</div>
	<div class="thumbnail">
		<a href="<?php echo get_permalink( $article ); ?>">
		<?php
			if( get_the_post_thumbnail( $article ) ) {
				$image = get_the_post_thumbnail( $article );
				print_r( $image );
				$size = 'full';
			}
		?>
		</a>
	</div>
	<a href="/blog" class="button">Read Our Blog</a>
</div>
