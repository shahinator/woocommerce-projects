<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    array(
        'attributes' => array(
            'title' => esc_html__('General', 'cleanhit'),
            'type' => 'tab',
            'options' => array(                
                'partner_logo_subtitle'   => array(
                    'label'   => __('Partner Logo Sub Title', 'cleanhit'),
                    'desc'    => __('please type Partner Logo Sub title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'partner_logo_title'   => array(
                    'label'   => __('Partner Logo title', 'cleanhit'),
                    'desc'    => __('please type Partner Logo title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'partner_logo_content'   => array(
                    'label'   => __('Partner Logo Content', 'cleanhit'),
                    'desc'    => __('please type Partner Logo Content', 'cleanhit'),
                    'type'    => 'wp-editor'
                ),   
                'partner_logo_image' => array(
                    'label' => __('Partner Logo Image', 'cleanhit'),
                    'desc' => __('Upload an image', 'cleanhit'),
                    'type' => 'upload'
                ),           
            )
        ),
        'query' => array(
            'title' => esc_html__('Query', 'cleanhit'),
            'type' => 'tab',
            'options' => array(
                'posts_per_page ' => array(
                    'type' => 'text',
                    'label' => __('Posts Per Page', 'cleanhit'),
                    'value' => '6'                    
                ),
                'order' => array(
                    'type' => 'select',
                    'label' => __('Post Order', 'cleanhit'),
                    'choices' => array(
                        'ASC' => 'Ascending ',
                        'DESC' => 'Descending '                        
                    )                    
                ),            
                                
            )
        )
    ),
);