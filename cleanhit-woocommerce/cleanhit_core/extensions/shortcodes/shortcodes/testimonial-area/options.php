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
                'testimonial_subtitle'   => array(
                    'label'   => __('Testimonial Sub Title', 'cleanhit'),
                    'desc'    => __('please type Testimonial Sub title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'testimonial_title'   => array(
                    'label'   => __('Testimonial title', 'cleanhit'),
                    'desc'    => __('please type Testimonial title', 'cleanhit'),
                    'type'    => 'text'
                ),
                'testimonial_content'   => array(
                    'label'   => __('Testimonial Content', 'cleanhit'),
                    'desc'    => __('please type Testimonial Content', 'cleanhit'),
                    'type'    => 'wp-editor'
                ),   
                'testimonial_title_image' => array(
                    'label' => __('Testimonial Title Image', 'cleanhit'),
                    'desc' => __('Upload an Title image', 'cleanhit'),
                    'type' => 'upload'
                ),           
                'testimonial_image' => array(
                    'label' => __('Testimonial BG Image', 'cleanhit'),
                    'desc' => __('Upload an BG image', 'cleanhit'),
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