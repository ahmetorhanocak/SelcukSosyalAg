<?php

$entity = elgg_extract('entity', $vars);

echo elgg_view_field([
	'#type' => 'fieldset',
	'legend' => elgg_echo('settings:footer:config'),
	'fields' => [
		[
			'#type' => 'text',
			'#label' => elgg_echo('settings:footer:name'),
			'name' => 'params[footer_name]',
			'value' => $entity->footer_name,
		],
		[
			'#type' => 'url',
			'#label' => elgg_echo('settings:footer:link'),
			'name' => 'params[footer_link]',
			'value' => $entity->footer_link,
		],
	],
]);