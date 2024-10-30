<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "area_message",
		"title" => rl3("Message"),
		"icon" => "comment alternate outline",
		"desc" => rl3(""),
		"group" => "Areas",
		"ugroups" => ['areas'],
		"order" => 0,
		"areas" => ["body" => "blue",],
		"apps" => ["form", "connectivity","contact"],
	];