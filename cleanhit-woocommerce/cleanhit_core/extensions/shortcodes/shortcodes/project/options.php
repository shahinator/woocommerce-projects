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
                'project_subtitle'   => array(
                    'label'   => __('Projects Sub Title', 'cleanhit'),
                    'desc'    => __('please type Projects Sub title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'project_title'   => array(
                    'label'   => __('Projects title', 'cleanhit'),
                    'desc'    => __('please type Projects title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'project_content'   => array(
                    'label'   => __('Projects Content', 'cleanhit'),
                    'desc'    => __('please type Projects Content', 'cleanhit'),
                    'type'    => 'wp-editor'
                ),   
                'project_image' => array(
                    'label' => __('Projects Image', 'cleanhit'),
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
                    'value' => '8'                    
                ),
                'order' => array(
                    'type' => 'select',
                    'label' => __('Post Order', 'cleanhit'),
                    'choices' => array(
                        'ASC' => 'Ascending ',
                        'DESC' => 'Descending '                        
                    )                    
                ), 
                'container_style' => array(
                    'label' => esc_html__('Container Style', 'cleanhit'),
                    'type' => 'radio',
                    'choices' => array(
                        'container' => esc_html__('Container Default', 'cleanhit'),
                        'container_fuild' => esc_html__('Container Full Width', 'cleanhit'),
                    ),
                    'value' => 'container',
                ),

                'per_row_setting' => array(
                    'label' => esc_html__('Project Per Row Seeting', 'cleanhit'),
                    'type' => 'radio',
                    'choices' => array(
                        'per_row_4' => esc_html__('Per Row Four Items', 'cleanhit'),
                        'per_row_3' => esc_html__('Per Row Three Items', 'cleanhit'),
                    ),
                    'value' => 'per_row_3',
                ),

                'gutter_setting' => array(
                    'label' => esc_html__('Project Items Seeting', 'cleanhit'),
                    'type' => 'radio',
                    'choices' => array(
                        'guttter' => esc_html__('Default Items Gutter', 'cleanhit'),
                        'no_gutter' => esc_html__('Default Items No Gutter', 'cleanhit'),
                    ),
                    'value' => 'guttter',
                ),

                                
            )
        )
    ),
);