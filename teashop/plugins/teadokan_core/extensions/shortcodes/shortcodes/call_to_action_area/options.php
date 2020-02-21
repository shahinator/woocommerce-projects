<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'call_to_action_image' => array(
        'label' => __('Call to Action Image', 'teadokan'),
        'desc' => __('Upload an video image', 'teadokan'),
        'type' => 'upload'
    ),
    'call_to_action_title'   => array(
        'label'   => __('Call to Action title', 'teadokan'),
        'desc'    => __('Please type About title', 'teadokan'),
        'type'    => 'text'
    ),
    'call_to_action_subtitle'   => array(
        'label'   => __('Call to Action', 'teadokan'),
        'desc'    => __('please type Call to Action', 'teadokan'),
        'type'    => 'text'
    ),
);