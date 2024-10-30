<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "redirect",
		"title" => rl3("Redirect"),
		"icon" => "directions",
		"desc" => rl3(""),
		"group" => "Basics",
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"paid" => 1,
	];