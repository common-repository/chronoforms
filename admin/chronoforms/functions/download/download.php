<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "download",
		"title" => rl3("Download"),
		"icon" => "download",
		"desc" => rl3(""),
		"group" => "Advanced",
		"order" => 0,
		"areas" => ["file_not_found" => "red",],
		"apps" => ["form", "connectivity"],
		"paid" => 1,
	];