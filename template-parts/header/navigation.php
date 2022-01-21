<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

if ( ! senske()->is_primary_nav_menu_active() ) {
	return;
}

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub nav--toggle-small" aria-label="<?php esc_attr_e( 'Main menu', 'senske' ); ?>">

	<!-- <button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'senske' ); ?>" aria-controls="primary-menu" aria-expanded="false">
		<div class="menu-icon">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</button> -->
	<a href="tel: 18779444007" class="phone"><span class="screen-reader-text">(877) 944-4007</span></a>
	<div class="primary-menu-container">
		<?php senske()->display_primary_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>
		<?php senske()->display_mobile_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>

	</div>

</nav><!-- #site-navigation -->
