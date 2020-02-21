<?php

if ( ! function_exists('cleanhit_custompost_registration') ) {
	function cleanhit_custompost_registration() {
		//custom post for slider
		register_post_type('cleanhitSlider', array(
			'labels' => array(
				'name'                  => _x( 'Sliders', 'Post Type General Name', 'cleanhit' ),
				'singular_name'         => _x( 'Sliders', 'Post Type Singular Name', 'cleanhit' ),
				'menu_name'             => esc_html__( 'Sliders', 'cleanhit' ),
				'name_admin_bar'        => esc_html__( 'Sliders', 'cleanhit' ),
				'parent_item_colon'     => esc_html__( 'Parent Sliders:', 'cleanhit' ),
				'all_items'             => esc_html__( 'All Sliders', 'cleanhit' ),
				'add_new_item'          => esc_html__( 'Add New Sliders', 'cleanhit' ),
				'add_new'               => esc_html__( 'Add Sliders', 'cleanhit' ),
				'new_item'              => esc_html__( 'New Sliders', 'cleanhit' ),
				'edit_item'             => esc_html__( 'Edit Sliders', 'cleanhit' ),
				'update_item'           => esc_html__( 'Update Sliders', 'cleanhit' ),
				'view_item'             => esc_html__( 'View Sliders', 'cleanhit' ),
				'search_items'          => esc_html__( 'Search Sliders', 'cleanhit' ),
				'not_found'             => esc_html__( 'Not found', 'cleanhit' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'cleanhit' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-admin-page',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);





		//custom post for Services
		register_post_type('cleanhitservices', array(
			'labels' => array(
				'name'                  => _x( 'Services', 'Post Type General Name', 'cleanhit' ),
				'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'cleanhit' ),
				'menu_name'             => esc_html__( 'Services', 'cleanhit' ),
				'name_admin_bar'        => esc_html__( 'Services', 'cleanhit' ),
				'parent_item_colon'     => esc_html__( 'Parent Service:', 'cleanhit' ),
				'all_items'             => esc_html__( 'All Services', 'cleanhit' ),
				'add_new_item'          => esc_html__( 'Add New Service', 'cleanhit' ),
				'add_new'               => esc_html__( 'Add Service', 'cleanhit' ),
				'new_item'              => esc_html__( 'New Service', 'cleanhit' ),
				'edit_item'             => esc_html__( 'Edit Service', 'cleanhit' ),
				'update_item'           => esc_html__( 'Update Service', 'cleanhit' ),
				'view_item'             => esc_html__( 'View Service', 'cleanhit' ),
				'search_items'          => esc_html__( 'Search Service', 'cleanhit' ),
				'not_found'             => esc_html__( 'Not found', 'cleanhit' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'cleanhit' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => true,
			'public'                => true,
			'rewrite'   			=> true,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-align-left',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			)
		);

		//custom post for Teams
		register_post_type('cleanhitteams', array(
			'labels' => array(
				'name'                  => _x( 'Team Members', 'Post Type General Name', 'cleanhit' ),
				'singular_name'         => _x( 'Team Members', 'Post Type Singular Name', 'cleanhit' ),
				'menu_name'             => esc_html__( 'Team Members', 'cleanhit' ),
				'name_admin_bar'        => esc_html__( 'Teams', 'cleanhit' ),
				'parent_item_colon'     => esc_html__( 'Parent Team:', 'cleanhit' ),
				'all_items'             => esc_html__( 'All Teams', 'cleanhit' ),
				'add_new_item'          => esc_html__( 'Add New Team', 'cleanhit' ),
				'add_new'               => esc_html__( 'Add Team', 'cleanhit' ),
				'new_item'              => esc_html__( 'New Team', 'cleanhit' ),
				'edit_item'             => esc_html__( 'Edit Team', 'cleanhit' ),
				'update_item'           => esc_html__( 'Update Team', 'cleanhit' ),
				'view_item'             => esc_html__( 'View Team', 'cleanhit' ),
				'search_items'          => esc_html__( 'Search Team', 'cleanhit' ),
				'not_found'             => esc_html__( 'Not found', 'cleanhit' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'cleanhit' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => true,
			'public'                => true,
			'rewrite'   			=> true,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			)
		);

		//custom post for Testimonials
		register_post_type('cleanhittestimonials', array(
			'labels' => array(
				'name'                  => _x( 'Testimonials', 'Post Type General Name', 'cleanhit' ),
				'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'cleanhit' ),
				'menu_name'             => esc_html__( 'Testimonials', 'cleanhit' ),
				'name_admin_bar'        => esc_html__( 'Testimonials', 'cleanhit' ),
				'parent_item_colon'     => esc_html__( 'Parent Testimonial:', 'cleanhit' ),
				'all_items'             => esc_html__( 'All Testimonials', 'cleanhit' ),
				'add_new_item'          => esc_html__( 'Add New Testimonial', 'cleanhit' ),
				'add_new'               => esc_html__( 'Add Testimonial', 'cleanhit' ),
				'new_item'              => esc_html__( 'New Testimonial', 'cleanhit' ),
				'edit_item'             => esc_html__( 'Edit Testimonial', 'cleanhit' ),
				'update_item'           => esc_html__( 'Update Testimonial', 'cleanhit' ),
				'view_item'             => esc_html__( 'View Testimonial', 'cleanhit' ),
				'search_items'          => esc_html__( 'Search Testimonial', 'cleanhit' ),
				'not_found'             => esc_html__( 'Not found', 'cleanhit' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'cleanhit' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-editor-quote',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Projects
		register_post_type('cleanhitprojects', array(
			'labels' => array(
				'name'                  => _x( 'Projects', 'Post Type General Name', 'cleanhit' ),
				'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'cleanhit' ),
				'menu_name'             => esc_html__( 'Projects', 'cleanhit' ),
				'name_admin_bar'        => esc_html__( 'Projects', 'cleanhit' ),
				'parent_item_colon'     => esc_html__( 'Parent Project:', 'cleanhit' ),
				'all_items'             => esc_html__( 'All Projects', 'cleanhit' ),
				'add_new_item'          => esc_html__( 'Add New Project', 'cleanhit' ),
				'add_new'               => esc_html__( 'Add Project', 'cleanhit' ),
				'new_item'              => esc_html__( 'New Project', 'cleanhit' ),
				'edit_item'             => esc_html__( 'Edit Project', 'cleanhit' ),
				'update_item'           => esc_html__( 'Update Project', 'cleanhit' ),
				'view_item'             => esc_html__( 'View Project', 'cleanhit' ),
				'search_items'          => esc_html__( 'Search Project', 'cleanhit' ),
				'not_found'             => esc_html__( 'Not found', 'cleanhit' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'cleanhit' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-screenoptions',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Partner Logo
		register_post_type('cleanhitlogo', array(
			'labels' => array(
				'name'                  => _x( 'Partner Logo', 'Post Type General Name', 'cleanhit' ),
				'singular_name'         => _x( 'Partner Logo', 'Post Type Singular Name', 'cleanhit' ),
				'menu_name'             => esc_html__( 'Partner Logo', 'cleanhit' ),
				'name_admin_bar'        => esc_html__( 'Partner Logo', 'cleanhit' ),
				'parent_item_colon'     => esc_html__( 'Parent Partner Logo:', 'cleanhit' ),
				'all_items'             => esc_html__( 'All Partner Logo', 'cleanhit' ),
				'add_new_item'          => esc_html__( 'Add New Partner Logo', 'cleanhit' ),
				'add_new'               => esc_html__( 'Add Partner Logo', 'cleanhit' ),
				'new_item'              => esc_html__( 'New Partner Logo', 'cleanhit' ),
				'edit_item'             => esc_html__( 'Edit Partner Logo', 'cleanhit' ),
				'update_item'           => esc_html__( 'Update Partner Logo', 'cleanhit' ),
				'view_item'             => esc_html__( 'View Partner Logo', 'cleanhit' ),
				'search_items'          => esc_html__( 'Search Partner Logo', 'cleanhit' ),
				'not_found'             => esc_html__( 'Not found', 'cleanhit' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'cleanhit' ),
			),
			'supports'              => array( 'title','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-images-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);



	}
	add_action('init', 'cleanhit_custompost_registration');
}


/*Custom Texonomy Portfolio Start Here*/


add_action('init', 'cleanhit_category');

function cleanhit_category() {
    register_taxonomy(
        'cleanhitSlider_cat', 'cleanhitslider', array(
        'label' => __('Slider Category','cleanhit'),
        'rewrite' => array('slug' => 'cleanhitSlider_cat'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'sort' => true,
        'query_var' => true,
    ));
    register_taxonomy(
        'cleanhitprojects_cat', 'cleanhitprojects', array(
        'label' => __('Projects Category','cleanhit'),
        'rewrite' => array('slug' => 'project_category'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'sort' => true,
        'query_var' => true,
    ));
}







/**
 *  Builder auto activate for certain post types
 *  @internal
 */

function cleanhit_section_thz_filter_auto_activate_builder() {

    $auto = array(
        'post' => true,
        'page' => true,
        'cleanhitSlider' => true,
    );

    return  $auto;
}
add_filter( 'fw_ext_page_builder_settings_options_post_types_default_value', 'cleanhit_section_thz_filter_auto_activate_builder' );

function cleanhit_admin_menu() {
	if (defined('FW')) {
		global $wp_admin_bar;
		$wp_admin_bar->add_menu(array('id' => 'cleanhit_ext', 'title' => '  Extensions', 'href' => admin_url('admin.php?page=fw-extensions')));
	}
}

add_action('admin_bar_menu', 'cleanhit_admin_menu',2000);


//social share function
function cleanhit_social_share(){?>
	<div class="share-links">
		<h4><?php echo esc_html('Share','cleanhit');?> <i class="fa fa-share-alt"></i></h4>
		<ul>
			<li> <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink()) ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>  </li>
			<li> <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//twitter.com/home?status=<?php echo esc_html( get_the_title() ) ?> - <?php echo esc_url( get_permalink()) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>  </li>
			<li>  <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//plus.google.com/share?url=<?php echo esc_url( get_permalink()) ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>  </li>
		</ul>
	</div>
<?php
}