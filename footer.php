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
		<?php get_template_part( 'template-parts/footer/content' ); ?>
		<?php get_template_part( 'template-parts/footer/info' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
    (function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/F0TPJxIYZcYzPN4sr9IFjlzNs8Inxb9VYjYRYT74/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
</script>

<?php wp_footer(); ?>

</body>
</html>
