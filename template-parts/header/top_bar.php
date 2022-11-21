<?php
/**
 * Template part for displaying the custom header media
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>
<div class="top-bar">
	<ul class="links">
		<li><a href="/my-account/" ><i class="icon-account"></i>My Account</a> </li>
		<li><a href="/careers/" ><i class="icon-careers"></i>Careers</a> </li>
		<li><a href="tel: 18779444007" class="phone"><i class="icon-phone"></i>(877) 944-4007</a> </li>
		<li><button class="search" id="search-toggle" aria-label="search"><i class="icon-search"></i></button> </li>
	</ul>
	<div id="search-container" class="search-container">
		<?php get_search_form(); ?>
	</div>
</div><!-- .header-image -->
