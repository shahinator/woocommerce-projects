<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = esc_html__('Cleanhit', 'cleanhit');
$manifest['uri'] = 'http://themeforest.com/user/irstheme';
$manifest['description'] = CLEANHIT_THEME;
$manifest['version'] = CLEANHIT_VERSION;
$manifest['author'] = 'IrsThemne';
$manifest['author_uri'] = 'http://themeforest.com/user/irstheme';
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
