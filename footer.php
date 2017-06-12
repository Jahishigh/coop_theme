<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
				<a class="item_footer" href="#">Que ce que la Coop ?</a>
				<a href="#">Les projets</a> </br>
				<a href="#">Le blog</a>
				<a href="#">Nous trouver</a>
				<p>1-3 rue de la Coopérative 67000 Strasbourg</p>
				<img src="wp-content/themes/coop_theme/assets/images/facebook.png" alt="" class="imgfooter" />
				<img src="wp-content/themes/coop_theme/assets/images/twitter.png" alt="" class="imgfooter" />
				<img src="wp-content/themes/coop_theme/assets/images/instagram.png" alt="" class="imgfooter" />
				<a href="#" class="large button">S'inscrire à la newsletter</a>
				<img class="arrowup" src="wp-content/themes/coop_theme/assets/images/arrowup.png" alt="" />
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
