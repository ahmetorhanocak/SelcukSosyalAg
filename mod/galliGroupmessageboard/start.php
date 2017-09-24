<?php

elgg_register_event_handler('init', 'system', 'galliGroupmessageboard_init');

function galliGroupmessageboard_init() {
	add_group_tool_option('messageboard', elgg_echo('ggmb:enablemessageboard'), true);
	elgg_extend_view('groups/tool_latest', 'groupmessageboard/group_module');
}
