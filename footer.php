<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * footer page template
 *
 * @package      responsive-child
 * @author       Alexandra Faller
 * @link         http://www.alexfaller.uk/
 * @copyright    Copyright (c) Alexandra Faller
 * @license      GPL-2.0+
 */
/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">

			<div class="grid col-540">
				<?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) { ?>
					<?php wp_nav_menu( array(
										   'container'      => '',
										   'fallback_cb'    => false,
										   'menu_class'     => 'footer-menu',
										   'theme_location' => 'footer-menu'
									   )
					);
					?>
				<?php } ?>
			</div>
			<!-- end of col-540 -->

			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div>
			<!-- end of col-380 fit -->

		</div>
		<!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-300 copyright">
			<?php esc_attr_e( '&copy;', 'faller' ); ?> <?php echo date( 'Y' ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div>
		<!-- end of .copyright -->

		<div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'faller' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>

		<div class="grid col-300 fit powered">
			<a href="<?php echo esc_url( 'http://www.bryce-richard-thomas.co.uk' ); ?>" title="<?php esc_attr_e( 'http://www.bryce-richard-thomas.co.uk', 'Bryce' ); ?>">
				Bryce Thomas</a>
			<?php esc_attr_e( 'powered by', 'Faller Web Solutions' ); ?> <a href="<?php echo esc_url( 'http://www.fallerwebsolutions.co.uk' ); ?>" title="<?php esc_attr_e( 'http://www.fallerwebsolutions.co.uk', 'faller' ); ?>">
				Faller Web Solutions</a>
		</div>
		<!-- end .powered -->

	</div>
	<!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>