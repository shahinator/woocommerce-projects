<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$map_shortcode = fw_ext('shortcodes')->get_shortcode('map');
$options = array(
	'data_provider' => array(
		'type'  => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'population_method' => array(
				'label'   => __('Population Method', 'cleanhit'),
				'desc'    => __( 'Select map population method (Ex: events, custom)', 'cleanhit' ),
				'type'    => 'select',
				'choices' => $map_shortcode->_get_picker_dropdown_choices(),
			)
		),
		'choices' => $map_shortcode->_get_picker_choices(),
		'show_borders' => false,
		'hide_picker' => true
	),
	'gmap-key' => array_merge(
		array(
			'label' => __( 'Google Maps API Key', 'cleanhit' ),
			'desc' => sprintf(
				__( 'Create an application in %sGoogle Console%s and add the Key here.', 'cleanhit' ),
				'<a href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">',
				'</a>'
			),
		),
		version_compare(fw()->manifest->get_version(), '2.5.7', '>=')
		? array(
			'type' => 'gmap-key',
		)
		: array(
			'type' => 'text',
			'fw-storage' => array(
				'type'      => 'wp-option',
				'wp_option' => 'fw-option-types:gmap-key',
			),
		)
	),

	'marker' => array(
		'type'  => 'upload',
		'label' => __('Marker', 'cleanhit'),
		'desc'  => __('Select Your Google Map Marker', 'cleanhit'),
	),

	'map_type' => array(
		'type'  => 'select',
		'label' => __('Map Type', 'cleanhit'),
		'desc'  => __('Select map type', 'cleanhit'),
		'choices' => array(
			'roadmap'   => __('Roadmap', 'cleanhit'),
			'terrain' => __('Terrain', 'cleanhit'),
			'satellite' => __('Satellite', 'cleanhit'),
			'hybrid'    => __('Hybrid', 'cleanhit')
		)
	),
	'map_height' => array(
		'label' => __('Map Height', 'cleanhit'),
		'desc'  => __('Set map height (Ex: 300)', 'cleanhit'),
		'type'  => 'text'
	),
	'disable_scrolling' => array(
		'type'  => 'switch',
		'value' => false,
		'label' => __('Disable zoom on scroll', 'cleanhit'),
		'desc'  => __('Prevent the map from zooming when scrolling until clicking on the map', 'cleanhit'),
		'left-choice' => array(
			'value' => false,
			'label' => __('Yes', 'cleanhit'),
		),
		'right-choice' => array(
			'value' => true,
			'label' => __('No', 'cleanhit'),
		),
	),
);