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
function teadokan_fonts_url(){
	$fonts_url = '';
	 
	/* Translators: If there are characters in your language that are not
	* supported by Droid Serif, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$pt_sans = _x( 'on', 'PT Sans font: on or off', 'teadokan' );
	$droid_serif = _x( 'on', 'Droid Serif font: on or off', 'teadokan' );
	
	 
	/* Translators: If there are characters in your language that are not
	* supported by PT Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	
	if ( 'off' !== $pt_sans || 'off' !== $droid_serif ) {
	$font_families = array();
	
	if ( 'off' !== $pt_sans ) {
	$font_families[] = 'PT Sans:400,700';
	}
	 
	if ( 'off' !== $droid_serif ) {
	$font_families[] = 'Droid Serif:400,700';
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
    //wp_enqueue_style('gfonts',teadokan_fonts_url(), array(), '1.0.0'); 
    wp_enqueue_style( 'teadokan-fonts', teadokan_fonts_url(), array(), null );	
    //Theme CSS file Include Here  
    
    wp_enqueue_style('bootstrap', TEADOKAN_CSS . '/bootstrap-3.3.7.min.css', '', null);
	wp_enqueue_style('animate', TEADOKAN_CSS . '/animate.min.css', '', null);
	wp_enqueue_style('font-awesome', TEADOKAN_CSS . '/font-awesome-4.7.min.css', '', null);
	wp_enqueue_style('jquery.ui', TEADOKAN_CSS . '/jquery-ui.v1.12.1.min.css', '', null);
	wp_enqueue_style('magnific-css', TEADOKAN_CSS . '/magnific-popup.css', '', null);
	wp_enqueue_style('owl.carousel-css', TEADOKAN_CSS . '/owl.carousel.css', '', null);   
    wp_enqueue_style( 'teadokan-fw-utility', TEADOKAN_CSS . '/teadokan-fw-utility.css');
    wp_enqueue_style( 'teadokan-wp-utility', TEADOKAN_CSS . '/teadokan-wp-utility.css');
	wp_enqueue_style('teadokan-core', TEADOKAN_CSS . '/teadokan-core.css', '', TEADOKAN_VERSION);
	wp_enqueue_style( 'teadokan-style', get_stylesheet_uri() );
	wp_enqueue_style('responsive-css', TEADOKAN_CSS . '/responsive.css', '', TEADOKAN_VERSION);

}

/**
 * Enqueue scripts.
 */
if (!is_admin()) {
	//Theme JS file Include Here
	



    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('bootstrap', TEADOKAN_SCRIPTS . '/bootstrap-3.3.7.min.js', array('jquery'), '', true);
    wp_enqueue_script('sticky', TEADOKAN_SCRIPTS . '/sticky.js', array('jquery'), '', true);
    wp_enqueue_script('easing', TEADOKAN_SCRIPTS . '/easing.min.js', array('jquery'), '', true);
    wp_enqueue_script('owl.carousel', TEADOKAN_SCRIPTS . '/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('isotope', TEADOKAN_SCRIPTS . '/isotope-3.0.4.min.js', array('jquery'), '', true);
    wp_enqueue_script('magnific-popup', TEADOKAN_SCRIPTS . '/magnific-popup.min.js', array('jquery'), '', true);
    wp_enqueue_script('wow', TEADOKAN_SCRIPTS . '/wow-1.3.0.min.js', array('jquery'), '', true);
    wp_enqueue_script('contact-form', TEADOKAN_SCRIPTS . '/contact-form.js', array('jquery'), '', true);    
	wp_enqueue_script('fw-form-helpers', TEADOKAN_SCRIPTS . '/fw-form-helpers.js', array('jquery'), '', true);
	//localaze script ready 
	wp_register_script('ajax-login-script', TEADOKAN_SCRIPTS . '/ajax-login-script.js', array('jquery') );
	wp_enqueue_script('ajax-login-script');
	wp_localize_script( 'ajax-login-script', 'ajax_object', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'loader_img' => TEADOKAN_IMAGES.'/ajax-loader.gif'
	));
    wp_enqueue_script('active-js', TEADOKAN_SCRIPTS . '/active.js', array('jquery'), '', true);
	wp_enqueue_script( 'teadokan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'teadokan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}



}
