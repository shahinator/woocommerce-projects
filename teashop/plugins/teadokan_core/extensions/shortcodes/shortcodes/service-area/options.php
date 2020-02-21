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
                'services_title'   => array(
                    'label'   => __('Services title', 'teadokan'),
                    'desc'    => __('please type Services title', 'teadokan'),
                    'type'    => 'text'
                ),               
                'services_subtitle'   => array(
                    'label'   => __('Services Sub Title', 'teadokan'),
                    'desc'    => __('please type Services Sub title', 'teadokan'),
                    'type'    => 'text'
                ),
                'services_content'   => array(
                    'label'   => __('Services Content', 'teadokan'),
                    'desc'    => __('please type Services Content', 'teadokan'),
                    'type'    => 'wp-editor'
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
                    'value' => '4'                    
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