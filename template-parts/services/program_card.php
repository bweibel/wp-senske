<?php
/**
 * Template part for displaying a Service Program Card
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

// Options.
$full_content = $args['full_content'];
$card_link = $args['card_link'];
$show_options = $args['show_options'];


// Program Data.
$program = $args['program'];
$program_fields = get_fields( $program );

$price = $program_fields[ 'price' ];
$price_text = $program_fields[ 'price_text' ];
$icon_url = $program_fields['icon']['url'];
$price = $program_fields['price'];
$popular = $program_fields['popular'];

$options = $program_fields['options'];

$price_arr = explode('.',$price);
$price_dollars = $price_arr[0];
$price_cents = $price_arr[1];

$card_class = 'program card-wrapper';
if ( 'true' === $popular ) {
	$card_class = $card_class . ' popular';
}
?>

<div <?php post_class( $card_class  ); ?>">
	<article class="card">
		<a href="/service-plans" class="fullcard-link"></a>
		<?php if ( 'true' === $popular ) : ?>
			<div class="popular-tag">Most Popular</div>
		<?php endif; ?>
		<header>
			<?php if( $icon_url ) : ?>
				<div class="icon">
					<?php
					echo file_get_contents( $icon_url );
					?>
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

			<!-- <a href="<?php echo get_permalink($program) ?>">Learn More</a> -->
			<?php
			if ( $card_link ) : ?>
				<a href="/service-plans" class="card-link">Learn More</a>
			<?php
			endif;
			?>

		<?php
		endif;
		?>
	</article>
	<?php
			if ( have_rows( 'program_options', $program->ID ) && $show_options ) :
				?>
				<section class="options-section">
					<h4 class="options-title"><?php echo esc_html( $program->post_title . ' Options'); ?></h4>
					<ul class="options-list">

						<?php
						while ( have_rows( 'program_options', $program->ID  ) ) : the_row();
						$args = array(
							'title' => get_sub_field('title'),
							'text'    => get_sub_field('text'),
						);
						get_template_part( 'template-parts/services/options-list-item', '', $args );
						endwhile;
						?>
					</ul>
				</section>
				<?php
			endif;
			?>

</div>
