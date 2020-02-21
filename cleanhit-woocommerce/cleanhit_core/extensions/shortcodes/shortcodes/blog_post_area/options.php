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
                'blog_subtitle'   => array(
                    'label'   => __('Blog Sub Title', 'cleanhit'),
                    'desc'    => __('please type Blog Sub title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'blog_title'   => array(
                    'label'   => __('Blog title', 'cleanhit'),
                    'desc'    => __('please type Blog title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'blog_content'   => array(
                    'label'   => __('Blog Content', 'cleanhit'),
                    'desc'    => __('please type Blog Content', 'cleanhit'),
                    'type'    => 'wp-editor'
                ),   
                'blog_title_image' => array(
                    'label' => __('Blog Title Image', 'cleanhit'),
                    'desc' => __('Upload an Title image', 'cleanhit'),
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
                    'value' => '3'                    
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