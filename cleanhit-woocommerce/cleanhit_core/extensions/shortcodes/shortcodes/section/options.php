<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_fullwidth' => array(
        'label' => __('Full Width', 'cleanhit'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'cleanhit'),
        'desc' => __('Top and bottom spacing of this section', 'cleanhit'),
        'value' => 'wrapper',
        'choices' => array(
            'wrapper' => __('Default Spacing', 'cleanhit'),
            'no-wrapper' => __('No Spacing', 'cleanhit'),
            'wrapper-top' => __('Spacing Top', 'cleanhit'),
            'wrapper-bottom' => __('Spacing Bottom', 'cleanhit'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'cleanhit'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", 'cleanhit'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'cleanhit'),
            'fw-section-height-sm' => __('small', 'cleanhit'),
            'fw-section-height-md' => __('medium', 'cleanhit'),
            'fw-section-height-lg' => __('large', 'cleanhit'),
        ),
        'custom' => 'custom_width',
        'help'    => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'cleanhit'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'cleanhit'),
                'desc' => __('Select the background for your section', 'cleanhit'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'cleanhit'),
                    'color' => __('Color', 'cleanhit'),
                    'image' => __('Image', 'cleanhit'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'cleanhit'),
                    'desc' => __('Select the background color', 'cleanhit'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'cleanhit'),
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
                            'label' => __('Overlay Color', 'cleanhit'),
                            'desc' => __('Enable image overlay color?', 'cleanhit'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'cleanhit'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'cleanhit'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'cleanhit'),
                                'desc' => __('Select the overlay color', 'cleanhit'),
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
        'label' => __('Custom Class', 'cleanhit'),
        'desc' => __('Enter custom CSS class', 'cleanhit'),
        'type' => 'text',
        'value' => '',
    ),
);
