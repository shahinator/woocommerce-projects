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
                'team_title'   => array(
                    'label'   => __('Team title', 'teadokan'),
                    'desc'    => __('please type Team title', 'teadokan'),
                    'type'    => 'text'
                ),               
                'team_subtitle'   => array(
                    'label'   => __('Team Sub Title', 'teadokan'),
                    'desc'    => __('please type Team Sub title', 'teadokan'),
                    'type'    => 'text'
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
                'team_style' => array(
                    'label' => esc_html__('Team Style', 'teadokan'),
                    'type' => 'radio',
                    'choices' => array(
                        'team_one' => esc_html__('Team Style One', 'teadokan'),
                        'team_two' => esc_html__('Team Style Two', 'teadokan'),
                    ),
                    'value' => 'team_one',
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