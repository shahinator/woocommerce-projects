<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    array(
        'attributes' => array(
            'title' => esc_html__('General', 'teadokan'),
            'type' => 'tab',
            'options' => array(                
                'blog_subtitle'   => array(
                    'label'   => __('Blog Sub Title', 'teadokan'),
                    'desc'    => __('please type Blog Sub title', 'teadokan'),
                    'type'    => 'text'
                ),
                'blog_title'   => array(
                    'label'   => __('Blog title', 'teadokan'),
                    'desc'    => __('please type Blog title', 'teadokan'),
                    'type'    => 'text'
                ),
                'blog_content'   => array(
                    'label'   => __('Blog Content', 'teadokan'),
                    'desc'    => __('please type Blog Content', 'teadokan'),
                    'type'    => 'wp-editor'
                ),   
                'blog_title_image' => array(
                    'label' => __('Blog Title Image', 'teadokan'),
                    'desc' => __('Upload an Title image', 'teadokan'),
                    'type' => 'upload'
                ),                
                'section_style' => array(
                    'label' => esc_html__('Section Title', 'teadokan'),
                    'type' => 'radio',
                    'choices' => array(
                        'title_show' => esc_html__('Section Title Show', 'teadokan'),
                        'title_hide' => esc_html__('Section Title Hide', 'teadokan'),
                    ),
                    'value' => 'title_show',
                ),           
            )
        ),
        'query' => array(
            'title' => esc_html__('Query', 'teadokan'),
            'type' => 'tab',
            'options' => array(
                'posts_per_page ' => array(
                    'type' => 'text',
                    'label' => __('Posts Per Page', 'teadokan'),
                    'value' => '2'                    
                ),
                'order' => array(
                    'type' => 'select',
                    'label' => __('Post Order', 'teadokan'),
                    'choices' => array(
                        'ASC' => 'Ascending ',
                        'DESC' => 'Descending '                        
                    )                    
                ),            
                                
            )
        )
    ),
);