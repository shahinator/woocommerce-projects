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
                'services_subtitle'   => array(
                    'label'   => __('Services Sub Title', 'cleanhit'),
                    'desc'    => __('please type Services Sub title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'services_title'   => array(
                    'label'   => __('Services title', 'cleanhit'),
                    'desc'    => __('please type Services title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'services_content'   => array(
                    'label'   => __('Services Content', 'cleanhit'),
                    'desc'    => __('please type Services Content', 'cleanhit'),
                    'type'    => 'wp-editor'
                ),   
                'services_image' => array(
                    'label' => __('Services Image', 'cleanhit'),
                    'desc' => __('Upload an image', 'cleanhit'),
                    'type' => 'upload'
                ),                
                'section_style' => array(
                    'label' => esc_html__('Section Title', 'frokost'),
                    'type' => 'radio',
                    'choices' => array(
                        'title_show' => esc_html__('Section Title Show', 'frokost'),
                        'title_hide' => esc_html__('Section Title Hide', 'frokost'),
                    ),
                    'value' => 'title_show',
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