<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_events",
		'title' => rl3("Field Events Processing"),
		'desc' => rl3("Process Field events and update disabled status"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'icon' => 'question',
		'default' => true,
		'system' => ['views'],
		'hidden' => true,
		'triggers' => ['new_event_start'],
		'order' => -5,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];