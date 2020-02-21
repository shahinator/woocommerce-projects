<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'about_image' => array(
        'label' => __('About Image', 'cleanhit'),
        'desc' => __('Upload an image', 'cleanhit'),
        'type' => 'upload'
    ),
    'about_title'   => array(
        'label'   => __('About title', 'cleanhit'),
        'desc'    => __('Please type About title', 'cleanhit'),
        'type'    => 'text'
    ),
    'about_content'   => array(
        'label'   => __('About Content', 'cleanhit'),
        'desc'    => __('please type About Content', 'cleanhit'),
        'type'    => 'wp-editor'
    ),
    'choose_title'   => array(
        'label'   => __('Why Choose title', 'cleanhit'),
        'desc'    => __('Please type why choose title', 'cleanhit'),
        'type'    => 'text'
    ),
    'choose_list' => array(
        'type' => 'addable-popup',
        'label' => __('Why Choose Us', 'cleanhit'),
        'desc' => __('Add Why Choose Us', 'cleanhit'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'image' => array(
                'label' => __('Iconic Image', 'cleanhit'),
                'desc' => __('Enter Iconic Image Format', 'cleanhit'),
                'type' => 'upload',                
            ),
            'name' => array(
                'label' => __('Enter Name', 'cleanhit'),
                'desc' => __('Enter Nme As a Text Format', 'cleanhit'),
                'type' => 'text',
                
            ),
            'choose_content'   => array(
                'label'   => __('Why Choose Content', 'cleanhit'),
                'desc'    => __('please type About Content', 'cleanhit'),
                'type'    => 'wp-editor'
            ),
        )
    )
);