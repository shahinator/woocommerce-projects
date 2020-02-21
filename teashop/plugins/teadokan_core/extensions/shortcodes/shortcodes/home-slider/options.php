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
                'facebook'   => array(
                    'label'   => __('Facebook URL', 'teadokan'),
                    'desc'    => __('please set here Facebook URL', 'teadokan'),
                    'type'    => 'text'
                ),           
                'twitter'   => array(
                    'label'   => __('Twitter URL', 'teadokan'),
                    'desc'    => __('please set here Twitter URL', 'teadokan'),
                    'type'    => 'text'
                ),           
                'linkedin'   => array(
                    'label'   => __('Linkedin URL', 'teadokan'),
                    'desc'    => __('please set here Linkedin URL', 'teadokan'),
                    'type'    => 'text'
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