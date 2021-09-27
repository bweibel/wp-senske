<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$location_name = get_field('short_title');
$location_name_full = get_field('full_title');
$phone = get_field('phone_number');
// $phone_pretty = '(509) 374-5000';
$hours = get_field('hours');

$services = get_field('services');

$post_type = $senske_services;
$taxonomy = 'service_category';

$yotpo_id = get_field('yotpo_id');

?>
	<section class="location-info ">
		<section class="location-content">
			<?php
			get_template_part( 'template-parts/location/location_header' );
			get_template_part( 'template-parts/content/entry_content', get_post_type() );
			get_template_part( 'template-parts/location/location_neighbors' );
			?>
		</section>
		<aside class="location-card">
			<div class="map">
				{MAP}
			</div>
			<hr>
			<h2>Senske <?php echo $location_name; ?> Lawn Care</h2>
			<a class="phone" href="tel:<?php echo $phone; ?>" ><?php echo $phone; ?></a>
			<?php the_field('hours'); ?>
			<?php the_field('address'); ?>
			<div class="yotpo bottomLine" data-yotpo-product-id="SKU/<?php echo $yotpo_id; ?>"></div>
			<a href="/request-estimate/" class="button">Request your free estimate</a>
		</aside>
	</section>

	<?php
	//
	// Programs CTA.
	//
	$programs_cta = get_field( 'programs_cta' );
	if ( $programs_cta ) {
		$args = array(
			'programs' => $programs_cta['programs'],
			'title'    => $programs_cta['title'],
			'sub_title' => $programs_cta['sub_title'],
		);
		get_template_part( 'template-parts/location/location_program_cta', '', $args );
	}
	?>
	<?php
	//
	// Residential Services.
	//
	$services_residential = get_field( 'services_residential' );
	if ( $services_residential ) {
		$args = array(
			'services' => $services_residential['services'],
			'title'    => $services_residential['title'],
			'sub_title' => $services_residential['sub_title'],
		);

		get_template_part( 'template-parts/location/location_services-residential', '', $args );
	}
	?>
	<?php
	//
	// Individual Residential Services.
	//
	?>
	<?php if ( have_rows( 'services_individual' ) ) : ?>
		<?php while ( have_rows( 'services_individual' ) ) : the_row(); ?>
		<section class="individual-services services location-section">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
				<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
				<h3><?php echo get_sub_field('title') . ' ' . $location_name_full; ?></h3>
				<hr>
			</header>
			<?php the_sub_field('content'); ?>

			<?php
			$args = array(
				'services' => get_sub_field('services'),
				'title'    => get_sub_field('title'),
				'sub_title' => get_sub_field('sub_title'),
			);

			get_template_part( 'template-parts/services/service_list', 'location', $args );
			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php
	//
	// Individual Commercial Services.
	//
	?>
	<?php if ( have_rows( 'services_commercial' ) ) : ?>
		<?php while ( have_rows( 'services_commercial' ) ) : the_row(); ?>
		<section class="commercial-services services location-section">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
				<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
				<h3><?php echo get_sub_field('title') . ' ' . $location_name_full; ?></h3>
				<hr>
			</header>
			<?php the_sub_field('content'); ?>
			<?php

			$args = array(
				'services' => get_sub_field('services'),
				'title'    => get_sub_field('title'),
				'sub_title' => get_sub_field('sub_title'),
			);

			get_template_part( 'template-parts/services/service_list', 'location', $args );
			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'resources' ) ) : ?>
		<?php while ( have_rows( 'resources' ) ) : the_row(); ?>
		<section class="resources location-section">
			<header>
				<?php if ( get_sub_field('sub_title') ) : ?>
					<h4 class="small"><?php echo get_sub_field('sub_title') ?></h4>
				<?php endif; ?>
					<h3><?php echo get_sub_field('title'); ?></h3>
				<hr>
			</header>
			<?php the_sub_field('content'); ?>
			<?php
				get_template_part( 'template-parts/location/location_resources_list', '', array( 'location_name' => $location_name ) );

			?>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'branch_manager' ) ) : ?>
		<?php while ( have_rows( 'branch_manager' ) ) : the_row(); ?>
		<section class="feedback location-section">
			<header>
				<?php if ( get_sub_field('subtitle') ) : ?>
				<h4 class="small"><?php echo get_sub_field('subtitle') ?></h4>
				<?php endif; ?>
				<h3><?php echo get_sub_field('title'); ?></h3>
				<hr>
			</header>

				<div class="manager">
					<div class="manager-info">
						<h4><?php echo $location_name; ?> Branch Manager</h4>
						<?php
						echo '<h3 class="manager-name">' . get_sub_field( 'manager_name' ) . '</h3>';

						echo get_sub_field( 'manager_content');

						?>

					</div>
					<div class="manager-image">
						<?php
						$image = get_sub_field( 'manager_image' );
						if( $image ):

							// Image variables.
							$url = $image['url'];
							$title = $image['title'];
							$alt = $image['alt'];
							$caption = $image['caption'];

							// Thumbnail size attributes.
							$size = 'thumbnail';
							$thumb = $image['sizes'][ $size ];
							$width = $image['sizes'][ $size . '-width' ];
							$height = $image['sizes'][ $size . '-height' ];
						?>
						<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $alt ); ?>" />
						<?php endif; ?>
					</div>
				</div>

		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="yotpo yotpo-main-widget"
		data-product-id="<?php echo $yotpo_id; ?>"
		data-price="Product Price"
		data-currency="Price Currency"
		data-name="Product Title"
		data-url="The url of your product page"
		data-image-url="The product image url">
	</div>


<script type="text/javascript">
(function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
</script>

<?php
