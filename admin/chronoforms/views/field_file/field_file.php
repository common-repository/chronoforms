<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "field_file",
		"title" => rl3("File"),
		"icon" => "upload",
		"desc" => rl3(""),
		"group" => "Fields",
		"ugroups" => ['inputs', 'files'],
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"config" => ["basics" => true],
		"paid" => 1,
	];