<?php 
 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//custom widget development for about company 

function cleanhit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cleanhit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cleanhit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="sidebar-titel"><h4>',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'cleanhit' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'cleanhit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget"><div class="footer-col">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'cleanhit' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'cleanhit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="sidebar-titel"><h4>',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'cleanhit_widgets_init' );

// Main Menu
function cleanhit_main_menu(){    
    wp_nav_menu(array(
        'menu' => 'header',
        'theme_location' => 'header',
        'container' => 'div',
        'container_class' => 'main-menu',
        'container_id' => 'cleanhit_main_menu',
        'menu_class' => '',
        'menu_id' => 'menu'
        )
    );
}




// Initializing online demo contents
function _filter_cleanhit_fw_ext_backups_demos($demos) {
	$demo_content_installer = CLEANHIT_REMOTE_CONTENT . 'demo_data';
    $demos_array = array(	
        'demo_setup' => array(
            'title' => __('Cleanhit One Click Demo Setup', 'cleanhit'),
            'screenshot' => $demo_content_installer . '/defaultdemo/screenshot.png',
            'preview_link' => 'https://themeforest.net/user/irstheme',
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
add_filter('fw:ext:backups-demo:demos', '_filter_cleanhit_fw_ext_backups_demos'); 

