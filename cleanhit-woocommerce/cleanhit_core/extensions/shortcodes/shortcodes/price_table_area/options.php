<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array( 
    'price_plan' => array(
        'type' => 'addable-popup',
        'label' => __('Price Plan', 'cleanhit'),
        'desc' => __('Add Price Plan', 'cleanhit'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('title', 'cleanhit'),
                'desc' => __('Enter the title', 'cleanhit'),
                'type' => 'text',
            ),            
            'rate' => array(
                'label' => __('rate', 'cleanhit'),
                'desc' => __('Enter the rate', 'cleanhit'),
                'type' => 'text',
            ),            
            'price_list' => array(
                'type' => 'addable-popup',
                'label' => __('price list', 'cleanhit'),
                'desc' => __('Add price list', 'cleanhit'),
                'template' => '{{=name}}',
                'popup-options' => array(
                    'name' => array(
                        'label' => __('Enter Name', 'cleanhit'),
                        'desc' => __('Enter Nme As a Text Format', 'cleanhit'),
                        'type' => 'text',
                        
                    )
                )
            )

        )
    )
);
