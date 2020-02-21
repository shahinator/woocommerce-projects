<?php
add_action( 'cmb2_admin_init', 'teadokan_metabox' );
function teadokan_metabox() {
	 
    // metabox support for service
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'teadokan_slider_setting_area',
		'title'        => esc_html__( 'Slider Setting', 'teadokan' ),
		'object_types' => array( 'teadokanslider'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Sub Title Name', 'teadokan'),
		'id'      =>  'teadokanslider_slider_subtitle',
		'default' =>  esc_html__( 'WE HAVE ', 'teadokan'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Sub Title Here', 'teadokan')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Button Name', 'teadokan'),
		'id'      =>  'teadokanslider_button_name',
		'default' =>  esc_html__( 'Shop Now', 'teadokan'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Button Here', 'teadokan')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Button URL', 'teadokan'),
		'id'      =>  'teadokanslider_button_url',
		'default' =>  esc_html__( '#', 'teadokan'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Button URL Here', 'teadokan')
	) );


	// metabox support for services
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'teadokan_services_setting_area',
		'title'        => esc_html__( 'Services Setting', 'teadokan' ),
		'object_types' => array( 'teadokanservices'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Services thumbanil Icon', 'teadokan'),
		'id'      =>  'teadokanproject_services_icon',
		'type'    => 'file',
		'desc' 	  => esc_html__( 'Services thumbanil Icon', 'teadokan')
	) );

	// metabox support for project
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'teadokan_project_setting_area',
		'title'        => esc_html__( 'Project Setting', 'teadokan' ),
		'object_types' => array( 'teadokanprojects'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Project thumbanil Image', 'teadokan'),
		'id'      =>  'teadokanproject_project_thumbnail',
		'type'    => 'file',
		'desc' 	  => esc_html__( 'project thumbanil Image', 'teadokan')
	) );


	// metabox support for testimonial
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'teadokan_testimonial_setting_area',
		'title'        => esc_html__( 'Testing Setting', 'teadokan' ),
		'object_types' => array( 'teadokantestimonials'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Testimonial Designation', 'teadokan'),
		'id'      =>  'teadokan_testimonial_designation',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Testimonial Designation', 'teadokan')
	) );


	// metabox support for Team
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'teadokan_team_setting_area',
		'title'        => esc_html__( 'Team Setting', 'teadokan' ),
		'object_types' => array( 'teadokanteams'), // Post type
		'context'      => 'advanced',//  'normal', 'advanced', or 'side'
		'priority'     => 'low',//  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Designation', 'teadokan'),
		'id'      =>  'teadokan_team_designation',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Designation', 'teadokan'),
		'default' => esc_html__( 'Project Manager', 'teadokan'),
	) );

	// metabox support for page
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'teadokanpage_setting_area',
		'title'        => esc_html__( 'Header Setting', 'teadokan' ),
		'object_types' => array( 'page'), // Post type
		'context'      => 'normal',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb2_theme_feilds->add_field( array(
		'name'             =>  esc_html__( 'Select Header', 'teadokan' ),
		'id'               => 'teadokan_header_layout',
		'desc'             => esc_html__( 'Select any one of them.','teadokan' ),
		'type'             => 'select',
		'default'          => 'head_one',
		'options'          => array(
			'head_one' => __( 'Header Style One', 'teadokan' ),
			'head_two'   => __( 'Header Style Two', 'teadokan' ),
		)
	) );


}