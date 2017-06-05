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

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>

				<div class="row">
					<div class="large-4 medium-12 columns text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo" height="" width="100" />
					</div>
					<div class="large-4 medium-12 text-center columns">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
						<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</div>
					<div class="large-4 medium-12 text-center columns">
						<p>© La COOP - Tous droits réservés</p>
					</div>
				</div>
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
