<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "wfield_signature",
		"title" => rl3("Signature"),
		"icon" => "signature",
		"desc" => rl3(""),
		"group" => "Fields",
		"ugroups" => ['inputs'],
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity","contact"],
		"config" => ["basics" => true],
		"paid" => 1,
	];