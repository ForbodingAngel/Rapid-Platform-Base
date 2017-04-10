<?php
/**
 * rapidtesting functions and definitions
 *
 * @package rapidtesting
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'rapidtesting_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rapidtesting_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on rapidtesting, use a find and replace
	 * to change 'rapidtesting' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'rapidtesting', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'rapidtesting' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rapidtesting_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // rapidtesting_setup
add_action( 'after_setup_theme', 'rapidtesting_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function rapidtesting_widgets_init() {
	register_sidebar(array(
    	'id' => 'header-menu-above',
    	'name' => __('Menu Above Header', 'rapidtesting'),
    	'description' => __('If you want the menu above the header, put it here'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
    ));
	register_sidebar(array(
    	'id' => 'header-sidebar',
    	'name' => __('Site Header', 'rapidtesting'),
    	'description' => __('Site header goes here'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
    ));
	register_sidebar(array(
    	'id' => 'header-menu-below',
    	'name' => __('Menu Below Header', 'rapidtesting'),
    	'description' => __('If you want the menu below the header, put it here'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
    ));
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'rapidtesting' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar(array(
    	'id' => 'footer-sidebar',
    	'name' => __('Site Footer', 'rapidtesting'),
    	'description' => __('Site footer goes here'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
    ));
	register_sidebar(array(
    	'id' => 'site-info',
    	'name' => __('Site Info', 'rapidtesting'),
    	'description' => __('Site Information'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
    ));
}
add_action( 'widgets_init', 'rapidtesting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rapidtesting_scripts() {
	wp_enqueue_style( 'rapidtesting-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rapidtesting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'rapidtesting-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rapidtesting_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Add the ability to call a menu with a shortcode: [menu name="nameofthemenu"] */

function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');

function clearboth() {
    return '<div style="clear:both"></div>';
}
add_shortcode("clearboth", "clearboth");

// Add Shortcode
function ctabutton( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'float' => '',
		), $atts )
	);

	// Code
return '<div class="ctabutton" style="float: '.$float.';">'.$content.'</div>';
}
add_shortcode( 'ctabutton', 'ctabutton' );

function limitwidth( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'maxwidth' => '',
		), $atts )
	);

	// Code
return '<div class="limitwidth" style="margin-left: auto; margin-right: auto; max-width: '.$maxwidth.';">'.$content.'</div>';
}
add_shortcode( 'limitwidth', 'limitwidth' );

function maxMenu() {
    return wp_nav_menu( array( 'theme_location' => 'primary' ) );
}
add_shortcode('maxmenu', 'maxMenu');

add_theme_support( 'post-thumbnails' ); 

function responsive( $atts , $content = null ) {
	
	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);

    return '<div class="embed-container">'.$content.'</div>';
}
add_shortcode("responsive-embed", "responsive");

/* Remove wordpress theme and plugin editor */
define( 'DISALLOW_FILE_EDIT', true );

/* Add a custom style for the post/page editor so that pages are easier to lay out */
function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

/* Disable WordPress Admin Bar for all users */
show_admin_bar(false);