<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "save_data",
		"title" => rl3("Save Data"),
		"icon" => "save",
		"desc" => rl3(""),
		"group" => "Database",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["form", "connectivity","contact"],
	];