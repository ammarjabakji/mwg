<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">

	<?php
	if ( is_front_page() ) {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" itemprop="url">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/src/grouplogo-front.png" class="custom-logo" alt="Medical World Group" itemprop="logo" sizes="(min-width: 960px) 75vw, 100vw">
		</a>
		<?php
	} else {
		the_custom_logo();
	}
	?>

	<?php
	$wp_rig_description = get_bloginfo( 'description', 'display' );
	if ( $wp_rig_description || is_customize_preview() ) {
		?>
		<p class="site-description">
			<?php echo $wp_rig_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
		</p>
		<?php
	}
	?>
</div><!-- .site-branding -->
