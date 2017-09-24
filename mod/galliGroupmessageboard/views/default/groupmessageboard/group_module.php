<?php
/**
 * Group messageboard module
 */

$group = elgg_get_page_owner_entity();

if ($group->messageboard_enable == "no") {
	return true;
}

$all_link = elgg_view('output/url', array(
	'href' => "messageboard/group/$group->guid/all",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

elgg_push_context('widgets');
if (elgg_is_logged_in()) {
	$content = elgg_view_form('messageboard/add', array('name' => 'elgg-messageboard'));
}
$options = array(
		'annotations_name' => 'messageboard',
		'guid' => $group->getGUID(),
		'pagination' => false,
		'reverse_order_by' => true,
		'limit' => 6
);
$content .= elgg_list_annotations($options);
elgg_pop_context();

if (!$content) {
	$content = '<p>' . elgg_echo('messageboard:none') . '</p>';
}

echo elgg_view('groups/profile/module', array(
	'title' => elgg_echo('messageboard:board'),
	'content' => $content,
	'all_link' => $all_link,
	'add_link' => "",
));
