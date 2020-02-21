<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'about_image' => array(
        'label' => __('About Video Image', 'teadokan'),
        'desc' => __('Upload an video image', 'teadokan'),
        'type' => 'upload'
    ),
    'about_video_url' => array(
        'label' => __('About Video URL', 'teadokan'),
        'desc' => __('Upload an Video URL', 'teadokan'),
        'type' => 'text'
    ),
    'about_title'   => array(
        'label'   => __('About title', 'teadokan'),
        'desc'    => __('Please type About title', 'teadokan'),
        'type'    => 'text'
    ),
    'about_content'   => array(
        'label'   => __('About Content', 'teadokan'),
        'desc'    => __('please type About Content', 'teadokan'),
        'type'    => 'wp-editor'
    ),
    'features_list' => array(
        'type' => 'addable-popup',
        'label' => __('Why Features Us', 'teadokan'),
        'desc' => __('Add Why Features Us', 'teadokan'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'label' => __('Enter Name', 'teadokan'),
                'desc' => __('Enter Nme As a Text Format', 'teadokan'),
                'type' => 'text',
                
            ),
            'features_content'   => array(
                'label'   => __('Features Content', 'teadokan'),
                'desc'    => __('please type About Content', 'teadokan'),
                'type'    => 'wp-editor'
            ),
        )
    )
);