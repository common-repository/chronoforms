<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "field_honeypot",
		"title" => rl3("Honeypot"),
		"icon" => "bar yellow",
		"desc" => rl3(""),
		"group" => "Security Fields",
		"ugroups" => ['security'],
		"order" => 0,
		"areas" => [],
		"apps" => ["xforms"],
	];