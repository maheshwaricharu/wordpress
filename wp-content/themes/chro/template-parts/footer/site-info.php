<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'chro' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: WordPress */
		printf( __( 'Proudly powered by %s', 'chro' ), 'WordPress' );
		?>
	</a>
</div><!-- .site-info -->
