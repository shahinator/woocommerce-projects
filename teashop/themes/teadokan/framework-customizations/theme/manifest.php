<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = esc_html__('Teadokan', 'teadokan');
$manifest['uri'] = 'http://themeforest.com/user/radontheme';
$manifest['description'] = TEADOKAN_THEME;
$manifest['version'] = TEADOKAN_VERSION;
$manifest['author'] = 'IrsThemne';
$manifest['author_uri'] = 'http://themeforest.com/user/radontheme';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.5'
	),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
    'page-builder' => array(),   
    'backups' => array(),
    'analytics' => array(),
);
