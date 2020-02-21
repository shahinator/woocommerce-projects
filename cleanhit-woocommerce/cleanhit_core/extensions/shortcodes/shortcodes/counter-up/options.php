<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'counter_bg_image' => array(
        'label' => __('Counter BG Image', 'cleanhit'),
        'desc' => __('Upload an image', 'cleanhit'),
        'type' => 'upload'
    ),
    'counter_items' => array(
        'label' => __('Counter Items', 'cleanhit'),
        'popup-title' => __('Add/Edit counter Items', 'cleanhit'),
        'desc' => __('Here you can add, remove and edit your counter Items.', 'cleanhit'),
        'type' => 'addable-popup',
        'template' => '{{=counterup_title}}',
        'popup-options' => array(   
            'counterup_title'   => array(
                'label'   => __('conunter up title', 'cleanhit'),
                'desc'    => __('please type conunter up title', 'cleanhit'),
                'type'    => 'text'
            ),
            'counterup_number'   => array(
                'label'   => __('conunter up Number', 'cleanhit'),
                'desc'    => __('please type conunter up title', 'cleanhit'),
                'type'    => 'text'
            ), 
            'icon'=> array(
                'type'  => 'icon-v2',
                'preview_size' => 'large',
                'modal_size' => 'large',
                'attr'  => array( 
                    'class' => 'custom-class', 
                    'data-foo' => 'bar' 
                ),
                'label' => __('label', 'cleanhit'),
                'desc'  => __('description', 'cleanhit'),
            ),
        )
    ),

);