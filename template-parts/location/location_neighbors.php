<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

$location_name = get_field('short_title');
$location_name_full = get_field('full_title');

$communities = get_field('communities');

?>
<div class="entry-content">
	<p class="highlight">Serving <?php echo $location_name_full; ?> and surrounding areas. Our Senske branch location in <?php echo $location_name; ?> allows us to better serve our neighbors in the following communities:</p>
	<ul class="location-list">
		<?php
		if ( $communities ) :
			foreach ( $communities as $community ) :
				echo '<li>' . $community['community'] . '</li>';
			endforeach;
		endif;
		?>
	</ul>
</div>
<?php

?>
