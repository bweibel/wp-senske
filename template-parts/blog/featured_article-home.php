<?php
/**
 * Template part for displaying a featured Post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$article = $args['article'];
$theme = get_template_directory_uri();

// print_r( $article );

?>

<div class="featured-article">
	<div class="featured-header">
		<h2 class="featured-heading">Featured Article</h2>
		<hr class="desktop-left">
	</div>

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
	<div class="content">
		<h3 class="post-title"><a href="<?php echo get_permalink( $article ); ?>"><?php echo esc_html($article->post_title); ?></a></h3>
		<div class="excerpt">
			<?php echo get_the_excerpt($article); ?>
		</div>
		<a class="read-more" href="<?php echo get_permalink( $article ); ?>">Read More</a>
	</div>

</div>
