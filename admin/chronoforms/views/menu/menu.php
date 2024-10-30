<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "menu",
		"title" => rl3("Menu"),
		"icon" => "th",
		"desc" => rl3(""),
		"group" => "Page Blocks",
		"order" => 0,
		// "areas" => ["cell1" => "blue","cell2" => "blue",],
		"apps" => ["form", "connectivity"],
	];