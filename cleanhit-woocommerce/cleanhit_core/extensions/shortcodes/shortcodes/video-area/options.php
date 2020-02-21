<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'video_image' => array(
        'label' => __('Video Image', 'cleanhit'),
        'desc' => __('Upload an image', 'cleanhit'),
        'type' => 'upload'
    ),
    'video_title'   => array(
        'label'   => __('Video Title', 'cleanhit'),
        'desc'    => __('Please type Video title', 'cleanhit'),
        'type'    => 'text'
    ),
    'video_subtitle'   => array(
        'label'   => __('Video Sub title', 'cleanhit'),
        'desc'    => __('Please type Video sub title', 'cleanhit'),
        'type'    => 'text'
    ),
    'button_url' => array(
        'label' => __('Button Text URL', 'cleanhit'),
        'desc' => __('Enter a Button Text URL', 'cleanhit'),
        'type' => 'text'
    ),
);