<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "curl",
		"title" => rl3("cURL"),
		"icon" => "exchange-alt",
		"desc" => rl3(""),
		"group" => "Advanced",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["form", "connectivity","contact"],
		"paid" => 1,
	];