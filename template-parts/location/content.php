<?php
/**
 * Template part for displaying a locations content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$location_name = get_field('short_title');
$location_name_full = get_field('full_title');
$phone = get_field('phone_number');
$phone_pretty = '(509) 374-5000';
$hours = get_field('hours');

$services = get_field('services');

$taxonomy = 'service_category';

$residential_bundles_slug = 'residential-service-bundles';
$individual_services_slug = 'individual-services';
$commercial_services_slug = 'commercial-services';

$residential_bundles = array();
$individual_services = array();
$commercial_services = array();

foreach ($services as $service ) {
	$service_cats = get_the_terms( $service->ID, $taxonomy);
	foreach ($service_cats as $service_cat ) {

		if(  $service_cat->slug == $residential_bundles_slug ){
			array_push( $residential_bundles, $service );
		}
		if(  $service_cat->slug == $individual_services_slug ){
			array_push( $individual_services, $service );
		}
		if(  $service_cat->slug == $commercial_services_slug ){
			array_push( $commercial_services, $service );
		}
	}
}

?>

	<section class="location-info">
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
			<div class="yotpo bottomLine" data-yotpo-product-id="SKU/PDP_Kennewick"></div>
			<a href="" class="button">Request your free estimate</a>
		</aside>
	</section>

	<?php get_template_part( 'template-parts/location/location_program_cta', '', array( 'programs'=>$residential_bundles) ); ?>
	<?php get_template_part( 'template-parts/location/location_services-residential', '', array( 'programs'=>$residential_bundles) ); ?>
	<section class="residential-services services">
		<header>
			<h3>Individual Residental Services Offered in <?php echo $location_name_full; ?></h3>
			<hr>
		</header>
		<?php get_template_part( 'template-parts/services/service_list' ); ?>
	</section>

	<section class="commercial-services services">
		<header>
			<h4 class="small">Senske Professional Packages</h4>
			<h3>Commercial Services to Protect Spokane Businesses</h3>
			<hr>
		</header>
		<img src="http://senske.local/wp-content/uploads/chippers-green-lawn-feature.jpg" alt="">
		<?php get_template_part( 'template-parts/services/service_list', 'commercial' ); ?>
	</section>

	<section class="resources">
		<header>
			<h4 class="small">Do You See These in Your Yard?</h4>
			<h3><?php echo $location_name; ?> Lawn Diseases, Weeds, and Pests to Look Out for</h3>
			<hr>
		</header>
		<div class="entry-content">
			<h4>Lawn & Tree Diseases and Weeds common for <?php echo $location_name; ?></h4>
			<p>Our Lawn care services reflect our Sit sunt reprehenderit incididunt minim consectetur amet sit. Occaecat anim nostrud officia laboris fugiat sit in. Reprehenderit occaecat velit incididunt voluptate minim pariatur. Ad velit do duis cillum ipsum fugiat ipsum minim eu nisi enim tempor.</p>
		</div>
	</section>

	<section class="feedback">
		<header>
			<h4>We Appreciate Feedback</h4>
			<h3>Your Words Matter to Us</h3>
			<hr>
		</header>
		<div class="manager">
			<div class="manager-info">
				<h4><?php echo $location_name_full; ?> Branch Manager</h4>
				<h3 class="manager-name">{Manager Name}</h3>
				<p>Id ut qui laboris sit non ut sit non sunt officia. Nulla magna quis magna eiusmod reprehenderit ad Lorem voluptate enim aliqua proident ipsum. Nisi pariatur enim quis ad amet dolore incididunt aute veniam pariatur sint amet id. Consequat pariatur consectetur enim adipisicing ea ipsum proident occaecat ipsum pariatur labore veniam nostrud. Dolor minim in pariatur aliquip laboris non velit occaecat qui esse. Amet labore minim ullamco dolor do.</p>
			</div>
			<div class="manager-headshot">
				<img src="" alt="Image">
			</div>
		</div>
	</section>

	<div class="yotpo yotpo-main-widget"
		data-product-id="PDP_Kennewick"
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
