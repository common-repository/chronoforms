<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "check_honeypot",
		"title" => rl3("Check Honeypot"),
		"icon" => "bar yellow",
		"desc" => rl3(""),
		"group" => "Security",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["xforms"],
	];