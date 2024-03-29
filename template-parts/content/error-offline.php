<?php
/**
 * Template part for displaying the page content when an offline error has occurred
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>
<section class="error">
	<header class="page-header">
		<h1 class="page-title">
			<?php esc_html_e( 'Oops! We can&#8217;t find your internet connection. It looks like you&#8217;re offline.', 'senske' ); ?>
		</h1>
	</header><!-- .page-header -->
	<img src="" alt="">
	<div class="page-content">
		<?php
		if ( function_exists( 'wp_service_worker_error_message_placeholder' ) ) {
			wp_service_worker_error_message_placeholder();
		}
		?>
	</div><!-- .page-content -->
</section><!-- .error -->
