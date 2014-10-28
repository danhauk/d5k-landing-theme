<?php
/**
 * d5k functions and definitions
 *
 * @package d5k
 */

if ( ! function_exists( 'd5k_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function d5k_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on d5k, use a find and replace
	 * to change 'd5k' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'd5k', get_template_directory() . '/languages' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'd5k_custom_background_args', array(
		'default-color' => '0ca8cc',
		'default-image' => '',
	) ) );
}
endif; // d5k_setup
add_action( 'after_setup_theme', 'd5k_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function d5k_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Landing Page', 'd5k' ),
		'id'            => 'landing-page-widgets',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'd5k_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function d5k_scripts() {
	wp_enqueue_style( 'source-sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons.css' );
	wp_enqueue_style( 'animation', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'd5k-landing', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'd5k_scripts' );

function d5k_admin_scripts() {
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons.css' );
}
add_action ( 'admin_enqueue_scripts', 'd5k_admin_scripts' );

/**
 * Custom Social Links widget.
 */
require get_template_directory() . '/inc/social-links-widget.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
