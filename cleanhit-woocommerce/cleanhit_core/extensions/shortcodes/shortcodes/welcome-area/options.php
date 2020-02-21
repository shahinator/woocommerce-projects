<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'welcome_image' => array(
        'label' => __('Welcome Image', 'cleanhit'),
        'desc' => __('Upload an image', 'cleanhit'),
        'type' => 'upload'
    ),
    'welcome_subtitle'   => array(
        'label'   => __('Welcome Sub Title', 'cleanhit'),
        'desc'    => __('Please type Welcome Sub title', 'cleanhit'),
        'type'    => 'text'
    ),
    'welcome_title'   => array(
        'label'   => __('Welcome title', 'cleanhit'),
        'desc'    => __('Please type Welcome title', 'cleanhit'),
        'type'    => 'text'
    ),
    'welcome_content'   => array(
        'label'   => __('Welcome Content', 'cleanhit'),
        'desc'    => __('please type welcome Content', 'cleanhit'),
        'type'    => 'wp-editor'
	),
    'button' => array(
        'label' => __('Button Text', 'cleanhit'),
        'desc' => __('Enter a Button Text', 'cleanhit'),
        'type' => 'text'
    ),
    'button_url' => array(
        'label' => __('Button Text URL', 'cleanhit'),
        'desc' => __('Enter a Button Text URL', 'cleanhit'),
        'type' => 'text'
    ),
);