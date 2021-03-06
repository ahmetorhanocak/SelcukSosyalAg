<?php
/**
 * List the latest reports
 */

$list = elgg_list_entities_from_metadata([
	'type' => 'object',
	'subtype' => 'reported_content',
	'limit' => $vars['entity']->num_display,
	'pagination' => false,
	'order_by_metadata' => [
		'name' => 'state',
		'direction' => 'ASC',
		'as' => 'text',
	],
]);
if (!$list) {
	$list = '<p class="mtm">' . elgg_echo('reportedcontent:none') . '</p>';
}

echo $list;

// elgg_require_js() fails when widget is newly added
?><script>require(['elgg/reportedcontent']);</script>
