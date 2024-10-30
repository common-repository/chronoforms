<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "area_modal",
		"title" => rl3("Modal"),
		"icon" => "clone",
		"desc" => rl3(""),
		"group" => "Areas",
		"ugroups" => ['areas'],
		"order" => 0,
		"areas" => ["body" => "blue",],
		"apps" => ["form", "connectivity","contact"],
	];