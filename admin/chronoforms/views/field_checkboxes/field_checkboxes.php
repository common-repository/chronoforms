<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "field_checkboxes",
		"title" => rl3("Checkboxes"),
		"icon" => "tasks",
		"desc" => rl3(""),
		"group" => "Fields",
		"ugroups" => ['inputs'],
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"config" => [
			"basics" => true,
			"options" => true,
		],
		"paid" => 1,
	];