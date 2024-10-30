<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "area_form",
		"title" => rl3("Form"),
		"icon" => "box",
		"desc" => rl3(""),
		"group" => "Areas",
		"ugroups" => ['areas'],
		"order" => 0,
		"areas" => ["body" => "blue"],
		"apps" => ["form", "connectivity","contact"],
	];