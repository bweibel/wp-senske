<?php
/**
 * The template for displaying location pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-promo' );


?>

	<header class="page-header ">
		<?php
			if ( get_field('subtitle') ) echo '<h3 class="subtitle">' . get_field('subtitle') . '</h3>';
			the_title( '<h1 class="page-title underlined">', '</h1>' );
		?>
	</header><!-- .page-header -->

	<main id="primary" class="site-main" >
		<div class="promo-container fullwidth">
			<div class="hero">
				</div>
			<div class="hero-overlay">
			<?php
				if ( get_field('hero_content') ) echo get_field('hero_content');
			?>
			</div>
			<div class="form">
				<h3 class="form-title">Request an Estimate</h3>
				<?php if ( get_field('promo_form') ) echo do_shortcode( get_field('promo_form', false, false) ); ?>
			</div>
			<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/promo/content', get_post_type() );
		}

		?>
		</div>
		<?php
		get_template_part( 'template-parts/components/senske_promise' );

		// Additional Page Content (ACF).
		get_template_part( 'template-parts/acf/flexible', get_post_type(), array( 'row_group' => 'page_blocks' ) );
		?>


	</main><!-- #primary -->
<?php
get_footer();
