<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_width",
		'title' => rl3("Field Width"),
		'icon' => 'columns',
		'desc' => rl3("The width of the field"),
		'group' => 'html',
		'category' => rl3("Settings"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"ugroups" => ['inputs','actions'],
		],
	];