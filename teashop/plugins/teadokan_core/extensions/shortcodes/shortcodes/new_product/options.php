<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'new_product_image' => array(
        'label' => __('Product Image', 'teadokan'),
        'desc' => __('Upload an Product image', 'teadokan'),
        'type' => 'upload'
    ),
    'new_product_title'   => array(
        'label'   => __('Product title', 'teadokan'),
        'desc'    => __('Please type Product title', 'teadokan'),
        'type'    => 'text'
    ),    
    'new_product_content'   => array(
        'label'   => __('New Product Content', 'teadokan'),
        'desc'    => __('please type New Product Content', 'teadokan'),
        'type'    => 'wp-editor'
    ),
    'features_list' => array(
        'type' => 'addable-popup',
        'label' => __('Features List', 'teadokan'),
        'desc' => __('Add Features List', 'teadokan'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'label' => __('Enter Name', 'teadokan'),
                'desc' => __('Enter Nme As a Text Format', 'teadokan'),
                'type' => 'text',
                
            )
        )
    ),
    'button_text' => array(
        'label' => __('Button Text', 'cleanhit'),
        'desc' => __('Enter a Button Text', 'cleanhit'),
        'type' => 'text',
        'default' =>__('Read The Article','teadokan'),
    ),
    'button_text_url' => array(
        'label' => __('Button Text URL', 'cleanhit'),
        'desc' => __('Enter a Button Text URL', 'cleanhit'),
        'type' => 'text',
        'default' =>__('#','teadokan'),
    ),
);