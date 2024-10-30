<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "delete_data",
		"title" => rl3("Delete Data"),
		"icon" => "trash",
		"desc" => rl3(""),
		"group" => "Database",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["form", "connectivity","contact"],
		"paid" => 1,
	];