<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );


?>
	<main id="primary" class="site-main">

<?php
	// Hero.
	$hero = get_field('hero');

	get_template_part( 'template-parts/acf/flexible_hero', 'homepage', ['hero' => $hero] );
	// Service Plan.
	$service_cards = get_field('service_card');
	if ( $service_cards ){
	?>
		<section class="home-section">
			<div class="service-plan-cards">
			<?php
			foreach( $service_cards as $card ) {
				$service_plan_id = $card['service_plan'][0];
				get_template_part('template-parts/services/program_card', 'homepage', ['plan_id' => $service_plan_id]);
			}
			?>
			</div>
		</section>
	<?php
	}

?>


	</main><!-- #primary -->
<?php
get_footer();
