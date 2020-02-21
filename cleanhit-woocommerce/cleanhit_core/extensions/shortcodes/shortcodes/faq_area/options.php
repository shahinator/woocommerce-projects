<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array( 
    'faq_setting' => array(
        'type' => 'addable-popup',
        'label' => __('FAQ', 'cleanhit'),
        'desc' => __('Add FAQ', 'cleanhit'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('title', 'cleanhit'),
                'desc' => __('Enter the title', 'cleanhit'),
                'type' => 'text',
            ),             
            'faq_list' => array(
                'type' => 'addable-popup',
                'label' => __('faq list', 'cleanhit'),
                'desc' => __('Add faq list', 'cleanhit'),
                'template' => '{{=name}}',
                'popup-options' => array(
                    'name' => array(
                        'label' => __('Enter Name', 'cleanhit'),
                        'desc' => __('Enter Name As a Text Format', 'cleanhit'),
                        'type' => 'text',
                        
                    ),
                    'faq_content' => array(
                        'label' => __('Enter Content', 'cleanhit'),
                        'desc' => __('Enter Content As a Text Format', 'cleanhit'),
                        'type' => 'wp-editor',
                        
                    )
                )
            )

        )
    )
);
