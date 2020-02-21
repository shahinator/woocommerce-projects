<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(     
    'contact_info' => array(
        'type' => 'addable-popup',
        'label' => __('Contact Info', 'cleanhit'),
        'desc' => __('Add Contact Info', 'cleanhit'),
        'template' => '{{=contact_title}}',
        'popup-options' => array(
            'contact_image'   => array(
                'label'   => __('Contact Icon Image', 'cleanhit'),
                'desc'    => __('please type Contact Icon Image', 'cleanhit'),
                'type'    => 'upload'
            ),
            'contact_title'   => array(
                'label'   => __('Contact title', 'cleanhit'),
                'desc'    => __('please type Contact title', 'cleanhit'),
                'type'    => 'text'
            ),
            'contact_content'   => array(
                'label'   => __('Contact Content', 'cleanhit'),
                'desc'    => __('please type Contact Content', 'cleanhit'),
                'type'    => 'wp-editor'
            ),
        )
    ),  
);