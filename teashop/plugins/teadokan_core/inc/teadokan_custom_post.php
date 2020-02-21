<?php

if ( ! function_exists('teadokan_custompost_registration') ) {
	function teadokan_custompost_registration() {
		//custom post for slider
		register_post_type('teadokanSlider', array(
			'labels' => array(
				'name'                  => _x( 'Sliders', 'Post Type General Name', 'teadokan' ),
				'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'teadokan' ),
				'menu_name'             => esc_html__( 'Sliders', 'teadokan' ),
				'name_admin_bar'        => esc_html__( 'Sliders', 'teadokan' ),
				'parent_item_colon'     => esc_html__( 'Parent Slider:', 'teadokan' ),
				'all_items'             => esc_html__( 'All Sliders', 'teadokan' ),
				'add_new_item'          => esc_html__( 'Add New Slider', 'teadokan' ),
				'add_new'               => esc_html__( 'Add Slider', 'teadokan' ),
				'new_item'              => esc_html__( 'New Slider', 'teadokan' ),
				'edit_item'             => esc_html__( 'Edit Slider', 'teadokan' ),
				'update_item'           => esc_html__( 'Update Slider', 'teadokan' ),
				'view_item'             => esc_html__( 'View Slider', 'teadokan' ),
				'search_items'          => esc_html__( 'Search Slider', 'teadokan' ),
				'not_found'             => esc_html__( 'Not found', 'teadokan' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'teadokan' ),
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
		register_post_type('teadokanServices', array(
			'labels' => array(
				'name'                  => _x( 'Services', 'Post Type General Name', 'teadokan' ),
				'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'teadokan' ),
				'menu_name'             => esc_html__( 'Services', 'teadokan' ),
				'name_admin_bar'        => esc_html__( 'Services', 'teadokan' ),
				'parent_item_colon'     => esc_html__( 'Parent Service:', 'teadokan' ),
				'all_items'             => esc_html__( 'All Services', 'teadokan' ),
				'add_new_item'          => esc_html__( 'Add New Service', 'teadokan' ),
				'add_new'               => esc_html__( 'Add Service', 'teadokan' ),
				'new_item'              => esc_html__( 'New Service', 'teadokan' ),
				'edit_item'             => esc_html__( 'Edit Service', 'teadokan' ),
				'update_item'           => esc_html__( 'Update Service', 'teadokan' ),
				'view_item'             => esc_html__( 'View Service', 'teadokan' ),
				'search_items'          => esc_html__( 'Search Service', 'teadokan' ),
				'not_found'             => esc_html__( 'Not found', 'teadokan' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'teadokan' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-align-left',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Teams
		register_post_type('teadokanTeams', array(
			'labels' => array(
				'name'                  => _x( 'Teams', 'Post Type General Name', 'teadokan' ),
				'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'teadokan' ),
				'menu_name'             => esc_html__( 'Teams', 'teadokan' ),
				'name_admin_bar'        => esc_html__( 'Teams', 'teadokan' ),
				'parent_item_colon'     => esc_html__( 'Parent Team:', 'teadokan' ),
				'all_items'             => esc_html__( 'All Teams', 'teadokan' ),
				'add_new_item'          => esc_html__( 'Add New Team', 'teadokan' ),
				'add_new'               => esc_html__( 'Add Team', 'teadokan' ),
				'new_item'              => esc_html__( 'New Team', 'teadokan' ),
				'edit_item'             => esc_html__( 'Edit Team', 'teadokan' ),
				'update_item'           => esc_html__( 'Update Team', 'teadokan' ),
				'view_item'             => esc_html__( 'View Team', 'teadokan' ),
				'search_items'          => esc_html__( 'Search Team', 'teadokan' ),
				'not_found'             => esc_html__( 'Not found', 'teadokan' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'teadokan' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);

		//custom post for Testimonials
		register_post_type('teadokanTestimonials', array(
			'labels' => array(
				'name'                  => _x( 'Testimonials', 'Post Type General Name', 'teadokan' ),
				'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'teadokan' ),
				'menu_name'             => esc_html__( 'Testimonials', 'teadokan' ),
				'name_admin_bar'        => esc_html__( 'Testimonials', 'teadokan' ),
				'parent_item_colon'     => esc_html__( 'Parent Testimonial:', 'teadokan' ),
				'all_items'             => esc_html__( 'All Testimonials', 'teadokan' ),
				'add_new_item'          => esc_html__( 'Add New Testimonial', 'teadokan' ),
				'add_new'               => esc_html__( 'Add Testimonial', 'teadokan' ),
				'new_item'              => esc_html__( 'New Testimonial', 'teadokan' ),
				'edit_item'             => esc_html__( 'Edit Testimonial', 'teadokan' ),
				'update_item'           => esc_html__( 'Update Testimonial', 'teadokan' ),
				'view_item'             => esc_html__( 'View Testimonial', 'teadokan' ),
				'search_items'          => esc_html__( 'Search Testimonial', 'teadokan' ),
				'not_found'             => esc_html__( 'Not found', 'teadokan' ),
				'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'teadokan' ),
			),
			'supports'              => array( 'title','editor','fw-layout-builder','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'rewrite'   			=> false,  
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-editor-quote',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			)
		);



	}
	add_action('init', 'teadokan_custompost_registration');
}


/*Custom Texonomy Portfolio Start Here*/
add_action( 'init', 'custom_taxonomy' );

function custom_taxonomy() {
	register_taxonomy(
		'Slider_section_cat',
		'Slider_section',
		array(
			'hierarchical'          => true,
			'label'                         => 'Slider Categories',  //Display name
			'query_var'             => true,
			'rewrite'                       => array(
				'slug'                  => 'Slider-category', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);
}


/**
 *  Builder auto activate for certain post types
 *  @internal
 */

function teadokan_section_thz_filter_auto_activate_builder() {

    $auto = array(
        'post' => true,
        'page' => true,
        'teadokanSlider' => true,
    );

    return  $auto;
}
add_filter( 'fw_ext_page_builder_settings_options_post_types_default_value', 'teadokan_section_thz_filter_auto_activate_builder' );
function teadokan_social_share(){?>
	<div class="social-media">
		<div class="share">
			<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
		</div>
		<ul>
			<li> <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink()) ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>  </li>
			<li> <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//twitter.com/home?status=<?php echo esc_html( get_the_title() ) ?> - <?php echo esc_url( get_permalink()) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>  </li>
			<li>  <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//plus.google.com/share?url=<?php echo esc_url( get_permalink()) ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>  </li>
		</ul>
	</div>
<?php
}

function teadokan_admin_menu() {
	if (defined('FW')) {
		global $wp_admin_bar;
		$wp_admin_bar->add_menu(array('id' => 'teadokan_ext', 'title' => '  Extensions', 'href' => admin_url('admin.php?page=fw-extensions')));
	}
}

add_action('admin_bar_menu', 'teadokan_admin_menu',2000);


