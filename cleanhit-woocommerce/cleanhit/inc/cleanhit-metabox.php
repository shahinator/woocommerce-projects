<?php
add_action( 'cmb2_admin_init', 'cleanhit_metabox' );
function cleanhit_metabox() {
	 
    // metabox support for service
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'cleanhit_slider_setting_area',
		'title'        => esc_html__( 'Slider Setting', 'cleanhit' ),
		'object_types' => array( 'cleanhitslider'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Sub Title Name', 'cleanhit'),
		'id'      =>  'cleanhitslider_slider_subtitle',
		'default' =>  esc_html__( 'BEST CLEANING COMPANY', 'cleanhit'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Sub Title Here', 'cleanhit')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Left Button Name', 'cleanhit'),
		'id'      =>  'cleanhitslider_left_button_name',
		'default' =>  esc_html__( 'Our Services', 'cleanhit'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Left Button Here', 'cleanhit')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Left Button URL', 'cleanhit'),
		'id'      =>  'cleanhitslider_left_button_url',
		'default' =>  esc_html__( '#', 'cleanhit'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Left Button URL Here', 'cleanhit')
	) );

	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Right Button Name', 'cleanhit'),
		'id'      =>  'cleanhitslider_right_button_name',
		'default' =>  esc_html__( 'Contact', 'cleanhit'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Right Button Here', 'cleanhit')
	) );
	$cmb2_theme_feilds->add_field( array(
	    'name'    => esc_html__( 'Slider Right Button URL', 'cleanhit'),
		'id'      =>  'cleanhitslider_right_button_url',
		'default' =>  esc_html__( '#', 'cleanhit'),
	    'type'    => 'text',
		'desc' 	  => esc_html__( 'Slider Right Button URL Here', 'cleanhit')
	) );


	// metabox support for services
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'cleanhit_services_setting_area',
		'title'        => esc_html__( 'Services Setting', 'cleanhit' ),
		'object_types' => array( 'cleanhitservices'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Services thumbanil Icon', 'cleanhit'),
		'id'      =>  'cleanhitproject_services_icon',
		'type'    => 'file',
		'desc' 	  => esc_html__( 'Services thumbanil Icon', 'cleanhit')
	) );

	// metabox support for project
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'cleanhit_project_setting_area',
		'title'        => esc_html__( 'Project Setting', 'cleanhit' ),
		'object_types' => array( 'cleanhitprojects'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Project thumbanil Image', 'cleanhit'),
		'id'      =>  'cleanhitproject_project_thumbnail',
		'type'    => 'file',
		'desc' 	  => esc_html__( 'project thumbanil Image', 'cleanhit')
	) );


	// metabox support for testimonial
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'cleanhit_testimonial_setting_area',
		'title'        => esc_html__( 'Testing Setting', 'cleanhit' ),
		'object_types' => array( 'cleanhittestimonials'), // Post type
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Testimonial Designation', 'cleanhit'),
		'id'      =>  'cleanhit_testimonial_designation',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Testimonial Designation', 'cleanhit')
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Testimonial Quote Icon', 'cleanhit'),
		'id'      =>  'cleanhit_testimonial_quote_icon',
		'type'    => 'file',
		'desc' 	  => esc_html__( 'Testimonial Quote Icon', 'cleanhit'),
	) );


	// metabox support for Team
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'cleanhit_team_setting_area',
		'title'        => esc_html__( 'Team Setting', 'cleanhit' ),
		'object_types' => array( 'cleanhitteams'), // Post type
		'context'      => 'advanced',//  'normal', 'advanced', or 'side'
		'priority'     => 'low',//  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Designation', 'cleanhit'),
		'id'      =>  'cleanhit_team_designation',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Designation', 'cleanhit'),
		'default' => esc_html__( 'Co-Founder', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Mail', 'cleanhit'),
		'id'      =>  'cleanhit_team_mail',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Mail', 'cleanhit'),
		'default' => esc_html__( 'yourmail@gmail.com', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Phone Number', 'cleanhit'),
		'id'      =>  'cleanhit_team_phone',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Phone', 'cleanhit'),
		'default' => esc_html__( '+8801737488440', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Website', 'cleanhit'),
		'id'      =>  'cleanhit_team_website',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Website', 'cleanhit'),
		'default' => esc_html__( 'www.irstheme.com', 'cleanhit'),
	) );

	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Facebook', 'cleanhit'),
		'id'      =>  'cleanhit_team_facebook',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Facebook', 'cleanhit'),
		'default' => esc_html__( '#', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Twitter', 'cleanhit'),
		'id'      =>  'cleanhit_team_twitter',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Twitter', 'cleanhit'),
		'default' => esc_html__( '#', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Linkedin', 'cleanhit'),
		'id'      =>  'cleanhit_team_linkedin',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Linkedin', 'cleanhit'),
		'default' => esc_html__( '#', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Google-plus', 'cleanhit'),
		'id'      =>  'cleanhit_team_Google_plus',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Google-plus', 'cleanhit'),
		'default' => esc_html__( '#', 'cleanhit'),
	) );
	$cmb2_theme_feilds->add_field( array(
		'name'    => esc_html__( 'Drible', 'cleanhit'),
		'id'      =>  'cleanhit_team_drible',
		'type'    => 'text',
		'desc' 	  => esc_html__( 'Drible', 'cleanhit'),
		'default' => esc_html__( '#', 'cleanhit'),
	) );

	// metabox support for page
	$cmb2_theme_feilds = new_cmb2_box( array(
		'id'           => 'cleanhitpage_setting_area',
		'title'        => esc_html__( 'Header Setting', 'cleanhit' ),
		'object_types' => array( 'page'), // Post type
		'context'      => 'normal',
		'priority'     => 'low',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb2_theme_feilds->add_field( array(
	    'name'             =>  esc_html__( 'Select Header', 'cleanhit' ),
	    'id'               => 'cleanhit_header_layout',
	    'desc'             => esc_html__( 'Select any one of them.','cleanhit' ),
	    'type'             => 'select',
	    'default'          => 'head_one',
	    'options'          => array(
	        'head_one' => __( 'Header Style One', 'cleanhit' ),
	        'head_two'   => __( 'Header Style Two', 'cleanhit' ),
	    )
	) );


}