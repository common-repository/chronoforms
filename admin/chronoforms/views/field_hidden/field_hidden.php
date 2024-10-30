<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "field_hidden",
		"title" => rl3("Hidden"),
		"icon" => "eye-slash",
		"desc" => rl3(""),
		"group" => "Fields",
		"ugroups" => ['inputs', 'hidden'],
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"config" => ["basics" => ['label' => '']],
	];