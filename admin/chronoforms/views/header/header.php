<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "header",
		"title" => rl3("Header"),
		"icon" => "font",
		"desc" => rl3(""),
		"group" => "Page Blocks",
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"paid" => 1,
	];