<?php

$content = elgg_view('duyurular');	
$title = elgg_echo("duyurular");
	
$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'filter' => '',
	'sidebar' => elgg_view('duyurular/sidebar'),
));

echo elgg_view_page($title, $body);
?>