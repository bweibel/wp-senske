<?php
/**
 * Template part for displaying a Service Program Card
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

// Options.
$full_content = $args['full_content'];
$popular = $args['popular'];

// Program Data.
$program = $args['program'];
$program_fields = get_fields( $program );

$price = $program_fields[ 'price' ];
$price_text = $program_fields[ 'price_text' ];
$icon_url = $program_fields['icon']['url'];
$price = $program_fields['price'];

$price_arr = explode('.',$price);
$price_dollars = $price_arr[0];
$price_cents = $price_arr[1];

?>

<article <?php post_class( 'program card' ); ?>>

	<?php if ( $popular ) : ?>
	<div class="popular">Most Popular</div>
	<?php endif; ?>
	<header>
		<?php if( $icon_url ) : ?>
			<div class="icon">
				<?php echo file_get_contents( $icon_url ); ?>
			</div>
		<?php else : ?>
			<div class="icon"></div>
		<?php endif; ?>
		<h3 class="program-title"><?php echo $program->post_title; ?></h3>
		<h4 class="program-subtitle"><?php echo $program_fields['sub_title']; ?></h4>
	</header>
	<?php
	if ( $full_content ) :
		?>
		<div class="pricing">
			<span class="small">Starting at</span>
			<span class="price">$<?php echo $price_dollars; ?><span class="small-price"><?php echo $price_cents; ?></span></span>
			<span class="small"><?php echo $program_fields['price_text']; ?></span>
		</div>

		<a href="<?php echo get_permalink($program) ?>">Learn More</a>
	<?php
	endif;
	?>
</article>
<?php
