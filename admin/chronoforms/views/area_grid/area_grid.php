<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "area_grid",
		"title" => rl3("Grid"),
		"icon" => "columns",
		"desc" => rl3(""),
		"group" => "Areas",
		"ugroups" => ['areas'],
		"order" => 0,
		"areas" => ["row1_column1" => "blue",],
		"apps" => ["form", "connectivity","contact"],
	];