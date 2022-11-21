<?php
/**
 * Template part for displaying Columns
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>


<?php

while ( have_posts() ) {
	the_post();

	get_template_part( 'template-parts/content/entry', 'senske-resource' );
}

?>

