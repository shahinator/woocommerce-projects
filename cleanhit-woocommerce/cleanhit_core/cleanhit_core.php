<?php
/**
 * Plugin Name: Cleanhit Core
 * Plugin URI: http://irstheme.com/cleanhit
 * Description: cleanhit is a modern & stylish Tea Shop WordPress Theme that you definitely need for impressive online presentation of your colorful tea store, coffee shop, cafe, bar business services, restaurant, bakery, etc.
 * Version: 1.0.0
 * Author: irstheme
 * Author URI: http://irstheme.com/
 * Text Domain: siga
 * License: GPL/GNU.
 *Copyright 2017  Creative (email : irstheme@gmail.com)
*This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.This program is distributed in the hope that it will be useful,but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//define
define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());

include_once PLUGIN_DIR_PATH."inc/menu-item-custom-fields.php";
include_once PLUGIN_DIR_PATH."inc/cleanhit_custom_post.php";
include_once PLUGIN_DIR_PATH."inc/cleanhit_resizer.php";
include_once PLUGIN_DIR_PATH."inc/cleanhit-about-widget.php";
include_once PLUGIN_DIR_PATH."inc/cleanhit_recent_post_widget.php";

function cleanhit_theme_filter__extensions($extensions) {

    $extensions[dirname(__FILE__) . '/extensions'] =  plugin_dir_url( __FILE__ ) . 'extensions';  

    return $extensions;

}
add_filter('fw_extensions_locations', 'cleanhit_theme_filter__extensions');


