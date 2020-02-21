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
                'featured_product_title'   => array(
                    'label'   => __('Featured title', 'teadokan'),
                    'desc'    => __('please type Featured title', 'teadokan'),
                    'type'    => 'text'
                ),               
                'featured_product_subtitle'   => array(
                    'label'   => __('Featured Sub Title', 'teadokan'),
                    'desc'    => __('please type Featured Sub title', 'teadokan'),
                    'type'    => 'text'
                ),
                'featured_product_content'   => array(
                    'label'   => __('Featured Content', 'teadokan'),
                    'desc'    => __('please type Featured Content', 'teadokan'),
                    'type'    => 'wp-editor'
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
            'title' => esc_html__('Query', 'teadokan'),
            'type' => 'tab',
            'options' => array(
                'posts_per_page ' => array(
                    'type' => 'text',
                    'label' => __('Posts Per Page', 'teadokan'),
                    'value' => '12'                    
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