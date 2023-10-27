<?php
/**
 * plaisir functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package plaisir
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Options globales',
        'menu_title'    => 'Options globales',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function plaisir_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on plaisir, use a find and replace
		* to change 'plaisir' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'plaisir', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'plaisir' ),
			'menu-footer-1' => esc_html__( 'Footer 1', 'plaisir' ),
			'menu-footer-2' => esc_html__( 'Footer 2', 'plaisir' ),
			'menu-footer-3' => esc_html__( 'Footer 3', 'plaisir' ),
			'menu-footer-4' => esc_html__( 'Footer 4', 'plaisir' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'plaisir_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'plaisir_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function plaisir_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'plaisir_content_width', 640 );
}
add_action( 'after_setup_theme', 'plaisir_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function plaisir_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'plaisir' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'plaisir' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'plaisir_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function plaisir_scripts() {
	//wp_enqueue_style( 'plaisir-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'plaisir-style', 'rtl', 'replace' );


    wp_enqueue_style( 'plaisir-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
    wp_enqueue_style( 'plaisir-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );
    wp_enqueue_style( 'plaisir-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION );
    wp_enqueue_style( 'plaisir-mcustomscrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css
', array(), _S_VERSION );
    wp_enqueue_style( 'plaisir-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );

    wp_enqueue_script( 'plaisir-gmap', 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCUg3gRKgK52r6QisJiADBNhLfdnlIylQY' );
    wp_enqueue_script( 'plaisir-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, array('in_footer' => true) );
    wp_enqueue_script( 'plaisir-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, array('in_footer' => true) );
    wp_enqueue_script( 'plaisir-mcustomscrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), _S_VERSION, array('in_footer' => true) );
    wp_enqueue_script( 'plaisir-main', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), _S_VERSION, array('in_footer' => true) );
}
add_action( 'wp_enqueue_scripts', 'plaisir_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


include_once 'inc/image-sizes.php';
include_once 'inc/CustomMenuWalker.php';

include_once 'inc/cpt/index.php';
include_once 'inc/acf/fields.php';

include_once 'inc/svg_enabling.php';

include_once 'template-parts/breadcrumbs.php';

add_filter('wpcf7_autop_or_not', '__return_false');


