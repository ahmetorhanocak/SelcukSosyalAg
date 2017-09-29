<?php
function duyurular_init() {
    global $CONFIG;
    elgg_register_page_handler('duyurular','duyurular_page_handler');
    $item = new ElggMenuItem('duyurular', elgg_echo('duyurular'), 'duyurular');
    elgg_register_menu_item('site', $item);
}


function duyurular_page_handler() {
	require_once dirname(__FILE__) . '/pages/duyurular.php';
	return true;
}

elgg_register_event_handler('init', 'system', 'duyurular_init');