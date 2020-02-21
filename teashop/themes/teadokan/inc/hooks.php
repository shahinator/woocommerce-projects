<?php 
 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//custom widget development for about company 

function teadokan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'teadokan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'teadokan' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="sidebar-titel"><h4>',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'teadokan' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'teadokan' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="sidebar-titel"><h4>',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'teadokan_widgets_init' );

// Main Menu
function teadokan_main_menu(){
	wp_nav_menu( array(
		'menu' => 'primary',
		'theme_location' => 'primary',
		'container' => 'div',
		'container_class' => 'container-custom-class',
		'container_id' => 'teadokan_main_menu',
		'menu_class' => 'nav navbar-nav text-right',
		'menu_id' => 'menu',
		'items_wrap' 	=> '<ul class="nav navbar-nav text-right">%3$s</ul>',
	));
}




// Initializing online demo contents
function _filter_teadokan_fw_ext_backups_demos($demos) {
	$demo_content_installer = TEADOKAN_REMOTE_CONTENT . 'demo_content';
    $demos_array = array(	
        'demo_setup' => array(
            'title' => __('Shayan One Click Demo Setup', 'teadokan'),
            'screenshot' => $demo_content_installer . '/defaultdemo/screenshot.png',
            'preview_link' => 'https://themeforest.net/user/radontheme',
        )
    );
    $download_url = $demo_content_installer . '/index.php';
    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);
        $demos[ $demo->get_id() ] = $demo;
        unset($demo);
    }
    return $demos;
}
add_filter('fw:ext:backups-demo:demos', '_filter_teadokan_fw_ext_backups_demos'); 

