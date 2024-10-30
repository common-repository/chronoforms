<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "xlsx_simple",
		"title" => rl3("XLSX Export"),
		"icon" => "regular:file-excel",
		"desc" => rl3(""),
		"group" => "Advanced",
		"order" => 0,
		"areas" => [],
		"apps" => ["form", "connectivity"],
		"paid" => 1,
	];