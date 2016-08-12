<?php
/**
 * JDLife Theme Customizer.
 *
 * @package JDLife
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jdlife_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->add_setting( 'header_color', array(
		'default' => '#000000',
		'type' => 'theme_mod',
		'sanaitze_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_color', array(
				'label' => __('Header Background Color','jdlife'),
				'section' => 'colors',
			)
		)
	);

}
add_action( 'customize_register', 'jdlife_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jdlife_customize_preview_js() {
	wp_enqueue_script( 'jdlife_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'jdlife_customize_preview_js' );

function jdlife_customizer_css() {
	$header_color = get_theme_mod('header_color');
	
	?>
<style type="text/css">
	.site-header {
		background-color: <?php echo $header_color; ?>
	}
</style>
	<?php	
	
}
add_action( 'wp_head', 'jdlife_customizer_css');