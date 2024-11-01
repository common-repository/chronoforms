<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validate",
		'title' => rl3("Validate"),
		'desc' => rl3("Validate Field Data"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'icon' => 'question',
		'default' => true,
		'triggers' => ['new_event_start'],
		'order' => -5,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];