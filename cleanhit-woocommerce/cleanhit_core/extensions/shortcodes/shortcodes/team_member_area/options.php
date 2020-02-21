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
                'team_subtitle'   => array(
                    'label'   => __('Team Sub Title', 'cleanhit'),
                    'desc'    => __('please type Team Sub title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'team_title'   => array(
                    'label'   => __('Team title', 'cleanhit'),
                    'desc'    => __('please type Team title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'team_content'   => array(
                    'label'   => __('Team Content', 'cleanhit'),
                    'desc'    => __('please type Team Content', 'cleanhit'),
                    'type'    => 'wp-editor'
                ),   
                'team_image' => array(
                    'label' => __('Team Image', 'cleanhit'),
                    'desc' => __('Upload an image', 'cleanhit'),
                    'type' => 'upload'
                ),                  
                'section_style' => array(
                    'label' => esc_html__('Section Title', 'cleanhit'),
                    'type' => 'radio',
                    'choices' => array(
                        'title_show' => esc_html__('Section Title Show', 'cleanhit'),
                        'title_hide' => esc_html__('Section Title Hide', 'cleanhit'),
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