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
                'testimonial_title'   => array(
                    'label'   => __('Testimonial title', 'teadokan'),
                    'desc'    => __('please type Testimonial title', 'teadokan'),
                    'type'    => 'text'
                ),                 
                'testimonial_subtitle'   => array(
                    'label'   => __('Testimonial Sub Title', 'teadokan'),
                    'desc'    => __('please type Testimonial Sub title', 'teadokan'),
                    'type'    => 'text'
                ),         
                'testimonial_image' => array(
                    'label' => __('Testimonial BG Image', 'teadokan'),
                    'desc' => __('Upload an BG image', 'teadokan'),
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
                    'value' => '6'                    
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