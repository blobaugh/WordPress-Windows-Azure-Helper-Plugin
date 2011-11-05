<?php
/*
Plugin Name: Windows Azure Helper
Plugin URI: https://github.com/blobaugh/WordPress-Windows-Azure-Helper-Plugin
Description: Plugin for WordPress that takes care of some nit-picky things surrounding running WordPress on Windows Azure
Version: 0.1
Author: Ben Lobaugh
Author URI: http://ben.lobaugh.net
*/

add_action('admin_menu', 'wazHelp_remove_menu_items');


/**
 * Removes menu items for items that should not be used when running WordPress
 * on Windows Azure
 * @global Array $submenu
 */
function wazHelp_remove_menu_items() {
  global $submenu;

    unset($submenu['index.php'][10]); // Removes 'Updates'
    unset($submenu['plugins.php'][10]); // Removes 'Add new plugin'
    unset($submenu['options-general.php'][40]); // Removes 'Permalinks'
}
