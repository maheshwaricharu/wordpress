<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'chro' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo chro_get_svg( array( 'icon' => 'bars' ) );
		echo chro_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'chro' );
		?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>

	<?php if ( ( chro_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo chro_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text">
			<?php
			/* translators: Hidden accessibility text. */
			_e( 'Scroll down to content', 'chro' );
			?>
		</span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
