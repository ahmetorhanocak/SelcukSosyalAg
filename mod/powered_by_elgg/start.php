<?php
/**
 * Edit Powered by Elgg
 * @package powered_by_elgg
 * @license GNU Public License version 2
 * @author RiverVanRain
 * @copyright wZm 2k17
 * @link https://wzm.me
 * @version 1.0
 */
require_once __DIR__ . '/autoloader.php';

elgg_register_event_handler('init','system','powered_by_elgg_init');

function powered_by_elgg_init() {
	elgg_register_menu_item('footer', ElggMenuItem::factory(array(
		'name' => 'powered',
		'text' => elgg_get_plugin_setting('footer_name', 'powered_by_elgg'),
		'href' => elgg_get_plugin_setting('footer_link', 'powered_by_elgg'),
		'section' => 'meta',
		'priority' => 1,
	)));
}