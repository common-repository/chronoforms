<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_disabled",
		'title' => rl3("Disabled"),
		'desc' => rl3("Load this field in disabled state"),
		'group' => 'html',
		'category' => rl3("Advanced"),
		'icon' => 'lock',
		'triggers' => ['initialize_event'],
		'order' => 0,
		"accept" => [
			"ugroups" => ['inputs'],
		],
		"not_accept" => [
			"ugroups" => ['hidden'],
		],
	];