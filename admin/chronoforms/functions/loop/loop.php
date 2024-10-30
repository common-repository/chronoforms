<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "loop",
		"title" => rl3("Loop"),
		"icon" => "sync",
		"desc" => rl3(""),
		"group" => "Advanced",
		"order" => 0,
		"areas" => ["body" => "blue",],
		"apps" => ["form", "connectivity"],
	];