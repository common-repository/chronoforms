<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "field_button",
		"title" => rl3("Button"),
		"icon" => "play",
		"desc" => rl3(""),
		"group" => "Fields",
		"ugroups" => ['actions'],
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
	];