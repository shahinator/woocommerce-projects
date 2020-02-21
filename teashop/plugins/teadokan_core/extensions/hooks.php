<?php if (!defined('FW')) { die('Forbidden'); }

/** @internal */
function teadokan_filter_disable_shortcodes($to_disable)
{
	$to_disable[] = 'calendar';
	$to_disable[] = 'team_member';
	$to_disable[] = 'tabs';
	return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', 'teadokan_filter_disable_shortcodes');



function teadokan_admin_menu($wp_admin_bar) {
	if (defined('FW')) {
		global $wp_admin_bar;
		$wp_admin_bar->add_menu(array('id' => 'teadokan_ext', 'title' => 'Extensions', 'href' => admin_url('admin.php?page=fw-extensions')));
	}
}

add_action('admin_bar_menu', 'teadokan_admin_menu',2000);