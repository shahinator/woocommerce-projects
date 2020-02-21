<?php

if (!defined('ABSPATH')) { die('Direct access forbidden.'); }
/**
 * Enqueue all theme scripts and styles
 *
 * ** REGISTERING THEME ASSETS
 * **
 * Enqueue styles.
 */


/**
 * Enqueue google fonts.
 */
function cleanhit_fonts_url(){
	$fonts_url = '';
	 
	/* Translators: If there are characters in your language that are not
	* supported by Droid Serif, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$popins = _x( 'on', 'Poppins font: on or off', 'cleanhit' );
	$opensans = _x( 'on', 'Open Sans font: on or off', 'cleanhit' );
	
	 
	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	
	if ( 'off' !== $popins || 'off' !== $opensans ) {
	$font_families = array();
	
	if ( 'off' !== $popins ) {
	$font_families[] = 'Poppins:300,400,500,600,700,800,900';
	}
	 
	if ( 'off' !== $opensans ) {
	$font_families[] = 'Open Sans:300,400,600,700,800';
	}
	 
	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),	
	);
	 
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );	

}



if (!is_admin()) {
    // dependencies | 3rd party components
	// Add custom fonts, used in the main stylesheet.
    //wp_enqueue_style('gfonts',CLEANHIT_fonts_url(), array(), '1.0.0'); 
    wp_enqueue_style( 'cleanhit-fonts', cleanhit_fonts_url(), array(), null );	
    //Theme CSS file Include Here  
    
    wp_enqueue_style('bootstrap', CLEANHIT_CSS . '/bootstrap.min.css', '', null);
	wp_enqueue_style('font-awesome', CLEANHIT_CSS . '/font-awesome.min.css', '', null);
	wp_enqueue_style('stroke-gap-Icons', CLEANHIT_CSS . '/stroke-gap-Icons.css', '', null);
	wp_enqueue_style('pogo-slider', CLEANHIT_CSS . '/pogo-slider.css', '', null);
	wp_enqueue_style('cookcodesmenu-css', CLEANHIT_CSS . '/cookcodesmenu.min.css', '', null);   
    wp_enqueue_style( 'animate.min-css', CLEANHIT_CSS . '/animate.min.css');
    wp_enqueue_style( 'aos-css', CLEANHIT_CSS . '/aos.css');
    wp_enqueue_style( 'owl-css', CLEANHIT_CSS . '/owl.css');
    wp_enqueue_style( 'animated-text-css', CLEANHIT_CSS . '/animated-text.css');
    wp_enqueue_style( 'jarallax-css', CLEANHIT_CSS . '/jarallax.css');
    wp_enqueue_style( 'cleanhit-fw-utility', CLEANHIT_CSS . '/cleanhit-fw-utility.css');
    wp_enqueue_style( 'cleanhit-wp-utility', CLEANHIT_CSS . '/cleanhit-wp-utility.css');
	wp_enqueue_style('golden-style', CLEANHIT_CSS . '/golden-style.css', '', CLEANHIT_VERSION);
	wp_enqueue_style('cleanhit-core', CLEANHIT_CSS . '/cleanhit-core.css', '', CLEANHIT_VERSION);
	wp_enqueue_style( 'cleanhit-style', get_stylesheet_uri() );
	wp_style_add_data( 'cleanhit-style', 'rtl', 'replace' );
	wp_enqueue_style('responsive-css', CLEANHIT_CSS . '/responsive.css', '', CLEANHIT_VERSION);

}

/**
 * Enqueue scripts.
 */
if (!is_admin()) {
	//Theme JS file Include Here
	



    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('popper', CLEANHIT_SCRIPTS . '/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', CLEANHIT_SCRIPTS . '/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('cookcodesmenu-js', CLEANHIT_SCRIPTS . '/jquery.cookcodesmenu.min.js', array('jquery'), '', true);
    wp_enqueue_script('scrolltofixed-js', CLEANHIT_SCRIPTS . '/jquery-scrolltofixed-min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.pogo-slider-js', CLEANHIT_SCRIPTS . '/jquery.pogo-slider.js', array('jquery'), '', true);
    wp_enqueue_script('animated-js', CLEANHIT_SCRIPTS . '/animated-text.js', array('jquery'), '', true);
    wp_enqueue_script('waypoints-js', CLEANHIT_SCRIPTS . '/jquery.waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('countup', CLEANHIT_SCRIPTS . '/jquery.countup.min.js', array('jquery'), '', true);
	wp_enqueue_script('jarallax-js', CLEANHIT_SCRIPTS . '/jarallax.min.js', array('jquery'), '', true);
	wp_enqueue_script('dyscrollup-js', CLEANHIT_SCRIPTS . '/dyscrollup.js', array('jquery'), '', true);
	wp_enqueue_script('imagesloaded-js', CLEANHIT_SCRIPTS . '/imagesloaded.min.js', array('jquery'), '', true);
	wp_enqueue_script('mixitup-js', CLEANHIT_SCRIPTS . '/jquery.mixitup.min.js', array('jquery'), '', true);
	wp_enqueue_script('owl.carousel-js', CLEANHIT_SCRIPTS . '/owl.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('aos-js', CLEANHIT_SCRIPTS . '/aos.js', array('jquery'), '', true);
	wp_enqueue_script('ripples-js', CLEANHIT_SCRIPTS . '/jquery.ripples.js', array('jquery'), '', true);
	wp_enqueue_script('froogaloop2-js', CLEANHIT_SCRIPTS . '/froogaloop2.min.js', array('jquery'), '', true);
	wp_enqueue_script('html5lightbox-js', CLEANHIT_SCRIPTS . '/html5lightbox.js', array('jquery'), '', true);      
	wp_enqueue_script('fw-form-helpers', CLEANHIT_SCRIPTS . '/fw-form-helpers.js', array('jquery'), '', true);
	//localaze script ready 
	wp_register_script('ajax-login-script', CLEANHIT_SCRIPTS . '/ajax-login-script.js', array('jquery') );
	wp_enqueue_script('ajax-login-script');
	wp_localize_script( 'ajax-login-script', 'ajax_object', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'loader_img' => CLEANHIT_IMAGES.'/ajax-loader.gif'
	));
    wp_enqueue_script('main-js', CLEANHIT_SCRIPTS . '/main.js', array('jquery'), '', true);
	wp_enqueue_script( 'cleanhit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'cleanhit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}



}
