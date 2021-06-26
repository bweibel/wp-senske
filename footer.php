<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

	<footer id="colophon" class="site-footer">
	<div style="display:flex;justify-content: space-around;max-width: 1200px;
margin: auto;l">
		<div style="margin-top:40px;">
			<a href="#" style="color:white;font-family:var(--highlight-font-family); text-decoration: none; font-weight:bold;font-size: 1.5em">1 (877) 944-4007</a>
			<a href="" style="color:white;"><img src="" alt=""></a>
			<a href="" style="color:white;"><img src="" alt=""></a>
			<a href="" style="color:white;"><img src="" alt=""></a>
		</div>
		<div style="border-right:3px solid #043b23; padding: 0 1em; margin: 1em">
			<h4>Senske Services</h4>
			<ul style="list-style:none; padding: 0">
				<li>Lawn Care</li>
				<li>Tree Service</li>
				<li>Pest Control</li>
				<li>Surface Disenfection</li>
				<li>Grounds Maintenance</li>
				<li>Holiday Lights</li>	
			</ul>
		</div>
		<div>
			<h4>Find a Senske Near You</h4>
			<ul style="list-style:none; padding: 0">
				<ul style="list-style:none;padding: 0">Colorado
					<li style="list-style:none;padding: 0 1em">Denver East</li>
					<li style="list-style:none;padding: 0 1em">Denver West</li>
				</ul>
				<ul style="list-style:none;"></ul>
				<ul style="list-style:none;"></ul>
			</ul>
		</div>
	</div>
		<?php get_template_part( 'template-parts/footer/info' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
