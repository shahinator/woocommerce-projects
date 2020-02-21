<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_fullwidth' => array(
        'label' => __('Full Width', 'teadokan'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'teadokan'),
        'desc' => __('Top and bottom spacing of this section', 'teadokan'),
        'value' => 'wrapper',
        'choices' => array(
            'wrapper' => __('Default Spacing', 'teadokan'),
            'no-wrapper' => __('No Spacing', 'teadokan'),
            'wrapper-top' => __('Spacing Top', 'teadokan'),
            'wrapper-bottom' => __('Spacing Bottom', 'teadokan'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'teadokan'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", 'teadokan'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'teadokan'),
            'fw-section-height-sm' => __('small', 'teadokan'),
            'fw-section-height-md' => __('medium', 'teadokan'),
            'fw-section-height-lg' => __('large', 'teadokan'),
        ),
        'custom' => 'custom_width',
        'help'    => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'teadokan'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'teadokan'),
                'desc' => __('Select the background for your section', 'teadokan'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'teadokan'),
                    'color' => __('Color', 'teadokan'),
                    'image' => __('Image', 'teadokan'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'teadokan'),
                    'desc' => __('Select the background color', 'teadokan'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'teadokan'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'teadokan'),
                            'desc' => __('Enable image overlay color?', 'teadokan'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'teadokan'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'teadokan'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'teadokan'),
                                'desc' => __('Select the overlay color', 'teadokan'),
                                'value' => '#000',
                                'type' => 'color-picker'
                            ),
                        ),
                    ),
                ),
            ),

        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'teadokan'),
        'desc' => __('Enter custom CSS class', 'teadokan'),
        'type' => 'text',
        'value' => '',
    ),
);
