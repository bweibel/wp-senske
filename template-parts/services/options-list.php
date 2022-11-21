<?php
/**
 * Template part for displaying a Service Program Card
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;


$title = $args['title'];

$options = $args['options'];
?>

<section class="options-section">
	<h4 class="options-title"><?php echo esc_html( $title ); ?></h4>
	<ul class="options-list">
		<?php foreach ( $options as $option ) : ?>
			<li class="option-item">
				<h5 class="option-title"><?php echo $option['option_title']; ?></h5>
				<p class="option-text"><?php echo $option['option_text']; ?></p>
			</li>
		<?php endforeach; ?>
		</ul>
</section>
<?php
