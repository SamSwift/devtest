<?php
/**
 * Loose Leaf functions and definitions
 *
 * @package Loose Leaf
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'looseleaf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function looseleaf_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Loose Leaf, use a find and replace
	 * to change 'looseleaf' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'looseleaf', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'looseleaf' ),
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
	add_theme_support( 'custom-background', apply_filters( 'looseleaf_custom_background_args', array(
		'default-color' => 'f2f2f2',
		'default-image' => '',
	) ) );

	// Style the editor
	add_editor_style( array( 'editor-style.css', looseleaf_fonts_url() ) );
}
endif; // looseleaf_setup
add_action( 'after_setup_theme', 'looseleaf_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function looseleaf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'looseleaf' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Frontpage', 'looseleaf' ),
		'id'            => 'frontpage-widgets',
		'description'   => __( 'These widgets will appear beneath the header on the frontpage.', 'looseleaf' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'looseleaf' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'These widgets will appear in the footer.', 'looseleaf' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'looseleaf_widgets_init' );

/**
 * Google Fonts
 */
function looseleaf_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $lato = _x( 'on', 'Lato font: on or off', 'looseleaf' );

    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $sanchez = _x( 'on', 'Sanchez font: on or off', 'looseleaf' );

    if ( 'off' !== $lato || 'off' !== $sanchez ) {
        $font_families = array();

        if ( 'off' !== $lato ) {
            $font_families[] = 'Lato:400,700,900,400italic';
        }

        if ( 'off' !== $sanchez ) {
            $font_families[] = 'Sanchez:400italic,400';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function looseleaf_scripts() {
	wp_enqueue_style( 'looseleaf-style', get_stylesheet_uri() );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style( 'looseleaf-fonts', looseleaf_fonts_url(), array(), null );

	wp_enqueue_script( 'looseleaf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'looseleaf-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) || is_page_template( 'portfolio.php' ) ) {
		wp_enqueue_script( 'jquery-masonry', array( 'jquery' ) );
		wp_enqueue_script( 'looseleaf-masonry', get_template_directory_uri() . '/js/looseleaf-masonry.js', array(), '20150212', true );
	}
}
add_action( 'wp_enqueue_scripts', 'looseleaf_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
