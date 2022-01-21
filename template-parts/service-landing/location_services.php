<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>


<section class="services-cta location-section">
	<header>
		<h3>Residential Services in </h3>
	</header>

	<ul>
		<?php get_template_part( 'template-parts/services/service_card' ); ?>
		<?php get_template_part( 'template-parts/services/service_card' ); ?>
		<?php get_template_part( 'template-parts/services/service_card' ); ?>
	</ul>

</section>


