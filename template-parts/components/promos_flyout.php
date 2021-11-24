<?php
/**
 * Template part for displaying a button
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

// $social_links = arr('facebook' => 'http://www.facebook.com',	'twitter' => 'http://www.twitter.com',	'youtube' => 'http://www.youtube.com');

?>

<aside id ="promos-tab" class="current-promos">
	<button id="promos-toggle"><h4 class="promos-title">Current Promos</h4></button>

	<ul class="promos-list">
	No active Promos at this time
	</ul>
</aside>

<script>
	const promoButton = document.getElementById('promos-toggle');
	const promoTab= document.getElementById('promos-tab');
	addClickToggle( promoButton );

	function addClickToggle(el, target=el ) {
		el.addEventListener( 'click', () => {
			promoClickHandler( promoTab );
		} );
	}

	function promoClickHandler( target ) {
		if (! target.classList.contains( 'open' ) ) {
			target.classList.add( 'open' );
		} else {
			target.classList.remove( 'open' );
		}
	}

</script>
