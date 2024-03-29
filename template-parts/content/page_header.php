<?php
/**
 * Template part for displaying the page header of the currently displayed page
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

if ( is_404() ) {
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'senske' ); ?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_home() && ! have_posts() ) {
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php esc_html_e( 'Nothing Found', 'senske' ); ?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_home() && ! is_front_page() ) {
	?>
	<header class="page-header has-background">
		<?php
		$subtitle = get_field( 'subtitle', get_option('page_for_posts') );
		if( $subtitle ) : ?>
			<h2 class="subtitle"><?php echo esc_html( $subtitle ); ?></h2>
		<?php endif; ?>
		<h1 class="page-title underlined">
			<?php single_post_title(); ?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_search() ) {
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: search query */
				esc_html__( 'Search Results for: %s', 'senske' ),
				'<span>' . get_search_query() . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_archive() ) {
	?>
	<header class="page-header has-background">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
	<?php
}  else {
	if ( has_post_thumbnail() && get_field('page_header_background') ) {
		?>
		<header class="page-header has-background has-featured" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
			<?php
			if ( get_field('subtitle') ) echo '<h3 class="subtitle">' . get_field('subtitle') . '</h3>';

			the_title( '<h1 class="page-title underlined">', '</h1>' );
			if ( get_field('header_content') ) {
				echo '<div class="content">';
				the_field('header_content');
				echo '</div>';
			}
			?>
		</header><!-- .page-header -->
		<?php
	} else {
		if ( get_field('page_header_background') || is_single(  )) {
			$class_name = 'page-header has-background';
		} else {
			$class_name = 'page-header';
		}
		?>

		<header class="<?php echo $class_name; ?>">
			<?php
				if ( get_field('subtitle') ) echo '<h3 class="subtitle">' . get_field('subtitle') . '</h3>';
				the_title( '<h1 class="page-title underlined">', '</h1>' );
			?>
		</header><!-- .page-header -->
		<?php
	}

}
