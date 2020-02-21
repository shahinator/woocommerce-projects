<?php
/**
 * TeaDokan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TeaDokan
 */
define('TEADOKAN_THEME', 'Teadokan');
define('TEADOKAN_VERSION', '1.1.0');
define('TEADOKAN_THEMEROOT', get_template_directory_uri());
define('TEADOKAN_THEMEROOT_DIR', get_template_directory());
define('TEADOKAN_IMAGES', TEADOKAN_THEMEROOT . '/assets/img');
define('BITBAg_DIR', TEADOKAN_THEMEROOT_DIR . '/assets/img');
define('TEADOKAN_CSS', TEADOKAN_THEMEROOT . '/assets/css');
define('TEADOKAN_CSS_DIR', TEADOKAN_THEMEROOT_DIR . '/assets/css');
define('TEADOKAN_SCRIPTS', TEADOKAN_THEMEROOT . '/assets/js');
define('TEADOKAN_SCRIPTS_DIR', TEADOKAN_THEMEROOT_DIR . '/assets/js');
define('TEADOKAN_REMOTE_CONTENT', 'http://radontheme.com/remote-content/teadokan/');
if ( ! function_exists( 'teadokan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function teadokan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TeaDokan, use a find and replace
		 * to change 'teadokan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'teadokan', get_template_directory() . '/languages' );

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
		add_image_size( 'teadokan-blog-thumb', 900, 370, true );
		add_image_size( 'teadokan-small-thumb', 100, 100, true );	
		add_image_size( 'teadokan-product-thumb', 600, 600, true );	


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Header Menu', 'teadokan' ),
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
			'video',
			'audio'
		) );


		add_theme_support( 'post-formats', array( 
			'aside', 
			'gallery',
			'caption',
			'video',
			'audio'
			) 
		);

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'teadokan_custom_background_args', array(
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
add_action( 'after_setup_theme', 'teadokan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function teadokan_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'teadokan_content_width', 640 );
}
add_action( 'after_setup_theme', 'teadokan_content_width', 0 );

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
require get_template_directory() . '/inc/Teadokan_Comment_Walker.php';
require get_template_directory() . '/inc/teadokan-metabox.php';

/*
Redux theme Option added file
*/
require get_template_directory() . '/inc/teadokan-config.php';

//add filter for woocommerce title
add_filter('woocommerce_show_page_title','teadokan_show_page_title');
function teadokan_show_page_title(){
	return;
}

//remove and add action 
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
add_action('woocommerce_shop_loop_item_title','teadokan_wc_template_loop_product_title',10);
function teadokan_wc_template_loop_product_title(){
	echo'<div class="product_title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></div>';
;}
 
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
add_action('woocommerce_before_shop_loop_item_title','teadokan_wc_template_loop_product_thumbnail',10);
function teadokan_wc_template_loop_product_thumbnail(){
	?>

	<div class="product-thumbnail">
		<a href="<?php the_permalink();?>"><?php woocommerce_template_loop_product_thumbnail('teadokan-product-thumb');?></a>
		<div class="product-attributes">
			<ul>
				<li><?php woocommerce_template_loop_add_to_cart(); ?></li>
				<?php if(shortcode_exists('yith_compare_button')): ?>
				<li><?php echo do_shortcode('[yith_compare_button]'); ?></li>
				<?php endif;?>
			</ul>
		</div>

	</div>

	<?php
}

//from shop content remove add to cart 
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);


// add and remove product price and rating 
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
add_action('woocommerce_after_shop_loop_item_title','teadokan_template_loop_price_rating',10);
function teadokan_template_loop_price_rating(){
?> 
<div class="product-price">
	<?php woocommerce_template_loop_price(); woocommerce_template_loop_rating();?>
</div>
<?php
}

/**
 * Rename 
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',20 );

/**
* @snippet       Remove "Default Sorting" Dropdown Teadokan Shop & Archive Pages
*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
/**
 * Shop Product Per page Custom Function
 * 
 */
function teadokan_product_per_page(){
    global $woocommerce;
    $default = 12;
    $count = $default;
    $options = teadokan_product_per_page_options();
    // capture form data and store in session
    if(isset($_POST['teadokan-woocommerce-products-per-page'])){
        // set products per page from dropdown
        $products_max = intval($_POST['teadokan-woocommerce-products-per-page']);
        if($products_max != 0 && $products_max >= -1){
                if(is_user_logged_in()){
                    $user_id = get_current_user_id();
                        $limit = get_user_meta( $user_id, '_product_per_page', true );

                        if(!$limit){
                                add_user_meta( $user_id, '_product_per_page', $products_max);
                        }else{
                                update_user_meta( $user_id, '_product_per_page', $products_max, $limit);
                        }
                }
            $woocommerce->session->teadokan_product_per_page = $products_max;
            return $products_max;
        }
    }
    // load product limit from user meta
    if(is_user_logged_in() && !isset($woocommerce->session->teadokan_product_per_page)){
        $user_id = get_current_user_id();
        $limit = get_user_meta( $user_id, '_product_per_page', true );
        if(array_key_exists($limit, $options)){
            $woocommerce->session->teadokan_product_per_page = $limit;
            return $limit;
        }
    }
    // load product limit from session
    if(isset($woocommerce->session->teadokan_product_per_page)){
        // set products per page from woo session
        $products_max = intval($woocommerce->session->teadokan_product_per_page);
        if($products_max != 0 && $products_max >= -1){
            return $products_max;
        }
    }
    return $count;
}
add_filter('loop_shop_per_page','teadokan_product_per_page');
function teadokan_product_per_page_options(){
        $options = apply_filters( 'teadokan_product_per_page', array(
                8 => esc_html__('8', 'teadokan'),
                12 => esc_html__('12', 'teadokan'),
                24 => esc_html__('24', 'teadokan'),
                48 => esc_html__('48', 'teadokan'),
                96 => esc_html__('96', 'teadokan')
    ));
    return $options;
}

function teadokan_woocommerce_products_per_page(){
    $options = teadokan_product_per_page_options();
    $current_value = teadokan_product_per_page();
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="topbar-area">
				<div class="row">
					<div class="col-md-6">		
						<span><?php esc_html_e('Show Per Page:','teadokan'); ?></span>
						<label class="teadokan-select"> 
							<form action="" method="POST" class="woocommerce-products-per-page">
								<select name="teadokan-woocommerce-products-per-page" onchange="this.form.submit()" class="form-control">
									<?php foreach($options as $value => $name): ?>
										<option value="<?php echo esc_attr($value); ?>" <?php selected($value, $current_value); ?>><?php echo esc_html($name); ?></option>
									<?php endforeach; ?>
								</select>
							</form>  
						</label>
					</div>
					<div class="col-md-6">
						<?php woocommerce_catalog_ordering();?>
					</div>

				</div>
			</div>
		</div>
	</div>
    <?php
}
add_action('woocommerce_before_shop_loop', 'teadokan_woocommerce_products_per_page', 50);



