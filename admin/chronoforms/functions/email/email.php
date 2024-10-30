<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "email",
		"title" => rl3("Email"),
		"icon" => "paper-plane",
		"desc" => rl3(""),
		"group" => "Basics",
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"paid" => 1,
	];