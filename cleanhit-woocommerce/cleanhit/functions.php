<?php
/**
 * cleanhit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cleanhit
 */
define('CLEANHIT_THEME', 'Cleanhit');
define('CLEANHIT_VERSION', '1.1.0');
define('CLEANHIT_THEMEROOT', get_template_directory_uri());
define('CLEANHIT_THEMEROOT_DIR', get_template_directory());
define('CLEANHIT_IMAGES', CLEANHIT_THEMEROOT . '/images');
define('CLEANHIT_DIR', CLEANHIT_THEMEROOT_DIR . '/images');
define('CLEANHIT_CSS', CLEANHIT_THEMEROOT . '/css');
define('CLEANHIT_CSS_DIR', CLEANHIT_THEMEROOT_DIR . '/css');
define('CLEANHIT_SCRIPTS', CLEANHIT_THEMEROOT . '/js');
define('CLEANHIT_SCRIPTS_DIR', CLEANHIT_THEMEROOT_DIR . '/js');
define('CLEANHIT_REMOTE_CONTENT', 'https://irs-soft.com/remote-content/cleanhit/');
if ( ! function_exists( 'cleanhit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cleanhit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cleanhit, use a find and replace
		 * to change 'cleanhit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cleanhit', get_template_directory() . '/languages' );

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
		*woocommerce theme supports

		*/
		add_theme_support( 'woocommerce' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-thumbnails',array('post','cleanhitservices','cleanhitteams') );		
		add_image_size( 'cleanhitservices-thumb', 350, 210, true );
		add_image_size( 'cleanhitteams-thumb', 350, 455, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header' => esc_html__( 'Header Menu', 'cleanhit' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'gallery',
            'audio',
            'video',
            'link',
			'quote',
			'caption',
			'search-form',
			'comment-form',
			'comment-list',

        ));

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cleanhit_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'cleanhit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cleanhit_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cleanhit_content_width', 640 );
}
add_action( 'after_setup_theme', 'cleanhit_content_width', 0 );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* 
Core file Include
*/
require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm-plugin/required-plugins.php';
require get_template_directory() . '/inc/Cleanhit_Comment_Walker.php';
require get_template_directory() . '/inc/cleanhit-metabox.php';

/*
Redux theme Option added file
*/
require get_template_directory() . '/inc/cleanhit-config.php';


function cleanhit_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'cleanhit_add_editor_styles' );


//add filter for woocommerce title
add_filter('woocommerce_show_page_title','cleanhit_show_page_title');
function cleanhit_show_page_title(){
	return;
}

// remove breadcumb 
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',20 );
/**
* @snippet       Remove "Default Sorting" Dropdown Cleanhit Shop & Archive Pages
*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

