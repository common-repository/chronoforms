<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "text_node",
		"title" => rl3("Text Node"),
		"icon" => "pencil-alt",
		"desc" => rl3(""),
		"group" => "Page Blocks",
		"order" => 0,
		"ugroups" => ['actions'],
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
	];