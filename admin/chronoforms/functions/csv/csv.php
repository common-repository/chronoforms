<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "csv",
		"title" => rl3("CSV Export"),
		"icon" => "file",
		"desc" => rl3(""),
		"group" => "Advanced",
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity"],
		"paid" => 1,
	];