<?php
/**
 * d5k Theme Customizer
 *
 * @package d5k
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function d5k_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'd5k_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function d5k_customize_preview_js() {
	wp_enqueue_script( 'd5k_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'd5k_customize_preview_js' );

/**
 * Add text color option
 */
function d5k_customize_color( $wp_customize ) {
    // text color
    $wp_customize->add_setting(
	    'd5k_text_color',
	    array(
	        'default' => '#d3f4ff',
	    )
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'd5k_text_color', 
			array(
				'label' => 'Text Color', 
				'section' => 'colors',
				'settings' => 'd5k_text_color'
			)
		)
	);

	// link color
	$wp_customize->add_setting(
	    'd5k_link_color',
	    array(
	        'default' => '#f9fc4e',
	    )
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'd5k_link_color', 
			array(
				'label' => 'Link Color', 
				'section' => 'colors',
				'settings' => 'd5k_link_color'
			)
		)
	);
}
add_action( 'customize_register', 'd5k_customize_color' );

/**
 * Add Gravatar email address
 */
function d5k_customize_gravatar( $wp_customize ) {
    $wp_customize->add_section(
        'gravatar_address',
        array(
            'title' => 'Gravatar',
            'description' => 'Enter an email address to use that Gravatar.',
            'priority' => 35,
        )
    );

    $wp_customize->add_setting(
	    'gravatar_email',
	    array(
	        'default' => get_bloginfo( 'admin_email' ),
	    )
	);
	$wp_customize->add_control(
	    'gravatar_email',
	    array(
	        'label' => 'Email Address',
	        'section' => 'gravatar_address',
	        'type' => 'text',
	    )
	);
}
add_action( 'customize_register', 'd5k_customize_gravatar' );

/**
 * Hook into wp_head to apply customized styles
 */
function d5k_customizer_css() {
    ?>
    <style type="text/css">
        body {
        	background-color: <?php echo get_theme_mod( 'background_color' ); ?>;
        	color: <?php echo get_theme_mod( 'd5k_text_color' ); ?>; }
        a { color: <?php echo get_theme_mod( 'd5k_link_color' ); ?>; }
        a:hover { border-bottom-color: <?php echo get_theme_mod( 'd5k_link_color' ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'd5k_customizer_css' );