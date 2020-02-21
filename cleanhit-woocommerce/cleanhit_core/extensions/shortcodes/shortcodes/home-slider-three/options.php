<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array( 
    'banner_image' => array(
        'label' => __('Banner Image', 'cleanhit'),
        'desc' => __('Upload an image', 'cleanhit'),
        'type' => 'upload'
    ),
    'title' => array(
        'label' => __('title', 'cleanhit'),
        'desc' => __('Enter the title', 'cleanhit'),
        'type' => 'text',
    ),            
    'banner_content' => array(
        'label' => __('Banner Text', 'cleanhit'),
        'desc' => __('Enter the Banner Text', 'cleanhit'),
        'type' => 'wp-editor',
    ), 
    
    'banner_button_text' => array(
        'label' => __('Banner Button Text', 'cleanhit'),
        'desc' => __('Enter the Banner Button Text', 'cleanhit'),
        'default' => __('Our Services', 'cleanhit'),
        'type' => 'text',
    ), 
    'banner_button_url' => array(
        'label' => __('Banner Button Text url', 'cleanhit'),
        'desc' => __('Enter the Banner Button Text', 'cleanhit'),
        'desc' => __('#', 'cleanhit'),
        'type' => 'text',
    ), 

    'banner_button_text2' => array(
        'label' => __('Banner Button Two Text', 'cleanhit'),
        'desc' => __('Enter the Banner Button Two Text', 'cleanhit'),
        'default' => __('Contact Us', 'cleanhit'),
        'type' => 'text',
    ), 
    'banner_button_url2' => array(
        'label' => __('Banner Button Two Text url', 'cleanhit'),
        'desc' => __('Enter the Banner Button Two Text', 'cleanhit'),
        'desc' => __('#', 'cleanhit'),
        'type' => 'text',
    ), 
    'rotated_text_list' => array(
        'type' => 'addable-popup',
        'label' => __('Animated Text List', 'cleanhit'),
        'desc' => __('Add Animated Text List', 'cleanhit'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'label' => __('Enter Name', 'cleanhit'),
                'desc' => __('Enter Nme As a Text Format', 'cleanhit'),
                'type' => 'text',                
            )
        )
    ),
);
