<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'get_in_touch_image' => array(
        'label' => __('About Video Image', 'teadokan'),
        'desc' => __('Upload an video image', 'teadokan'),
        'type' => 'upload'
    ),
    'get_in_touch_title'   => array(
        'label'   => __('Get In Touch title', 'teadokan'),
        'desc'    => __('Please type Get In Touch title', 'teadokan'),
        'type'    => 'text'
    ),
    'get_in_touch_subtitle'   => array(
        'label'   => __('Get In Touch Sub title', 'teadokan'),
        'desc'    => __('Please type Get In Touch Sub title', 'teadokan'),
        'type'    => 'text'
    ),
    'address_list' => array(
        'type' => 'addable-popup',
        'label' => __('Address List', 'teadokan'),
        'desc' => __('Add Address List', 'teadokan'),
        'template' => '{{=name}}',
        'popup-options' => array( 
            'icon'=> array(
                'type'  => 'icon-v2',
                'preview_size' => 'large',
                'modal_size' => 'large',
                'attr'  => array( 
                    'class' => 'custom-class', 
                    'data-foo' => 'bar' 
                ),
                'label' => __('label', 'teadokan'),
                'desc'  => __('description', 'teadokan'),
            ),
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