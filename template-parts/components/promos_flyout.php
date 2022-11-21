<?php
/**
 * Template part for displaying the promotions flyout
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;


// Find todays date in Ymd format.
$today = date('Ymd');

$post_type = 'senske_promotion';

$args = array(
	'posts_per_page' => 4,
	'post_type' => $post_type,
	'meta_query' => array(
		array(
			'key'     => 'start_date',
			'compare' => '<=',
			'value'   => $today,
		),
		array(
			'key'     => 'end_date',
			'compare' => '>=',
			'value'   => $today,
		)
	),
);


$promo_query = new WP_Query( $args );

?>

<aside id ="promos-tab" class="current-promos">
	<button id="promos-toggle"><h4 class="promos-title">Current Promos</h4></button>

	<ul class="promos-list">
		<?php
			if( $promo_query->have_posts() ) :
				while( $promo_query->have_posts() ) : $promo_query->the_post();
					?>
					<li><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_field('seasonality'); ?></li>
					<?php
				endwhile;
			else :
		?>
			<a href="/why-senske/senske-promise/#referral">Share us with Friends & Family and you'll get $25</a>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
	</ul>
</aside>

<script>
	const promoButton = document.getElementById('promos-toggle');
	const promoTab = document.getElementById('promos-tab');
	addClickToggle( promoButton );

	function addClickToggle(el, target=el ) {
		el.addEventListener( 'click', () => {
			promoClickHandler( promoTab );
		} );
	}

	function promoClickHandler( target ) {
		if (! target.classList.contains( 'open' ) ) {
			target.classList.add( 'open' );
			document.addEventListener( 'scroll', promoScrollHandler );
		} else {
			target.classList.remove( 'open' );
		}
	}

	function promoScrollHandler( ) {
		console.log("scroll");
		if ( promoTab.classList.contains( 'open' ) ) {
			promoTab.classList.remove( 'open' );
			document.removeEventListener( 'scroll', promoScrollHandler );
		}
	}

</script>
