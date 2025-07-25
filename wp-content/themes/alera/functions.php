<?php
/**
 * Alera functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alera
 */

if ( ! function_exists( 'alera_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alera_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'alera', get_template_directory() . '/languages' );

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

		// Requiring Navwalker
        require_once( 'inc/navwalker.php' );

		// This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'alera' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'alera_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alera_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alera_content_width', 640 );
}
add_action( 'after_setup_theme', 'alera_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alera_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alera' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'alera' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span class="widget-title-text">',
		'after_title'   => '</span></h2>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'alera' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'alera' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="footer-widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'alera' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'alera' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="footer-widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'alera' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'alera' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="footer-widget-title">',
        'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'alera' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'alera' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alera_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alera_scripts() {
	wp_enqueue_style( 'alera-style', get_stylesheet_uri() );

    wp_enqueue_style( 'alera-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap', array(), null );

    wp_enqueue_style( 'alera-custom-style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0' );

    wp_enqueue_script( 'alera-custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );

    wp_enqueue_script( 'alera-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alera-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alera_scripts' );

/**
 * Type html (text, textarea) sanitization callback.
 */
function alera_sanitize_html( $html ) {
    return wp_filter_post_kses( $html );
}

/**
 * Type number sanitization callback.
 */
function alera_sanitize_number_absint( $number, $setting ) {
	$number = absint( $number );
	return ( $number ? $number : $setting->default );
}

/**
 * Type image upload sanitization callback.
 */
function alera_sanitize_image( $image, $setting ) {

    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    $file = wp_check_filetype( $image, $mimes );

    return ( $file['ext'] ? $image : $setting->default );
}

/**
 * Type email sanitization callback.
 */
function alera_sanitize_email( $email, $setting ) {

    $email = sanitize_email( $email );
    return ( ! is_null( $email ) ? $email : $setting->default );

}

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}