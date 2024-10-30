<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "sql_data",
		"title" => rl3("SQL Data"),
		"icon" => "server",
		"desc" => rl3(""),
		"group" => "Database",
		"ugroups" => ['dsources'],
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["form", "connectivity","contact"],
		"paid" => 1,
	];